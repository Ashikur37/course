-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2021 at 04:52 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edu`
--

-- --------------------------------------------------------

--
-- Table structure for table `bengali_grammers`
--

CREATE TABLE `bengali_grammers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bengali_grammers`
--

INSERT INTO `bengali_grammers` (`id`, `title`, `file`, `created_at`, `updated_at`) VALUES
(2, 'grammer', '1609593559.pdf', '2021-01-02 07:19:19', '2021-01-02 07:19:19');

-- --------------------------------------------------------

--
-- Table structure for table `chapters`
--

CREATE TABLE `chapters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chapters`
--

INSERT INTO `chapters` (`id`, `course_id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(2, 3, 'circuit', '<p><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAABHNCSVQICAgIfAhkiAAABJZJREFUWEfNmVtoFGcYht9vZmPcDeiqCJEaulFaD1Sy9aIgCFkpii1CVkulpQFXxROKSesBxVyspajUXkS8KCkUFUFBhCSChV7obhAKSjSJQsQDZusp0Vhdj2s1OuWfw+7s7D8z/6wr3blJJrM78+7zf+/3fvuHwI7V3VEQmgApDKIgSAJAgKT/tDtnfydC9vXq7+bzou+TBLATcUoS4iNRKFI7hi5oogwxvIcV9XCOaJH7sNcA8wgtmSTkinpV3OCFUhEo1X26CC0vFJAMSDIACWVGMk3Y/kSB5NOWVvZpIgfPl4AAqxhrjXqvScK2tKKaQRVZfiQJWx8o6vKq4sqPJGHLPb0GTeLKiCRh0x29BvXlLTOShB9u5VxsFWeQZMXOWpBDn4zWjUHdB6NVc3Veeo7euyOCzd65TxKaB3IuNhvFjqQlYcKT/WhfE0JoQoUaSsaRvJbB8qPDSD18Y3GzN3cTmq6batBmmW1IhicH0LPj4zxh5pN05i1qf7yJdEYRiE0+ScKGKwpki4sFSaZ2z8KH40fZCmQXDp17itiR4Vx5ZGNOjCRhQz+nBt1JhuXL6GmZ6SiOXWQUx227kct41wEknyRh3cWciz2QjIQkJGJqoLsetfEBpB7ptWgYzUrSZnoirO1VsjGXrTWjaduTjEzxIRFj0eV+0MYrpilJNO40koTV3YUuFiAZ9Et4tKPSVV3fnZcI70lxalAf7VxIEladtU8Sc6vJGieXOK1fjkLTHDYF2R+Lf7uJjovPih4cCCv/KsxiQ4wAyY7vKtEwg7/U+04/QPPxwcIWw5tybEgSVpwRSBLTIMEhGZtdgeY5PtRVayQ7+x6j9fQwkldtyIlM1LrbCbGEfRZ7IJlntLvdgjHHmRctJAnLTmkudmrOFncH/TIaZlUhMrUSofEyOvrfoPce0PU3IRiQUVctI1pzH+GaAHpvZVSSnZeeFg7BAiQJjX86JIluCBNJlr2J9ZMQ9Iv1QMM+TOjithRSD0c81SSh8Y98FzuQZNmb2FgD1mKKOVL/vMKnu64i/VLJ74sOJAnfnhBIEo1k8vupqP8oUIy27Ht2nhxC/OR9fo1y3E34pkMj6NJSQhMDGPhpxjuJY29mFGtb+vl9kUOSsPS4UJJEpgWR2GQ/WnlRTut68odf6wBhIkn4+li+i21IRqYHkdj87gTZB6G1bINAr2PHps2y+KsjQkmiCtzyiRdQtq+lNeJ9krDkMN/FFpLBqkqk9n6GsX7n7HX7BH1DQLgN2uZA9juOzfCqTjPRA8JJEppYhdjcar3A9RRgOxHmZbIWunENEtL/Eg72vEX6tb5JIJA4hIbf+VlcbMxZNwGsfZVtr5iTy4UkYVGbou7JOMWdJ7HuLStvB4O1OAeShEW/OmexJ3H6BlTBZM7JekGShC/251xcUpJmsS4rpD6XT5KwsFVPklIuc+lIEhb8Uuji/4skKydmMqMmiR4T5v+cBMn12S249ybOZXOAV5MKdRE+3xWF5Gvnuvi9iRUoJ0bydvc8berURDar/4aQfWO16UbgJgJTUEFLEeqT1AXZF0e8IvkfJzUjOgAfUYUAAAAASUVORK5CYII=\" data-filename=\"1606975531.png\" style=\"width: 40px;\"></p><p><br></p><p><b>lorem ipsum</b></p>', '2020-12-15 11:32:54', '2020-12-15 11:32:54'),
(3, 3, '2)circut retated video', '<p>jadjdknkheqi</p>', '2021-01-04 20:44:10', '2021-01-04 20:44:10'),
(4, 5, 'Chapter1(Computer Fundamental)', '<p>jdhqjhfqfhiq</p>', '2021-01-06 07:23:01', '2021-01-06 07:23:01'),
(5, 5, 'Chapter 2', '<p>C programming&nbsp;</p>', '2021-01-06 07:34:51', '2021-01-06 07:34:51'),
(7, 10, 'Chapter 3: Electrical Engineering', '<p>learn about electrical engineering</p>', '2021-01-17 10:00:57', '2021-01-17 10:00:57'),
(8, 6, 'Chapter 2', '<p>The History and Evolution of Java</p>', '2021-01-18 07:16:39', '2021-01-18 07:16:39'),
(9, 6, 'Chapter1', '<p>The History of Java</p>', '2021-01-18 07:27:20', '2021-01-18 07:27:20'),
(10, 8, 'Chapter1', '<p>C Programming</p>', '2021-01-22 08:52:28', '2021-01-22 08:52:28'),
(11, 10, 'Chapter1', '<p>Electrical Engineering</p>', '2021-01-22 08:59:54', '2021-01-22 08:59:54'),
(12, 11, 'Chapter1', '<p>Introduction</p>', '2021-03-10 08:33:23', '2021-03-10 08:33:23'),
(13, 12, 'Chapter1', '<p>Introduction</p>', '2021-03-10 08:51:19', '2021-03-10 08:51:19');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `topic_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `topic_id`, `user_id`, `text`, `created_at`, `updated_at`) VALUES
(1, 12, 6, 'problem', '2021-01-22 08:48:26', '2021-01-22 08:48:26'),
(2, 5, 6, 'Here is some problem', '2021-02-01 08:57:33', '2021-02-01 08:57:33'),
(3, 5, 7, 'How to learn about C programming', '2021-03-10 08:41:55', '2021-03-10 08:41:55');

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id`, `type`, `name`, `details`, `file`, `video`, `created_at`, `updated_at`) VALUES
(1, 'world', 'Invention Discoveries', '', '1610900555.png', '1610900555.png', '2021-01-17 10:22:35', '2021-01-17 10:22:35'),
(2, 'world', 'World Geography', '', '1610900874.jpg', '1610900874.jpg', '2021-01-17 10:27:54', '2021-01-17 10:27:54');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_id` int(11) NOT NULL,
  `logo` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time_commitment` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `language` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `created_at`, `updated_at`, `name`, `department_id`, `logo`, `duration`, `time_commitment`, `language`, `price`, `teacher_id`) VALUES
(5, '2021-01-06 07:20:42', '2021-01-26 09:34:03', 'Algebra', 4, '1609939242.jpg', '45 days', '3 hour per day', 'English', '2000', 1),
(6, '2021-01-06 09:43:29', '2021-03-10 08:26:47', 'Java+', 2, '1609947809.jpg', '40days', '3 hour per day', 'English', '3000', 1),
(8, '2021-01-17 09:07:10', '2021-03-10 08:20:05', 'C++', 2, '1610896030.jpg', '45days', '3 hour per day', 'English', '3000', 1),
(9, '2021-01-17 09:11:55', '2021-01-17 09:11:55', 'Python', 2, '1610896315.jpg', '', '', '', '', 1),
(10, '2021-01-17 09:57:33', '2021-01-17 09:57:33', 'Electrical Engineering', 7, '1610899053.jpg', '', '', '', '', 1),
(11, '2021-01-26 09:24:55', '2021-01-26 09:24:55', 'Algorithm', 2, '1611674695.jpg', '30 days', '2 hour per day', 'English', '2000', 1),
(12, '2021-03-10 08:49:48', '2021-03-10 08:49:48', 'Literature', 6, '1615387787.jpg', '45 days', '3 hour per day', 'English', '3000', 1);

-- --------------------------------------------------------

--
-- Table structure for table `course_payments`
--

CREATE TABLE `course_payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_payments`
--

INSERT INTO `course_payments` (`id`, `course_id`, `user_id`, `payment_method`, `details`, `status`, `price`, `created_at`, `updated_at`) VALUES
(1, 5, 5, 'Bkash', '01992291756', 0, 2000, '2021-01-26 10:05:15', '2021-01-26 10:05:15'),
(2, 5, 6, 'Bkash', '01992291756', 0, 2000, '2021-02-01 08:56:19', '2021-02-01 08:56:19'),
(3, 5, 8, 'Bkash', '01992291756', 0, 2000, '2021-02-08 02:02:38', '2021-02-08 02:02:38'),
(4, 11, 8, 'Bkash', '01992291756', 0, 2000, '2021-02-08 02:06:10', '2021-02-08 02:06:10'),
(5, 11, 7, 'Bkash', '01992291756', 0, 2000, '2021-03-10 08:34:32', '2021-03-10 08:34:32'),
(6, 6, 7, 'Nagad', '01992291756', 0, 3000, '2021-03-10 08:40:45', '2021-03-10 08:40:45'),
(7, 12, 7, 'Bkash', '01992291756', 0, 3000, '2021-03-10 08:53:06', '2021-03-10 08:53:06');

-- --------------------------------------------------------

--
-- Table structure for table `course_teachers`
--

CREATE TABLE `course_teachers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `current_affairs`
--

CREATE TABLE `current_affairs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `month` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `current_affairs`
--

INSERT INTO `current_affairs` (`id`, `month`, `year`, `file`, `created_at`, `updated_at`) VALUES
(1, 'january', '2020', '1608569411.doc', '2020-12-21 10:50:11', '2020-12-21 10:50:11');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(2, 'CSE', '1607878906.png', '2020-12-13 11:01:46', '2020-12-13 11:01:46'),
(4, 'Math', '1609939172.jpg', '2021-01-06 07:19:32', '2021-01-06 07:19:32'),
(5, 'Economics', '1610775150.jpg', '2021-01-15 23:32:30', '2021-01-15 23:32:30'),
(6, 'English', '1610895554.jpg', '2021-01-17 08:59:14', '2021-01-17 08:59:14'),
(7, 'EEE', '1610895614.jpg', '2021-01-17 09:00:14', '2021-01-17 09:00:14');

-- --------------------------------------------------------

--
-- Table structure for table `english_grammers`
--

CREATE TABLE `english_grammers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `english_grammers`
--

INSERT INTO `english_grammers` (`id`, `created_at`, `updated_at`, `title`, `file`) VALUES
(1, '2021-01-02 07:50:57', '2021-01-02 07:50:57', 'article', '1609595457.pdf'),
(2, '2021-01-16 07:23:21', '2021-01-16 07:23:21', 'Naration', '1610803401.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` int(11) NOT NULL,
  `set` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`id`, `course_id`, `set`, `created_at`, `updated_at`) VALUES
(1, 3, 1, '2020-12-30 03:19:43', '2020-12-30 03:19:43');

-- --------------------------------------------------------

--
-- Table structure for table `exam_questions`
--

CREATE TABLE `exam_questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` int(11) NOT NULL,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correct_answer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exam_questions`
--

INSERT INTO `exam_questions` (`id`, `course_id`, `question`, `option1`, `option2`, `option3`, `option4`, `correct_answer`, `created_at`, `updated_at`) VALUES
(1, 3, 'dfsd', 's', 's', 'd', 'd', 'option1', '2020-12-30 03:19:43', '2020-12-30 03:19:43'),
(2, 3, 'gfgf', 'fhg', 'gv', 'g', 'u', 'option4', '2020-12-30 03:19:43', '2020-12-30 03:19:43'),
(3, 3, 'sdd', 'df', 'df', 'df', 'df', 'option1', '2020-12-31 11:03:02', '2020-12-31 11:03:02'),
(4, 3, 'abc', 'A)', 'B)', 'C)', 'D)', 'option4', '2021-01-04 20:39:31', '2021-01-04 20:39:31'),
(5, 3, 'CDE', 'A)', 'B)', 'C)', 'D)', 'option1', '2021-01-04 20:39:31', '2021-01-04 20:39:31'),
(6, 6, 'abcd', 'A)1', 'B)2', 'C)3', 'D)4', 'option3', '2021-01-06 09:46:52', '2021-01-06 09:46:52'),
(7, 6, 'jdeyteyu', 'A)t', 'B)r', 'C)j', 'D)k', 'option2', '2021-01-06 09:46:53', '2021-01-06 09:46:53'),
(8, 6, 'gktrt', 'A)', 'B)', 'C)', 'D)', 'option4', '2021-01-06 09:46:53', '2021-01-06 09:46:53'),
(9, 5, 'abc', 'A)', 'B)', 'C)', 'D)', 'option3', '2021-03-10 02:08:49', '2021-03-10 02:08:49'),
(10, 5, 'abcd', 'A)1', 'B)2', 'C)3', 'D)4', 'option2', '2021-03-10 02:08:49', '2021-03-10 02:08:49');

-- --------------------------------------------------------

--
-- Table structure for table `exercises`
--

CREATE TABLE `exercises` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correct_answer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `topic_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exercises`
--

INSERT INTO `exercises` (`id`, `question`, `option1`, `option2`, `option3`, `option4`, `correct_answer`, `topic_id`, `created_at`, `updated_at`) VALUES
(1, '2+2=?', '1', '4', '2', '3', 'option2', 2, '2020-12-18 10:35:02', '2020-12-18 10:35:02'),
(2, 'abc', 'a', 'b', 'c', 'd', 'option2', 2, '2021-01-04 20:50:51', '2021-01-04 20:50:51'),
(3, 'what is intrigration', 'A)1', 'B)4', 'C)3', 'D)2', 'option2', 6, '2021-01-15 10:36:40', '2021-01-15 10:36:40'),
(4, 'lglgk', 'A)t', 'B)6', 'C)8', 'D)9', 'option4', 6, '2021-01-15 10:37:48', '2021-01-15 10:37:48'),
(5, 'what is intrigration', 'A)1', 'B)4', 'C)3', 'D)2', 'option1', 8, '2021-01-16 07:42:47', '2021-01-16 07:42:47'),
(6, 'What is bytecode', 'A)1', 'B)4', 'C)8', 'D)9', 'option1', 11, '2021-01-18 07:33:40', '2021-01-18 07:33:40'),
(7, 'What is bytecode', 'A)1', 'B)4', 'C)8', 'D)9', 'option4', 12, '2021-01-18 09:24:50', '2021-01-18 09:24:50'),
(8, 'what is C programming', 'A)1', 'B)4', 'C)3', 'D)9', 'option3', 13, '2021-01-22 08:55:06', '2021-01-22 08:55:06'),
(9, 'Primality testing:first attempt', 'A)1', 'B)4', 'C)8', 'D)9', 'option2', 19, '2021-03-10 08:46:14', '2021-03-10 08:46:14');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `math_topics`
--

CREATE TABLE `math_topics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `math_topics`
--

INSERT INTO `math_topics` (`id`, `title`, `body`, `created_at`, `updated_at`) VALUES
(2, 'algebra', '<p>asksd</p>', '2021-01-02 07:37:07', '2021-01-02 07:37:07');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_12_11_063032_create_departments_table', 1),
(5, '2020_12_11_063055_create_teachers_table', 1),
(6, '2020_12_11_063107_create_courses_table', 1),
(8, '2020_12_11_063208_create_videos_table', 1),
(9, '2020_12_11_063149_create_chapters_table', 2),
(10, '2020_12_13_061638_create_course_teachers_table', 3),
(11, '2020_12_13_163448_create_students_table', 3),
(12, '2020_12_15_150802_create_topics_table', 3),
(13, '2020_12_18_160903_create_exercises_table', 4),
(14, '2020_12_19_143956_create_poets_table', 5),
(15, '2020_12_21_163851_create_current_affairs_table', 6),
(18, '2020_12_26_155856_create_exams_table', 7),
(19, '2020_12_26_160425_create_exam_questions_table', 7),
(20, '2021_01_01_132358_create_student_exams_table', 8),
(21, '2021_01_01_132421_create_student_exam_questions_table', 8),
(22, '2021_01_02_130233_create_bengali_grammers_table', 9),
(23, '2021_01_02_130329_create_math_topics_table', 9),
(24, '2021_01_02_133802_create_english_grammers_table', 10),
(25, '2021_01_15_122834_create_motivations_table', 11),
(26, '2021_01_16_164758_create_contents_table', 12),
(27, '2021_01_21_171609_create_comments_table', 13),
(28, '2021_01_24_170101_create_course_payments_table', 14);

-- --------------------------------------------------------

--
-- Table structure for table `motivations`
--

CREATE TABLE `motivations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `motivations`
--

INSERT INTO `motivations` (`id`, `details`, `file`, `video`, `created_at`, `updated_at`) VALUES
(2, 'This is about mount avarest', '1610802686.pdf', '1610802686.png', '2021-01-16 07:09:38', '2021-01-16 07:11:26'),
(3, 'Abroad', '1610804084.pdf', '1610804084.pdf', '2021-01-16 07:11:54', '2021-01-16 07:34:44'),
(4, '', '', '', '2021-01-16 07:15:10', '2021-01-16 07:15:10'),
(5, '', '', '', '2021-01-16 07:15:12', '2021-01-16 07:15:12');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `poets`
--

CREATE TABLE `poets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bn_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bn_details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `poets`
--

INSERT INTO `poets` (`id`, `image`, `bn_name`, `en_name`, `bn_details`, `en_details`, `created_at`, `updated_at`) VALUES
(1, '1608390479.png', 'কাজী', 'kaji', '<p>কবি</p>', '<p>poet</p>', '2020-12-19 09:08:00', '2020-12-19 09:08:00'),
(2, '1610802992.jpg', 'maikel', 'maikel', '<p>kjghghwjg</p>', '<p>hughwghw</p>', '2021-01-16 07:16:32', '2021-01-16 07:16:32');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student_exams`
--

CREATE TABLE `student_exams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `total_question` int(11) NOT NULL,
  `correct_answer` int(11) NOT NULL,
  `is_passed` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_exams`
--

INSERT INTO `student_exams` (`id`, `user_id`, `course_id`, `total_question`, `correct_answer`, `is_passed`, `created_at`, `updated_at`) VALUES
(27, 6, 6, 3, 0, 0, '2021-01-06 09:48:06', '2021-01-06 09:48:06'),
(28, 7, 6, 3, 0, 0, '2021-01-17 23:50:38', '2021-01-17 23:50:38'),
(29, 8, 5, 2, 0, 0, '2021-03-10 02:09:39', '2021-03-10 02:09:39');

-- --------------------------------------------------------

--
-- Table structure for table `student_exam_questions`
--

CREATE TABLE `student_exam_questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_exam_id` int(11) NOT NULL,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correct_answer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_exam_questions`
--

INSERT INTO `student_exam_questions` (`id`, `student_exam_id`, `question`, `answer`, `correct_answer`, `created_at`, `updated_at`) VALUES
(11, 27, 'abcd', 'C)3', 'C)3', '2021-01-06 09:48:25', '2021-01-06 09:48:25'),
(12, 27, 'jdeyteyu', 'D)k', 'B)r', '2021-01-06 09:48:29', '2021-01-06 09:48:29'),
(13, 27, 'gktrt', 'B)', 'D)', '2021-01-06 09:48:36', '2021-01-06 09:48:36'),
(14, 28, 'abcd', 'C)3', 'C)3', '2021-01-17 23:50:48', '2021-01-17 23:50:48'),
(15, 28, 'jdeyteyu', 'C)j', 'B)r', '2021-01-17 23:50:53', '2021-01-17 23:50:53'),
(16, 28, 'gktrt', 'B)', 'D)', '2021-01-17 23:51:06', '2021-01-17 23:51:06'),
(17, 29, 'abc', 'C)', 'C)', '2021-03-10 02:09:50', '2021-03-10 02:09:50'),
(18, 29, 'abcd', 'B)2', 'B)2', '2021-03-10 02:09:55', '2021-03-10 02:09:55');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `department_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `created_at`, `updated_at`, `department_id`, `user_id`) VALUES
(1, '2020-12-13 11:26:23', '2020-12-13 11:26:23', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `chapter_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `view` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `chapter_id`, `title`, `video`, `view`, `created_at`, `updated_at`) VALUES
(2, 2, 'test', '1608129401.mp4', NULL, '2020-12-16 08:36:41', '2020-12-16 08:36:41'),
(3, 4, '1)computer funda', '1609939427.pdf', NULL, '2021-01-06 07:23:48', '2021-01-06 07:23:48'),
(4, 4, '2)computer', '1609939928.pdf', NULL, '2021-01-06 07:32:08', '2021-01-06 07:32:08'),
(5, 5, '1)what is C programming', '1609940139.pdf', NULL, '2021-01-06 07:35:39', '2021-01-06 07:35:39'),
(13, 10, '1.1 What is C programming', '1611327208.mp4', NULL, '2021-01-22 08:53:28', '2021-01-22 08:53:28'),
(15, 11, '1.1what is electrical', '1611327812.mp4', NULL, '2021-01-22 09:03:32', '2021-01-22 09:03:32'),
(17, 5, '1.1what is algebra', '1611328461.mp4', NULL, '2021-01-22 09:14:21', '2021-01-22 09:14:21'),
(18, 7, 'what is', '1611328714.mp4', NULL, '2021-01-22 09:18:34', '2021-01-22 09:18:34'),
(19, 12, '1.1 What is an algorithm', '1615386981.mp4', NULL, '2021-03-10 08:36:21', '2021-03-10 08:36:21'),
(20, 13, '1.1 What is literature', '1615387920.mp4', NULL, '2021-03-10 08:52:00', '2021-03-10 08:52:00'),
(21, 5, 'Algebra Test', '1615391050.mp4', NULL, '2021-03-10 09:44:10', '2021-03-10 09:44:10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` int(11) NOT NULL,
  `department_id` int(11) DEFAULT NULL,
  `batch` int(11) DEFAULT NULL,
  `roll` int(11) DEFAULT NULL,
  `father_name` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_name` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `type`, `department_id`, `batch`, `roll`, `father_name`, `mother_name`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$tkpeGxcchzUdT8PtLZhG1uX5/XHdiT56oLcMq6fZrbNPlX.z/GIRu', NULL, NULL, NULL, 3, NULL, NULL, NULL, NULL, NULL),
(2, 'test', 'test@gmail.com', NULL, '$2y$10$.UySU5Ka4peYYtIc/W.jsuY6DJrXlzHQj3d8xrtXolkUChVG79cCe', NULL, '2020-12-13 11:26:23', '2020-12-13 11:26:23', 2, NULL, NULL, NULL, NULL, NULL),
(4, 'student', 'st@gmail.com', NULL, '$2y$10$YBqmLdgItCjA40SCwhPMTOenI3MzlCR7fTIw.THbEnmRW3OB5lmPa', NULL, '2020-12-21 09:47:41', '2020-12-21 10:16:48', 1, 2, 9, 12345678, NULL, NULL),
(5, 'student', 'student@gmail.com', NULL, '$2y$10$jRRNOlV/T/S3qnF0xyCDxeJlntvk/LBR.rEchpKcVDwkIJ/Z2UB3a', NULL, '2021-01-01 07:06:10', '2021-01-01 07:06:10', 1, 7, 10, 101, NULL, NULL),
(6, 'Onty', '315163008@hamdarduniversity.edu.bd', NULL, '$2y$10$Vi/BtLeSjYaz6KzvwQXF2OEV6.pBmXNFHUMYxKE.CYsqaN4YoE7rq', NULL, '2021-01-04 20:57:33', '2021-01-04 20:58:44', 1, 2, 10, 315163008, NULL, NULL),
(7, 'shakil khan', 'shakil.ahmed.hub@gmail.com', NULL, '$2y$10$dDZ6KAdADTqCg8KBFpb2HeU5Mjpo4AkGjTCe6E2k2REwN3a5jUf1m', NULL, '2021-01-15 23:44:52', '2021-01-15 23:46:06', 1, 2, 10, 315163008, NULL, NULL),
(8, 'Arman', 'arman@gmail.com', NULL, '$2y$10$4NlaUHp7KbPOz.hb3FqqJOM64rTBJqlRGtQJ/0po94bn1YJeFGeei', NULL, '2021-01-18 23:45:41', '2021-01-18 23:46:16', 1, 2, 10, 315163003, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bengali_grammers`
--
ALTER TABLE `bengali_grammers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chapters`
--
ALTER TABLE `chapters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_payments`
--
ALTER TABLE `course_payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_teachers`
--
ALTER TABLE `course_teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `current_affairs`
--
ALTER TABLE `current_affairs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `english_grammers`
--
ALTER TABLE `english_grammers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam_questions`
--
ALTER TABLE `exam_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exercises`
--
ALTER TABLE `exercises`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `math_topics`
--
ALTER TABLE `math_topics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `motivations`
--
ALTER TABLE `motivations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `poets`
--
ALTER TABLE `poets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_exams`
--
ALTER TABLE `student_exams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_exam_questions`
--
ALTER TABLE `student_exam_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bengali_grammers`
--
ALTER TABLE `bengali_grammers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `chapters`
--
ALTER TABLE `chapters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `course_payments`
--
ALTER TABLE `course_payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `course_teachers`
--
ALTER TABLE `course_teachers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `current_affairs`
--
ALTER TABLE `current_affairs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `english_grammers`
--
ALTER TABLE `english_grammers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `exam_questions`
--
ALTER TABLE `exam_questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `exercises`
--
ALTER TABLE `exercises`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `math_topics`
--
ALTER TABLE `math_topics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `motivations`
--
ALTER TABLE `motivations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `poets`
--
ALTER TABLE `poets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_exams`
--
ALTER TABLE `student_exams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `student_exam_questions`
--
ALTER TABLE `student_exam_questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
