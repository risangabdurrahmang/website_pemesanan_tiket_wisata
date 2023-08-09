<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wisata Banyumas</title>
    <!-- CSS lokal -->
    <link rel="stylesheet" href="/css/style.css">
    {{-- Direktori untuk compile tailwindcss --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Kondisi JS untuk mengganti dari dark atau light mode dan sebaliknya -->
    <script>
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>
</head>

<body>
    <!-- Navbar -->
    <header>
        <nav
            class="bg-gray-50 px-2 sm:px-4 py-2.5 dark:bg-gray-900 fixed w-full z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600">
            <div class="container flex flex-wrap items-center justify-between mx-auto">
                <a href="index.php" class="flex items-center">
                    <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Wisata
                        Banyumas</span>
                </a>
                <div class="flex md:order-2">
                    <button id="theme-toggle" type="button"
                        class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
                        <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                        </svg>
                        <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                                fill-rule="evenodd" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <button data-collapse-toggle="navbar-sticky" type="button"
                        class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        aria-controls="navbar-sticky" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                    <ul
                        class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                        <li>
                            <a href="/"
                                class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Beranda</a>
                        </li>
                        <li>
                            <a href="{{ route('view.grafik') }}"
                                class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Grafik</a>
                        </li>
                        <li>
                            <a href="{{ route('pesanan.create') }}"
                                class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Pesan
                                Tiket</a>
                        </li>
                        <li>
                            <a href="{{ route('pesanan.index') }}"
                                class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Daftar
                                Pesanan</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <!-- Halaman form Pemesanan -->
        <section class="bg-gray-50 dark:bg-gray-900 pt-24">
            <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
                <div class="form_content bg-gray-50 border border-gray-600 dark:bg-gray-900">
                    <h4 class="font-bold text-4xl text-gray-900 dark:text-white mb-10">Form Pemesanan</h4>
                    <form action="{{ route('pesanan.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-5">
                            <div class="col-30">
                                <label for="nama" class="font-semibold text-gray-900 dark:text-white">Nama
                                    Lengkap</label>
                            </div>
                            <div class="col-70">
                                <input type="text" id="nama" name="nama"
                                    class="rounded-md border-gray-400 text-gray-600 dark:bg-gray-700 dark:border-gray-600 dark:text-white outline-none">
                                <!-- error message untuk nama -->
                                @error('nama')
                                    <div class="flex p-4 mb-4 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 dark:border-red-800"
                                        role="alert">
                                        <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3"
                                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <div>
                                            <span class="font-medium">{{ $message }}
                                        </div>
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-5">
                            <div class="col-30">
                                <label for="nomer_identitas" class="font-semibold text-gray-900 dark:text-white">No
                                    Identitas</label>
                            </div>
                            <div class="col-70">
                                <input type="number" id="nomer_identitas" name="nomer_identitas"
                                    class="rounded-md border-gray-400 text-gray-600 dark:bg-gray-700 dark:border-gray-600 dark:text-white outline-none">
                                @error('nomer_identitas')
                                    <div class="flex p-4 mb-4 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 dark:border-red-800"
                                        role="alert">
                                        <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3"
                                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <div>
                                            <span class="font-medium">{{ $message }}
                                        </div>
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class=" row mb-5">
                            <div class="col-30">
                                <label for="no_hp" class="font-semibold text-gray-900 dark:text-white">No.
                                    HP</label>
                            </div>
                            <div class="col-70">
                                <input type="number" id="no_hp" name="no_hp"
                                    class="rounded-md border-gray-400 text-gray-600 dark:bg-gray-700 dark:border-gray-600 dark:text-white outline-none">
                                @error('no_hp')
                                    <div class="flex p-4 mb-4 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 dark:border-red-800"
                                        role="alert">
                                        <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3"
                                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <div>
                                            <span class="font-medium">{{ $message }}
                                        </div>
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-5">
                            <div class="col-30">
                                <label for="tempat_wisata" class="font-semibold text-gray-900 dark:text-white">Nama
                                    Wisata</label>
                            </div>
                            <div class="col-70">
                                <select id="tempat_wisata" name="tempat_wisata" onchange="hargaTiket()"
                                    class="rounded-md border-gray-400 text-gray-600 dark:bg-gray-700 dark:border-gray-600 dark:text-white outline-none">
                                    <option selected="">Pilih wisata</option>
                                    <option value="Hutan Pinus Limpakuwus">Hutan Pinus Limpakuwus</option>
                                    <option value="Curug Bayan">Curug Bayan</option>
                                    <option value="Telaga Kumpe">Telaga Kumpe</option>
                                    <option value="Curug Jenggala">Curug Jenggala</option>
                                    <option value="Bukit Agaran">Bukit Agaran</option>
                                    <option value="Pagubugan Melung">Pagubugan Melung</option>
                                </select>
                                @error('tempat_wisata')
                                    <div class="flex p-4 mb-4 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 dark:border-red-800"
                                        role="alert">
                                        <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3"
                                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <div>
                                            <span class="font-medium">{{ $message }}
                                        </div>
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-5">
                            <div class="col-30">
                                <label for="tanggal_kunjungan"
                                    class="font-semibold text-gray-900 dark:text-white">Tanggal
                                    Kunjungan</label>
                            </div>
                            <div class="col-70">
                                <input type="date" id="tanggal_kunjungan" name="tanggal_kunjungan"
                                    class="rounded-md border-gray-400 text-gray-600 dark:bg-gray-700 dark:border-gray-600 dark:text-white outline-none">
                                @error('tanggal_kunjungan')
                                    <div class="flex p-4 mb-4 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 dark:border-red-800"
                                        role="alert">
                                        <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3"
                                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <div>
                                            <span class="font-medium">{{ $message }}
                                        </div>
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-5">
                            <div class="col-30">
                                <label for="pengunjung_dewasa"
                                    class="font-semibold text-gray-900 dark:text-white">Pengunjung
                                    Dewasa</label>
                            </div>
                            <div class="col-70">
                                <input type="number" id="pengunjung_dewasa" name="pengunjung_dewasa"
                                    class="rounded-md border-gray-400 text-gray-600 dark:bg-gray-700 dark:border-gray-600 dark:text-white outline-none">
                                @error('pengunjung_dewasa')
                                    <div class="flex p-4 mb-4 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 dark:border-red-800"
                                        role="alert">
                                        <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3"
                                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <div>
                                            <span class="font-medium">{{ $message }}
                                        </div>
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-30">
                                <label for="pengunjung_anakanak"
                                    class="font-semibold text-gray-900 dark:text-white">Pengunjung
                                    Anak-anak<br><span class="text-sm text-gray-900 dark:text-gray-500">Usia di bawah
                                        12
                                        tahun</span></label>
                            </div>
                            <div class="col-70">
                                <input type="number" id="pengunjung_anakanak" name="pengunjung_anakanak"
                                    class="rounded-md border-gray-400 text-gray-600 dark:bg-gray-700 dark:border-gray-600 dark:text-white outline-none">
                                @error('pengunjung_anakanak')
                                    <div class="flex p-4 mb-4 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 dark:border-red-800"
                                        role="alert">
                                        <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3"
                                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <div>
                                            <span class="font-medium">{{ $message }}
                                        </div>
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-30">
                                <label for="harga_tiket" class="font-semibold text-gray-900 dark:text-white">Harga
                                    Tiket</label>
                            </div>
                            <div class="col-70">
                                <p class="flex text-gray-600 dark:text-white mt-3">
                                    Rp. <input name="harga_tiket" id="harga_tiket" class="bg-transparent" readonly>
                                </p>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-30">
                                <label for="total_bayar" class="font-semibold text-gray-900 dark:text-white">Total
                                    Bayar</label>
                            </div>
                            <div class="col-70">
                                <p class="flex text-gray-600 dark:text-white mt-3">
                                    Rp. <input name="total_bayar" id="total_bayar" class="bg-transparent" readonly>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="flex items-center mb-5">
                                <input id="remember" type="checkbox" value=""
                                    class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800"
                                    required>
                                <label for="remember"
                                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Saya
                                    dan/atau rombongan telah membaca, memahami, dan setuju berdasarkan syarat dan
                                    ketentuan yang
                                    telah ditetapkan</label>
                            </div>
                        </div>
                        <div class="row mx-auto">
                            <div class="lg:grid lg:grid-cols-3 sm:gap-6 xl:gap-10 lg:space-y-0">
                                <div class="flex flex-col p-3 mx-auto text-center w-full">
                                    <button id="hitung"
                                        class="px-2 py-2 bg-blue-500 rounded-md text-white text-sm font-bold">Hitung
                                        Total
                                        Bayar</button>
                                </div>
                                <div class="flex flex-col p-3 mx-auto text-center w-full">
                                    <button type="submit"
                                        class="px-2 py-2 bg-blue-500 rounded-md text-white text-sm font-bold">Pesan
                                        Tiket</button>
                                </div>
                                <div class="flex flex-col p-3 mx-auto text-center w-full">
                                    <a href=""
                                        class="px-2 py-2 bg-blue-500 rounded-md text-white text-sm font-bold">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
    <!-- footer -->
    <footer class="p-4 text-white md:p-8 lg:p-10 bg-gray-800">
        <div class="mx-auto max-w-screen-xl text-center">
            <a href="#" class="flex justify-center items-center text-2xl font-semibold text-white mb-3">
                Pemesanan Tiket Wisata Banyumas
            </a>
            <span class="text-sm text-gray-500 sm:text-center">© 2023</span>
        </div>
    </footer>

    <!-- JS Flowbite dalam bentuk cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>
    <!-- CDN Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <!-- JS lokal -->
    <script src="/js/main.js"></script>
    <script>
        // Fungsi untuk mengisi value harga tiket sesuai nama wisata yang dipilih
        function hargaTiket() {
            // variabel untuk memilih elemen berdasarkan atribut id
            const namaWisata = document.getElementById("tempat_wisata").value;
            const hargaTiket = document.getElementById("harga_tiket");

            // Cek nama wisata pada dropdown nama wisata yang dipilih
            if (namaWisata == "Hutan Pinus Limpakuwus") {
                hargaTiket.value = 15000;
            } else if (namaWisata == "Curug Bayan") {
                hargaTiket.value = 10000;
            } else if (namaWisata == "Telaga Kumpe") {
                hargaTiket.value = 5000;
            } else if (namaWisata == "Curug Jenggala") {
                hargaTiket.value = 10000;
            } else if (namaWisata == "Bukit Agaran") {
                hargaTiket.value = 5000;
            } else if (namaWisata == "Pagubugan Melung") {
                hargaTiket.value = 10000;
            }
        }

        // Jquery untuk menghitung secara live pada form input
        $("#hitung").click(function() {
            // parseInt untuk mengkonversi sebuah string menjadi angka(integer)
            var pengunjung_dewasa = parseInt($("#pengunjung_dewasa").val());
            var pengunjung_anak = parseInt($("#pengunjung_anakanak").val());
            var harga_tiket = parseInt($("#harga_tiket").val());
            // Variabel dan kondisional perhitungan
            var harga_pengunjung_biasa = pengunjung_dewasa * harga_tiket;
            if (pengunjung_anak > 0) {
                var potongan = harga_tiket * 0.5;
                var potongan_harga_anak = pengunjung_anak * potongan;
                var total_harga_anak = pengunjung_anak * harga_tiket - potongan_harga_anak;
                // Menghitung total bayar
                var total_bayar = harga_pengunjung_biasa + total_harga_anak;
            } else {
                // Menghitung total bayar tanpa pengunjung anak
                var total_bayar = harga_pengunjung_biasa + pengunjung_anak;
            }
            // Mencetak hasil operasi perhitungan yang diambil variabel total_bayar dengan mengklik tombol hitung total bayar
            $("#total_bayar").val(total_bayar);
        });
    </script>
</body>

</html>
