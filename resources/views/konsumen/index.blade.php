<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Data Konsumen') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-10">

                <div class="flex space-x-4">
                    <div>
                        <a href="{{ route('konsumen.create') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">
                            Tambah Konsumen 
                        </a>
                    </div>
                    <div>
                        <form class="flex items-center" method="get" action="{{ route('search') }}">   
                            <label for="search" class="sr-only">Search</label>
                            <div class="relative mx-auto">
                                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                                </div>
                                <input type="search" name="search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5" placeholder="Search" required>
                            </div>
                            <button type="submit" class="p-2.5 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                                <span class="sr-only">Search</span>
                            </button>
                        </form>
                    </div>
                </div>

                {{-- Search --}}
                {{-- <form class="flex items-center" method="get" action="{{ route('search') }}">   
                    <label for="search" class="sr-only">Search</label>
                    <div class="relative mx-auto">
                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                        </div>
                        <input type="search" name="search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5" placeholder="Search" required>
                    </div>
                    <button type="submit" class="p-2.5 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                        <span class="sr-only">Search</span>
                    </button>
                </form> --}}

                {{-- Table --}}
        <div class="flex flex-col mt-8">
            <div class="py-2 -my-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                <div class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">
                    <table class="min-w-full">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-2 text-sm text-gray-500">No.</th>
                                <th class="px-6 py-2 text-sm text-gray-500">NIK</th>
                                <th class="px-6 py-2 text-sm text-gray-500">Nama</th>
                                <th class="px-6 py-2 text-sm text-gray-500">Alamat</th>
                                <th class="px-6 py-2 text-sm text-gray-500">Edit</th>
                                <th class="px-6 py-2 text-sm text-gray-500">Delete</th>
                            </tr>
                        </thead>
                        @forelse ($konsumens as $konsumen)
                        <tbody class="bg-white divide-y divide-gray-300">
                            <tr class="whitespace-nowrap">
                                <td class="px-4 py-2 text-gray-900">{{ ++$i }}</td>
                                <td class="px-4 py-2 text-gray-900">{{ $konsumen->nik }}</td>
                                <td class="px-4 py-2 text-gray-900">{{ $konsumen->name }}</td>
                                <td class="px-4 py-2 text-gray-900">{{ $konsumen->address }}</td>
                                <td class="px-6 py-4">
                                    <a href="{{ route('konsumen.edit', $konsumen->id) }}" class="px-4 py-1 text-sm text-blue-600 bg-blue-200 rounded-full">Edit</a>
                                </td>
                                <td class="px-6 py-4">
                                    <form action="{{ route('konsumen.destroy', $konsumen->id) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                        <button type="submit" class="px-4 py-1 text-sm text-red-400 bg-red-200 rounded-full">
                                            delete
                                        </button>
                                    </form>
                                </td>
                            @empty
                                <td colspan="5" class="border px-4 py-2 text-center">
                                    Data Kosong
                                </td>
                        @endforelse
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
                {{ $konsumens->links() }}
            </div>
        </div>
    </div>
</x-app-layout>