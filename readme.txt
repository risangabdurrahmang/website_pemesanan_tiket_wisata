Website Pemesanan Tiket Wisata

Website ini dibuat menggunakan bahasa permograman PHP dengan framework laravel
Dalam membuat user interface website ini dibantu dengan framework CSS tailwind css dan flow bite untuk ui frameworknya.

Selain itu untuk menampilkan grafik menggunakan library JS tambahan yaitu Highcharts.

Website ini dapat melakukan membuat dan membaca data dengan bantuan mysql sebagai database.

Dalam file website terdiri dari beberapa bagian :
1. Folder public berisi gambar, css dan js yang terbagi menjadi beberapa folder lagi.
2. Untuk file export database terdapat di direktori utama dengan nama tiket_wisata.
3. Dalam folder views terdiri beberapa bagian, yaitu :
    -Folder pesan berisi halaman untuk menampilkan form Pemesanan dan daftar pesanan.
    -File Header untuk struktur head sampai body bagian awal.
    -File Footer untuk struktur kode body akhir sampai dengan script.
    -File Home terdapat tampilan halaman beranda yang berisi daftar wisata dan daftar harga.
    -File grafik untuk menampilkan halaman grafik yang datanya berasal dari database yaitu jumlah pengunjung dewasa dan anak.
4. Untuk controller terdiri 2 file yaitu untuk mengatur data yang akan tampil di halaman daftar pesanan, pesan tiket serta halaman grafik.
5. Untuk model terdiri 2 file yaitu untuk memanggil data melalui script pada halaman daftar pesanan, pesan tiket serta halaman grafik.

Tahapan yang harus dilakukan sebelum website di jalankan :
1. membuat database
2. setting file .env
3. php artisan migrate / import database yang sudah disediakan
4. npm run dev
5. php artisan serve
