-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 21, 2021 at 05:44 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portofolioweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `contact` varchar(25) NOT NULL,
  `name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`contact`, `name`) VALUES
('Phone', '083824559473'),
('Email', 'yanwarsp01@gmail.com'),
('Facebook', 'Yanwar Slamet Priadi'),
('Instagram', '@yanwarslamet'),
('LinkedIn', 'Yanwar Slamet Priadi'),
('Github', 'yanwarsp');

-- --------------------------------------------------------

--
-- Table structure for table `hobbies`
--

CREATE TABLE `hobbies` (
  `name` varchar(50) DEFAULT NULL,
  `description` text,
  `image` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hobbies`
--

INSERT INTO `hobbies` (`name`, `description`, `image`) VALUES
('Music Cover and Producer', 'Bermain musik sudah menjadi kebiasaan saya sehari-hari, seperti mengcover lagu terutama lagu-lagu rock dan metal. Alat instrumen yang saya gunakan yaitu Gitar, Bass, dan Piano. Selain itu saya telah menciptakan sebuah musik instrumetal yang sudah dirilis di platform digital seperti iTunes, Spotify, Youtube Music, Deezer dan masih banyak lagi. Pada Music Producer saya biasa menggunakan Ableton Live untuk membuat musik, project musik yang saya buat lainnya banyak menggunakan unsur musik-musik tradisional seperti gamelan, suling, dan angklung namun sampai saat ini belum saya rilis ke platform digital.', NULL),
('Dream Last Night', 'Salah satu grup band asal Cirebon bergenre musik Pop-punk, grup band ini sering mengisi acara festival sekolah Menengah ke atas di wilayah Kuningan-Cirebon. Personil grup band ini terdiri dari 4 orang yang semuanya dari sekolah yang berbeda, dan saya sebagai guitarist di band ini.', 'images/hobbies/dreamlastnight.jpg'),
('Reptile Percussion', 'Sebuah grup band alat musik tradisional asal Jawa Barat, seperti angklung, calung, dan sebagainya. Saya disini sebagai bassist yang mengiringi band tersebut. Perpaduan antara musik tradisional dan modern, salah satunya kami pernah perform membawakan medley Nusantara.', 'images/hobbies/reptille.jpg'),
('Better Band', 'Band bergenre pop-rock ini pernah mengikuti beberapa kompetisi festival di Kuningan dan Cirebon. Pada awalnya saya disini sebagai guitarist, kemudian dikarenakan ada sebuah formasi ulang hal itu menjadikan saya sebagai keyboardist pada band ini.', 'images/hobbies/betterband.jpg'),
('Traveling', NULL, 'images/hobbies/travel1.jpg'),
(NULL, NULL, 'images/hobbies/travel2.jpg'),
(NULL, NULL, 'images/hobbies/travel3.jpg'),
('Counter Strike : GO', NULL, 'images/hobbies/csgo.jpg'),
('Minecraft', NULL, 'images/hobbies/minecraft.jpg'),
('eFootball 21', NULL, 'images/hobbies/pes.jpg'),
('PUBG Mobile', NULL, 'images/hobbies/pubg.jpg'),
('GTA Online', NULL, 'images/hobbies/gta.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan`
--

CREATE TABLE `pendidikan` (
  `tingkat` varchar(50) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `jurusan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendidikan`
--

INSERT INTO `pendidikan` (`tingkat`, `nama`, `jurusan`) VALUES
('SD', 'SD Negeri 2 Panambangan', NULL),
('SMP', 'SMP Negeri 1 Greged', NULL),
('SMK', 'SMK Negeri 1 Lemahabang', 'Teknik Komputer Jaringan'),
('S1', 'Universitas Pembangunan Jaya', 'Infromatika');

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `namadepan` varchar(10) NOT NULL,
  `namabelakang` varchar(30) NOT NULL,
  `tempatlahir` varchar(50) NOT NULL,
  `tgllahir` varchar(50) NOT NULL,
  `tempattgl` varchar(50) NOT NULL,
  `pasfoto` varchar(50) DEFAULT NULL,
  `pendidikan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`namadepan`, `namabelakang`, `tempatlahir`, `tgllahir`, `tempattgl`, `pasfoto`, `pendidikan`) VALUES
('Yanwar', 'Slamet Priadi', 'Cirebon', '1 Januari 2001', 'Tangerang Selatan', 'images/pasfoto.jpg', 'Sarjana Komputer (S1)');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `name` varchar(50) DEFAULT NULL,
  `description` text,
  `image` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`name`, `description`, `image`) VALUES
('Nilai-Ku', 'Nilai-Ku merupakan aplikasi desktop yang dibuat menggunakan Java untuk menyimpan data nilai mahasiswa dan perhitungan IPK.', 'images/project/nilaiku.PNG'),
('GoSisfo', 'GoSisfo merupakan sebuah website untuk CRUD institusi kampus, seperti manajemen user Dosen dan Staff.', 'images/project/gosisfo.png'),
('Smart Fire Alarm', 'Smart Fire Alarm ini adalah sebuah alat pendeteksi suhu dan api secara otomatis menggunakan arduino.', 'images/project/kitchenalarm.png'),
('Music \"Peaceful\"', 'Salah satu karya musik instrumental yang telah dipublish ke platform digital.', 'images/project/peaceful.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `name` varchar(30) NOT NULL,
  `description` text,
  `category` varchar(20) NOT NULL,
  `img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`name`, `description`, `category`, `img`) VALUES
('Java', 'Saya mempelajari Bahasa Pemrograman Java pada saat Kuliah Semester 3, mulai dari basic sampai OOP dan GUI. Aplikasi Nilai-ku adalah salah satu project saya dalam menyelesaikan UAS.', 'Programming', 'images/skill/javalogo.png'),
('Python', 'Bahasa Pemrograman ini banyak digunakan untuk data science. Saya mengikuti seminar atau workshop data science dan data analist menggunakan bahasa pemrograman python. Selain itu, pada mata kuliah Desain Analisis Algoritma juga diajarkan python. Program yang pernah dibuat adalah melakukan pencarian missing data menggunakan regresi linear yang diterapkan pada python.', 'Programming', 'images/skill/pythonlogo.png'),
('Web', 'Banyak web yang saya buat di pemrograman web seperti CRUD management user dan portofolio. saya menggunakan PHP, HTML, dan CSS untuk membuat sebuah web. Selain PHP Native saya juga menggunakan framework CodeIgniter 4 untuk membuat sebuah website.', 'Programming', 'images/skill/weblogo.png'),
('Debian Server', 'Mengelola Jaringan menggunakan debian versi 8, saya pernah mempelajarinya pada saat Sekolah Menengah Kejuruan. Contohnya membuat DHCP Server, DNS Server, Setting Proxy, dan lain-lain.', 'Jaringan', 'images/skill/debianlogo.jpg'),
('Mikrotik', 'Mampu membuat DHCP Server, DNS Server, Hotspot dengan login user, serta mengerti subnetting dikarenakan pernah internship di salah satu Internet Service Provider lokal yang menggunakan router Mikrotik.', 'Jaringan', 'images/skill/mikrotiklogo.png'),
('Cisco', 'CIsco Packet Tracer sebagai simulasi pembelajaran, memahami alat-alat yang ada pada packet tracer. Mampu melakukan routing antar router.', 'Jaringan', 'images/skill/ciscologo.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
