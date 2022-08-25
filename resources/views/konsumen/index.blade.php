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

                <form class="form" method="get" action="{{ route('search') }}">
                    <div class="input-group mb-3 mt-5">
                      <input type="text" name="search" id="search" placeholder="Search.."
                        class="block w-full pl-4 pr-10 text-sm leading-5 transition rounded-full shadow-sm border-secondary-300 bg-secondary-50 focus:bg-white focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                      <button type="submit"
                        class="absolute top-0 right-0 inline-flex items-center px-2 py-2 ml-1 mr-2 text-sm focus:outline-none">
                        <svg class="w-5 h-5 text-gray-500 transition dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 disabled:opacity-25"
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 20 20"
                          fill="currentColor">
                          <path fill-rule="evenodd"
                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                            clip-rule="evenodd" />
                        </svg>
                      </button>
                    </div>
                  </form>

                <table class="table-auto w-full mt-5">
                    <tr>
                        <th class="border px-4 py-2" width="10%">ID</th>
                        <th class="border px-4 py-2" width="30%">NIK</th>
                        <th class="border px-4 py-2" width="30%">Nama</th>
                        <th class="border px-4 py-2" width="20%">Alamat</th>
                        <th class="border px-4 py-2" width="10%">Aksi</th>
                    </tr>
                    @forelse ($konsumens as $konsumen)
                    <tr>
                        <td class="border px-4 py-2">{{ $konsumen->id }}</td>
                        <td class="border px-4 py-2">{{ $konsumen->nik }}</td>
                        <td class="border px-4 py-2">{{ $konsumen->name }}</td>
                        <td class="border px-4 py-2">{{ $konsumen->address }}</td>
                        <td class="border px-4 py-2">
                            <a href="{{ route('konsumen.edit', $konsumen->id) }}">Edit</a>
                            <form action="{{ route('konsumen.destroy', $konsumen->id) }}" method="POST" class="inline-block">
                            @csrf
                            @method('delete')
                            <button type="submit">
                                Delete
                            </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="border px-4 py-2 text-center">
                            Data Kosong
                        </td>
                    </tr>
                    @endforelse
                </table>
                {{ $konsumens->links() }}
            </div>
        </div>
    </div>
</x-app-layout>