<x-app-layout>
    <x-head-lable backhref="{{ route('store.index') }}">
        {{ __('Store Edit') }}
    </x-head-lable>

    <form method="POST" action="{{ route('store.update', $store->id) }}" enctype="multipart/form-data"
        class="border-4 border-white rounded-lg p-2 sm:p-4 ">
        @csrf
        @method('PUT')

        <div class="grid md:grid-cols-2 gap-4">
            <!-- product_name -->
            <div class="mt-4">
                <x-input-label for="product_name" :value="__('Product Name')" />
                <x-text-input id="product_name" class="block mt-1 w-full" type="text" name="product_name"
                    :value="old('product_name', $store->product_name)" placeholder="Enter product name" required autofocus />
                <x-input-error :messages="$errors->get('product_name')" class="mt-2" />
            </div>

            <!-- product_thumb -->
            <div class="mt-4">
                <x-input-label for="product_thumb" :value="__('Product Thumb')" />
                <x-text-input id="product_thumb"
                    class="block mt-1 w-full cursor-pointer text-md p-2 text-gray-900 border border-gray-300 rounded-lg bg-white"
                    type="file" name="product_thumb" accept="image/*" />
                <x-input-error :messages="$errors->get('product_thumb')" class="mt-2" />
                <img src="{{ $store->product_thumb }}" alt="Product Thumb" class="w-16 my-2">
            </div>

            <!-- product_photos -->
            <div class="mt-4">
                <x-input-label for="product_photos" :value="__('Product Photos (multiple)')" />
                <x-text-input id="product_photos"
                    class="block mt-1 w-full cursor-pointer text-md p-2 text-gray-900 border border-gray-300 rounded-lg bg-white"
                    type="file" name="product_photos[]" accept="image/*" multiple />
                <x-input-error :messages="$errors->get('product_photos')" class="mt-2" />
                <div class="grid sm:grid-cols-3  gap-4 mt-4 mb-2">
                    @foreach ($productPhotos as $photo)
                        <div class="relative group" id="productPhoto{{ $photo->id }}">
                            <img src="{{ asset($photo->url) }}" alt="Product Photo" class=" my-2">
                            <button type="button"
                                class="absolute -top-2 right-0 bg-red-500 text-white px-1 rounded-full delete-photo transition-opacity duration-200"
                                data-id="{{ $photo->id }}">
                                &times;
                            </button>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- video_preview -->
            <div class="mt-4">
                <x-input-label for="video_preview" :value="__('Video Preview')" />
                <x-text-input id="video_preview" class="block mt-1 w-full" type="text" name="video_preview"
                    :value="old('video_preview', $store->video_preview)" placeholder="Enter video preview" />
                <x-input-error :messages="$errors->get('video_preview')" class="mt-2" />
            </div>

            <!-- price -->
            <div class="mt-4">
                <x-input-label for="price" :value="__('Price')" />
                <x-text-input id="price" class="block mt-1 w-full" type="number" name="price" :value="old('price', $store->price)"
                    placeholder="Enter price" step="0.01" min="0" required />
                <x-input-error :messages="$errors->get('price')" class="mt-2" />
            </div>

            <!-- discount -->
            <div class="mt-4">
                <x-input-label for="discount" :value="__('Discount')" />
                <x-text-input id="discount" class="block mt-1 w-full" type="number" name="discount" :value="old('discount', $store->discount)"
                    placeholder="Enter discount" step="0.01" min="0" required />
                <x-input-error :messages="$errors->get('discount')" class="mt-2" />
            </div>

            <!-- total_stock -->
            <div class="mt-4">
                <x-input-label for="total_stock" :value="__('Total Stock')" />
                <x-text-input id="total_stock" class="block mt-1 w-full" type="number" name="total_stock"
                    :value="old('total_stock', $store->total_stock)" placeholder="Enter total stock" />
                <x-input-error :messages="$errors->get('total_stock')" class="mt-2" />
            </div>

            <!-- total_sale -->
            <div class="mt-4">
                <x-input-label for="total_sale" :value="__('Total Sale')" />
                <x-text-input id="total_sale" class="block mt-1 w-full" type="number" name="total_sale"
                    :value="old('total_sale', $store->total_sale)" placeholder="Enter total sale" />
                <x-input-error :messages="$errors->get('total_sale')" class="mt-2" />
            </div>

            <!-- tags -->
            <div class="mt-4">
                <x-input-label for="tags" :value="__('Tags')" />
                <x-text-input id="tags" class="block mt-1 w-full" type="text" name="tags" :value="old('tags', $store->tags)"
                    placeholder="Enter tags" />
                <x-input-error :messages="$errors->get('tags')" class="mt-2" />
            </div>

            <!-- short_description -->
            <div class="mt-4">
                <x-input-label for="short_description" :value="__('Short Description')" />
                <textarea id="short_description" name="short_description" rows="4"
                    class="block mt-1 w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200"
                    placeholder="Enter short description...">{{ old('short_description', $store->short_description) }}</textarea>
                <x-input-error :messages="$errors->get('short_description')" class="mt-2" />
            </div>
        </div>

        <!-- description -->
        <div class="mt-4">
            <x-input-label for="description" :value="__('Description')" />
            <textarea id="description" name="description" rows="4"
                class="block mt-1 w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200"
                placeholder="Enter description...">{{ old('description', $store->description) }}</textarea>
            <x-input-error :messages="$errors->get('description')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-200 focus:ring-4 focus:ring-gray-100 font-medium rounded-full text-sm px-5 py-2.5 me-2 mb-2 "
                href="{{ route('store.index') }}">
                {{ __('Cancel') }}
            </a>

            <button type="submit"
                class="text-white hover:text-blue-900 bg-blue-900 border border-blue-300 focus:outline-none hover:bg-blue-100 focus:ring-4 focus:ring-blue-100 font-medium rounded-full text-sm px-5 py-2.5 me-2 mb-2 ">{{ __('Update') }}</button>
        </div>
    </form>

    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('description', {
            height: 300,
        });
        $(document).on('click', '.delete-photo', function(e) {
            e.preventDefault();
            const id = $(this).data('id');
            $.ajax({
                url: '{{ route('store.productPhoto') }}',
                type: 'DELETE',
                data: {
                    _token: "{{ csrf_token() }}",
                    id: id
                },
                success: function(response) {
                    $(`#productPhoto${id}`).remove();
                }
            });
        });
    </script>
</x-app-layout>