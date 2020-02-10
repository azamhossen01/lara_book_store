-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2020 at 12:43 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lara_book_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `writer_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `discounted_price` double(8,2) NOT NULL DEFAULT 0.00,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marks` int(11) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `category_id`, `writer_id`, `title`, `description`, `price`, `discounted_price`, `image`, `marks`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 4, 'Introduction to Algorithms', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 500.00, 0.00, '1581327982.jpg', 0, 1, '2020-02-10 03:46:22', '2020-02-10 03:46:22'),
(2, 1, 3, 'Analysis and design of algorithms', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 450.00, 0.00, '1581328097.jpg', 0, 1, '2020-02-10 03:48:17', '2020-02-10 03:48:17'),
(3, 1, 2, 'Analysis and design of algorithms', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 500.00, 0.00, '1581328140.jpg', 0, 1, '2020-02-10 03:49:00', '2020-02-10 03:49:00'),
(4, 1, 1, 'Design and Analysis of algorithms', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 460.00, 0.00, '1581328191.jpg', 0, 1, '2020-02-10 03:49:51', '2020-02-10 03:49:51'),
(5, 2, 5, 'Data Structure and Algorithms', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 300.00, 0.00, '1581328566.gif', 0, 1, '2020-02-10 03:56:06', '2020-02-10 03:56:06'),
(6, 2, 6, 'Data Structure and Algorithms', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 452.00, 0.00, '1581328632.jpg', 0, 1, '2020-02-10 03:57:12', '2020-02-10 03:57:12'),
(7, 2, 7, 'Algorithms and data structure', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 500.00, 0.00, '1581328699.jpg', 0, 1, '2020-02-10 03:58:19', '2020-02-10 03:58:19'),
(8, 2, 8, 'Data Structures and algorithms', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 600.00, 0.00, '1581328766.jpg', 0, 1, '2020-02-10 03:59:26', '2020-02-10 03:59:26'),
(9, 3, 9, 'ইলেকট্রনিক্সের জাদু', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 500.00, 0.00, '1581329069.jpg', 0, 1, '2020-02-10 04:04:29', '2020-02-10 04:04:29'),
(10, 3, 10, 'Advanced Electricity', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 350.00, 0.00, '1581329167.jpg', 0, 1, '2020-02-10 04:06:07', '2020-02-10 04:06:07'),
(11, 3, 11, 'Digital Electronics', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 420.00, 0.00, '1581329225.jpg', 0, 1, '2020-02-10 04:07:05', '2020-02-10 04:07:05'),
(12, 3, 12, 'Digital Electronics', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 350.00, 0.00, '1581329379.jpg', 0, 1, '2020-02-10 04:09:39', '2020-02-10 04:09:39'),
(13, 4, 1, 'Programming in python', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 480.00, 460.00, '1581331957.jpg', 0, 1, '2020-02-10 04:52:37', '2020-02-10 04:52:37'),
(14, 4, 4, 'How to C program', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 500.00, 480.00, '1581332002.jpg', 0, 1, '2020-02-10 04:53:22', '2020-02-10 04:53:22'),
(15, 4, 7, 'Python crash course', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 700.00, 680.00, '1581332037.jpg', 0, 1, '2020-02-10 04:53:57', '2020-02-10 04:53:57'),
(16, 4, 8, 'The c++ programmin language', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 395.00, 280.00, '1581332077.jpg', 0, 1, '2020-02-10 04:54:37', '2020-02-10 04:54:37'),
(17, 5, 8, 'Descrete Mathematics', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 750.00, 680.00, '1581332215.jpg', 0, 1, '2020-02-10 04:56:55', '2020-02-10 04:56:55'),
(18, 5, 5, 'Descrete Mathematical Structures', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 980.00, 820.00, '1581332269.jpg', 0, 1, '2020-02-10 04:57:49', '2020-02-10 04:57:49'),
(19, 5, 2, 'Descrete Mathematics Structrues 5th Edition', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 450.00, 380.00, '1581332316.jpg', 0, 1, '2020-02-10 04:58:36', '2020-02-10 04:58:36'),
(20, 6, 1, 'Operating System', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 450.00, 430.00, '1581332440.jpg', 0, 1, '2020-02-10 05:00:40', '2020-02-10 05:00:40'),
(21, 6, 4, 'Modern Operating Systems', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 780.00, 750.00, '1581332472.jpg', 0, 1, '2020-02-10 05:01:12', '2020-02-10 05:01:12'),
(22, 6, 6, 'Operating System Concepts', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 650.00, 620.00, '1581332514.jpg', 0, 1, '2020-02-10 05:01:54', '2020-02-10 05:01:54'),
(23, 6, 8, 'Operating System Principles', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 980.00, 820.00, '1581332556.jpg', 0, 1, '2020-02-10 05:02:36', '2020-02-10 05:02:36');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Design and Analysis Of Algorithms', NULL, 0, '2020-02-10 03:34:47', '2020-02-10 05:16:23'),
(2, 'Data Structures', NULL, 1, '2020-02-10 03:35:00', '2020-02-10 03:35:00'),
(3, 'Digital Electronics', NULL, 1, '2020-02-10 03:35:11', '2020-02-10 03:35:11'),
(4, 'Object Oriented Programming using C++/Java/Python', NULL, 1, '2020-02-10 03:35:22', '2020-02-10 03:35:22'),
(5, 'Discrete Mathematical Structures', NULL, 1, '2020-02-10 03:35:34', '2020-02-10 03:35:34'),
(6, 'Operating Systems', NULL, 1, '2020-02-10 03:35:42', '2020-02-10 03:35:42'),
(7, 'Database Management Systems', NULL, 1, '2020-02-10 03:35:51', '2020-02-10 03:35:51'),
(8, 'Computer System Architecture', NULL, 1, '2020-02-10 03:36:00', '2020-02-10 03:36:00'),
(9, 'Probability Statistics and Numerical Techniques', NULL, 1, '2020-02-10 03:36:08', '2020-02-10 03:36:08'),
(10, 'Microprocessor & Microcontrollers', NULL, 1, '2020-02-10 03:36:19', '2020-02-10 05:10:12'),
(11, 'Computer Networks', NULL, 1, '2020-02-10 03:36:29', '2020-02-10 03:36:29'),
(12, 'Theory of Computation', NULL, 1, '2020-02-10 03:36:38', '2020-02-10 03:36:38'),
(13, 'Artificial Intelligence', NULL, 1, '2020-02-10 03:36:46', '2020-02-10 03:36:46'),
(14, 'Compiler Design', NULL, 1, '2020-02-10 03:37:05', '2020-02-10 03:37:05'),
(15, 'Software Engineering', NULL, 1, '2020-02-10 03:37:16', '2020-02-10 03:37:16'),
(16, 'System Software', NULL, 1, '2020-02-10 03:37:26', '2020-02-10 03:37:26'),
(17, 'Computer Graphics', NULL, 1, '2020-02-10 03:37:35', '2020-02-10 03:37:35');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_02_08_051008_create_categories_table', 1),
(4, '2020_02_08_085456_create_writers_table', 1),
(5, '2020_02_08_112847_create_books_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Azam Hossen', 'azam@gmail.com', NULL, '$2y$10$YOhyr35exxW7mYZNxD3OUOw.JTDqk1K8Hs5gVlPx2ZCPFrRD4amUO', NULL, '2020-02-10 03:32:30', '2020-02-10 03:32:30');

-- --------------------------------------------------------

--
-- Table structure for table `writers`
--

CREATE TABLE `writers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `writers`
--

INSERT INTO `writers` (`id`, `name`, `email`, `phone`, `dob`, `address`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'S. Sridhar', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2020-02-10 03:42:29', '2020-02-10 03:42:29'),
(2, 'Amrinder Arora', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2020-02-10 03:43:16', '2020-02-10 03:43:16'),
(3, 'Vinod K. Rajput', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2020-02-10 03:43:34', '2020-02-10 03:43:34'),
(4, 'Thomas H. Cormen', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2020-02-10 03:44:00', '2020-02-10 03:44:00'),
(5, 'Md. Mahbubul Alam', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2020-02-10 03:55:14', '2020-02-10 03:55:14'),
(6, 'Md. Moktar Hossen', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2020-02-10 03:56:30', '2020-02-10 03:56:30'),
(7, 'M.M. Raguwanshi', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2020-02-10 03:57:41', '2020-02-10 03:57:41'),
(8, 'Alfred V. Aho', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2020-02-10 03:58:44', '2020-02-10 03:58:44'),
(9, 'Sri Shuvra Kanti Mukharjee', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2020-02-10 04:03:02', '2020-02-10 04:03:02'),
(10, 'Eng. Md. Abdur Rokib', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2020-02-10 04:05:36', '2020-02-10 04:05:36'),
(11, 'Anil K. Maini', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2020-02-10 04:06:26', '2020-02-10 04:06:26'),
(12, 'Dr. R.S. Sedha', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2020-02-10 04:08:32', '2020-02-10 04:08:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `books_category_id_foreign` (`category_id`),
  ADD KEY `books_writer_id_foreign` (`writer_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `writers`
--
ALTER TABLE `writers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `writers_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `writers`
--
ALTER TABLE `writers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `books_writer_id_foreign` FOREIGN KEY (`writer_id`) REFERENCES `writers` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
