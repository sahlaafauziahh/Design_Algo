# Analisis Sistem Manajemen Data Supir

## Latar Belakang
Perusahaan transportasi dan logistik yang memiliki armada kendaraan dan supir memerlukan sistem yang terstruktur untuk mengelola data supir, kendaraan, perjalanan, serta kinerja operasionalnya. Sistem ini dirancang untuk membantu memantau penugasan supir, menjaga jadwal pemeliharaan kendaraan, dan memberikan laporan kinerja secara berkala, sehingga operasi bisnis berjalan lebih efisien dan aman.

## Tujuan Sistem
1. Mempermudah pengelolaan informasi supir dan kendaraan.
2. Memastikan seluruh data perjalanan dan penugasan tersimpan dengan baik dan dapat diakses dengan mudah.
3. Menyediakan informasi mengenai pemeliharaan kendaraan secara berkala untuk memastikan kondisi kendaraan.
4. Mengumpulkan data pelanggaran supir sebagai bahan evaluasi kinerja.
5. Menyediakan laporan kinerja supir berdasarkan jumlah perjalanan yang selesai, jarak tempuh, dan pelanggaran yang pernah terjadi.

## Ruang Lingkup
Sistem ini akan mencakup modul-modul berikut:
- **Modul Data Supir**: Menyimpan informasi dasar supir seperti nama, nomor lisensi, tanggal lahir, dan status kerja (aktif/non-aktif).
- **Modul Data Kendaraan**: Menyimpan informasi kendaraan seperti nomor plat, model, merek, tahun pembuatan, status, dan jadwal pemeliharaan.
- **Modul Penugasan Supir**: Mengatur penugasan supir dan kendaraan dalam perjalanan tertentu, mencatat tujuan, waktu mulai, dan waktu selesai.
- **Modul Riwayat Perjalanan**: Merekam perjalanan yang dilakukan supir, termasuk jarak tempuh, durasi, dan tanggal perjalanan.
- **Modul Pelanggaran**: Mencatat pelanggaran yang dilakukan oleh supir sebagai bahan evaluasi.
- **Modul Riwayat Pemeliharaan Kendaraan**: Mencatat pemeliharaan yang telah dilakukan pada kendaraan beserta jadwal pemeliharaan berikutnya.
- **Modul Laporan Kinerja**: Menyediakan laporan tentang kinerja supir berdasarkan jumlah perjalanan, jarak tempuh, dan jumlah pelanggaran.

## Kebutuhan Sistem
### Kebutuhan Fungsional
1. **Manajemen Data Supir**
   - Sistem dapat menambahkan, memperbarui, atau menghapus data supir.
   - Menyimpan data pribadi supir dan informasi lisensi.

2. **Manajemen Data Kendaraan**
   - Sistem dapat menambahkan, memperbarui, atau menghapus data kendaraan.
   - Menyimpan informasi kendaraan dan pemeliharaannya.

3. **Penugasan Supir dan Perjalanan**
   - Sistem dapat menugaskan supir dan kendaraan untuk suatu perjalanan.
   - Menyimpan tujuan, waktu mulai, dan waktu selesai perjalanan.

4. **Riwayat Perjalanan**
   - Sistem mencatat riwayat perjalanan, termasuk jarak tempuh dan durasi.

5. **Pelanggaran Supir**
   - Sistem mencatat setiap pelanggaran yang dilakukan oleh supir beserta jenis pelanggarannya.

6. **Laporan Kinerja**
   - Sistem menghasilkan laporan kinerja berdasarkan jumlah perjalanan, jarak tempuh, dan pelanggaran.

### Kebutuhan Non-Fungsional
1. **Keandalan (Reliability)**: Sistem harus beroperasi 99% dari waktu operasional.
2. **Skalabilitas (Scalability)**: Sistem mampu menangani hingga 1000 supir dan 500 kendaraan.
3. **Keamanan (Security)**: Sistem harus mengimplementasikan autentikasi untuk akses data sensitif.
4. **Kemudahan Penggunaan (Usability)**: Antarmuka pengguna harus mudah digunakan oleh staf operasional.

## Struktur Data dan Hubungan Antar Tabel
1. **Tabel Drivers**: Menyimpan data supir.
2. **Tabel Vehicles**: Menyimpan data kendaraan.
3. **Tabel Assignments**: Menyimpan data penugasan perjalanan.
4. **Tabel TripRecords**: Menyimpan riwayat perjalanan supir.
5. **Tabel Violations**: Menyimpan data pelanggaran supir.
6. **Tabel MaintenanceRecords**: Menyimpan data pemeliharaan kendaraan.
7. **Tabel DriverPerformanceReports**: Menyimpan laporan kinerja supir.

## Proses Bisnis Utama
1. **Pendaftaran dan Pemeliharaan Data Supir**: Memasukkan data supir baru, memperbarui informasi supir, dan menonaktifkan supir jika diperlukan.
2. **Pengelolaan Kendaraan**: Menyimpan data kendaraan baru, memperbarui informasi kendaraan, dan mencatat pemeliharaan yang dilakukan.
3. **Penugasan Perjalanan**: Mengatur perjalanan dengan menugaskan supir dan kendaraan ke tujuan tertentu.
4. **Pencatatan Pelanggaran**: Mencatat setiap pelanggaran yang dilakukan supir selama perjalanan.
5. **Pembuatan Laporan Kinerja**: Membuat laporan kinerja supir berdasarkan riwayat perjalanan dan data pelanggaran.

## Risiko
1. **Keamanan Data**: Data supir, perjalanan, dan kendaraan merupakan data sensitif yang harus dilindungi.
2. **Ketepatan Data**: Data yang salah dapat berdampak pada penugasan dan evaluasi kinerja supir.
3. **Ketersediaan Sistem**: Jika sistem tidak tersedia, maka operasional perusahaan bisa terganggu.

## Manfaat
- Menghemat waktu dalam pengelolaan data supir dan kendaraan.
- Mengoptimalkan penugasan supir dengan data perjalanan yang terstruktur.
- Meningkatkan keselamatan kendaraan dengan pemeliharaan yang terjadwal.
- Menghasilkan laporan yang membantu evaluasi kinerja supir secara obyektif.

---

