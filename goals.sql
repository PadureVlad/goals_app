-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2023 at 09:36 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `examen_php`
--

-- --------------------------------------------------------

--
-- Table structure for table `goals`
--

CREATE TABLE `goals` (
  `id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `due_date` datetime NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `goals`
--

INSERT INTO `goals` (`id`, `name`, `description`, `due_date`, `created_at`, `updated_at`) VALUES
(1, 'Curs de Limba Straina', 'Absolvirea unui curs intensiv de limba straina pentru imbunatatirea abilitatilor de comunicare.', '2024-12-25 09:09:02', '2023-12-22 07:09:34', '2023-12-22 07:09:34'),
(2, 'Stil de Viata Sanatos', 'Adoptarea unui stil de viata mai sanatos, inclusiv dieta echilibrata si rutina regulata de exercitii fizice.', '2024-01-31 00:00:00', '2023-12-22 06:23:37', '2023-12-22 06:23:37'),
(3, 'Cititul Zilnic', ' Lectura a cel putin o carte pe saptamana pentru dezvoltarea personala si relaxare.', '2024-02-07 00:00:00', '2023-12-22 06:55:03', '2023-12-22 06:55:03'),
(4, 'Educatie Financiara', 'Participarea la seminarii si lectii pentru imbunatatirea cunostintelor despre gestionarea finantelor personale.', '2024-04-30 00:00:00', '2023-12-22 07:32:07', '2023-12-22 07:32:07'),
(5, 'Voluntariat Comunitar', 'Implicarea activa in proiecte de voluntariat pentru sprijinirea comunitatii locale.', '2025-06-01 00:00:00', '2023-12-22 07:32:35', '2023-12-22 07:32:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `goals`
--
ALTER TABLE `goals`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `goals`
--
ALTER TABLE `goals`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
