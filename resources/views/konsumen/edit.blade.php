<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
  </head>


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Data Konsumen') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
               <form action="{{ route('konsumen.update', $konsumen->id) }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="w-full">
                        <label class="text-gray-700 font-bold mb-2">
                            NIK KTP
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border 
                        border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none 
                        focus:bg-white focus:border-gray-500" type="text" name="nik" value="{{ old('nik', $konsumen->nik) }}" required>
                        
                        <label class="text-gray-700 font-bold mb-2">
                            Nama
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border 
                        border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none 
                        focus:bg-white focus:border-gray-500" type="text" name="name" value="{{ old('name', $konsumen->name) }}" required>
                        
                        <label class="text-gray-700 font-bold mb-2">
                            Alamat
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border 
                        border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none 
                        focus:bg-white focus:border-gray-500" type="text" name="address" value="{{ old('address', $konsumen->address) }}" required>
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">
                            Simpan
                        </button>
                    </div>
               </form>
            </div>
        </div>
    </div>
</x-app-layout>
