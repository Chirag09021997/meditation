/* ------------------------------------------------------------------------------
 *
 *  # Custom JS code
 *
 *  Place here all your custom js. Make sure it's loaded after app.js
 *
 * ---------------------------------------------------------------------------- */

function getCookie(name) {
    const value = `; ${document.cookie}`;
    const parts = value.split(`; ${name}=`);
    if (parts.length === 2) return parts.pop().split(';').shift();
    return null;
}


$(document).ready(function () {
    function navbarCartItems() {
        const cart = JSON.parse(localStorage.getItem("cart")) || [];
        const cartList = $(".cart_list");
        cartList.empty();
        let totalAmount = 0;
        let price = 0, discount = 0, symbol = "";
        const selectedCountry = getCookie("selectedCountry") || "India";


        // id: productId,
        // name: productName,
        // thumb: productThumb,
        // inrprice: inrPrice,
        // inrdiscount: inrDiscount,
        // inrdelivery_charge: inrDeliveryCharge,
        // inrsymbol: inrSymbol,
        // usdprice: usdPrice,
        // usddiscount: usdDiscount,
        // usddelivery_charge: usdDeliveryCharge,
        // usdsymbol: usdSymbol,
        // canadaprice: canadaPrice,
        // canadadiscount: canadaDiscount,
        // canadadelivery_charge: canadaDeliveryCharge,
        // canadasymbol: canadaSymbol,
        // quantity: quantity,

        cart.forEach((item) => {

            if (selectedCountry === "India") {
                price = item.inrprice;
                discount = item.inrdiscount;
                symbol = item.inrsymbol;
            } else if (selectedCountry === "United States") {
                price = item.usdprice;
                discount = item.usddiscount;
                symbol = item.usdsymbol;
            } else if (selectedCountry === "Canada") {
                price = item.canadaprice;
                discount = item.canadadiscount;
                symbol = item.canadasymbol;
            } else {
                // Default case if no country matches
                price = item.inrprice || 0;
                discount = item.inrdiscount || 0;
                symbol = item.inrsymbol || "₹";
            }
            let finalPrice = price - item.inrdiscount;
            totalAmount += finalPrice * item.quantity;

            cartList.append(`
                <li data-id="${item.id}">
                    <a href="#" class="item_remove"><i class="fa fa-times"></i></a>
                    <a href="#"><img src="${item.thumb}" alt="cart_thumb"> ${item.name}</a>
                    <span class="cart_quantity">${item.quantity} x <span class="cart_amount"> <span class="price_symbole">${symbol}</span>${finalPrice}</span></span>
                </li>
            `);
        });
        $(".cart_total .cart_amount").text(`${symbol}${totalAmount.toFixed(2)}`);
        $(".cart_count").text(cart.length);
    }

    navbarCartItems();

    $(".add-to-cart-btn").on("click", function (e) {
        e.preventDefault();
        const store = $(this).data("store");

        const productId = store.id;
        const productName = store.product_name;
        const productThumb = store.product_thumb;

        const financeList = JSON.parse(store.finance_product);
        const indiaFinance = financeList.find(item => item.country_name === "India");
        const usdFinance = financeList.find(item => item.country_name === "United States");
        const canadaFinance = financeList.find(item => item.country_name === "Canada");

        // Extract price and discount from finance data
        let inrPrice = parseFloat(indiaFinance.price) || 0;
        let inrDiscount = parseFloat(indiaFinance.discount) || 0;
        let inrDeliveryCharge = parseFloat(indiaFinance.delivery_charge) || 0;
        let inrSymbol = indiaFinance.symbol;

        let usdPrice = parseFloat(usdFinance.price) || 0;
        let usdDiscount = parseFloat(usdFinance.discount) || 0;
        let usdDeliveryCharge = parseFloat(usdFinance.delivery_charge) || 0;
        let usdSymbol = usdFinance.symbol;

        let canadaPrice = parseFloat(canadaFinance.price) || 0;
        let canadaDiscount = parseFloat(canadaFinance.discount) || 0;
        let canadaDeliveryCharge = parseFloat(canadaFinance.delivery_charge) || 0;
        let canadaSymbol = canadaFinance.symbol;

        // let discountAmount = (inrPrice * productDiscount) / 100;
        var quantity = parseInt($("#quantity").val()) || 1;

        let cart = JSON.parse(localStorage.getItem("cart")) || [];
        let existingProduct = cart.find((item) => item.id === productId);
        if (existingProduct) {
            existingProduct.quantity += quantity;
        } else {
            cart.push({
                id: productId,
                name: productName,
                thumb: productThumb,
                inrprice: inrPrice,
                inrdiscount: inrDiscount,
                inrdelivery_charge: inrDeliveryCharge,
                inrsymbol: inrSymbol,
                usdprice: usdPrice,
                usddiscount: usdDiscount,
                usddelivery_charge: usdDeliveryCharge,
                usdsymbol: usdSymbol,
                canadaprice: canadaPrice,
                canadadiscount: canadaDiscount,
                canadadelivery_charge: canadaDeliveryCharge,
                canadasymbol: canadaSymbol,
                quantity: quantity,
            });
        }
        localStorage.setItem("cart", JSON.stringify(cart));
        navbarCartItems();
    });

    $(".cart_list").on("click", ".item_remove", function (e) {
        e.preventDefault();
        const itemId = $(this).closest("li").data("id");
        let cart = JSON.parse(localStorage.getItem("cart")) || [];
        cart = cart.filter((item) => item.id !== itemId);
        localStorage.setItem("cart", JSON.stringify(cart));
        navbarCartItems();
    });

    function renderCart() {
        let cartItems = JSON.parse(localStorage.getItem("cart")) || [];
        let coupon = JSON.parse(localStorage.getItem("coupon")) || {};

        $("#cart-items").empty();
        if (cartItems.length === 0) {
            $("#cart-items").append(
                `<tr><td colspan="6">Your cart is empty.</td></tr>`
            );
            return;
        }

        let discount = 0;
        let prices = 0;
        let couponDiscount = 0;
        cartItems.forEach((item, index) => {
            const discountedPrice = item.price - item.discount;
            prices += item.price * item.quantity;
            discount += item.discount * item.quantity;
            $("#cart-items").append(`
                <tr>
                    <td class="product-thumbnail"><img src="${item.thumb
                }" alt="${item.name}" style="width:70px;height:70px;"></td>
                    <td class="product-name">${item.name}</td>
                    <td class="product-price">$${discountedPrice.toFixed(
                    2
                )}</td>
                    <td class="product-quantity">
                        <button class="minus" data-index="${index}">-</button>
                        <input type="text" value="${item.quantity
                }" class="qty w-25" min="1" readonly>
                        <button class="plus" data-index="${index}">+</button>
                    </td>
                    <td class="product-subtotal">$${(
                    discountedPrice * item.quantity
                ).toFixed(2)}</td>
                    <td class="product-remove"><button class="remove" data-index="${index}">×</button></td>
                </tr>
            `);
        });
        let finalTotal = prices - discount;
        if (coupon?.id > 0) {
            if (coupon?.type == "Percentage") {
                couponDiscount += (finalTotal * coupon?.value) / 100;
            } else {
                couponDiscount += coupon?.value;
            }
            $("#apply_coupon").val(coupon?.coupon_code);
        }
        finalTotal -= couponDiscount;
        discount += couponDiscount;
        $(".cart_sub_total").text(`$${prices.toFixed(2)}`);
        $(".cart_discount_total").text(`$${discount.toFixed(2)}`);
        $(".cart_final_total").text(`$${finalTotal.toFixed(2)}`);
        navbarCartItems();
    }

    renderCart();

    // Increase quantity
    $(document).on("click", ".plus", function () {
        let cartItems = JSON.parse(localStorage.getItem("cart")) || [];
        const index = $(this).data("index");
        cartItems[index].quantity++;
        localStorage.setItem("cart", JSON.stringify(cartItems));
        renderCart();
    });

    // Decrease quantity, minimum of 1
    $(document).on("click", ".minus", function () {
        let cartItems = JSON.parse(localStorage.getItem("cart")) || [];
        const index = $(this).data("index");
        if (cartItems[index].quantity > 1) {
            cartItems[index].quantity--;
            localStorage.setItem("cart", JSON.stringify(cartItems));
            renderCart();
        }
    });

    // Remove item from cart
    $(document).on("click", ".remove", function () {
        let cartItems = JSON.parse(localStorage.getItem("cart")) || [];
        const index = $(this).data("index");
        cartItems.splice(index, 1);
        localStorage.setItem("cart", JSON.stringify(cartItems));
        renderCart();
    });

    $(document).on("click", ".add_apply_coupon", function () {
        var coupon = $("#apply_coupon").val().trim();
        if (coupon.length > 0) {
            $.ajax({
                url: "/api/apply-coupon",
                type: "POST",
                data: JSON.stringify({ coupon: coupon }),
                contentType: "application/json",
                success: function (response) {
                    if (response.success) {
                        localStorage.setItem(
                            "coupon",
                            JSON.stringify(response.data)
                        );
                        renderCart();
                        checkoutProduct();
                        alert("Apply coupon successFully.");
                    } else {
                        alert("Coupon not valid.");
                    }
                },
                error: function (error) {
                    console.error("Error applying coupon:", error);
                    alert("Failed to apply coupon. Please try again.");
                },
            });
        }
    });

    $(document).on("click", ".clear_apply_coupon", function () {
        localStorage.removeItem("coupon");
        $("#apply_coupon").val("");
        renderCart();
        checkoutProduct();
    });

    // Checkout Page
    function checkoutProduct() {
        let cartItems = JSON.parse(localStorage.getItem("cart")) || [];
        let coupon = JSON.parse(localStorage.getItem("coupon")) || {};
        $("#checkout_product_list").empty();
        if (cartItems.length === 0) {
            $("#cart-items").append(
                `<tr><td colspan="2">Your cart is empty.</td></tr>`
            );
            return;
        }
        let currencySymbol = "";
        let discount = 0;
        let prices = 0;
        let couponDiscount = 0;
        let deliveryCharge = 0;

        const selectedCountry = getCookie("selectedCountry") || "India";

        cartItems.forEach((item, index) => {

            if (selectedCountry === "India") {
                prices = item.inrprice;
                discount = item.inrdiscount;
                currencySymbol = item.inrsymbol;
                deliveryCharge=item.inrdelivery_charge;
            } else if (selectedCountry === "United States") {
                prices = item.usdprice;
                discount = item.usddiscount;
                currencySymbol = item.usdsymbol;
                deliveryCharge = item.usddelivery_charge;
            } else if (selectedCountry === "Canada") {
                prices = item.canadaprice;
                discount = item.canadadiscount;
                currencySymbol = item.canadasymbol;
                deliveryCharge = item.canadadelivery_charge;
            } else {
                // Default case if no country matches
                prices = item.inrprice || 0;
                discount = item.inrdiscount || 0;
                currencySymbol = item.inrsymbol || "₹";
                deliveryCharge = item.inrdelivery_charge;
            }

            const discountedPrice = (prices - discount) * item.quantity;
            prices += prices * item.quantity;
            discount += discount * item.quantity;
            $("#checkout_product_list").append(
                `<tr>
                <td>${item.name} <span class="product-qty">x ${item.quantity}</span></td>
                <td>${currencySymbol}${discountedPrice}</td>
            </tr>`
            );
        });

        if (coupon?.id > 0) {
            if (coupon?.type == "Percentage") {
                couponDiscount += (finalTotal * coupon?.value) / 100;
            } else {
                couponDiscount += coupon?.value;
            }
            $("#coupon_code").val(coupon?.coupon_code);
        }

        var finalDiscount = discount + couponDiscount;
        var finalTotal = (prices - finalDiscount)+deliveryCharge;
        
        $("#checkout-sub-total").text(prices.toFixed(2));
        $("#checkout-total").text(finalTotal.toFixed(2));
        $("#checkout-delivery-charge").text(finalDiscount.toFixed(2));
        $("#checkout-discount-total").text(`- ${currencySymbol}${finalDiscount.toFixed(2)}`);
        $("#checkout-delivery-charges").text(`+ ${currencySymbol}${deliveryCharge.toFixed(2)}`);
    }
    checkoutProduct();

    $("#checkoutSubmit").on("submit", function (e) {
        e.preventDefault();
        const differentAddress = $("#differentaddress").is(":checked");
        if (!differentAddress) {
            const fields = [
                "fname",
                "lname",
                "country",
                "address",
                "address2",
                "city",
                "state",
                "zipcode",
            ];
            fields.forEach((field) => {
                $(`#s_${field}`).val($(`#b_${field}`).val());
            });
        }
        const cart = JSON.parse(localStorage.getItem("cart")) || [];
        const cartItems = cart.map((item) => ({
            id: item.id,
            quantity: item.quantity,
        }));
        $("#cartItemsInput").val(JSON.stringify(cartItems));
        this.submit();
    });

    $("#logoutBtn").on("click", function (e) {
        e.preventDefault();
        if (confirm("Are you sure you want to logout?")) {
            $("#logoutForm").submit();
        }
    });

    $("#cancelOrderBtn").on("click", function (e) {
        e.preventDefault();
        var order_Id = $(this).data("id");
        if (confirm("Are you sure you want to cancel order?")) {
            $("#order_id").val(order_Id);
            $("#cancelOrderForm").submit();
        }
    });

    $(document).on("click", ".remove", function () {
        var $row = $(this).closest("tr");
        $row.remove();
    });
    $(document).on("input", ".qty", function () {
        var index = $(this).closest(".order-item").index();
        var quantity = $(this).val();
        $('input[name="cartItems[' + index + '][quantity]"]').val(quantity);
    });

    $(document).on("click", ".minusOrder, .plusOrder", function () {
        var $quantityInput = $(this).siblings("input.qty");
        var $productRow = $(this).closest("tr");
        var price = parseFloat(
            $productRow.find(".product-price").data("price")
        );
        var index = $(this).closest(".order-item").index();

        var quantity = parseInt($quantityInput.val()) || 1;

        if ($(this).hasClass("minusOrder") && quantity > 1) {
            quantity -= 1;
        } else if ($(this).hasClass("plusOrder")) {
            quantity += 1;
        }

        $quantityInput.val(quantity);
        $('input[name="cartItems[' + index + '][quantity]"]').val(quantity);
        var subtotal = price * quantity;
        $productRow.find(".product-subtotal").text(subtotal.toFixed(2)); // Update
        updateCartTotal();
    });

    function updateCartTotal() {
        var total = 0;
        $(".product-subtotal").each(function () {
            total += parseFloat($(this).text()) || 0;
        });
        $(".cart-total").text("$" + total.toFixed(2));
    }
});


$(document).ready(function () {
    var audio = new Audio(); // Single audio instance
    var hasClicked = false;  // Track the first click

    // Allow autoplay after first click anywhere
    $(document).one('click', function () {
        hasClicked = true;
    });

    // Play audio when hovering
    $('.zoom-img').on('mouseenter', function () {
        if (!hasClicked) return; // If no click has happened, don't play audio

        var soundPath = $(this).data('sound');
        if (soundPath) {
            audio.src = soundPath;
            audio.loop = true;  // Loop the audio while hovering
            audio.play().catch(function (error) {
                console.log("Autoplay blocked:", error);  // Handle autoplay blocking
            });
        }
    });

    // Stop the audio when leaving hover
    $('.zoom-img').on('mouseleave', function () {
        audio.pause();
        audio.currentTime = 0;  // Reset the audio when cursor leaves
    });
});

document.addEventListener("DOMContentLoaded", function () {
    document.querySelector(".carousel-control-prev").style.backgroundColor = "#23579D";
    document.querySelector(".carousel-control-next").style.backgroundColor = "#23579D";

});
