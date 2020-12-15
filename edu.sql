-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2020 at 07:07 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
(2, 3, 'circuit', '<p><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAABHNCSVQICAgIfAhkiAAABJZJREFUWEfNmVtoFGcYht9vZmPcDeiqCJEaulFaD1Sy9aIgCFkpii1CVkulpQFXxROKSesBxVyspajUXkS8KCkUFUFBhCSChV7obhAKSjSJQsQDZusp0Vhdj2s1OuWfw+7s7D8z/6wr3blJJrM78+7zf+/3fvuHwI7V3VEQmgApDKIgSAJAgKT/tDtnfydC9vXq7+bzou+TBLATcUoS4iNRKFI7hi5oogwxvIcV9XCOaJH7sNcA8wgtmSTkinpV3OCFUhEo1X26CC0vFJAMSDIACWVGMk3Y/kSB5NOWVvZpIgfPl4AAqxhrjXqvScK2tKKaQRVZfiQJWx8o6vKq4sqPJGHLPb0GTeLKiCRh0x29BvXlLTOShB9u5VxsFWeQZMXOWpBDn4zWjUHdB6NVc3Veeo7euyOCzd65TxKaB3IuNhvFjqQlYcKT/WhfE0JoQoUaSsaRvJbB8qPDSD18Y3GzN3cTmq6batBmmW1IhicH0LPj4zxh5pN05i1qf7yJdEYRiE0+ScKGKwpki4sFSaZ2z8KH40fZCmQXDp17itiR4Vx5ZGNOjCRhQz+nBt1JhuXL6GmZ6SiOXWQUx227kct41wEknyRh3cWciz2QjIQkJGJqoLsetfEBpB7ptWgYzUrSZnoirO1VsjGXrTWjaduTjEzxIRFj0eV+0MYrpilJNO40koTV3YUuFiAZ9Et4tKPSVV3fnZcI70lxalAf7VxIEladtU8Sc6vJGieXOK1fjkLTHDYF2R+Lf7uJjovPih4cCCv/KsxiQ4wAyY7vKtEwg7/U+04/QPPxwcIWw5tybEgSVpwRSBLTIMEhGZtdgeY5PtRVayQ7+x6j9fQwkldtyIlM1LrbCbGEfRZ7IJlntLvdgjHHmRctJAnLTmkudmrOFncH/TIaZlUhMrUSofEyOvrfoPce0PU3IRiQUVctI1pzH+GaAHpvZVSSnZeeFg7BAiQJjX86JIluCBNJlr2J9ZMQ9Iv1QMM+TOjithRSD0c81SSh8Y98FzuQZNmb2FgD1mKKOVL/vMKnu64i/VLJ74sOJAnfnhBIEo1k8vupqP8oUIy27Ht2nhxC/OR9fo1y3E34pkMj6NJSQhMDGPhpxjuJY29mFGtb+vl9kUOSsPS4UJJEpgWR2GQ/WnlRTut68odf6wBhIkn4+li+i21IRqYHkdj87gTZB6G1bINAr2PHps2y+KsjQkmiCtzyiRdQtq+lNeJ9krDkMN/FFpLBqkqk9n6GsX7n7HX7BH1DQLgN2uZA9juOzfCqTjPRA8JJEppYhdjcar3A9RRgOxHmZbIWunENEtL/Eg72vEX6tb5JIJA4hIbf+VlcbMxZNwGsfZVtr5iTy4UkYVGbou7JOMWdJ7HuLStvB4O1OAeShEW/OmexJ3H6BlTBZM7JekGShC/251xcUpJmsS4rpD6XT5KwsFVPklIuc+lIEhb8Uuji/4skKydmMqMmiR4T5v+cBMn12S249ybOZXOAV5MKdRE+3xWF5Gvnuvi9iRUoJ0bydvc8berURDar/4aQfWO16UbgJgJTUEFLEeqT1AXZF0e8IvkfJzUjOgAfUYUAAAAASUVORK5CYII=\" data-filename=\"1606975531.png\" style=\"width: 40px;\"></p><p><br></p><p><b>lorem ipsum</b></p>', '2020-12-15 11:32:54', '2020-12-15 11:32:54');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_id` int(11) NOT NULL,
  `logo` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `teacher_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `created_at`, `updated_at`, `name`, `department_id`, `logo`, `teacher_id`) VALUES
(3, '2020-12-13 11:08:49', '2020-12-14 08:24:05', 'Circuit1', 3, '1607879329.png', 1);

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
(3, 'EEE', '1607878958.png', '2020-12-13 11:02:38', '2020-12-13 11:02:38');

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
(9, '2020_12_11_063149_create_chapters_table', 2);

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
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `type`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$tkpeGxcchzUdT8PtLZhG1uX5/XHdiT56oLcMq6fZrbNPlX.z/GIRu', NULL, NULL, NULL, 3),
(2, 'test', 'test@gmail.com', NULL, '$2y$10$.UySU5Ka4peYYtIc/W.jsuY6DJrXlzHQj3d8xrtXolkUChVG79cCe', NULL, '2020-12-13 11:26:23', '2020-12-13 11:26:23', 2);

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
-- Indexes for table `chapters`
--
ALTER TABLE `chapters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
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
-- AUTO_INCREMENT for table `chapters`
--
ALTER TABLE `chapters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
