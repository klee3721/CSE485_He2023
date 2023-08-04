

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `Address` varchar(500) DEFAULT NULL,
  `Salaray` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `Name`, `Address`, `Salaray`) VALUES
(1, 'abc', 'abc', 1000),
(2, 'abc', 'abc', 1000),
(3, 'abcd', 'abcd', 2000),
(4, 'abcde', 'abcde', 3000),
(5, 'abcde', 'abcde', 3000),
(6, 'abcde', 'abcde', 3000),
(7, 'abcde', 'abcde', 3000),
(8, 'abcde', 'abcde', 3000),
(9, 'abcde', 'abcde', 3000),
(10, 'abcde', 'abcde', 3000),
(11, 'abcde', 'abcde', 3000),
(12, 'abcde', 'abcde', 3000),
(13, 'abcde', 'abcde', 3000),
(14, 'abcde', 'abcde', 3000),
(15, 'abcde', 'abcde', 3000),
(16, 'abcde', 'abcde', 3000),
(17, 'abcde', 'abcde', 3000),
(18, 'abcde', 'abcde', 3000),
(19, 'abcde', 'abcde', 3000),
(20, 'abcde', 'abcde', 3000),
(21, 'abcde', 'abcde', 3000),
(22, 'abcde', 'abcde', 3000),
(23, 'abcde', 'abcde', 3000),
(24, 'abcde', 'abcde', 3000),
(25, 'abcde', 'abcde', 3000),
(26, 'abcde', 'abcde', 3000),
(27, 'abcde', 'abcde', 3000),
(28, 'abcde', 'abcde', 3000),
(29, 'abcde', 'abcde', 3000),
(30, 'abcde', 'abcde', 3000),
(31, 'abcded', 'abcded', 5000),
(32, 'abcded', 'abcded', 5000),
(33, 'abcded', 'abcded', 5000),
(34, 'abcded', 'abcded', 5000),
(35, 'abcded', 'abcded', 5000),
(36, 'abcded', 'abcded', 5000),
(37, 'abcded', 'abcded', 5000),
(38, 'abcded', 'abcded', 5000),
(39, 'abcded', 'abcded', 5000),
(40, 'abcded', 'abcded', 5000),
(41, 'abcded', 'abcded', 5000),
(42, 'abcded', 'abcded', 5000),
(43, 'abcded', 'abcded', 5000),
(44, 'abcded', 'abcded', 5000),
(45, 'abcded', 'abcded', 5000),
(46, 'abcded', 'abcded', 5000),
(47, 'abcded', 'abcded', 5000),
(48, 'abcded', 'abcded', 5000),
(49, 'abcded', 'abcded', 5000),
(50, 'abcded', 'abcded', 5000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
