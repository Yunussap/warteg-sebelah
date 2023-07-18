@extends('layouts.app')

@section('title', 'Form Kategori')

@section('contents')
<style>
    .center {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
</style>

<div class="center">
<div class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700 items-center">
    <form class="space-y-6" action="{{ isset($kategori) ? route('kategori.tambah.update', $kategori->id) : route('kategori.tambah.simpan') }}" method="post" enctype="multipart/form-data">
    @csrf
        <h5 class="text-xl font-medium text-gray-900 dark:text-white">{{ isset($kategori) ? 'Edit Kategori' : 'Tambah Kategori' }}</h5>
        <div>
            <input type="text" id="nama" name="nama" value="{{ isset($kategori) ? $kategori->nama : '' }}"class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Nama Kategori" required>
        </div>


        <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>

    </form>
</div>
</div>

@endsection
