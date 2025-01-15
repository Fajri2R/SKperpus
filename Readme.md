# Sistem Informasi Perpustakaan Berbasis Web

Sistem Informasi Perpustakaan Berbasis Web adalah aplikasi yang dirancang untuk membantu pengelolaan berbagai aktivitas di perpustakaan, termasuk penyimpanan data buku, pengelolaan anggota, serta proses peminjaman dan pengembalian buku. Sistem ini juga menyediakan fitur untuk membuat laporan data anggota, buku, peminjaman, dan pengembalian. Proyek ini saya gunakan sebagai Tugas Akhir / Skripsi saya tahun 2022 lalu dengan judul Perancangan Sistem Informasi Perpustakaan Berbasis Web Pada SMK Muhammadiyah Kota Jambi. Karena keterbatasan ilmu saya pada waktu itu (2021) proyek ini bisa dikatakan jauh dari kata sempurna.

## Fitur Utama

- **Pengelolaan Data Buku**: Menambahkan, mengedit, dan menghapus data buku.
- **Pengelolaan Anggota**: Registrasi, pencatatan, dan pengelolaan data anggota perpustakaan.
- **Peminjaman & Pengembalian Buku**: Memproses transaksi peminjaman dan pengembalian buku.
- **Laporan**: Membuat laporan data anggota, buku, peminjaman, dan pengembalian.

## Teknologi yang Digunakan

- **CodeIgniter**: Versi 3.1.11
- **PHP**: Versi 7.4.33
- **AdminLTE**: Versi 3.1.0 untuk antarmuka pengguna

## Akun Pengguna

### Admin/Petugas Perpustakaan

- **Username**: admin
- **Password**: admin123

### Anggota Perpustakaan

- **Username**: anggota
- **Password**: anggota123

## Panduan Instalasi

1. **Kloning Repository**
   ```bash
   git clone https://github.com/Fajri2R/perpusweb-ci3.git
   ```
2. **Konfigurasi Database**
   - Buat database baru di server MySQL Anda.
   - Import file `database.sql` yang tersedia di folder project.
   - Edit file `application/config/database.php` untuk menyesuaikan konfigurasi database Anda.
3. **Konfigurasi Base URL**
   - Edit file `application/config/config.php` dan sesuaikan base URL proyek.
4. **Akses Aplikasi**
   - Jalankan server lokal (bisa pakai xampp/laragon) atau unggah aplikasi ke server hosting.
   - Akses melalui browser menggunakan URL yang sesuai.

## Kontribusi

Kontribusi untuk pengembangan sistem ini sangat disambut. Silakan lakukan fork repository ini dan ajukan pull request dengan perubahan atau fitur baru.

## Lisensi

Proyek ini menggunakan lisensi [MIT](LICENSE).
