@props(['href' => '#'])

<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg flex justify-between items-center p-3 my-3">
    <div class="text-gray-900 text-lg font-bold">
        {{ $slot }}
    </div>
    @if ($href != '#')
        <a href="{{ $href }}" class="px-4 py-2 text-white bg-blue-600 rounded hover:bg-blue-700">
            Add
        </a>
    @endif
</div>
