-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 04, 2021 at 11:54 PM
-- Server version: 5.7.35-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_music`
--

-- --------------------------------------------------------

--
-- Table structure for table `albuns`
--

CREATE TABLE `albuns` (
  `id_album` int(5) NOT NULL,
  `album` varchar(100) NOT NULL,
  `img` varchar(100) DEFAULT NULL,
  `lancamento` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `albuns_artistas`
--

CREATE TABLE `albuns_artistas` (
  `album` int(5) DEFAULT NULL,
  `artista` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `albuns_generos`
--

CREATE TABLE `albuns_generos` (
  `album` int(5) DEFAULT NULL,
  `genero` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `artistas`
--

CREATE TABLE `artistas` (
  `id_artista` int(5) NOT NULL,
  `artista` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `artistas_generos`
--

CREATE TABLE `artistas_generos` (
  `artista` int(5) DEFAULT NULL,
  `genero` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `generos`
--

CREATE TABLE `generos` (
  `id_genero` int(5) NOT NULL,
  `genero` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `generos`
--

INSERT INTO `generos` (`id_genero`, `genero`) VALUES
(1, 'Grunge'),
(2, 'Alternative Metal'),
(3, 'Hard Rock'),
(4, 'Heavy Metal'),
(5, 'Sludge Metal'),
(6, 'Alternative Rock'),
(7, 'Psychedelic Rock'),
(8, 'Progressive Rock'),
(9, 'Garage Rock'),
(10, 'Blues Rock'),
(11, 'Nu Metal'),
(12, 'Pop Rock'),
(13, 'Melbourne Bounce'),
(14, 'Rap Metal'),
(15, 'Rap Rock'),
(16, 'Stoner Rock'),
(17, 'Funk Metal'),
(18, 'Southern Rock'),
(19, 'Hardcore Punk'),
(20, 'Thrash Metal'),
(21, 'Groove Metal'),
(22, 'Electronic Rock');

-- --------------------------------------------------------

--
-- Table structure for table `musicas`
--

CREATE TABLE `musicas` (
  `id_musica` int(5) NOT NULL,
  `musica` varchar(150) NOT NULL,
  `audio` varchar(100) NOT NULL,
  `album` int(5) DEFAULT NULL,
  `img` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `musicas_artistas`
--

CREATE TABLE `musicas_artistas` (
  `musica` int(5) DEFAULT NULL,
  `artista` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `musicas_generos`
--

CREATE TABLE `musicas_generos` (
  `musica` int(5) DEFAULT NULL,
  `genero` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `utilizadores`
--

CREATE TABLE `utilizadores` (
  `email` varchar(320) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(255) NOT NULL,
  `tipo` varchar(5) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `utilizadores`
--

INSERT INTO `utilizadores` (`email`, `username`, `password`, `tipo`) VALUES
('exemplo@exemplo.ex', 'a', '$2y$10$D2yVGkx3Xsx39fp8d7eyUueEaSD/WQ30CY2mfy9Ow0IuRqkwTHr0O', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `albuns`
--
ALTER TABLE `albuns`
  ADD PRIMARY KEY (`id_album`);

--
-- Indexes for table `albuns_artistas`
--
ALTER TABLE `albuns_artistas`
  ADD UNIQUE KEY `ala` (`album`,`artista`),
  ADD KEY `artista` (`artista`);

--
-- Indexes for table `albuns_generos`
--
ALTER TABLE `albuns_generos`
  ADD UNIQUE KEY `alg` (`album`,`genero`),
  ADD KEY `genero` (`genero`);

--
-- Indexes for table `artistas`
--
ALTER TABLE `artistas`
  ADD PRIMARY KEY (`id_artista`);

--
-- Indexes for table `artistas_generos`
--
ALTER TABLE `artistas_generos`
  ADD UNIQUE KEY `ag` (`artista`,`genero`),
  ADD KEY `artistas_generos_ibfk_2` (`genero`);

--
-- Indexes for table `generos`
--
ALTER TABLE `generos`
  ADD PRIMARY KEY (`id_genero`);

--
-- Indexes for table `musicas`
--
ALTER TABLE `musicas`
  ADD PRIMARY KEY (`id_musica`),
  ADD KEY `album` (`album`);

--
-- Indexes for table `musicas_artistas`
--
ALTER TABLE `musicas_artistas`
  ADD UNIQUE KEY `ma` (`musica`,`artista`),
  ADD KEY `musicas_artistas_ibfk_2` (`artista`);

--
-- Indexes for table `musicas_generos`
--
ALTER TABLE `musicas_generos`
  ADD UNIQUE KEY `mg` (`musica`,`genero`),
  ADD KEY `musicas_generos_ibfk_2` (`genero`);

--
-- Indexes for table `utilizadores`
--
ALTER TABLE `utilizadores`
  ADD UNIQUE KEY `AK_email` (`email`),
  ADD UNIQUE KEY `AK_username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `albuns`
--
ALTER TABLE `albuns`
  MODIFY `id_album` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `artistas`
--
ALTER TABLE `artistas`
  MODIFY `id_artista` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `generos`
--
ALTER TABLE `generos`
  MODIFY `id_genero` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `musicas`
--
ALTER TABLE `musicas`
  MODIFY `id_musica` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `albuns_artistas`
--
ALTER TABLE `albuns_artistas`
  ADD CONSTRAINT `albuns_artistas_ibfk_1` FOREIGN KEY (`album`) REFERENCES `albuns` (`id_album`),
  ADD CONSTRAINT `albuns_artistas_ibfk_2` FOREIGN KEY (`artista`) REFERENCES `artistas` (`id_artista`);

--
-- Constraints for table `albuns_generos`
--
ALTER TABLE `albuns_generos`
  ADD CONSTRAINT `albuns_generos_ibfk_1` FOREIGN KEY (`album`) REFERENCES `albuns` (`id_album`),
  ADD CONSTRAINT `albuns_generos_ibfk_2` FOREIGN KEY (`genero`) REFERENCES `generos` (`id_genero`);

--
-- Constraints for table `artistas_generos`
--
ALTER TABLE `artistas_generos`
  ADD CONSTRAINT `artistas_generos_ibfk_1` FOREIGN KEY (`artista`) REFERENCES `artistas` (`id_artista`),
  ADD CONSTRAINT `artistas_generos_ibfk_2` FOREIGN KEY (`genero`) REFERENCES `generos` (`id_genero`);

--
-- Constraints for table `musicas`
--
ALTER TABLE `musicas`
  ADD CONSTRAINT `musicas_ibfk_1` FOREIGN KEY (`album`) REFERENCES `albuns` (`id_album`);

--
-- Constraints for table `musicas_artistas`
--
ALTER TABLE `musicas_artistas`
  ADD CONSTRAINT `musicas_artistas_ibfk_1` FOREIGN KEY (`musica`) REFERENCES `musicas` (`id_musica`),
  ADD CONSTRAINT `musicas_artistas_ibfk_2` FOREIGN KEY (`artista`) REFERENCES `artistas` (`id_artista`);

--
-- Constraints for table `musicas_generos`
--
ALTER TABLE `musicas_generos`
  ADD CONSTRAINT `musicas_generos_ibfk_1` FOREIGN KEY (`musica`) REFERENCES `musicas` (`id_musica`),
  ADD CONSTRAINT `musicas_generos_ibfk_2` FOREIGN KEY (`genero`) REFERENCES `generos` (`id_genero`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
