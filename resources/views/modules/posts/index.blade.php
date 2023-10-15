<x-app-layout>
    <x-slot name="header">
        <div class="flex">
            <div class="flex w-full">
                <h2 class="flex items-start font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Posts') }}
                </h2>
            </div>

            <div class="w-auto">
                <div class="flex flex-reverse">
                    <a class="px-4 py-2 bg-blue-500 rounded text-white text-sm flex items-center justify-center" href="{{ route('posts.create') }}">
                        Create
                    </a>
                </div>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-4 rounded shadow-md border border-t-4 border-t-blue-400 bg-white ">
            <table class="w-full table-auto">
                <thead>
                    <tr>
                        <td class="w-1/5 border border-gray-300 rounded px-3 py-3">Title</td>
                        <td class="w-3/5 border border-gray-300 rounded px-3 py-3">Description</td>
                        <td class="w-1/5 border border-gray-300 rounded px-3 py-3">Author</td>
                        <td class="border border-gray-300 rounded px-3 py-3">Options</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($resources as $resource)
                        <tr>
                            <td class="border border-gray-300 rounded px-3 py-3">
                                <a class="block text-blue-700" href="{{ route('posts.show', $resource->id) }}">
                                    {{ $resource->title }}
                                </a>
                            </td>
                            <td class="border border-gray-300 rounded px-3 py-3">{{ $resource->description }}</td>
                            <td class="border border-gray-300 rounded px-3 py-3">{{ $resource->author }}</td>
                            <td class="border border-gray-300 rounded px-3 py-3">
                                <div class="flex gap-4">
                                    <a class="bg-blue-500 px-3 py-1 text-sm text-white" href="{{ route('posts.edit', $resource->id) }}">Edit</a>

                                    <form action="{{ route('posts.destroy', $resource->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="bg-red-500 px-3 py-1 text-sm text-white">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{-- here should be a list or datatable --}}
    </div>
</x-app-layout>
