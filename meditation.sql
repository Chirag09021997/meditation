-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 27, 2024 at 10:15 AM
-- Server version: 8.3.0
-- PHP Version: 8.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `meditation`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
CREATE TABLE IF NOT EXISTS `blogs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `thumb_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_view` int NOT NULL DEFAULT '0',
  `status` enum('Active','Inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active',
  `created_by` bigint UNSIGNED NOT NULL DEFAULT '1',
  `updated_by` bigint UNSIGNED NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `blogs_created_by_foreign` (`created_by`),
  KEY `blogs_updated_by_foreign` (`updated_by`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `name`, `short_description`, `description`, `thumb_image`, `total_view`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'What is meditation?', 'Ancient Practice', '<p>Meditation is an ancient practice that dates back thousands of years. Despite its age, this practice is common worldwide because it has benefits for brain health and overall well-being.With the help of modern technology, researchers continue to expand their understanding of how meditation helps people and why it works.Depending on the type of meditation you choose, you can meditate to relax, reduce anxiety and&nbsp;<a href=\"https://my.clevelandclinic.org/health/articles/11874-stress\" target=\"_blank\">stress</a>, and more. Some people even use meditation to help them improve their health, such as using it to help adapt to the challenges of&nbsp;<a href=\"https://my.clevelandclinic.org/health/articles/8699-quitting-smoking\" target=\"_blank\">quitting tobacco products</a>.</p>\r\n\r\n<p>The practice of meditation is thousands of years old, and different forms come from around the world. But modern science has only started studying this practice in detail during the last few decades. Some of the biggest leaps in science&rsquo;s understanding of meditation have only been possible thanks to modern technology.</p>\r\n\r\n<p>On the outside, someone who&rsquo;s meditating might not seem to be doing anything other than breathing or repeating a sound or phrase over and over. Inside their brain, however, it&rsquo;s an entirely different story. Modern diagnostic and imaging techniques, like electroencephalography (EEG) and&nbsp;<a href=\"https://my.clevelandclinic.org/health/diagnostics/25034-functional-mri-fmri\" target=\"_blank\">functional magnetic resonance imaging (fMRI)</a>&nbsp;scans, show that meditation can positively affect your brain and mental health.</p>', 'storage/uploads/blog/1729504295_Untitled.png', 12590, 'Active', 1, 1, '2024-10-21 04:21:35', '2024-10-21 04:24:58', NULL),
(2, 'How do you meditate?', 'Way Of Living', '<p>There&rsquo;s no one correct way to meditate. That&rsquo;s because meditation can take many different forms. Experts have analyzed meditation practices and found that some common processes happen across different meditation forms. These are:&nbsp;</p>\r\n\r\n<ul>\r\n	<li><strong>Body-centered meditation</strong>. This is sometimes called self-scanning. Doing this involves focusing on the physical sensations you can feel throughout your body.</li>\r\n	<li><strong>Contemplation</strong>. This usually involves concentrating on a question or some kind of contradiction without letting your mind wander.</li>\r\n	<li><strong>Emotion-centered meditation</strong>. This kind of meditation has you focus on a specific emotion. For example, focusing on how to be kind to others or on what makes you happy in your life.</li>\r\n	<li><strong>Mantra meditation</strong>. This kind of meditation involves repeating (either aloud or in your head) and focusing on a specific phrase or sound.</li>\r\n	<li><strong>Meditation with movement</strong>. This type of meditation can involve focusing on breathing, holding your breath or performing specific body movements. It can also involve walking while focusing on what you observe around you.</li>\r\n	<li><strong>Mindfulness meditation</strong>. This form of meditation is about staying aware of what&rsquo;s happening at the moment rather than letting your mind wander and worrying about the past or future. It can also involve a similar approach as body-centered meditation, using what you feel throughout your body as a foundation for your awareness of the world around you.</li>\r\n	<li><strong>Visual-based meditation</strong>. This kind of meditation involves focusing on something you can see (either with your eyes or by concentrating on a mental image).</li>\r\n</ul>', 'storage/uploads/blog/1729504365_Untitled.png', 12580, 'Active', 1, 1, '2024-10-21 04:22:45', '2024-10-21 04:24:29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `coupon_systems`
--

DROP TABLE IF EXISTS `coupon_systems`;
CREATE TABLE IF NOT EXISTS `coupon_systems` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `type` enum('Percentage','Amount') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coupon_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` decimal(8,2) NOT NULL DEFAULT '0.00',
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `status` enum('Active','Inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupon_systems`
--

INSERT INTO `coupon_systems` (`id`, `type`, `coupon_code`, `value`, `start_date`, `end_date`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Amount', 'MeSuper100', 100.00, '2024-10-22', '2024-10-25', 'Active', '2024-10-21 04:27:00', '2024-10-21 04:27:00', NULL),
(2, 'Percentage', 'Me500VR', 5.00, '2024-10-22', '2025-10-25', 'Active', '2024-10-21 04:27:51', '2024-10-21 04:30:53', NULL),
(3, 'Percentage', '1025', 10.00, '2025-10-23', '2025-10-28', 'Active', '2024-10-21 04:28:07', '2024-10-21 04:28:57', '2024-10-21 04:28:57');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `business_category` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `customers_email_unique` (`email`),
  UNIQUE KEY `customers_mobile_no_unique` (`mobile_no`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `profile`, `country_name`, `mobile_no`, `email`, `business_category`, `dob`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Robort Junier 01', 'storage/uploads/customer/1729616727_mens.png', 'India', '124567890', 'Ab1@gmail.com', 'Diamond-1', '2023-08-02', '2024-10-20 04:09:48', '2024-10-22 11:35:27', NULL),
(2, 'Van Roony', NULL, 'USA', '1234567890', 'V1@gmail.com', 'Cunstruction', '2023-05-12', '2024-10-20 04:18:28', '2024-10-20 04:20:56', NULL),
(3, 'Poal Colibwood', NULL, 'Canada', '123456789', 'a@gamil.com', 'Steel', '0020-11-11', '2024-10-20 04:22:08', '2024-10-21 04:53:40', NULL),
(4, 'Amit Patel', NULL, 'Japan', '123', 'a@b', 'IT', '2010-01-02', '2024-10-21 03:23:46', '2024-10-21 04:54:31', NULL),
(5, 'Neymar Junior', NULL, 'England', '124', 'q@gmai.com', 'Sport', '2001-02-01', '2024-10-21 03:24:18', '2024-10-21 04:51:04', NULL),
(6, 'Naveen Shah', NULL, 'France', '125', 'n@gamil.com', 'Gold', '2003-08-02', '2024-10-21 03:26:16', '2024-10-21 03:26:16', NULL),
(7, 'Vivek Patil', NULL, 'Austiria', '12224', 'V@gmail.com', 'Textiles', '2002-08-02', '2024-10-21 03:27:04', '2024-10-21 03:27:04', NULL),
(8, 'Harprit Singh', NULL, 'Nepal', '1235', 'a1@gamil.com', 'Farming', '2004-06-08', '2024-10-21 03:27:47', '2024-10-21 04:54:50', NULL),
(9, 'Raju Patel', NULL, 'Malesiya', '12354', 'A12@gmail.com', 'Pharmacutical', '2009-02-12', '2024-10-21 03:28:45', '2024-10-21 03:28:45', NULL),
(10, 'Kartik Aryan', NULL, 'China', '12644', 'K@gamil.com', 'Infastructure', '2006-09-12', '2024-10-21 03:29:55', '2024-10-21 03:29:55', NULL),
(11, 'Rahul Sharma', NULL, 'Germany', '125562', 'R@gmail.com', 'Electric', '2007-02-12', '2024-10-21 03:31:01', '2024-10-21 03:31:01', NULL),
(12, 'chirag chovatiya', 'storage/uploads/customer/1729794474_logo.png', 'india', NULL, 'chirag@gmail.com', NULL, '1997-02-09', '2024-10-24 12:56:59', '2024-10-24 12:57:54', NULL),
(13, 'aryan 123', NULL, 'Bahamas (BS) [+1]', '3554775565', 'aryansavaliya08@gmail.com', 'h', '2024-10-01', '2024-10-24 12:58:16', '2024-10-25 10:23:11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumb_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `starting_date` datetime DEFAULT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_paid` enum('On','Off') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Off',
  `fees` decimal(10,2) NOT NULL DEFAULT '0.00',
  `total_joining` int NOT NULL DEFAULT '0',
  `status` enum('Active','Inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name`, `thumb_image`, `short_description`, `description`, `starting_date`, `location`, `is_paid`, `fees`, `total_joining`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Diwali', 'storage/uploads/event/1729504979_Untitled.png', 'Concept of Nation', '<p>The lighting of lamps and&nbsp;<em>diyas&nbsp;</em>is to spread positivity and alacrity that invites goddess Lakshmi into our homes as it is the heart of the festival. Celebrating and encouraging the idea that every time there is darkness in life, the tunnel will end, and lights will guide you home.</p>\r\n\r\n<p>As for Ranita from&nbsp;<a href=\"https://www.snackmagic.com/in/en/menu/partners/the-turtle-box\">Turtle Box</a>, one of&nbsp;<a href=\"http://www.snackmagic.com/\">SnackMagic</a>&rsquo;s partners in&nbsp;<a href=\"https://www.snackmagic.com/in/en/menu/featured\">India</a>:</p>\r\n\r\n<p>It is a time to celebrate good over evil. Thus,&nbsp;<a href=\"https://www.snackmagic.com/in/en/menu/featured-boxes\">Diwali&nbsp;</a>is celebrated by first cleaning and decorating the house. There is a Pooja ceremony in the evening where we worship Lord Ganesh and Lakshmi. An important part of Diwali is exchanging gifts with friends and family and planning for the same starts much before. Fireworks are a prominent part of the festival.</p>\r\n\r\n<p>Sweets and dry fruits are happily eaten during Diwali. My family and I love ideating and decorating the house together with different types of decorations, flowers, lights, and colors. The planning and anticipation of finally doing it is quite exciting for the whole family. Diwali is celebrated across the country, although in slightly different forms and history, it is a time for celebrations across the diverse country.</p>\r\n\r\n<p>If you personally ask me what Diwali means, then this is a time to be together and enjoy the festive feeling in the air with your family and loved ones.</p>', '2024-10-21 00:00:00', 'Surat', 'On', 1800.00, 0, 'Active', '2024-10-21 04:33:00', '2024-10-21 04:33:00', NULL),
(2, 'Battle of the bands', NULL, 'Multi Bands', '<p>Give local performers a chance to show their talent and earn bragging rights with a battle of the bands. Fans will enjoy rocking out to their favorite bands, and they&rsquo;ll love watching a friendly competition. Encourage crowd participation by having fans vote for which band deserves the title of &ldquo;Best Band in Town.&rdquo; Incorporate audience response tools such as text and QR code polling</p>\r\n\r\n<p>Music concert ideas for fundraising purposes can include a low-key show at a local pub or a grand production with corporate sponsors, raffles, and merchandise. A benefit concert is an excellent way to bring attention to a worthy cause and attract music fans.</p>\r\n\r\n<p>Since this event is for charity, consider a&nbsp;<a href=\"https://www.eventbrite.com/blog/use-donation-ticket-types-fundraising-events/\">donation ticket</a>&nbsp;model. With Eventbrite&rsquo;s intuitive ticketing system, you can easily collect donations and include add-ons that amplify fundraising. Indulge Christian music lovers with gospel singing event ideas. Invite local choirs to come out and flex their skills in a competition, or bring together artists across all subsets of gospel music and organize a festival. A talent showcase for local worship artists is another way to appeal to gospel music fans while shining a light on up-and-coming musicians.</p>\r\n\r\n<p>ndulge Christian music lovers with gospel singing event ideas. Invite local choirs to come out and flex their skills in a competition, or bring together artists across all subsets of gospel music and organize a festival. A talent showcase for local worship artists is another way to appeal to gospel music fans while shining a light on up-and-coming musicians.ndulge Christian music lovers with gospel singing event ideas. Invite local choirs to come out and flex their skills in a competition, or bring together artists across all subsets of gospel music and organize a festival. A talent showcase for local worship artists is another way to appeal to gospel music fans while shining a light on up-and-coming musicians.</p>', '2024-10-21 00:00:00', 'Mumbai', 'On', 8910.00, 0, 'Active', '2024-10-21 04:35:01', '2024-10-21 04:35:01', NULL),
(3, 'Holiday music-related events', NULL, 'Season Of Music', '<p>Endless Events is a nationwide event production company. They have experience helping their clients put on some pretty memorable events like Comic-Con, The Color Run, and the X-Games.</p>\r\n\r\n<p>Putting on these events has been no easy task. But the team at Endless is eager to share their events best practices via their event planning blog.</p>\r\n\r\n<p>Bonus: the Endless blog showcases a weekly, interactive video podcast called&nbsp;<a href=\"https://helloendless.com/category/eventicons/\" target=\"_blank\">#EventIcons</a>. Here, they bring in event industry veterans to do educational interviews for anyone interested in learning more about what makes events successful.</p>\r\n\r\n<p>Liz King Caruso is a tech-savvy planner who knows that integrating technology into your events can drive success. Since Liz was always following technology trends herself, she decided to start an event planning blog to help others discover the latest in&nbsp;<a href=\"https://www.socialtables.com/free-event-planning-software/\" target=\"_blank\">event planning technology</a>.Liz King also hosts an annual live event in New York called Techsytalk LIVE, where planners can engage with one another in a tech-forward environment.</p>\r\n\r\n<p>Though it&rsquo;s not technically a &ldquo;blog,&rdquo; BizBash is still a valuable online resource for all event planners. This site covers event industry news, ideas, and trends. You&rsquo;ll find coverage of a wide variety of international events.</p>\r\n\r\n<p>While BizBash&rsquo;s content will help you learn about the industry, some of their tools can help you in your day-to-day work. Their&nbsp;<a href=\"https://www.cvent.com/venues/\" target=\"_blank\">venue-finding tool</a>&nbsp;and supplier directory can&nbsp;<a href=\"https://www.socialtables.com/blog/event-planning/find-a-venue/\" target=\"_blank\">help you to find the right venues and suppliers</a>&nbsp;for any kind of event.</p>', '2024-10-21 00:00:00', 'Surat', 'On', 221.00, 0, 'Active', '2024-10-21 04:37:21', '2024-10-21 04:37:21', NULL),
(4, 'qwqeq', NULL, 'fafadfadfa', '<p>asfafadrewrafafa</p>', '2024-10-21 00:00:00', 'Mumbai', 'On', 120.00, 0, 'Active', '2024-10-21 04:39:29', '2024-10-21 04:40:34', '2024-10-21 04:40:34');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `meditation_audio`
--

DROP TABLE IF EXISTS `meditation_audio`;
CREATE TABLE IF NOT EXISTS `meditation_audio` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `audio_thumb` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `audio_upload` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `premium_type` tinyint(1) NOT NULL DEFAULT '0',
  `total_view` int NOT NULL DEFAULT '0',
  `status` enum('Active','Inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `meditation_audio`
--

INSERT INTO `meditation_audio` (`id`, `name`, `short_description`, `description`, `audio_thumb`, `audio_upload`, `premium_type`, `total_view`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Indian Traditional Music', 'Classical', 'Good', 'storage/uploads/meditation-audio/1729875495_ry3.png', 'storage/uploads/meditation-audio/1730013434_Brain_Waves_-_Focus_and_listen_to_this_for_30_sec_great_sound.mp3', 1, 104, 'Active', '2024-10-21 03:50:23', '2024-10-27 03:24:56', NULL),
(2, 'Afternoon Relax Music', 'Piano', 'Tune', 'storage/uploads/meditation-audio/1729875507_mp4.png', 'storage/uploads/meditation-audio/1730013443_Om_mantra_for_30_sec.mp3', 1, 132, 'Active', '2024-10-21 03:51:50', '2024-10-27 01:47:23', NULL),
(3, 'Study Music', 'Student', 'Relax', 'storage/uploads/meditation-audio/1729875533_mp3.png', 'storage/uploads/meditation-audio/1729502578_relax.mp3', 1, 175, 'Active', '2024-10-21 03:52:58', '2024-10-27 01:20:51', NULL),
(4, 'sdadsaqqq', 'jkjhk', 'fjhjfhj', NULL, NULL, 1, 2002, 'Active', '2024-10-21 03:53:14', '2024-10-21 03:53:57', '2024-10-21 03:53:57');

-- --------------------------------------------------------

--
-- Table structure for table `meditation_audio_premium_plan`
--

DROP TABLE IF EXISTS `meditation_audio_premium_plan`;
CREATE TABLE IF NOT EXISTS `meditation_audio_premium_plan` (
  `premium_plan_id` bigint UNSIGNED NOT NULL,
  `meditation_audio_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`premium_plan_id`,`meditation_audio_id`),
  KEY `meditation_audio_premium_plan_meditation_audio_id_foreign` (`meditation_audio_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `meditation_audio_premium_plan`
--

INSERT INTO `meditation_audio_premium_plan` (`premium_plan_id`, `meditation_audio_id`) VALUES
(1, 1),
(1, 3),
(1, 4),
(2, 2),
(2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `meditation_types`
--

DROP TABLE IF EXISTS `meditation_types`;
CREATE TABLE IF NOT EXISTS `meditation_types` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `thumb_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('Active','Inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `meditation_types`
--

INSERT INTO `meditation_types` (`id`, `name`, `short_description`, `description`, `thumb_image`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Sound Healing', 'Soothing Sound', 'Tibetan Sound', 'storage/uploads/meditation-type/1729501777_Untitled.png', 'Active', '2024-10-21 03:39:37', '2024-10-21 03:39:37', NULL),
(2, 'Reiki', 'Energy Healing', 'Chakra Healing', NULL, 'Active', '2024-10-21 03:40:39', '2024-10-21 03:40:39', NULL),
(3, 'Art Of Living', 'Sudarshan Kriya', 'Body Cleansing', NULL, 'Active', '2024-10-21 03:42:03', '2024-10-21 03:42:03', NULL),
(4, 'Shambhavi Mudra', 'Pranayam', 'Inhale & Exhale', NULL, 'Active', '2024-10-21 03:43:26', '2024-10-21 03:43:26', NULL),
(5, 'Shunya Dhyan', 'Emotional Therapy', 'Open Chakra', NULL, 'Active', '2024-10-21 03:44:09', '2024-10-21 03:44:09', NULL),
(6, 'Dynamic Meditation', 'Body Relaxing', 'Aura Cleansing', NULL, 'Active', '2024-10-21 03:45:10', '2024-10-21 03:45:10', NULL),
(7, 'dfa', NULL, NULL, NULL, 'Active', '2024-10-21 03:45:31', '2024-10-21 03:45:36', '2024-10-21 03:45:36');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_10_10_165900_create_customers_table', 1),
(6, '2024_10_10_170009_create_premium_plans_table', 1),
(7, '2024_10_10_170019_create_meditation_types_table', 1),
(8, '2024_10_10_170043_create_meditation_audio_table', 1),
(9, '2024_10_10_170053_create_music_table', 1),
(10, '2024_10_10_170103_create_work_shops_table', 1),
(11, '2024_10_10_170114_create_blogs_table', 1),
(12, '2024_10_10_170139_create_coupon_systems_table', 1),
(13, '2024_10_10_170147_create_stores_table', 1),
(14, '2024_10_15_164443_create_meditation_audio_premium_plan_table', 1),
(15, '2024_10_17_183433_create_product_photos_table', 1),
(16, '2024_10_17_183851_create_events_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `music`
--

DROP TABLE IF EXISTS `music`;
CREATE TABLE IF NOT EXISTS `music` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `audio_thumb` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `audio_upload` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `premium_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_view` int NOT NULL DEFAULT '0',
  `status` enum('Active','Inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `music`
--

INSERT INTO `music` (`id`, `name`, `short_description`, `description`, `audio_thumb`, `audio_upload`, `premium_type`, `total_view`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Chinese', 'Morning', 'A+', 'storage/uploads/music/1729875651_ry4.png', 'storage/uploads/music/1729502682_relax.mp3', '1', 1236, 'Active', '2024-10-21 03:54:42', '2024-10-25 13:14:34', NULL),
(2, 'Tibetian', 'Mount', 'A++', 'storage/uploads/music/1729875663_ry1.png', 'storage/uploads/music/1729502749_relax.mp3', '0', 1820, 'Active', '2024-10-21 03:55:49', '2024-10-27 03:06:08', NULL),
(3, 'Mountain', 'Windy', 'Tample', 'storage/uploads/music/1729875670_mp7.png', 'storage/uploads/music/1729502811_relax.mp3', '1', 2572, 'Active', '2024-10-21 03:56:51', '2024-10-25 13:18:22', NULL),
(4, 'Buddha', 'Monatry', 'Berry Crst', 'storage/uploads/music/1729875678_mp5.png', 'storage/uploads/music/1730018383_file_example_MP3_700KB.mp3', '1', 8066, 'Active', '2024-10-21 03:57:29', '2024-10-27 03:09:43', NULL),
(5, 'Temple Prayer', 'Indian Classical', 'Morning', 'storage/uploads/music/1729875708_mp6.png', 'storage/uploads/music/1730018372_sample-6s.mp3', '1', 5895, 'Active', '2024-10-21 03:58:45', '2024-10-27 03:09:32', NULL),
(6, 'dcXCfsfadf', NULL, NULL, NULL, NULL, '1', 4646, 'Active', '2024-10-21 03:58:54', '2024-10-21 03:59:29', '2024-10-21 03:59:29');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `premium_plans`
--

DROP TABLE IF EXISTS `premium_plans`;
CREATE TABLE IF NOT EXISTS `premium_plans` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `total_amount` decimal(10,2) NOT NULL DEFAULT '0.00',
  `discount` decimal(8,2) NOT NULL DEFAULT '0.00',
  `total_user` int NOT NULL DEFAULT '0',
  `total_payable_amount` decimal(10,2) NOT NULL DEFAULT '0.00',
  `thumb_upload` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('Active','Inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `premium_plans`
--

INSERT INTO `premium_plans` (`id`, `name`, `short_description`, `description`, `total_amount`, `discount`, `total_user`, `total_payable_amount`, `thumb_upload`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Beginner', 'Soothing Sound', 'All Is Well', 500.00, 100.00, 1, 400.00, 'storage/uploads/premium-plan/1729501408_Untitled.png', 'Active', '2024-10-21 03:33:28', '2024-10-21 03:33:28', NULL),
(2, 'Medium', 'Healing Sound', 'Melody Effact', 1000.00, 300.00, 2, 800.00, NULL, 'Active', '2024-10-21 03:34:58', '2024-10-21 03:34:58', NULL),
(3, 'aaaa', NULL, NULL, 500.00, 100.00, 3, 450.00, NULL, 'Active', '2024-10-21 03:37:33', '2024-10-21 03:37:38', '2024-10-21 03:37:38');

-- --------------------------------------------------------

--
-- Table structure for table `product_photos`
--

DROP TABLE IF EXISTS `product_photos`;
CREATE TABLE IF NOT EXISTS `product_photos` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `store_id` bigint UNSIGNED NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stores`
--

DROP TABLE IF EXISTS `stores`;
CREATE TABLE IF NOT EXISTS `stores` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `product_thumb` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_preview` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `discount` decimal(5,2) NOT NULL DEFAULT '0.00',
  `total_stock` int NOT NULL DEFAULT '0',
  `total_sale` int NOT NULL DEFAULT '0',
  `tags` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('Active','Inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stores`
--

INSERT INTO `stores` (`id`, `product_name`, `short_description`, `description`, `product_thumb`, `video_preview`, `price`, `discount`, `total_stock`, `total_sale`, `tags`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Fluet', 'Wooden', '<h2>Choose the perfect design</h2>\r\n\r\n<p>Create a beautiful blog that fits your style. Choose from a selection of easy-to-use templates &ndash; all with flexible layouts and hundreds of background images &ndash; or design something new.</p>', 'storage/uploads/store/1729505642_Untitled.png', '12150', 1500.00, 10.00, 290, 20, 'Bamboo', 'Active', '2024-10-21 04:44:02', '2024-10-21 04:44:02', NULL),
(2, 'Guitar', 'afdfadsfad', NULL, NULL, '121555', 900.00, 1.00, 2560, 250, 'Energetic', 'Active', '2024-10-21 04:45:09', '2024-10-21 04:45:09', NULL),
(3, 'Bamboo Flute', 'Craftingosss', NULL, NULL, '2151515', 250.00, 10.00, 260, 270, 'Shilong', 'Active', '2024-10-21 04:46:16', '2024-10-21 04:46:16', NULL),
(4, '232132', 'qerq', '<p>ewrqrq</p>', NULL, '1', 2.00, 3.00, 4, 5, 'rewer', 'Active', '2024-10-21 04:47:21', '2024-10-21 04:48:02', '2024-10-21 04:48:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `profile`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$12$y.WcYO7.CFd58zoa/D4uluzajQJWKq1FjjJ5jn5gurxg0ukqjdumy', NULL, 'sDnZkVp0M15IVT7M89woAQYpvSkCl1sQA1EIxmjRT9lkeQa9FYNqd2DMwCLg', '2024-10-17 13:23:15', '2024-10-17 13:23:15'),
(2, 'chirag', 'chirag@gmail.com', NULL, '$2y$12$ur57Gg1ughmRb4xzTz6sq.AfTCTgXDxuIHBUDc/P9hEPjWQ/2Jaya', NULL, NULL, '2024-10-22 11:32:51', '2024-10-22 11:32:51');

-- --------------------------------------------------------

--
-- Table structure for table `work_shops`
--

DROP TABLE IF EXISTS `work_shops`;
CREATE TABLE IF NOT EXISTS `work_shops` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `thumb_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `premium_type` tinyint(1) NOT NULL DEFAULT '0',
  `second` int NOT NULL DEFAULT '0',
  `total_view` int NOT NULL DEFAULT '0',
  `status` enum('Active','Inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `work_shops`
--

INSERT INTO `work_shops` (`id`, `name`, `short_description`, `description`, `thumb_image`, `video_url`, `premium_type`, `second`, `total_view`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Sadhguru on Dreamless Sleep & Lucid Dreams', 'Considered among India’s 50 most influential people, Sadhguru is a yogi, mystic, bestselling author, and poet.', 'Is dreamless sleep possible? How much importance should one give to one’s dreams? Sadhguru demystifies dreams, lucid dreaming, dreamless sleep, and offers a simple process to sleep well which can in turn bring ease and wellbeing to one’s life.\r\n\r\n#Dream #Sleep #LucidDream #DreamLessSleep', 'storage/uploads/workshop/1729875962_hq720.png', 'https://www.youtube.com/watch?v=seKlN2a2DHE&ab_channel=Sadhguru', 1, 25, 35690, 'Active', '2024-10-21 04:12:28', '2024-10-25 11:39:14', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
