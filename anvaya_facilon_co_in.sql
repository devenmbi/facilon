-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 03, 2024 at 06:36 PM
-- Server version: 10.6.19-MariaDB-cll-lve
-- PHP Version: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `anvaya_facilon_co_in`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'SuperAdmin', 'admin@gmail.com', 'super_admin', '$2y$10$nN5a.vKoEwKfzF6ZH7y9Pe8ddiO9le04nVj7Gq2Heog/ekbj4BoJC', '2024-05-17 07:30:53', '2024-05-17 07:30:53');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `sub_title_one` varchar(255) NOT NULL,
  `sub_title_two` varchar(255) NOT NULL,
  `img_src` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `title`, `sub_title_one`, `sub_title_two`, `img_src`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Are you looking to invest in India?', 'Need help with selecting brokers, custodians, banks, portfolio managers, etc., and onboarding with them.', 'Welcome to Facilon Marketplace to appoint Service Providers in India', 'pflCg9uBCUncOlrKcUvr.jpg', 1, '2024-08-28 10:07:41', '2024-08-28 10:07:41');

-- --------------------------------------------------------

--
-- Table structure for table `custody_basic_details`
--

CREATE TABLE `custody_basic_details` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description_one` text NOT NULL,
  `description_two` text NOT NULL,
  `bg_img_src` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `custody_basic_details`
--

INSERT INTO `custody_basic_details` (`id`, `title`, `description_one`, `description_two`, `bg_img_src`, `status`, `created_at`, `updated_at`) VALUES
(1, 'CUSTODY', 'Custody services provided by custodians in India involve the safekeeping and administration of securities on behalf of institutional investors such as asset managers, hedge funds, pension funds, and foreign institutional investors (FIIs). Here\'s an overview of the custody product offered by custodians in India', 'Overall, custody services offered by custodians in India play a crucial role in supporting the smooth functioning of capital markets and facilitating the efficient management of institutional investors\' portfolios. Choosing a reliable and reputable custodian is essential for investors seeking secure and dependable custody solutions.', 'DiGHZwUPVIvZh1bKabTV.webp', 1, '2024-07-24 07:58:23', '2024-07-24 07:58:23');

-- --------------------------------------------------------

--
-- Table structure for table `custody_services`
--

CREATE TABLE `custody_services` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `img_src` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `custody_services`
--

INSERT INTO `custody_services` (`id`, `title`, `description`, `img_src`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Safekeeping of Securities', 'Custodians in India are responsible for the safekeeping of securities owned by their clients. This includes stocks, bonds, mutual fund units, exchange-traded funds (ETFs), and other financial instruments. Custodians maintain segregated accounts for each client to ensure proper identification and tracking of securities.', 'ZKvd1a2PcVpCV7oeoKup.svg', 1, '2024-07-25 10:20:06', '2024-07-25 10:20:06'),
(2, 'Settlement Services', 'Custodians facilitate the settlement of securities transactions on behalf of their clients. This involves coordinating the delivery and receipt of securities and funds between buyers and sellers in accordance with the rules and timelines prescribed by stock exchanges and clearing corporations.', 'kZVMSbTVD0KaHdYXDmqo.svg', 1, '2024-07-25 10:24:28', '2024-07-25 10:24:28'),
(3, 'Corporate Actions Processing', 'Custodians handle corporate actions such as dividend payments, bonus issues, rights offerings, mergers, acquisitions, and other corporate events affecting the securities held in custody. They notify clients of upcoming corporate actions, collect relevant instructions, and ensure timely processing and settlement.', 'RGePyywKrYEidafvWokM.svg', 1, '2024-07-25 10:25:23', '2024-07-25 10:25:23'),
(4, 'Income Collection and Distribution', 'Custodians collect income distributions such as dividends, interest payments, and other entitlements on behalf of their clients. They credit these income payments to clients\' accounts and provide detailed income statements and reports for reconciliation purposes.', 'WjNpiBR16yRCsfnHjZFy.png', 1, '2024-07-25 10:26:06', '2024-07-25 10:26:06'),
(5, 'Tax Services', 'Custodians assist clients in fulfilling their tax obligations related to securities held in custody. This may include tax withholding, tax reclaim services for foreign investors, tax reporting, and tax documentation management in compliance with relevant tax laws and regulations.', '8I0RWCQyYxGisEaI8rxm.svg', 1, '2024-07-25 10:26:38', '2024-07-25 10:26:38'),
(6, 'Reporting and Reconciliation', 'Custodians provide clients with comprehensive reporting and reconciliation services to ensure accuracy and transparency in custody operations. This includes daily transaction statements, monthly custody reports, portfolio valuation reports, and customized reporting as per clients\' requirements.', 'ckS25bLrxf5nqqFyr3Bp.png', 1, '2024-07-25 10:27:24', '2024-07-25 10:27:24'),
(7, 'Risk Management', 'Custodians implement robust risk management practices to safeguard clients\' assets and mitigate operational, legal, and regulatory risks. This includes internal controls, compliance monitoring, fraud prevention measures, and adherence to industry best practices and regulatory guidelines.', 'ysLFu7OQQVFvtKA63Unm.png', 1, '2024-07-25 10:27:54', '2024-07-25 10:27:54'),
(8, 'Technology Solutions', 'Custodians offer advanced technology solutions and digital platforms to streamline custody operations, enhance efficiency, and improve client experience. This may include online access to custody accounts, automated processing tools, secure data transmission, and integration with clients\' systems.', 'XxJCtRYfV7hRASpLTAEz.png', 1, '2024-07-25 10:29:21', '2024-07-25 10:29:21'),
(9, 'Client Services', 'Custodians provide dedicated client service teams to address clients\' inquiries, resolve issues, and provide assistance on various custody-related matters. Client service representatives are available to support clients through phone, email, online chat, or in-person meetings.', 'ouqA78IIPA8Eh9dgTgBk.png', 1, '2024-07-25 10:29:58', '2024-07-25 10:29:58'),
(10, 'Regulatory Compliance', 'Custodians in India operate under the regulatory framework prescribed by the Securities and Exchange Board of India (SEBI) and other relevant authorities. They adhere to strict compliance requirements concerning capital adequacy, operational standards, client asset protection, and disclosure obligations.', 'iv5yuJHzojPm56MXwOnH.png', 1, '2024-07-25 10:30:50', '2024-07-25 10:30:50');

-- --------------------------------------------------------

--
-- Table structure for table `derivatives_trading_basic_details`
--

CREATE TABLE `derivatives_trading_basic_details` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description_one` text NOT NULL,
  `description_two` text NOT NULL,
  `bg_img_src` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `derivatives_trading_basic_details`
--

INSERT INTO `derivatives_trading_basic_details` (`id`, `title`, `description_one`, `description_two`, `bg_img_src`, `status`, `created_at`, `updated_at`) VALUES
(1, 'DERIVATIVES TRADING', '\"Trading in Derivatives\" offered by brokers in India refers to the service provided by brokerage firms that allows investors to trade derivative instruments on Indian stock exchanges. Derivatives are financial contracts whose value is derived from the value of an underlying asset, such as stocks, bonds, commodities, currencies, or market indices. Here\'s a detailed overview of what this service typically entails', 'Before engaging in derivative trading with a broker in India, investors should thoroughly understand the risks associated with derivatives and familiarize themselves with derivative trading strategies. It\'s essential to choose a reputable broker with a robust trading platform, competitive pricing, reliable customer support, and a strong regulatory track record.\n\nAdditionally, investors should carefully read the risk disclosure documents provided by brokers and consider seeking advice from financial professionals if needed.', 'm1h0vqyHlG8oermdTSTB.webp', 1, '2024-07-29 09:55:26', '2024-07-29 09:55:26');

-- --------------------------------------------------------

--
-- Table structure for table `derivatives_trading_services`
--

CREATE TABLE `derivatives_trading_services` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `img_src` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `derivatives_trading_services`
--

INSERT INTO `derivatives_trading_services` (`id`, `title`, `description`, `img_src`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Margin Trading', 'Brokers provide margin trading facilities for derivative trading, allowing investors to trade derivatives with borrowed funds or leverage. Margin requirements may vary depending on the type of derivative and the broker\'s policies.', 'LVsJN2L2FIeq2CtMxA0Y.png', 1, '2024-07-29 10:53:16', '2024-07-29 10:53:16'),
(2, 'Online Trading Platforms', 'Similar to trading in listed securities, brokers offer online trading platforms specifically designed for derivative trading. These platforms provide real-time market data, advanced charting tools, option chain analysis, and order management features tailored for derivative traders.', 'KH1c9TNIlGd8Nv01dHls.png', 1, '2024-07-29 10:53:41', '2024-07-29 10:53:41'),
(3, 'Risk Management Tools', 'Derivative trading involves inherent risks due to leverage and market volatility. Brokers offer risk management tools such as stop-loss orders, limit orders, and margin monitoring to help investors manage their exposure and protect against adverse market movements.', 'ddMhVPQvgP6fa7TdPwfy.png', 1, '2024-07-29 10:54:22', '2024-07-29 10:54:22'),
(4, 'Derivative Market Research', 'Brokers may provide research reports, market analysis, and derivative trading strategies to assist investors in making informed trading decisions. This includes insights into market trends, volatility analysis, option pricing models, and hedging strategies.', '8Te00aj8FVjmPEdHLtm5.png', 1, '2024-07-29 10:54:45', '2024-07-29 10:54:45'),
(5, 'Regulatory Compliance', 'Derivative trading in India is regulated by the Securities and Exchange Board of India (SEBI), and brokers must comply with SEBI regulations governing derivative trading. This includes rules related to margin requirements, position limits, disclosure requirements, and investor protection measures.', 'pIZ1Bknxks4XMsrkob7l.png', 1, '2024-07-29 10:55:12', '2024-07-29 10:55:12'),
(6, 'Customer Support', 'Brokers offer customer support services to assist derivative traders with account-related queries, trading issues, technical assistance, and regulatory compliance matters. Customer support may be available through various channels such as phone, email, live chat, or in-person at branch offices.', 'bvTGITZ8JCivh20N5j83.png', 1, '2024-07-29 10:55:42', '2024-07-29 10:55:42');

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
-- Table structure for table `key_points`
--

CREATE TABLE `key_points` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `img_src` text NOT NULL,
  `url` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `key_points`
--

INSERT INTO `key_points` (`id`, `title`, `img_src`, `url`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Register with Facilon Services', 'h67C1uWeMbELcGjrX4UQ.png', 'https://anvaya.online/facilon-co-in', 1, '2024-08-28 11:43:56', '2024-08-28 11:43:56'),
(2, 'Review and Evaluate  list of Service Providers in India', 'T5u2ua5b1h9A2XsRRqrH.png', 'https://anvaya.online/facilon-co-in', 1, '2024-08-28 11:44:53', '2024-08-28 11:44:53'),
(3, 'Appoint a Service Provider', 'G46HZ4mstgFPWWDEtUtt.png', 'https://anvaya.online/facilon-co-in', 1, '2024-08-28 11:45:38', '2024-08-28 11:45:38'),
(4, 'Provide KYC Information & Documentation', 'Q789WBYykOciwgn8nXGZ.png', 'https://anvaya.online/facilon-co-in', 1, '2024-08-28 11:46:31', '2024-08-28 11:46:31'),
(5, 'Complete  SEBI Registration Process (If applicable)', 'T7xZoPLFQt4HVZn1OKNH.png', 'https://anvaya.online/facilon-co-in', 1, '2024-08-28 11:48:02', '2024-08-28 11:48:02'),
(6, 'Provide account opening documentation', 'GT2oXrvfzXeK6B2nvX1X.png', 'https://anvaya.online/facilon-co-in', 1, '2024-08-28 11:48:48', '2024-08-28 11:48:48'),
(7, 'Obtain account numbers from Service Providers', 'hianBbOPiKRGWZUElIvR.png', 'https://anvaya.online/facilon-co-in', 1, '2024-08-28 11:49:25', '2024-08-28 11:49:25'),
(8, 'Send Instructions using Facilon Services', 'vflXfx4ptmoazA4YbKye.png', 'https://anvaya.online/facilon-co-in', 1, '2024-08-28 11:50:15', '2024-08-28 11:50:15'),
(9, 'Receive Reports using Facilon Services', 'FCWAjU0X3DoR5lFJTU71.png', 'https://anvaya.online/facilon-co-in', 1, '2024-08-28 11:51:22', '2024-08-28 11:51:22');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_05_17_122819_create_admins_table', 2);

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_investment_scheme_basic_details`
--

CREATE TABLE `portfolio_investment_scheme_basic_details` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description_one` text NOT NULL,
  `description_two` text NOT NULL,
  `bg_img_src` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `portfolio_investment_scheme_basic_details`
--

INSERT INTO `portfolio_investment_scheme_basic_details` (`id`, `title`, `description_one`, `description_two`, `bg_img_src`, `status`, `created_at`, `updated_at`) VALUES
(1, 'PORTFOLIO INVESTMENT SCHEME', 'The Portfolio Investment Scheme (PIS) of the Reserve Bank of India (RBI) is a regulatory framework that governs foreign investment in Indian securities markets by non-resident Indians (NRIs) and Persons of Indian Origin (PIOs). The scheme allows NRIs and PIOs to invest in shares and convertible debentures of Indian companies listed on recognized stock exchanges in India. Here\'s an overview to help you understand the Portfolio Investment Scheme (PIS) of RBI', 'The Portfolio Investment Scheme (PIS) of RBI aims to facilitate foreign investment by NRIs and PIOs in Indian securities markets while ensuring transparency, compliance with regulatory requirements, and protection of investor interests. NRIs and PIOs considering investments in Indian securities markets under the scheme should carefully review the eligibility criteria, limits, reporting requirements, and regulatory framework governing such investments. It\'s advisable to seek professional advice from financial advisors or legal experts familiar with the regulations governing foreign investment in India.', 'crQWlIiL9bqrf5JHCQDO.webp', 1, '2024-07-30 09:03:17', '2024-07-30 09:03:17');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_investment_scheme_services`
--

CREATE TABLE `portfolio_investment_scheme_services` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `img_src` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `portfolio_investment_scheme_services`
--

INSERT INTO `portfolio_investment_scheme_services` (`id`, `title`, `description`, `img_src`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Eligibility', 'The Portfolio Investment Scheme is applicable to Non-Resident Indians (NRIs), Persons of Indian Origin (PIOs), and Overseas Citizens of India (OCIs) who wish to invest in Indian securities markets.', '2D2gT1PLosYfpWiOyOCL.svg', 1, '2024-07-30 09:27:47', '2024-07-30 09:27:47'),
(2, 'Authorized Dealers', 'NRIs and PIOs must open a designated NRE (Non-Resident External) or NRO (Non-Resident Ordinary) bank account with an authorized dealer bank (typically authorized banks licensed by the RBI) to undertake transactions under the Portfolio Investment Scheme.', 'oKvVT56A6DGpBOeaYJbI.svg', 1, '2024-07-30 09:28:13', '2024-07-30 09:28:13'),
(3, 'Limits and Reporting', 'Under the Portfolio Investment Scheme, NRIs and PIOs are subject to certain limits on the amount of investment they can make in Indian securities. These limits are prescribed by the RBI and are subject to periodic review. NRIs and PIOs are required to adhere to reporting requirements specified by the RBI regarding their investments and transactions in Indian securities.', 'F6kODQ5gRPFC5qYTtx5m.svg', 1, '2024-07-30 09:28:40', '2024-07-30 09:28:40'),
(4, 'Types of Investments', 'NRIs and PIOs can invest in shares (equity) and convertible debentures of Indian companies listed on recognized stock exchanges in India under the Portfolio Investment Scheme. However, certain categories of securities may be restricted or prohibited for investment by NRIs and PIOs under the scheme.', 'cMpEglSqR9rvFnymYLGL.svg', 1, '2024-07-30 09:29:04', '2024-07-30 09:29:04'),
(5, 'Repatriability', 'Investments made by NRIs and PIOs under the Portfolio Investment Scheme are generally allowed to be repatriated (converted into foreign currency) subject to certain conditions and limits specified by the RBI. Repatriation of funds is typically allowed for the sale proceeds of securities held under the scheme, subject to payment of applicable taxes and compliance with regulatory requirements.', 'VngIBd1torEc1ub4WcaA.svg', 1, '2024-07-30 09:29:45', '2024-07-30 09:29:45'),
(6, 'Designated Depository Participants (DPs)', 'NRIs and PIOs are required to appoint a designated Depository Participant (DP) registered with the Securities and Exchange Board of India (SEBI) for holding and maintaining their securities in dematerialized (electronic) form under the Portfolio Investment Scheme.', 'mi95MYVojPXbF0W9v5O8.svg', 1, '2024-07-30 09:30:09', '2024-07-30 09:30:09'),
(7, 'Taxation', 'NRIs and PIOs investing in Indian securities markets under the Portfolio Investment Scheme are subject to taxation laws and regulations applicable to non-residents. Tax implications may vary depending on factors such as the type of investment, duration of holding, and applicable tax treaties between India and the country of residence of the investor.', 'dkrQ6OiaRWCxMHrk74zu.svg', 1, '2024-07-30 09:30:47', '2024-07-30 09:30:47'),
(8, 'Regulatory Compliance', 'NRIs and PIOs are required to comply with the provisions of the Foreign Exchange Management Act (FEMA) and regulations issued by the Reserve Bank of India (RBI) regarding foreign investment in Indian securities markets under the Portfolio Investment Scheme. Non-compliance with regulatory requirements may result in penalties or restrictions imposed by the RBI.', 'scD8oEwV9Bbn1upaHmbQ.svg', 1, '2024-07-30 09:33:49', '2024-07-30 09:33:49');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_management_services`
--

CREATE TABLE `portfolio_management_services` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `img_src` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `portfolio_management_services`
--

INSERT INTO `portfolio_management_services` (`id`, `title`, `description`, `img_src`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Personalized Investment Management', 'Portfolio managers in India offer personalized investment management services tailored to the unique investment goals, risk tolerance, and financial preferences of individual clients. They work closely with clients to understand their investment objectives and design customized investment strategies accordingly.', 'asvtOVU6F9QlZZ6XNgB7.svg', 1, '2024-07-31 10:06:20', '2024-07-31 10:06:20'),
(2, 'Discretionary and Non-Discretionary Services', 'Portfolio managers offer both discretionary and non-discretionary portfolio management services. In discretionary PMS, portfolio managers have the authority to make investment decisions on behalf of clients without prior approval for each transaction. In non-discretionary PMS, clients retain control over investment decisions, and portfolio managers provide advisory services and execute trades based on clients\' instructions.', 'AdnadEx3DZO7kRNU1d6j.svg', 1, '2024-07-31 10:06:48', '2024-07-31 10:06:48'),
(3, 'Diversified Portfolio Construction', 'Portfolio managers construct diversified investment portfolios comprising a mix of asset classes such as equities, fixed income securities, mutual funds, exchange-traded funds (ETFs), and alternative investments. They aim to achieve optimal risk-adjusted returns by strategically allocating assets across different investment opportunities and market segments.', '8RvYERQNEiCSyuqs9iv9.svg', 1, '2024-07-31 10:07:11', '2024-07-31 10:07:11'),
(4, 'Active Investment Management', 'Portfolio managers actively monitor financial markets, economic trends, and individual securities to identify investment opportunities and manage portfolio risks effectively. They conduct in-depth research, fundamental analysis, and technical analysis to make informed investment decisions and optimize portfolio performance.', 'RMhckrgAo1NMDA4Tapw8.svg', 1, '2024-07-31 10:07:35', '2024-07-31 10:07:35'),
(5, 'Risk Management Strategies', 'Portfolio managers implement risk management strategies to mitigate investment risks and preserve capital. This may include diversification, asset allocation, hedging techniques, stop-loss orders, and portfolio rebalancing to maintain risk-return objectives and protect against market volatility and downside risk.', 'u53Bvu0GUtvzg3h6It0z.svg', 1, '2024-07-31 10:08:00', '2024-07-31 10:08:00'),
(6, 'Performance Monitoring and Reporting', 'Portfolio managers provide regular performance updates and detailed reporting to clients, including portfolio valuations, investment holdings, transaction summaries, performance metrics, and benchmark comparisons. Clients can track the performance of their portfolios and evaluate the effectiveness of the investment strategy implemented by the portfolio manager.', '43iyzD7dIcKgpUQvwLv5.svg', 1, '2024-07-31 10:08:26', '2024-07-31 10:08:26'),
(7, 'Fee Structure', 'Portfolio management services typically involve management fees based on a percentage of assets under management (AUM) and performance-based fees linked to the portfolio\'s investment performance relative to predefined benchmarks or performance targets. The fee structure may vary depending on the level of customization, investment strategy complexity, and portfolio size.', 'fGf2rqq8ncDCnVLqTfAp.svg', 1, '2024-07-31 10:08:48', '2024-07-31 10:08:48'),
(8, 'Regulatory Compliance', 'Portfolio managers in India are regulated by the Securities and Exchange Board of India (SEBI) and must comply with SEBI regulations governing portfolio management activities. They are required to adhere to strict compliance standards concerning client suitability, disclosure requirements, transparency, and investor protection.', '4gITywQY6zGDN8bzTx5l.svg', 1, '2024-07-31 10:09:11', '2024-07-31 10:09:11'),
(9, 'Client Service and Support', 'Portfolio managers offer dedicated client service teams to address clients\' inquiries, provide investment advice, and offer assistance on portfolio-related matters. Client service representatives are available to support clients through phone, email, online communication, or in-person meetings as needed.', '3QMrp0RlQNJXSNiovs0K.svg', 1, '2024-07-31 10:09:34', '2024-07-31 10:09:34'),
(10, 'Minimum Investment Requirements', 'Portfolio management services typically have minimum investment requirements that vary among portfolio managers. Clients are required to meet the minimum investment threshold to avail of PMS services, and the minimum investment amount may vary based on the investment strategy, risk profile, and fee structure.', 'jZKftbnRP7d7UHvkFb9i.svg', 1, '2024-07-31 10:10:11', '2024-07-31 10:10:11');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_management_services_basic_details`
--

CREATE TABLE `portfolio_management_services_basic_details` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description_one` text NOT NULL,
  `description_two` text NOT NULL,
  `bg_img_src` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `portfolio_management_services_basic_details`
--

INSERT INTO `portfolio_management_services_basic_details` (`id`, `title`, `description_one`, `description_two`, `bg_img_src`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Portfolio Management Services', 'Portfolio Management Services (PMS) offered by portfolio managers in India are specialized investment management services that cater to the specific needs and objectives of high-net-worth individuals (HNIs) and institutional investors. Here\'s an overview of the product information on Portfolio Management Services (PMS) offered by portfolio managers in India', 'Overall, Portfolio Management Services (PMS) offered by portfolio managers in India provide affluent investors with professional investment management expertise, personalized investment solutions, and active portfolio oversight to help them achieve their financial goals and objectives. Investors considering PMS should conduct thorough due diligence, evaluate the track record and reputation of portfolio managers, and assess the suitability of PMS offerings based on their investment objectives, risk tolerance, and investment preferences.', 'OLTKKkD2qcbtUpbMwDeM.webp', 1, '2024-07-31 09:19:42', '2024-07-31 09:19:42');

-- --------------------------------------------------------

--
-- Table structure for table `service_providers`
--

CREATE TABLE `service_providers` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `img_src` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `service_providers`
--

INSERT INTO `service_providers` (`id`, `title`, `img_src`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Brokers', 'Zvib81YaqdwRgpS1xmWj.svg', 1, '2024-08-02 11:20:22', '2024-08-02 11:20:22'),
(2, 'Custodians', '9Ss5SkrU91nB88r6LRrs.svg', 1, '2024-08-02 11:20:48', '2024-08-02 11:20:48'),
(3, 'Portfolio Managers', 'Zb9nUa9MsmfLxGC9K3nb.svg', 1, '2024-08-02 11:21:05', '2024-08-02 11:21:05'),
(4, 'Banks', 'jhyJu6g496xqzDeRfHeI.svg', 1, '2024-08-02 11:21:24', '2024-08-02 11:21:24'),
(5, 'Investment Advisors', '6hXSBUSeEJQysTCodAPq.svg', 1, '2024-08-02 11:21:40', '2024-08-02 11:21:40');

-- --------------------------------------------------------

--
-- Table structure for table `service_provider_details`
--

CREATE TABLE `service_provider_details` (
  `id` int(11) NOT NULL,
  `provider_id` int(11) DEFAULT NULL,
  `unique_id` varchar(255) DEFAULT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `corp_office_address` text DEFAULT NULL,
  `tel_no` text DEFAULT NULL,
  `fax_no` text DEFAULT NULL,
  `website` text DEFAULT NULL,
  `cin_no` text DEFAULT NULL,
  `nse_sebi_reg` text DEFAULT NULL,
  `nse_f_o_sebi_reg` text DEFAULT NULL,
  `bse_sebi_reg` text DEFAULT NULL,
  `bse_f_o_sebi_reg` text DEFAULT NULL,
  `primary1_name` text DEFAULT NULL,
  `primary1_phone` text DEFAULT NULL,
  `primary1_email` text DEFAULT NULL,
  `primary2_name` text DEFAULT NULL,
  `primary2_phone` text DEFAULT NULL,
  `primary2_email` text DEFAULT NULL,
  `primary3_name` text DEFAULT NULL,
  `primary3_phone` text DEFAULT NULL,
  `primary3_email` text DEFAULT NULL,
  `escalation1_name` text DEFAULT NULL,
  `escalation1_phone` text DEFAULT NULL,
  `escalation1_email` text DEFAULT NULL,
  `escalation2_name` text DEFAULT NULL,
  `escalation2_phone` text DEFAULT NULL,
  `escalation2_email` text DEFAULT NULL,
  `confirmation` int(11) NOT NULL DEFAULT 0,
  `agree_terms` int(11) NOT NULL DEFAULT 0,
  `bank_name` text DEFAULT NULL,
  `contact_person_name` text DEFAULT NULL,
  `address_line1` text DEFAULT NULL,
  `address_line2` text DEFAULT NULL,
  `country` int(11) DEFAULT NULL,
  `state` int(11) DEFAULT NULL,
  `city` int(11) DEFAULT NULL,
  `pin_zip_code` text DEFAULT NULL,
  `email_id` text DEFAULT NULL,
  `contact_phone_no` text DEFAULT NULL,
  `register_as` varchar(255) DEFAULT NULL,
  `overseas_regulator` varchar(255) DEFAULT NULL,
  `license_no` varchar(255) DEFAULT NULL,
  `license_valid` date DEFAULT NULL,
  `sebi_reg_no` varchar(255) DEFAULT NULL,
  `sebi_valid` date DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `service_provider_details`
--

INSERT INTO `service_provider_details` (`id`, `provider_id`, `unique_id`, `full_name`, `corp_office_address`, `tel_no`, `fax_no`, `website`, `cin_no`, `nse_sebi_reg`, `nse_f_o_sebi_reg`, `bse_sebi_reg`, `bse_f_o_sebi_reg`, `primary1_name`, `primary1_phone`, `primary1_email`, `primary2_name`, `primary2_phone`, `primary2_email`, `primary3_name`, `primary3_phone`, `primary3_email`, `escalation1_name`, `escalation1_phone`, `escalation1_email`, `escalation2_name`, `escalation2_phone`, `escalation2_email`, `confirmation`, `agree_terms`, `bank_name`, `contact_person_name`, `address_line1`, `address_line2`, `country`, `state`, `city`, `pin_zip_code`, `email_id`, `contact_phone_no`, `register_as`, `overseas_regulator`, `license_no`, `license_valid`, `sebi_reg_no`, `sebi_valid`, `designation`, `status`) VALUES
(1, 1, 'BR202409249331', 'Deven Punse', 'Mahape', '9156384712', '123456', 'www.matrixbricks.com', '789456123', '78945', '789451', '789452', '789456', 'check', '12345', 'check@gmail.com', 'check2', '123456', 'check2@gmail.com', 'check3', '1234567', 'check3@gmail.com', 'esc1', '12345', 'esc1@gmail.com', 'esc2', '123456', 'esc2@gmail.com', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2);

-- --------------------------------------------------------

--
-- Table structure for table `trading_listed_securities_basic_details`
--

CREATE TABLE `trading_listed_securities_basic_details` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description_one` text NOT NULL,
  `description_two` text NOT NULL,
  `bg_img_src` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `trading_listed_securities_basic_details`
--

INSERT INTO `trading_listed_securities_basic_details` (`id`, `title`, `description_one`, `description_two`, `bg_img_src`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Trading in Listed Securities', '\"Trading in Listed Securities\" offered by brokers in India refers to the service provided by brokerage firms that enables investors to buy and sell securities that are listed on stock exchanges in India. Here\'s a detailed overview of what this service typically entails', 'Before choosing a broker for trading in listed securities in India, investors should consider factors such as brokerage fees, trading platforms, research offerings, customer service quality, regulatory compliance, and reputation in the market. It\'s important to select a broker that aligns with your trading preferences, investment objectives, and risk tolerance.', 'M9LefOaFUbhfcsaMv1QV.webp', 1, '2024-08-01 11:08:29', '2024-08-01 11:08:29');

-- --------------------------------------------------------

--
-- Table structure for table `trading_listed_securities_services`
--

CREATE TABLE `trading_listed_securities_services` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `img_src` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `trading_listed_securities_services`
--

INSERT INTO `trading_listed_securities_services` (`id`, `title`, `description`, `img_src`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Access to Multiple Exchanges', 'Brokers offer access to major stock exchanges in India, such as the National Stock Exchange (NSE) and the Bombay Stock Exchange (BSE). This allows investors to trade a wide range of securities, including stocks, bonds, exchange-traded funds (ETFs), and derivatives.', 't9A7T9uHLUJbmtddODC0.svg', 1, '2024-08-01 11:57:02', '2024-08-01 11:57:02'),
(2, 'Online Trading Platforms', 'Brokers provide online trading platforms that allow investors to place buy and sell orders conveniently from their computer or mobile device. These platforms offer features such as real-time market data, advanced charting tools, research reports, and order management capabilities.', 'eEUycBW1DTG9UZDiY4Zg.svg', 1, '2024-08-01 11:57:32', '2024-08-01 11:57:32'),
(3, 'Demat Account Services', 'In India, securities are held and traded in electronic form through Demat (dematerialized) accounts. Brokers facilitate the opening and maintenance of Demat accounts for their clients, which are essential for trading in listed securities.', 'HKqLb1K7P7YLBHhVvCIG.svg', 1, '2024-08-01 11:57:52', '2024-08-01 11:57:52'),
(4, 'Order Types', 'Investors can place various types of orders through their brokers, including market orders, limit orders, stop-loss orders, and bracket orders. These order types allow investors to specify the price at which they want to buy or sell securities and implement risk management strategies.', 'a85yMIF3PVWHaM6M3QU8.png', 1, '2024-08-01 11:58:15', '2024-08-01 11:58:15'),
(5, 'Research and Analysis', 'Brokers often provide research and analysis tools to help investors make informed trading decisions. This may include fundamental analysis, technical analysis, market insights, and investment recommendations from research analysts.', 'eo3vUesYqGdYvsTAg6R0.png', 1, '2024-08-01 11:58:37', '2024-08-01 11:58:37'),
(6, 'Margin Trading and Leverage', 'Some brokers offer margin trading facilities, allowing investors to trade securities with borrowed funds. This enables investors to potentially amplify their returns, but it also involves higher risks and margin requirements.', 'g2J7Zfm7AJkUWUa1xp47.svg', 1, '2024-08-01 11:59:07', '2024-08-01 11:59:07'),
(7, 'Customer Support', 'Brokers typically offer customer support services to assist investors with account opening, trading queries, technical issues, and other related matters. Customer support may be available through phone, email, live chat, or in-person at branch offices.', 'SVBabEbTl53OVwX9V8WA.png', 1, '2024-08-01 11:59:30', '2024-08-01 11:59:30'),
(8, 'Regulatory Compliance', 'Brokers in India are regulated by the Securities and Exchange Board of India (SEBI) and must adhere to regulatory guidelines to ensure investor protection and market integrity. They are required to maintain transparency in their operations and comply with rules related to client funds, disclosure of information, and fair trading practices.', 'Ea3KkWrLjZcLunKAPurz.png', 1, '2024-08-01 11:59:53', '2024-08-01 11:59:53');

-- --------------------------------------------------------

--
-- Table structure for table `types_of_derivatives`
--

CREATE TABLE `types_of_derivatives` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `types_of_derivatives`
--

INSERT INTO `types_of_derivatives` (`id`, `title`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Futures', 'Futures contracts obligate the buyer to purchase an underlying asset and the seller to sell it at a predetermined price and date in the future.', 1, '2024-07-29 11:59:14', '2024-07-29 11:59:14'),
(2, 'Options', 'Options contracts give the buyer the right, but not the obligation, to buy (call option) or sell (put option) an underlying asset at a specified price within a certain period.', 1, '2024-07-29 11:59:31', '2024-07-29 11:59:31'),
(3, 'Futures and Options (F&O) Segment', 'In India, derivative trading primarily takes place in the Futures and Options (F&O) segment of stock exchanges like the National Stock Exchange (NSE) and the Bombay Stock Exchange (BSE).', 1, '2024-07-29 11:59:49', '2024-07-29 11:59:49');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `mobile_no` varchar(255) DEFAULT NULL,
  `isd_code` int(11) DEFAULT NULL,
  `email_otp` int(11) DEFAULT NULL,
  `email_verify` int(11) DEFAULT NULL,
  `mobile_otp` int(11) DEFAULT NULL,
  `mobile_verify` int(11) DEFAULT NULL,
  `role` int(11) DEFAULT NULL,
  `agree_receive_sms_email` int(11) DEFAULT NULL,
  `agree_for_whatsapp` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 2,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `unique_code` text DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `logged_in_count` int(11) NOT NULL DEFAULT 0,
  `ip_address` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile_no`, `isd_code`, `email_otp`, `email_verify`, `mobile_otp`, `mobile_verify`, `role`, `agree_receive_sms_email`, `agree_for_whatsapp`, `status`, `email_verified_at`, `password`, `unique_code`, `remember_token`, `logged_in_count`, `ip_address`, `created_at`, `updated_at`) VALUES
(23, 'Deven Punse', 'deven@matrixbricks.com', '9156387412', 1, 9931, 1, NULL, NULL, NULL, NULL, 1, 2, NULL, '$2y$10$20d8hhtw5tRCfui80alRReUXQ1qbg.wrAfq7pE8jTMbCmwP27bMRW', '202406181715', 'CTye2jYcmhCUxpVQlqK55jjjHjtWdsIbqvOrSNhFnZFMF1CQiZ5eJ0As1yY1', 0, NULL, '2024-07-09 10:13:56', NULL),
(24, 'Shikha Dubey', 'shikha@matrixbricks.com', '9156384712', 1, 8390, 1, NULL, NULL, NULL, NULL, 1, 2, NULL, '$2y$10$b2Ltj2bNGrPtAXbrC7uhIeOE5xriNmiiCtKoH.Jnn8dKBOV6Z338S', '202406199864', NULL, 0, NULL, '2024-07-09 10:13:56', NULL),
(28, 'vishnu Mishra', 'vishnu@matrixbricks.com', '9156384712', 1, 6303, 1, NULL, NULL, NULL, NULL, 1, 2, NULL, '$2y$10$SDHhwekBxkiHR3Fv8NgWveMHinMLrr01qq48e74jLD9PQ8gUkmTYi', '202406197687', NULL, 0, NULL, '2024-07-09 10:13:56', NULL),
(29, 'Vaibhav Rasal', 'viabhav@matrixbricks.com', '9156384712', 1, 6916, 1, NULL, NULL, NULL, NULL, 1, 2, NULL, '$2y$10$YitR4Y/n.jB.4e7IRD5tee8OS/BLHDB5YA/Nd4dVlDyq3y88bnS/6', '202406199667', NULL, 0, NULL, '2024-07-09 10:13:56', NULL),
(30, 'Nitin Panchal', 'nitin@matrixbricks.com', '9156384712', 1, 9566, 1, NULL, NULL, NULL, NULL, 1, 2, NULL, '$2y$10$zMq26gbz/SfXYEKRm89JSOYZODC0ByLYFFUDqSA34fVYtWzoTlc0O', '202406201104', 'mnrqnYuADrhRKQb8z6Hrr1LsegIRvqeumuSLkt2MPYyG0NfSLsCellbZzkcA', 0, NULL, '2024-07-09 10:13:56', NULL),
(31, 'Aniket Gole', 'aniket@matrixbricks.com', '9156384712', 1, 4741, 1, NULL, NULL, NULL, NULL, 1, 2, NULL, '$2y$10$ERNOa4lWOOG/.pt71A4eQOxy15ggxRs0DBlSCRf1LWb3uUSiyDLFu', '202406208392', 'jynBb7pg09ha488GPQDINcj4i82OhTTe7s81vfDhix4SBClwhN71mDODJMkM', 1, NULL, '2024-07-09 10:13:56', '2024-06-25 00:36:30'),
(32, 'sushil', 'sushil@matrixbricks.com', '9156384712', 1, 8014, 1, NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL, '202407088335', NULL, 0, NULL, '2024-07-09 10:13:56', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`),
  ADD UNIQUE KEY `admins_username_unique` (`username`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `custody_basic_details`
--
ALTER TABLE `custody_basic_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `custody_services`
--
ALTER TABLE `custody_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `derivatives_trading_basic_details`
--
ALTER TABLE `derivatives_trading_basic_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `derivatives_trading_services`
--
ALTER TABLE `derivatives_trading_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `key_points`
--
ALTER TABLE `key_points`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `portfolio_investment_scheme_basic_details`
--
ALTER TABLE `portfolio_investment_scheme_basic_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio_investment_scheme_services`
--
ALTER TABLE `portfolio_investment_scheme_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio_management_services`
--
ALTER TABLE `portfolio_management_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio_management_services_basic_details`
--
ALTER TABLE `portfolio_management_services_basic_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_providers`
--
ALTER TABLE `service_providers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_provider_details`
--
ALTER TABLE `service_provider_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trading_listed_securities_basic_details`
--
ALTER TABLE `trading_listed_securities_basic_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trading_listed_securities_services`
--
ALTER TABLE `trading_listed_securities_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `types_of_derivatives`
--
ALTER TABLE `types_of_derivatives`
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
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `custody_basic_details`
--
ALTER TABLE `custody_basic_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `custody_services`
--
ALTER TABLE `custody_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `derivatives_trading_basic_details`
--
ALTER TABLE `derivatives_trading_basic_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `derivatives_trading_services`
--
ALTER TABLE `derivatives_trading_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `key_points`
--
ALTER TABLE `key_points`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `portfolio_investment_scheme_basic_details`
--
ALTER TABLE `portfolio_investment_scheme_basic_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `portfolio_investment_scheme_services`
--
ALTER TABLE `portfolio_investment_scheme_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `portfolio_management_services`
--
ALTER TABLE `portfolio_management_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `portfolio_management_services_basic_details`
--
ALTER TABLE `portfolio_management_services_basic_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `service_providers`
--
ALTER TABLE `service_providers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `service_provider_details`
--
ALTER TABLE `service_provider_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `trading_listed_securities_basic_details`
--
ALTER TABLE `trading_listed_securities_basic_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `trading_listed_securities_services`
--
ALTER TABLE `trading_listed_securities_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `types_of_derivatives`
--
ALTER TABLE `types_of_derivatives`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
