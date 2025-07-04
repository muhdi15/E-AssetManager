<h1 align="center">📦 Sistem Informasi Pencatatan Barang – Manajemen Aset Kantor</h1>

<p align="center">
  <img src="logo-kantor.png" alt="Logo Kantor" width="120"/>
</p>

<p align="center">
 <b>Kelas F</b><br>
 <b>Muh.Muhdi Asyry Masdar</b><br>
 <b>D0222362</b>
</p>

<p align="center">
  <strong>Framework Web Based</strong><br>
  Program Studi Informatika<br>
  Fakultas Teknik<br>
  Universitas Sulawesi Barat<br>
  Majene, 2025
</p>

---

## 🎯 Role dan Fitur-fiturnya

### 1. Admin
- Menambahkan dan mengelola data barang atau aset kantor.
- Mencatat pembelian barang baru.
- Memperbarui kondisi barang (baik, rusak, hilang).
- Menghapus atau menonaktifkan data barang yang tidak aktif.
- Melihat laporan kondisi dan histori barang.

### 2. Pengguna (Staf / User)
- Melihat daftar barang dan detail informasi aset.
- Melihat kondisi dan status barang saat ini.
- Melihat histori perubahan data barang (jika diizinkan).

---

## 📋 Jenis Data yang Dicatat

- Nama Barang  
- Kategori Barang  
- Tanggal Pembelian  
- Kondisi Barang (Baik, Rusak, Hilang)  
- Lokasi Penyimpanan  
- Catatan atau Keterangan Tambahan  

---

## 🗂️ Struktur Tabel Database

### 1. Tabel `users`

| Nama Field | Tipe Data | Keterangan                    |
| ---------- | --------- | ----------------------------- |
| id         | INT, PK   | ID unik pengguna              |
| name       | VARCHAR   | Nama pengguna                 |
| email      | VARCHAR   | Email unik                    |
| password   | VARCHAR   | Kata sandi                    |
| role       | ENUM      | ['admin', 'user']             |
| created_at | TIMESTAMP | Tanggal dibuat                |

### 2. Tabel `items`

| Nama Field     | Tipe Data | Keterangan                        |
| -------------- | --------- | --------------------------------- |
| id             | INT, PK   | ID unik barang                    |
| name           | VARCHAR   | Nama barang                       |
| category       | VARCHAR   | Kategori barang                   |
| purchase_date  | DATE      | Tanggal pembelian barang          |
| condition      | ENUM      | ['baik', 'rusak', 'hilang']       |
| location       | VARCHAR   | Lokasi penyimpanan barang         |
| notes          | TEXT      | Catatan tambahan (opsional)       |
| created_at     | TIMESTAMP | Tanggal pencatatan barang         |

### 3. Tabel `item_logs`

| Nama Field  | Tipe Data | Keterangan                                 |
| ----------- | --------- | ------------------------------------------ |
| id          | INT, PK   | ID log                                     |
| item_id     | INT       | FK ke `items`                              |
| action      | VARCHAR   | Aksi yang dilakukan (ex: tambah, ubah)     |
| changed_by  | INT       | FK ke `users` yang melakukan perubahan     |
| change_date | TIMESTAMP | Waktu perubahan                            |
| details     | TEXT      | Deskripsi perubahan                        |

---

## 🔁 Relasi Antar Tabel

- `users` ↔ `item_logs` : One-to-Many  
- `items` ↔ `item_logs` : One-to-Many  

---

## 🔄 Alur Penggunaan Sistem

1. Admin login ke sistem.
2. Menambahkan data barang baru ke sistem.
3. Jika ada perubahan status barang, admin memperbarui data (misalnya menjadi "rusak" atau "hilang").
4. Semua perubahan tercatat otomatis di tabel `item_logs`.
5. Pengguna dapat login untuk melihat daftar barang dan informasi terkini tanpa dapat mengubah data.

---

## 🛠️ Teknologi yang Digunakan

- PHP / Laravel (opsional)
- MySQL / MariaDB
- Bootstrap / TailwindCSS
- JavaScript / Vue.js (jika ada)
- DomPDF (untuk ekspor PDF, jika diperlukan)

---

## 📌 Catatan

- Sistem ini dirancang agar data aset kantor tercatat secara digital dan mudah dilacak.
- Admin bertanggung jawab menjaga keakuratan dan kelengkapan data.

---
