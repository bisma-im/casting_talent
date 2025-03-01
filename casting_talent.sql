-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2025 at 02:31 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

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
-- Table structure for table `client_inquiry`
--

CREATE TABLE `client_inquiry` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT 15,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `calling_number` varchar(20) DEFAULT NULL,
  `whatsapp_number` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `project` varchar(20) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `no_of_days` int(11) DEFAULT NULL,
  `no_of_hours` int(11) DEFAULT NULL,
  `start_date` datetime DEFAULT NULL,
  `end_date` datetime DEFAULT NULL,
  `no_of_talents_male` int(11) DEFAULT NULL,
  `no_of_talents_female` int(11) DEFAULT NULL,
  `nationalities` varchar(255) DEFAULT NULL,
  `categories` varchar(255) DEFAULT NULL,
  `starting_amount` decimal(10,0) DEFAULT NULL,
  `maximum_amount` decimal(10,0) DEFAULT NULL,
  `project_detail` text DEFAULT NULL,
  `brief_file` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client_inquiry`
--

INSERT INTO `client_inquiry` (`id`, `user_id`, `first_name`, `last_name`, `company`, `calling_number`, `whatsapp_number`, `email`, `project`, `country`, `state`, `city`, `no_of_days`, `no_of_hours`, `start_date`, `end_date`, `no_of_talents_male`, `no_of_talents_female`, `nationalities`, `categories`, `starting_amount`, `maximum_amount`, `project_detail`, `brief_file`, `created_at`, `updated_at`) VALUES
(3, 15, 'Test', 'Example', 'test company', '123456789', '123456789', 'test@example.us', 'Shoot', 'United Arab Emirates', 'Dubai', 'Dubai Silicon Oasis', 5, 10, '2025-02-10 00:00:00', '2025-02-15 00:00:00', 2, 2, NULL, 'Actor, Lead role, Featured', 50000, 60000, 'details of project  details of project  details of project  details of project  details of project  details of project  details of project  details of project  details of project  details of project  details of project  details of project  details of project  details of project  details of project  details of project  details of project  details of project  details of project  details of project', 'uploads/client-inquiry/1738862137_portfolio (6).pdf', '2025-02-06 12:15:38', '2025-02-06 12:15:38'),
(4, 15, 'Test', 'Example', 'test company', '123456780', '123456780', 'test@example.us', 'Shoot', 'United Arab Emirates', 'Dubai', 'Palm Jumeirah', 5, 5, '2025-02-12 00:00:00', '2025-02-20 00:00:00', 2, 2, NULL, 'Actor, Lead role, Featured', 20000, 30000, 'details of project details of project details of project details of project details of project details of project details of project details of project details of project details of project details of project details of project details of project details of project', 'uploads/client-inquiry/1738865759_portfolio (6).pdf', '2025-02-06 13:15:59', '2025-02-06 13:15:59'),
(5, 15, 'Test', 'Example', 'test company', '123456789', '123456789', 'test@example.us', 'Shoot', 'United Arab Emirates', 'Dubai', 'Dubai Silicon Oasis', 5, 5, '2025-02-11 00:00:00', '2025-02-27 00:00:00', 2, 2, 'Afghanistan, Albania', 'Actor, Lead role, Featured', 20000, 30000, 'ssdgsfagfafhh', NULL, '2025-02-06 13:32:00', '2025-02-06 13:32:00'),
(7, 15, 'Test', 'Example', 'test company', '123456789', '123456789', 'test@example.us', 'Shoot', 'Bahrain', 'Muharraq Governorate', 'Muharraq', 1, 1, '2025-02-11 00:00:00', '2025-02-15 00:00:00', 1, 1, 'Afghanistan, Albania, Algeria', 'Actor, Featured, Extras', 4000, 5000, 'DETAIL OF PROJECT DETAIL OF PROJECT DETAIL OF PROJECT DETAIL OF PROJECT DETAIL OF PROJECT DETAIL OF PROJECT DETAIL OF PROJECT DETAIL OF PROJECT', NULL, '2025-02-10 14:14:34', '2025-02-10 14:14:34');

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
(3, 'Seth Rivers', 'xapeda@mailinator.com', '+1 (349) 447-8988', '+1 (866) 322-6566', 'Qui fugit ex enim a', 'Qui ea temporibus et', '2024-08-24 10:22:58', '2024-08-24 10:22:58'),
(4, 'John Doe', 'john.doe@example.com', '1234567890', '1234567890', 'Inquiry', 'Hello, I have a question about your services.', '2025-02-05 19:38:11', '2025-02-05 19:38:11'),
(5, 'Jane Smith', 'jane.smith@example.com', '1234567891', '1234567891', 'Support', 'I need assistance with my account.', '2025-02-05 19:38:11', '2025-02-05 19:38:11'),
(6, 'Alice Johnson', 'alice.johnson@example.com', '1234567892', '1234567892', 'Booking', 'I would like to book an appointment.', '2025-02-05 19:38:11', '2025-02-05 19:38:11'),
(7, 'Bob Brown', 'bob.brown@example.com', '1234567893', '1234567893', 'Feedback', 'Here is some feedback for your team.', '2025-02-05 19:38:11', '2025-02-05 19:38:11'),
(8, 'Charlie Davis', 'charlie.davis@example.com', '1234567894', '1234567894', 'Complaint', 'I have a complaint about a recent experience.', '2025-02-05 19:38:11', '2025-02-05 19:38:11'),
(9, 'Daisy Miller', 'daisy.miller@example.com', '1234567895', '1234567895', 'Jobs', 'I am interested in job opportunities.', '2025-02-05 19:38:11', '2025-02-05 19:38:11'),
(10, 'Evan Thomas', 'evan.thomas@example.com', '1234567896', '1234567896', 'Order', 'I have a question regarding my order.', '2025-02-05 19:38:11', '2025-02-05 19:38:11'),
(11, 'Grace Lee', 'grace.lee@example.com', '1234567897', '1234567897', 'Technical Support', 'I am having a technical issue.', '2025-02-05 19:38:11', '2025-02-05 19:38:11'),
(12, 'Henry Wilson', 'henry.wilson@example.com', '1234567898', '1234567898', 'General Inquiry', 'I have some general questions.', '2025-02-05 19:38:11', '2025-02-05 19:38:11'),
(13, 'Isla Scott', 'isla.scott@example.com', '1234567899', '1234567899', 'Pricing', 'Can you provide more details about your pricing?', '2025-02-05 19:38:11', '2025-02-05 19:38:11');

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
(1, '7', '2', '6', '0', '2024-09-09 05:44:53', '2024-09-09 05:44:53'),
(7, '7', NULL, '6', '0', '2025-02-21 13:05:53', '2025-02-21 13:05:53'),
(8, '7', NULL, '6', '0', '2025-02-21 13:12:43', '2025-02-21 13:12:43'),
(9, '7', NULL, '6', '0', '2025-02-22 04:52:03', '2025-02-22 04:52:03'),
(10, '7', NULL, '6', '0', '2025-02-22 04:56:18', '2025-02-22 04:56:18'),
(11, '7', NULL, '6', '0', '2025-02-22 05:17:51', '2025-02-22 05:17:51'),
(12, '7', NULL, '6', '0', '2025-02-22 05:21:53', '2025-02-22 05:21:53'),
(13, '7', NULL, '6', '0', '2025-02-22 05:22:31', '2025-02-22 05:22:31'),
(14, '7', NULL, '6', '0', '2025-02-22 05:58:43', '2025-02-22 05:58:43'),
(15, '7', NULL, '6', '0', '2025-02-22 05:59:14', '2025-02-22 05:59:14'),
(16, '7', NULL, '6', '0', '2025-02-22 05:59:39', '2025-02-22 05:59:39'),
(17, '7', NULL, '6', '0', '2025-02-22 06:03:46', '2025-02-22 06:03:46');

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
(2, '2', '1725675768_bannerinner.png', 'Libero ex sint rerum', 'female', 'Colombia', 'China', 'Culpa veniam culpa', '[\"French\",\"Portuguese\"]', NULL, 'xesytyrosy@mailinator.com', 'Voluptatem occaecat', 'Voluptas praesentium', 'Labore reprehenderit', 'Dolore blanditiis no', 'Tenetur nihil esse a', 'Magnam corrupti omn', 'gray', 'long', 'Commodo pariatur Ip', 'Earum eligendi exped', 'Consequuntur laborum', NULL, 'hiring', '[\"reality_tv\",\"documentaries_factual\",\"producer_composer\",\"orchestral_musician\",\"singer\",\"musician_music\",\"band_guitarist\"]', '0', '2024-09-07 09:22:48', '2024-09-07 09:22:48'),
(7, '2', '1724910710_banner_img_4.png', 'Veritatis molestias', 'male', 'married', 'United Arab Emirates', 'Consequuntur occaeca', '[\"French\",\"Portuguese\"]', NULL, 'mogabyqypa@mailinator.com', 'Id magnam reiciendis', 'Qui ut dolore mollit', 'Nam et porro exercit', 'Velit ad consectetur', 'Beatae dolores disti', 'Sint ipsa quas eum', 'brown', 'short', 'Ipsum distinctio Qu', 'Non nisi quia quia i', 'Consectetur saepe es', NULL, 'hiring', '[\"tv_channels_game_shows\",\"tv_shows\",\"reality_tv\",\"documentaries_factual\",\"hobbyist\",\"song_writer\",\"orchestral_musician\",\"singer\",\"violinist\"]', '0', '2024-08-29 12:51:50', '2024-08-29 12:51:50');

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
  `talent_id` varchar(255) NOT NULL,
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
  `height` varchar(255) DEFAULT NULL,
  `bust` varchar(255) DEFAULT NULL,
  `waist` varchar(255) DEFAULT NULL,
  `hip` varchar(255) DEFAULT NULL,
  `weight` varchar(255) DEFAULT NULL,
  `eye_color` varchar(255) DEFAULT NULL,
  `hair_color` varchar(255) DEFAULT NULL,
  `hair_length` varchar(255) DEFAULT NULL,
  `shoe_size` varchar(255) DEFAULT NULL,
  `dress_size` varchar(255) DEFAULT NULL,
  `hourly_rate` varchar(255) DEFAULT NULL,
  `session_rate` varchar(255) DEFAULT NULL,
  `have_tattoos` varchar(255) DEFAULT NULL,
  `experience` varchar(255) DEFAULT NULL,
  `skills` varchar(255) DEFAULT NULL,
  `category` varchar(255) NOT NULL,
  `musician_categories` longtext DEFAULT NULL,
  `visa_status` varchar(50) DEFAULT NULL,
  `profile` varchar(255) DEFAULT NULL,
  `profile_images` text DEFAULT NULL,
  `audio_file` text DEFAULT NULL,
  `video_file` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_details`
--

INSERT INTO `model_details` (`id`, `user_id`, `talent_id`, `first_name`, `last_name`, `date_of_birth`, `gender`, `nationality`, `calling_number`, `whatsapp_number`, `marital_status`, `ethnicity`, `location`, `biography`, `languages_spoken`, `driving_license`, `email`, `instagram_username`, `height`, `bust`, `waist`, `hip`, `weight`, `eye_color`, `hair_color`, `hair_length`, `shoe_size`, `dress_size`, `hourly_rate`, `session_rate`, `have_tattoos`, `experience`, `skills`, `category`, `musician_categories`, `visa_status`, `profile`, `profile_images`, `audio_file`, `video_file`, `created_at`, `updated_at`) VALUES
(1, '1', 'CTF-00001', 'Mari', 'Quinn', '1978-10-17', 'female', 'Bangladesh', '+1 (524) 466-5692', '+1 (191) 954-6155', 'single', 'asian', 'Canada', 'Ratione dolor provid', '[\"Arabic\",\"French\",\"Russian\"]', 'no', 'kuhow@mailinator.com', 'vycesed', '162.56', '93', '74', '90', '58', 'green', 'red', 'medium', '37', '40', 'Impedit voluptatem', NULL, 'no', NULL, NULL, '[\"actors\",\"models\",\"musicians\",\"presenters_emcees\",\"event_staff_ushers\"]', '[\"main_lead\",\"mime_artist\",\"high_fashion_editorial\",\"fashion_catalogue\",\"mature_models\",\"promotional_models\",\"makeup_artists\"]', NULL, '1725422738_banner_img_3.png', '[\"1725422736_banner_img_1.png\",\"1725422737_banner_img_2.png\",\"1725422737_banner_img_3.png\",\"1725422738_casting.png\"]', '1725422738_short-5-209448.mp3', '1725422739_bandicam 2024-08-25 02-47-27-624 (online-video-cutter.com).mp4', '2024-09-04 11:05:39', '2024-09-04 11:05:39'),
(2, '2', 'CTF-00002', 'Tatiana', 'Bray', '2002-03-23', 'female', 'Eswatini', '+1 (723) 684-4345', '+1 (159) 366-3639', 'single', 'african', 'Central African Republic', 'Quae nihil nihil et', '[\"Arabic\",\"French\",\"Chinese\"]', 'yes', 'rymi@mailinator.com', 'xenat', '167', '94', '74', '92', '59', 'blue', 'brown', 'long', '38', '40', 'Ut sunt id aliqua', NULL, 'yes', NULL, NULL, '[\"film_crew\",\"influencers\",\"presenters_emcees\",\"event_staff_ushers\"]', '[\"featured_actors\",\"mime_artist\",\"high_fashion_editorial\",\"fashion_catalogue\",\"mature_models\",\"promotional_models\",\"ballet_dancers\",\"ballroom_dancers\",\"baroque_dancers\",\"makeup_artists\",\"fashion_stylists\",\"fashion_photographer\",\"portrait_photographer\"]', NULL, NULL, '[\"1725422736_banner_img_1.png\",\"1725422737_banner_img_2.png\",\"1725422737_banner_img_3.png\",\"1725422738_casting.png\"]', '[\"1725594695_short-5-209448.mp3\" ]', NULL, '2024-09-04 11:17:46', '2024-09-04 11:17:46'),
(3, '5', 'CTF-00005', 'Rowan', 'Ferguson', '2012-06-04', 'female', 'Cabo Verde', '+1 (802) 818-7818', '+1 (967) 591-5979', 'married', 'middle_eastern', 'Bhutan', 'Ut aperiam voluptate', '[\"Arabic\",\"French\"]', 'yes', 'begaqinar@mailinator.com', 'zucusize', '159', '94', '76', '100', '60', 'brown', 'auburn', 'medium', '39', '40', 'Amet debitis impedi', NULL, 'fcgvhbjn', NULL, NULL, '[\"actors\",\"models\",\"dancers_performers\",\"musicians\",\"influencers\",\"presenters_emcees\",\"event_staff_ushers\",\"photographers_videographers\"]', '[\"stunt_person\",\"commercial_models\",\"ballet_dancers\",\"ballroom_dancers\",\"baroque_dancers\",\"fashion_stylists\",\"landscape_photographer\"]', NULL, '1725594695_casting_1.png', '[\"1725594694_banner_img_4.png\",\"1725594695_cast_2.png\",\"1725594695_cast_3.png\",\"1725594695_cast_4.png\"]', '[\"1725594695_short-5-209448.mp3\" ]', '1725594695_bandicam 2024-08-25 02-47-27-624 (online-video-cutter.com).mp4', '2024-09-06 10:51:35', '2024-09-06 10:51:35'),
(9, '6', 'CTF-00006', 'Test', 'Example', '2024-11-01', 'female', 'Austria', '3343535', '352235', 'single', 'pacific_islander', 'United Arab Emirates', 'wrgerheth', '[\"English\",\"Hindi\"]', 'yes', 'test@example.us', 'efaefef', '129', '90', '60', '90', '70', 'brown', 'Brown', 'long', '12', '12', '120', NULL, 'yes', NULL, NULL, '[\"actors\",\"models\"]', '[\"main_lead\",\"high_fashion_editorial\",\"fashion_catalogue\"]', 'visit', '1730416233_model5.jpg', '[\"1730416233_model5.jpg\",\"1730416233_pngtree-vector-printer-icon-png-image_541786.jpg\",\"1730416233_screenshot.png\",\"1730416233_IMG_3945.PNG\",\"1730416233_IMG_3947.PNG\"]', NULL, NULL, '2024-10-31 18:10:33', '2024-10-31 18:10:33'),
(13, '11', 'CTM-00011', 'shawn', 'Example', '1991-06-29', 'male', 'Austria', '123456789', '123456789', 'single', 'south_asian', 'United Arab Emirates', 'biographyyyyyy', '[\"English\",\"Hindi\"]', 'yes', 'shawn@example.us', 'efaefef', '129', '90', '60', '90', '70', 'brown', 'Brown', 'long', '12', '12', '120', NULL, 'yes', NULL, NULL, '[\"actors\",\"models\"]', '[\"main_lead\",\"body_double\",\"high_fashion_editorial\",\"fashion_catalogue\"]', 'visit', '1735418632_Blank diagram (2).png', '[\"1735418632_Blank diagram (2).png\"]', NULL, NULL, '2024-12-28 15:43:52', '2024-12-28 15:43:52'),
(14, '10', 'CTM-00010', 'Test', 'Example', '2009-02-03', 'male', 'Austria', '123456789', '123456789', 'single', 'native_american', 'United Arab Emirates', 'BIOGRAPHYY', '[\"Afar\",\"Abkhazian\",\"Afrikaans\"]', 'yes', 'talent@example.us', 'dasnjdbas', '129', '90', '60', '90', '70', 'Amber', 'Brown', 'long', '12', '12', '120', NULL, 'yes', NULL, NULL, '[\"actors\",\"models\"]', '[\"main_lead\",\"featured_actors\",\"fashion_catalogue\"]', 'visit', '1735866230_1726316851_testimonial 1.jpeg', '[\"1735866230_1726316851_image1_0.jpg\",\"1735866230_1726316851_testimonial 1.jpeg\",\"1735866230_1730415982_model5.jpg\"]', '[\"1735866230_mixkit-crickets-and-insects-in-the-wild-ambience-39.wav\"]', NULL, '2025-01-02 20:03:50', '2025-01-02 20:03:50'),
(15, '9', 'CTF-00009', 'Hazel', 'Test', '1996-02-20', 'female', 'Austria', '123456789', '123456789', 'single', 'south_asian', 'United Arab Emirates', 'BIOGRAPHYYYYYYYYYY', '[\"Afar\",\"Abkhazian\"]', 'yes', 'hazel@example.us', 'dasdasf', '129', NULL, NULL, NULL, NULL, 'Amber', 'Brown', 'long', NULL, NULL, '120', NULL, 'yes', NULL, NULL, '[\"photographers_videographers\"]', '[\"bartender\",\"brand_ambassador\",\"fashion\",\"portrait\"]', 'visit', '1735866876_category_11.png', '[\"1735866876_category_11.png\"]', '[\"1735866876_mixkit-crickets-and-insects-in-the-wild-ambience-39.wav\"]', '[\"https:\\/\\/youtu.be\\/sVkbV9MUbEI?si=rr_6TzEqVDeymtaO\",\"https:\\/\\/www.youtube.com\\/watch?v=9WE49XkoQ-U\",\"https:\\/\\/www.youtube.com\\/watch?v=X87AM7IukYs\"]', '2025-01-02 20:14:36', '2025-01-02 20:14:36'),
(16, '8', 'CTM-00008', 'Test', 'Example2', '2025-01-06', 'male', 'Austria', '123456789', '123456789', 'single', 'mixed_race', 'United Arab Emirates', 'BIOGRPAHYYYYYY', '[\"Abkhazian\"]', 'yes', 'test@example2.us', 'efaefef', NULL, NULL, NULL, NULL, NULL, 'Amber', 'Brown', 'long', NULL, NULL, '120', NULL, 'yes', NULL, NULL, '[\"film_crew\"]', '[\"art_director\"]', 'visit', '1735867119_1726316851_testimonial 1.jpeg', '[\"1735867119_1726316851_image1_0.jpg\",\"1735867119_1726316851_testimonial 1.jpeg\",\"1735867119_1726316851_testimonial 2.jpeg\",\"1735867119_1729959171_model5.jpg\"]', '[\"1735867119_mixkit-crickets-and-insects-in-the-wild-ambience-39.wav\",\"1735867119_mixkit-crickets-and-insects-in-the-wild-ambience-39.wav\"]', '[\"https:\\/\\/www.youtube.com\\/watch?v=9WE49XkoQ-U\",\"https:\\/\\/www.youtube.com\\/watch?v=X87AM7IukYs\",\"https:\\/\\/www.youtube.com\\/watch?v=gv3SjxOJEsw\"]', '2025-01-02 20:18:39', '2025-01-02 20:18:39'),
(19, '14', 'CTF-00014', 'Test', 'Example', '2025-02-05', 'female', 'Austria', '123456789', '123456789', 'single', 'south_asian', 'United Arab Emirates', 'vsdagsagsg', '[\"Abkhazian\"]', 'yes', 'test11@example.us', 'efaefef', '129', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '120', NULL, NULL, '4 years', 'Experienced', '[\"makeup_hair_painter_fashion_stylists\"]', '[\"makeup_artists\",\"fashion_stylists\"]', 'visit', '1738774554_rose.jpeg', NULL, NULL, '[\"\",\"\"]', '2025-02-05 11:55:54', '2025-02-05 11:55:54');

-- --------------------------------------------------------

--
-- Table structure for table `model_jobs`
--

CREATE TABLE `model_jobs` (
  `id` int(11) NOT NULL,
  `project` varchar(255) NOT NULL,
  `required` text NOT NULL,
  `date` date NOT NULL,
  `timings` varchar(255) NOT NULL,
  `days` int(11) NOT NULL,
  `payment` varchar(255) DEFAULT NULL,
  `payment_status` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `city` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `transportation` varchar(255) DEFAULT NULL,
  `food` varchar(255) DEFAULT NULL,
  `payment_mode` varchar(255) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `details` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `model_jobs`
--

INSERT INTO `model_jobs` (`id`, `project`, `required`, `date`, `timings`, `days`, `payment`, `payment_status`, `country`, `city`, `area`, `transportation`, `food`, `payment_mode`, `image`, `details`, `created_at`, `updated_at`) VALUES
(7, 'Shoot', 'Actor, Lead role, Featured, Model', '2024-12-26', 'Half Day', 3, '20000', 'paid after 10 days', 'UAE', 'Khawr Fakkān', 'idk', 'Yes', 'Yes', 'Cash', '1735221980_Blank diagram (2).png', 'details of shoot', '2024-12-26 09:06:20', '2025-01-02 19:39:13'),
(8, 'Shoot', '\"actors, main_lead, featured_actors, body_double, presenters_emcees, balloon_decorator\"', '2025-06-25', 'Half Day', 5, '20000', 'paid after 10 days', 'UAE', 'Abu Dhabi', 'idk', 'Yes', 'Yes', 'Cash', '1740492457_25mb.jpg', 'details of shoot details of shoot details of shoot details of shoot details of shoot details of shoot', '2025-02-25 09:07:37', '2025-02-25 09:07:37'),
(9, 'Shoot', '\"actors, main_lead, featured_actors, body_double\"', '2025-12-23', 'Half Day', 5, '20000', 'paid after 10 days', 'UAE', 'Sharjah', 'idk', 'Yes', 'Yes', 'Cash', '1740492560_aline-photo.png', 'details of shoot details of shoot details of shoot details of shoot details of shoot details of shoot details of shoot', '2025-02-25 09:09:20', '2025-02-25 09:09:20'),
(10, 'Shoot', '\"celebrity\"', '2025-11-20', 'Half Day', 5, '20000', 'paid after 10 days', 'UAE', 'Sharjah', 'idk', 'Yes', 'Yes', 'Bank Transfer', '1740494399_aline-photo.png', 'details of shoot', '2025-02-25 09:39:59', '2025-02-25 09:39:59'),
(11, 'Shoot', '\"celebrity\"', '2025-11-20', 'Half Day', 5, '20000', 'paid after 10 days', 'UAE', 'Sharjah', 'idk', 'Yes', 'Yes', 'Bank Transfer', '1740494463_aline-photo.png', 'details of shoot', '2025-02-25 09:41:03', '2025-02-25 09:41:03'),
(12, 'Shoot', '\"celebrity\"', '2025-11-20', 'Half Day', 5, '20000', 'paid after 10 days', 'UAE', 'Sharjah', 'idk', 'Yes', 'Yes', 'Bank Transfer', '1740494700_aline-photo.png', 'details of shoot', '2025-02-25 09:45:00', '2025-02-25 09:45:00'),
(13, 'Shoot', '\"celebrity\"', '2025-11-20', 'Half Day', 5, '20000', 'paid after 10 days', 'UAE', 'Sharjah', 'idk', 'Yes', 'Yes', 'Bank Transfer', '1740494744_aline-photo.png', 'details of shoot', '2025-02-25 09:45:44', '2025-02-25 09:45:44'),
(14, 'Shoot', '\"celebrity\"', '2025-11-20', 'Half Day', 5, '20000', 'paid after 10 days', 'UAE', 'Sharjah', 'idk', 'Yes', 'Yes', 'Bank Transfer', '1740494753_aline-photo.png', 'details of shoot', '2025-02-25 09:45:53', '2025-02-25 09:45:53'),
(15, 'Shoot', '\"celebrity\"', '2025-02-20', 'Half Day', 5, '20000', 'paid after 10 days', 'UAE', 'Abu Dhabi', 'idk', 'Yes', 'Yes', 'Cash', '1740494990_aline-photo.png', 'detailssss', '2025-02-25 09:49:50', '2025-02-25 09:49:50'),
(16, 'Shoot', '\"celebrity\"', '2025-02-20', 'Half Day', 5, '20000', 'paid after 10 days', 'UAE', 'Abu Dhabi', 'idk', 'Yes', 'Yes', 'Cash', '1740495020_aline-photo.png', 'detailssss', '2025-02-25 09:50:20', '2025-02-25 09:50:20'),
(17, 'Shoot', '\"celebrity\"', '2025-02-28', 'Half Day', 9, '20000', 'paid after 10 days', 'KSA', 'Yanbu', 'idk', 'Yes', 'No', 'Cash', '1740495106_aline-photo.png', 'detailsssssss', '2025-02-25 09:51:46', '2025-02-25 09:51:46'),
(18, 'Shoot', '\"celebrity\"', '2025-03-01', 'Half Day', 5, '20000', 'paid after 10 days', 'UAE', 'Abu Dhabi', 'idk', 'Yes', 'Yes', 'Cash', '1740495204_aline-photo.png', 'detailssssssss', '2025-02-25 09:53:24', '2025-02-25 09:53:24'),
(19, 'Shoot', '\"celebrity\"', '2025-03-08', 'Half Day', 5, '20000', 'paid after 10 days', 'UAE', 'Kalbā', 'idk', 'Yes', 'Yes', 'Bank Transfer', '1740495315_aline-photo.png', 'detailssssssss', '2025-02-25 09:55:15', '2025-02-25 09:55:15'),
(20, 'Shoot', '\"celebrity\"', '2025-02-27', 'Half Day', 5, '20000', 'paid after 10 days', 'UAE', '‘Ajmān', 'idk', 'Yes', 'Yes', 'Bank Transfer', '1740495381_aline-photo.png', 'detailsssss', '2025-02-25 09:56:21', '2025-02-25 09:56:21'),
(21, 'Shoot', '\"celebrity\"', '2025-03-08', 'Full Day', 5, '20000', 'paid after 10 days', 'UAE', 'Al Jazīrah al Ḩamrā’', 'idk', 'Yes', 'Yes', 'Cash', '1740495677_aline-photo.png', 'detailsssss', '2025-02-25 10:01:17', '2025-02-25 10:01:17');

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
  `profile_image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profile_details`
--

INSERT INTO `profile_details` (`id`, `user_id`, `first_name`, `last_name`, `whatsapp_number`, `email`, `profile_image`, `created_at`, `updated_at`) VALUES
(1, 2, 'Marvin', 'Tran', '+1 (382) 163-7269', 'vojuja@mailinator.com', '1724910685_banner_img_2.png', '2024-08-29 12:51:25', '2024-09-09 07:53:25'),
(2, 15, 'Test', 'Example', '123456789', 'test12@example.us', '1738782227_laptop.jpeg', '2025-02-05 14:03:23', '2025-02-05 14:03:47');

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
(5, 'model', '1725397221_discount3.png', 'Cathleen Branch', 'Alea Barnes', 'test@test123.com', '$2y$10$8nOESXNKjyWTvRQ2DSHthumkIKEtEDoYjpVtf.CfxHBjgoxvjkQJC', '0', NULL, '2024-09-04 04:00:21', '2024-09-04 04:00:21'),
(7, 'model', '1734961657_Flowchart (3).png', 'Test', 'Example', 'test@example1.us', '$2y$10$MObdkFo71/Y/ROT5Erfy5u3t2QELEA3nE7482suf8YQ9yC9IKPG..', '0', NULL, '2024-12-23 08:47:37', '2024-12-23 08:47:37'),
(8, 'model', '1734970636_CCP INFORMATION SECURITY.docx', 'Test', 'Example', 'test@example2.us', '$2y$10$6rzgtxXpIryGnGy2wwKkWuznGDXQIHXj4UWTZEzbwEOytL8use/Yq', '0', NULL, '2024-12-23 11:17:16', '2024-12-23 11:17:16'),
(9, 'model', '1734970840_Library Management System (1).png', 'Test', 'Example', 'hazel@example.us', '$2y$10$iiVVTEoZ1XuF5.gXBqlHI.joyLXs23Ed8HSJOMabw57.wR/7IzuvK', '0', NULL, '2024-12-23 11:20:40', '2024-12-23 11:20:40'),
(10, 'model', '1734972316_CCP INFORMATION SECURITY.docx', 'Test', 'Example', 'talent@example.us', '$2y$10$WQPtpK0ckfueENNUHp6zVOFC3fLTngEZgp2.fk3Se6lvj4GmFFsGe', '0', NULL, '2024-12-23 11:45:16', '2024-12-23 11:45:16'),
(11, 'model', '1735418516_Blank diagram (2).png', 'Shawn', 'Example', 'shawn@example.us', '$2y$10$NOVjx3.HQ4R0qEy.83zNg.QiY/FYf0H269TOAIOL8laferZgAng0W', '0', NULL, '2024-12-28 15:41:56', '2024-12-28 15:41:56'),
(14, 'model', '1738774446_rose.jpeg', 'Test', 'Ghaffar', 'test11@example.us', '$2y$10$1UQ8iiPfcWdI0OjXpg4OP.qQ4bA1r44voZLaLn0.uGCd0cOacT/gC', '0', NULL, '2025-02-05 11:54:06', '2025-02-05 11:54:06'),
(15, 'business', '1738777058_laptop.jpeg', 'Test', 'Business', 'test12@example.us', '$2y$10$qycsmWvULSDvtuZBYfzizeQ691CuEixlyR5optazQQzeK2RXB7MJy', '0', NULL, '2025-02-05 12:37:38', '2025-02-05 12:37:38');

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
-- Indexes for table `client_inquiry`
--
ALTER TABLE `client_inquiry`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `model_jobs`
--
ALTER TABLE `model_jobs`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `client_inquiry`
--
ALTER TABLE `client_inquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job_applieds`
--
ALTER TABLE `job_applieds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `job_details`
--
ALTER TABLE `job_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `model_jobs`
--
ALTER TABLE `model_jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
