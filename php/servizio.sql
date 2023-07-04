-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2023 at 07:53 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `servizio`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id_keranjang` int(100) NOT NULL,
  `jumlah` int(100) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `harga_produk` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id_keranjang`, `jumlah`, `id_produk`, `harga_produk`, `kategori`) VALUES
(112, 1, 7, 'RP.1.000.000', 'Design Graphic'),
(115, 1, 12, 'RP.5.000.000', 'Digital Marketing'),
(116, 1, 9, 'RP.1.000.000', 'Design Graphic'),
(117, 1, 7, 'RP.1.000.000', 'Design Graphic'),
(127, 1, 7, 'RP.1.000.000', 'Design Graphic'),
(129, 1, 11, 'RP.1.000.000', 'Writing'),
(130, 1, 7, 'RP.1.000.000', 'Design Graphic'),
(131, 1, 11, 'RP.1.000.000', 'Writing'),
(132, 1, 7, 'RP.1.000.000', 'Design Graphic'),
(133, 1, 23, 'Rp 765.000', 'Programming'),
(134, 1, 8, 'RP.5.000.000', 'Video Editing'),
(135, 1, 10, 'RP.5.000.000', 'Music & Audio'),
(136, 1, 5, 'RP.5.000.000', 'Design Graphic'),
(137, 1, 8, 'RP.5.000.000', 'Video Editing'),
(139, 1, 8, 'RP.5.000.000', 'Video Editing'),
(140, 1, 7, 'RP.1.000.000', 'Design Graphic'),
(141, 1, 7, 'RP.1.000.000', 'Design Graphic'),
(144, 1, 18, 'RP.1.000.000', 'New Arrival'),
(145, 1, 18, 'RP.1.000.000', 'New Arrival'),
(148, 1, 7, 'RP.1.000.000', 'Design Graphic'),
(149, 1, 7, 'RP.1.000.000', 'Design Graphic'),
(151, 1, 19, 'RP.5.000.000', 'New Arrival'),
(152, 1, 7, 'RP.1.000.000', 'Design Graphic'),
(153, 1, 8, 'RP.5.000.000', 'Video Editing'),
(154, 1, 18, 'RP.1.000.000', 'New Arrival'),
(155, 1, 18, 'RP.1.000.000', 'New Arrival'),
(156, 1, 18, 'RP.1.000.000', 'New Arrival'),
(157, 1, 18, 'RP.1.000.000', 'New Arrival'),
(158, 1, 18, 'RP.1.000.000', 'New Arrival'),
(159, 1, 18, 'RP.1.000.000', 'New Arrival'),
(160, 1, 19, 'RP.5.000.000', 'New Arrival'),
(161, 1, 19, 'RP.5.000.000', 'New Arrival'),
(162, 1, 13, 'RP.5.000.000', 'Programming'),
(163, 1, 13, 'RP.5.000.000', 'Programming'),
(164, 1, 14, 'RP.1.000.000', 'Digital Marketing'),
(165, 1, 15, 'RP.1.000.000', 'Music & Audio'),
(166, 1, 19, 'RP.5.000.000', 'New Arrival'),
(167, 1, 19, 'RP.5.000.000', 'New Arrival'),
(168, 1, 18, 'RP.1.000.000', 'New Arrival'),
(169, 1, 19, 'RP.5.000.000', 'New Arrival'),
(170, 1, 7, 'RP.1.000.000', 'Design Graphic'),
(171, 1, 19, 'RP.5.000.000', 'New Arrival'),
(172, 1, 13, 'RP.5.000.000', 'Programming'),
(173, 1, 15, 'RP.1.000.000', 'Music & Audio'),
(174, 1, 13, 'RP.5.000.000', 'Programming'),
(175, 1, 13, 'RP.5.000.000', 'Programming'),
(176, 1, 19, 'RP.5.000.000', 'New Arrival'),
(177, 12312, 12, 'asasda', 'asdasd'),
(178, 1212212132, 12, 'asdasd', 'adasd'),
(179, 111133333, 1, 'asdsa', 'asdas');

-- --------------------------------------------------------

--
-- Table structure for table `freelance`
--

CREATE TABLE `freelance` (
  `id_freelance` int(110) NOT NULL,
  `id_kategori` int(110) NOT NULL,
  `nama_freelance` varchar(255) NOT NULL,
  `status_freelance` varchar(255) NOT NULL,
  `No_HP` int(110) NOT NULL,
  `foto_Freelance` varchar(255) NOT NULL,
  `freelance_email` varchar(255) NOT NULL,
  `massage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `freelance`
--

INSERT INTO `freelance` (`id_freelance`, `id_kategori`, `nama_freelance`, `status_freelance`, `No_HP`, `foto_Freelance`, `freelance_email`, `massage`) VALUES
(54, 1, 'Rasyid', 'Active', 7678968, 'imresizer-1679318013091.jpg', 'Eki@Yahuuu.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ultricies tristique nulla aliquet enim tortor at auctor. Tortor id aliquet lectus proin nibh nisl condimentum id. Iaculis urna id v'),
(55, 2, 'Maul', 'Active', 3212323, 'pexels-teddy-joseph-2955376.jpg', 'maulcuy@gmail.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ultricies tristique nulla aliquet enim tortor at auctor. Tortor id aliquet lectus proin nibh nisl condimentum id. Iaculis urna id v'),
(56, 3, 'Fajar', 'Active', 32234, 'pexels-royal-anwar-447186.jpg', 'fajar@gmail.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ultricies tristique nulla aliquet enim tortor at auctor. Tortor id aliquet lectus proin nibh nisl condimentum id. Iaculis urna id v'),
(57, 4, 'Vahri', 'Active', 2121212, 'pexels-andrea-piacquadio-3785104.jpg', 'diki@gmail.con', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ultricies tristique nulla aliquet enim tortor at auctor. Tortor id aliquet lectus proin nibh nisl condimentum id. Iaculis urna id v'),
(58, 5, 'Mayla', 'Active', 21121, 'pexels-john-diez-7578754.jpg', 'zi@mega.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ultricies tristique nulla aliquet enim tortor at auctor. Tortor id aliquet lectus proin nibh nisl condimentum id. Iaculis urna id v'),
(59, 6, 'Bambang', 'Active', 22121, 'pexels-monstera-5273717.jpg', 'bambang@gmail.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ultricies tristique nulla aliquet enim tortor at auctor. Tortor id aliquet lectus proin nibh nisl condimentum id. Iaculis urna id v'),
(60, 7, 'Toni', 'Active', 211223, 'pexels-andrea-piacquadio-837306.jpg', 'tonij@gmail.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ultricies tristique nulla aliquet enim tortor at auctor. Tortor id aliquet lectus proin nibh nisl condimentum id. Iaculis urna id v'),
(61, 8, 'Alucard', 'Active', 21211, 'Screenshot 2023-06-13 232752.png', 'javier@gmail.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ultricies tristique nulla aliquet enim tortor at auctor. Tortor id aliquet lectus proin nibh nisl condimentum id. Iaculis urna id v'),
(62, 1, 'youngi', 'Active', 2121, '201962486_511987280117443_5417848136453020643_n.jpg', 'yasrul@gmail.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et malesuada fames ac turpis egestas sed tempus. Consequat semper viverra nam libero justo laoreet sit amet. Commodo elit at imperd'),
(63, 2, 'alex', 'Active', 2147483647, 'freelance.jpg', 'soman@yahoo.com', 'asdasd'),
(64, 4, 'Joni', 'Active', 2147483647, 'pexels-kaysha-1093926.jpg', 'joniss@gmail.com', 'jadi gini');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `kategori` varchar(100) NOT NULL,
  `id_kategori` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`kategori`, `id_kategori`) VALUES
('Programming', 1),
('Video Editing', 2),
('Design Graphic', 3),
('Digital Marketing', 4),
('Music & Audio', 5),
('Writing', 6),
('Best Seller', 7),
('New Arrival', 8);

-- --------------------------------------------------------

--
-- Table structure for table `laris`
--

CREATE TABLE `laris` (
  `id_laris` int(110) NOT NULL,
  `id_order` int(110) NOT NULL,
  `id_produk` int(110) NOT NULL,
  `rating_produk` int(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laris`
--

INSERT INTO `laris` (`id_laris`, `id_order`, `id_produk`, `rating_produk`) VALUES
(93, 31, 11, 4),
(94, 32, 15, 2),
(95, 35, 7, 5),
(96, 39, 8, 5),
(97, 40, 21, 4),
(98, 41, 10, 5),
(99, 42, 26, 3),
(100, 43, 7, 3),
(101, 44, 18, 4),
(102, 45, 5, 4),
(103, 46, 15, 4),
(104, 47, 11, 5),
(105, 48, 26, 4),
(106, 49, 3, 5),
(107, 50, 13, 4),
(108, 51, 20, 2),
(109, 52, 26, 3),
(111, 54, 12, 3),
(112, 55, 19, 4),
(113, 56, 8, 5),
(114, 57, 3, 2),
(115, 58, 13, 4),
(116, 59, 7, 3),
(117, 60, 18, 4),
(118, 61, 15, 5),
(119, 62, 26, 4),
(120, 63, 5, 5),
(121, 64, 10, 4),
(122, 65, 21, 5),
(123, 66, 14, 4),
(124, 67, 11, 3),
(125, 68, 26, 4),
(126, 69, 3, 5),
(127, 70, 13, 2),
(128, 71, 20, 4),
(129, 72, 6, 3),
(130, 73, 12, 4),
(131, 121, 8, 5),
(132, 122, 8, 4),
(133, 123, 8, 4),
(134, 124, 14, 5),
(135, 125, 12, 4),
(136, 126, 8, 4),
(137, 127, 5, 4),
(138, 129, 18, 3),
(147, 138, 27, 5),
(148, 139, 5, 5),
(149, 140, 8, 3);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id_order` int(110) NOT NULL,
  `id_user` int(110) NOT NULL,
  `id_freelance` int(110) NOT NULL,
  `id_produk` int(110) NOT NULL,
  `status_order` varchar(20) DEFAULT NULL,
  `status_proses` varchar(255) DEFAULT NULL,
  `payment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id_order`, `id_user`, `id_freelance`, `id_produk`, `status_order`, `status_proses`, `payment`) VALUES
(31, 30, 59, 11, 'Confirmed', 'Completed', 'BCA'),
(32, 30, 58, 15, 'Rejected', 'Completed', 'Mandiri'),
(35, 30, 56, 7, 'Rejected', 'Completed', 'Ovo'),
(39, 36, 55, 8, 'Confirmed', 'Completed', 'Gopay'),
(40, 32, 60, 21, 'Rejected', 'Completed', 'Mandiri'),
(41, 28, 58, 10, 'Confirmed', 'Completed', 'BCA'),
(42, 34, 61, 26, 'Rejected', 'Completed', 'Gopay'),
(43, 29, 56, 7, 'Confirmed', 'Completed', 'Mandiri'),
(44, 25, 61, 18, 'Rejected', 'Completed', 'Ovo'),
(45, 33, 56, 5, 'Rejected', 'Completed', 'BCA'),
(46, 31, 58, 15, 'Confirmed', 'Completed', 'Gopay'),
(47, 35, 59, 11, 'Rejected', 'Completed', 'Mandiri'),
(48, 36, 61, 26, 'Rejected', 'Completed', 'Ovo'),
(49, 32, 55, 3, 'Confirmed', 'Completed', 'BCA'),
(50, 30, 54, 13, 'Rejected', 'Completed', 'Gopay'),
(51, 34, 60, 20, 'Confirmed', 'Completed', 'Ovo'),
(52, 29, 61, 26, 'Rejected', 'Completed', 'BCA'),
(54, 33, 57, 12, 'Rejected', 'Completed', 'Ovo'),
(55, 31, 61, 19, 'Rejected', 'Completed', 'BCA'),
(56, 35, 55, 8, 'Confirmed', 'Completed', 'Gopay'),
(57, 36, 55, 3, 'Rejected', 'Completed', 'Mandiri'),
(58, 32, 62, 13, 'Confirmed', 'Completed', 'Ovo'),
(59, 30, 56, 7, 'Rejected', 'Completed', 'BCA'),
(60, 28, 61, 18, 'Rejected', 'Completed', 'Gopay'),
(61, 34, 58, 15, 'Confirmed', 'Completed', 'Mandiri'),
(62, 29, 61, 26, 'Rejected', 'Completed', 'Ovo'),
(63, 25, 56, 5, 'Confirmed', 'Completed', 'BCA'),
(64, 33, 58, 10, 'Rejected', 'Completed', 'Gopay'),
(65, 31, 60, 21, 'Rejected', 'Completed', 'Mandiri'),
(66, 36, 57, 14, 'Rejected', 'Completed', 'BCA'),
(67, 32, 59, 11, 'Rejected', 'Completed', 'Gopay'),
(68, 30, 61, 26, 'Confirmed', 'Completed', 'Mandiri'),
(69, 28, 55, 3, 'Rejected', 'Completed', 'Ovo'),
(70, 34, 62, 13, 'Confirmed', 'Completed', 'BCA'),
(71, 25, 60, 20, 'Rejected', 'Completed', 'Mandiri'),
(72, 33, 59, 6, 'Confirmed', 'Completed', 'Ovo'),
(73, 31, 57, 12, 'Rejected', 'Completed', 'BCA'),
(121, 32, 55, 8, 'Confirmed', 'Completed', 'Mandiri'),
(122, 31, 55, 8, 'Confirmed', 'Completed', 'Ovo'),
(123, 30, 55, 8, 'Rejected', 'Completed', 'Ovo'),
(124, 30, 57, 14, 'Confirmed', 'Completed', 'Gopay'),
(125, 30, 57, 12, 'Confirmed', 'Completed', 'BCA'),
(126, 38, 55, 8, 'Confirmed', 'Completed', 'Mandiri'),
(127, 38, 56, 5, 'Confirmed', 'Completed', 'Mandiri'),
(129, 38, 61, 18, 'Rejected', 'Completed', 'Gopay'),
(138, 38, 61, 27, 'Confirmed', 'Completed', 'Mandiri'),
(139, 38, 56, 5, 'Confirmed', 'Completed', 'Mandiri'),
(140, 38, 63, 8, 'Confirmed', 'Completed', 'BCA');

-- --------------------------------------------------------

--
-- Table structure for table `pendapatan`
--

CREATE TABLE `pendapatan` (
  `id_pendapatan` int(110) NOT NULL,
  `mingguan` int(110) NOT NULL,
  `bulanan` int(110) NOT NULL,
  `tahunan` int(110) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `id_keranjang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `posisi`
--

CREATE TABLE `posisi` (
  `id_posisi` int(110) NOT NULL,
  `posisi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posisi`
--

INSERT INTO `posisi` (`id_posisi`, `posisi`) VALUES
(1, 'Programming'),
(2, 'Video Editing'),
(3, 'Design Graphic'),
(4, 'Digital Marketing'),
(5, 'Music & Audio'),
(6, 'Writing'),
(7, 'Music Composser\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(50) NOT NULL,
  `judul_produk` varchar(255) NOT NULL,
  `tersedia` varchar(100) NOT NULL,
  `revisi` varchar(100) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `waktu_pengiriman` varchar(265) NOT NULL DEFAULT current_timestamp(),
  `harga_produk` int(110) NOT NULL,
  `deskripsi_produk` varchar(255) NOT NULL,
  `gambar_produk1` varchar(255) NOT NULL,
  `gambar_produk2` varchar(255) NOT NULL,
  `gambar_produk3` varchar(255) NOT NULL,
  `detail_produk` varchar(255) NOT NULL,
  `format_produk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `judul_produk`, `tersedia`, `revisi`, `id_kategori`, `waktu_pengiriman`, `harga_produk`, `deskripsi_produk`, `gambar_produk1`, `gambar_produk2`, `gambar_produk3`, `detail_produk`, `format_produk`) VALUES
(3, 'Java', 'available', '1 time', 2, '3 days', 12000000, 'membuat web E-Commerce ', 'product6.jpg', 'product1.jpg', 'product5.jpg', 'yang penting ada CRUD', 'desain yang bagus'),
(5, 'Logo Animation', 'available', '3 kali', 3, '5 hari', 7000000, 'membuat logo desain yang bagus dan 3 dimensi', 'product3.jpg', 'product9.jpg', 'product1.jpg', 'yang penting bagus', '3 dimensi'),
(7, 'UI/UX Design', 'available', '3 kali', 3, '4 hari', 10000000, 'membuat tampilan aplikasi berbasis Mobile Phone', 'product8.jpg', 'product4.jpg', 'product2.jpg', 'yang penting bagus', 'aplikasi'),
(8, 'Character Animation', 'available', '5 kali', 2, '6 hari', 5500000, 'membuat karakater desain yang bagus dan bisa bergerak', 'product2.jpg', 'product1.jpg', 'product4.jpg', 'yang penting bagus', 'besar'),
(10, 'Voice Over', 'unavailable', '3 kali', 5, '4 hari', 4000000, 'Voice Over untuk karakter animasi  ', 'product5.jpg', 'product1.jpg', 'product10.jpg', 'Suara bisa diganti sesuai kebutuhan', 'Suara asli'),
(11, 'Book Editing ', 'available', '3 kali', 6, '4 hari', 6000000, 'mendesain Buku dengan desain yang bagus', 'product6.jpg', 'product9.jpg', 'product11.jpg', 'desain sampul buku dan isi', 'buku ukuran A5'),
(12, 'Social Media Marketing', 'available', '3 kali', 4, '3 hari', 5000000, 'menjadi Social Media Marketing yang berpengalaman', 'product4.jpg', 'product6.jpg', 'product5.jpg', 'Social Media', 'Instagram, Facebook'),
(13, 'Software Development', 'available', '3 kali', 1, '6 hari', 15000000, 'Software web spesialist', 'product7.jpg', 'product12.jpg', 'product9.jpg', 'bisa web atau mobile', 'web, mobile'),
(14, 'Video Marketing', 'available', '4 kali', 4, '4 hari', 7000000, 'membuat video marketing yang bagus', 'product10.jpg', 'product11.jpg', 'product9.jpg', 'yang penting bagus', 'iklan , short video'),
(15, 'Audio Editing', 'available', '4 kali', 5, '3 hari', 2000000, 'yakali gak jedag jedug', 'product11.jpg', 'product12.jpg', 'product10.jpg', 'no jedag jedug no party', 'MP3'),
(18, 'Artificial Intelligence', 'available', '2 times', 8, '2 days', 35000000, 'AI technology', 'iStock-1196912014.jpg', 'product8.jpg', 'banner2.png', 'yang penting bagus', 'robot'),
(19, 'Film', 'available', '3 kali', 8, '4 hari', 10000000, 'membuat film yang bagus', 'product1.jpg', 'product11.jpg', 'product6.jpg', 'yang penting bagus', 'MP4'),
(20, 'Network Engineering', 'available', '5 kali', 7, '3 hari', 14000000, 'membuat jaringan yang bagus', 'product9.jpg', 'product10.jpg', 'product12.jpg', 'yang penting bagus', 'IndiHome'),
(21, 'Javascript', 'available', '1 kali', 7, '3 hari', 11500000, 'aplikasi yang terbaik', 'product4.jpg', 'product10.jpg', 'product9.jpg', 'yang penting bagus', 'js'),
(26, 'PowerPointDesigner', 'unavailable', '3', 8, '4 Hari', 1500000, 'saya akan melakukan desing terhadap ppt anda', 'product9.jpg', 'product8.jpg', 'product9.jpg', 'desain ppt aesi', 'apani'),
(27, '8 Bit Game Develop', 'available', '3 times', 8, '6 days', 15000000, 'bisa bikin game 8 bit', 'game_designer.jpg', 'game_designer.jpg', 'i-gamedev.jpg', 'jadi gituuu looooo', 'Low poly 8 bit game'),
(28, '3D Modeling', 'available', '3times', 3, '4days', 10000000, 'Bisa Buatt 3d modeling apapun', 'R.gif', 'nondestructive_live_retargeting.png', 'maxresdefault.jpg', 'membuat 3D modeling', 'Blender 3D Modeling');

-- --------------------------------------------------------

--
-- Table structure for table `proses`
--

CREATE TABLE `proses` (
  `id_servis` int(100) NOT NULL,
  `id_order` int(110) NOT NULL,
  `tanggal` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `pendapatan` int(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `proses`
--

INSERT INTO `proses` (`id_servis`, `id_order`, `tanggal`, `pendapatan`) VALUES
(74, 31, '2022-12-14 16:52:06.453148', 6000000),
(77, 32, '2022-12-22 16:52:06.492382', 2000000),
(80, 35, '2022-12-23 16:52:06.520763', 10000000),
(84, 39, '2023-01-03 16:52:06.547852', 5500000),
(85, 40, '2023-02-08 16:52:06.577005', 11500000),
(86, 41, '2023-01-10 16:52:06.604546', 4000000),
(87, 42, '2023-01-12 16:52:06.631715', 1500000),
(88, 43, '2023-01-25 16:52:06.660123', 10000000),
(89, 44, '2023-02-08 16:52:06.689241', 35000000),
(90, 45, '2023-02-28 16:52:06.718081', 7000000),
(91, 46, '2023-03-15 16:52:06.746238', 2000000),
(92, 47, '2023-04-04 16:52:06.774862', 6000000),
(93, 48, '2023-04-12 16:52:06.801958', 1500000),
(94, 49, '2023-04-20 16:52:06.829848', 12000000),
(95, 50, '2023-04-21 16:52:06.858341', 15000000),
(96, 51, '2023-04-22 16:52:06.886407', 14000000),
(97, 52, '2023-05-29 16:52:06.915069', 1500000),
(99, 54, '2023-04-30 16:52:06.941910', 5000000),
(100, 55, '2023-05-03 16:52:06.971109', 10000000),
(101, 56, '2023-05-11 16:52:06.996230', 5500000),
(102, 57, '2023-05-19 16:52:07.022229', 12000000),
(103, 58, '2023-05-23 16:52:07.049057', 15000000),
(104, 59, '2023-05-25 16:52:07.077472', 10000000),
(105, 60, '2023-05-29 16:52:07.102812', 35000000),
(106, 61, '2023-06-14 16:52:07.127838', 2000000),
(107, 62, '2023-06-23 16:52:07.152034', 1500000),
(108, 63, '2023-06-23 16:52:07.176697', 7000000),
(109, 64, '2023-06-24 16:52:07.199966', 4000000),
(110, 65, '2023-06-26 16:52:07.230224', 11500000),
(111, 66, '2023-06-27 16:52:07.257447', 7000000),
(112, 67, '2023-06-28 16:52:07.284621', 6000000),
(113, 68, '2023-06-28 16:52:07.310814', 1500000),
(114, 69, '2023-06-28 16:52:07.337662', 12000000),
(115, 70, '2023-06-29 16:52:07.364435', 15000000),
(116, 71, '2023-06-30 16:52:07.391899', 14000000),
(117, 72, '2023-06-29 17:00:00.000000', 0),
(118, 73, '2023-07-01 16:52:07.419858', 5000000),
(122, 121, '2023-07-02 16:52:07.447770', 5500000),
(123, 122, '2023-07-03 16:52:07.475577', 5500000),
(124, 123, '2023-07-03 16:52:07.503122', 5500000),
(125, 124, '2023-07-03 16:52:07.530197', 7000000),
(126, 125, '2023-07-04 16:52:07.557343', 5000000),
(127, 126, '2023-07-04 16:52:07.586210', 5500000),
(128, 127, '2023-07-04 16:52:07.616107', 7000000),
(130, 129, '2023-07-04 16:52:07.642766', 35000000),
(136, 138, '2023-07-05 16:52:07.670304', 15000000),
(137, 139, '2023-07-04 17:00:00.000000', 7000000),
(138, 140, '2023-07-03 17:00:00.000000', 5500000);

-- --------------------------------------------------------

--
-- Table structure for table `rate_freelance`
--

CREATE TABLE `rate_freelance` (
  `id_RTfreelance` int(11) NOT NULL,
  `id_order` int(11) NOT NULL,
  `id_freelance` int(11) NOT NULL,
  `rating_freelance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rate_freelance`
--

INSERT INTO `rate_freelance` (`id_RTfreelance`, `id_order`, `id_freelance`, `rating_freelance`) VALUES
(2, 31, 59, 4),
(3, 32, 58, 3),
(4, 35, 56, 5),
(5, 39, 55, 2),
(6, 40, 58, 5),
(7, 41, 61, 4),
(8, 42, 56, 1),
(9, 43, 61, 5),
(10, 44, 56, 3),
(11, 45, 58, 2),
(12, 46, 59, 4),
(13, 47, 61, 5),
(14, 48, 55, 3),
(15, 49, 54, 4),
(16, 50, 60, 2),
(17, 51, 61, 3),
(18, 52, 59, 5),
(20, 54, 61, 2),
(21, 55, 55, 4),
(22, 56, 55, 5),
(23, 57, 62, 3),
(24, 58, 56, 4),
(25, 59, 61, 2),
(26, 60, 58, 3),
(27, 61, 61, 5),
(28, 62, 56, 4),
(29, 63, 58, 2),
(30, 64, 60, 3),
(31, 65, 57, 4),
(32, 66, 59, 5),
(33, 67, 61, 2),
(34, 68, 55, 4),
(35, 69, 62, 3),
(36, 70, 60, 4),
(37, 71, 59, 2),
(38, 72, 61, 5),
(39, 73, 55, 4),
(40, 121, 62, 3),
(41, 122, 60, 5),
(42, 123, 59, 2),
(43, 124, 57, 3),
(44, 125, 55, 5),
(45, 126, 55, 4),
(46, 127, 55, 2),
(47, 129, 61, 4),
(55, 138, 61, 4),
(56, 139, 56, 5),
(57, 140, 63, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `tanggal_lahir` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `kelamin` varchar(100) NOT NULL,
  `nomor_telepon` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `first_name`, `last_name`, `email`, `pass`, `tanggal_lahir`, `kelamin`, `nomor_telepon`) VALUES
(19, 'admin', 'admin', 'admin123@gmail.com', '0192023a7bbd73250516f069df18b500', '2003-08-07 17:00:00.000000', 'Male', '08999332211'),
(25, 'rabby', 'ahsan', 'rabby123@gmail.com', 'e6b49dabbe9e02a1b42420ff8956a140', '2003-08-07 17:00:00.000000', 'Male', '08999332211'),
(28, 'maul', 'muhammad', 'bukanmaul1@gmail.com', '5e1ddf63ac95d7ab44de084ea9f94ee6', '0000-00-00 00:00:00.000000', 'Male', '0811236869'),
(29, 'ki', 'bo', 'kibo@gmail.com', '1f8f3b2b548698f70948be5202268b2d', '0000-00-00 00:00:00.000000', 'Female', '0808122112'),
(30, 'eki', 'aja', 'Eki@Yahuuu.com', '25d55ad283aa400af464c76d713c07ad', '0000-00-00 00:00:00.000000', 'Male', '0812412412'),
(31, 'Irfan', 'Jos', 'irfan12@gmail.com', '25d55ad283aa400af464c76d713c07ad', '0000-00-00 00:00:00.000000', 'Male', '08283232323'),
(32, 'fler', 'alfreda', 'fler@gmail.com', '25d55ad283aa400af464c76d713c07ad', '0000-00-00 00:00:00.000000', 'Male', '0823846436345'),
(33, 'John', 'Doe', 'john@gmail.com', '12345678', '2000-12-31 17:00:00.000000', 'Male', '081234567890'),
(34, 'Jane', 'Smith', 'jane@gmail.com', '12345678', '2001-02-01 17:00:00.000000', 'Female', '081234567891'),
(35, 'Michael', 'Johnson', 'michael@gmail.com', '12345678', '2001-03-02 17:00:00.000000', 'Male', '081234567892'),
(36, 'Emily', 'Williams', 'emily@gmail.com', '12345678', '2001-04-03 17:00:00.000000', 'Female', '081234567893'),
(37, 'David', 'Brown', 'david@gmail.com', '12345678', '2001-05-04 17:00:00.000000', 'Male', '081234567894'),
(38, 'Naruto', 'Uzumaki', 'rasenggan@gmail.com', '25d55ad283aa400af464c76d713c07ad', '0000-00-00 00:00:00.000000', 'Male', '0823213244');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_keranjang`);

--
-- Indexes for table `freelance`
--
ALTER TABLE `freelance`
  ADD PRIMARY KEY (`id_freelance`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `laris`
--
ALTER TABLE `laris`
  ADD PRIMARY KEY (`id_laris`),
  ADD UNIQUE KEY `id_order` (`id_order`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `id_user` (`id_user`,`id_freelance`,`id_produk`);

--
-- Indexes for table `pendapatan`
--
ALTER TABLE `pendapatan`
  ADD PRIMARY KEY (`id_pendapatan`),
  ADD UNIQUE KEY `id_produk` (`id_produk`,`id_keranjang`);

--
-- Indexes for table `posisi`
--
ALTER TABLE `posisi`
  ADD PRIMARY KEY (`id_posisi`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `proses`
--
ALTER TABLE `proses`
  ADD PRIMARY KEY (`id_servis`),
  ADD UNIQUE KEY `id_order` (`id_order`);

--
-- Indexes for table `rate_freelance`
--
ALTER TABLE `rate_freelance`
  ADD PRIMARY KEY (`id_RTfreelance`),
  ADD UNIQUE KEY `id_order` (`id_order`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id_keranjang` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=180;

--
-- AUTO_INCREMENT for table `freelance`
--
ALTER TABLE `freelance`
  MODIFY `id_freelance` int(110) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `laris`
--
ALTER TABLE `laris`
  MODIFY `id_laris` int(110) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id_order` int(110) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- AUTO_INCREMENT for table `pendapatan`
--
ALTER TABLE `pendapatan`
  MODIFY `id_pendapatan` int(110) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posisi`
--
ALTER TABLE `posisi`
  MODIFY `id_posisi` int(110) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `proses`
--
ALTER TABLE `proses`
  MODIFY `id_servis` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;

--
-- AUTO_INCREMENT for table `rate_freelance`
--
ALTER TABLE `rate_freelance`
  MODIFY `id_RTfreelance` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
