# Sistem Perpustakaan Laravel ORM

Project ini merupakan aplikasi perpustakaan sederhana berbasis Laravel yang dibuat untuk implementasi konsep MVC dan ORM Eloquent Laravel.

---

## Fitur Aplikasi

- Menampilkan data buku
- Menambahkan data buku
- Mengedit data buku
- Menghapus data buku
- Menampilkan relasi kategori dan buku
- Dashboard perpustakaan sederhana

---

## Teknologi yang Digunakan

- Laravel
- PHP
- MySQL
- Bootstrap 5
- Laragon

---

## Konsep yang Digunakan

### MVC (Model View Controller)

- Model : Buku dan Kategori
- View : Blade Template
- Controller : BukuController

### Eloquent ORM

Project ini menggunakan Eloquent ORM Laravel seperti:

- create()
- find()
- where()
- update()
- delete()

---

## Struktur Database

### Tabel Buku

| Field | Type |
|---|---|
| id | bigint |
| judul | varchar |
| penulis | varchar |
| tahun | year |
| kategori_id | bigint |

### Tabel Kategori

| Field | Type |
|---|---|
| id | bigint |
| nama_kategori | varchar |

---

## Relasi Database

- Satu kategori memiliki banyak buku
- Satu buku memiliki satu kategori

---

## Cara Menjalankan Project

### 1. Clone Repository

```bash
git clone https://github.com/fitri-hub/perpustakaan-laravel-orm.git
```

### 2. Masuk ke Folder Project

```bash
cd perpustakaan-laravel-orm
```

### 3. Install Dependency

```bash
composer install
```

### 4. Copy File ENV

```bash
cp .env.example .env
```

### 5. Generate Key

```bash
php artisan key:generate
```

### 6. Atur Database pada File .env

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db_perpustakaan
DB_USERNAME=root
DB_PASSWORD=
```

### 7. Jalankan Migration

```bash
php artisan migrate
```

### 8. Jalankan Server Laravel

```bash
php artisan serve
```

---

## Tampilan Fitur

- Dashboard Perpustakaan
- Data Buku
- Tambah Buku
- Edit Buku
- Hapus Buku
- Relasi Kategori Buku

---

## Author

Fitri Ani
2408107010022
