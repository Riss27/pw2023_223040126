-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 11, 2023 at 03:30 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tourwave`
--

-- --------------------------------------------------------

--
-- Table structure for table `destinasi`
--

CREATE TABLE `destinasi` (
  `id` int NOT NULL,
  `nama` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `deskripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `deskripsi2` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `provinsi` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `gambar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `destinasi`
--

INSERT INTO `destinasi` (`id`, `nama`, `deskripsi`, `deskripsi2`, `provinsi`, `gambar`) VALUES
(2, 'Padar Island', 'Padar Island, terletak di Taman Nasional Komodo, Nusa Tenggara Timur, adalah sebuah pulau yang menakjubkan dengan pemandangan alam yang memukau. Dikenal karena lanskapnya yang dramatis dan pemandangan matahari terbenam yang spektakuler, Pulau Padar menjadi destinasi favorit para wisatawan yang mencari petualangan alam yang unik.', 'Padar Island adalah sebuah permata tersembunyi di Kepulauan Komodo. Pulau ini terkenal karena keindahan alamnya yang mempesona. Saat Anda mendekati Pulau Padar, Anda akan disambut oleh pantai berpasir putih yang bersih, perairan laut yang jernih, dan vegetasi hijau yang rimbun.  Namun, yang membuat Padar Island begitu istimewa adalah lanskapnya yang menakjubkan. Pulau ini terdiri dari bukit-bukit yang curam dan tertutup vegetasi, menciptakan pemandangan yang begitu dramatis dan memukau. Di puncak salah satu bukit, terdapat area pengamatan yang menawarkan pemandangan yang luar biasa.  Untuk mencapai puncak Padar Island, Anda perlu melewati pendakian yang menantang, tetapi usaha Anda akan terbayar dengan pemandangan yang menakjubkan. Di puncak, Anda akan disuguhi panorama yang luar biasa, dengan garis pantai yang terhampar luas di hadapan Anda. Pulau-pulau kecil dengan pantai-pantai berpasir putih, perairan laut yang berkilau, dan bukit-bukit yang menjulang memberikan kesan keindahan yang tak terlupakan.  Selai', 'Nusa Tenggara Timur (NTT)', 'padarisland.jpg'),
(3, 'Candi Borobudur', 'Candi Borobudur adalah monumen Buddha terbesar di dunia. Dibangun abad ke-9 M di Magelang, Jawa Tengah. 9 tingkat, 3 platform piramida. Stupa induk besar di tingkat atas, dikelilingi 72 stupa kecil. Relief dinding cerita Buddhis. Simbol peradaban kuno, tujuan wisata populer di Indonesia.', '', 'Jawa Tengah', 'borobudur.jpg'),
(4, 'Gunung Rinjani', 'Gunung Rinjani, terletak di Pulau Lombok, Nusa Tenggara Barat, adalah sebuah gunung berapi yang menawarkan pengalaman pendakian yang menantang dan pemandangan alam yang luar biasa. Dengan keindahan dan keagungan alamnya, Gunung Rinjani menjadi salah satu destinasi favorit para pendaki dan pencinta alam di Indonesia.', 'Gunung Rinjani adalah salah satu gunung tertinggi di Indonesia dengan ketinggian mencapai 3.726 meter di atas permukaan laut. Taman Nasional Gunung Rinjani yang mengelilingi gunung ini menawarkan keanekaragaman alam yang spektakuler, mulai dari hutan tropis yang lebat, air terjun yang menawan, hingga danau kawah yang mempesona.  Pendakian Gunung Rinjani adalah pengalaman yang menantang namun juga memuaskan. Terdapat beberapa rute pendakian yang dapat dipilih, dengan rute paling populer yaitu melalui Sembalun Lawang atau Senaru. Pendakian ini membutuhkan kekuatan fisik yang baik dan ketahanan mental, namun usaha Anda akan terbayar dengan pemandangan yang menakjubkan di sepanjang perjalanan dan di puncak gunung.  Selama pendakian, Anda akan melalui berbagai lanskap yang indah, seperti hutan hijau yang rimbun, padang rumput yang luas, dan daerah alpine yang tandus. Selain itu, ada juga beberapa tempat istirahat yang disediakan di sepanjang jalur pendakian, seperti Pelawangan Sembalun dan Pelawangan Senaru, yang ', 'Nusa Tenggara Barat (NTB)', 'rinjani.jpg'),
(5, 'Pantai Kuta', 'Pantai Kuta, terletak di Bali, adalah salah satu pantai paling terkenal di Indonesia. Dikenal karena keindahan pasir putihnya yang lembut, ombak yang cocok untuk berselancar, dan pemandangan matahari terbenam yang spektakuler, Pantai Kuta menarik ribuan pengunjung setiap tahun.', 'Pantai Kuta adalah surganya para penggemar pantai dan peselancar. Dengan pasir putih yang lembut dan panjang yang membentang sejauh mata memandang, pantai ini menawarkan tempat yang sempurna untuk bersantai, berjemur, dan menikmati keindahan alam sekitarnya. Air lautnya yang jernih dan ombaknya yang kuat menjadikannya sebagai surga bagi para peselancar yang ingin menguji keterampilan mereka di atas papan selancar.\r\n\r\n\r\nSelain itu, Pantai Kuta juga terkenal dengan pemandangan matahari terbenam yang memukau. Setiap hari, wisatawan berkumpul di pantai ini untuk menyaksikan langit yang berubah warna menjadi nuansa oranye, merah, dan ungu yang mempesona saat matahari terbenam di balik cakrawala. Pemandangan ini menciptakan momen yang romantis dan menakjubkan bagi para pengunjung.\r\n\r\n\r\nPantai Kuta juga menjadi pusat kegiatan wisata di Bali. Di sepanjang pantai, Anda akan menemukan berbagai restoran, kafe, bar, dan toko-toko yang menjual berbagai barang seperti pakaian, perhiasan, dan kerajinan tangan. Malam hari, pantai ini menjadi hidup dengan suasana yang ramai dan penuh semangat, terutama di sekitar pusat hiburan malam yang terkenal seperti Jalan Legian.\r\n\r\n\r\nBagi yang mencari petualangan air, Pantai Kuta menawarkan berbagai aktivitas seperti selancar, parasailing, jet ski, dan banana boat. Anda juga dapat menikmati pijatan santai atau menikmati minuman segar di salah satu bar tepi pantai yang menyajikan minuman khas Bali.\r\n\r\n\r\nMeskipun Pantai Kuta populer dan seringkali ramai, keindahan alam dan energi yang terpancar dari pantai ini tetap memikat banyak pengunjung. Pantai Kuta adalah tempat yang sempurna untuk bersantai, menikmati matahari, dan merasakan semangat liburan yang khas Bali.', 'Bali', 'pantaikute.jpg'),
(24, 'Kepulauan Derawan', 'Kepulauan Derawan, yang terletak di Kabupaten Berau, Kalimantan Timur, adalah destinasi wisata bahari yang memukau. Kepulauan ini menawarkan ekosistem bawah laut yang mempesona dan keasrian alam yang masih terjaga dengan baik.', 'Kepulauan Derawan adalah surga tropis di tengah Samudra Pasifik yang menarik perhatian wisatawan dari seluruh dunia. Terdiri dari beberapa pulau, seperti Pulau Derawan, Pulau Maratua, Pulau Sangalaki, dan Pulau Kakaban, kepulauan ini menawarkan keindahan alam bawah laut yang luar biasa.\r\n\r\nTaman Bawah Laut di Kepulauan Derawan menjadi magnet bagi para penyelam kelas dunia. Airnya yang jernih dan terumbu karang yang berwarna-warni menjadi rumah bagi berbagai spesies ikan, penyu, ubur-ubur, dan terumbu karang yang mengagumkan. Anda dapat menyelam atau snorkeling di sekitar kepulauan ini untuk menikmati keindahan dunia bawah laut yang menakjubkan.\r\n\r\nSelain itu, di Pulau Derawan Anda juga dapat melihat penyu hijau yang bersarang dan bertelur di pantai-pantai yang masih alami. Pulau Maratua menawarkan pantai berpasir putih yang indah, air laut yang tenang, dan hamparan terumbu karang yang memikat. Anda bisa berenang, snorkeling, atau sekadar bersantai di tepi pantai yang eksotis.\r\n\r\nPulau Sangalaki, di sisi lain, dikenal sebagai surga penyu dengan pantai pasir putih yang menggoda. Di sini, Anda dapat melihat penyu hijau dan penyu belimbing yang datang ke pantai untuk bertelur. Selain itu, Pulau Kakaban menawarkan pengalaman yang unik dengan Danau Ubur-Ubur, yang dihuni oleh ubur-ubur tanpa sengat yang langka.\r\n\r\nKeasrian alam sekitar Kepulauan Derawan masih terjaga dengan baik. Hutan bakau yang rindang dan hutan tropis yang subur mengelilingi kepulauan ini. Juga terdapat desa-desa nelayan yang ramah dan hangat, tempat Anda dapat melihat kehidupan sehari-hari masyarakat lokal dan mencicipi hidangan laut segar yang lezat.\r\n\r\nTidak heran jika Kepulauan Derawan menjadi tujuan favorit wisatawan lokal maupun internasional. Keindahan alamnya yang memukau, ekosistem bawah laut yang kaya, dan keramahan penduduk setempat menjadikan Kepulauan Derawan sebagai destinasi wisata yang tak terlupakan.', 'Kalimantan Timur', 'museumtimah.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(36, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `destinasi`
--
ALTER TABLE `destinasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `destinasi`
--
ALTER TABLE `destinasi`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
