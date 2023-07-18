@extends('layouts.app')

@section('title', 'Form Menu')

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
    <form class="space-y-6" action="{{ isset($menu) ? route('menu.tambah.update', $menu->id) : route('menu.tambah.simpan') }}" method="post" enctype="multipart/form-data">
    @csrf
        <h5 class="text-xl font-medium text-gray-900 dark:text-white">{{ isset($menu) ? 'Edit Menu' : 'Tambah Menu' }}</h5>
        <div class="form-group">
              <label for="image">Image</label>
              <input type="file" class="form-control" id="image" name="image" accept="image/jpeg,image/jpg,image/png">
            </div>
        <div>
            <input type="text"  id="nama_menu" name="nama_menu" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Nama Menu" required>
        </div>
        <div>
          

<select id="id_kategori" name="id_kategori" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
  <option value="" selected disabled hidden>-- Pilih Kategori --</option>
                @foreach ($kategori as $row)
                  <option value="{{ $row->id }}" {{ isset($menu) ? ($menu->id_kategori == $row->id ? 'selected' : '') : '' }}>{{ $row->nama }}</option>
                @endforeach
</select>

        </div>
        <div>
            <input type="number" name="harga" id="harga" placeholder="Harga Menu" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" value="{{ isset($menu) ? $menu->harga : '' }}" required>
          </div>

        <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>

    </form>
</div>
</div>

@endsection
