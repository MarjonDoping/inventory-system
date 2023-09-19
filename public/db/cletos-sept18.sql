-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2023 at 08:00 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cletos`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`, `created_at`, `updated_at`, `firstname`, `lastname`, `email`) VALUES
(8, 'marjon', 'marjon123', '2022-06-17 05:30:07', '2022-06-17 14:22:03', 'Marjon', 'Doping', 'marjondoping@gmail.com'),
(10, 'karen', '12345678', '2022-06-17 14:14:45', '2022-06-17 14:14:45', 'karen', 'karen', 'karen@gmail.com'),
(13, 'joy', 'joy12345', '2022-06-17 08:27:39', '2022-06-17 08:27:39', 'joy', 'joy', 'joy@gmail.com'),
(14, 'angeline', 'angeline123', '2022-06-17 20:43:23', '2022-06-17 20:43:23', 'Angeline', 'Seveses', 'ange@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`) VALUES
(1, 'Bread'),
(2, 'Cookies'),
(3, 'Cakes'),
(4, 'Pies');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `subject` varchar(100) NOT NULL,
  `isread` int(30) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `message`, `created_at`, `updated_at`, `subject`, `isread`) VALUES
(4, 'Marjon Valdez Doping', 'marjondoping@gmail.com', 'I want to ask if the BSIT in PSU has 4-year course?', '2022-06-15 23:09:50', '2022-06-15 23:09:50', 'Regarding on Course', 0),
(5, 'Anne Kim', 'ann@gmail.com', 'Is there free wifi in Campus?', '2022-06-15 23:35:44', '2022-06-15 23:35:44', 'Connectivity', 0),
(15, 'Marjon Valdez Doping', 'marjondoping@gmail.com', 'Sana makapasa ako this sem', '2022-06-16 04:34:08', '2022-06-16 04:34:08', 'End Term', 0),
(17, 'DOPING, Marjon, Valdez', 'marjondoping@gmail.com', 'xaasx', '2023-06-06 18:51:44', '2023-06-06 18:51:44', 'sdgsg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telepon` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `expenses_id` int(11) NOT NULL,
  `details` varchar(255) DEFAULT NULL,
  `amount` float(11,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`expenses_id`, `details`, `amount`, `created_at`, `updated_at`) VALUES
(1, 'sugar', 1000.00, '2023-09-15 05:49:47', '2023-09-15 05:49:47'),
(2, 'Cooking oil', 450.50, '2023-09-15 05:52:58', '2023-09-15 05:52:58'),
(3, 'egg', 120.00, '2023-09-15 06:19:13', '2023-09-15 06:19:13'),
(4, 'cornstarch', 250.00, '2023-09-18 05:23:03', '2023-09-18 05:23:03'),
(5, 'Cooking oil', 150.00, '2023-09-18 05:44:25', '2023-09-18 05:44:25'),
(6, 'Cooking oil', 150.00, '2023-09-18 05:49:49', '2023-09-18 05:49:49'),
(7, 'asd', 11.00, '2023-09-18 06:20:04', '2023-09-18 06:20:04'),
(8, 'Electric Bill', 450.00, '2023-09-19 09:59:31', '2023-09-19 09:59:31');

-- --------------------------------------------------------

--
-- Table structure for table `faculties`
--

CREATE TABLE `faculties` (
  `id` int(11) NOT NULL,
  `page_title` varchar(255) NOT NULL,
  `section_title` varchar(355) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculties`
--

INSERT INTO `faculties` (`id`, `page_title`, `section_title`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(30, 'faculty', 'leader', 'Ryan Julian', 'Leader', '16072023168951012312.jpg', '2023-07-16 04:22:03', '2023-07-16 04:23:07'),
(31, 'faculty', 'programmer1', 'Ryan Julian', 'Programmer 1', '16072023168951027233.jpg', '2023-07-16 04:24:32', '2023-07-16 04:24:32'),
(32, 'faculty', 'programmer2', 'Ryan Julian', 'Programmer 2', '16072023168951030641.jpg', '2023-07-16 04:25:06', '2023-07-16 04:25:06');

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
-- Table structure for table `ingredients`
--

CREATE TABLE `ingredients` (
  `ingredient_id` int(11) NOT NULL,
  `ingredient_name` varchar(255) NOT NULL,
  `stocks` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ingredients`
--

INSERT INTO `ingredients` (`ingredient_id`, `ingredient_name`, `stocks`, `created_at`, `updated_at`) VALUES
(1, 'sack of flour', 5, '2023-09-14 15:07:15', '2023-09-14 15:07:15'),
(2, 'sugar', 5, '2023-09-15 05:49:47', '2023-09-15 05:49:47'),
(3, 'Cooking oil', 10, '2023-09-15 05:52:58', '2023-09-19 05:29:14'),
(4, 'egg', 12, '2023-09-15 06:19:13', '2023-09-15 06:19:13'),
(5, 'cornstarch', 5, '2023-09-18 05:23:03', '2023-09-19 05:31:18');

-- --------------------------------------------------------

--
-- Table structure for table `inventory_logs`
--

CREATE TABLE `inventory_logs` (
  `inventorylog_id` int(11) NOT NULL,
  `details` varchar(255) DEFAULT NULL,
  `inventory_in` int(11) DEFAULT NULL,
  `inventory_out` int(11) DEFAULT NULL,
  `type` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inventory_logs`
--

INSERT INTO `inventory_logs` (`inventorylog_id`, `details`, `inventory_in`, `inventory_out`, `type`, `created_at`, `updated_at`) VALUES
(1, 'sugar', 5, NULL, 1, '2023-09-15 05:49:47', '2023-09-15 05:49:47'),
(2, 'Cooking oil', 3, NULL, 1, '2023-09-15 05:52:58', '2023-09-15 05:52:58'),
(3, 'egg', 12, NULL, 1, '2023-09-15 06:19:13', '2023-09-15 06:19:13'),
(4, 'cornstarch', 5, NULL, 1, '2023-09-18 05:23:03', '2023-09-18 05:23:03'),
(5, 'Cooking oil', 5, NULL, 1, '2023-09-18 06:05:28', '2023-09-18 06:05:28'),
(6, 'Cooking oil', NULL, 1, 1, '2023-09-18 06:07:12', '2023-09-18 06:07:12'),
(7, 'Cooking oil', 6, NULL, 1, '2023-09-18 06:07:24', '2023-09-18 06:07:24'),
(8, 'Cooking oil', NULL, 2, 1, '2023-09-18 06:08:06', '2023-09-18 06:08:06'),
(9, 'Cooking oil', 2, NULL, 1, '2023-09-18 06:08:18', '2023-09-18 06:08:18'),
(10, 'asd', 11, NULL, 1, '2023-09-18 06:20:04', '2023-09-18 06:20:04'),
(11, 'Cooking oil', NULL, 2, 1, '2023-09-19 05:28:55', '2023-09-19 05:28:55'),
(12, 'Cooking oil', 6, NULL, 1, '2023-09-19 05:29:13', '2023-09-19 05:29:13'),
(13, 'cornstarch', NULL, 5, 1, '2023-09-19 05:30:19', '2023-09-19 05:30:19'),
(14, 'cornstarch', 5, NULL, 1, '2023-09-19 05:31:18', '2023-09-19 05:31:18');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `subject` varchar(1000) NOT NULL,
  `message` varchar(5000) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Anne Kim', 'ann@gmail.com', 'cc', 'cCCdxvxc', '2022-06-16 05:57:42', '2022-06-16 05:57:42'),
(2, 'dsgs', 'ann@gmail.com', 'sdgsg', 'gsd', '2022-06-16 05:58:38', '2022-06-16 05:58:38'),
(3, 'DFAFDQAF', 'ann@gmail.com', 'd', 'xzc', '2022-06-16 06:00:24', '2022-06-16 06:00:24'),
(4, 'Anne Kim', 'ann@gmail.com', 'bxbx', 'cvxzv', '2022-06-16 06:02:45', '2022-06-16 06:02:45');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'PENDING'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `status`) VALUES
(3, 'COMPLETE'),
(4, 'COMPLETED'),
(5, 'COMPLETED'),
(6, 'COMPLETED'),
(7, 'COMPLETED'),
(8, 'COMPLETED'),
(9, 'COMPLETED'),
(10, 'COMPLETED'),
(11, 'COMPLETED'),
(12, 'COMPLETED'),
(13, 'COMPLETED'),
(14, 'PENDING');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `page_title` varchar(256) NOT NULL,
  `section_title` varchar(256) NOT NULL,
  `data` varchar(8000) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `page_title`, `section_title`, `data`, `created_at`, `updated_at`) VALUES
(8, 'home', 'first_title', 'Cleto\'s Bakeshop', '2020-11-25 11:22:44', '2023-09-12 05:16:34'),
(10, 'home', 'third_icon', 'third icon', '2020-11-25 11:22:45', '2020-11-27 10:16:14'),
(11, 'home', 'third_title', 'third title', '2020-11-25 11:22:45', '2020-11-27 10:16:14'),
(19, 'home', 'banner_image', '04062022165436270929.png', '2020-11-27 10:16:15', '2022-06-04 09:11:49'),
(28, 'our_company', 'second_title', 'Latest Update and Announcements', '2020-12-14 11:43:03', '2022-06-05 18:12:39'),
(31, 'our_company', 'banner_image', '04062022165434904890.jpg', '2020-12-14 11:45:48', '2022-06-04 05:24:09'),
(35, 'company', 'banner_image', '04062022165430671759.jpg', '2022-06-03 17:38:37', '2022-06-03 17:38:37'),
(45, 'home ', 'first_carousel', 'Our bakeshop is renowned for its exceptional quality and standards.', '2022-06-06 01:23:10', '2023-09-12 05:16:34'),
(46, 'home', 'second_carousel', 'Our bakeshop is renowned for its exceptional quality and standards.', '2022-06-06 01:23:10', '2023-09-12 05:16:34'),
(47, 'home', 'third_carousel', 'Enjoy baked goods made with the freshest ingredients for optimal flavor.', '2022-06-06 01:23:53', '2023-09-12 05:16:34'),
(48, 'home', 'fourth_carousel', 'Our bakeshop offers a diverse range of delectable treats to cater to every taste.', '2022-06-06 01:23:53', '2023-09-12 05:16:34'),
(49, 'our_company', 'about_it', 'Cletos bakery shop is a trusted and fully registered business in the heart of Urdaneta City owner by Mr.Demetrio Ginez &Mrs.Luzviminda Ginez and it was build on January 10,2010 With over thirteenth years of experience in the baking industry, we have established ourselves as a reputable and reliable provider of delectable and beautiful cakes. Our commitment to quality and customer satisfaction has earned us a strong reputation and a loyal following.', '2022-06-06 01:24:52', '2023-09-12 05:17:54'),
(50, 'our_company', 'about_site', 'We take great pride in our ability to consistently deliver stunning and mouth-watering cakes to our customers. Our team of talented and experienced bakers are dedicated to using only the finest and freshest ingredients to create every masterpiece. Whether you\'re looking for a custom-designed cake for a special occasion, or simply seeking a sweet treat, our wide selection of cake flavors and designs is sure to satisfy your cravings. And with our convenient and reliable delivery service, you can enjoy a taste of Cletos delicious product and Cupcakes no matter where you are in Urdaneta City.', '2022-06-06 01:24:52', '2023-09-12 05:17:54'),
(51, 'contact', 'pnum', '09750512554', '2022-06-05 17:56:50', '2023-07-16 03:07:41'),
(52, 'contact', 'email', 'cletos@gmail.com', '2022-06-05 17:56:50', '2023-07-16 03:07:41'),
(53, 'contact', 'address', 'Urdaneta Pangasinan', '2022-06-05 17:56:50', '2023-07-16 03:07:42'),
(54, 'contact', 'facebook', 'https://www.facebook.com/profile.php?id=100071402461224', '2022-06-05 17:56:50', '2023-07-16 03:07:42'),
(55, 'contact', 'website', 'https://www.facebook.com/profile.php?id=100071402461224', '2022-06-05 17:56:50', '2023-07-16 03:07:42'),
(56, 'our_company', 'mission', 'At Cleto\'s Bakery Shop, our mission is to delight our customers with exceptional baked goods that are crafted with passion, using the finest ingredients and traditional techniques. We strive to create memorable experiences and be an integral part of our customers\' special moments. We are committed to providing quality products and friendly service, ensuring that each visit to Cleto\'s Bakery Shop is a delightful one.', '2022-06-07 04:32:21', '2023-09-12 05:17:54'),
(57, 'our_company', 'vision', 'Our vision is to be the preferred bakery shop, renowned for our delectable creations and commitment to customer satisfaction. We aim to be a trusted destination where customers can find a wide variety of freshly baked goods, including cakes, bread, pastries, and more. We envision Cleto\'s Bakery Shop as a place that brings joy to people\'s lives through our delicious offerings, friendly atmosphere, and attention to detail. We aspire to continuously innovate, improve, and expand our product range, ensuring that we remain at the forefront of the bakery industry.', '2022-06-07 04:34:08', '2023-09-12 05:17:54'),
(58, 'our_company', 'guiding', 'n', '2022-06-07 04:34:08', '2023-07-15 20:03:45'),
(59, 'our_company', 'history', 'n', '2022-06-07 04:41:52', '2023-07-15 20:03:45');

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `page_title` varchar(255) NOT NULL,
  `section_title` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `page_title`, `section_title`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(6, 'home', 'second_section', 'Cleto\'s Bakery Shop has new varieties and fresh look cakes for small and big events', 'At Cleto\'s Bakery Shop, we take great pride in crafting exceptional cakes that not only tantalize your taste buds but also create unforgettable moments for your special occasions. We are delighted to announce that we have introduced an exciting range of new varieties and given our shop a fresh new look, ensuring that your cake selection experience is even more delightful than ever before!\r\n\r\nIndulge in a World of Flavors:\r\nWe believe that every celebration deserves a cake that perfectly complements the occasion. That\'s why we have expanded our menu to include an array of delectable flavors that are sure to satisfy every palate. From classic favorites like rich chocolate, luscious vanilla, and moist red velvet to exotic options such as tangy lemon zest, creamy tiramisu, and fruity mango delight, we have something to suit everyone\'s taste.', '15072023168942632758.jpg', '2020-12-15 10:50:07', '2023-07-15 05:09:24'),
(65, 'home', 'course-1', 'Newest Cake', 'Clesto\'s Newest cake', '16072023168950648211.png', '2022-06-05 23:12:44', '2023-07-16 03:21:22'),
(66, 'home', 'course-2', 'New Offers', 'New Offers of Cleto\'s Bakeshop', '16072023168950661753.png', '2022-06-05 23:41:14', '2023-07-16 03:23:37'),
(67, 'home', 'course-3', 'Chocolate Day', 'Cleto\'s Chocolate Day', '16072023168950667477.png', '2022-06-05 23:48:31', '2023-07-16 03:24:34'),
(68, 'home', 'course-3.1', 'Strawberry Cupcake', 'Strawberry Cupcake', '16072023168950670768.png', '2022-06-05 23:51:16', '2023-07-16 03:25:26'),
(69, 'home', 'course-3.2', 'Special Cupcakes', 'Cleto\'s Special Cupcakes', '16072023168950676375.png', '2022-06-05 23:53:33', '2023-07-16 03:26:03'),
(95, 'home', 'third_section', 'Cleto\'s Bakery Shop release its newest variety of bread for a budget-friendly price', 'At Cleto\'s Bakery Shop, we believe that everyone should be able to enjoy delicious, freshly baked bread without breaking the bank. That\'s why we are thrilled to announce the release of our newest variety of bread, specially crafted to be both irresistible in taste and friendly to your budget.\r\n\r\nAffordable Delights, Uncompromised Quality:\r\nWe understand the importance of offering affordable options without compromising on quality. Our expert bakers have worked tirelessly to create a range of bread that meets our high standards while being accessible to everyone. Each loaf is made with care, using premium ingredients and traditional baking techniques to ensure a delectable taste and texture that you won\'t be able to resist.', '15072023168942682251.jpg', '2023-07-15 05:13:44', '2023-07-16 03:40:10'),
(96, 'home', 'fourth_section', 'Cleto\'s offers newest special Strawberry Custard Muffin Cupcake for students and children', '\"Experience the Irresistible Delight: Cleto\'s Bakery Shop Presents Our Newest Creation, the Strawberry Custard Muffin Cupcake - Perfect for Students and Children!\"\r\n\r\nAt Cleto\'s Bakery Shop, we are thrilled to introduce our latest sweet sensation that is sure to captivate the hearts and taste buds of students and children alike: the Strawberry Custard Muffin Cupcake. Prepare to embark on a delectable journey as we combine the freshness of strawberries with the creamy goodness of custard, creating a treat that will leave you craving for more.\r\n\r\nWe understand the importance of offering delightful options specifically tailored for our young customers. That\'s why our Strawberry Custard Muffin Cupcake has been carefully crafted to cater to their tastes and preferences. This delectable delight features a moist and fluffy muffin base infused with the delightful essence of strawberries, providing a burst of fruity flavor with every bite.', '16072023168950785465.png', '2023-07-16 03:44:16', '2023-07-16 03:44:16'),
(97, 'home', 'fifth_section', '\"Get Your Daily Bread Fix at Cleto\'s Bakery Shop and Enjoy 15% Off on All Breads!\"', 'Calling all bread enthusiasts and flavor seekers! Cleto\'s Bakery Shop is thrilled to announce an irresistible offer that will have you reaching for your bread baskets with delight. For a limited time only, we are offering a generous 15% discount on all breads, giving you the perfect opportunity to savor our freshly baked creations while enjoying incredible savings.\r\n\r\nImagine sinking your teeth into a warm, crusty baguette that boasts a heavenly aroma and a delightful chew. Or perhaps you prefer a soft, pillowy white loaf that practically melts in your mouth. Whatever your bread preferences may be, Cleto\'s Bakery Shop has a delectable selection to satisfy your cravings and suit your taste buds.', '16072023168950805878.png', '2023-07-16 03:47:38', '2023-07-16 03:47:38');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `prod_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `prod_name` varchar(255) NOT NULL,
  `prod_price` decimal(10,2) NOT NULL,
  `prod_image` varchar(255) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`prod_id`, `cat_id`, `prod_name`, `prod_price`, `prod_image`, `stock`) VALUES
(1, 1, 'Spanish Bread', '150.50', '15072023168942632758.jpg', 6),
(2, 3, 'Roll Cake', '500.00', '23072023169011966338.jpg', 6),
(3, 4, 'Buko Pie', '50.00', '23072023169012283719.jpg', 5),
(6, 4, 'Egg Pie', '50.00', '26072023169039153698.jpg', 20);

-- --------------------------------------------------------

--
-- Table structure for table `sites`
--

CREATE TABLE `sites` (
  `id` int(11) NOT NULL,
  `page_title` varchar(500) NOT NULL,
  `section_title` varchar(500) NOT NULL,
  `title` varchar(500) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `image` varchar(300) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sites`
--

INSERT INTO `sites` (`id`, `page_title`, `section_title`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'site', 'teams-gov', 'Mr. Demetrio Ginez', 'Cleto\'s Bakeshop Owner', '16072023168948280535.png', '2022-06-08 12:11:22', '2023-07-15 20:46:45'),
(3, 'site', 'teams-vg', 'Mrs. Luzviminda Ginez', 'Cleto\'s Bakeshop Owner', '16072023168948286131.png', '2022-06-08 18:09:51', '2023-07-15 20:47:41'),
(4, 'site', 'teams-sc', 'Isabella Gonzales', 'Bakeshop Manager', '16072023168948303199.jpg', '2022-06-08 18:10:40', '2023-07-15 20:50:33'),
(5, 'site', 'teams-ss', 'Angelyn M. Morales', 'Co-Manager', '16072023168948459313.jpg', '2022-06-08 18:11:48', '2023-07-15 21:16:34'),
(6, 'site', 'teams-fo1', 'Andrea Torres', 'Finance Officer', '16072023168948352534.jpg', '2022-06-08 18:13:01', '2023-07-15 20:58:47'),
(7, 'site', 'teams-fo2', 'Miguel Castro', 'Baker', '16072023168948367993.jpg', '2022-06-08 18:13:51', '2023-07-15 21:01:20'),
(8, 'site', 'teams-au', 'Adrian Cruz', 'Assistant Baker', '16072023168948440441.png', '2022-06-08 18:14:30', '2023-07-15 21:13:24'),
(9, 'site', 'teams-au2', 'Gerald Cruz', 'Assistant Baker', '16072023168948386056.jpg', '2022-06-08 18:16:00', '2023-07-15 21:04:20'),
(10, 'site', 'teams-bm', 'Kristine Conception', 'Store Seller', '16072023168949366087.jpg', '2022-06-08 18:16:34', '2023-07-15 23:47:40'),
(11, 'site', 'teams-se', 'Mika Henry', 'Store Seller', '16072023168949369035.jpg', '2022-06-08 18:21:07', '2023-07-15 23:48:10'),
(12, 'site', 'teams-gd1', 'Marie Caraeg', 'Store Seller', '16072023168949373479.jpg', '2022-06-08 18:29:53', '2023-07-15 23:48:54'),
(13, 'site', 'teams-gd2', 'Mae Anne Valdez', 'Store Seller', '16072023168949378949.jpg', '2022-06-08 18:30:58', '2023-07-15 23:49:49'),
(14, 'site', 'teams-exe', 'Queenie Sta. Maria', 'Store Seller', '16072023168949404651.jpg', '2022-06-08 18:31:47', '2023-07-15 23:54:06');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `transaction_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `customer_name` varchar(255) DEFAULT NULL,
  `totalprice` decimal(10,2) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`transaction_id`, `order_id`, `customer_name`, `totalprice`, `date`) VALUES
(1, 4, NULL, '151.00', '2023-07-24 20:38:30'),
(2, 5, 'asd', '651.00', '2023-07-24 20:45:51'),
(3, 6, 'hello', '700.50', '2023-07-24 21:05:28'),
(4, 7, 'asd', '1204.00', '2023-07-24 21:06:57'),
(5, 8, NULL, '150.50', '2023-07-24 21:08:01'),
(6, 9, NULL, '150.00', '2023-07-26 17:13:39'),
(7, 10, NULL, '100.00', '2023-09-12 12:25:31'),
(8, 11, 'asdasd', '150.50', '2023-09-12 13:01:09'),
(9, 12, 'qwerty', '750.50', '2023-09-12 13:04:27'),
(10, 13, 'zxc', '750.50', '2023-09-12 13:08:43');

-- --------------------------------------------------------

--
-- Table structure for table `userorders`
--

CREATE TABLE `userorders` (
  `userorders_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userorders`
--

INSERT INTO `userorders` (`userorders_id`, `order_id`, `prod_id`, `quantity`) VALUES
(10, 4, 1, 1),
(13, 5, 1, 1),
(14, 5, 2, 1),
(15, 6, 1, 1),
(16, 6, 2, 1),
(17, 6, 3, 1),
(18, 7, 1, 8),
(19, 8, 1, 1),
(20, 9, 6, 3),
(21, 10, 3, 2),
(22, 11, 1, 1),
(23, 12, 1, 1),
(24, 12, 2, 1),
(25, 12, 3, 1),
(26, 12, 6, 1),
(27, 13, 1, 1),
(28, 13, 2, 1),
(29, 13, 3, 1),
(30, 13, 6, 1);

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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`expenses_id`);

--
-- Indexes for table `faculties`
--
ALTER TABLE `faculties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `ingredients`
--
ALTER TABLE `ingredients`
  ADD PRIMARY KEY (`ingredient_id`);

--
-- Indexes for table `inventory_logs`
--
ALTER TABLE `inventory_logs`
  ADD PRIMARY KEY (`inventorylog_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`prod_id`),
  ADD KEY `category_id` (`cat_id`);

--
-- Indexes for table `sites`
--
ALTER TABLE `sites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `userorders`
--
ALTER TABLE `userorders`
  ADD PRIMARY KEY (`userorders_id`),
  ADD KEY `prod_id` (`prod_id`),
  ADD KEY `order_id` (`order_id`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `expenses_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `faculties`
--
ALTER TABLE `faculties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ingredients`
--
ALTER TABLE `ingredients`
  MODIFY `ingredient_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `inventory_logs`
--
ALTER TABLE `inventory_logs`
  MODIFY `inventorylog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sites`
--
ALTER TABLE `sites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `userorders`
--
ALTER TABLE `userorders`
  MODIFY `userorders_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`cat_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `userorders`
--
ALTER TABLE `userorders`
  ADD CONSTRAINT `userorders_ibfk_1` FOREIGN KEY (`prod_id`) REFERENCES `products` (`prod_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `userorders_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
