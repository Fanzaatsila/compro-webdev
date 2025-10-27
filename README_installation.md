# Renjana Cashew - Panduan Instalasi

Panduan ini akan membantu Anda untuk melakukan instalasi aplikasi Renjana Cashew pada komputer Anda. Panduan ini mencakup langkah-langkah untuk sistem operasi macOS/Linux dan Windows.

## Persyaratan Sistem

Sebelum memulai instalasi, pastikan sistem Anda memiliki:

-   PHP 8.1 atau lebih tinggi
-   [Composer](https://getcomposer.org/download/)
-   [Node.js](https://nodejs.org/) (versi 16 atau lebih tinggi)
-   [NPM](https://www.npmjs.com/) atau [Yarn](https://yarnpkg.com/)
-   [Git](https://git-scm.com/downloads)

## Langkah Instalasi

### 1. Mengunduh Aplikasi

```bash
# Clone repository
git clone https://github.com/krsXishere/renjana-cashew.git

# Pindah ke folder aplikasi
cd renjana-cashew
```

### 2. Menyiapkan File Konfigurasi

**Untuk macOS/Linux:**

```bash
# Copy file konfigurasi
cp .env.example .env
```

**Untuk Windows:**

```bash
# Copy file konfigurasi
copy .env.example .env
```

### 3. Konfigurasi Database SQLite

Buka file `.env` dengan text editor favorit Anda dan ubah konfigurasi database menjadi:

```
DB_CONNECTION=sqlite
# Hapus atau tambahkan komentar pada baris DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, dan DB_PASSWORD
# DB_HOST=127.0.0.1
# DB_PORT=3306
# DB_DATABASE=laravel
# DB_USERNAME=root
# DB_PASSWORD=
```

**Untuk macOS/Linux:**

```bash
# Buat file database SQLite kosong
touch database/database.sqlite
```

**Untuk Windows:**

```bash
# Buat file database SQLite kosong
type nul > database/database.sqlite
```

### 4. Menginstal Dependensi PHP

```bash
# Install dependensi PHP
composer install
```

### 5. Menginstal Dependensi JavaScript/Node.js

```bash
# Install dependensi JavaScript
npm install
```

### 6. Generate Application Key

```bash
# Generate aplikasi key
php artisan key:generate
```

### 7. Menjalankan Migrasi Database

```bash
# Jalankan migrasi database untuk membuat struktur tabel
php artisan migrate
```

### 8. Mengisi Data Awal (Seeding)

```bash
# Isi database dengan data awal
php artisan db:seed
```

### 9. Publikasi Assets Livewire

```bash
# Publish asset Livewire
php artisan livewire:publish --assets
```

### 10. Membuat Symlink untuk Storage

```bash
# Buat symbolic link dari public/storage ke storage/app/public
php artisan storage:link
```

### 11. Membuat Pengguna Admin Filament

```bash
# Buat user admin untuk Filament
php artisan make:filament-user
```

Ikuti instruksi di layar untuk membuat user admin:

-   Masukkan nama
-   Masukkan alamat email
-   Masukkan password (minimal 8 karakter)

### 12. Menjalankan Aplikasi

Buka dua terminal/command prompt terpisah untuk menjalankan server dan kompilasi aset.

**Terminal 1 - Menjalankan PHP Server:**

```bash
# Jalankan server aplikasi
php artisan serve
```

Server akan berjalan di `http://127.0.0.1:8000`.

**Terminal 2 - Menjalankan Vite untuk Frontend:**

```bash
# Jalankan Vite dalam mode pengembangan
npm run dev
```

## Mengakses Aplikasi

### Frontend/Website Utama

Buka browser dan akses: `http://127.0.0.1:8000`

### Panel Admin

Buka browser dan akses: `http://127.0.0.1:8000/admin/login`

Login menggunakan email dan password yang Anda buat pada langkah 10.

## Pemecahan Masalah Umum

### 1. Jika terjadi error "Permission denied"

**Untuk macOS/Linux:**

```bash
chmod -R 777 storage bootstrap/cache
```

### 2. Jika tampilan website tidak muncul dengan benar

Pastikan Anda telah menjalankan kedua perintah (`php artisan serve` dan `npm run dev`) di dua terminal terpisah.

### 3. Jika ada error terkait database

```bash
# Hapus file database.sqlite dan buat kembali
rm database/database.sqlite
touch database/database.sqlite

# Reset dan jalankan ulang migrasi
php artisan migrate:fresh --seed
```

**Untuk Windows:**

```bash
# Hapus file database.sqlite dan buat kembali
del database\database.sqlite
type nul > database\database.sqlite

# Reset dan jalankan ulang migrasi
php artisan migrate:fresh --seed
```

### 4. Jika error "Module not found" saat menjalankan npm

```bash
# Hapus folder node_modules dan reinstall
rm -rf node_modules
npm install
```

**Untuk Windows:**

```bash
# Hapus folder node_modules dan reinstall
rmdir /s /q node_modules
npm install
```

## Pertanyaan dan Bantuan

Jika Anda memiliki pertanyaan atau mengalami masalah, silakan hubungi tim pengembang di [support@renjanacashew.com](mailto:support@renjanacashew.com).

## Kontribusi

Jika Anda ingin berkontribusi pada proyek ini, silakan hubungi tim pengembang untuk informasi lebih lanjut.
