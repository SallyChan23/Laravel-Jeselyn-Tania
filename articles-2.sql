-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 04, 2024 at 05:29 AM
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
-- Database: `QuizJeselynTania`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `writer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `image`, `category_id`, `writer_id`, `created_at`, `updated_at`) VALUES
(1, 'Machine Learning', 'Machine learning (ML) is a field of study in artificial intelligence concerned with the development and study of statistical algorithms that can learn from data and generalize to unseen data, and thus perform tasks without explicit instructions. Advances in the field of deep learning have allowed neural networks to surpass many previous approaches in performance.\r\n\r\nML finds application in many fields, including natural language processing, computer vision, speech recognition, email filtering, agriculture, and medicine. The application of ML to business problems is known as predictive analytics.\r\n\r\nStatistics and mathematical optimization (mathematical programming) methods comprise the foundations of machine learning. Data mining is a related field of study, focusing on exploratory data analysis (EDA) via unsupervised learning.\r\n\r\nFrom a theoretical viewpoint, probably approximately correct (PAC) learning provides a framework for describing machine learning.\r\n\r\n', 'machine.jpg', 1, 11, '2024-11-03 21:13:21', '2024-11-03 21:13:21'),
(2, 'Deep Learning', 'Artificial intelligence (AI) attempts to train computers to think and learn as humans do. Deep learning technology drives many AI applications used in everyday products, such as the following:\r\n\r\nDigital assistants\r\nVoice-activated television remotes\r\nFraud detection\r\nAutomatic facial recognition\r\nIt is also a critical component of emerging technologies such as self-driving cars, virtual reality, and more. \r\n\r\nDeep learning models are computer files that data scientists have trained to perform tasks using an algorithm or a predefined set of steps. Businesses use deep learning models to analyze data and make predictions in various applications.', 'deep.jpg', 1, 11, '2024-11-03 21:13:21', '2024-11-03 21:13:21'),
(3, 'Natural Language Processing ', 'Natural language processing (NLP) is a branch of artificial intelligence (AI) that enables computers to comprehend, generate, and manipulate human language. Natural language processing has the ability to interrogate the data with natural language text or voice. This is also called “language in.” Most consumers have probably interacted with NLP without realizing it. For instance, NLP is the core technology behind virtual assistants, such as the Oracle Digital Assistant (ODA), Siri, Cortana, or Alexa. When we ask questions of these virtual assistants, NLP is what enables them to not only understand the user’s request, but to also respond in natural language. NLP applies both to written text and speech, and can be applied to all human languages. Other examples of tools powered by NLP include web search, email spam filtering, automatic translation of text or speech, document summarization, sentiment analysis, and grammar/spell checking. For example, some email programs can automatically suggest an appropriate reply to a message based on its content—these programs use NLP to read, analyze, and respond to your message.\r\n\r\nThere are several other terms that are roughly synonymous with NLP. Natural language understanding (NLU) and natural language generation (NLG) refer to using computers to understand and produce human language, respectively. NLG has the ability to provide a verbal description of what has happened. This is also called “language out” by summarizing by meaningful information into text using a concept known as \"grammar of graphics.\"\r\n\r\nIn practice, NLU is used to mean NLP. The understanding by computers of the structure and meaning of all human languages, allowing developers and users to interact with computers using natural sentences and communication. Computational linguistics (CL) is the scientific field that studies computational aspects of human language, while NLP is the engineering discipline concerned with building computational artifacts that understand, generate, or manipulate human language.', 'natural.jpeg', 1, 1, NULL, NULL),
(4, 'Software Security', 'Secure software development is incredibly important because there are always people out there who seek to exploit business data. As businesses become more reliant on software, these programs must remain safe and secure. With strong software security protocols in place, you can prevent attackers from stealing potentially sensitive information such as credit card numbers and trade secrets, and build trust among users.\r\n\r\nThe theft of critical data can be catastrophic for customers and businesses alike. Malicious actors can abuse sensitive information and even steal users’ identities. Additionally, companies can face legal penalties in the event of a data breach and suffer reputational harm.\r\n\r\nBusinesses can work to protect critical data by implementing software security techniques into their development life cycles. Applying security techniques enables organizations to proactively identify system vulnerabilities and better protect their software.', 'software.jpg', 2, 12, NULL, NULL),
(5, 'Network Administration', 'Network administration primarily consists of, but isn’t limited to, network monitoring, network management, and maintaining network quality and security.\r\n\r\nNetwork monitoring is essential to monitor unusual traffic patterns, the health of the network infrastructure, and devices connected to the network. It helps detect abnormal activity, network issues, or excessive bandwidth consumption early on and take preventative and remedial actions to uphold the network quality and security.\r\n\r\nNetwork management encompasses multiple administrative functions, including network planning, implementation, and configuration. It involves:\r\n\r\n\r\nreplanning the network based on changing organizational requirements\r\nimplementing the network for maximum efficiency\r\nconfiguring various networking and security protocols\r\napplying security patches and updating the firmware of the networking infrastructure, such as routers, hubs, switches, and firewalls\r\nassessing the network for weaknesses\r\nevaluating quality and capacity to increase or decrease network capacity and manage resource wastage', 'network.jpg', 2, 12, NULL, NULL),
(6, 'Popular Network Technology ', 'For years, Multiprotocol Label Switching (MPLS) and Virtual Private Networks (VPN) have been the standard choices for enterprise connectivity, providing reliable and secure communication between remote locations. However, these solutions face inherent limitations in today’s digital environment.\r\n\r\nMPLS requires substantial investments in hardware and dedicated connections, making it costly and time-consuming to scale. Its static nature poses challenges in adapting to dynamic traffic patterns and unpredictable bandwidth demands. On the other hand, VPNs rely on encrypted tunnels over public networks to provide secure remote access. While VPNs are cost-effective, they often experience performance degradation with latency-sensitive applications or when routing traffic over long distances. Managing and configuring VPNs across multiple sites can also be complex and cumbersome\r\n\r\nEnter Software-Defined Wide Area Networking (SD-WAN), a disruptive force reshaping the networking landscape. SD-WAN offers a flexible and software-driven approach to wide-area networking by connecting local area networks (LANs) across large distances using controlling software that is compatible with various networking hardware. By leveraging off-the-shelf hardware and separating the control plane from the data plane, SD-WAN becomes a more cost-effective, flexible, and scalable alternative to traditional WAN architectures. The soaring popularity of SD-WAN makes it one of the top networking technologies in 2024.\r\n\r\nThe adoption of SD-WAN has surged due to factors like the 2020 pandemic-induced work-from-home initiatives and the need for cost-effective network management and automation. Market trends indicate that the SD-WAN industry is projected to grow by over 30% between 2023 and 2030. The increasing popularity of cloud services has contributed to this growth, with SD-WAN benefiting from improved cloud storage and connectivity affordability. SD-WAN’s superior cloud connectivity compared to MPLS positions it favorably to capitalize on this trend.', 'popular.jpg', 2, 12, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `articles_category_id_foreign` (`category_id`),
  ADD KEY `articles_writer_id_foreign` (`writer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `articles_writer_id_foreign` FOREIGN KEY (`writer_id`) REFERENCES `writers` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
