@extends('layouts.app')

@section('title', 'View Menu')

@section('contents')
@php
    // Mengimpor model Kategori dan mengambil semua kategori
    use App\Models\Kategori;
    $kategori = Kategori::get();
@endphp

<main class="container mx-auto mt-4 py-8 p-12 my-8">
    <div class="flex justify-center">
        <div class="w-full max-w-2xl bg-white border border-gray-200 rounded-lg shadow custom-card card">
        <a href="#">
            <!-- Menampilkan gambar dari item menu yang dipilih -->
            <img src="{{ asset('storage/images/' . $menu->image) }}" alt="{{ $menu->nama_menu }}" class="w-full h-auto rounded-lg mb-4">
        </a>
        <div class="px-5 pb-5">
            <a href="#">
                <!--  Menampilkan nama dari item yang dipilih -->
                <h5 class="text-xl font-semibold tracking-tight text-gray-900">{{ $menu->nama_menu }}</h5>
            </a>
            <div class="flex items-center mt-2.5 mb-5">
                <p class="text-sm text-gray-700">Kategori :</p>
                <!-- Menampilkan kategori dari item menu yang dipilih -->
                <a href="{{ route('menu.category', $menu->kategori->id) }}"><span class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded ml-3">{{ $menu->kategori->nama }}</span></a>
            </div>
            <div class="flex items-center mt-2.5 mb-5">
                <!-- Menambahkan tautan untuk mencari item menu yang dipilih di Google -->
                <a href="https://www.google.com/search?q={{ $menu->nama_menu }} terdekat" class="text-blue-600 underline" target="_blank">Cari {{ $menu->nama_menu }} terdekat via Google</a>
            </div>
            <div class="flex items-center justify-between">
                <!-- Menampilkan harga dari item menu yang dipilih  -->
                <span class="text-2xl font-bold text-gray-900">Rp. {{ number_format($menu->harga, 0, ',', '.') }}</span>
            </div>
        </div>
        </div>
    </div>

    <!-- Menampilkan judul untuk bagian kategori lainnya -->
    <h2 class="text-xl font-semibold tracking-tight items-center text-gray-900 mt-8 mb-4">Kategori Lainnya</h2>

    <!-- Melakukan loop untuk setiap kategori -->
    @foreach ($kategori as $kat)
        <!-- Menampilkan kartu untuk setiap item menu dalam kategori ini -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-2 card-container">
        @php
                //  Mengambil sampai 3 item menu secara acak dari kategori ini
                $menus = $kat->menu->random(min(3, $kat->menu->count()));
            @endphp
            @foreach ($menus as $menu)
                <!-- Menampilkan kartu untuk setiap item menu -->
                <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow custom-card card">
                    <a href="#">
                        <img src="{{ asset('storage/images/' . $menu->image) }}" alt="{{ $menu->nama_menu }}" class="w-full h-auto rounded-lg mb-4">
                    </a>
                    <div class="px-5 pb-pb-5">
                        <a href="{{ route('menu.views', $menu->id) }}">
                            <h5 class="text-xl font-semibold tracking-tight text-gray-900">{{ $menu->nama_menu }}</h5>
                        </a>
                        <div class="flex items-center mt-2.5 mb-5">
                <p class="text-sm text-gray-700 dark:text-gray-300">Kategori :</p>
                <a href="{{ route('menu.category', $menu->kategori->id) }}"><span class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ml-3">{{ $menu->kategori->nama }}</span></a>
            </div>
                        <div class="flex items-center justify-between mt-4">
                            <span class="text-xl font-bold text-gray-900 dark:text-white">Rp. {{ number_format($menu->harga, 0, ',', '.') }}</span>
                            <a href="{{ route('menu.views', $menu->id) }}" class="text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-3 text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus-ring gray-800">View</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach
</main>
<script>
    const images = document.querySelectorAll('.custom-card img');

    images.forEach(image => {
        image.addEventListener('click', () => {
            const modal = document.createElement('div');
            modal.classList.add('fixed', 'inset-0', 'bg-black', 'bg-opacity-50', 'flex', 'items-center', 'justify-center', 'z-50');
            modal.innerHTML = `
                <div class="relative w-11/12 max-w-4xl">
                    <img src="${image.src}" alt="${image.alt}" class="w-full h-auto rounded-lg">
                    <button class="absolute top-0 right-0 text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800 mt-4 mr-4">X</button>
                </div>
            `;
            document.body.appendChild(modal);

            const closeButton = modal.querySelector('button');
            closeButton.addEventListener('click', () => {
                modal.remove();
            });

            modal.addEventListener('click', event => {
                if (event.target === modal) {
                    modal.remove();
                }
            });
        });
    });
</script>


@endsection
