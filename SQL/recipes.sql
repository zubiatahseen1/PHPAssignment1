-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 30, 2026 at 12:01 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `recipe_box`
--

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE `recipes` (
  `recipeID` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `category` varchar(50) NOT NULL,
  `prepTime` int(11) NOT NULL,
  `servings` int(11) NOT NULL,
  `ingredients` text NOT NULL,
  `instructions` text NOT NULL,
  `dateAdded` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`recipeID`, `title`, `category`, `prepTime`, `servings`, `ingredients`, `instructions`, `dateAdded`) VALUES
(1, 'Banana Oat Pancakes', 'Breakfast', 15, 2, '  1 ripe banana\r\n  1 cup rolled oats\r\n  2 eggs\r\n  1/2 cup milk\r\n  1 tsp baking powder', 'Blend all ingredients until smooth. Cook 1/4 cup portions on a greased pan over medium heat, 2 minutes per side.', '2026-09-29'),
(3, 'Chicken Fried Rice', 'Dinner', 25, 4, '  3 cups cooked rice\r\n  2 chicken breasts, diced\r\n  1 cup frozen peas and carrots\r\n  2 eggs\r\n  3 tbsp soy sauce\r\n  2 green onions', 'Cook the chicken until golden. Push it aside, scramble the eggs, then add the vegetables and rice. Stir in soy sauce and top with green onions.', '2026-09-29'),
(4, 'Greek Salad', 'Lunch', 10, 2, '  1 cucumber\r\n  2 tomatoes\r\n  1/2 red onion\r\n  1/2 cup feta cheese\r\n  1/4 cup olives\r\n  2 tbsp olive oil', 'Chop the vegetables into bite-size pieces. Add feta and olives, drizzle with olive oil, and toss.', '2026-09-29'),
(5, 'Chocolate Chip Cookies', 'Dessert', 30, 24, '  1 cup butter, softened\r\n  1 cup brown sugar\r\n  2 eggs\r\n  2 1/4 cups flour\r\n  1 tsp baking soda\r\n  2 cups chocolate chips', 'Cream the butter and sugar, then beat in the eggs. Mix in the flour and baking soda, and fold in the chips. Bake at 375°F for 10 minutes.', '2026-09-29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`recipeID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `recipeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
