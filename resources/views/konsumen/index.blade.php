<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Data Konsumen') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-10">
                <a href="{{ route('konsumen.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                    Tambah Konsumen
                </a>

                {{-- <form class="form" method="get" action="{{ route('search') }}">   
                    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-gray-300">Search</label>
                    <div class="relative">
                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                        </div>
                        <input type="search" id="search" class="block p-4 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Temukan Di Sini.." required="">
                        <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                    </div>
                </form>
                 --}}

                <form class="form" method="get" action="{{ route('search') }}">
                    <div class="flex items-center justify-center ">
                        <div class="flex border-2 border-gray-200 rounded">
                            <input type="text" name="search" id="search" class="px-4 py-2 w-80" placeholder="Temukan Di Sini..">
                            <button class="px-4 text-white bg-gray-600 border-l rounded">
                                Search
                            </button>
                        </div>
                    </div>
                </form>

                  <div class="flex flex-col mt-8">
                    <div class="py-2 -my-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                        <div class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">
                            <table class="min-w-full">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-2 text-sm text-gray-500">
                                No.
                            </th>
                            <th class="px-6 py-2 text-sm text-gray-500">
                                NIK
                            </th>
                            <th class="px-6 py-2 text-sm text-gray-500">
                                Nama
                            </th>
                            <th class="px-6 py-2 text-sm text-gray-500">
                                Alamat
                            </th>
                            <th class="px-6 py-2 text-sm text-gray-500">
                                Edit
                            </th>
                            <th class="px-6 py-2 text-sm text-gray-500">
                                Delete
                            </th>
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
        </div>
                {{ $konsumens->links() }}
            </div>
        </div>
    </div>
</x-app-layout>