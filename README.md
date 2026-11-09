# Lab7Web_PHP - Praktikum 7: Pemrograman Server-Side dengan PHP

**Nama:** ____________  **NIM:** ____________  **Kelas:** ____________

## Tujuan
- Memahami perbedaan pemrosesan client-side dan server-side.
- Menjalankan file PHP melalui server lokal.
- Menggunakan variabel, operator, percabangan, perulangan, array, dan function.
- Memproses form GET dan POST dengan validasi dan sanitasi dasar (`trim`, `filter_var`, `ctype_digit`, `htmlspecialchars`).
- Membangun aplikasi sederhana penerima dan penampil data mahasiswa.

## Perangkat
Laptop/PC, web browser, Visual Studio Code, PHP, XAMPP/Laragon (Apache).

## Cara Menjalankan
1. Install XAMPP/Laragon lalu jalankan Apache.
2. Salin folder `Lab7Web_PHP` ke `htdocs` (XAMPP) atau `www` (Laragon).
3. Buka `http://localhost/Lab7Web_PHP/` di browser. Jangan membuka file dengan klik ganda.

(Alternatif tanpa XAMPP: `php -S localhost:8000` di dalam folder proyek.)

## Struktur File
```
Lab7Web_PHP/
|-- index.php          (Latihan 1 + menu)
|-- latihan2.php       (variabel, operator, percabangan)
|-- latihan3.php       (perulangan, array)
|-- latihan4.php       (function)
|-- latihan5_get.php   (form GET)
|-- latihan6_post.php  (form POST)
|-- latihan7.php       (pengolahan data)
|-- mini_project.php   (form data mahasiswa)
|-- eksperimen.php     (eksperimen mandiri 1-3)
|-- style.css          (tata letak & styling visual)
|-- README.md
`-- screenshots/       (lihat DAFTAR_SCREENSHOT.md)
```

## Ringkasan Hasil
| Latihan | Hasil |
|---------|-------|
| 1 | PHP dieksekusi server; browser hanya menerima HTML hasil `echo`. |
| 2 | Nilai akhir 83.70 -> predikat B. |
| 3 | Seluruh 7 nama tampil dengan `foreach`. |
| 4 | Diskon 10% dari Rp150.000 = Rp135.000; ditambah function luas dan kelulusan. |
| 5 | Data GET muncul di URL (`?kata=...`), sehingga tidak cocok untuk data sensitif. |
| 6 | Data POST tidak muncul di URL; input HTML tampil aman berkat `htmlspecialchars`. |
| 7 | Subtotal dihitung hanya jika harga numerik >= 0 dan jumlah bilangan bulat >= 1. |
| Mini Project | Validasi server-side, semua error ditampilkan, data valid ditampilkan ulang. |

## Kasus Uji
**Input valid**
1. Mini project: Budi, NIM 2024123456, Teknik Informatika, semester 3, budi@mail.com -> ringkasan data tampil.
2. Latihan 7: Pensil, harga 2500.50, jumlah 4 -> subtotal Rp10.002.

**Input tidak valid**
1. Mini project: email `budi@`, semester `20`, NIM `ABC123` -> tiga pesan error tampil.
2. Latihan 7: jumlah `0` atau harga `abc` -> "Periksa kembali nama barang, harga, dan jumlah."

(Tambahkan screenshot masing-masing kasus.)

## Eksperimen Mandiri
1. Rata-rata tiga nilai: function `rataRata()` di `eksperimen.php`.
2. Pencarian nama via GET dari array: bagian 2 `eksperimen.php`.
3. Format Rupiah: function `formatRupiah()`.
4. Validasi NIM (angka, 8-12 digit): `mini_project.php`.
5. Tombol reset: `<button type="reset">` di `mini_project.php`.
   **Perbedaan:** reset hanya terjadi di browser (client-side), mengosongkan isian form tanpa mengirim apa pun ke server dan tidak menghapus hasil yang sudah tampil. Pemrosesan ulang (submit) mengirim data ke server, PHP menjalankan ulang validasi, dan halaman dibuat ulang.

## Jawaban Pertanyaan Evaluasi
1. **Client-side vs server-side:** client-side dijalankan di browser (HTML, CSS, JavaScript); server-side dijalankan di server (PHP) yang mengirim hasilnya sebagai HTML.
2. **Kenapa lewat web server:** PHP butuh interpreter yang dipanggil web server. Jika dibuka langsung, browser hanya menampilkan kode mentah.
3. **Tanda `$`:** penanda bahwa itu variabel.
4. **GET vs POST:** GET mengirim data lewat URL (untuk permintaan yang tidak mengubah data, mudah di-bookmark, terlihat); POST mengirim lewat body request (lazim untuk form). POST bukan enkripsi, gunakan HTTPS.
5. **Validasi server-side:** validasi di browser bisa dilewati atau dimanipulasi, sehingga server wajib memeriksa ulang.
6. **`htmlspecialchars()`:** mengubah karakter khusus HTML menjadi entitas agar input tampil sebagai teks dan mencegah injeksi HTML/script (XSS).
7. **Manfaat function:** kode dapat dipakai ulang, lebih rapi, mudah diuji dan dirawat.

## Screenshot
Lihat folder `screenshots/` dan `DAFTAR_SCREENSHOT.md`. Sisipkan di sini:
```
![Latihan 1](screenshots/01_latihan1.png)
```
