
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- This is the database for Basic Banking System By Ayush Kiledar
--

--
-- User Feedback, Optional for users
--

CREATE TABLE `userfeedback` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `feedback` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `userfeedback` (`id`, `name`, `email`, `feedback`) VALUES
(1, 'Pratham', 'pratham11@gmail.com', 'Great website!!'),
(2, 'Dheeraj', 'dheeraj11@gmail.com', 'Beautiful interface'),
(3, 'Shekhar', 'Shekhar11@gmail.com', 'Smooth Functioning'),
(4, 'David', 'david15@gmail.com', 'Great Work');

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `sender` varchar(10) NOT NULL,
  `receiver` varchar(10) NOT NULL,
  `amount` bigint(20) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `transactions` (`id`, `sender`, `receiver`, `amount`, `status`) VALUES
(1, '7368789875', '5353112532', 200, 'succeed'),
(2, '3896115532', '7368789875', 0, 'failed'),
(3, '', '', 0, 'failed'),
(4, '', '', 0, 'failed'),
(5, '', '', 0, 'failed'),
(6, '7368789875', '3896115532', 200, 'succeed'),
(7, '7368789875', '3896115532', 0, 'failed'),
(8, '7368789875', '4567886978', 350, 'succeed'),
(9, '7368789875', '4567886978', 550, 'succeed'),
(10, '3896115532', '4567886978', 25000, 'failed'),
(11, '4567886978', '3896115532', 600, 'succeed');

--
-- Table for costumers
--

CREATE TABLE `costumers` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `accno` varchar(10) NOT NULL,
  `balance` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `costumers` (`id`, `name`, `email`, `accno`, `balance`) VALUES
(1, 'Dheeraj Singh', 'dheeraj@gmail.com', '7368789875', 54100),
(2, 'Vijay Dev', 'vjay@gmail.com', '3896115532', 60000),
(3, 'Shanaya', 'shnya@gmail.com', '4567886978', 551000),
(4, 'Preeti Bhatt', 'preeti@gmail.com', '5353112532', 11000),
(5, 'Rahul Sharma', 'rhl@gmail.com', '8659722625', 95200),
(6, 'Sagar Pandit', 'sagar@gmail.com', '8824438190', 32489),
(7, 'Shikha Singh', 'singhshiksha@gmail.com', '8754807219', 74569),
(8, 'Venkatesh', 'vktsh@gmail.com', '1974625511', 20000),
(9, 'Akhtar', 'akhtar@gmail.com', '4987416858', 500000),
(10, 'Sanjay Singh', 'snsingh@gmail.com', '6112694541', 1000000);

--
-- Defining Primary keys
--

ALTER TABLE `userfeedback`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `costumers`
  ADD PRIMARY KEY (`id`);

--
-- Auto Increment of id field
--

ALTER TABLE `userfeedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

ALTER TABLE `transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

ALTER TABLE `costumers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;
