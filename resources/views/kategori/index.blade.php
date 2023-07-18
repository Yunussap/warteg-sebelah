@extends('layouts.app')

@section('title', 'Data Kategori')

@section('contents')

  <main class="container mx-auto mt-4 py-8">
    @if (auth()->user()->level == 'Admin')

<!-- Bagian tombol Tambah Kategori dan Menu -->
<div class="relative bottom-0 left-0 text-white p-4 fixed bottom-0 left-0 w-full">
    <div class="container mx-auto text-center">
      <!-- Tombol Tambah Kategori -->
      <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" onclick="location.href='{{ route('kategori.tambah') }}'" >Tambah Kategori</button>
      <!-- Tombol Menu -->
      <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" onclick="location.href='{{ route('menu') }}'" >Menu</button>
    </div>
</div>

@endif

<!-- Grid Kategori -->
<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-2 card-container">
  @foreach ($kategori as $menu)
    <div
      class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 custom-card card">
      <div class="px-5 pb-5">
        <a href="#">
          <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">{{ $menu->nama }}</h5>
        </a>
        
        @if (auth()->user()->level == 'Admin')
          <!-- Tombol Edit dan Hapus -->
          <div class="flex items-center mt-2.5 mb-5">
            <!-- Tombol Edit -->
            <a href="{{ route('kategori.edit', $menu->id) }}"><span class="bg-yellow-100 text-yellow-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-800 ml-3">edit</span></a>
            <!-- Tombol Hapus -->
            <a href="{{ route('kategori.hapus', $menu->id) }}"><span class="bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-800 ml-3">hapus</span></a>
          </div>
        @endif
      </div>
    </div>
  @endforeach
</div>

      </main>
@endsection

