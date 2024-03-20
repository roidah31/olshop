-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 20 Mar 2024 pada 17.13
-- Versi server: 8.0.35-cll-lve
-- Versi PHP: 8.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `garisba2_shop`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` bigint UNSIGNED DEFAULT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `name`, `parent_id`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Accessories', NULL, 'accessories', '2024-03-16 03:45:26', '2024-03-16 03:45:26'),
(2, 'Jewelry', 1, 'jewelry', '2024-03-16 03:45:34', '2024-03-16 03:45:34'),
(3, 'Pottery', NULL, 'pottery', '2024-03-16 03:45:47', '2024-03-16 03:45:47'),
(4, 'Fabric', NULL, 'fabric', '2024-03-16 03:45:55', '2024-03-16 03:45:55'),
(5, 'Paintings', NULL, 'paintings', '2024-03-16 03:46:02', '2024-03-16 03:46:02'),
(6, 'Sculptures', NULL, 'sculptures', '2024-03-16 03:46:11', '2024-03-16 03:46:11'),
(7, 'Wooden', NULL, 'wooden', '2024-03-16 03:46:17', '2024-03-16 03:46:17'),
(8, 'mug and glass', 7, 'mug-and-glass', '2024-03-19 23:36:50', '2024-03-19 23:36:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cities`
--

CREATE TABLE `cities` (
  `id` bigint UNSIGNED NOT NULL,
  `province_id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `postal_code` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `currencies`
--

CREATE TABLE `currencies` (
  `id` bigint UNSIGNED NOT NULL,
  `currency` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `currencies`
--

INSERT INTO `currencies` (`id`, `currency`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Rp', 'deactive', '2024-03-16 05:33:53', '2024-03-16 13:12:23'),
(2, 'usd', 'deactive', '2024-03-16 05:34:05', '2024-03-16 05:34:05'),
(3, 'asd', 'deactive', '2024-03-16 11:14:00', '2024-03-16 11:14:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `customers`
--

CREATE TABLE `customers` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `district_id` bigint UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `districts`
--

CREATE TABLE `districts` (
  `id` bigint UNSIGNED NOT NULL,
  `province_id` bigint UNSIGNED NOT NULL,
  `city_id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_07_13_233349_create_categories_table', 1),
(5, '2021_07_13_233710_create_products_table', 1),
(6, '2021_07_13_233722_create_customers_table', 1),
(7, '2021_07_13_233734_create_provinces_table', 1),
(8, '2021_07_13_233746_create_cities_table', 1),
(9, '2021_07_13_233758_create_districts_table', 1),
(12, '2021_07_15_033643_add_field_status_to_products_table', 1),
(14, '2024_03_16_105435_create_currencies_table', 2),
(16, '2014_10_12_000000_create_users_table', 3),
(17, '2021_07_13_233809_create_orders_table', 4),
(18, '2021_07_13_233823_create_order_details_table', 4),
(19, '2021_08_17_095009_create_product_details_table', 4),
(20, '2024_03_17_091753_create_product_images_table', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders`
--

CREATE TABLE `orders` (
  `id` bigint UNSIGNED NOT NULL,
  `date_order` date DEFAULT NULL,
  `customer_id` int DEFAULT NULL,
  `customer_firstname` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_lastname` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_phone` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_address` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `district_id` bigint UNSIGNED DEFAULT NULL,
  `subtotal` int DEFAULT NULL,
  `status` enum('paid','unpaid') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'paid,unpaid',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `orders`
--

INSERT INTO `orders` (`id`, `date_order`, `customer_id`, `customer_firstname`, `customer_lastname`, `customer_phone`, `customer_address`, `note`, `district_id`, `subtotal`, `status`, `created_at`, `updated_at`) VALUES
(1, '2024-03-20', 5, 'diana', 'arina', '089799980009', 'jalan mawar no 99 Blitar Jawa timur', 'q', NULL, 50000, 'paid', '2024-03-19 19:23:47', '2024-03-19 19:23:47'),
(2, '2024-03-20', 5, 'asad', 'ahmad', '089799980009', 'jalan mawar no 99 Blitar Jawa timur', NULL, NULL, 300000, 'unpaid', '2024-03-19 19:25:41', '2024-03-19 19:25:41'),
(3, '2024-03-20', 5, 'asad', 'ahmad', '089799980009', 'jalan mawar no 99 Blitar Jawa timur', NULL, NULL, 300000, 'unpaid', '2024-03-19 19:30:54', '2024-03-19 19:30:54'),
(4, '2024-03-20', 5, 'malika', 'ann', '087856060772', 'Jln, Mawar indah no 90 Surabaya', NULL, NULL, 50000, 'unpaid', '2024-03-19 19:32:49', '2024-03-19 19:32:49'),
(5, '2024-03-20', 5, 'dudi', 'ann', '087856060772', 'Jln, Mawar indah no 90 Surabaya', NULL, NULL, 5000, 'unpaid', '2024-03-19 19:51:28', '2024-03-19 19:51:28'),
(6, '2024-03-20', 5, 'malika', 'ann', '087856060772', 'Jln, Mawar indah no 90 Surabaya', NULL, NULL, 5000, 'paid', '2024-03-19 20:08:47', '2024-03-19 20:08:47'),
(7, '2024-03-20', 5, 'dudi', 'ann', '087856060772', 'Jln, Mawar indah no 90 Surabaya', NULL, NULL, 5000, 'unpaid', '2024-03-19 20:15:38', '2024-03-19 20:15:38'),
(8, '2024-03-20', 5, 'Ahna', 'noor', '089933903876', 'Jln, Mawar indah no 90 Surabaya', '-', NULL, 10000, 'unpaid', '2024-03-19 22:58:33', '2024-03-19 22:58:33'),
(9, '2024-03-20', 5, 'ahna', 'noor', '087856060772', 'Jln, Mawar indah no 90 Surabaya', NULL, NULL, 15000, 'unpaid', '2024-03-19 23:09:37', '2024-03-19 23:09:37'),
(10, '2024-03-20', 5, 'malika', 'ann', '087856060772', 'Jln, Mawar indah no 90 Surabaya', '9', NULL, 5000, 'unpaid', '2024-03-19 23:17:55', '2024-03-19 23:17:55'),
(11, '2024-03-20', 5, 'v', 'joong', '087856060772', 'Jln, Mawar indah no 90 Surabaya', NULL, NULL, 5000, 'unpaid', '2024-03-19 23:20:42', '2024-03-19 23:20:42'),
(12, '2024-03-20', 5, 'v', 'joong', '087856060772', 'Jln, Mawar indah no 90 Surabaya', NULL, NULL, 5000, 'unpaid', '2024-03-19 23:21:02', '2024-03-19 23:21:02'),
(13, '2024-03-20', 5, 'dudi', 'joong', '089933903876', 'Jln, Mawar indah no 90 Surabaya', NULL, NULL, 5000, 'paid', '2024-03-19 23:25:14', '2024-03-19 23:25:14'),
(14, '2024-03-20', 2, 'ahna', 'noor', '08389783321', 'Jlm melati no 80 Jawa timur', NULL, NULL, 15000, 'paid', '2024-03-19 23:39:59', '2024-03-19 23:39:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint UNSIGNED NOT NULL,
  `order_id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `product_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int NOT NULL,
  `qty` int NOT NULL,
  `total_price` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `product_name`, `price`, `qty`, `total_price`, `created_at`, `updated_at`) VALUES
(1, 1, 5, 'Pottery Flower handmade ethnoc', 50000, 1, 50000, '2024-03-19 19:23:47', '2024-03-19 19:23:47'),
(2, 2, 3, 'Hand Painted Bowls', 300000, 1, 300000, '2024-03-19 19:25:41', '2024-03-19 19:25:41'),
(3, 3, 3, 'Hand Painted Bowls', 300000, 1, 300000, '2024-03-19 19:30:54', '2024-03-19 19:30:54'),
(4, 4, 5, 'Pottery Flower handmade ethnoc', 50000, 1, 50000, '2024-03-19 19:32:49', '2024-03-19 19:32:49'),
(5, 5, 16, 'Wooden spoon Etnique', 5000, 1, 5000, '2024-03-19 19:51:28', '2024-03-19 19:51:28'),
(6, 6, 16, 'Wooden spoon Etnique', 5000, 1, 5000, '2024-03-19 20:08:47', '2024-03-19 20:08:47'),
(7, 7, 16, 'Wooden spoon Etnique', 5000, 1, 5000, '2024-03-19 20:15:38', '2024-03-19 20:15:38'),
(8, 8, 21, 'Wooden bowl  mahogany', 10000, 1, 10000, '2024-03-19 22:58:33', '2024-03-19 22:58:33'),
(9, 9, 23, 'Bowl mahogany brown', 15000, 1, 15000, '2024-03-19 23:09:37', '2024-03-19 23:09:37'),
(10, 10, 16, 'Wooden spoon Etnique', 5000, 1, 5000, '2024-03-19 23:17:55', '2024-03-19 23:17:55'),
(11, 11, 16, 'Wooden spoon Etnique', 5000, 1, 5000, '2024-03-19 23:20:42', '2024-03-19 23:20:42'),
(12, 12, 16, 'Wooden spoon Etnique', 5000, 1, 5000, '2024-03-19 23:21:02', '2024-03-19 23:21:02'),
(13, 13, 16, 'Wooden spoon Etnique', 5000, 1, 5000, '2024-03-19 23:25:14', '2024-03-19 23:25:14'),
(14, 14, 24, 'Mug Wooden antique', 10000, 1, 10000, '2024-03-19 23:39:59', '2024-03-19 23:39:59'),
(15, 14, 25, 'Bowl mahogany brown', 5000, 1, 5000, '2024-03-19 23:39:59', '2024-03-19 23:39:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int NOT NULL,
  `weight` int NOT NULL,
  `qty` int NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `slider` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider_desc` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `category_id`, `description`, `image`, `price`, `weight`, `qty`, `status`, `slider`, `slider_desc`, `created_at`, `updated_at`) VALUES
(1, 'solid wood cherry paddle', 'solid-wood-cherry-paddle', 7, '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodol tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veni nostrud exercitation ullamco laboris</p>', '1710586039solid-wood-cherry-paddle.jpg', 30000, 50, 10, 0, '0', NULL, '2024-03-16 03:47:19', '2024-03-16 03:47:19'),
(2, 'Handmade Jute Basket', 'handmade-jute-basket', 4, '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodol tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veni nostrud exercitation ullamco laboris</p>', '1710586277handmade-jute-basket.jpg', 20000, 50, 5, 0, '0', NULL, '2024-03-16 03:51:17', '2024-03-16 03:51:17'),
(3, 'Hand Painted Bowls', 'hand-painted-bowls', 5, '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodol tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veni nostrud exercitation ullamco laboris</p>', '1710586322hand-painted-bowls.jpg', 20000, 70, 6, 1, '1', NULL, '2024-03-16 03:52:02', '2024-03-16 03:52:02'),
(4, 'Hand-Made Garlic Mortar', 'hand-made-garlic-mortar', 7, '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodol tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veni nostrud exercitation ullamco laboris</p>', '1710586375hand-made-garlic-mortar.jpg', 25000, 80, 8, 1, '1', NULL, '2024-03-16 03:52:55', '2024-03-16 03:52:55'),
(5, 'Pottery Flower handmade ethnoc', 'pottery-flower-handmade-ethnoc', 3, '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodol tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veni nostrud exercitation ullamco laboris</p>', '1710586420pottery-flower-handmade-ethnoc.jpg', 15000, 79, 15, 1, '1', NULL, '2024-03-16 03:53:40', '2024-03-16 03:53:40'),
(16, 'Wooden spoon Etnique', 'wooden-spoon-Etnique', 4, '<p>Lorem ipsum dolor sit amet, consectetur adipisicing ', '8.png', 5000, 8, 5, 1, NULL, NULL, '2024-03-17 21:09:00', '2024-03-17 21:09:00'),
(17, 'wooden food platting', 'wooden-food-platting', 4, 'Quas fuga veniam dolorem voluptate aperiam cumque. Optio repellat quia ea sed. Blanditiis non iste vel molestiae illum quidem maiores deleniti. Dolorem autem tempora accusantium illo. Voluptatem praesentium minus non itaque. Doloribus architecto veniam et tempore aut voluptatem minima commodi.', '9.png', 20000, 9, 20, 0, NULL, NULL, '2024-03-17 21:09:00', '2024-03-19 22:36:32'),
(18, 'Brown tote bag knitting', 'autem-dolores-illum-et-quisquam-nisi-minima-dolor', 4, 'Et et odio illum possimus deserunt sit voluptas voluptatem. Nihil libero occaecati provident eveniet rerum repellat. Recusandae est eligendi ut vitae delectus alias fugiat.', '2.png', 15000, 4, 18, 1, NULL, NULL, '2024-03-17 21:12:08', '2024-03-17 21:12:08'),
(19, 'Knitting bag  shop jute', 'eos-voluptatum-neque-occaecati-nihil', 4, 'Corporis sint at hic quae consequuntur voluptatem pariatur tenetur. Vel sunt dolores doloremque veritatis provident. Autem consequatur ex itaque ut aspernatur possimus repellendus. Fugit vero incidunt necessitatibus nihil enim quaerat.', '1.png', 10000, 5, 15, 1, NULL, NULL, '2024-03-17 21:12:09', '2024-03-17 21:12:09'),
(24, 'Mug Wooden antique', 'mug-wooden-antique', 8, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non vestibulum arcu. Maecenas felis urna, aliquam ut lorem a, bibendum varius dui. Donec purus nulla, pellentesque nec elementum non, interdum ut orci. Nullam sed bibendum lacus, in ullamcorper nisi. Praesent nibh nibh, auctor pretium imperdiet at, bibendum tincidunt dui. Donec vestibulum a elit a gravida. Etiam tellus quam, congue ut sapien nec, fermentum commodo libero. Nunc pretium ultricies eros vitae congue.</p>', '1710916652mug-wooden-antique.png', 10000, 60, 0, 1, '0', NULL, '2024-03-19 23:37:32', '2024-03-19 23:37:32'),
(25, 'Bowl mahogany brown', 'bowl-mahogany-brown', 7, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non vestibulum arcu. Maecenas felis urna, aliquam ut lorem a, bibendum varius dui. Donec purus nulla, pellentesque nec elementum non, interdum ut orci. Nullam sed bibendum lacus, in ullamcorper nisi. Praesent nibh nibh, auctor pretium imperdiet at, bibendum tincidunt dui. Donec vestibulum a elit a gravida. Etiam tellus quam, congue ut sapien nec, fermentum commodo libero. Nunc pretium ultricies eros vitae congue.</p>', '1710916692bowl-mahogany-brown.png', 5000, 60, 2, 1, '1', NULL, '2024-03-19 23:38:12', '2024-03-19 23:38:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `product_details`
--

CREATE TABLE `product_details` (
  `id` bigint UNSIGNED NOT NULL,
  `id_product` int NOT NULL,
  `information_product` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `colour` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tags` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint UNSIGNED NOT NULL,
  `id_product` int NOT NULL,
  `image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `provinces`
--

CREATE TABLE `provinces` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `address` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullname` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `address`, `phone`, `fullname`, `password`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@dglass.com', NULL, 'Jln. kembang kenangan no V  Surabaya, jawa timur', '08123456789', 'roidah', '$2y$10$WeDoVSxoxI/0sAouQv9fp.RATfV6aYMOEV4lOcTgxtRL8h94VjI62', 'admin', NULL, '2024-03-16 19:38:05', '2024-03-16 19:38:05'),
(2, 'ahna', 'ahna@mail.com', NULL, 'Jln. kupang jaya no XII Gresik, jawa timur', '08123456789', 'ahna noor', '$2y$10$DcmgcmDTXUr3NCSmT6r3wOwU654XVn9twJUY7/iuU0GO7mvixYoHW', 'member', NULL, '2024-03-16 19:38:06', '2024-03-16 19:38:06'),
(3, 'nina', 'nina@mail.com', NULL, 'jalan semarang no XII jakarta barat', '08798989898998', 'nina tamam', '$2y$10$YSmZMqGjAgXRhTLqSLmZkeXZnFzSJ2KWNAlws9fREwVRX9YSxSh.2', 'member', NULL, '2024-03-20 01:34:05', '2024-03-20 01:34:05');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `currencies`
--
ALTER TABLE `currencies`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_email_unique` (`email`);

--
-- Indeks untuk tabel `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `product_details`
--
ALTER TABLE `product_details`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `provinces`
--
ALTER TABLE `provinces`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `currencies`
--
ALTER TABLE `currencies`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `districts`
--
ALTER TABLE `districts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `product_details`
--
ALTER TABLE `product_details`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `provinces`
--
ALTER TABLE `provinces`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
