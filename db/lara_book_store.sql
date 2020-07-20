-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2020 at 04:24 PM
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
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Amar Ekushey Book Fair begins on Sunday', 'The month-long Amar Ekushey Book Fair-2020 will begin at the premises of Bangla Academy and at the adjoining Suhrawardy Udyan in the capital on Sunday.\r\n\r\nThis year, Bangla Academy has set the theme \"Birth Centenary of Bangabandhu\" for the fair as it will be dedicated to the iconic leader, marking his birth centenary, reports BSS.\r\n\r\nFocusing on Bangabandhu, architect Enamul Karim Nirjhar has drawn up the overall plan of the book fair.\r\n\r\nPrime Minister Sheikh Hasina will inaugurate the month-long book fair as the chief guest at 3pm on Sunday, where State Minister for Cultural Affairs KM Khalid will be present as special guest. National Professor Dr Anisuzzamanin will preside over the event.\r\n\r\nBoth President Abdul Hamid and the Prime Minister issued separate messages for “Amar Ekushey Book Fair 2020” and wished its success.\r\n\r\nIn his message, President Abdul Hamid appreciated dedicating this year’s Amar Ekushey Book fair to Bangabandhu Sheikh Mujibur Rahman on the occasion of his birth centenary.\r\n\r\n“Bangabandhu is the creator of independent Bangladesh and his role in building up the psyche and spirit of the Bengali nation is unparalleled. He is the first person to begin the movement for establishing Bangla as the state language in 1948. Later, Bangabandhu inaugurated national ‘Bangla Literature Conference’ for the first time at the premises of Bangla Academy in 1974,” the president said.\r\n\r\nIn her message the prime minister said: “I am glad to know that ‘Amar Ekushey Book Fair 2020’ is being organized like every year and I send my greetings and felicitations to Bangla Academy, local and foreign publishers and all concerned,” the PM said in a press release.\r\n\r\n“This year’s book fair will be dedicated to the greatest Bengali of all time and Father of the Nation Bangabandhu Sheikh Mujibur Rahman on the occasion of Mujib Borsho,” she added.\r\n\r\n“From today [Sunday], the Bangla Academy has started publishing 100 new books in phases on the life and works of Father of the Nation Bangabandhu Sheikh Mujibur Rahman on his birth centenary and the most attractive of them is a new book written by Bangabandhu named ‘Amar Dekha Noya Chin,” she said.\r\n\r\nTwo honorary guests - Indian poet Shankha Ghosh and Egyptian writer and poet Mohsen Al Arishi are expected to grace the opening ceremony.\r\n\r\nBangla Academy Director General Habibullah Siraji will deliver the welcome speech at the inaugural ceremony.\r\n\r\nThe main attraction of the inauguration ceremony is the official publication of the third book written by Bangabandhu Sheikh Mujibur Rahman, titled \"Amar Dekha Naya Chin\" (The New China as I Saw).\r\n\r\nPrime Minister Sheikh Hasina, also the daughter of Bangabandhu, will unveil the cover of the book.\r\n\r\nLike the previous years, the venue of the fair has been extended to the nearby Suhrawardy Udyan with some changes.\r\n\r\nThis year, the little magazine chattar has been moved to the main fair premises at Suhrawardy Udyan.\r\n\r\nThis year, the land earmarked for the fair has been expanded to 8,00,000 square ft. A total of 873 units have been allocated to 560 organizations.\r\n\r\nThe authorities have allotted 179 units at the Bangla Academy ground to 126 organizations, and 694 units at the Suhrawardy Udyan to 434 organizations. Moreover, a total of 34 pavilions have been allocated this year.\r\n\r\nBangla Academy has made arrangements to display and sell the books by small publishing companies and individuals who have published books at 25 percent commission in the stall of the National Book Centre.\r\n\r\nBangla Academy will also organize a \"Shishu Chattar\" this year, where children can enjoy \"Shishu Prahar\" (children time) during the fair.\r\n\r\nA stage for holding publication ceremonies and programs to unveil covers of the books has been set up at Suhrawardy Udyan.\r\n\r\nAwards will be handed over to the publishing houses on the closing day of the fair. The \"Chittaranjan Saha Smriti Puraskar\" will be awarded for the publication of a good number of quality books in the fair, while the \"Munir Chowdhury Smriti Puraskar\" will be given for the aesthetic design.\r\n\r\nThe \"Rokonuzzaman Khan Dadabhai Smriti Puraskar\" will be awarded for publishing excellent books for kids, while the \"Qayyum Chowdhury Smriti Puraskar\" will be given for the best interior design of the stalls.\r\n\r\nPublishers from across the country will come to the fair with a wide variety of books, while Bangla Academy will exhibit around 200 newly-printed and reprinted books.\r\n\r\nThere will be strict security arrangements in and around the book fair venue to avoid any unpleasant incident during the fair.\r\n\r\nThe fair will remain open from 3pm to 9pm from Sundays to Thursdays; and from 11am to 9pm on Fridays and Saturdays. On February 21, the fair will remain open from 8am to 8pm.', '1593703590.jpg', 0, '2020-07-02 09:26:30', '2020-07-15 20:45:17');

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
(2, 1, 3, 'Analysis and design of algorithms', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 450.00, 0.00, '1581328097.jpg', 0, 1, '2020-02-10 03:48:17', '2020-02-10 03:48:17'),
(3, 1, 2, 'Analysis and design of algorithms', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 500.00, 0.00, '1581328140.jpg', 0, 0, '2020-02-10 03:49:00', '2020-07-15 20:41:15'),
(4, 1, 1, 'Design and Analysis of algorithms', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 460.00, 0.00, '1581328191.jpg', 0, 1, '2020-02-10 03:49:51', '2020-02-10 03:49:51'),
(5, 2, 5, 'Data Structure and Algorithms', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 300.00, 0.00, '1581328566.gif', 0, 1, '2020-02-10 03:56:06', '2020-02-10 03:56:06'),
(6, 2, 6, 'Data Structure and Algorithms', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 452.00, 0.00, '1581328632.jpg', 0, 1, '2020-02-10 03:57:12', '2020-02-10 03:57:12'),
(7, 2, 7, 'Algorithms and data structure', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 500.00, 0.00, '1581328699.jpg', 0, 1, '2020-02-10 03:58:19', '2020-02-10 03:58:19'),
(8, 2, 8, 'Data Structures and algorithms', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 600.00, 0.00, '1581328766.jpg', 0, 1, '2020-02-10 03:59:26', '2020-02-10 03:59:26'),
(9, 3, 9, 'ইলেকট্রনিক্সের জাদু', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 500.00, 0.00, '1581329069.jpg', 0, 1, '2020-02-10 04:04:29', '2020-02-10 04:04:29'),
(10, 3, 10, 'Advanced Electricity', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 350.00, 0.00, '1594918582.jpg', 0, 1, '2020-02-10 04:06:07', '2020-07-16 20:56:22'),
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
(23, 6, 8, 'Operating System Principles', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 980.00, 820.00, '1581332556.jpg', 0, 1, '2020-02-10 05:02:36', '2020-02-10 05:02:36'),
(24, 17, 13, 'Computer Graphics by Schaum\'s Outline', 'Excellent book for computer graphics course.', 200.00, 180.00, '1595254996.jpg', 0, 1, '2020-07-12 19:51:09', '2020-07-20 08:23:16'),
(25, 2, 15, 'Data Structures With C by Schaum\'s Outline', 'This is an excellent book for Computer science department. Nicely explain here every algorithm.', 220.00, 200.00, '1595255009.jpg', 0, 1, '2020-07-12 20:00:26', '2020-07-20 08:23:29');

-- --------------------------------------------------------

--
-- Table structure for table `book_returns`
--

CREATE TABLE `book_returns` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `book_id` bigint(20) UNSIGNED NOT NULL,
  `bkash_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bkash_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `book_returns`
--

INSERT INTO `book_returns` (`id`, `customer_id`, `order_id`, `book_id`, `bkash_number`, `bkash_type`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 22, '019182373838', 'personal', 1, '2020-07-08 10:05:31', '2020-07-08 11:37:58'),
(2, 1, 3, 23, '019182373838', 'personal', 1, '2020-07-08 10:05:31', '2020-07-13 19:38:32'),
(3, 1, 4, 2, '019182373838', 'personal', 0, '2020-07-08 10:05:31', '2020-07-08 10:05:31'),
(4, 1, 3, 23, '01827383738', 'personal', 0, '2020-07-08 11:43:51', '2020-07-08 11:43:51'),
(5, 2, 2, 23, '01827383739', 'personal', 1, '2020-07-08 20:11:11', '2020-07-12 19:03:47'),
(6, 2, 2, 3, '01827383739', 'personal', 1, '2020-07-08 20:11:12', '2020-07-12 20:11:19'),
(7, 6, 10, 6, '01857984441', 'personal', 0, '2020-07-12 19:07:19', '2020-07-12 19:07:19'),
(8, 6, 10, 7, '01857984441', 'personal', 0, '2020-07-12 19:07:19', '2020-07-12 19:07:19');

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
(1, 'Design and Analysis Of Algorithms', 'Description', 0, '2020-02-10 03:34:47', '2020-07-14 21:25:37'),
(2, 'Data Structures', 'desc', 1, '2020-02-10 03:35:00', '2020-07-15 20:44:41'),
(3, 'Digital Electronics', NULL, 1, '2020-02-10 03:35:11', '2020-02-10 03:35:11'),
(4, 'Object Oriented Programming using C++/Java/Python', NULL, 1, '2020-02-10 03:35:22', '2020-02-10 03:35:22'),
(5, 'Discrete Mathematical Structures', NULL, 1, '2020-02-10 03:35:34', '2020-02-10 03:35:34'),
(6, 'Operating Systems', NULL, 1, '2020-02-10 03:35:42', '2020-02-10 03:35:42'),
(7, 'Database Management Systems', NULL, 1, '2020-02-10 03:35:51', '2020-02-10 03:35:51'),
(8, 'Computer System Architecture', NULL, 1, '2020-02-10 03:36:00', '2020-07-12 18:45:20'),
(9, 'Probability Statistics and Numerical Techniques', NULL, 1, '2020-02-10 03:36:08', '2020-02-10 03:36:08'),
(10, 'Microprocessor & Microcontrollers', NULL, 1, '2020-02-10 03:36:19', '2020-02-10 05:10:12'),
(11, 'Computer Networks', NULL, 1, '2020-02-10 03:36:29', '2020-02-10 03:36:29'),
(12, 'Theory of Computation', NULL, 1, '2020-02-10 03:36:38', '2020-02-10 03:36:38'),
(13, 'Artificial Intelligence', NULL, 1, '2020-02-10 03:36:46', '2020-02-10 03:36:46'),
(14, 'Compiler Design', NULL, 1, '2020-02-10 03:37:05', '2020-02-10 03:37:05'),
(15, 'Software Engineering', NULL, 1, '2020-02-10 03:37:16', '2020-02-10 03:37:16'),
(16, 'System Software', NULL, 1, '2020-02-10 03:37:26', '2020-02-10 03:37:26'),
(17, 'Computer Graphics', NULL, 1, '2020-02-10 03:37:35', '2020-02-10 03:37:35'),
(18, 'Minhaz Alam', 'Description for minhaz alam', 1, '2020-06-29 09:40:59', '2020-06-29 09:40:59');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `blog_id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_replay` tinyint(1) NOT NULL COMMENT '0=comment,1=replay',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Chittagong',
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `user_id`, `name`, `email`, `phone`, `address`, `district`, `password`, `created_at`, `updated_at`) VALUES
(1, 2, 'Jamal Khan', 'jamal@gmail.com', '01728338728', 'nasirabad chittagong', 'Chittagong', '$2y$10$U6KweXq1JS/4YC8NNFkmeuIZAlEBln.FoRafqwx116MUBzNi2PXtK', '2020-06-30 08:55:43', '2020-06-30 08:55:43'),
(2, 3, 'Kamal Khan', 'kamal@gmail.com', '01812339922', 'Dhaka Bangladesh', 'Chittagong', '$2y$10$/gHAT8kfFEffB84HyV3it.s4xv3Dy3W4oxWIMn/7NYO3rsCOsKTfy', '2020-06-30 11:01:26', '2020-06-30 11:01:26'),
(3, 4, 'Salman khan', 'salman@gmail.com', '01812339922', 'Dhaka Bangladesh', 'Chittagong', '$2y$10$UShe.4QPlOMaJb80T0ZPCO8qNSMEnXM95lTOKJukoFoxIOjiDPSoq', '2020-07-07 09:29:32', '2020-07-07 09:29:32'),
(4, 5, 'Imam Hasan', 'imam@gmail.com', '01728338728', 'nasirabad chittagong', 'Chittagong', '$2y$10$Kb1qNQ6clNw3bIZjcxXqNOXSwEitnhKaIWspJSJ76M6W0Aeyqnlua', '2020-07-07 10:11:10', '2020-07-07 10:11:10'),
(5, 6, 'Noor Mohammed Anik', 'noormohammedanik@gmail.com', '+8801672902634', 'Agrabad', 'Chittagong', '$2y$10$3pIBX9zpT5RWJewftuf9AezAc7vSrxvryhWczvHeab0/eW.1OyhJa', '2020-07-10 07:52:33', '2020-07-10 07:52:33'),
(6, 7, 'Akram Hossen', 'bookstore.rimon@gmail.com', '01857984441', 'Chittagong', 'Chittagong', '$2y$10$rfHvwRIa7Obkt4tdiZLriOdy.CRGD1w.88poTTyoFLLrKilScv/KO', '2020-07-12 18:36:56', '2020-07-12 18:36:56'),
(7, 8, 'Noor Mohammed Anik', 'noor@gmail.com', '+8801672902634', 'Agrabad', 'Chittagong', '$2y$10$/O5VMMySXb91I0plB06G2.FpOPNZlcSuFRipa3E0JhaM8CGxjpruC', '2020-07-13 19:52:00', '2020-07-13 19:52:00');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_02_08_051008_create_categories_table', 1),
(4, '2020_02_08_085456_create_writers_table', 1),
(5, '2020_02_08_112847_create_books_table', 1),
(12, '2020_02_17_102329_create_shippings_table', 4),
(15, '2020_02_18_043609_create_blogs_table', 4),
(16, '2020_02_18_075849_create_comments_table', 4),
(21, '2014_10_12_000000_create_users_table', 5),
(22, '2020_02_10_124842_create_customers_table', 5),
(25, '2020_02_17_162147_create_orders_table', 6),
(26, '2020_02_17_162213_create_order_details_table', 6),
(27, '2020_07_07_162119_create_book_returns_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `shipping_id` bigint(20) UNSIGNED NOT NULL,
  `total` double(8,2) DEFAULT NULL,
  `delivery_charge` double(6,2) DEFAULT NULL,
  `purchase_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transaction_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `shipping_id`, `total`, `delivery_charge`, `purchase_type`, `payment_method`, `transaction_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 8, 2930.00, 70.00, 'full_purchase', 'cash_on_delivery', NULL, 1, '2020-07-01 10:23:53', '2020-07-13 05:45:11'),
(2, 2, 9, 1480.00, 70.00, 'borrow_book', 'bkash', 'fytjfytfyutduydy5454', 0, '2020-07-02 10:16:48', '2020-07-02 10:16:48'),
(3, 1, 10, 3190.00, 70.00, 'borrow_book', 'cash_on_delivery', NULL, 0, '2020-07-07 12:37:41', '2020-07-07 12:37:41'),
(4, 1, 11, 1900.00, 70.00, 'borrow_book', 'bkash', 'uuu777yyyttt', 0, '2020-07-07 12:40:10', '2020-07-07 12:40:10'),
(5, 5, 12, 650.00, 70.00, 'borrow_book', 'cash_on_delivery', NULL, 0, '2020-07-10 07:53:33', '2020-07-10 07:53:33'),
(6, 5, 13, 0.00, 70.00, 'borrow_book', 'cash_on_delivery', NULL, 0, '2020-07-10 07:55:12', '2020-07-10 07:55:12'),
(7, 5, 14, 1100.00, 70.00, 'borrow_book', 'cash_on_delivery', NULL, 0, '2020-07-11 12:40:26', '2020-07-11 12:40:26'),
(8, 6, 15, 980.00, 70.00, 'full_purchase', 'cash_on_delivery', NULL, 0, '2020-07-12 18:41:16', '2020-07-12 18:41:16'),
(9, 6, 16, 1560.00, 70.00, 'borrow_book', 'cash_on_delivery', NULL, 0, '2020-07-12 19:05:10', '2020-07-12 19:05:10'),
(10, 6, 17, 1252.00, 70.00, 'borrow_book', 'cash_on_delivery', NULL, 1, '2020-07-12 19:06:47', '2020-07-13 17:50:41');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `book_id` bigint(20) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL,
  `sub_total` double(8,2) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `book_id`, `qty`, `sub_total`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 23, 1, 980.00, 'pending', '2020-07-01 10:23:53', '2020-07-01 10:23:53'),
(2, 1, 22, 3, 1950.00, 'pending', '2020-07-01 10:23:53', '2020-07-01 10:23:53'),
(4, 2, 23, 1, 980.00, 'complete', '2020-07-02 10:16:48', '2020-07-08 20:11:11'),
(6, 2, 3, 1, 500.00, 'complete', '2020-07-02 10:16:48', '2020-07-08 20:11:11'),
(7, 3, 22, 1, 650.00, 'complete', '2020-07-07 12:37:41', '2020-07-08 11:39:00'),
(8, 3, 23, 1, 980.00, 'complete', '2020-07-07 12:37:41', '2020-07-08 11:43:51'),
(9, 3, 21, 2, 1560.00, 'pending', '2020-07-07 12:37:41', '2020-07-07 12:37:41'),
(11, 4, 2, 2, 900.00, 'pending', '2020-07-07 12:40:10', '2020-07-07 12:40:10'),
(12, 5, 22, 1, 650.00, 'pending', '2020-07-10 07:53:33', '2020-07-10 07:53:33'),
(13, 7, 22, 1, 650.00, 'pending', '2020-07-11 12:40:26', '2020-07-11 12:40:26'),
(14, 7, 2, 1, 450.00, 'pending', '2020-07-11 12:40:26', '2020-07-11 12:40:26'),
(15, 8, 23, 1, 980.00, 'pending', '2020-07-12 18:41:16', '2020-07-12 18:41:16'),
(16, 9, 21, 2, 1560.00, 'pending', '2020-07-12 19:05:10', '2020-07-12 19:05:10'),
(17, 10, 6, 1, 452.00, 'complete', '2020-07-12 19:06:47', '2020-07-12 19:07:19'),
(18, 10, 7, 1, 500.00, 'complete', '2020-07-12 19:06:47', '2020-07-12 19:07:19'),
(19, 10, 5, 1, 300.00, 'pending', '2020-07-12 19:06:47', '2020-07-12 19:06:47');

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
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postal_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shippings`
--

INSERT INTO `shippings` (`id`, `customer_id`, `name`, `email`, `phone`, `address`, `country`, `district`, `postal_code`, `company_name`, `created_at`, `updated_at`) VALUES
(1, 1, 'Jamal Khan', 'jamal@gmail.com', '01728338728', 'nasirabad chittagong', NULL, NULL, NULL, NULL, '2020-06-30 08:58:26', '2020-06-30 08:58:26'),
(2, 1, 'Jamal Khan', 'jamal@gmail.com', '01728338728', 'nasirabad chittagong', NULL, NULL, NULL, NULL, '2020-06-30 10:00:21', '2020-06-30 10:00:21'),
(3, 1, 'Jamal Khan', 'jamal@gmail.com', '01728338728', 'nasirabad chittagong', NULL, NULL, NULL, NULL, '2020-06-30 10:17:40', '2020-06-30 10:17:40'),
(4, 1, 'Jamal Khan', 'jamal@gmail.com', '01728338728', 'nasirabad chittagong', NULL, NULL, NULL, NULL, '2020-06-30 10:18:34', '2020-06-30 10:18:34'),
(5, 2, 'Kamal Khan', 'kamal@gmail.com', '01812339922', 'Dhaka Bangladesh', NULL, NULL, NULL, NULL, '2020-06-30 11:01:52', '2020-06-30 11:01:52'),
(6, 2, 'Kamal Khan', 'kamal@gmail.com', '01812339922', 'Dhaka Bangladesh', NULL, NULL, NULL, NULL, '2020-06-30 11:44:58', '2020-06-30 11:44:58'),
(7, 1, 'Jamal Khan', 'jamal@gmail.com', '01728338728', 'nasirabad chittagong', NULL, NULL, NULL, NULL, '2020-07-01 10:22:45', '2020-07-01 10:22:45'),
(8, 1, 'Jamal Khan', 'jamal@gmail.com', '01728338728', 'nasirabad chittagong', NULL, NULL, NULL, NULL, '2020-07-01 10:23:53', '2020-07-01 10:23:53'),
(9, 2, 'Kamal Khan', 'kamal@gmail.com', '01812339922', 'Dhaka Bangladesh', NULL, NULL, NULL, NULL, '2020-07-02 10:16:48', '2020-07-02 10:16:48'),
(10, 1, 'Jamal Khan', 'jamal@gmail.com', '01728338728', 'nasirabad chittagong', NULL, NULL, NULL, NULL, '2020-07-07 12:37:41', '2020-07-07 12:37:41'),
(11, 1, 'Jamal Khan', 'jamal@gmail.com', '01728338728', 'nasirabad chittagong', NULL, NULL, NULL, NULL, '2020-07-07 12:40:10', '2020-07-07 12:40:10'),
(12, 5, 'Noor Mohammed Anik', 'noormohammedanik@gmail.com', '+8801672902634', 'Agrabad', NULL, NULL, NULL, NULL, '2020-07-10 07:53:33', '2020-07-10 07:53:33'),
(13, 5, 'Noor Mohammed Anik', 'noormohammedanik@gmail.com', '+8801672902634', 'Agrabad', NULL, NULL, NULL, NULL, '2020-07-10 07:55:12', '2020-07-10 07:55:12'),
(14, 5, 'Noor Mohammed Anik', 'noormohammedanik@gmail.com', '+8801672902634', 'Agrabad', NULL, NULL, NULL, NULL, '2020-07-11 12:40:26', '2020-07-11 12:40:26'),
(15, 6, 'Akram Hossen', 'bookstore.rimon@gmail.com', '01857984441', 'Chittagong', NULL, 'chittagong', '4312', NULL, '2020-07-12 18:41:16', '2020-07-12 18:41:16'),
(16, 6, 'Akram Hossen', 'bookstore.rimon@gmail.com', '01857984441', 'Chittagong', NULL, 'Chittagong', '4312', NULL, '2020-07-12 19:05:10', '2020-07-12 19:05:10'),
(17, 6, 'Akram Hossen', 'bookstore.rimon@gmail.com', '01857984441', 'Chittagong', NULL, 'Chittagong', '4312', NULL, '2020-07-12 19:06:47', '2020-07-12 19:06:47');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
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

INSERT INTO `users` (`id`, `is_admin`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'Admin Khan', 'admin@gmail.com', NULL, '$2y$10$KaMWnyhe7NDLIi7O8RDnVuX6EL.tvKE7B7zySTxIj592soXUDTWQa', NULL, '2020-06-30 08:52:51', '2020-06-30 08:52:51'),
(2, 0, 'Jamal Khan', 'jamal@gmail.com', NULL, '$2y$10$6mtQzbFQsHberyM12jIrm.MBvkvrEtE2Jq87RTIwZgHrgQKhKcEUC', NULL, '2020-06-30 08:55:43', '2020-06-30 08:55:43'),
(3, 0, 'Kamal Khan', 'kamal@gmail.com', NULL, '$2y$10$KhsDhJxlafaP5zogNu6w0.cf4kTPWLLm1NSe5cWC7ltF7kRSTlOIC', NULL, '2020-06-30 11:01:26', '2020-06-30 11:01:26'),
(4, 0, 'Salman khan', 'salman@gmail.com', NULL, '$2y$10$e/e.thtKjidtPYuw7sIo.Od85xbtRbl9jaF9GDxElhswAB2VAljoC', NULL, '2020-07-07 09:29:32', '2020-07-07 09:29:32'),
(5, 0, 'Imam Hasan', 'imam@gmail.com', NULL, '$2y$10$Bjh8r4JXg80LFMAdpVVb8.sAUXsyJK3YLZwmt2b3YDBS1Xj5ivWEC', NULL, '2020-07-07 10:11:09', '2020-07-07 10:11:09'),
(6, 0, 'Noor Mohammed Anik', 'noormohammedanik@gmail.com', NULL, '$2y$10$ktB3R6sIipHWfu9C/syqPOC3SCG7ZmzodVUOodJGxwtarwnfcJqKq', NULL, '2020-07-10 07:52:33', '2020-07-10 07:52:33'),
(7, 0, 'Akram Hossen', 'bookstore.rimon@gmail.com', NULL, '$2y$10$mgYyu0OMRPlZstA7XN7s9egUMsIYgxiBPdbQSO4b.AbCdyoC2kLwq', NULL, '2020-07-12 18:36:56', '2020-07-12 18:36:56'),
(8, 0, 'Noor Mohammed Anik', 'noor@gmail.com', NULL, '$2y$10$.X1YbKJLEkJSdpUbvWjl.urm6XcuaiPfNTWhn5mwCSNg72f37j962', NULL, '2020-07-13 19:52:00', '2020-07-13 19:52:00');

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
(12, 'Dr. R.S. Sedha', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2020-02-10 04:08:32', '2020-02-10 04:08:32'),
(13, 'ROY A. PLASTOCK', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2020-07-12 19:49:42', '2020-07-12 19:49:42'),
(14, 'M. MORRIS MANO', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2020-07-12 19:49:59', '2020-07-12 19:49:59'),
(15, 'SEYMOUR LIPSCHUTZ', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2020-07-12 19:58:27', '2020-07-12 19:58:27'),
(16, 'Noor Mohammed Anik', 'noormohammedanik@gmail.com', '+8801672902634', '2020-07-13', 'Agrabad', 'edwdwdwed', '1594655052.png', 1, '2020-07-13 19:44:12', '2020-07-13 19:44:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `books_category_id_foreign` (`category_id`),
  ADD KEY `books_writer_id_foreign` (`writer_id`);

--
-- Indexes for table `book_returns`
--
ALTER TABLE `book_returns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_email_unique` (`email`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `book_returns`
--
ALTER TABLE `book_returns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `writers`
--
ALTER TABLE `writers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

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
