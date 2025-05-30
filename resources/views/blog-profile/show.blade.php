<x-app-layout>
    <x-head-lable backhref="{{ route('blog-profile.index') }}">
        {{ __('Blog Prifile Show') }}
    </x-head-lable>

    <div class="border-4 border-white rounded-lg p-2 sm:p-4">
        <div class="grid md:grid-cols-2 gap-4">
            <!-- name -->
            <div class="mt-4">
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name', $blogProfile->name)" />
            </div>

            <!-- profile -->
            <div class="mt-4">
                <x-input-label for="profile" :value="__('Profile')" />
                <img src="{{ $blogProfile->profile }}" alt="profile" class="w-20 my-2">
            </div>
        </div>

    </div>
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('about', {
            height: 300,
        });
    </script>
</x-app-layout>
