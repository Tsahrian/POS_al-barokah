![Logo](public/img/logo.jpeg)

# Point Of Sale

Aplikasi POS atau point of sales adalah aplikasi yang digunakan untuk mengelola transaksi pada sebuah toko atau oleh kasir. Aplikasi ini dibuat menggunakan Laravel v8.\* dan minimal PHP v7.4.

## Fitur

-   Manajemen Kategori Produk
-   Manajemen Produk
    -   Multiple Delete
    -   Cetak Barcode
-   Manajemen Member
    -   Cetak Kartu Member
-   Manajemen Supplier
-   Transaksi Pengeluaran
-   Transaksi Pembelian
-   Transaksi Penjualan
-   Laporan Pendapatan atau Laba & Rugi
    -   Bulanan
    -   Harian
    -   Custom Tanggal
-   Custom Tipe Nota
    -   Nota Besar
    -   Nota Kecil / Thermal Nota
-   Manajemen User dan Profil
-   Pengaturan Toko
    -   Identitas
    -   Upload Desain Kartu Member
    -   Setting Diskon Member
-   User (Administrator, Kasir)
-   Grafik ChartJS pada Dashboard

## Installation

Install my-project with npm

```bash
  https://github.com/Tsahrian/POS_al-barokah.git
```

## Setup aplikasi

Jalankan perintah

```bash
  composer update
```

atau

```bash
  composer install
```

Copy file .env dari .env.example

```bash
  cp .env.example .env
```

onfigurasi file .env

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=al_barokah
DB_USERNAME=root
DB_PASSWORD=root
```

Generate key

```bash
  php artisan key:generate
```

Migrate database

```bash
  php artisan migrate
```

Seeder table User, Pengaturan

```bash
  php artisan db:seed
```

Jalankan aplikasi

```bash
  php artisan serve
```
