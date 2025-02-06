<x-app-layout>
    <x-head-lable backhref="{{ route('certificate.index') }}">
        {{ __('Certificate Show') }}
    </x-head-lable>

    <div class="border-4 border-white rounded-lg p-2 sm:p-4">
        <div class="grid md:grid-cols-2 gap-4">
            <!-- image -->
            <div class="mt-4">
                <x-input-label for="image" :value="__('Image')" />
                <img src="{{ $certificate->image }}" alt="upload" class="w-16 my-2">
            </div>
        </div>
    </div>
</x-app-layout>
