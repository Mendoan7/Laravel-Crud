<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Buat Data Baru') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-10">
               <form action="{{ route('konsumen.store') }}" method="POST">
                    @csrf
                    <div class="mb-6">
                        <label class="block">
                            <span class="text-gray-700 font-bold mb-2">NIK KTP</span>
                        </label>
                        <input id="nik" type="text" name="nik" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 @error('nik') border-red-500 @enderror">
                        @error('nik')
                        <div class="text-sm text-red-600">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label class="block">
                            <span class="text-gray-700 font-bold mb-2">Nama Konsumen</span>
                        </label>
                        <input id="name" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 @error('name') border-red-500 @enderror" 
                        type="text" name="name">
                        @error('name')
                        <div class="text-sm text-red-600">{{ $message }}</div>
                        @enderror
                    </div>
                        
                    <div class="mb-6">
                        <label class="block">
                            <span class="text-gray-700 font-bold mb-2">Alamat</span>
                        </label>
                        <input id="address" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 @error('address') border-red-500 @enderror"" 
                        type="text" name="address">
                        @error('address')
                        <div class="text-sm text-red-600">{{ $message }}</div>
                        @enderror
                    </div>
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" type="submit">
                            Simpan
                        </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
