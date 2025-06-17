<x-app-layout>
    <x-head-lable backhref="{{ route('blog-profile.index') }}">
        {{ __('Blog Prifile Edit') }}
    </x-head-lable>

    <form method="POST" action="{{ route('blog-profile.update', $blogProfile->id) }}" enctype="multipart/form-data"
        class="border-4 border-white rounded-lg p-2 sm:p-4 ">
        @csrf
        @method('PUT')
        <div class="grid md:grid-cols-2 gap-4">
            <!-- name -->

            <div class="mt-4">
            <div class="flex items-center space-x-1">
                    <x-input-label for="name" :value="__('Name')" />
                    <span class="text-red-500">*</span>
                </div>
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name', $blogProfile->name)"
                    placeholder="Enter name" required autofocus />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- profile -->
            <div class="mt-4">
                <x-input-label for="profile" :value="__('Profile (200*200)')" />
                <x-text-input id="profile"
                    class="block mt-1 w-full cursor-pointer text-md p-2 text-gray-900 border border-gray-300 rounded-lg bg-white"
                    type="file" name="profile" accept="image/*" />
                <x-input-error :messages="$errors->get('profile')" class="mt-2" />
                <img src="{{ $blogProfile->profile }}" alt="profile" class="w-16 my-2">
            </div>

         

        <div class="flex items-center justify-end mt-4">
            <a class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-200 focus:ring-4 focus:ring-gray-100 font-medium rounded-full text-sm px-5 py-2.5 me-2 mb-2 "
                href="{{ route('blog-profile.index') }}">
                {{ __('Cancel') }}
            </a>

            <button type="submit"
                class="text-white hover:text-blue-900 bg-blue-900 border border-blue-300 focus:outline-none hover:bg-blue-100 focus:ring-4 focus:ring-blue-100 font-medium rounded-full text-sm px-5 py-2.5 me-2 mb-2 ">{{ __('Update') }}</button>
        </div>
    </form>
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('about', {
            height: 300,
        });
    </script>
</x-app-layout>
