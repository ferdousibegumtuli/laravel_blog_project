-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 28, 2024 at 01:47 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_blog_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL COMMENT 'Here store article title',
  `description` text NOT NULL COMMENT 'Here store article content',
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `tag_id` bigint(20) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '1 = published, 0 = draft',
  `image` varchar(255) DEFAULT NULL COMMENT 'Here store article image',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `description`, `user_id`, `category_id`, `tag_id`, `status`, `image`, `created_at`, `updated_at`) VALUES
(61, 'Nature is our Friend.', 'Nature is an inherent character or constitution,[1] particularly of the ecosphere or the universe as a whole. In this general sense nature refers to the laws, elements and phenomena of the physical world, including life. Although humans are part of nature, human activity or humans as a whole are often described as at times at odds, or outright separate and even superior to nature.', 1, 2, 2, 1, 'public/articles_images/2WPQ7YJyvLMxWHgac9jWBRreXuXRPDvScriwQ8ZD.jpg', '2024-12-20 12:38:28', '2024-12-26 16:34:47'),
(65, 'Bird make our nature more beautyful.', 'Birds are a group of warm-blooded vertebrates constituting the class Aves characterised by feathers, toothless beaked jaws, the laying of', 1, 2, 2, 1, 'public/articles_images/vTmiLZrUCDQ0kkomMGXdhCSrTGuCUdwJhsAuustk.jpg', '2024-12-20 13:16:37', '2024-12-27 00:01:05'),
(67, 'Experience.', 'Travel is the movement of people between distant geographical locations. Travel can be done by foot, bicycle, automobile, train, boat, bus, airplane, ...', 1, 1, 1, 1, 'public/articles_images/bNau0lZG6U2x0OcdpTuo2vDucW26HbEqaBg6U3fd.jpg', '2024-12-20 15:10:33', '2024-12-27 00:01:53'),
(68, 'Deleniti tempora veritatis rem sit dolorem.', 'Sed nihil aut laborum nihil. Aperiam cum harum ipsum consequatur. Quam in quae quidem sit praesentium. Eos et enim qui impedit voluptatem ea. Quam eos rerum dolor sapiente sed est. Voluptatem voluptatibus a dolorum. Ut ut veniam aut quia corporis sit.', 1, 4, 3, 1, 'public/articles_images/NW03TIhKKAAgKixxNh8H4KZiOpkjBL9jGrzIrQe9.jpg', '2024-04-21 03:32:58', '2024-12-27 00:38:26'),
(69, 'Consequatur dolor molestias molestias recusandae earum dolore.', 'Corrupti soluta sed excepturi aperiam eum non tenetur. Maiores accusantium officiis qui quod non. Nesciunt rerum reprehenderit itaque possimus quos provident. Aliquam dolor facere enim consectetur et. Aut et veritatis itaque fugiat dolores aspernatur nulla. Quidem animi est dicta voluptates vel eveniet vitae. Laudantium necessitatibus quia enim soluta. Qui error mollitia minima ullam. Architecto aliquid voluptas tempore eum laudantium qui dolores.', 1, 2, 2, 1, 'public/articles_images/AUFc1GQqYZzi2JsbvCsZYpLA7n60E1ZKgdCInTxO.jpg', '2024-03-22 09:45:37', '2024-12-27 00:43:43'),
(70, 'Ratione quia ex perspiciatis laboriosam.', 'Illum dolorem asperiores id blanditiis rem vitae. Pariatur nihil maiores porro. Sit qui aut autem ratione dolorem. Vel molestias sed quam omnis eius. Nobis libero commodi sed aspernatur facilis rerum et. Ut et debitis dicta. Accusamus esse rerum expedita placeat esse magni. Eius nam hic ut quidem qui quos minus. Voluptate est repellat aliquam et et quia.', 1, 3, 2, 1, 'public/articles_images/oSXc6i8H4lfaSIO2nEbsnVL8L9fnCNBfBVbY7OVi.jpg', '2024-08-27 06:49:13', '2024-12-27 00:44:02'),
(71, 'Est quas aliquid tempore.', 'Corporis in porro voluptatibus assumenda et dolore voluptatem repellendus. Illum quis iure rerum voluptatem nulla sed. Sint commodi odit consequatur sint necessitatibus. Qui vitae quod omnis. Totam labore dignissimos nihil. Corrupti dolorem voluptate molestiae qui quis. Ut eum omnis deserunt ut molestias. Deleniti dignissimos quia impedit a.', 1, 2, 2, 1, 'public/articles_images/upGJCJVjwNc3Bcs0Jg0pB6kxWa7mFtuhf02VeuAb.jpg', '2024-11-11 00:10:51', '2024-12-27 00:44:57'),
(72, 'Impedit qui optio quia qui.', 'Est et dignissimos et voluptas. Qui cupiditate voluptatem cumque dolor exercitationem eos quia neque. Repellendus accusantium sit facere quam esse consequatur quo. Nulla dolor et laboriosam id. Dolore corporis illum labore vel excepturi. Est id doloribus qui cumque quae voluptate reiciendis autem. Modi enim non quia. Ut fugiat rerum eveniet rem dolorem voluptas. Necessitatibus enim velit tenetur assumenda. Error minus fugit necessitatibus eveniet. Aut officiis quaerat possimus et officiis. Distinctio consequuntur minus sit eos aspernatur.', 1, 3, 2, 1, 'public/articles_images/5aamR9RLizCsD8AJEvRBJ03GtahUcQ7jbY1vFlZS.jpg', '2024-01-31 23:32:57', '2024-12-27 00:38:03'),
(73, 'Corrupti voluptate in voluptatem earum qui aut.', 'Voluptatem tempore corporis omnis aut et accusantium placeat. Sequi omnis in voluptatem et sit id autem. Accusamus ut sunt vel dolorem. Amet excepturi consectetur ipsum ipsam corrupti. Est et fugiat velit praesentium nihil nobis ullam. Iure vitae esse eum aut. Fuga velit architecto distinctio impedit. Reprehenderit ea repellat laboriosam porro voluptatem.', 1, 2, 2, 1, 'public/articles_images/wvIZiKraQo0sJfVIGlBlM3hB1oCRQOxlicH0egTK.jpg', '2024-01-07 11:19:21', '2024-12-27 00:39:30'),
(74, 'Enim quis magni ipsum nesciunt placeat.', 'Vel et sit facilis nisi quo magni magnam eum. Numquam dolor aut porro aliquid in laudantium animi quas. Quia dolores voluptas maxime ea. Cupiditate explicabo vero rerum unde. Fugit itaque accusantium libero. Cum molestiae iste et ab et ab quod. Alias et ipsa neque voluptas. Voluptas voluptas sint officiis. Odit voluptates accusamus voluptate cumque fuga. Voluptas quia tempora vero officia. Sunt est voluptatem aut nihil neque in. Minima alias neque sequi qui minima quisquam ducimus non. Eos ducimus eius dicta animi.', 1, 1, 1, 1, 'public/articles_images/v0GIXRgc26tRG64Bx6i4MvmFfUWYed4WD3xEkHtX.jpg', '2024-12-04 09:55:00', '2024-12-27 00:39:46'),
(75, 'At ea ducimus cupiditate dolorum dignissimos qui.', 'Tenetur nam omnis illo enim aut est. Aliquid et eaque et quod aut provident laborum. Est minus est quos sed. Nihil numquam tempore rerum. Aut nisi aperiam doloremque. Aut rem voluptatibus et perspiciatis explicabo sit deleniti. Esse iusto praesentium ex quae dolorum sapiente. Porro saepe error sed commodi. Consectetur iste eaque sint molestiae. Aut necessitatibus autem cum sed iusto et officia repudiandae.', 1, 2, 2, 1, 'public/articles_images/ueWK7Z7m9jobKaWljETK5LHm9bN4Onj2Ab1Jwj9i.jpg', '2024-04-04 15:27:39', '2024-12-27 00:40:18'),
(76, 'Voluptas maxime a ratione.', 'Rem optio ea harum rerum quam voluptatem. Minima culpa voluptatem occaecati repudiandae sit ut. Ut odit exercitationem ut. Sint magni aut accusantium amet quidem est. Aut et iusto est voluptatem est. Suscipit inventore dicta pariatur soluta et voluptates. In deleniti aut dolorem quam quo. Rem aut praesentium recusandae animi. Placeat velit reiciendis et et voluptatem facere quis. Facilis in atque voluptas est culpa quo. Expedita reiciendis illum numquam vel. Rerum dolorem ducimus similique exercitationem voluptas non consectetur. Similique alias blanditiis hic quia eum perspiciatis.', 1, 4, 3, 1, 'public/articles_images/F6dIPfjQ4aWQm9OrYkWOitduqWq9z7dYNhfat6cp.jpg', '2024-08-10 13:46:49', '2024-12-27 00:40:39'),
(77, 'Voluptatem odio cumque consequatur iure qui quidem.', 'Non aut at delectus dolor. Asperiores expedita quae saepe nesciunt. Dolor voluptatem rem quas voluptates dignissimos placeat eaque. Quia asperiores dolorem est ipsum explicabo. Non voluptas officia sint qui esse et natus. Id reiciendis explicabo harum necessitatibus nihil ut omnis repudiandae. Quo nam aliquid et adipisci. Est aperiam necessitatibus non id consequatur dolores. Qui voluptatem voluptates id. Quam reprehenderit sapiente voluptas voluptatem.', 1, 1, 1, 0, 'public/articles_images/Tz7IeMOhgM2JklafczRPBdXZhkJluRjynSciLddC.jpg', '2024-02-02 11:29:06', '2024-12-27 00:40:51');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(100) NOT NULL COMMENT 'here store category name',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`, `created_at`, `updated_at`) VALUES
(1, 'Journey', '2024-12-11 09:27:12', '2024-12-11 09:27:12'),
(2, 'Nature', '2024-12-11 09:28:18', '2024-12-26 16:29:15'),
(3, 'Solar', '2024-12-26 16:30:35', '2024-12-26 16:30:35'),
(4, 'Business', '2024-12-26 16:31:34', '2024-12-26 16:31:34');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(20, '2014_10_12_000000_create_users_table', 1),
(21, '2014_10_12_100000_create_password_resets_table', 1),
(22, '2019_08_19_000000_create_failed_jobs_table', 1),
(23, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(24, '2024_11_26_135943_create_categories_table', 1),
(25, '2024_12_02_055934_create_tags_table', 1),
(26, '2024_12_05_055501_create_articles_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tag` varchar(100) NOT NULL COMMENT 'Here store tag name',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `tag`, `created_at`, `updated_at`) VALUES
(1, 'Travel', '2024-12-11 08:32:04', '2024-12-26 16:32:07'),
(2, 'Nature', '2024-12-11 08:33:24', '2024-12-26 16:32:34'),
(3, 'Finance', '2024-12-11 08:33:52', '2024-12-26 16:33:18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Tuli', 'ferdousibegum1108@gmail.com', NULL, '$2y$10$9g13Wd/zCDQLrGdfloSXCuXriTfAKvKtkqsWI9ob0.FM9hr/e8a3S', NULL, '2024-12-11 08:31:56', '2024-12-11 08:31:56'),
(2, 'mr karim', 'admin@example.com', NULL, '$2y$10$InkicyRRVsNEG2zxX/qD4ue0pXu/P6hi.JY4GMI1kjDcojfLdbTXe', NULL, '2024-12-11 10:04:55', '2024-12-11 10:04:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `articles_user_id_foreign` (`user_id`),
  ADD KEY `articles_category_id_foreign` (`category_id`),
  ADD KEY `articles_tag_id_foreign` (`tag_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
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
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `articles_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `articles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
