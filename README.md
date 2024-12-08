## File baru yang ditambahkan

1. **Login (`login.php`)**
   - File ini adalah titik masuk utama untuk aplikasi. Digunakan untuk autentikasi dan verifikasi pengguna saat login. Ini adalah langkah pertama dalam menggunakan aplikasi.
   - Buka file `login.php` melalui browser Anda.
   - Masukkan username dan password yang valid untuk login.
   - Jika berhasil, Anda akan diarahkan ke halaman utama atau halaman lain sesuai dengan desain

2. **Validasi Input (`validasi.php`)**
   - File ini mendukung proses login dengan memvalidasi input pengguna, mencegah kesalahan input, atau potensi serangan.
   - File ini bekerja di belakang layar untuk memvalidasi data yang dimasukkan oleh pengguna, seperti username dan password.
   - Anda tidak perlu mengakses file ini secara langsung.

3. **Pengelolaan Anggota (`member.php`)**
   - File ini menangani logika untuk menampilkan data anggota atau pengguna yang telah terdaftar. Biasanya digunakan setelah pengguna berhasil login.
   - Setelah login, akses file ini untuk melihat daftar anggota atau pengguna.
   - File ini biasanya berisi tabel data anggota yang ditampilkan dari database.

4. **Pengelolaan Data Pengguna (`user.php`)**
   - Menyediakan antarmuka utama untuk pengelolaan data pengguna. Setelah login berhasil, file ini sering digunakan untuk mengelola data.
   - File ini adalah antarmuka utama untuk mengelola data pengguna.
   - Digunakan untuk melihat detail pengguna dan menambahkan data pengguna.

5. **Tambah Data Baru (`new.php`)**
   - Berfungsi untuk menambahkan data baru ke dalam sistem. Digunakan ketika pengguna ingin menambah informasi tertentu.
   - Akses file ini melalui browser untuk menambahkan data baru.
   - Isi formulir yang disediakan dan klik tombol simpan.

6. **Simpan Data Baru (`save.php`)**
   - File ini memproses data yang dikirim dari `new.php` dan menyimpannya ke database.
   - File ini bekerja di belakang layar dan tidak diakses langsung.

7. **Edit Data (`edit.php`)**
   - Menyediakan antarmuka untuk mengedit data yang sudah ada. Digunakan saat pengguna memerlukan pembaruan data.
   - Gunakan file ini untuk mengedit data yang sudah ada.
   - Pastikan Anda memilih data tertentu sebelum membuka halaman ini (misalnya melalui tombol "Edit" pada daftar data).

8. **Update Data (`update.php`)**
   - File ini memproses data yang dikirim dari `edit.php` untuk memperbarui database.
   - Sama seperti `save.php`, file ini bekerja di belakang layar.

9. **Detail Data (`detail.php`)**
    - Menampilkan detail dari suatu data tertentu. Digunakan untuk melihat informasi lebih lengkap.
    - Gunakan file ini untuk melihat informasi lengkap tentang data tertentu.
    - Diakses melalui link pada Nama pengguna dari daftar data di `user.php`.
    
10. **Hapus Data (`delete.php`)**
    - Menangani logika penghapusan data dari database berdasarkan parameter tertentu. Digunakan saat data tidak diperlukan lagi.
    - Gunakan file ini untuk menghapus data dari database.
    - Biasanya diakses melalui tombol "Delete" pada daftar data. Konfirmasi penghapusan dapat ditambahkan sesuai kebutuhan.

11. **Logout (`logout.php`)**
    - Digunakan untuk mengakhiri sesi pengguna yang sedang login. Membersihkan sesi dan mengarahkan pengguna kembali ke halaman login.
    - File ini digunakan untuk keluar dari aplikasi.
    - Pastikan Anda logout untuk mengakhiri sesi pengguna dengan aman.

12. **Fungsi Pendukung (`function.php`)**
    - Berisi fungsi-fungsi penting yang mendukung aplikasi, seperti koneksi ke database dan utilitas lainnya. Digunakan oleh berbagai file lain.
    - File ini juga tidak diakses langsung. 
    - Pastikan `function.php` di-include / require di setiap file yang membutuhkan fungsi penting seperti koneksi ke database.

13. **Database (`ba233.sql`)**
    - File SQL yang digunakan untuk membuat dan mengisi database `ba233`. File ini memuat struktur tabel dan data awal yang diperlukan aplikasi.
    - Sebelum menggunakan aplikasi, pastikan database `ba233` telah diimpor seperti yang dijelaskan pada langkah-langkah sebelumnya.
    - Aplikasi akan bergantung pada struktur tabel dan data awal yang ada dalam file ini.

## Langkah-Langkah Import Database

1. **Buat Database Baru**
   - Buka phpMyAdmin melalui browser Anda.
   - Klik tab **Databases**.
   - Masukkan nama database baru `ba233` di kolom **Database name**.
   - Klik tombol **Create**.

2. **Import File SQL**
   - Pilih database `ba233` yang baru dibuat dari daftar di sebelah kiri.
   - Klik tab **Import** di bagian atas.
   - Klik tombol **Choose File** dan pilih file `ba233.sql` dari komputer Anda.
   - Pastikan format yang dipilih adalah **SQL**.
   - Klik tombol **Go** untuk memulai proses impor.

3. **Verifikasi**
   - Setelah proses selesai, phpMyAdmin akan memberikan pesan konfirmasi.
   - Periksa struktur tabel dan data di dalam database `ba233` untuk memastikan semuanya berhasil diimpor.
   