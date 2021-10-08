# Sistem Informasi Daftar Buku
Sistem Informasi Daftar Buku yang memiliki fitur untuk menyimpan data judul buku, penulis buku, jumlah halaman buku, cover buku, dan . Aplikasi menggunakan Laravel sebagai Back-End untuk menjalankan API Server dan Menggunakan Vue JS sebagai Front-End yang menampilkan data

<hr>

## Proses Menjalankan Aplikasi Website

Pertama-tama jalankan terlebih dahulu perintah berikut untuk menginstal dependency
pada Project Vue JS di directory informasi_daftar_buku_client

```
npm install
```

Kemudian melakukan instalasi dependency Laravel sanctum menggunakan composer

```
composer require laravel/sanctum
```

Kemudian melakukan instalasi dependency Laravel fortify menggunakan composer

```
composer require laravel/fortify
```

Jalankan server Back-End Laravel di directory informasi_daftar_buku_api dengan perintah 

```
php artisan serve
```

Kemudian jalankan server Front-End Vue JS di directory informasi_daftar_buku_client

```
php run serve
```

## Dependency

### Dependency Vue JS

- @propperjs/core
- axios
- bootstrap
- core-js
- vue
- vue-router

### Dependency Laravel

- fortify
- sanctum

## Struktur Database

![This is an image](https://i.ibb.co/Yt9jC20/Desain-Database.png)









