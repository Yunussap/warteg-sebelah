@extends('layouts.app')

@section('title', 'Kategori Menu')

@section('contents')

    <main class="container mx-auto mt-4 py-8">
    <div class="relative bottom-0 left-0 text-white p-4 fixed bottom-0 left-0 w-full">
    <div class="container mx-auto text-center">
    <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" onclick="location.href='{{ route('menu.tambah') }}'" >Tambah Menu</button>
    <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" onclick="location.href='{{ route('kategori') }}'" >Kategori</button>
    </div>
    
</div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-2 card-container">
        @foreach ($data as $menu)
          <div
            class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 custom-card card">
            <a href="#">
              <img src="{{ asset('storage/images/' . $menu->image) }}"
                alt="Makanan 1" class="w-full h-auto rounded-lg mb-4">
            </a>
            <div class="px-5 pb-5">
              <a href="#">
                <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">{{ $menu->nama_menu }}</h5>
              </a>
              <div class="flex items-center mt-2.5 mb-5">
                <p class="text-sm text-gray-700 dark:text-gray-300">Kategori :</p>
                <a href="{{ route('menu.category', $menu->kategori->id) }}"><span class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ml-3">{{ $menu->kategori->nama }}</span></a>

              </div>
              @if (auth()->user()->level == 'Admin')
                <div class="flex items-center mt-2.5 mb-5">

<a href="{{ route('menu.edit', $menu->id) }}"><span class="bg-yellow-100 text-yellow-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ml-3">edit</span></a>
<a href="{{ route('menu.hapus', $menu->id) }}"><span class="bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ml-3">hapus</span></a>

                </div>
								@endif



              <div class="flex items-center justify-between">
                <span class="text-2xl font-bold text-gray-900 dark:text-white">Rp. {{ number_format($menu->harga, 0, ',', '.') }}</span>
                <a href="{{ route('menu.views', $menu->id) }}"
                  class="text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800">View</a>
              </div>
            </div>
          </div>
          @endforeach
      </div>
      </main>

@endsection
