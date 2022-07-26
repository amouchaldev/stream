-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2022 at 03:36 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stream`
--

-- --------------------------------------------------------

--
-- Table structure for table `episode`
--

CREATE TABLE `episode` (
  `epi_id` int(11) NOT NULL,
  `serie_id` int(11) DEFAULT NULL,
  `season_id` int(11) DEFAULT NULL,
  `seasonNum` int(11) DEFAULT NULL,
  `epiNum` int(11) DEFAULT NULL,
  `streamServ` varchar(1000) DEFAULT NULL,
  `downloadServ` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `episode`
--

INSERT INTO `episode` (`epi_id`, `serie_id`, `season_id`, `seasonNum`, `epiNum`, `streamServ`, `downloadServ`) VALUES
(49, 52, 16, 1, 1, '[{\"name\":\"goved\",\"link\":\"https://goved.org/embed-11h3qysvm4cd.html\",\"quality\":\"FHD\"}]', '[{\"name\":\"uptobox \",\"link\":\"https://uptobox.com/4ws9dejtbnv7\",\"quality\":\"1080p\"}]'),
(50, 52, 16, 1, 2, '[{\"name\":\"vidbam\",\"link\":\"https://skyvid.cyou/embed-dfq0gpdu0ane.html\",\"quality\":\"HD\"},{\"name\":\"uptostream\",\"link\":\"https://uptostream.com/iframe/4ws9dejtbnv7\",\"quality\":\"SD\"},{\"name\":\"uqload\",\"link\":\"https://uqload.com/embed-ki97exx2xkjy.html\",\"quality\":\"HD\"},{\"name\":\"goved\",\"link\":\"https://goved.org/embed-11h3qysvm4cd.html\",\"quality\":\"FHD\"}]', '[{\"name\":\"1fichier \",\"link\":\"https://1fichier.com/?nbs6v0bx24wj21g3hzq6\",\"quality\":\"720p\"},{\"name\":\"upbam \",\"link\":\"https://upbam.org/6h1rlcit7cg1\",\"quality\":\"FHD\"},{\"name\":\"uptobox \",\"link\":\"https://uptobox.com/4ws9dejtbnv7\",\"quality\":\"1080p\"}]'),
(51, 52, 16, 1, 3, '[{\"name\":\"vidbam\",\"link\":\"https://skyvid.cyou/embed-dfq0gpdu0ane.html\",\"quality\":\"HD\"},{\"name\":\"uptostream\",\"link\":\"https://uptostream.com/iframe/4ws9dejtbnv7\",\"quality\":\"SD\"},{\"name\":\"uqload\",\"link\":\"https://uqload.com/embed-ki97exx2xkjy.html\",\"quality\":\"HD\"},{\"name\":\"goved\",\"link\":\"https://goved.org/embed-11h3qysvm4cd.html\",\"quality\":\"FHD\"}]', '[{\"name\":\"1fichier \",\"link\":\"https://1fichier.com/?nbs6v0bx24wj21g3hzq6\",\"quality\":\"720p\"},{\"name\":\"upbam \",\"link\":\"https://upbam.org/6h1rlcit7cg1\",\"quality\":\"FHD\"},{\"name\":\"uptobox \",\"link\":\"https://uptobox.com/4ws9dejtbnv7\",\"quality\":\"1080p\"}]'),
(52, 52, 16, 1, 4, '[{\"name\":\"vidbam\",\"link\":\"https://skyvid.cyou/embed-dfq0gpdu0ane.html\",\"quality\":\"HD\"},{\"name\":\"uptostream\",\"link\":\"https://uptostream.com/iframe/4ws9dejtbnv7\",\"quality\":\"SD\"},{\"name\":\"uqload\",\"link\":\"https://uqload.com/embed-ki97exx2xkjy.html\",\"quality\":\"HD\"},{\"name\":\"goved\",\"link\":\"https://goved.org/embed-11h3qysvm4cd.html\",\"quality\":\"FHD\"}]', '[{\"name\":\"1fichier \",\"link\":\"https://1fichier.com/?nbs6v0bx24wj21g3hzq6\",\"quality\":\"720p\"},{\"name\":\"upbam \",\"link\":\"https://upbam.org/6h1rlcit7cg1\",\"quality\":\"FHD\"},{\"name\":\"uptobox \",\"link\":\"https://uptobox.com/4ws9dejtbnv7\",\"quality\":\"1080p\"}]'),
(53, 52, 16, 1, 5, '[{\"name\":\"vidbam\",\"link\":\"https://skyvid.cyou/embed-dfq0gpdu0ane.html\",\"quality\":\"HD\"},{\"name\":\"uptostream\",\"link\":\"https://uptostream.com/iframe/4ws9dejtbnv7\",\"quality\":\"SD\"},{\"name\":\"uqload\",\"link\":\"https://uqload.com/embed-ki97exx2xkjy.html\",\"quality\":\"HD\"},{\"name\":\"goved\",\"link\":\"https://goved.org/embed-11h3qysvm4cd.html\",\"quality\":\"FHD\"}]', '[{\"name\":\"1fichier \",\"link\":\"https://1fichier.com/?nbs6v0bx24wj21g3hzq6\",\"quality\":\"720p\"},{\"name\":\"upbam \",\"link\":\"https://upbam.org/6h1rlcit7cg1\",\"quality\":\"FHD\"},{\"name\":\"uptobox \",\"link\":\"https://uptobox.com/4ws9dejtbnv7\",\"quality\":\"1080p\"}]'),
(54, 52, 16, 1, 6, '[{\"name\":\"vidbam\",\"link\":\"https://skyvid.cyou/embed-dfq0gpdu0ane.html\",\"quality\":\"HD\"},{\"name\":\"uptostream\",\"link\":\"https://uptostream.com/iframe/4ws9dejtbnv7\",\"quality\":\"SD\"},{\"name\":\"uqload\",\"link\":\"https://uqload.com/embed-ki97exx2xkjy.html\",\"quality\":\"HD\"},{\"name\":\"goved\",\"link\":\"https://goved.org/embed-11h3qysvm4cd.html\",\"quality\":\"FHD\"}]', '[{\"name\":\"1fichier \",\"link\":\"https://1fichier.com/?nbs6v0bx24wj21g3hzq6\",\"quality\":\"720p\"},{\"name\":\"upbam \",\"link\":\"https://upbam.org/6h1rlcit7cg1\",\"quality\":\"FHD\"},{\"name\":\"uptobox \",\"link\":\"https://uptobox.com/4ws9dejtbnv7\",\"quality\":\"1080p\"}]'),
(55, 52, 16, 1, 7, '[{\"name\":\"vidbam\",\"link\":\"https://skyvid.cyou/embed-dfq0gpdu0ane.html\",\"quality\":\"HD\"},{\"name\":\"uptostream\",\"link\":\"https://uptostream.com/iframe/4ws9dejtbnv7\",\"quality\":\"SD\"},{\"name\":\"uqload\",\"link\":\"https://uqload.com/embed-ki97exx2xkjy.html\",\"quality\":\"HD\"},{\"name\":\"goved\",\"link\":\"https://goved.org/embed-11h3qysvm4cd.html\",\"quality\":\"FHD\"}]', '[{\"name\":\"1fichier \",\"link\":\"https://1fichier.com/?nbs6v0bx24wj21g3hzq6\",\"quality\":\"720p\"},{\"name\":\"upbam \",\"link\":\"https://upbam.org/6h1rlcit7cg1\",\"quality\":\"FHD\"},{\"name\":\"uptobox \",\"link\":\"https://uptobox.com/4ws9dejtbnv7\",\"quality\":\"1080p\"}]'),
(56, 52, 16, 1, 8, '[{\"name\":\"vidbam\",\"link\":\"https://skyvid.cyou/embed-dfq0gpdu0ane.html\",\"quality\":\"HD\"},{\"name\":\"uptostream\",\"link\":\"https://uptostream.com/iframe/4ws9dejtbnv7\",\"quality\":\"SD\"},{\"name\":\"uqload\",\"link\":\"https://uqload.com/embed-ki97exx2xkjy.html\",\"quality\":\"HD\"},{\"name\":\"goved\",\"link\":\"https://goved.org/embed-11h3qysvm4cd.html\",\"quality\":\"FHD\"}]', '[{\"name\":\"1fichier \",\"link\":\"https://1fichier.com/?nbs6v0bx24wj21g3hzq6\",\"quality\":\"720p\"},{\"name\":\"upbam \",\"link\":\"https://upbam.org/6h1rlcit7cg1\",\"quality\":\"FHD\"},{\"name\":\"uptobox \",\"link\":\"https://uptobox.com/4ws9dejtbnv7\",\"quality\":\"1080p\"}]'),
(57, 52, 16, 1, 9, '[{\"name\":\"vidbam\",\"link\":\"https://skyvid.cyou/embed-dfq0gpdu0ane.html\",\"quality\":\"HD\"},{\"name\":\"uptostream\",\"link\":\"https://uptostream.com/iframe/4ws9dejtbnv7\",\"quality\":\"SD\"},{\"name\":\"uqload\",\"link\":\"https://uqload.com/embed-ki97exx2xkjy.html\",\"quality\":\"HD\"},{\"name\":\"goved\",\"link\":\"https://goved.org/embed-11h3qysvm4cd.html\",\"quality\":\"FHD\"}]', '[{\"name\":\"1fichier \",\"link\":\"https://1fichier.com/?nbs6v0bx24wj21g3hzq6\",\"quality\":\"720p\"},{\"name\":\"upbam \",\"link\":\"https://upbam.org/6h1rlcit7cg1\",\"quality\":\"FHD\"},{\"name\":\"uptobox \",\"link\":\"https://uptobox.com/4ws9dejtbnv7\",\"quality\":\"1080p\"}]'),
(58, 52, 16, 1, 10, '[{\"name\":\"vidbam\",\"link\":\"https://skyvid.cyou/embed-dfq0gpdu0ane.html\",\"quality\":\"HD\"},{\"name\":\"uptostream\",\"link\":\"https://uptostream.com/iframe/4ws9dejtbnv7\",\"quality\":\"SD\"},{\"name\":\"uqload\",\"link\":\"https://uqload.com/embed-ki97exx2xkjy.html\",\"quality\":\"HD\"},{\"name\":\"goved\",\"link\":\"https://goved.org/embed-11h3qysvm4cd.html\",\"quality\":\"FHD\"}]', '[{\"name\":\"1fichier \",\"link\":\"https://1fichier.com/?nbs6v0bx24wj21g3hzq6\",\"quality\":\"720p\"},{\"name\":\"upbam \",\"link\":\"https://upbam.org/6h1rlcit7cg1\",\"quality\":\"FHD\"},{\"name\":\"uptobox \",\"link\":\"https://uptobox.com/4ws9dejtbnv7\",\"quality\":\"1080p\"}]'),
(59, 52, 16, 1, 11, '[{\"name\":\"vidbam\",\"link\":\"https://skyvid.cyou/embed-dfq0gpdu0ane.html\",\"quality\":\"HD\"},{\"name\":\"uptostream\",\"link\":\"https://uptostream.com/iframe/4ws9dejtbnv7\",\"quality\":\"SD\"},{\"name\":\"uqload\",\"link\":\"https://uqload.com/embed-ki97exx2xkjy.html\",\"quality\":\"HD\"},{\"name\":\"goved\",\"link\":\"https://goved.org/embed-11h3qysvm4cd.html\",\"quality\":\"FHD\"}]', '[{\"name\":\"1fichier \",\"link\":\"https://1fichier.com/?nbs6v0bx24wj21g3hzq6\",\"quality\":\"720p\"},{\"name\":\"upbam \",\"link\":\"https://upbam.org/6h1rlcit7cg1\",\"quality\":\"FHD\"},{\"name\":\"uptobox \",\"link\":\"https://uptobox.com/4ws9dejtbnv7\",\"quality\":\"1080p\"}]'),
(60, 52, 16, 1, 12, '[{\"name\":\"vidbam\",\"link\":\"https://skyvid.cyou/embed-dfq0gpdu0ane.html\",\"quality\":\"HD\"},{\"name\":\"uptostream\",\"link\":\"https://uptostream.com/iframe/4ws9dejtbnv7\",\"quality\":\"SD\"},{\"name\":\"uqload\",\"link\":\"https://uqload.com/embed-ki97exx2xkjy.html\",\"quality\":\"HD\"},{\"name\":\"goved\",\"link\":\"https://goved.org/embed-11h3qysvm4cd.html\",\"quality\":\"FHD\"}]', '[{\"name\":\"1fichier \",\"link\":\"https://1fichier.com/?nbs6v0bx24wj21g3hzq6\",\"quality\":\"720p\"},{\"name\":\"upbam \",\"link\":\"https://upbam.org/6h1rlcit7cg1\",\"quality\":\"FHD\"},{\"name\":\"uptobox \",\"link\":\"https://uptobox.com/4ws9dejtbnv7\",\"quality\":\"1080p\"}]'),
(61, 52, 16, 1, 13, '[{\"name\":\"vidbam\",\"link\":\"https://skyvid.cyou/embed-dfq0gpdu0ane.html\",\"quality\":\"HD\"},{\"name\":\"uptostream\",\"link\":\"https://uptostream.com/iframe/4ws9dejtbnv7\",\"quality\":\"SD\"},{\"name\":\"uqload\",\"link\":\"https://uqload.com/embed-ki97exx2xkjy.html\",\"quality\":\"HD\"},{\"name\":\"goved\",\"link\":\"https://goved.org/embed-11h3qysvm4cd.html\",\"quality\":\"FHD\"}]', '[{\"name\":\"1fichier \",\"link\":\"https://1fichier.com/?nbs6v0bx24wj21g3hzq6\",\"quality\":\"720p\"},{\"name\":\"upbam \",\"link\":\"https://upbam.org/6h1rlcit7cg1\",\"quality\":\"FHD\"},{\"name\":\"uptobox \",\"link\":\"https://uptobox.com/4ws9dejtbnv7\",\"quality\":\"1080p\"}]'),
(62, 52, 16, 1, 14, '[{\"name\":\"vidbam\",\"link\":\"https://skyvid.cyou/embed-dfq0gpdu0ane.html\",\"quality\":\"HD\"},{\"name\":\"uptostream\",\"link\":\"https://uptostream.com/iframe/4ws9dejtbnv7\",\"quality\":\"SD\"},{\"name\":\"uqload\",\"link\":\"https://uqload.com/embed-ki97exx2xkjy.html\",\"quality\":\"HD\"},{\"name\":\"goved\",\"link\":\"https://goved.org/embed-11h3qysvm4cd.html\",\"quality\":\"FHD\"}]', '[{\"name\":\"1fichier \",\"link\":\"https://1fichier.com/?nbs6v0bx24wj21g3hzq6\",\"quality\":\"720p\"},{\"name\":\"upbam \",\"link\":\"https://upbam.org/6h1rlcit7cg1\",\"quality\":\"FHD\"},{\"name\":\"uptobox \",\"link\":\"https://uptobox.com/4ws9dejtbnv7\",\"quality\":\"1080p\"}]'),
(63, 52, 16, 1, 15, '[{\"name\":\"vidbam\",\"link\":\"https://skyvid.cyou/embed-dfq0gpdu0ane.html\",\"quality\":\"HD\"},{\"name\":\"uptostream\",\"link\":\"https://uptostream.com/iframe/4ws9dejtbnv7\",\"quality\":\"SD\"},{\"name\":\"uqload\",\"link\":\"https://uqload.com/embed-ki97exx2xkjy.html\",\"quality\":\"HD\"},{\"name\":\"goved\",\"link\":\"https://goved.org/embed-11h3qysvm4cd.html\",\"quality\":\"FHD\"}]', '[{\"name\":\"1fichier \",\"link\":\"https://1fichier.com/?nbs6v0bx24wj21g3hzq6\",\"quality\":\"720p\"},{\"name\":\"upbam \",\"link\":\"https://upbam.org/6h1rlcit7cg1\",\"quality\":\"FHD\"},{\"name\":\"uptobox \",\"link\":\"https://uptobox.com/4ws9dejtbnv7\",\"quality\":\"1080p\"}]'),
(64, 52, 16, 1, 16, '[{\"name\":\"vidbam\",\"link\":\"https://skyvid.cyou/embed-dfq0gpdu0ane.html\",\"quality\":\"HD\"},{\"name\":\"uptostream\",\"link\":\"https://uptostream.com/iframe/4ws9dejtbnv7\",\"quality\":\"SD\"},{\"name\":\"uqload\",\"link\":\"https://uqload.com/embed-ki97exx2xkjy.html\",\"quality\":\"HD\"},{\"name\":\"goved\",\"link\":\"https://goved.org/embed-11h3qysvm4cd.html\",\"quality\":\"FHD\"}]', '[{\"name\":\"1fichier \",\"link\":\"https://1fichier.com/?nbs6v0bx24wj21g3hzq6\",\"quality\":\"720p\"},{\"name\":\"upbam \",\"link\":\"https://upbam.org/6h1rlcit7cg1\",\"quality\":\"FHD\"},{\"name\":\"uptobox \",\"link\":\"https://uptobox.com/4ws9dejtbnv7\",\"quality\":\"1080p\"}]'),
(65, 52, 16, 1, 17, '[{\"name\":\"vidbam\",\"link\":\"https://skyvid.cyou/embed-dfq0gpdu0ane.html\",\"quality\":\"HD\"},{\"name\":\"uptostream\",\"link\":\"https://uptostream.com/iframe/4ws9dejtbnv7\",\"quality\":\"SD\"},{\"name\":\"uqload\",\"link\":\"https://uqload.com/embed-ki97exx2xkjy.html\",\"quality\":\"HD\"},{\"name\":\"goved\",\"link\":\"https://goved.org/embed-11h3qysvm4cd.html\",\"quality\":\"FHD\"}]', '[{\"name\":\"1fichier \",\"link\":\"https://1fichier.com/?nbs6v0bx24wj21g3hzq6\",\"quality\":\"720p\"},{\"name\":\"upbam \",\"link\":\"https://upbam.org/6h1rlcit7cg1\",\"quality\":\"FHD\"},{\"name\":\"uptobox \",\"link\":\"https://uptobox.com/4ws9dejtbnv7\",\"quality\":\"1080p\"}]'),
(66, 52, 16, 1, 19, '[{\"name\":\"vidbam\",\"link\":\"https://skyvid.cyou/embed-dfq0gpdu0ane.html\",\"quality\":\"HD\"},{\"name\":\"uptostream\",\"link\":\"https://uptostream.com/iframe/4ws9dejtbnv7\",\"quality\":\"SD\"},{\"name\":\"uqload\",\"link\":\"https://uqload.com/embed-ki97exx2xkjy.html\",\"quality\":\"HD\"},{\"name\":\"goved\",\"link\":\"https://goved.org/embed-11h3qysvm4cd.html\",\"quality\":\"FHD\"}]', '[{\"name\":\"1fichier \",\"link\":\"https://1fichier.com/?nbs6v0bx24wj21g3hzq6\",\"quality\":\"720p\"},{\"name\":\"upbam \",\"link\":\"https://upbam.org/6h1rlcit7cg1\",\"quality\":\"FHD\"},{\"name\":\"uptobox \",\"link\":\"https://uptobox.com/4ws9dejtbnv7\",\"quality\":\"1080p\"}]'),
(69, 53, 15, 1, 1, '[{\"name\":\"govedMe\",\"link\":\"https://goved.org/embed-r9po7prn55ib.html\",\"quality\":\"FHD\"},{\"name\":\"vidshar\",\"link\":\"https://vidshar.org/embed-1xdtxhefk0fv.html\",\"quality\":\"HD\"}]', '[{\"name\":\"uppom \",\"link\":\"https://uppom.net/inzhghusimcx/CimaClub.Cam-the.blacklist.s01e02._720p_.mkv.html\",\"quality\":\"720p\"},{\"name\":\"filerio \",\"link\":\"https://filerio.in/ccv20aphg3sl\",\"quality\":\"720p\"},{\"name\":\"uppomuptobox \",\"link\":\"https://uptobox.com/sljefff84vpo\",\"quality\":\"1080P\"}]'),
(70, 53, 15, 1, 2, '[{\"name\":\"govedMe\",\"link\":\"https://goved.org/embed-r9po7prn55ib.html\",\"quality\":\"FHD\"},{\"name\":\"vidshar\",\"link\":\"https://vidshar.org/embed-1xdtxhefk0fv.html\",\"quality\":\"HD\"}]', '[{\"name\":\"uppom \",\"link\":\"https://uppom.net/inzhghusimcx/CimaClub.Cam-the.blacklist.s01e02._720p_.mkv.html\",\"quality\":\"720p\"},{\"name\":\"filerio \",\"link\":\"https://filerio.in/ccv20aphg3sl\",\"quality\":\"720p\"},{\"name\":\"uppomuptobox \",\"link\":\"https://uptobox.com/sljefff84vpo\",\"quality\":\"1080P\"}]'),
(71, 53, 15, 1, 3, '[{\"name\":\"govedMe\",\"link\":\"https://goved.org/embed-r9po7prn55ib.html\",\"quality\":\"FHD\"},{\"name\":\"vidshar\",\"link\":\"https://vidshar.org/embed-1xdtxhefk0fv.html\",\"quality\":\"HD\"}]', '[{\"name\":\"uppom \",\"link\":\"https://uppom.net/inzhghusimcx/CimaClub.Cam-the.blacklist.s01e02._720p_.mkv.html\",\"quality\":\"720p\"},{\"name\":\"filerio \",\"link\":\"https://filerio.in/ccv20aphg3sl\",\"quality\":\"720p\"},{\"name\":\"uppomuptobox \",\"link\":\"https://uptobox.com/sljefff84vpo\",\"quality\":\"1080P\"}]'),
(72, 53, 15, 1, 4, '[{\"name\":\"govedMe\",\"link\":\"https://goved.org/embed-r9po7prn55ib.html\",\"quality\":\"SD\"},{\"name\":\"vidshar\",\"link\":\"https://vidshar.org/embed-1xdtxhefk0fv.html\",\"quality\":\"HD\"}]', '[{\"name\":\"uppom \",\"link\":\"https://uppom.net/inzhghusimcx/CimaClub.Cam-the.blacklist.s01e02._720p_.mkv.html\",\"quality\":\"720p\"},{\"name\":\"filerio \",\"link\":\"https://filerio.in/ccv20aphg3sl\",\"quality\":\"720p\"},{\"name\":\"uppomuptobox \",\"link\":\"https://uptobox.com/sljefff84vpo\",\"quality\":\"1080P\"}]'),
(73, 53, 15, 1, 5, '[{\"name\":\"govedMe\",\"link\":\"https://goved.org/embed-r9po7prn55ib.html\",\"quality\":\"SD\"},{\"name\":\"vidshar\",\"link\":\"https://vidshar.org/embed-1xdtxhefk0fv.html\",\"quality\":\"HD\"}]', '[{\"name\":\"uppom \",\"link\":\"https://uppom.net/inzhghusimcx/CimaClub.Cam-the.blacklist.s01e02._720p_.mkv.html\",\"quality\":\"720p\"},{\"name\":\"filerio \",\"link\":\"https://filerio.in/ccv20aphg3sl\",\"quality\":\"720p\"},{\"name\":\"uppomuptobox \",\"link\":\"https://uptobox.com/sljefff84vpo\",\"quality\":\"1080P\"}]'),
(74, 53, 15, 1, 6, '[{\"name\":\"govedMe\",\"link\":\"https://goved.org/embed-r9po7prn55ib.html\",\"quality\":\"SD\"},{\"name\":\"vidshar\",\"link\":\"https://vidshar.org/embed-1xdtxhefk0fv.html\",\"quality\":\"HD\"}]', '[{\"name\":\"uppom \",\"link\":\"https://uppom.net/inzhghusimcx/CimaClub.Cam-the.blacklist.s01e02._720p_.mkv.html\",\"quality\":\"720p\"},{\"name\":\"filerio \",\"link\":\"https://filerio.in/ccv20aphg3sl\",\"quality\":\"720p\"},{\"name\":\"uppomuptobox \",\"link\":\"https://uptobox.com/sljefff84vpo\",\"quality\":\"1080P\"}]'),
(75, 53, 15, 1, 7, '[{\"name\":\"govedMe\",\"link\":\"https://goved.org/embed-r9po7prn55ib.html\",\"quality\":\"SD\"},{\"name\":\"vidshar\",\"link\":\"https://vidshar.org/embed-1xdtxhefk0fv.html\",\"quality\":\"HD\"}]', '[{\"name\":\"uppom \",\"link\":\"https://uppom.net/inzhghusimcx/CimaClub.Cam-the.blacklist.s01e02._720p_.mkv.html\",\"quality\":\"720p\"},{\"name\":\"filerio \",\"link\":\"https://filerio.in/ccv20aphg3sl\",\"quality\":\"720p\"},{\"name\":\"uppomuptobox \",\"link\":\"https://uptobox.com/sljefff84vpo\",\"quality\":\"1080P\"}]'),
(76, 53, 15, 1, 8, '[{\"name\":\"govedMe\",\"link\":\"https://goved.org/embed-r9po7prn55ib.html\",\"quality\":\"SD\"},{\"name\":\"vidshar\",\"link\":\"https://vidshar.org/embed-1xdtxhefk0fv.html\",\"quality\":\"HD\"}]', '[{\"name\":\"uppom \",\"link\":\"https://uppom.net/inzhghusimcx/CimaClub.Cam-the.blacklist.s01e02._720p_.mkv.html\",\"quality\":\"720p\"},{\"name\":\"filerio \",\"link\":\"https://filerio.in/ccv20aphg3sl\",\"quality\":\"720p\"},{\"name\":\"uppomuptobox \",\"link\":\"https://uptobox.com/sljefff84vpo\",\"quality\":\"1080P\"}]'),
(77, 53, 15, 1, 9, '[{\"name\":\"govedMe\",\"link\":\"https://goved.org/embed-r9po7prn55ib.html\",\"quality\":\"SD\"},{\"name\":\"vidshar\",\"link\":\"https://vidshar.org/embed-1xdtxhefk0fv.html\",\"quality\":\"HD\"}]', '[{\"name\":\"uppom \",\"link\":\"https://uppom.net/inzhghusimcx/CimaClub.Cam-the.blacklist.s01e02._720p_.mkv.html\",\"quality\":\"720p\"},{\"name\":\"filerio \",\"link\":\"https://filerio.in/ccv20aphg3sl\",\"quality\":\"720p\"},{\"name\":\"uppomuptobox \",\"link\":\"https://uptobox.com/sljefff84vpo\",\"quality\":\"1080P\"}]'),
(78, 53, 15, 1, 10, '[{\"name\":\"govedMe\",\"link\":\"https://goved.org/embed-r9po7prn55ib.html\",\"quality\":\"SD\"},{\"name\":\"vidshar\",\"link\":\"https://vidshar.org/embed-1xdtxhefk0fv.html\",\"quality\":\"HD\"}]', '[{\"name\":\"uppom \",\"link\":\"https://uppom.net/inzhghusimcx/CimaClub.Cam-the.blacklist.s01e02._720p_.mkv.html\",\"quality\":\"720p\"},{\"name\":\"filerio \",\"link\":\"https://filerio.in/ccv20aphg3sl\",\"quality\":\"720p\"},{\"name\":\"uppomuptobox \",\"link\":\"https://uptobox.com/sljefff84vpo\",\"quality\":\"1080P\"}]'),
(79, 53, 15, 1, 11, '[{\"name\":\"govedMe\",\"link\":\"https://goved.org/embed-r9po7prn55ib.html\",\"quality\":\"SD\"},{\"name\":\"vidshar\",\"link\":\"https://vidshar.org/embed-1xdtxhefk0fv.html\",\"quality\":\"HD\"}]', '[{\"name\":\"uppom \",\"link\":\"https://uppom.net/inzhghusimcx/CimaClub.Cam-the.blacklist.s01e02._720p_.mkv.html\",\"quality\":\"720p\"},{\"name\":\"filerio \",\"link\":\"https://filerio.in/ccv20aphg3sl\",\"quality\":\"720p\"},{\"name\":\"uppomuptobox \",\"link\":\"https://uptobox.com/sljefff84vpo\",\"quality\":\"1080P\"}]'),
(80, 53, 15, 1, 12, '[{\"name\":\"govedMe\",\"link\":\"https://goved.org/embed-r9po7prn55ib.html\",\"quality\":\"SD\"},{\"name\":\"vidshar\",\"link\":\"https://vidshar.org/embed-1xdtxhefk0fv.html\",\"quality\":\"HD\"}]', '[{\"name\":\"uppom \",\"link\":\"https://uppom.net/inzhghusimcx/CimaClub.Cam-the.blacklist.s01e02._720p_.mkv.html\",\"quality\":\"720p\"},{\"name\":\"filerio \",\"link\":\"https://filerio.in/ccv20aphg3sl\",\"quality\":\"720p\"},{\"name\":\"uppomuptobox \",\"link\":\"https://uptobox.com/sljefff84vpo\",\"quality\":\"1080P\"}]'),
(81, 53, 15, 1, 13, '[{\"name\":\"test\",\"link\":\"test\",\"quality\":\"test\"},{\"name\":\"test\",\"link\":\"test\",\"quality\":\"test\"}]', '[{\"name\":\"rrrr\",\"link\":\"rrr\",\"quality\":\"rrr\"},{\"name\":\"eeee\",\"link\":\"eeee\",\"quality\":\"eeee\"}]'),
(82, 53, 15, 1, 14, '[{\"name\":\"ddddd\",\"link\":\"ddddddddd\",\"quality\":\"ddddddddd\"}]', '[{\"name\":\"fffffff\",\"link\":\"ffffffffff\",\"quality\":\"ffffffff\"}]');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `movie_id` int(11) NOT NULL,
  `name` varchar(64) DEFAULT NULL,
  `category` varchar(120) DEFAULT NULL,
  `description` varchar(400) DEFAULT NULL,
  `trailler` varchar(130) DEFAULT NULL,
  `rate` varchar(5) DEFAULT NULL,
  `prodYear` date DEFAULT NULL,
  `poster` varchar(160) DEFAULT NULL,
  `quality` varchar(24) DEFAULT NULL,
  `streamServ` varchar(2000) DEFAULT NULL,
  `downloadServ` varchar(2000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`movie_id`, `name`, `category`, `description`, `trailler`, `rate`, `prodYear`, `poster`, `quality`, `streamServ`, `downloadServ`) VALUES
(1, 'Shark Bait 2022 ', 'اثارة', 'مشاهدة وتحميل فيلم Shark Bait 2022 مترجم بجودة Web-dl كامل اون لاين فيلم Shark Bait اونلاين', 'https://www.youtube.com/watch?v=aLjKgremu9Q', '6.9', '2022-01-01', 'https://cima-club.io/photos/shares/imdb/tt12550376.jpg', 'web-dl', '[{\"name\":\"skyvid\",\"link\":\"https://skyvid.cyou/embed-nmkfnpv4smke.html\",\"quality\":\"FHD\"},{\"name\":\"vidbam\",\"link\":\"https://vidbam.org/embed-et8y3ss3ri28.html\",\"quality\":\"HD\"},{\"name\":\"goved\",\"link\":\"https://goved.org/embed-vyd0bran18al.html\",\"quality\":\"FHD\"},{\"name\":\"goved\",\"link\":\"https://goved.org/embed-vyd0bran18al.html\",\"quality\":\"HD\"},{\"name\":\"vidshar\",\"link\":\"https://vidshar.org/embed-vp56e59k24m4.html\",\"quality\":\"FHD\"},{\"name\":\"uptostream\",\"link\":\"https://uptostream.com/iframe/d89ejvxf3mhz\",\"quality\":\"HD\"}]', '[{\"name\":\"1fichier\",\"link\":\"https://1fichier.com/?ef3tmk4i33qaa43qw2zg\",\"quality\":\"720p\"},{\"name\":\"goved\",\"link\":\"https://goved.org/vyd0bran18al.html\",\"quality\":\"720p\"},{\"name\":\"skyvid\",\"link\":\"https://skyvid.cyou/nmkfnpv4smke.html\",\"quality\":\"720p\"},{\"name\":\"upbam\",\"link\":\"https://upbam.org/wxk8ues44inr\",\"quality\":\"720p\"},{\"name\":\"uptobox\",\"link\":\"https://uptobox.com/d89ejvxf3mhz\",\"quality\":\"1080p\"}]'),
(3, 'The Devil You Know', ' اثارة-اكشن-تاريخي-دراما-فانتازيا-مغامرات', 'مشاهدة فيلم The Northman 2022 مترجم تدور الأحداث في القرن العاشر، وفي قلب صفوف الفايكنج في آيسلندا، حيث تبدأ رحلة من الانتقام والألم والصراع الذي لا ينتهي، من خلال مجموعة من الشخصيات التي تتقابل قصصهم.', 'https://youtu.be/oMSdFM12hOw', '6.9', '2022-01-01', 'https://iegybest.co/wp-content/uploads/2022/04/The-Devil-You-Know.jpg', 'web-dl', '[{\"name\":\"skyvid\",\"link\":\"https://skyvid.cyou/embed-izc62yg73hyu.html\",\"quality\":\"WEB-DL\"},{\"name\":\"vidbam\",\"link\":\"https://vidbam.org/embed-uk19jep8agwa.html\",\"quality\":\"HD\"},{\"name\":\"goved\",\"link\":\"https://goved.org/embed-lgvlmympdyvz.html\",\"quality\":\"Blury\"},{\"name\":\"vidshar\",\"link\":\"https://vidshar.org/embed-2rjmt22ogapj.html\",\"quality\":\"1080p\"},{\"name\":\"uptostream\",\"link\":\"https://uptostream.com/iframe/x0u9o3v8obmf\",\"quality\":\"720p\"},{\"name\":\"uqload\",\"link\":\"https://uqload.com/embed-60h5u7eozqgd.html\",\"quality\":\"FHD\"}]', '[{\"name\":\"1fichier\",\"link\":\"https://1fichier.com/?ntwo8ngunkh8xukx8kd5\",\"quality\":\"720p\"},{\"name\":\"upbam\",\"link\":\"https://upbam.org/ya3dl88o42xd\",\"quality\":\"720p\"},{\"name\":\"uptobox\",\"link\":\"https://uptobox.com/x0u9o3v8obmf\",\"quality\":\"720p\"}]'),
(4, 'Uncharted', ' اثارة-اكشن-تاريخي-دراما-فانتازيا-مغامرات', 'مشاهدة فيلم The Northman 2022 مترجم تدور الأحداث في القرن العاشر، وفي قلب صفوف الفايكنج في آيسلندا، حيث تبدأ رحلة من الانتقام والألم والصراع الذي لا ينتهي، من خلال مجموعة من الشخصيات التي تتقابل قصصهم.', 'https://youtu.be/oMSdFM12hOw', '6.9', '2022-01-01', 'https://iegybest.co/wp-content/uploads/2022/02/Uncharted.jpg', 'web-dl', '[{\"name\":\"skyvid\",\"link\":\"https://skyvid.cyou/embed-izc62yg73hyu.html\",\"quality\":\"WEB-DL\"},{\"name\":\"vidbam\",\"link\":\"https://vidbam.org/embed-uk19jep8agwa.html\",\"quality\":\"HD\"},{\"name\":\"goved\",\"link\":\"https://goved.org/embed-lgvlmympdyvz.html\",\"quality\":\"Blury\"},{\"name\":\"vidshar\",\"link\":\"https://vidshar.org/embed-2rjmt22ogapj.html\",\"quality\":\"1080p\"},{\"name\":\"uptostream\",\"link\":\"https://uptostream.com/iframe/x0u9o3v8obmf\",\"quality\":\"720p\"},{\"name\":\"uqload\",\"link\":\"https://uqload.com/embed-60h5u7eozqgd.html\",\"quality\":\"FHD\"}]', '[{\"name\":\"1fichier\",\"link\":\"https://1fichier.com/?ntwo8ngunkh8xukx8kd5\",\"quality\":\"720p\"},{\"name\":\"upbam\",\"link\":\"https://upbam.org/ya3dl88o42xd\",\"quality\":\"720p\"},{\"name\":\"uptobox\",\"link\":\"https://uptobox.com/x0u9o3v8obmf\",\"quality\":\"720p\"}]'),
(5, 'Ambulance', ' اثارة-اكشن-تاريخي-دراما-فانتازيا-مغامرات', 'مشاهدة فيلم The Northman 2022 مترجم تدور الأحداث في القرن العاشر، وفي قلب صفوف الفايكنج في آيسلندا، حيث تبدأ رحلة من الانتقام والألم والصراع الذي لا ينتهي، من خلال مجموعة من الشخصيات التي تتقابل قصصهم.', 'https://youtu.be/oMSdFM12hOw', '6.9', '2022-01-01', 'https://iegybest.co/wp-content/uploads/2022/03/Ambulance.jpg', '1080p', '[{\"name\":\"skyvid\",\"link\":\"https://skyvid.cyou/embed-izc62yg73hyu.html\",\"quality\":\"WEB-DL\"},{\"name\":\"vidbam\",\"link\":\"https://vidbam.org/embed-uk19jep8agwa.html\",\"quality\":\"HD\"},{\"name\":\"goved\",\"link\":\"https://goved.org/embed-lgvlmympdyvz.html\",\"quality\":\"Blury\"},{\"name\":\"vidshar\",\"link\":\"https://vidshar.org/embed-2rjmt22ogapj.html\",\"quality\":\"1080p\"},{\"name\":\"uptostream\",\"link\":\"https://uptostream.com/iframe/x0u9o3v8obmf\",\"quality\":\"720p\"},{\"name\":\"uqload\",\"link\":\"https://uqload.com/embed-60h5u7eozqgd.html\",\"quality\":\"FHD\"}]', '[{\"name\":\"1fichier\",\"link\":\"https://1fichier.com/?ntwo8ngunkh8xukx8kd5\",\"quality\":\"720p\"},{\"name\":\"upbam\",\"link\":\"https://upbam.org/ya3dl88o42xd\",\"quality\":\"720p\"},{\"name\":\"uptobox\",\"link\":\"https://uptobox.com/x0u9o3v8obmf\",\"quality\":\"720p\"}]'),
(6, 'Broken xx', ' اثارة-اكشن-تاريخي-دراما-فانتازيا-مغامرات', 'مشاهدة فيلم The Northman 2022 مترجم تدور الأحداث في القرن العاشر، وفي قلب صفوف الفايكنج في آيسلندا، حيث تبدأ رحلة من الانتقام والألم والصراع الذي لا ينتهي، من خلال مجموعة من الشخصيات التي تتقابل قصصهم.', 'https://youtu.be/oMSdFM12hOw', '6.9', '2022-01-01', 'https://m.media-amazon.com/images/M/MV5BMjRkZDU2YjEtMjAxZS00OGVhLWJkYjUtY2IxMmIwNjVjNWE2XkEyXkFqcGdeQXVyNzQwNjk1OTc@._V1_.jpg', '1080p', '[{\"name\":\"skyvid\",\"link\":\"https://skyvid.cyou/embed-izc62yg73hyu.html\",\"quality\":\"WEB-DL\"},{\"name\":\"vidbam\",\"link\":\"https://vidbam.org/embed-uk19jep8agwa.html\",\"quality\":\"HD\"},{\"name\":\"goved\",\"link\":\"https://goved.org/embed-lgvlmympdyvz.html\",\"quality\":\"Blury\"},{\"name\":\"vidshar\",\"link\":\"https://vidshar.org/embed-2rjmt22ogapj.html\",\"quality\":\"1080p\"},{\"name\":\"uptostream\",\"link\":\"https://uptostream.com/iframe/x0u9o3v8obmf\",\"quality\":\"720p\"},{\"name\":\"uqload\",\"link\":\"https://uqload.com/embed-60h5u7eozqgd.html\",\"quality\":\"FHD\"},{\"name\":\"test\",\"link\":\"https://uptostream.com/iframe/x0u9o3v8obmf\",\"quality\":\"test\"}]', '[{\"name\":\"1fichier\",\"link\":\"https://1fichier.com/?ntwo8ngunkh8xukx8kd5\",\"quality\":\"720p\"},{\"name\":\"upbam\",\"link\":\"https://upbam.org/ya3dl88o42xd\",\"quality\":\"720p\"},{\"name\":\"uptobox\",\"link\":\"https://uptobox.com/x0u9o3v8obmf\",\"quality\":\"720p\"},{\"name\":\"test\",\"link\":\"https://uptobox.com/x0u9o3v8obmf\",\"quality\":\"testt\"}]'),
(7, 'Venom: Let There Be Carnage', ' اثارة-اكشن-تاريخي-دراما-فانتازيا-مغامرات', 'مشاهدة فيلم Venom: Let There Be Carnage 2021 مترجم يستكمل العمل أحداث الجزء الأول، حيث يحاول الصحافي إيدي بروك أن يتكيف مع مشكلة استضافة جسده للكيان المُسمى فينوم، وفي سبيل ذلك يواجه خصوم جدد في طريقه.', 'https://youtu.be/oMSdFM12hOw', '6.9', '2021-01-01', 'https://iegybest.co/wp-content/uploads/2021/10/Venom-Let-There-Be-Carnage-242x360.jpg', '1080p', '[{\"name\":\"skyvid\",\"link\":\"https://skyvid.cyou/embed-izc62yg73hyu.html\",\"quality\":\"WEB-DL\"},{\"name\":\"vidbam\",\"link\":\"https://vidbam.org/embed-uk19jep8agwa.html\",\"quality\":\"HD\"},{\"name\":\"goved\",\"link\":\"https://goved.org/embed-lgvlmympdyvz.html\",\"quality\":\"Blury\"},{\"name\":\"vidshar\",\"link\":\"https://vidshar.org/embed-2rjmt22ogapj.html\",\"quality\":\"1080p\"},{\"name\":\"uptostream\",\"link\":\"https://uptostream.com/iframe/x0u9o3v8obmf\",\"quality\":\"720p\"},{\"name\":\"uqload\",\"link\":\"https://uqload.com/embed-60h5u7eozqgd.html\",\"quality\":\"FHD\"}]', '[{\"name\":\"1fichier\",\"link\":\"https://1fichier.com/?ntwo8ngunkh8xukx8kd5\",\"quality\":\"720p\"},{\"name\":\"upbam\",\"link\":\"https://upbam.org/ya3dl88o42xd\",\"quality\":\"720p\"},{\"name\":\"uptobox\",\"link\":\"https://uptobox.com/x0u9o3v8obmf\",\"quality\":\"720p\"}]'),
(9, 'The Mystery of Marilyn Monroe: The Unheard Tapes', 'وثائقي', 'مشاهدة وتحميل فيلم The Mystery of Marilyn Monroe: The Unheard Tapes 2022 مترجم بجودة Web-dl كامل اون لاين فيلم The Mystery of Marilyn Monroe: The Unheard Tapes اونلاين', 'https://www.youtube.com/watch?v=f2OGhJoypPw', '7', '2022-01-01', 'https://cima-club.io/photos/shares/imdb/tt19034332.jpg', 'web-dl', '[{\"name\":\"skyvid\",\"link\":\"https://skyvid.cyou/embed-lrykvstlqjip.html\",\"quality\":\"web-dl\"},{\"name\":\"vidbam\",\"link\":\"https://vidbam.org/embed-28i3d60luryn.html\",\"quality\":\"web-dl\"},{\"name\":\"goved\",\"link\":\"https://goved.org/embed-g2i5rpfgpupi.html\",\"quality\":\"web-dl\"},{\"name\":\"vidshar\",\"link\":\"https://vidshar.org/embed-7tx829ay2cu5.html\",\"quality\":\"web-dl\"}]', '[{\"name\":\"1fichier\",\"link\":\"https://1fichier.com/?8phixhjwfcba8p7nxk3d\",\"quality\":\"720p\"},{\"name\":\"goved\",\"link\":\"https://goved.org/g2i5rpfgpupi.html\",\"quality\":\"720p\"},{\"name\":\"skyvid\",\"link\":\"https://skyvid.cyou/lrykvstlqjip.html\",\"quality\":\"720p\"},{\"name\":\"upbam\",\"link\":\"https://upbam.org/tk1zd0gvzivr\",\"quality\":\"720p\"}]');

-- --------------------------------------------------------

--
-- Table structure for table `season`
--

CREATE TABLE `season` (
  `season_id` int(11) NOT NULL,
  `serie_id` int(11) DEFAULT NULL,
  `seasonNum` int(11) DEFAULT NULL,
  `rate` varchar(4) DEFAULT NULL,
  `prodYear` date DEFAULT NULL,
  `trailler` varchar(100) DEFAULT NULL,
  `poster` varchar(100) DEFAULT NULL,
  `epiNum` int(11) DEFAULT NULL,
  `quality` varchar(24) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `season`
--

INSERT INTO `season` (`season_id`, `serie_id`, `seasonNum`, `rate`, `prodYear`, `trailler`, `poster`, `epiNum`, `quality`) VALUES
(15, 53, 1, '8.0', '2013-01-01', 'https://youtu.be/JGBIimq1I3A', 'https://i.egycdn.com/pic/WmFwZndlY21ZWXBibXZtbXZSY21tbWJQbWp2TmJtbW16.jpg', 22, 'web-dl'),
(16, 52, 1, '8.3', '2022-01-01', 'https://youtu.be/FQEm4dPZsNo', 'https://cima-club.io/photos/shares/625234b7907ee.jpg', 10, 'HD'),
(20, 39, 1, '7.2', '2017-05-27', 'https://youtu.be/Yt4N0UUEd90', 'https://i0.wp.com/anime4up.art/wp-content/uploads/2019/09/Ashampoo_Snap_2019.09.12_23h50m57s_006_.pn', 15, 'web rip'),
(21, 49, 1, '8.5', '2022-01-01', 'https://youtu.be/O1r5XXJOYNA', 'https://i.egycdn.com/pic/WmFwZndlY212bVlZdnZjbUxSY3htRWFtbW1FdmN4bWc.jpg', 12, 'WEB-DL'),
(22, 51, 1, '6.8', '2015-01-01', 'https://youtu.be/yzXglr5bc3w', 'https://i.egycdn.com/pic/WmFwZndlY21MY3ZjbW12TnZtdWNhY05Ma05FbWptSQ.jpg', 17, 'web-dl'),
(23, 35, 1, '8.6', '2021-02-03', 'https://youtu.be/eP2FlJtfwL8', 'https://i0.wp.com/anime4up.art/wp-content/uploads/2022/04/Ashampoo_Snap_2022.04.01_17h51m34s_012_.pn', 7, 'web rip'),
(24, 35, 2, '8.6', '2021-02-03', 'https://youtu.be/eP2FlJtfwL8', 'https://i0.wp.com/anime4up.art/wp-content/uploads/2022/04/Ashampoo_Snap_2022.04.01_17h51m34s_012_.pn', 9, 'web rip'),
(25, 53, 2, '8.0', '2013-01-01', 'https://youtu.be/JGBIimq1I3A', 'https://i.egycdn.com/pic/WmFwZndlY21ZWXBibXZtbXZSY21tbWJQbWp2TmJtbW16.jpg', 20, 'web-dl');

-- --------------------------------------------------------

--
-- Table structure for table `serie`
--

CREATE TABLE `serie` (
  `serie_id` int(11) NOT NULL,
  `name` varchar(64) DEFAULT NULL,
  `category` varchar(100) DEFAULT NULL,
  `rate` varchar(4) DEFAULT NULL,
  `prodYear` date DEFAULT NULL,
  `trailler` varchar(100) DEFAULT NULL,
  `description` varchar(350) DEFAULT NULL,
  `poster` varchar(160) DEFAULT NULL,
  `quality` varchar(24) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `serie`
--

INSERT INTO `serie` (`serie_id`, `name`, `category`, `rate`, `prodYear`, `trailler`, `description`, `poster`, `quality`) VALUES
(35, 'Tomodachi Game', 'العاب-نفسي-شونين', '8.6', '2021-02-03', 'https://youtu.be/eP2FlJtfwL8', 'قصة انمي Tomodachi Game حول طالب المدرسة الثانوية كاتاجيري يويتشي ، الذي يقدر الصداقة قبل كل شيء ، يستمتع بحياة مُرضية مع أصدقائه المقربين سواجيري شيهو ، وميكاسا تينجي ، وشيب ماكوتو ، وكوكوروجي يوتوري. ومع ذلك ، بعد حادثة معينة ، يتم جرهم إلى لعبة سداد الديون. الطريقة الوحيدة للتغلب على \"لعبة Tomodachi\" هي عدم الشك في أصدقائهم. مرتبطًا بصداقات قوية', 'https://i0.wp.com/anime4up.art/wp-content/uploads/2022/04/Ashampoo_Snap_2022.04.01_17h51m34s_012_.png?fit=317,448', 'web rip'),
(36, 'Shijou Saikyou no Daimaou, Murabito A ni Tensei suru', 'فنتازيا-مدرسي-أكشن', '7.0', '2021-03-02', 'https://youtu.be/nSZFVfvJSZQ', 'قصة انمي Shijou Saikyou no Daimaou, Murabito A ni Tensei suru تحكي أنه في حياته السابقة، كان يُعرف باسم اللورد الشيطاني “فارفاتوس”، وهو ساحر قوي وحاكم. لكنه كان وحيدًا بعد فقدان أصدقائه وأحبائه أثناء ارتفاع قوته، لذلك في لحظات وفاته، ألقى “فارفاتوس” تعويذة التناسخ حتى يحصل على فرصة ثانية ليصبح مجرد رجل عادي. في البداية يبدو أن هذا سوف ينجح، لقد ولد', 'https://i0.wp.com/anime4up.art/wp-content/uploads/2022/04/120095.jpg?fit=225,323', 'FHD'),
(38, '2.43: Seiin Koukou Danshi Volley-bu', 'رياضي-مدرسي', '8.0', '2022-01-02', 'https://youtu.be/5utDbhnMF0s', 'قصة انمي 2.43: Seiin Koukou Danshi Volley-bu تدور حول طالب ينتقل من مدينة طوكيو إلى محافظة فوكوي بسبب بعض المشاكل الخطيرة في فريق كرة الطائرة للمرحلة المتوسطة..', 'https://i0.wp.com/anime4up.art/wp-content/uploads/2021/01/5DF4G54FHK6J5SDFDGHJFH.png?fit=379,536', 'HD'),
(39, 'Ahiru no Sora', 'كومي-ديرياضي-دراما-مدرسي-شونين', '7.2', '2017-05-27', 'https://youtu.be/Yt4N0UUEd90', 'قصة انمي Ahiru no Sora تدور حول الفتى القصير الضعيف المنتقل للتو إلى مدرسة جديدة، سورا كوروماتاني الذي يبلغ طوله 149 سم لكنه رغم ذلك يحب كرة السلة، كان يريد أن يغدو أطول كوالدته التي كانت لاعبة كرة سلة، هل سيتمكن سورا من دخول نادري كرة السلة على الرغم من كل المصاعب؟', 'https://i0.wp.com/anime4up.art/wp-content/uploads/2019/09/Ashampoo_Snap_2019.09.12_23h50m57s_006_.png?fit=327,450', 'web rip'),
(40, 'Aharen-san wa Hakarenai', 'شونين-كوميدي-مدرسي', '6.2', '2021-02-15', 'https://youtu.be/F7bGTibgcjM', 'قصة انمي Aharen-san wa Hakarenai تحكي عن “اهارين رينا”، طالبة صغيرة ولطيفة هادئة، سيئة للغاية في تحديد المسافة والمساحة الشخصية. أحيانًا تكون على بعد سنتيمترات من وجهك، وفي أوقات أخرى، على بعد أميال جدًا! الشخص الوحيد الذي يحاول فهم سلوكها الغريب هو “ماتسوبوشي ريدو”، الذي يجلس بجانبها في الفصل. لديه وجه مخيف، لكنه في الواقع فتى لطيف لديه خيال يمكن ', 'https://i0.wp.com/anime4up.art/wp-content/uploads/2022/04/120636.jpg?fit=225,315', 'HD'),
(41, 'Ai no Utagoe wo Kikasete', 'موسيقي-مدرسي-دراما-خيال علمي', '8.0', '2021-02-08', 'https://youtu.be/meJzR1EBFqw', 'قصة Ai no Utagoe wo Kikasete فيلم تحكي الانمي قصة “شيون” الجميلة والغامضة التي انتقلت إلى مدرسة كيبو الثانوية حيث سرعان ما أصبحت مشهورة بسبب شخصيتها المتفتحة وموهبتها الرياضية الاستثنائية… لكن، تحولت إلى أنها ذكاء اصطناعي في مرحلة الاختبار! هدف شيون هو جلب السعادة لـ“ساتومي” المنعزلة. ومع ذلك، فإن استراتيجيتها هي شيء لا يتوقعه أي بشري عادي، فهي تغن', 'https://i0.wp.com/anime4up.art/wp-content/uploads/2022/04/116583.jpg?fit=225,318', 'HD'),
(43, 'Altered Carbon: Resleeved', 'أكشن-خيال علمي-دراما', '8.1', '2020-07-13', 'https://youtu.be/L4EKEwceNiY', 'قصة فيلم Altered Carbon: Resleeved تدور على كوكب \"لاتيمير\"، يتعيّن على \"تاكيشي كوفاتش\" حماية رسّامة وشم أثناء تحرّياته عن وفاة زعيم منظمة إجرامية بالتعاون مع جهاز \"سيتاك\" الصارم.', 'https://i0.wp.com/anime4up.art/wp-content/uploads/2020/03/Anime4up_002-3.png?fit=297,439', 'HD'),
(44, 'Ashita Sekai ga Owaru toshitemo', 'دراما-رومانسي', '7.8', '2021-08-19', 'https://youtu.be/nVKtrCKgEjE', 'قصة فيلم Ashita Sekai ga Owaru toshitemo تدور حول شين الذي أغلق قلبه منذ وفاة والدته وهو صغير كانت صديقة طفولته كوتوري تعتني به منذ ذلك الحين الآن بعد أن أصبحوا في السنة الثالثة من المدرسة الثانوية ، ويبدو أنهم يمكنهم في النهاية المضي قدمًا ، ظهر شين آخر من يابان أخرى فجأة أمامهم .', 'https://i0.wp.com/anime4up.art/wp-content/uploads/2020/05/SFDGJ_002-1.png?fit=280,400', 'web rip'),
(46, 'Beastars 2nd Season', 'شريحة من الحياة-نفسي-دراما-شونين', '8.3', '2020-02-03', 'https://youtu.be/IXsURQxoGe8', 'قصة انمي Beastars 2nd Season تتمة لاحداث الموسم السابق.', 'https://i0.wp.com/anime4up.art/wp-content/uploads/2020/12/5G4H6D5FS4G65GDHSQDF.png?fit=320,440', 'HD'),
(47, 'Beastars', 'دراما-نفسي-شونين-شريحة من الحياة', '8.1', '2021-03-09', 'https://youtu.be/pJ3wd6u4zlQ', 'قصة انمي Beastars تدور في عالم تسكنه الحيوانات ، تتعايش العاشبات والمفترسات مع بعضها البعض. بالنسبة لمرحلة المراهقة في اكاديمية تشيريتون تمتلئ الحياة المدرسية بالأمل والرومانسية والارتياب والقلق. الشخصية الرئيسية هو الذئب ليجوسي، وهو عضو في نادي التمثيل. بالرغم من مظهره الخطير إلا أنه يملك قلباً لطيفاً للغاية. في معظم حياته كان دائما موضوعا للخوف و', 'https://i0.wp.com/anime4up.art/wp-content/uploads/2019/09/Ashampoo_Snap_2019.09.11_01h39m49s_015_.png?fit=266,376', 'FHD'),
(48, 'Better Call Saul', 'دراما-جريمة', '8.8', '2015-01-01', 'https://youtu.be/HN4oydykJFc', 'مقتبس عن مسلسل (Breaking Bad) يتناول المسلسل حياة المحامي الطموح (سول جودمان) والذي كان يدافع عن الفقراء والمستضعفين قبل أن يتعرف على (والتر وايت)، لتعد حياته مليئة بالكثير من الاختلالات الضالة والقضايا الغامضة، التي لا يوجد لها تفسير منطقي.', 'https://i.egycdn.com/pic/WmFwZndlY21UWWp2Tmp2Y0VjbWJtdm1wam1ibWptYm1t.jpg', 'WEB-DL'),
(49, 'Pachinko', 'دراما', '8.5', '2022-01-01', 'https://youtu.be/O1r5XXJOYNA', 'في إطار من الدراما، يسلط العمل الضوء على آمال وأحلام عائلة كورية مهاجرة، تروى من خلال أربعة أجيال وهم يغادرون وطنهم طمعا في البقاء والحصول على حياة أفضل.', 'https://i.egycdn.com/pic/WmFwZndlY212bVlZdnZjbUxSY3htRWFtbW1FdmN4bWc.jpg', 'WEB-DL'),
(50, 'The Good Doctor', 'دراما', '8.1', '2017-01-01', 'https://youtu.be/fYlZDTru55g', '(شون ميرفي) جراح شاب يعاني من التوحد، ينتقل من ضاحيته الريفية البسيطة إلى إحدى الوحدات الجراحية العريقة، ويحاول في عمله استغلال قدراته الطبية العالية؛ ﻹنقاذ حيوات الناس تعويضًا عن عدم قدرته على التواصل بشكل طبيعي مع العالم.', 'https://i.egycdn.com/pic/WmFwZndlY3ZOam1FdmNtbXZjRWN3VFlFdmNtenh3Q2o.jpg', 'web-dl'),
(51, 'Fear the Walking Dead', 'دراما-رعب-خيال علمي', '6.8', '2015-01-01', 'https://youtu.be/yzXglr5bc3w', 'تدور أحداث القصة حول عالم الزومبي والموتى الأحياء، وبعد انتشار الزومبي في الساحل الغربي من الولايات المتحدة، يتعين على عائلتين التكاتف معا من أجل البقاء على قيد الحياة.', 'https://i.egycdn.com/pic/WmFwZndlY21MY3ZjbW12TnZtdWNhY05Ma05FbWptSQ.jpg', 'web-dl'),
(52, 'My Liberation Diary', 'دراما-رومانسة', '8.3', '2022-01-01', 'https://youtu.be/FQEm4dPZsNo', 'يسعى ثلاثة أشقاء، أرهقتهم رتابة حياة البالغين اليومية، إلى تحقيق معنًى لوجودهم والتحرّر من حيواتهم المألوفة التي يعيشونها.', 'https://i.egycdn.com/pic/WmFwZndlY212bW1tVEhjbW1tYWNtYm1FbHZjbW1talB2Yw.jpg', 'web-dl'),
(53, 'The Blacklist', 'جرريمة-دراما-غموض', '8.0', '2013-01-01', 'https://youtu.be/JGBIimq1I3A', 'تدور أحداث المسلسل حول العميل الحكومي السابق رايموند ريدينجتون (جيمس سبادر) الشهير بـ\"ريد\" الذي استطاع أن يهرب طويلًا من أيدي السلطات التي ترغب في القبض عليه. يقوم ريد فجأة بتسليم نفسه إلى المباحث الفيدرالية، ويعرض عليهم أن يساعدهم في القبض على أحد الإرهابيين بشرط أن يتحدث فقط إلى إليزابيث كين (ميجان بون)، وهي محللة جرائم شابة في المباحث الفيدرالية', 'https://i.egycdn.com/pic/WmFwZndlY21ZWXBibXZtbXZSY21tbWJQbWp2TmJtbW16.jpg', 'web-dl');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `bigTitle` varchar(65) DEFAULT NULL,
  `smallTitle` varchar(35) DEFAULT NULL,
  `cover` varchar(160) DEFAULT NULL,
  `link` varchar(150) DEFAULT NULL,
  `addedIn` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `bigTitle`, `smallTitle`, `cover`, `link`, `addedIn`) VALUES
(20, 'Shingeki no Kyojin: The Final Season Part 2', 'الحلقة 12 والاخيرة', 'http://localhost/my-projet/stream/img/Ashampoo_Snap_2022.01.09_17h39m39s_002_.png', '#', '2022-05-18 10:39:19'),
(21, 'Spy x Family', 'الحلقة 3', 'img/Ashampoo_Snap_2022.04.10_16h50m39s_003_.png', '#', '2022-05-18 10:49:24'),
(22, 'Kaguya-sama wa Kokurasetai: Ultra Romantic', 'الحلقة 5', 'img/Ashampoo_Snap_2022.04.10_16h58m08s_005_.png', '#', '2022-05-18 10:50:07'),
(23, 'Tate no Yuusha no Nariagari Season 2', 'الحلقة 7', 'https://anime4up.art/wp-content/uploads/2022/04/Ashampoo_Snap_2022.04.07_03h17m38s_001_.png', '#', '2022-05-18 10:52:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `episode`
--
ALTER TABLE `episode`
  ADD PRIMARY KEY (`epi_id`),
  ADD KEY `serie_id` (`serie_id`),
  ADD KEY `episode_ibfk_2` (`season_id`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`movie_id`);

--
-- Indexes for table `season`
--
ALTER TABLE `season`
  ADD PRIMARY KEY (`season_id`),
  ADD KEY `serie_id` (`serie_id`);

--
-- Indexes for table `serie`
--
ALTER TABLE `serie`
  ADD PRIMARY KEY (`serie_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `episode`
--
ALTER TABLE `episode`
  MODIFY `epi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `movie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `season`
--
ALTER TABLE `season`
  MODIFY `season_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `serie`
--
ALTER TABLE `serie`
  MODIFY `serie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `episode`
--
ALTER TABLE `episode`
  ADD CONSTRAINT `episode_ibfk_1` FOREIGN KEY (`serie_id`) REFERENCES `serie` (`serie_id`),
  ADD CONSTRAINT `episode_ibfk_2` FOREIGN KEY (`season_id`) REFERENCES `season` (`season_id`);

--
-- Constraints for table `season`
--
ALTER TABLE `season`
  ADD CONSTRAINT `season_ibfk_1` FOREIGN KEY (`serie_id`) REFERENCES `serie` (`serie_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
