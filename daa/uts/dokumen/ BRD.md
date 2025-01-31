# Business Requirements Document (BRD)

## Project Title
Sistem Manajemen Data Supir

## Background
Perusahaan membutuhkan sistem yang dapat membantu pengelolaan informasi supir, kendaraan, perjalanan, dan pelaporan kinerja dengan tujuan untuk meningkatkan efisiensi operasional dan mempermudah proses evaluasi kinerja supir serta perawatan kendaraan.

## Objectives
1. Mengembangkan sistem untuk manajemen informasi supir dan kendaraan.
2. Memastikan kendaraan dalam kondisi baik melalui pemeliharaan yang terjadwal.
3. Menyediakan laporan kinerja supir yang akurat untuk keperluan evaluasi.
4. Mengurangi kesalahan dalam pengelolaan data melalui otomatisasi.

## Stakeholders
- **Manajer Operasional**: Melakukan monitoring terhadap perjalanan dan penugasan.
- **Manajer Kendaraan**: Memastikan kendaraan dalam kondisi baik melalui data pemeliharaan.
- **HRD**: Memonitor dan menilai kinerja supir.
- **Supir**: Mengakses informasi terkait perjalanan dan pelanggaran (jika ada).

## Scope
Sistem ini akan mencakup:
1. **Modul Data Supir**: Menyimpan informasi dasar supir.
2. **Modul Data Kendaraan**: Menyimpan informasi kendaraan, termasuk status dan jadwal pemeliharaan.
3. **Modul Penugasan Supir**: Mengatur penugasan supir dan kendaraan untuk setiap perjalanan.
4. **Modul Riwayat Perjalanan**: Mencatat riwayat setiap perjalanan yang dilakukan supir.
5. **Modul Pelanggaran Supir**: Mencatat setiap pelanggaran yang dilakukan oleh supir.
6. **Modul Laporan Kinerja**: Menghasilkan laporan kinerja supir berdasarkan jumlah perjalanan, jarak tempuh, dan pelanggaran.

## Requirements

### Functional Requirements
1. **Modul Data Supir**
   - Sistem harus dapat menyimpan dan mengelola informasi supir.
   - Sistem harus dapat mengubah status supir (aktif/non-aktif).

2. **Modul Data Kendaraan**
   - Sistem harus dapat menyimpan data kendaraan termasuk nomor plat, model, tahun, dan status.
   - Sistem harus dapat mencatat pemeliharaan yang dilakukan dan tanggal pemeliharaan berikutnya.

3. **Modul Penugasan Supir**
   - Sistem harus dapat mencatat penugasan perjalanan yang berisi supir, kendaraan, tujuan, tanggal mulai, dan tanggal selesai.
   - Sistem harus memiliki status penugasan (assigned, completed, cancelled).

4. **Modul Riwayat Perjalanan**
   - Sistem harus mencatat jarak tempuh, durasi perjalanan, tanggal, dan catatan tambahan untuk setiap perjalanan.
   
5. **Modul Pelanggaran Supir**
   - Sistem harus mencatat pelanggaran yang dilakukan supir dengan informasi tanggal, jenis pelanggaran, dan deskripsi.

6. **Modul Laporan Kinerja**
   - Sistem harus menghasilkan laporan kinerja untuk setiap supir berdasarkan jumlah perjalanan, jarak tempuh, dan jumlah pelanggaran.

### Non-Functional Requirements
1. **Reliability**: Sistem harus dapat diakses dan berjalan 99% dari waktu operasional.
2. **Scalability**: Sistem harus dapat menangani hingga 1000 supir dan 500 kendaraan tanpa gangguan performa.
3. **Security**: Sistem harus memiliki otentikasi untuk akses data sensitif.
4. **Usability**: Antarmuka pengguna harus sederhana dan mudah digunakan bagi staf operasional.

## Data Model

### Tabel Utama
1. **drivers** - Menyimpan data supir.
2. **vehicles** - Menyimpan data kendaraan.
3. **assignments** - Menyimpan data penugasan perjalanan.
4. **trip_records** - Menyimpan riwayat perjalanan supir.
5. **violations** - Menyimpan data pelanggaran supir.
6. **maintenance_records** - Menyimpan data pemeliharaan kendaraan.
7. **driver_performance_reports** - Menyimpan laporan kinerja supir.

## Assumptions
1. Semua supir memiliki nomor lisensi yang unik.
2. Kendaraan memiliki nomor plat unik.
3. Pemeliharaan kendaraan dilakukan secara berkala dan terjadwal.

## Risks
1. **Data Security**: Data supir dan perjalanan merupakan data yang sensitif.
2. **Data Accuracy**: Data yang salah dapat mengakibatkan kesalahan dalam penugasan dan pelaporan kinerja.

---

## Approval
Disetujui oleh:  
- [Nama Manajer Operasional]
- [Nama Manajer Kendaraan]
- [Nama HRD]

Tanggal Persetujuan: [Tanggal]
