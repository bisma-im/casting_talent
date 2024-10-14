-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2024 at 02:59 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `casting_talent`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', '$2y$10$G3hx69NIm1sLq9bsd/Mzqep/PW2eoj76X5lG6cWmaNi7iAb9W3kcq', '0', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `calling_number` varchar(255) DEFAULT NULL,
  `whatsapp_number` varchar(255) DEFAULT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `calling_number`, `whatsapp_number`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Ross Finley', 'daxiwa@mailinator.com', '+1 (466) 685-2018', '+1 (583) 872-9425', 'Consequatur Eos exp', 'Non reiciendis conse', '2024-08-19 15:09:03', '2024-08-19 15:09:03'),
(2, 'Fleur Mathis', 'wotesazoc@mailinator.com', '+1 (211) 305-4829', '+1 (624) 462-3548', 'Deleniti et tempore', 'Illum hic est non', '2024-08-19 15:10:13', '2024-08-19 15:10:13'),
(3, 'Seth Rivers', 'xapeda@mailinator.com', '+1 (349) 447-8988', '+1 (866) 322-6566', 'Qui fugit ex enim a', 'Qui ea temporibus et', '2024-08-24 10:22:58', '2024-08-24 10:22:58');

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
-- Table structure for table `job_applieds`
--

CREATE TABLE `job_applieds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_id` varchar(255) DEFAULT NULL,
  `job_poster_id` varchar(255) DEFAULT NULL,
  `job_applier_id` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_applieds`
--

INSERT INTO `job_applieds` (`id`, `job_id`, `job_poster_id`, `job_applier_id`, `status`, `created_at`, `updated_at`) VALUES
(1, '2', '2', '1', '0', '2024-09-09 05:44:53', '2024-09-09 05:44:53');

-- --------------------------------------------------------

--
-- Table structure for table `job_details`
--

CREATE TABLE `job_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `job_profile` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `gender` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `biography` longtext DEFAULT NULL,
  `languages_spoken` varchar(255) NOT NULL,
  `driving_license` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `height` varchar(255) NOT NULL,
  `bust` varchar(255) DEFAULT NULL,
  `waist` varchar(255) DEFAULT NULL,
  `hip` varchar(255) DEFAULT NULL,
  `weight` varchar(255) NOT NULL,
  `eye_color` varchar(255) NOT NULL,
  `hair_color` varchar(255) NOT NULL,
  `hair_length` varchar(255) NOT NULL,
  `shoe_size` varchar(255) NOT NULL,
  `dress_size` varchar(255) NOT NULL,
  `hourly_rate` varchar(255) DEFAULT NULL,
  `session_rate` varchar(255) DEFAULT NULL,
  `category` varchar(255) NOT NULL,
  `category_type` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_details`
--

INSERT INTO `job_details` (`id`, `user_id`, `job_profile`, `title`, `gender`, `nationality`, `location`, `biography`, `languages_spoken`, `driving_license`, `email`, `height`, `bust`, `waist`, `hip`, `weight`, `eye_color`, `hair_color`, `hair_length`, `shoe_size`, `dress_size`, `hourly_rate`, `session_rate`, `category`, `category_type`, `status`, `created_at`, `updated_at`) VALUES
(1, '2', '1724910710_banner_img_4.png', 'Veritatis molestias', 'male', 'married', 'United Arab Emirates', 'Consequuntur occaeca', '[\"French\",\"Portuguese\"]', NULL, 'mogabyqypa@mailinator.com', 'Id magnam reiciendis', 'Qui ut dolore mollit', 'Nam et porro exercit', 'Velit ad consectetur', 'Beatae dolores disti', 'Sint ipsa quas eum', 'brown', 'short', 'Ipsum distinctio Qu', 'Non nisi quia quia i', 'Consectetur saepe es', NULL, 'hiring', '[\"tv_channels_game_shows\",\"tv_shows\",\"reality_tv\",\"documentaries_factual\",\"hobbyist\",\"song_writer\",\"orchestral_musician\",\"singer\",\"violinist\"]', '0', '2024-08-29 12:51:50', '2024-08-29 12:51:50'),
(2, '2', '1725675768_bannerinner.png', 'Libero ex sint rerum', 'female', 'Colombia', 'China', 'Culpa veniam culpa', '[\"French\",\"Portuguese\"]', NULL, 'xesytyrosy@mailinator.com', 'Voluptatem occaecat', 'Voluptas praesentium', 'Labore reprehenderit', 'Dolore blanditiis no', 'Tenetur nihil esse a', 'Magnam corrupti omn', 'gray', 'long', 'Commodo pariatur Ip', 'Earum eligendi exped', 'Consequuntur laborum', NULL, 'hiring', '[\"reality_tv\",\"documentaries_factual\",\"producer_composer\",\"orchestral_musician\",\"singer\",\"musician_music\",\"band_guitarist\"]', '0', '2024-09-07 09:22:48', '2024-09-07 09:22:48');

-- --------------------------------------------------------

--
-- Table structure for table `memberships`
--

CREATE TABLE `memberships` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `payment_id` varchar(255) DEFAULT NULL,
  `package_name` varchar(255) DEFAULT NULL,
  `package_price` varchar(255) DEFAULT NULL,
  `subscription_date` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `memberships`
--

INSERT INTO `memberships` (`id`, `user_id`, `payment_id`, `package_name`, `package_price`, `subscription_date`, `status`, `created_at`, `updated_at`) VALUES
(1, '1', 'pi_3Pt1MaAgW8OMwbeW0U8TuDkn', 'platinum', '175', '2024-08-29 05:57:49', '1', '2024-08-29 12:57:49', '2024-08-29 12:57:49'),
(2, '5', 'pi_3Pvt5lAgW8OMwbeW0WLvxcva', 'gold', '95', '2024-09-06 03:44:17', '1', '2024-09-06 10:44:17', '2024-09-06 10:44:17');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_08_19_073547_create_admins_table', 2),
(6, '2024_08_19_080150_create_contacts_table', 3),
(7, '2024_08_22_000638_create_profile_details_table', 4),
(9, '2024_08_22_034610_create_model_details_table', 5),
(10, '2024_08_27_032416_create_memberships_table', 6),
(11, '2024_08_27_135059_create_job_details_table', 7),
(12, '2024_09_08_223015_create_job_applieds_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `model_details`
--

CREATE TABLE `model_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `calling_number` varchar(255) NOT NULL,
  `whatsapp_number` varchar(255) DEFAULT NULL,
  `marital_status` varchar(255) NOT NULL,
  `ethnicity` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `biography` text DEFAULT NULL,
  `languages_spoken` varchar(255) NOT NULL,
  `driving_license` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `instagram_username` varchar(255) DEFAULT NULL,
  `height` varchar(255) NOT NULL,
  `bust` varchar(255) DEFAULT NULL,
  `waist` varchar(255) DEFAULT NULL,
  `hip` varchar(255) DEFAULT NULL,
  `weight` varchar(255) NOT NULL,
  `eye_color` varchar(255) NOT NULL,
  `hair_color` varchar(255) NOT NULL,
  `hair_length` varchar(255) NOT NULL,
  `shoe_size` varchar(255) NOT NULL,
  `dress_size` varchar(255) NOT NULL,
  `hourly_rate` varchar(255) DEFAULT NULL,
  `session_rate` varchar(255) DEFAULT NULL,
  `have_tattos` varchar(255) DEFAULT NULL,
  `category` varchar(255) NOT NULL,
  `musician_categories` longtext DEFAULT NULL,
  `profile` varchar(255) DEFAULT NULL,
  `profile_images` varchar(255) DEFAULT NULL,
  `audio_file` varchar(255) DEFAULT NULL,
  `video_file` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_details`
--

INSERT INTO `model_details` (`id`, `user_id`, `first_name`, `last_name`, `date_of_birth`, `gender`, `nationality`, `calling_number`, `whatsapp_number`, `marital_status`, `ethnicity`, `location`, `biography`, `languages_spoken`, `driving_license`, `email`, `instagram_username`, `height`, `bust`, `waist`, `hip`, `weight`, `eye_color`, `hair_color`, `hair_length`, `shoe_size`, `dress_size`, `hourly_rate`, `session_rate`, `have_tattos`, `category`, `musician_categories`, `profile`, `profile_images`, `audio_file`, `video_file`, `created_at`, `updated_at`) VALUES
(1, '1', 'Mari', 'Quinn', '1978-10-17', 'female', 'Bangladesh', '+1 (524) 466-5692', '+1 (191) 954-6155', 'single', 'asian', 'Canada', 'Ratione dolor provid', '[\"Arabic\",\"French\",\"Russian\",\"German\"]', 'no', 'kuhow@mailinator.com', 'vycesed', 'Ea quia iure consequ', 'Ut enim vel dolore c', 'Dignissimos vitae ad', 'Expedita proident u', 'In accusamus optio', 'Esse velit sint dolo', 'red', 'medium', 'Debitis dicta aliqui', 'Labore dignissimos e', 'Impedit voluptatem', NULL, 'no', '[\"actors\",\"models\",\"musicians\",\"presenters_emcees\",\"event_staff_ushers\"]', '[\"main_lead\",\"mime_artist\",\"high_fashion_editorial\",\"fashion_catalogue\",\"mature_models\",\"promotional_models\",\"makeup_artists\"]', '1725422738_banner_img_3.png', '[\"1725422736_banner_img_1.png\",\"1725422737_banner_img_2.png\",\"1725422737_banner_img_3.png\",\"1725422738_casting.png\"]', '1725422738_short-5-209448.mp3', '1725422739_bandicam 2024-08-25 02-47-27-624 (online-video-cutter.com).mp4', '2024-09-04 11:05:39', '2024-09-04 11:05:39'),
(2, '2', 'Tatiana', 'Bray', '2002-03-23', 'female', 'Eswatini (fmr.', '+1 (723) 684-4345', '+1 (159) 366-3639', 'single', 'african', 'Central African Republic', 'Quae nihil nihil et', '[\"Arabic\",\"French\",\"Chinese\",\"Russian\"]', 'yes', 'rymi@mailinator.com', 'xenat', 'Necessitatibus quis', 'Assumenda quasi poss', 'Iste iste alias et s', 'Quae molestiae cumqu', 'Cumque quidem qui ob', 'Totam minima aut lab', 'brown', 'long', 'Magnam eos optio ip', 'Cupidatat eos id e', 'Ut sunt id aliqua', NULL, 'yes', '[\"film_crew\",\"influencers\",\"presenters_emcees\",\"event_staff_ushers\"]', '[\"featured_actors\",\"mime_artist\",\"high_fashion_editorial\",\"fashion_catalogue\",\"mature_models\",\"promotional_models\",\"ballet_dancers\",\"ballroom_dancers\",\"baroque_dancers\",\"makeup_artists\",\"fashion_stylists\",\"fashion_photographer\",\"portrait_photographer\"]', NULL, '[\"1725422736_banner_img_1.png\",\"1725422737_banner_img_2.png\",\"1725422737_banner_img_3.png\",\"1725422738_casting.png\"]', NULL, NULL, '2024-09-04 11:17:46', '2024-09-04 11:17:46'),
(3, '5', 'Rowan', 'Ferguson', '2012-06-04', 'female', 'Cabo Verde', '+1 (802) 818-7818', '+1 (967) 591-5979', 'married', 'middle_eastern', 'Bhutan', 'Ut aperiam voluptate', '[\"Arabic\",\"French\"]', 'yes', 'begaqinar@mailinator.com', 'zucusize', 'Quos consequatur Et', 'Dicta id eos qui qu', 'Omnis recusandae Fu', 'Eaque molestiae offi', 'Et vel voluptas recu', 'Perspiciatis earum', 'auburn', 'medium', 'Vel quis in ad sunt', 'Eiusmod aut sed dese', 'Amet debitis impedi', NULL, 'fcgvhbjn', '[\"actors\",\"models\",\"dancers_performers\",\"musicians\",\"influencers\",\"presenters_emcees\",\"event_staff_ushers\",\"photographers_videographers\"]', '[\"stunt_person\",\"commercial_models\",\"ballet_dancers\",\"ballroom_dancers\",\"baroque_dancers\",\"fashion_stylists\",\"landscape_photographer\"]', '1725594695_casting_1.png', '[\"1725594694_banner_img_4.png\",\"1725594695_cast_2.png\",\"1725594695_cast_3.png\",\"1725594695_cast_4.png\"]', '1725594695_short-5-209448.mp3', '1725594695_bandicam 2024-08-25 02-47-27-624 (online-video-cutter.com).mp4', '2024-09-06 10:51:35', '2024-09-06 10:51:35');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profile_details`
--

CREATE TABLE `profile_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `whatsapp_number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_of_days` int(11) NOT NULL,
  `no_of_hours` int(11) NOT NULL,
  `no_of_talents_male` int(11) NOT NULL,
  `no_of_talents_female` int(11) NOT NULL,
  `required_talent` varchar(255) NOT NULL,
  `nationalities` varchar(255) NOT NULL,
  `starting_amount` decimal(10,2) NOT NULL,
  `maximum_amount` decimal(10,2) NOT NULL,
  `project_detail` text NOT NULL,
  `profile_image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profile_details`
--

INSERT INTO `profile_details` (`id`, `user_id`, `first_name`, `last_name`, `whatsapp_number`, `email`, `no_of_days`, `no_of_hours`, `no_of_talents_male`, `no_of_talents_female`, `required_talent`, `nationalities`, `starting_amount`, `maximum_amount`, `project_detail`, `profile_image`, `created_at`, `updated_at`) VALUES
(1, 2, 'Marvin', 'Tran', '+1 (382) 163-7269', 'vojuja@mailinator.com', 8, 73, 93, 67, 'Actor', 'Australia', 77.00, 61.00, 'This is the testing business profile.', '1724910685_banner_img_2.png', '2024-08-29 12:51:25', '2024-09-09 07:53:25');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) DEFAULT NULL,
  `profile` varchar(255) DEFAULT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `profile`, `fname`, `lname`, `email`, `password`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'model', '1724909452_1.png', 'Jhon', 'Doe', 'jhon@gmail.com', '$2y$10$B8AkpDzUI7hh5/ekLE7z3.x/10WdXKDTdUxugKrMQokC0dtdJI5hK', '0', NULL, '2024-08-29 12:30:52', '2024-08-29 12:30:52'),
(2, 'business', '1724909523_banner_img_4.png', 'Business', 'James', 'business@gmail.com', '$2y$10$adpBrfO89t0A5.y3fTLJ0.afkus4kUuCHesFEU4az1w2Qxg4IkVrm', '0', NULL, '2024-08-29 12:32:03', '2024-08-29 12:32:03'),
(3, 'model', '1724937007_ON CAMERA PORTFOLIO  (1).png', 'faraz', 'hasan', 'farazhzaidi147@gmail.com', '$2y$10$0bmXrskQwshVdqckrgunbuuPgCKHHTpYgrzOhd./Dcqwc7kOSSREe', '0', NULL, '2024-08-29 20:10:07', '2024-08-29 20:10:07'),
(4, 'business', '1725053498_cast_1.png', 'Rudyard Espinoza', 'Ross Brooks', 'momutileha@mailinator.com', '$2y$10$o8Lmjl0EdphC3mfas2xDi.ID1ONxPeN0rmxKN5962rQzbadnQe9Ce', '0', NULL, '2024-08-31 04:31:38', '2024-08-31 04:31:38'),
(5, 'model', '1725397221_discount3.png', 'Cathleen Branch', 'Alea Barnes', 'test@test123.com', '$2y$10$8nOESXNKjyWTvRQ2DSHthumkIKEtEDoYjpVtf.CfxHBjgoxvjkQJC', '0', NULL, '2024-09-04 04:00:21', '2024-09-04 04:00:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `contacts_email_unique` (`email`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `job_applieds`
--
ALTER TABLE `job_applieds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_details`
--
ALTER TABLE `job_details`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `job_details_email_unique` (`email`);

--
-- Indexes for table `memberships`
--
ALTER TABLE `memberships`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_details`
--
ALTER TABLE `model_details`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `model_details_email_unique` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `password_reset_tokens_email_unique` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `profile_details`
--
ALTER TABLE `profile_details`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job_applieds`
--
ALTER TABLE `job_applieds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `job_details`
--
ALTER TABLE `job_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `memberships`
--
ALTER TABLE `memberships`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `model_details`
--
ALTER TABLE `model_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profile_details`
--
ALTER TABLE `profile_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
