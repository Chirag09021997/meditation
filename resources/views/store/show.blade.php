<x-app-layout>
    <x-head-lable>
        {{ __('Music Show') }}
    </x-head-lable>

    <div class="border-4 border-white rounded-lg p-2 sm:p-4">
        <div class="grid md:grid-cols-2 gap-4">
            <!-- product_name -->
            <div class="mt-4">
                <x-input-label for="product_name" :value="__('Product Name')" />
                <x-text-input id="product_name" class="block mt-1 w-full" type="text" :value="old('product_name', $store->product_name)" disabled />
            </div>

            <!-- product_thumb -->
            <div class="mt-4">
                <x-input-label for="product_thumb" :value="__('Product Thumb')" />
                <img src="{{ $store->product_thumb }}" alt="thumb upload" class="w-16 my-2">
            </div>

            <!-- product_photos -->
            <div class="mt-4">
                <x-input-label for="product_photos" :value="__('Product Photos (multiple)')" />
                <div class="grid sm:grid-cols-3 md:grid-cols-5 gap-4">
                    @foreach ($productPhotos as $photo)
                        <img src="{{ $photo->url }}" alt="Product Photos" class="w-16 my-2">
                    @endforeach
                </div>
            </div>

            <!-- video_preview -->
            <div class="mt-4">
                <x-input-label for="video_preview" :value="__('Video Preview')" />
                <x-text-input id="video_preview" class="block mt-1 w-full" type="text" :value="old('video_preview', $store->video_preview)" />
            </div>

            <!-- price -->
            <div class="mt-4">
                <x-input-label for="price" :value="__('Price')" />
                <x-text-input id="price" class="block mt-1 w-full" type="number" :value="old('price', $store->price)" disabled />
            </div>

            <!-- discount -->
            <div class="mt-4">
                <x-input-label for="discount" :value="__('Discount')" />
                <x-text-input id="discount" class="block mt-1 w-full" type="number" :value="old('discount', $store->discount)" disabled />
            </div>

            <!-- total_stock -->
            <div class="mt-4">
                <x-input-label for="total_stock" :value="__('Total Stock')" />
                <x-text-input id="total_stock" class="block mt-1 w-full" type="number" :value="old('total_stock', $store->total_stock)" disabled />
            </div>

            <!-- total_sale -->
            <div class="mt-4">
                <x-input-label for="total_sale" :value="__('Total Sale')" />
                <x-text-input id="total_sale" class="block mt-1 w-full" type="number" :value="old('total_sale', $store->total_sale)" />
            </div>

            <!-- tags -->
            <div class="mt-4">
                <x-input-label for="tags" :value="__('Tags')" />
                <x-text-input id="tags" class="block mt-1 w-full" type="text" :value="old('tags', $store->tags)" />
            </div>

            <!-- short_description -->
            <div class="mt-4">
                <x-input-label for="short_description" :value="__('Short Description')" />
                <textarea id="short_description"rows="4"
                    class="block mt-1 w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200">{{ old('short_description', $store->short_description) }}</textarea>
            </div>
        </div>

        <!-- description -->
        <div class="mt-4">
            <x-input-label for="description" :value="__('Description')" />
            <textarea id="description" name="description" rows="4"
                class="block mt-1 w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200">{{ old('description', $store->description) }}</textarea>
        </div>
    </div>
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('description', {
            height: 300,
        });
    </script>
</x-app-layout>
