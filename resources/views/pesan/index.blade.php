<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wisata Banyumas</title>
    <!-- CSS lokal -->
    <link rel="stylesheet" href="/css/style.css">
    <!-- CSS Ui flowbite dalam bentuk cdn -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.css" rel="stylesheet" />
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
                            <a href="{{ route('pesanan.index') }}}"
                                class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Daftar
                                Pesanan</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <!-- Halaman Pesanan -->
        <section class="bg-gray-50 dark:bg-gray-900 pt-24 pb-24">
            <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
                <div class="mx-auto max-w-screen-sm text-center mb-8 lg:mb-16">
                    <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Invoice
                        Pemesanan</h2>
                </div>
                <div class="grid gap-8 mb-6 lg:mb-16 md:grid-cols-2">
                    @forelse ($pesanan as $pesan)
                        <div
                            class="p-5 bg-white border  border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <div class="grid grid-cols-2 items-center">
                                <div>
                                    <label class="font-semibold text-gray-900 dark:text-white">Nama Lengkap</label>
                                </div>
                                <div>
                                    <p class="text-gray-600 dark:text-white">: {{ $pesan->nama }}</p>
                                </div>
                            </div>
                            <div class="grid grid-cols-2 items-center">
                                <div>
                                    <label class="font-semibold text-gray-900 dark:text-white">Nomor Identitas</label>
                                </div>
                                <div>
                                    <p class="text-gray-600 dark:text-white">: {{ $pesan->nomer_identitas }}</p>
                                </div>
                            </div>
                            <div class="grid grid-cols-2 items-center">
                                <div>
                                    <label class="font-semibold text-gray-900 dark:text-white">No. HP</label>
                                </div>
                                <div>
                                    <p class="text-gray-600 dark:text-white">: {{ $pesan->no_hp }}</p>
                                </div>
                            </div>
                            <div class="grid grid-cols-2 items-center">
                                <div>
                                    <label class="font-semibold text-gray-900 dark:text-white">Tempat Wisata</label>
                                </div>
                                <div>
                                    <p class="text-gray-600 dark:text-white">: {{ $pesan->tempat_wisata }}</p>
                                </div>
                            </div>
                            <div class="grid grid-cols-2 items-center">
                                <div>
                                    <label class="font-semibold text-gray-900 dark:text-white">Pengunjung Dewasa</label>
                                </div>
                                <div>
                                    <p class="text-gray-600 dark:text-white">: {{ $pesan->pengunjung_dewasa }} orang</p>
                                </div>
                            </div>
                            <div class="grid grid-cols-2 items-center">
                                <div>
                                    <label class="font-semibold text-gray-900 dark:text-white">Pengunjung
                                        Anak-anak</label>
                                </div>
                                <div>
                                    <p class="text-gray-600 dark:text-white">: {{ $pesan->pengunjung_anakanak }} orang
                                    </p>
                                </div>
                            </div>
                            <div class="grid grid-cols-2 items-center">
                                <div>
                                    <label class="font-semibold text-gray-900 dark:text-white">Harga Tiket</label>
                                </div>
                                <div>
                                    <p class="text-gray-600 dark:text-white">: Rp {{ $pesan->harga_tiket }}</p>
                                </div>
                            </div>
                            <div class="grid grid-cols-2 items-center">
                                <div>
                                    <label class="font-semibold text-gray-900 dark:text-white">Total Bayar</label>
                                </div>
                                <div>
                                    <p class="text-gray-600 dark:text-white">: Rp {{ $pesan->total_bayar }}</p>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div id="alert-border-2"
                            class="flex p-4 mb-4 text-red-800 border-t-4 border-red-300 bg-red-50 dark:text-red-400 dark:bg-gray-800 dark:border-red-800 "
                            role="alert">
                            <svg class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <div class="ml-3 text-sm font-medium">
                                Data Pesanan Belum Tersedia
                            </div>
                            <button type="button"
                                class="ml-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700"
                                data-dismiss-target="#alert-border-2" aria-label="Close">
                                <span class="sr-only">Dismiss</span>
                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </div>
                    @endforelse
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <!-- JS lokal -->
    <script src="/js/main.js"></script>
</body>

</html>
