<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h1 class="text-2xl">
                <span class="font-bold text-blue-700">Grid</span>: A switch from bootstrap to tailwind
            </h1>

            <div class="mt-8"></div>
            <h2 class="text-lg">
                <span class="font-bold text-blue-700">Learning Width</span>: Manipulating elements using w-* classes 
            </h2>
            <div class="flex gap-x-4 mb-4">
                <div class="w-3/4 h-16 rounded-md bg-green-600 text-white flex items-center justify-center text-2xl font-extrabold">1</div>
                <div class="w-1/4 h-16 rounded bg-yellow-400 flex items-center justify-center text-2xl font-extrabold">2</div>
            </div>
            <div class="flex flex-row-reverse gap-x-4 mb-4">
                <div class="w-16 h-16 rounded bg-blue-500 text-white flex items-start justify-end pr-3 text-2xl font-extrabold">3</div>
                <div class="w-32 h-16 rounded bg-blue-500 text-white flex items-end justify-start pl-3 text-2xl font-extrabold">4</div>
                <div class="w-full h-16 rounded bg-blue-500 text-white flex items-center justify-center text-2xl font-extrabold">5</div>
            </div>

            <div class="mt-8"></div>
            <h2 class="text-lg">
                <span class="font-bold text-blue-700">Learning Grid</span>: Simulating bootstrap grid (12 columns)
            </h2>

            <div class="grid grid-cols-12 gap-x-2">
                <div class="w-full h-32 rounded bg-blue-500 text-white flex items-center justify-center text-2xl font-extrabold">1</div>
                <div class="w-auto h-16 rounded bg-blue-500 text-white flex items-center justify-center text-2xl font-extrabold">2</div>
                <div class="rounded bg-blue-500 text-white flex items-center justify-center text-2xl font-extrabold">3</div>
                <div class="w-16 h-16 rounded bg-blue-500 text-white flex items-center justify-center text-2xl font-extrabold">4</div>
                <div class="w-16 h-16 rounded bg-blue-500 text-white flex items-center justify-center text-2xl font-extrabold">5</div>
                <div class="w-16 h-16 rounded bg-blue-500 text-white flex items-center justify-center text-2xl font-extrabold">6</div>
                <div class="w-16 h-16 rounded bg-blue-500 text-white flex items-center justify-center text-2xl font-extrabold">7</div>
                <div class="w-16 h-16 rounded bg-blue-500 text-white flex items-center justify-center text-2xl font-extrabold">8</div>
                <div class="w-16 h-16 rounded bg-blue-500 text-white flex items-center justify-center text-2xl font-extrabold">9</div>
                <div class="w-16 h-16 rounded bg-blue-500 text-white flex items-center justify-center text-2xl font-extrabold">10</div>
                <div class="w-16 h-16 rounded bg-blue-500 text-white flex items-center justify-center text-2xl font-extrabold">11</div>
                <div class="w-16 h-16 rounded bg-blue-500 text-white flex items-center justify-center text-2xl font-extrabold">12</div>
            </div>

            <div class="mt-8"></div>
            <h2 class="text-lg">
                <span class="font-bold text-blue-700">Learning Grid</span>: Simulating bootstrap grid (6 columns)
            </h2>

            {{-- grid-cols-n | 0 > n > 13 --}}
            <div class="grid grid-cols-6 gap-2">
                @php($count_of_elements = 20)
                {{-- by default without w-full or w-auto, within grid, things will automatically fill --}}
                @for ($i = 1; $i <= $count_of_elements; $i++)
                    <div class="rounded bg-blue-500 text-white flex items-center justify-center text-2xl font-extrabold">{{ $i }}</div>
                @endfor
            </div>
        </div>
    </div>
</x-app-layout>
