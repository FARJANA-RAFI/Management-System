-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2021 at 07:08 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rjns_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `all_users`
--

CREATE TABLE `all_users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `date_of_birth` varchar(255) DEFAULT NULL,
  `user_type` varchar(255) NOT NULL DEFAULT 'student',
  `status` varchar(50) NOT NULL DEFAULT 'deactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `all_users`
--

INSERT INTO `all_users` (`id`, `name`, `email`, `password`, `gender`, `date_of_birth`, `user_type`, `status`) VALUES
(1, 'Anik Sen', 'aniksen@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'male', '2020-11-24', 'admin', 'active'),
(2, 'Minhaz Hossain', 'minhaj@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'male', '2020-11-16', 'teacher', 'active'),
(3, 'Tajmin Nafisa', 'nafisa@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'female', '2020-11-11', 'student', 'active'),
(4, 'Mohammad Saimon Nesar Shawon', 'shawon@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'male', '2020-11-17', 'student', 'active'),
(5, 'Farjana Yeasmin Rafi ', 'farjana@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'female', '2020-11-04', 'student', 'active'),
(6, 'Tasnim Sultana', 'tasnim@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'female', '2020-11-22', 'student', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_name`, `course_code`, `created_at`, `updated_at`) VALUES
(1, 'Software Development', 'sd', '2021-05-17 00:55:32', '2021-05-17 00:55:32');

-- --------------------------------------------------------

--
-- Table structure for table `course_sessions`
--

CREATE TABLE `course_sessions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `session` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_sessions`
--

INSERT INTO `course_sessions` (`id`, `session`, `created_at`, `updated_at`) VALUES
(1, 'Summer 2021', '2021-05-17 00:54:56', '2021-05-17 00:54:56'),
(2, 'Winter 2021', '2021-05-17 00:55:12', '2021-05-17 00:55:12');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `department`, `short_name`, `code`, `created_at`, `updated_at`) VALUES
(1, 'Computer Science & Engineering', 'CSE', 'cs', '2021-05-18 22:58:52', '2021-05-18 22:58:52');

-- --------------------------------------------------------

--
-- Table structure for table `enrolled_courses`
--

CREATE TABLE `enrolled_courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `student_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `session` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `semester` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `group_name` varchar(255) DEFAULT NULL,
  `question` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `group_name`, `question`) VALUES
(1, 'UML', 'What is Unified Modeling Language (UML)?'),
(2, 'UML', 'What is an Activity Diagram?'),
(3, 'UML', 'Types of UML Diagrams.'),
(5, 'Software Testing', 'What is Software Testing? '),
(6, 'Software Testing', 'Why is Software Testing Important? '),
(7, 'Software Testing', 'What are the benefits of Software Testing? '),
(8, 'Process Model', 'What is a Software Process Model?'),
(9, 'Process Model', 'Which is the best process model in software engineering?'),
(10, 'Process Model', 'What is the goal of a software process model?'),
(11, 'Software Development', 'Why we learning software development?');

-- --------------------------------------------------------

--
-- Table structure for table `manage_courses`
--

CREATE TABLE `manage_courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `session_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `teacher_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `manage_courses`
--

INSERT INTO `manage_courses` (`id`, `session_id`, `course_id`, `teacher_id`, `created_at`, `updated_at`) VALUES
(1, '1', '1', '2', '2021-05-17 01:00:42', '2021-05-17 01:00:42'),
(2, '2', '1', '2', '2021-05-18 07:47:41', '2021-05-18 07:47:41');

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
(147, '2014_10_12_100000_create_password_resets_table', 1),
(148, '2019_08_19_000000_create_failed_jobs_table', 1),
(149, '2021_04_18_095611_create_semesters_table', 1),
(150, '2021_04_19_130520_create_courses_table', 1),
(151, '2021_04_19_130654_create_departments_table', 1),
(152, '2021_04_19_131346_create_course_sessions_table', 1),
(153, '2021_04_27_092602_create_users_table', 1),
(154, '2021_05_04_100112_create_roles_table', 1),
(155, '2021_05_19_062806_create_enrolled_courses_table', 2);

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
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `semesters`
--

CREATE TABLE `semesters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `semester` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `semesters`
--

INSERT INTO `semesters` (`id`, `semester`, `created_at`, `updated_at`) VALUES
(1, '2nd', '2021-05-18 23:46:23', '2021-05-18 23:46:35');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `gender`, `date_of_birth`, `user_type`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Anik Sen', 'admin@gmail.com', '$2y$10$PoFEHQUp.gDMUuiAOdtEbOeKzfUX359Do/WyHUgiZaHl5ME9ncxI2', 'male', '2021-05-11', 'admin', '1', '2021-05-17 00:54:06', '2021-05-17 00:54:06'),
(2, 'Minhaj Hossain', 'minhaj@gmail.com', '$2y$10$mrPkpC4oIj6obPDqsHBmMOfJ7PNsYdYAZNSeMxt5hAHPhaavwJyjK', 'male', '2021-05-17', 'teacher', '0', '2021-05-17 00:56:46', '2021-05-18 10:58:09'),
(4, 'df', 'ab@gmail.com', '$2y$10$m3QTAMXhBymnSqMQ8GrEdO.ez2zwX3nB7pZmqA8PuLts6EZRwxIwK', 'male', '2021-05-25', 'student', '0', '2021-05-18 23:56:34', '2021-05-18 23:56:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all_users`
--
ALTER TABLE `all_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_sessions`
--
ALTER TABLE `course_sessions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enrolled_courses`
--
ALTER TABLE `enrolled_courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manage_courses`
--
ALTER TABLE `manage_courses`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `semesters`
--
ALTER TABLE `semesters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `all_users`
--
ALTER TABLE `all_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `course_sessions`
--
ALTER TABLE `course_sessions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `enrolled_courses`
--
ALTER TABLE `enrolled_courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `manage_courses`
--
ALTER TABLE `manage_courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=156;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `semesters`
--
ALTER TABLE `semesters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
