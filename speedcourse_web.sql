-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Jan 2025 pada 08.53
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `speedcourse_web`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `category` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `duration` varchar(20) NOT NULL,
  `image_class` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `courses`
--

INSERT INTO `courses` (`id`, `title`, `category`, `description`, `price`, `duration`, `image_class`) VALUES
(1, 'Front end Developer', 'Web Developer', 'Ingin membuat website yang memukau pengguna? Bergabunglah dengan pelatihan Front-End Developer di SpeedCourse! Kamu akan belajar cara mengubah ide menjadi kenyataan dengan menciptakan tampilan website yang menarik, interaktif, dan mudah digunakan. Di SpeedCourse, pelatihan Front-End Developer akan mengasah kemampuanmu dalam menciptakan tampilan website yang menarik dan interaktif. Kamu akan mempelajari HTML, CSS, dan JavaScript untuk membangun antarmuka pengguna yang seamless. Materi pelatihan kami meliputi: HTML, CSS, JavaScript, Framework: React, Angular, atau Vue.js, Responsive Design.', 6980000.00, '6 bulan', 'front'),
(2, 'Backend Developer', 'Web Developer', 'Bangun logika di balik layar website dengan menjadi seorang Back-End Developer! Permintaan akan Back-End Developer semakin meningkat! Di SpeedCourse, kamu akan mempelajari dasar-dasar pemrograman back-end yang kuat. Materi yang akan kamu pelajari meliputi: Bahasa Pemrograman Server-Side, Framework, Database, API, dan Server Management.', 5699000.00, '6 bulan', 'back'),
(3, 'UI/UX Designer', 'Design', 'Transformasikan ide menjadi desain yang memukau! Pelatihan UI/UX Design akan melengkapi kamu dengan keterampilan yang dibutuhkan untuk menciptakan produk digital yang sukses. Pelatihan UI/UX Design di SpeedCourse akan mencakup berbagai topik penting, antara lain: Prinsip-prinsip Dasar Desain, User Research, Wireframing dan Prototyping, UI Design, UX Design, Testing dan Iterasi.', 4499000.00, '6 bulan', 'ui');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tutors`
--

CREATE TABLE `tutors` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `bio` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tutors`
--

INSERT INTO `tutors` (`id`, `name`, `image_url`, `bio`) VALUES
(1, 'Sandika Galih', 'https://achmadsyamsudin.github.io/SpeedCourse/Tutor/Pak%20Sandika.jpeg', 'Sandhika Galih adalah seorang dosen terkenal di Indonesia yang sering dikaitkan dengan pengajaran pengembangan web, khususnya melalui platform seperti YouTube dan lingkungan pendidikan formal. Ia dikenal atas keahliannya dalam teknologi web, termasuk HTML, CSS, JavaScript, dan PHP. Melalui kursus, perkuliahan, dan tutorial daring, Sandhika Galih telah membimbing banyak orang dalam belajar pemrograman dan pembuatan website dengan metode yang praktis dan mudah dipahami. Sandhika Galih merupakan dosen di program Teknik Informatika Universitas Pasundan, Indonesia, di mana ia berkontribusi dalam pendidikan mahasiswa di bidang rekayasa perangkat lunak dan bidang terkait lainnya.'),
(2, 'Dea Afrizal', 'https://achmadsyamsudin.github.io/SpeedCourse/Tutor/Dea%20Afrizal.jpg', 'Dea dikenal sebagai sosok yang aktif di dunia teknologi, khususnya di bidang pemrograman dan pengembangan web. Ia memiliki channel YouTube yang cukup populer, di mana ia membagikan tutorial, tips, dan pengalamannya seputar dunia teknologi. Kontennya seringkali ditujukan untuk pemula yang ingin belajar pemrograman. Dea juga merupakan pendiri Cuy University, sebuah platform pembelajaran online yang fokus pada materi-materi terkait pemrograman. Banyak yang menganggap Dea sebagai sosok inspiratif, terutama bagi mereka yang ingin memulai karir di bidang teknologi, khususnya bagi mereka yang berasal dari daerah.'),
(3, 'Kukuh Aldy', 'https://achmadsyamsudin.github.io/SpeedCourse/Tutor/kukuh%20aldy.jpg', 'Kukuh Aldy, dikenal sebagai seorang UI/UX designer dan content creator asal Indonesia, telah membangun reputasi dalam dunia desain dan pengembangan web. Dia memiliki pengalaman lebih dari lima tahun di bidang UI/UX, termasuk bekerja dengan perusahaan Belanda Frisseblikken sebagai desainer web dan pengembang front-end, dan saat ini bekerja untuk Bold Australia sebagai UI Designer. Kukuh juga mendirikan tim pengembangan webnya sendiri. Selain bekerja sebagai desainer, Kukuh aktif membagikan ilmunya melalui kanal YouTube Mas KukuhAldy, di mana dia mengajarkan dasar-dasar UI/UX dan desain web untuk audiens di Indonesia. Kanal ini bertujuan mendidik orang yang mungkin tidak memiliki akses ke pendidikan formal desain. Motivasi untuk berbagi ilmu, bersama respons positif dari audiens, mendorongnya untuk tetap konsisten menghasilkan konten');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`) VALUES
(1, 'admin', 'ahmad@gmail.com', '$2y$10$6tcsMXPLsrjpOVIa8wK.T.j05abOxVffRF77/GHz5a8NRnu7WF95O'),
(3, 'ahma', 'ahma@gmail.com', '$2y$10$DhtWX2t.aV7SbzF2jF508uJSSQe/88rZTBAJ3sO046QgqptRjPS86'),
(5, 'fdfsdfs', 'suprety@gmail.com', '$2y$10$n3oRJXE8ca5hkKRpk6qijeZGMnw2e3aUCsLBT.FS9CJcFrzyekv1q'),
(6, 'admin', 'admin@gmail.com', '$2y$10$n8rRusmseEirduMxClXRV.fphC6AqaR6hrgZq72NvhyCNTyMadpVm');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tutors`
--
ALTER TABLE `tutors`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tutors`
--
ALTER TABLE `tutors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
