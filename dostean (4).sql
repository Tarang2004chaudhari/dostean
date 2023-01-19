-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2023 at 05:20 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dostean`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(2) NOT NULL,
  `name` varchar(255) NOT NULL,
  `upi_id` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `upi_id`, `email`, `phone`, `password`) VALUES
(1, 'Dostean', 'q871865527@ybl', 'krupalchaudhari2607@gmail.com', '7043165793', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `images` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `images`, `date`) VALUES
(2, 'IMG-20230112-WA0052.jpg', '2023-01-18'),
(3, 'IMG-20230112-WA0055.jpg', '2023-01-18'),
(4, 'IMG-20230112-WA0054.jpg', '2023-01-18'),
(5, 'IMG-20230112-WA0053.jpg', '2023-01-18'),
(6, 'IMG-20230112-WA0056.jpg', '2023-01-18'),
(7, 'IMG-20230112-WA0094.jpg', '2023-01-18'),
(8, 'IMG-20230112-WA0093 (1).jpg', '2023-01-18'),
(9, 'IMG-20230112-WA0092.jpg', '2023-01-18'),
(10, 'IMG-20230112-WA0091.jpg', '2023-01-18'),
(11, 'IMG-20230112-WA0090.jpg', '2023-01-18'),
(12, 'IMG-20230112-WA0089.jpg', '2023-01-18'),
(13, 'IMG-20230112-WA0088.jpg', '2023-01-18'),
(14, 'IMG-20230112-WA0087 (1).jpg', '2023-01-18'),
(15, 'IMG-20230112-WA0086 (1).jpg', '2023-01-18'),
(16, 'IMG-20230112-WA0086 (1).jpg', '2023-01-18'),
(17, 'IMG-20230112-WA0084 (1).jpg', '2023-01-18'),
(18, 'IMG-20230112-WA0083.jpg', '2023-01-18'),
(19, 'IMG-20230112-WA0082 (1).jpg', '2023-01-18'),
(20, 'IMG-20230112-WA0081 (2).jpg', '2023-01-18'),
(21, 'IMG-20230112-WA0088.jpg', '2023-01-18'),
(22, 'IMG-20230112-WA0060.jpg', '2023-01-18'),
(23, 'IMG-20230112-WA0061.jpg', '2023-01-18'),
(24, 'IMG-20230112-WA0062.jpg', '2023-01-18'),
(25, 'IMG-20230112-WA0063 (1).jpg', '2023-01-18'),
(26, 'IMG-20230112-WA0066.jpg', '2023-01-18'),
(27, 'IMG-20230112-WA0071.jpg', '2023-01-18'),
(28, 'IMG-20230112-WA0075.jpg', '2023-01-18'),
(29, 'IMG-20230112-WA0077.jpg', '2023-01-18');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `d_name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL,
  `ingridient` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Special_dish` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `d_name`, `price`, `images`, `ingridient`, `type`, `Description`, `Special_dish`) VALUES
(6, 'Mocktail', '119', 'WatermelonMojitoMocktail3 (1).jpg', 'Watermelon Mojito ', 'Drink', 'Refreshment and tummy cooler comes together ', 0),
(7, 'Mocktail', '119', 'orange.jpeg', 'Orange Mojito ', 'Drink', 'Tangy flavor of orange along with mint', 0),
(8, 'Mocktail', '159', 'berry.jpeg', 'Berry Lemonade ', 'Drink', 'Cranberry flavor and lemonade combo', 0),
(9, 'Mocktail', '159', 'orange chilly.jpeg', 'Chilly Orange ', 'Drink', 'Need a spicy touch? lets try it ', 0),
(10, 'Mocktail', '209', 'beer.jpeg', 'Beer Mocktail', 'Drink', ' Beer flavored Non alcoholic drink', 0),
(11, 'Mocktail', '119', 'kkhatta.jpeg', 'Kala Khatta', 'Drink', 'Original kala khatta with the twist of mocktail ', 0),
(12, 'Mocktail', '119', 'lemnonade.jpeg', 'Masala Lemonade', 'Drink', 'Refreshing lemonade ', 0),
(13, 'Mocktail', '119', 'kaam.jpeg', 'Kaccha Aam ', 'Drink', '  Cool mocktail  with Raw mango flavor', 0),
(14, 'Mocktail', '119', 'imli.jpeg', 'Imlli ', 'Drink', 'Bachpan ki yaado ke saath !!', 0),
(15, 'Shakes', '249', 'nshake.jpeg', 'Nutella Shake', 'Drink', ' ', 0),
(16, 'Shakes', '219', 'oshake.jpeg', 'Oreo Shake ', 'Drink', ' ', 0),
(17, 'Shakes', '239', 'kshake.jpeg', 'Kitkat Shake', 'Drink', ' ', 0),
(18, 'Shakes', '219', 'ccshake.jpeg', 'Chocolate Chips ', 'Drink', ' ', 0),
(19, 'Shakes', '199', 'rfulda.jpeg', 'Rose Faluda ', 'Drink', '  ', 0),
(20, 'Tea', '30/45', 'download.jpeg', 'Make Ur Own Tea', 'Drink', '(Ginger, Pudina, Elaichi) ', 0),
(21, 'Tea', '30/45', 'skchai.jpeg', 'Sukoon Wali Chai ', 'Drink', ' ', 1),
(22, 'Tea', '50', 'cchai.jpeg', 'Chocolate chai ', 'Drink', ' ', 0),
(23, 'Tea', '65', 'gt.jpeg', 'Green Tea', 'Drink', ' ', 1),
(24, 'Coffee', '35', 'bcoffee.jpeg', 'Black Coffee', 'Drink', ' ', 0),
(25, 'Coffee', '35', 'milk c.jpeg', 'Milk Coffee', 'Drink', ' ', 0),
(26, 'Cofee', '65', 'cccoff.jpeg', 'Chocolate coffee', 'Drink', ' ', 0),
(27, 'Coffee', '60', 'cup.jpeg', 'Hot Chocolate with a Biscuit Cup ', 'Drink', ' ', 1),
(28, 'Coffee', '70', 'hc.jpeg', 'Classic Hot Chocolate ', 'Drink', ' ', 0),
(29, 'Bevereges', '129', 'ltea.jpeg', 'Lemon iced Tea', 'Drink', ' ', 0),
(30, 'Bevereges', '138', 'pitea.jpeg', 'Peach Ice Tea ', 'Drink', ' ', 0),
(31, 'Bevereges', '38', 'bt.jpeg', 'Buttermilk', 'Drink', ' ', 0),
(32, 'Soup', '99', 'manchow soup.jpeg', 'Manchow ', 'Drink', 'Flavored classic chinese soup', 0),
(33, 'Soup', '99', 'hns.jpeg', 'Hot N Sour ', 'Drink', 'spiciness  of a chilly and tangy flavor', 0),
(34, 'soup', '99', 'lc soup.jpeg', 'Lemon Coriander', 'Drink', ' Refreshing flavor with bite of coriander and garlic ', 0),
(35, 'soup', '119', 'gsoup.jpeg', 'Burnt Garlic Soup', 'Drink', 'Mid spicy soup accomplished flavor of\r\nburnt Garlic', 1),
(36, 'CONTINENTAL', '119', 'mexican hxil.jpeg', 'Mexican Chilly Beans', 'Breakfast', 'Soup load with Mexican flavor and bite of\r\nnachos', 1),
(37, 'CONTINENTAL', '99', 'tom.jpeg', 'Cream of Tomato', 'Breakfast', 'mild taste classic creamy tomato soup', 0),
(38, 'CONTINENTAL', '229', 'cballs.jpeg', 'Corn Cheese Ball', 'Breakfast', 'Roasted corn stuff with cheese and spices.\r\n', 0),
(39, 'CONTINENTAL', '209', 'veg.jpeg', 'Veg Croquettes', 'Breakfast', 'Chopped exotic vegetables stuff with cheese\r\nand potatoes', 0),
(40, 'CONTINENTAL', '249', 'arbal.jpeg', 'Aranchini Balls', 'Breakfast', 'deep fried balls stuff with exotic vegetables\r\nand cheese', 0),
(41, 'CONTINENTAL', '279', 'download.jpeg', 'Baffalo Cottage Cheese', 'Lunch ', 'Deep fried paneer toasted in famous baffalo\r\nsauce', 0),
(42, 'CONTINENTAL', '279', 'apnnwe staay.jpeg', 'Paneer Satay', 'Lunch ', 'Pan toasted paneer and vegetables serve\r\nwith house sauce\r\n', 0),
(43, 'CONTINENTAL', '99', 'khic.jpeg', 'Masala Khichiya', 'Lunch ', 'Khichiya papad with fusion of Indian and\r\nContinental style', 0),
(44, 'CONTINENTAL', '99', 'KURKIRI BITES.jpg', 'Kurkuri bites', 'Lunch ', 'Nachos served with fusion style of Indian and\r\nMexican style along with cheese sauce\r\n', 0),
(45, 'CONTINENTAL', '159', 'bean nachos.jpeg', 'Beans Nachos', 'Lunch ', 'Nachos served with Mexican stuffing and sour cream.', 0),
(46, 'CONTINENTAL', '249', 'Nacho-Cheese-Sauce.jpg', 'Cheese Nachos', 'Lunch ', 'Nachos stuff with two type of cheese sauce', 0),
(47, 'CONTINENTAL', '239', '18518-Cottage_Cheese_Nachos.webp', 'Cottage cheese taxo nachos', 'Lunch ', 'Nachos served with Cottage cheese guacamole', 0),
(48, 'CONTINENTAL', '249', 'quesedilla.jpg', 'Quesadilla', 'Lunch ', 'Crunchy tortilla stuff with fresh vegies\r\nMexican marinating and cheese', 0),
(49, 'FRIES', '219', 'chatpat.jpeg', 'Peri lain-chatpata peri', 'Lunch ', 'Fries with the choice of flavor\r\n', 0),
(50, 'FRIES', '129', 'cheese fries.jpg', 'Cheesy Cheese loaded fries', 'Lunch ', ' ', 0),
(51, 'FRIES', '129', 'chilli garlic.webp', 'Chilly Garlic Fries', 'Lunch ', 'Fries toasted with garlic and chilly', 0),
(52, 'BREAD', '149', 'gb.webp', 'paneer makhni garlic bread', 'Lunch ', 'Makhni flavor cottage cheese topped on garlic bread.\r\n', 0),
(53, 'FRIES', '138', 'crostini.jpeg', 'Crostini - Two Flavors', 'Lunch ', 'Two Flavor bread topped with cheese', 0),
(54, 'FRIES', '189', 'Garlic-Bread-scaled-1.jpg', 'Spicy Garlic Bread', 'Lunch ', 'Bread topped with in house special sprinklers', 0),
(55, 'BREAD', '199', 'cheese garlic bread.jpg', 'Cheese Garlic Bread', 'Lunch ', ' ', 0),
(56, 'FRIES', '169', 'Cheese-Bread-sq.jpg', 'Classic Cheese Bread', 'Lunch ', ' ', 0),
(57, 'BREAD', '149', 'OTC.jpg', 'OTC Garlic Bread', 'Lunch ', ' ', 0),
(58, 'BREAD', '149', 'OTC.jpg', 'OTC Garlic Bread', 'Lunch ', ' ', 0),
(59, 'BREAD', '209', 'pulled.webp', 'Pulled Cheese Garlic Bread', 'Lunch ', ' ', 0),
(60, 'BREAD', '319', 'hummus.jpeg', 'Hummus Platter', 'Lunch ', 'Classic Lebne Platter served with different\r\ntype of hummus and accomplishments\r\n', 0),
(61, 'LEBANESE', '319', 'falafel-plate.jpg', 'Falafal Platter', 'Lunch ', 'Platter served with falafel hummus and accomplishments', 0),
(62, 'WRAPS', '339', 'veg wrap.jpeg', 'Healthy Veg wrap', 'Lunch ', 'Best wrap for the diet person lots of\r\nvegetables and less of carb', 0),
(63, 'WRAPS', '339', 'Burrito.JPG', 'Mexican Burrito Wrap', 'Lunch ', 'Wrap stuff with Mexican rice and cheese top vegetables', 0),
(64, 'WRAPS', '199', 'paneer.jpg', 'Tandoori paneer shawarma wrap', 'Lunch ', 'Shawarma with a twist taste and Indian spice', 0),
(65, 'WRAPS', '179', 'mushroom.jpeg', 'Mushroom Wrap', 'Lunch ', 'Sautéed Mushroom stuff along with toasted vegies and cheese', 0),
(66, 'WRAPS', '219', 'falafel.jpeg', 'Falafel Wrap', 'Lunch ', 'Classic wrap stuff with Falafel and hummus', 0),
(67, 'WRAPS', '239', 'falafel pocket.jpeg', 'Falafel Pocket', 'Lunch ', 'Fresh cut vegies stuff in pita pocket along with hummus and sour cream', 0),
(68, 'SANDWICHES', '69', 'vegetable-sandwich.jpg', 'Classic Veg', 'Lunch ', 'Freshly cut veggies sandwich', 0),
(69, 'SANDWICHES', '89', 'veg cheese.jpeg', 'Veg Cheese', 'Lunch', 'Freshly cut veggies sandwich like mumbai with cheese', 0),
(70, 'SANDWICHES', '189', 'masala.jpg', 'Masala Grill ', 'Lunch ', 'Masala Cheese Grill Sandwich flavoured spicy and chatpata', 0),
(71, 'SANDWICHES', '48', 'bb.jpeg', 'Bread Butter-Jam, Chatni', 'Breakfast', 'Craving cutter with choice of flavors', 0),
(72, 'SANDWICHES', '149', 'pp.jpeg', 'Peri Peri Toast', 'Breakfast', 'Chopped vegetables coated with spicy\r\nmarinating and load with cheese\r\n', 0),
(73, 'SANDWICHES', '159', 'pt.jpeg', 'Panner toast', 'Breakfast ', 'special in house sauce coated with small\r\ncut paneer and vegies\r\n', 0),
(74, 'SANDWICHES', '179', 'dostsp.jpeg', 'Dostea Special Toast Sandwich', 'Breakfast', 'Melted cheese with sautéed vegies stuff\r\nbetween crunchy breads', 0),
(75, 'BUNS', '29', 'pbun.jpeg', 'Plain Maska Bun', 'Breakfast', 'Best combination with tea', 0),
(76, 'BUNS', '48', 'mbun.jpeg', 'Masala Maska Bun ', 'Breakfast', 'Bun servers with lots of butter and Indian\r\nspecies', 0),
(77, 'BUNS', '48', 'ppbun.jpeg', 'Peri Peri Maska bun', 'Breakfast', 'Sweetness of bun along with in house\r\nspecial spice', 0),
(78, 'BUNS', '48', 'tbun.jpeg', 'Tandoori Maska Bun', 'Breakfast', ' For Indian taste lovers', 0),
(79, 'PIZZA', '259', 'mp.jpeg', 'Margarita', 'lunch/ dinner', 'Classic cheese Pizza topped with\r\nTomato and basil\r\n', 0),
(80, 'PIZZA', '269', 'ppi.jpeg', 'Pepper Pizza', 'Lunch /dinner', '5 types of peppers on pizza', 1),
(81, 'PIZZA', '269', 'GP.jpeg', 'Garden Fresh', 'lunch/ dinner', 'Loaded  with full exotic vegetables', 1),
(82, 'PIZZA', '319', 'ppp.jpeg', 'Peri Peri Paneer Pizza', 'lunch/dinner', 'Eat spicy pizza that  is the best choice for you\r\n', 1),
(83, 'PIZZA', '319', 'ptp.jpeg', 'Paneer Tikka Pizza', 'lunch/dinner', 'Paneer on top along with Indian spices flavor\r\n', 0),
(84, 'PIZZA', '269', 'hpp.jpeg', 'Hawaiian Pizza', 'lunch/ dinner', 'Jalapeno&  Pineapple topped on pizza\r\n', 0),
(85, 'PIZZA', '319', 'mpp.jpeg', 'Mexican pizza', 'lunch/ dinner', 'Fusion of Italian and Mexican  that taste  wonderful together', 0),
(86, 'PASTA', '259', 'cpp.jpeg', 'Creamy cheese', 'lunch/ dinner', 'Classic béchamel cheese sauce pasta\r\nwith exotic vegies', 0),
(87, 'PASTA ', '259', 'res.jpeg', 'Pica to Redasto', 'lunch/ dinner', 'Combination of two sauce with mid\r\nspicy n cheese flavor', 0),
(88, 'PASTA', '249', 'tp.jpeg', 'Tomatino Basil', 'lunch/ dinner', 'Classic arrabiata sauce flavored with basil', 0),
(89, 'BAKED DISH', '269', 'csl.jpeg', 'Corn Spinach Lasagna', 'lunch/ dinner', 'Roasted corn and spinach baked with lots of\r\ncheese', 0),
(90, 'BAKED DISH', '289', 'pml.jpeg', 'Paneer Makhni Lasagna', 'lunch/ dinner', 'Fusion of Indian and Italian food baked dish', 1),
(91, 'BAKED DISH ', '289', 'envh.jpeg', 'Enchiladas', 'lunch/ dinner', 'Mexican authentic backed dish', 1),
(92, 'CONTINENTAL', '239', 'crice.jpeg', 'Rice', 'lunch/dinner', '  ', 0),
(93, 'RICE', '259', 'mex b.jpeg', 'Mexican Burrito Bowl', 'lunch/ dinner', 'Mexican rice served with curry n salsa', 0),
(94, 'RICE', '249', 'download (1).jpeg', 'Cilantro Rice With Garlic Sauce', 'lunch/ dinner', 'Flavored cilantro rice served with cheese\r\nburnt garlic sauce', 1),
(95, 'RICE', '249', 'download (2).jpeg', 'Herb rice with Cheese Sauce', 'lunch/ dinner', 'Different flavor herbs served with cheese sauce', 0),
(96, 'CHINESE RICE', '189', 'download (3).jpeg', 'Fried Rice', 'lunch/ dinner', 'Classic aromatic chinese rice', 0),
(97, 'CHINESE RICE', '199', 'download (4).jpeg', 'Schezwan Rice', 'lunch/ dinner', 'Oriental spicy rice with vegetables\r\n', 0),
(98, 'CHINESE RICE', '229', 'download (5).jpeg', 'Burnt Garlic', 'lunch/ dinner', 'Aroma and taste of burnt garlic in oriental rice', 0),
(99, 'CHINESE RICE', '279', 'download (6).jpeg', 'Triple Rice', 'lunch/dinner', 'Three type of rice along with veg exotic gravy', 1),
(100, 'NOODLES', '169', 'download (7).jpeg', 'Hakka Noodles', 'lunch/ dinner', 'Classic aromatic Chinese noodles\r\n', 0),
(101, 'NOODLES', '189', 'download (8).jpeg', 'Burnt Garlic Noodles', 'lunch/ dinner', 'Noodles toasted Vegetables with burnt garlic', 0),
(102, 'NOODLES', '179', 'download (9).jpeg', 'Schezwan Noodles', 'lunch/ dinner', 'Spicy aromatic noodles', 0),
(103, 'CHINESE', '199', 'download (10).jpeg', 'Gravy Manchurian', 'lunch/ dinner', 'Vegetable balls served with classic\r\nManchurian gravy', 1),
(104, 'CHINESE ', '239', 'download (11).jpeg', 'Exotic Veg in Garlic Sauce ', 'lunch/ dinner', 'Roasted Veg served with Garlic sauce gravy', 0),
(105, 'CHINESE', '239', 'download (12).jpeg', 'Panner Chilly Gravy', 'lunch/ dinner', 'Coated Fried Paneer floated in rich gravy', 0),
(106, 'MAGGIE', '69', 'download (13).jpeg', 'Veg Masala', 'Breakfast', 'Classic Maggie with vegies and spice', 0),
(107, 'MAGGIE', '69', 'download (15).jpeg', 'Double Masala', 'Breakfast', 'Maggie with double masala flavor n veggies', 0),
(108, 'MAGGIE', '89', 'download (16).jpeg', 'Exotic Maggie', 'Breakfast', 'Chopped exotic veggies and spices', 0),
(109, 'MAGGIE', '89', 'download (17).jpeg', 'Chilly garlic Maggie', 'lunch/dinner', 'Spicy flavor Maggie', 0),
(110, 'MAGGIE', '89', 'download (18).jpeg', 'BBQ Maggie', 'lunch/dinner', 'Maggie with veggies and barbeque flavor', 0),
(111, 'INDIAN CURRY', '249', 'download (19).jpeg', 'Paneer butter masala', 'lunch/ dinner', 'Rich Makhni Gravy with mild taste', 0),
(112, 'INDIAN CURRY', '259', 'download (20).jpeg', 'Paneer Chatpata', 'lunch/ dinner', 'Spicy and tangy cottage cheese serve\r\nwith vegetables\r\n', 0),
(113, 'INDIAN CURRY', '269', 'download (21).jpeg', 'Paneer Angara', 'lunch/dinner', 'Spicy paneer with Julian vegetables', 0),
(114, 'INDIAN CURRY', '199', 'download (22).jpeg', 'Mix Veg', 'lunch/dinner', 'Onion gravy with bunch of vegies\r\n', 0),
(115, 'INDIAN CURRY', '219', 'download (23).jpeg', 'Veg Khima', 'lunch/dinner', 'Mid Spicy makhni gravy with fine\r\nchopped vegetables', 0),
(116, 'INDIAN CURRY', '259', 'download (24).jpeg', 'Lasooni Kofta', 'lunch/ dinner', 'Rich brown gravy with flavor of burnt garlic', 0),
(117, 'INDIAN CURRY', '189', 'download (25).jpeg', 'Jeera Aloo', 'lunch/ dinner', 'Boiled aloo with cumin n chilly tadka', 0),
(118, 'INDIAN CURRY', '199', 'download (26).jpeg', 'Dal Tadka', 'lunch/ dinner', 'Dal toped with red paprika and butter', 0),
(119, 'INDIAN RICE ', '99', 'download (27).jpeg', 'Jeera Rice', 'lunch/ dinner', 'Hot aromatic rice with cumin tadka', 0),
(120, 'INDIAN RICE', '149', 'download (28).jpeg', 'Veg Pulao', 'lunch/ dinner', 'Mix veg pulao with aromatic flavor', 0),
(121, 'INDIAN RICE', '199', 'download (29).jpeg', 'Veg Biriyani', 'lunch/ dinner', 'Desi aromatic rice with veg gravy combination\r\n', 0),
(122, 'INDIAN RICE', '48', 'download (30).jpeg', 'Veg Raita', 'Lunch /dinner', 'Chopped vegetables and aromatic spice', 0),
(123, 'INDIAN-BREAD', '29', 'download (31).jpeg', 'Malabar Paratha', 'lunch/dinner', 'South Indian style paratha', 0),
(124, 'INDIAN-BREAD', '29', 'download (32).jpeg', 'Tava Roti', 'lunch/dinner', 'Desi tava roti home style', 0),
(125, 'INDIAN CURRY', '249', 'Paneer butter masala.jpg', 'Paneer butter masala', 'Dinner', 'Rich makhni Gravy with a mild taste', 0),
(126, 'INDIAN CURRY', '259', 'Paneer Chapata.jpg', 'Paneer Chapata', 'Dinner', 'spicy and tangy cottage cheese served with vegetable', 0),
(127, 'INDIAN CURRY', '269', 'Paneer Angara.jpg', 'Paneer Angara', 'Dinner', 'Spicy panner with Julian vegetablees', 0),
(128, 'INDIAN CURRY', '199', 'Mix Veg.jpg', 'Mix Veg', 'Dinner', 'Onion gravy with a bunch of veggies', 0),
(129, 'INDIAN CURRY', '219', 'veg Khima.jpg', 'veg Khima ', 'Dinner', 'Mid-spicy makhani gravy with fine chopped vegetables', 0),
(130, 'INDIAN CURRY', '259', 'Lahsooni kofta2.jpg', 'Lahsooni kofta', 'Dinner', 'Rich brown gravy with the flavor of burnt garlic', 0),
(131, 'INDIAN CURRY', '259', 'Jeera Aloo.jpg', 'Jeera Aloo', 'Dinner', 'Boiled  aloo with cumin n chilly tadka', 0),
(132, 'INDIAN CURRY', '199', 'Dal Tadka.jpg', 'Dal Tadka', 'Breakfast ', 'Dal topped with red paprika and butter', 0),
(133, 'MAGGIE', '69', 'Veg Masala.jpg', 'Veg Masala', 'Breakfast ', 'classic maggie with vegies and spice ', 0),
(134, 'MAGGIE', '69', 'Double masala.jpg', 'Double masala', 'Breakfast ', 'Maggi with double masala flavor n veggies', 0),
(135, 'MAGGIE', '89', 'Exotic Maggie.jpg', 'Exotic Maggie ', 'Breakfast ', 'Chopped exotic veggies and spices ', 0),
(136, 'MAGGIE', '89', 'chilly garlic maggie.jpg', 'chilly garlic maggie', 'Dinner', 'spicy flavor maggie', 0),
(137, 'MAGGIE', '89', 'bbq Maggie.jpg', 'bbq Maggie', 'Breakfast ', 'maggie with veggies and barbeque flavor', 0),
(142, 'DESSERT ', '119', 'cake-brownies-500x500.webp', 'Mud Brownie', 'Dinner', ' ', 0),
(143, 'DESSERT ', '199', 'Sizzling  Brownie.jpg', 'Sizzling  Brownie', 'Lunch', ' ', 1),
(144, 'DESSERT ', '139', 'Pan cake.jpg', 'Pan cake', 'Breakfast ', '  ', 0),
(145, 'DESSERT ', '119', 'Waffle Chocolate.jpg', 'Waffle Chocolate ', 'Breakfast ', ' ', 1),
(146, 'SALAD', '199', 'Greek farmer salad.jpg', 'Greek farmer salad', 'Dinner', 'Fresh-cut Vegies coated with in-house flavor oil topped with cheese and olives', 0),
(147, 'SALAD', '199', 'Classic  Ceasar salad.jpg', 'Classic  Ceasar salad', 'Breakfast ', 'Herb crotons and ice burg coated with Cesar sauce topped with parmesan cheese', 0),
(148, 'SALAD', '199', 'Sauteed cottage cheese.jpg', 'Sauteed cottage cheese', 'Breakfast ', 'High-protein salad is best for the healthy eater ', 0),
(150, 'SIZZLER', '499', 'Mexican Sizzler.jpg', 'Mexican Sizzler ', 'Dinner', 'Mexican rice served with curry,party, sauteed veg, and fries', 0),
(151, 'SIZZLER', '519', 'Herb  Sizzler.avif', 'Herb  Sizzler ', 'Dinner', 'Aromatic flavor herbs served with cheese sauce, sauteed veg, and fries', 0),
(152, 'SIZZLER', '449', 'Oriental   Sizzler.jpg', 'Oriental   Sizzler ', 'Breakfast ', 'oriental  style sizzler served rice, cottage cheese Gravy, sauteed veg, and fries ', 0),
(153, 'SIZZLER', '539', 'Pasta in Pasta.jpg', 'Pasta in Pasta ', 'Breakfast ', 'Two-flavor pasta in   one plate along with garlic bread, sauteed veg, and fries', 0);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `descrption` varchar(255) NOT NULL,
  `rating` int(3) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `name`, `descrption`, `rating`, `date`) VALUES
(1, 'Krupal', 'nanj', 5, '2023-01-20'),
(2, 'Krupal', 'nanj', 4, '2023-01-17'),
(3, 'Krupal', 'abba', 5, '2023-01-19'),
(4, 'kakma', 'abab', 2, '2023-01-17'),
(5, 'nanj', 'anal', 1, '2023-01-18'),
(6, '', '', 0, '2023-01-19'),
(7, 'titans', 'Had some really delicious food :)', 0, '2023-01-19'),
(8, 'TITANS', 'Had a great time:)', 0, '2023-01-19'),
(9, 'DOstesan', 'bixahi', 5, '2023-01-19'),
(10, 'nivisha', 'good', 5, '2023-01-19'),
(11, 'nivisha', 'good', 5, '2023-01-19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
