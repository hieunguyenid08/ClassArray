CREATE DATABASE `database`;
USE `DATABASE`;
CREATE TABLE `Role` (
  `id` int PRIMARY KEY,
  `name` varchar(20)
);

CREATE TABLE `User` (
  `id` int PRIMARY KEY,
  `fullname` varchar(50),
  `email` varchar(150),
  `phone_number` varchar(20),
  `address` varchar(200),
  `password` varchar(32),
  `role_id` int,
  `created_at` datetime,
  `updated_at` datetime
);

CREATE TABLE `category` (
  `id` int PRIMARY KEY,
  `name` varchar(100)
);

CREATE TABLE `product` (
  `id` int PRIMARY KEY,
  `category_id` int,
  `title` varchar(350),
  `price` int,
  `discount` int,
  `thumbnail` varchar(500),
  `description` longtext,
  `created_at` datetime,
  `updated_at` datetime
);

CREATE TABLE `galery` (
  `id` int PRIMARY KEY,
  `product_id` int,
  `thumbnail` varchar(500)
);

CREATE TABLE `feedback` (
  `id` int PRIMARY KEY,
  `fullname` varchar(50),
  `email` varchar(150),
  `phone_number` varchar(20),
  `subject_name` varchar(200),
  `note` varchar(500)
);

CREATE TABLE `order` (
  `id` int PRIMARY KEY,
  `user_id` int,
  `fullname` varchar(50),
  `email` varchar(150),
  `phone_number` varchar(20),
  `address` varchar(200),
  `note` varchar(500),
  `order_date` datetime,
  `status` int,
  `total_money` int
);

CREATE TABLE `order_detail` (
  `id` int PRIMARY KEY,
  `order_id` int,
  `product_id` int,
  `price` int,
  `num` int,
  `total_money` int
);

ALTER TABLE `User` ADD FOREIGN KEY (`role_id`) REFERENCES `Role` (`id`);

ALTER TABLE `product` ADD FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

ALTER TABLE `galery` ADD FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

ALTER TABLE `order_detail` ADD FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

ALTER TABLE `order_detail` ADD FOREIGN KEY (`order_id`) REFERENCES `order` (`id`);

ALTER TABLE `order` ADD FOREIGN KEY (`user_id`) REFERENCES `User` (`id`);
