-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 12, 2018 at 08:43 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `homeway`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `bId` int(11) NOT NULL,
  `rId` int(11) NOT NULL,
  `uId` varchar(50) NOT NULL,
  `dateFrom` date NOT NULL,
  `dateTo` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`bId`, `rId`, `uId`, `dateFrom`, `dateTo`) VALUES
(1, 1, 'w', '2018-12-22', '2018-12-29'),
(2, 3, 'w', '2018-12-22', '2018-12-22'),
(3, 3, 'w', '2018-12-12', '2018-12-26'),
(4, 1, 'w', '2018-12-14', '2018-12-22'),
(5, 1, 'w', '2018-12-15', '2018-12-14'),
(6, 1, 'w', '2018-12-12', '2018-12-14'),
(7, 1, 'w', '2018-12-21', '2018-12-22'),
(8, 1, 'w', '2018-12-15', '2018-12-21'),
(9, 1, 'w', '2018-12-01', '2018-12-20'),
(10, 1, 'w', '2018-12-12', '2018-12-19'),
(11, 3, 'w', '2018-12-20', '2018-12-22'),
(12, 3, 'w', '2018-12-20', '2018-12-26'),
(13, 3, 'w', '2018-12-14', '2018-12-18'),
(14, 3, 'w', '2018-12-14', '2018-12-24'),
(15, 3, 'w', '2018-12-12', '2018-12-04'),
(16, 3, 'w', '2018-12-20', '2018-12-25'),
(17, 5, 'w', '2018-12-12', '2018-12-31'),
(18, 3, 'w', '2018-12-11', '2018-12-11'),
(19, 3, 'w', '2018-12-13', '2018-12-20'),
(20, 3, 'bestkadeem', '2019-03-04', '2019-03-20'),
(21, 4, 'bestkadeem', '2018-12-13', '2018-12-27');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `rId` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` double NOT NULL,
  `img_sml` varchar(200) NOT NULL,
  `img_lrg` varchar(200) NOT NULL,
  `location` varchar(100) NOT NULL,
  `descripLrg` text NOT NULL,
  `guest_access` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`rId`, `title`, `description`, `price`, `img_sml`, `img_lrg`, `location`, `descripLrg`, `guest_access`) VALUES
(1, 'Small house in central Paris', 'Small house in a courtyard. In Paris center of Paris, 1 minute walk of the subway Réaumur-Sébastopol (line 3 and line 4), at 2 minutes of the subway Strasbourg-Saint-Denis (line 8, line 9) and at 5 minutes of the subway Arts and Métiers (line 11). With the intersection of 2nd, 3rd and 10th district.', 100, '../images/rooms/1/1smll.jpg', '../images/rooms/1/1lrg.jpeg', 'Paris', 'Walks in the district and its roofed passageways: very good restaurants, bars, a market of fresh produce each day, and all the shops which you will be able to need (bakery, butchery, pastry making, grocer, supermarket, pharmacy, banks, early product, fishmonger, cheesemonger…) as well as very many theatres.\r\n\r\nIn the middle of the district of the Grand Boulevard, you are within walking distance of the Marais, the Halles, the street Montorgueil, the Market of the red children, the Place of the Republic. And direct access to Pigalle, Les Grands Magasins (Galeries Lafayette), l\'Ile de la cité, l\'Ile saint Louis, German Saint des Près, the Bastille.', 'Guests will have access to the apartment, bedroom, bathroom: toilet, sink and shower, living room, kitchen, and balcony. As well as the building amenities: BBQ area and gym.'),
(2, 'Cozy Room in Paris', 'One spacious room in a large modern apparment in the center of Paris, near Georges Pompidou Center. Very calm and luminous room located in one of the oldest streets in Paris .Lots of storage space in the room and a private bath with walk-in shower', 80, '../images/rooms/1/2sml.jpeg', '../images/rooms/1/2lrg.jpg', 'Paris', 'The apartment is very large, spacious and quiet.Comfortable double bed in the room (sheets included) .Spacious bathroom with walk-in shower, towels and bathroom mats included.', 'Guests will have access to the apartment, bedroom, bathroom: toilet, sink and shower, living room, kitchen, and balcony. As well as the building amenities: BBQ area and gym.'),
(3, 'Studio on Dundas West Toronto!', 'This studio is located in the heart of Toronto\'s Dundas West. It was featured in Toronto Life\'s airbnb of week! From her you can walk to bars, cafes, restaurants, shops and clubs. Public transportation, buses, street cars right in front of the building.', 75, '../images/rooms/2/1sml.jpeg', '../images/rooms/2/1lrg.jpg', 'Toronto', 'This space is on the 3rd floor of a charming store front building on Dundas West. It features exposed brick walls, rustic wood ceiling and floors.', 'Guests will have access to the apartment, bedroom, bathroom: toilet, sink and shower, living room, kitchen, and balcony. As well as the building amenities: BBQ area and gym.'),
(4, 'Stylish Loft in the heart of Toronto.', 'The suite is a self contained one bedroom loft style apartment in a newly renovated 120+ year old Victorian home. Located in the heart of Roncesvalles Village in Toronto\'s vibrant West End, the suite is conveniently located close to multiple transit access points. It is just a short walk to Queen St W or Roncesville Ave and all the shops, restaurants and bars they have to offer . Maple hardwood floors, 12\' ceiling, and modern finishes characterize this stylish suite.\r\n\"Free high-speed WIFI\"', 120, '../images/rooms/2/2sml.jpg', '../images/rooms/2/2lrg.jpg', 'Toronto', 'The apartment is in a newly renovated 100+ year old Victorian home in the heart of Roncesvalles Village in Toronto\'s vibrant West End. Maple hardwood floors, 12\' ceilings, and modern finishes characterize this private suite.\r\n\r\nYour own place! A separate keycode entrance to a suite thats strictly used for AirBnB, no one else\'s personal belongings to deal with. The apartment is professionally cleaned between stays! \r\nThere are two boutique art galleries, a coffee shop, a convenience store (open everyday 8am-10pm), and \"Sama\" yoga studio just steps from the front door. A ten minute walk will bring you to trendy Queen St West, the quiet solitude of High Park, several jogging/biking trails, diverse Roncesvalles Avenue and Sunnyside Pavilion /Beach on the shores of Lake Ontario.\r\n\r\nThis quiet residential neighbourhood is comprised of mostly young families and is extremely safe to walk day and night.\r\n\r\nThe apartment has all stainless steel appliances and is stocked with all the cookware you need to prepare a gourmet meal!\r\n\r\nThere is a large private patio just off the kitchen; a perfect place to enjoy your morning coffee or to just hang out and take advantage of the complementary high-speed WIFI.\r\n\r\nWe try to be as green as possible and as such all power for the house is supplied with renewable energy through BullFrog power.', 'Guests will have access to the apartment, bedroom, bathroom: toilet, sink and shower, living room, kitchen, and balcony. As well as the building amenities: BBQ area and gym.'),
(5, 'Private Room Downtown Toronto', 'The apartment is modern, newly renovated, features a long outdoor porch, a spacious living area. Well maintained and super clean.\r\n\r\nThere are building amenities BBQ area outdoors, Gym, 24hr concierge.', 98, '../images/rooms/2/3sml.jpeg', '../images/rooms/2/3lrg.jpg', 'Toronto', 'Location!! Modern, clean and close to everywhere downtown Toronto.', 'Guests will have access to the apartment, bedroom, bathroom: toilet, sink and shower, living room, kitchen, and balcony. As well as the building amenities: BBQ area and gym.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `username`, `password`) VALUES
(44, 'Kadeem', 'Best', 'w', 'f1290186a5d0b1ceab27f4e77c0c5d68'),
(45, 'h', 'h', 'e', 'e1671797c52e15f763380b45e841ec32'),
(46, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(47, 'Himank', 'Sahni', 'sahnihim', '76d80224611fc919a5d54f0ff9fba446'),
(48, 'Yukti', 'sahni', 'sahniyukti2', '65b2a23d12f8f57ae107d2801f985674'),
(49, 'sajad', 's', 'sajad', '7694f4a66316e53c8cdd9d9954bd611d'),
(50, 'saajad', 'q', 'sajjad', '7694f4a66316e53c8cdd9d9954bd611d'),
(51, 'kadeem', 'best', 'bestkadeem', '7694f4a66316e53c8cdd9d9954bd611d');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`bId`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`rId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `bId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `rId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
