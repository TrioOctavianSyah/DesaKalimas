-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Okt 2022 pada 07.37
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kalimas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2022_10_06_052513_create_roles_table_custom', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_pic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `username`, `password`, `nama`, `profile_pic`, `created_at`, `updated_at`) VALUES
(1, 'desakalimas', '$2y$10$vVvUTid0r1LjcC.gK/Gpp.jJ08g0PCnA3KOTvMU6v35hBPyKZuUSK', 'Desa Kalimas', 'untan.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_desa`
--

CREATE TABLE `tb_desa` (
  `id` int(11) NOT NULL,
  `id_kecamatan` int(11) DEFAULT NULL,
  `nama_desa` varchar(190) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `batas_desa` text DEFAULT NULL,
  `warna_batas` varchar(190) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_desa`
--

INSERT INTO `tb_desa` (`id`, `id_kecamatan`, `nama_desa`, `keterangan`, `batas_desa`, `warna_batas`, `created_at`, `updated_at`) VALUES
(24, 7, 'Desa Kalimas', 'Terdapat 5 Dusun', '[{\"lat\":-0.07506159781052624,\"lng\":109.17878150939943},{\"lat\":-0.07746485495879003,\"lng\":109.1964626312256},{\"lat\":-0.07780817739751549,\"lng\":109.21139717102052},{\"lat\":-0.07746485495879003,\"lng\":109.23268318176271},{\"lat\":-0.0862195762434375,\"lng\":109.23817634582521},{\"lat\":-0.09377266750644446,\"lng\":109.24126625061037},{\"lat\":-0.10304236817930451,\"lng\":109.22307014465332},{\"lat\":-0.10973715033519828,\"lng\":109.20006752014162},{\"lat\":-0.10802053966517125,\"lng\":109.18787956237794}]', '#04ff00', '2022-09-28 10:05:39', '2022-09-28 10:05:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jenis_potensi`
--

CREATE TABLE `tb_jenis_potensi` (
  `id` int(11) NOT NULL,
  `nama_potensi` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `tablelink` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_jenis_potensi`
--

INSERT INTO `tb_jenis_potensi` (`id`, `nama_potensi`, `icon`, `tablelink`, `created_at`, `updated_at`) VALUES
(1, 'Sekolah', 'schools.png', 'tb_sekolah', '2021-05-20 05:05:40', NULL),
(2, 'Tempat Wisata', 'vacant-land.png', 'tb_tempat_wisata', '2021-05-20 05:05:43', NULL),
(3, 'Tempat Ibadah', 'religious-organizations.png', 'tb_tempat_ibadah', '2021-05-20 05:05:46', NULL),
(4, 'Pasar', 'p', 'tb_pasar', '2021-05-20 05:07:36', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kabupaten`
--

CREATE TABLE `tb_kabupaten` (
  `id` int(11) NOT NULL,
  `nama_kabupaten` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kabupaten`
--

INSERT INTO `tb_kabupaten` (`id`, `nama_kabupaten`, `created_at`, `updated_at`) VALUES
(8, 'Kubu Raya', '2022-09-28 10:03:51', '2022-09-28 10:03:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kecamatan`
--

CREATE TABLE `tb_kecamatan` (
  `id` int(11) NOT NULL,
  `id_kabupaten` int(11) DEFAULT NULL,
  `nama_kecamatan` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kecamatan`
--

INSERT INTO `tb_kecamatan` (`id`, `id_kabupaten`, `nama_kecamatan`, `created_at`, `updated_at`) VALUES
(7, 8, 'Sungai Kakap', '2022-09-28 10:04:10', '2022-09-28 10:04:10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pasar`
--

CREATE TABLE `tb_pasar` (
  `id` int(11) NOT NULL,
  `id_potensi` int(11) DEFAULT NULL,
  `id_desa` int(11) DEFAULT NULL,
  `nama_pasar` varchar(255) DEFAULT NULL,
  `lat` varchar(255) DEFAULT NULL,
  `lng` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `foto` text DEFAULT NULL,
  `telepon` varchar(20) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_sekolah`
--

CREATE TABLE `tb_sekolah` (
  `id` int(11) NOT NULL,
  `id_potensi` int(11) DEFAULT NULL,
  `id_desa` int(11) DEFAULT NULL,
  `jenis` enum('PAUD','TK','SD','SMP','SMA','Universitas') DEFAULT NULL,
  `nama_sekolah` varchar(255) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `telepon` varchar(20) DEFAULT NULL,
  `foto` text DEFAULT NULL,
  `lat` varchar(255) DEFAULT NULL,
  `lng` varchar(255) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_sekolah`
--

INSERT INTO `tb_sekolah` (`id`, `id_potensi`, `id_desa`, `jenis`, `nama_sekolah`, `alamat`, `telepon`, `foto`, `lat`, `lng`, `keterangan`, `created_at`, `updated_at`) VALUES
(12, 1, 24, 'SD', 'SD', 'hdahdka', 'jjkte', '1664390627_sd20.jpeg', '-0.0822713688422272', '109.1938877105713', 'jjhdajkad', '2022-09-28 10:07:41', '2022-09-28 11:43:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tempat_ibadah`
--

CREATE TABLE `tb_tempat_ibadah` (
  `id` int(11) NOT NULL,
  `id_potensi` int(11) DEFAULT NULL,
  `id_desa` int(11) DEFAULT NULL,
  `agama` enum('Islam','Hindu','Katolik','Kristen','Buddha','Konghuchu') DEFAULT NULL,
  `nama_tempat_ibadah` varchar(255) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `foto` text DEFAULT NULL,
  `lat` varchar(255) DEFAULT NULL,
  `lng` varchar(255) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_tempat_ibadah`
--

INSERT INTO `tb_tempat_ibadah` (`id`, `id_potensi`, `id_desa`, `agama`, `nama_tempat_ibadah`, `alamat`, `foto`, `lat`, `lng`, `keterangan`, `created_at`, `updated_at`) VALUES
(9, 3, 24, 'Buddha', 'Vihara', 'aaa', '1664390778_Vihara.jpeg', '-0.08302104548197674', '109.20242786407472', 'aaa', '2022-09-28 11:46:18', '2022-09-28 11:46:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tempat_wisata`
--

CREATE TABLE `tb_tempat_wisata` (
  `id` int(11) NOT NULL,
  `id_potensi` int(11) DEFAULT NULL,
  `id_desa` int(11) DEFAULT NULL,
  `nama_tempat_wisata` varchar(255) DEFAULT NULL,
  `lat` varchar(255) DEFAULT NULL,
  `lng` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `foto` text DEFAULT NULL,
  `telepon` varchar(20) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tb_admin_profile_pic_unique` (`profile_pic`);

--
-- Indeks untuk tabel `tb_desa`
--
ALTER TABLE `tb_desa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kecamatan` (`id_kecamatan`);

--
-- Indeks untuk tabel `tb_jenis_potensi`
--
ALTER TABLE `tb_jenis_potensi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_kabupaten`
--
ALTER TABLE `tb_kabupaten`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_kecamatan`
--
ALTER TABLE `tb_kecamatan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kabupaten` (`id_kabupaten`);

--
-- Indeks untuk tabel `tb_pasar`
--
ALTER TABLE `tb_pasar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_tempat_wisata_ibfk_1` (`id_potensi`),
  ADD KEY `id_desa` (`id_desa`);

--
-- Indeks untuk tabel `tb_sekolah`
--
ALTER TABLE `tb_sekolah`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_sekolah_ibfk_1` (`id_potensi`),
  ADD KEY `id_desa` (`id_desa`);

--
-- Indeks untuk tabel `tb_tempat_ibadah`
--
ALTER TABLE `tb_tempat_ibadah`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_tempat_ibadah_ibfk_1` (`id_potensi`),
  ADD KEY `id_desa` (`id_desa`);

--
-- Indeks untuk tabel `tb_tempat_wisata`
--
ALTER TABLE `tb_tempat_wisata`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_tempat_wisata_ibfk_1` (`id_potensi`),
  ADD KEY `id_desa` (`id_desa`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_desa`
--
ALTER TABLE `tb_desa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `tb_jenis_potensi`
--
ALTER TABLE `tb_jenis_potensi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_kabupaten`
--
ALTER TABLE `tb_kabupaten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_kecamatan`
--
ALTER TABLE `tb_kecamatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_pasar`
--
ALTER TABLE `tb_pasar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_sekolah`
--
ALTER TABLE `tb_sekolah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tb_tempat_ibadah`
--
ALTER TABLE `tb_tempat_ibadah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
