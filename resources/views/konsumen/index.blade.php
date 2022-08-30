<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Data Konsumen') }}
        </h2>
    </x-slot>

<div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-10">
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-10">
    <header class="bg-white space-y-4 p-4 sm:px-8 sm:py-6 lg:p-4 xl:px-8 xl:py-6">
        <div class="flex items-center justify-between">
          <a href="{{ route('konsumen.create') }}" class="hover:bg-blue-400 group flex items-center rounded-md bg-blue-500 text-white text-sm font-medium pl-2 pr-3 py-2 shadow-sm">
            <svg width="20" height="20" fill="currentColor" class="mr-2" aria-hidden="true">
              <path d="M10 5a1 1 0 0 1 1 1v3h3a1 1 0 1 1 0 2h-3v3a1 1 0 1 1-2 0v-3H6a1 1 0 1 1 0-2h3V6a1 1 0 0 1 1-1Z" />
            </svg>
            Tambah Konsumen
          </a>
        </div>
        <form class="group relative" method="get" action="{{ route('search') }}">
            <label for="search" class="sr-only">Search</label>
          <svg width="20" height="20" fill="currentColor" class="absolute left-3 top-1/2 -mt-2.5 text-slate-400 pointer-events-none group-focus-within:text-blue-500" aria-hidden="true">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" />
          </svg>
          <input type="search" name="search" class="focus:ring-2 focus:ring-blue-500 focus:outline-none appearance-none w-full text-sm leading-6 text-slate-900 placeholder-slate-400 rounded-md py-2 pl-10 ring-1 ring-slate-200 shadow-sm" type="text" aria-label="Filter projects" placeholder="Search" required>
        </form>
      </header>

                {{-- <div class="flex space-x-4">
                    <div>
                        <a href="{{ route('konsumen.create') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2" placeholder="Search" required>
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
                                <input type="search" name="search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5" 
                                placeholder="Search" required>
                            </div>
                            <button type="submit" class="p-2.5 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                                <span class="sr-only">Search</span>
                            </button>
                        </form>
                    </div>
                </div> --}}

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