-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 10, 2024 at 06:41 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ceylonextremeadventures`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

DROP TABLE IF EXISTS `bookings`;
CREATE TABLE IF NOT EXISTS `bookings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullName` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `whatsapp` varchar(15) NOT NULL,
  `address` varchar(255) NOT NULL,
  `idNumber` varchar(50) NOT NULL,
  `dateOfAdventure` date NOT NULL,
  `participants` int(11) NOT NULL,
  `duration` enum('Half-day','Full-day','Multiple Days') NOT NULL,
  `motorcycle` varchar(50) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `cardHolderName` varchar(100) DEFAULT NULL,
  `cardNumber` varchar(20) DEFAULT NULL,
  `expiryDate` date DEFAULT NULL,
  `cvv` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `submitted_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `message`, `submitted_at`) VALUES
(1, 'miinsq', 'miningsuppa@gmail.com', 'sa', 'das', '2024-06-29 08:51:50'),
(2, 'Hi ', 'miningsuppa@gmail.com', 'HI', 'HI', '2024-06-29 08:55:41'),
(3, 'D', 'miningsuppa@gmail.com', 'DA', 'D', '2024-06-29 08:56:14'),
(4, 'QW', 'miningsuppa@gmail.com', 'SAD', 'DS', '2024-06-29 08:57:15'),
(5, 'okda', 'miningsuppa@gmail.com', 'miningsuppa@gmail.com', 'miningsuppa@gmail.com', '2024-06-29 09:02:30'),
(6, 'last', 'miningsuppa@gmail.com', 'miningsuppa@gmail.com', 'miningsuppa@gmail.com', '2024-06-29 09:20:44'),
(7, 'aswe', 'miningsuppa@gmail.com', 'weq', 'we', '2024-06-29 09:21:46');

-- --------------------------------------------------------

--
-- Table structure for table `divingbookings`
--

DROP TABLE IF EXISTS `divingbookings`;
CREATE TABLE IF NOT EXISTS `divingbookings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `whatsapp` varchar(15) NOT NULL,
  `address` varchar(255) NOT NULL,
  `idNumber` varchar(50) NOT NULL,
  `dateOfAdventure` date NOT NULL,
  `participants` int(11) NOT NULL,
  `duration` varchar(50) NOT NULL,
  `diving` varchar(50) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `bookingDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `divingbookings`
--

INSERT INTO `divingbookings` (`id`, `fullName`, `email`, `whatsapp`, `address`, `idNumber`, `dateOfAdventure`, `participants`, `duration`, `diving`, `price`, `bookingDate`) VALUES
(1, 'das', 'miningsuppa@gmail.com', '324', 'sfd', '432', '2024-05-30', 23, 'Full-day', 'Mirissa', '60.00', '2024-06-17 18:07:01'),
(2, 'ewq', 'miningsuppa@gmail.com', '321', 'dsa', '321', '2024-06-05', 2, 'Multiple Days', 'Kalpitiya', '60.00', '2024-06-17 18:08:38'),
(3, 'fgsd', 'miningsuppa@gmail.com', '234432', 'ddffds', '434234', '2024-06-12', 432, 'Full-day', 'Mirissa', '80.00', '2024-06-17 18:11:48');

-- --------------------------------------------------------

--
-- Table structure for table `hiking_bookings`
--

DROP TABLE IF EXISTS `hiking_bookings`;
CREATE TABLE IF NOT EXISTS `hiking_bookings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `whatsapp` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `id_number` varchar(50) NOT NULL,
  `date_of_adventure` date NOT NULL,
  `participants` int(11) NOT NULL,
  `duration` varchar(50) NOT NULL,
  `national_park` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hiking_bookings`
--

INSERT INTO `hiking_bookings` (`id`, `full_name`, `email`, `whatsapp`, `address`, `id_number`, `date_of_adventure`, `participants`, `duration`, `national_park`, `price`) VALUES
(1, 'asd', 'miningsuppa@gmail.com', '432', 'fsdf', '324', '2024-05-30', 4, 'Full-day', 'Park2', '60'),
(2, 'fsd', 'miningsuppa@gmail.com', '123', 'sdf', '321', '2024-06-07', 4, 'Full-day', 'Park2', '80'),
(3, 'okk', 'miningsuppa@gmail.com', '123', 'sdf', '321', '2024-06-07', 4, 'Full-day', 'Park2', '80'),
(4, 'ads', 'miningsuppa@gmail.com', '321', 'ewq', 'fsd', '2024-06-01', 342, 'Multiple Days', 'Park2', '80'),
(5, 'ads', 'miningsuppa@gmail.com', '321', 'ewq', 'fsd', '2024-06-01', 342, 'Multiple Days', 'Park2', '80'),
(6, 'asd', 'miningsuppa@gmail.com', '213', '213', '321', '2024-06-07', 132, 'Full-day', 'Park2', '100'),
(7, 'sda', 'miningsuppa@gmail.com', '312', 'asd', '2333333', '2024-06-06', 32, 'Multiple Days', 'Park2', '80');

-- --------------------------------------------------------

--
-- Table structure for table `kayaking_bookings`
--

DROP TABLE IF EXISTS `kayaking_bookings`;
CREATE TABLE IF NOT EXISTS `kayaking_bookings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `whatsapp` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `id_number` varchar(50) NOT NULL,
  `date_of_adventure` date NOT NULL,
  `participants` int(11) NOT NULL,
  `duration` varchar(50) NOT NULL,
  `kayaking` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kayaking_bookings`
--

INSERT INTO `kayaking_bookings` (`id`, `full_name`, `email`, `whatsapp`, `address`, `id_number`, `date_of_adventure`, `participants`, `duration`, `kayaking`, `price`) VALUES
(1, 'sad', 'miningsuppa@gmail.com', '312', 'asd', 'ads', '2024-06-11', 312, 'Full-day', 'Place2', 80),
(2, 'lkjasd', 'miningsuppa@gmail.com', '432', 'df', '324', '2024-06-14', 432, 'Full-day', 'Place1', 60),
(3, 'minsa', 'miningsuppa@gmail.com', '321', 'ewq', '231', '2024-06-21', 321, 'Multiple Days', 'Place3', 100),
(4, 'minsa', 'miningsuppa@gmail.com', '321', 'ewq', '231', '2024-06-21', 321, 'Multiple Days', 'Place3', 100);

-- --------------------------------------------------------

--
-- Table structure for table `m_bookings`
--

DROP TABLE IF EXISTS `m_bookings`;
CREATE TABLE IF NOT EXISTS `m_bookings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullName` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `whatsapp` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `idNumber` varchar(50) NOT NULL,
  `dateOfAdventure` date NOT NULL,
  `participants` int(11) NOT NULL,
  `duration` varchar(50) NOT NULL,
  `Motercycle_Trails` varchar(50) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `cardHolderName` varchar(100) NOT NULL,
  `cardNumber` varchar(20) NOT NULL,
  `expiryDate` date NOT NULL,
  `cvv` varchar(5) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_bookings`
--

INSERT INTO `m_bookings` (`id`, `fullName`, `email`, `whatsapp`, `address`, `idNumber`, `dateOfAdventure`, `participants`, `duration`, `Motercycle_Trails`, `price`, `cardHolderName`, `cardNumber`, `expiryDate`, `cvv`, `created_at`) VALUES
(1, 'SDF', 'miningsuppa@gmail.com', '312', 'ADS', '312', '2024-07-19', 213, 'Full-day', '0', '60.00', 'EWQ', '321', '2024-12-01', '123', '2024-07-10 06:37:45'),
(2, 'das', 'miningsuppa@gmail.com', '231', 'sfd', '321', '2024-07-09', 32, 'Full-day', '0', '80.00', 'fsdfaf', '312', '2024-08-01', '321', '2024-07-10 06:41:05');

-- --------------------------------------------------------

--
-- Table structure for table `productpurchases`
--

DROP TABLE IF EXISTS `productpurchases`;
CREATE TABLE IF NOT EXISTS `productpurchases` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `productTitle` varchar(255) DEFAULT NULL,
  `fullName` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productpurchases`
--

INSERT INTO `productpurchases` (`id`, `productTitle`, `fullName`, `email`, `address`, `created_at`) VALUES
(11, '2.3L Mini Scuba Tank', 'supun', 'miningsuppa@gmail.com', '328', '2024-07-03 13:26:59');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `image` text,
  `details` text,
  `category` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=82 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `price`, `image`, `details`, `category`) VALUES
(59, '2.3L Mini Scuba Tank', '500.00', 'https://m.media-amazon.com/images/I/71iRrxM3FjL.SS700.jpg', 'https://www.desertcart.lk/products/629861525-2-3-l-mini-scuba-tank-25-35-minutes-diving-lung-tanks-dot-certified-scuba-diving-tank-portable-dive-portable-lungs-2-3-l-16-cu-ft-capacity-3000-psi-max-pressure-aluminum-tank-within-30-ft', 'Diving'),
(56, 'Hiking Backpack 60L', '97.00', 'https://scanalpine.com/wp-content/uploads/2023/06/1-7.jpg', 'https://scanalpine.com/product/hiking-backpack-60l-2/', 'Hiking'),
(57, 'Scan Alpine Hiking Boot', '132.00', 'https://scanalpine.com/wp-content/uploads/2023/05/1-20.jpg', 'https://scanalpine.com/product/scan-alpine-hiking-boot/', 'Safaris'),
(58, 'Point 65 N Martini GTX Tandem Modular Kayak', '2199.00', 'https://www.outdoorplay.com/cdn/shop/products/media_15fb1502-e3b8-414e-88c9-a994b7a90cb4.jpg?v=1655925706&width=800', 'https://www.outdoorplay.com/products/point-65-martini-gtx-tandem-kayak', 'Kayaking'),
(54, 'Funny Motorcycle Riders Gift For Motorbike Biker Men Women T-Shirt', '30.00', 'https://i5.walmartimages.com/seo/Funny-Motorcycle-Riders-Gift-For-Motorbike-Biker-Men-Women-T-Shirt_17dd331a-dece-46c6-aaca-365f04526aa8.6d5bd3836b9d65eb1edb7da7f9693713.jpeg', 'https://www.ubuy.com.lk/en/product/JNOAMN452-funny-motorcycle-riders-gift-for-motorbike-biker-men-women-t-shirt?ref=list-gs&st=gs', 'Motorcycle Trails'),
(53, 'Boonie Hat', '28.00', 'https://scanalpine.com/wp-content/uploads/2023/05/2-15.jpg', 'https://scanalpine.com/product/boonie-hat/', 'Safaris'),
(51, 'Reboxed NRS Vapor Kayak Lifejacket (PFD)', '50.00', 'https://www.outdoorplay.com/cdn/shop/files/media_aafd2cc7-922e-4313-9160-2c2b021313c0.jpg?v=1717805450&width=800', 'https://www.outdoorplay.com/products/nrs-vapor-lifejacket-pfd-reboxed', 'Kayaking'),
(52, 'Mask Fin Snorkel Set', '200.00', 'https://m.media-amazon.com/images/I/71d1Si1-faL.SS700.jpg', 'https://www.desertcart.lk/products/151306561-mask-fin-snorkel-set-travel-size-snorkeling-gear-for-adults-with-panoramic-view-anti-fog-mask-trek-fins-dry-top-snorkel-and-gear-bag-for-swimming-training-snorkeling-kit-diving-packages', 'Diving'),
(50, 'Big Agnes Bunk House 4 Person Camping Tent', '479.00', 'https://www.outdoorplay.com/cdn/shop/products/media_69021e56-b26a-47f7-baf9-5f665c9e8183.jpg?v=1675984229&width=800', 'https://www.outdoorplay.com/products/big-agnes-bunk-house-4-tent', 'Hiking'),
(60, 'Alpinestars mens', '200.00', 'https://m.media-amazon.com/images/I/51aNDkDsYLL._AC_SY695_.jpg', 'https://www.amazon.com/Alpinestars-Unisex-Adult-Boots-Silver-one_Size/dp/B07TFL335P/ref=sr_1_4?sr=8-4', 'Motorcycle Trails'),
(62, 'First Aid Box Medical', '3.00', 'https://www.bamagate.com/cdn/shop/products/18409953541767763702_be5b0811-0669-472e-89cd-7c45de5eb694.jpg?v=1617552250', 'https://www.bamagate.com/products/first-aid-box-medical', 'Safaris'),
(63, 'NRS Men\'s Stratos Semi-Dry Paddling Jacket', '100.00', 'https://www.outdoorplay.com/cdn/shop/products/media_80b69628-841d-4c86-8e06-896c958ffc07.jpg?v=1665173394&width=800', 'https://www.outdoorplay.com/products/nrs-mens-stratos-semi-dry-paddling-jacket', 'Kayaking'),
(64, 'Dive Knife ', '200.00', 'https://m.media-amazon.com/images/I/91J+GlZbmoL.SS700.jpg', 'https://www.desertcart.lk/products/549066194-dive-knife-9-scuba-diving-knife-with-sheath-and-leg-strap-thigh-knife-stainless-steel-fixed-blade-knife-hunting-knives-survival-and-camping-gear', 'Diving'),
(65, 'Scan Alpine Hiking Boot', '120.00', 'https://scanalpine.com/wp-content/uploads/2023/05/1-20.jpg', 'https://scanalpine.com/product/scan-alpine-hiking-boot/', 'Hiking'),
(66, 'OHMOTOR Motorcycle Body Protective', '300.00', 'https://m.media-amazon.com/images/I/81hNIokRZ+L.SS700.jpg', 'https://www.desertcart.lk/products/129715332-ohmotor-motorbike-protective-armour-chest-back-spine-armor-protector-motorcross-armoured-jacket-clothing-men-womenfor-ktm-mtb-atv-dirt-bike', 'Motorcycle Trails'),
(67, 'SMACO Full Face Snorkel Mask ', '350.00', 'https://m.media-amazon.com/images/I/611PdKbspDL.SS700.jpg', 'https://www.desertcart.lk/products/626585544-smaco-full-face-snorkel-mask-adults-with-camera-mount-scuba-diving-mask-with-anti-fog-anti-leak-snorkling-mask-kit-compatible-with-s-400-s-400-pro-s-700-plus-s-700-max-scuba-diving-tank-for-man-and-women', 'Diving'),
(68, 'Outcast OSG Commander Frameless Boat', '900.00', 'https://www.outdoorplay.com/cdn/shop/products/media_3f09fd4c-aec3-4a69-9f04-383aefb282c8.jpg?v=1682626086&width=800', 'https://www.outdoorplay.com/products/outcast-osg-commander-frameless-boat', 'Kayaking'),
(69, 'Super Paco Inflatable Mattress Sleeping Pad', '250.00', 'https://www.outdoorplay.com/cdn/shop/products/media_bcd3cbee-8ca2-45c1-9352-fe1fe97d8f72.jpg?v=1666393732&width=800', 'https://www.outdoorplay.com/products/super-paco-sleeping-pad', 'Hiking'),
(70, 'Men\'s BUGTech Anti-insect Everything Safari Shirt', '72.00', 'https://d1azn61i9hwokk.cloudfront.net/product_colour_images/medium/the-safari-store-mens-maraandmeru-bugtech-everything-shirt-Safari-Baobab-3.jpg', 'Wear the safari shirt designed to be the shirt for any occasion: from the boardroom to the backcountry.', 'Safaris'),
(71, 'Martino Serengeti Shiny Black 555nm® Polarized Sunglasses', '200.00', 'https://d1azn61i9hwokk.cloudfront.net/products/big/7239-002-buy-safari-clothing-Merano-Black-Serengeti-Sunglasses-Unisex-MAIN.jpg', 'https://www.thesafaristore.com/en/products/martino-serengeti-shiny-black-555nm-polarized-sunglasses', 'Safaris'),
(73, 'SeaLife Micro 3.0 Underwater Camera with Sea Dragon 2000F', '480.00', 'https://www.scuba.com/Image/Product/Large/SLFSL551.jpg', 'https://www.scuba.com/p-slfsl551/sealife-micro-30-underwater-camera-with-sea-dragon-2000f', 'Diving'),
(74, 'Cressi Yuma Fast Spearguns 60cm', '199.00', 'https://www.scuba.com/Image/Product/Large/CSBYFS_All.jpg', 'https://www.scuba.com/p-csbyfs/cressi-yuma-fast-spearguns', 'Diving'),
(76, 'DAY TOUR PADDLE – DELUXE', '150.00', 'https://www.edgesrilanka.com/wp-content/uploads/2018/01/day-tour-glass-2-part.jpg', 'https://www.edgesrilanka.com/product/day-tour-paddle-deluxe/', 'Kayaking'),
(77, 'Goggles', '500.00', 'https://s.alicdn.com/@sc04/kf/H105c6cfa3e4a4c33a731a7d829f677438.jpg', 'https://www.alibaba.com/product-detail/2024-Popular-Motocross-Windshield-Mask-Off_1600988895617.html?spm=a2700.galleryofferlist.p_offer.d_image.515839f1srAXzK&s=p', 'Motorcycle Trails'),
(78, 'Goplus 225,000-BTU 3 Burner Gas Cooker Outdoor Camp Stove BBQ', '500.00', 'https://i5.walmartimages.com/seo/Goplus-Portable-Propane-225-000-BTU-3-Burner-Gas-Cooker-Outdoor-Camp-Stove-BBQ_07db6433-15e6-4099-9200-49435a9a9aa7_1.54291bd869db5b91ca013afaaade6f2f.jpeg', 'https://www.ubuy.com.lk/en/product/1CYM1RA-goplus-portable-propane-225000-btu-3-burner-gas-cooker-outdoor-camp-stove-bbq?ref=list-gs&st=gs', 'Hiking'),
(79, 'Rain Ponchos For Adults Reusable 2 Pcs Raincoats Emergency For Women Men', '250.00', 'https://m.media-amazon.com/images/I/710Yjth5o0L._AC_SL1500_.jpg', 'https://www.ubuy.com.lk/en/product/CKIODBYQI-ydyjki-rain-ponchos-for-adults-reusable-2-pcs-raincoats-emergency-for-women-men-with-hood-and-drawstring-suitable-for-theme-parks-rainy-days-water?st=es', 'Hiking'),
(80, 'Coleman Citronella Candle Outdoor Lantern - 70 Hours, 6.7 Ounce, Green', '260.00', 'https://i5.walmartimages.com/seo/Coleman-Citronella-Candle-Outdoor-Lantern-70-Hours-6-7-Ounce-Green_c0829b79-9f82-4bc7-bafb-d1db0765ebc2.690e408e774d2556a6890dc8ec9814a7.jpeg', 'https://www.ubuy.com.lk/en/product/1PEEZSXS-coleman-citronella-candle-outdoor-lantern-70-hours-6-7-ounce?ref=list-gs&st=gs', 'Safaris'),
(81, 'Coleman Citronella Candle Outdoor Lantern - 70 Hours, 6.7 Ounce, Green', '260.00', 'https://i5.walmartimages.com/seo/Coleman-Citronella-Candle-Outdoor-Lantern-70-Hours-6-7-Ounce-Green_c0829b79-9f82-4bc7-bafb-d1db0765ebc2.690e408e774d2556a6890dc8ec9814a7.jpeg', 'https://www.ubuy.com.lk/en/product/1PEEZSXS-coleman-citronella-candle-outdoor-lantern-70-hours-6-7-ounce?ref=list-gs&st=gs', 'Safaris');

-- --------------------------------------------------------

--
-- Table structure for table `safaribookings`
--

DROP TABLE IF EXISTS `safaribookings`;
CREATE TABLE IF NOT EXISTS `safaribookings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parkName` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `whatsapp` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `idNumber` varchar(50) NOT NULL,
  `dateOfAdventure` date NOT NULL,
  `participants` int(11) NOT NULL,
  `duration` varchar(50) NOT NULL,
  `vehicle` varchar(50) NOT NULL,
  `nationalPark` varchar(50) NOT NULL,
  `bookingDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `safaribookings`
--

INSERT INTO `safaribookings` (`id`, `parkName`, `price`, `fullName`, `email`, `whatsapp`, `address`, `idNumber`, `dateOfAdventure`, `participants`, `duration`, `vehicle`, `nationalPark`, `bookingDate`) VALUES
(1, 'Yala National Park', '199.00', 'sda', 'miningsuppa@gmail.com', '234', 'fdssssssss', '3424242424242424242424242', '2024-05-31', 43, 'Full-day', 'Tata', 'Udawalawa National Park', '2024-06-17 06:03:43'),
(2, 'Yala National Park', '199.00', 'sfddddddd', 'miningsuppa@gmail.com', '324444444', 'fdsssssssssssss', '342222222', '2024-05-31', 4, 'Full-day', 'Tata', 'Wilpattu National Park', '2024-06-17 06:06:38'),
(3, 'Yala National Park', '199.00', 'sfdfdfdfdfdfdfd', 'miningsuppa@gmail.com', '1233', 'sdf', '312', '2024-05-30', 2, 'Full-day', 'Tata', 'Kumana National Park', '2024-06-17 06:09:12'),
(4, 'Yala National Park', '199.00', 'sfdfdfdfdfdfdfd', 'miningsuppa@gmail.com', '1233', 'sdf', '312', '2024-05-30', 2, 'Full-day', 'Tata', 'Kumana National Park', '2024-06-17 06:10:10'),
(5, 'Yala National Park', '199.00', 'sfdfdfdfdfdfdfd', 'miningsuppa@gmail.com', '1233', 'sdf', '312', '2024-05-30', 2, 'Full-day', 'Tata', 'Kumana National Park', '2024-06-17 06:10:54'),
(6, 'Wilpattu', '299.00', 'dffs', 'mininsdsdgsuppa@gmail.com', '4322222', 'dsfds', '32444444', '2024-06-05', 32, 'Full-day', 'Tata', 'Udawalawa National Park', '2024-06-17 06:12:11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `username`, `password`) VALUES
(1, 'minsa', 'layana', 'minsa10', '$2y$10$FHA58xgV52ShYhgD..3vTe5RVaNrY3Ir1Ruc298eKpIRT5VSJgRBy'),
(2, 'devu', 'sene', 'devu123', '$2y$10$uaW7D6d/1sKjJ979hUJwcejedVlXqQC/3nIiS1bIJp7RDYyBEi1Te'),
(3, 'devu', 'sene', 'devu123', '$2y$10$NYI579jiG1PzQkjb.0BWluJp3BREEpkAQWQqSqWtmLX5JXd4fJ3Fy'),
(4, 'kavi', 'fdjhk', 'minsa12', '$2y$10$Vd6fQOmPrAPOU7U2WAaYW.WrlZlH4G672mnlmSHh8A/iXGMsp.KJW'),
(5, 'supun', 'ravi', 'supun', '$2y$10$8q2ooOcNLKgA7emss2.zdeIogpMV.evm7K.QXLxmThIFzLqs5HkEq');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
