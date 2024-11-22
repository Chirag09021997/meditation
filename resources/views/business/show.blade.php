<x-app-layout>
    <x-head-lable backhref="{{ route('business.index') }}">
        {{ __('Business Show') }}
    </x-head-lable>

    <div class="border-4 border-white rounded-lg p-2 sm:p-4">
        <div class="grid gap-4">
            <!-- name -->
            <div class="mt-4">
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" :value="old('name', $business->name)" />
            </div>
        </div>
    </div>
</x-app-layout>
