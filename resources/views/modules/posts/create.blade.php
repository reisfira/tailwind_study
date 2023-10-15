<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts Create') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-4 rounded shadow-md border border-t-4 border-t-blue-400 bg-white ">
            <form action="{{ route('posts.store') }}" method="post">
                @csrf

                <div class="flex gap-4">
                    <div class="w-1/4 flex items-center">
                        <div class="flext-col">
                            <h1 class="text-md font-extrabold">Book Information</h1>
                            <h2 class="text-sm ">All about the book</h2>
                        </div>
                    </div>
                    <div class="h-auto border border-slate-800"></div>
                    <div class="w-3/4">
                        <div class="flex mb-4">
                            <label class="w-1/4 flex items-center text-gray-500" for="title">Title</label>
                            <input class="w-3/4 bg-gray-50 border-2 border-gray-200 rounded" type="text" name="title" id="title">
                        </div>

                        <div class="flex mb-4">
                            <label class="w-1/4 flex items-center text-gray-500" for="title">Description</label>
                            <input class="w-3/4 bg-gray-50 border-2 border-gray-200 rounded" type="text" name="description" id="description">
                        </div>
                    </div>
                </div>

                <div class="mt-10"></div>
                <div class="flex gap-4">
                    <div class="w-1/4 flex items-center">
                        <div class="flext-col">
                            <h1 class="text-md font-extrabold">Author Information</h1>
                            <h2 class="text-sm ">All about the writer</h2>
                        </div>
                    </div>
                    <div class="h-auto border border-slate-800"></div>
                    <div class="w-3/4">
                        <div class="flex mb-4">
                            <label class="w-1/4 flex items-center text-gray-500" for="title">Author Name</label>
                            <input class="w-3/4 bg-gray-50 border-2 border-gray-200 rounded" type="text" name="author" id="author" value="{{ auth()->user()->name }}">
                        </div>
                    </div>
                </div>

                <div class="flex flex-row-reverse">
                    <button type="submit" class="px-4 py-2 bg-blue-500 rounded text-white text-md flex items-center justify-center">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
