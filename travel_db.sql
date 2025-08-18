CREATE DATABASE IF NOT EXISTS tours_db;
USE tours_db;

CREATE TABLE users (
  user_id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100),
  email VARCHAR(100) UNIQUE,
  phone_number VARCHAR(20),
  location VARCHAR(100),
  password VARCHAR(255),
  role ENUM('user', 'admin', 'manager') DEFAULT 'user',
  profile_pic VARCHAR(255) DEFAULT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE tours (
  tour_id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255) NOT NULL,
  description TEXT,
  image VARCHAR(255),
  from_location VARCHAR(100) NOT NULL,
  to_location VARCHAR(100) NOT NULL,
  departure_date DATE NOT NULL,
  return_date DATE NOT NULL,
  price_per_person  DECIMAL(10,2) NOT NULL,
  status ENUM('Active', 'Inactive') DEFAULT 'Active',
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE bookings (
  id INT AUTO_INCREMENT PRIMARY KEY,
  user_id INT NOT NULL,
  tour_id INT NOT NULL,
  number_of_persons INT DEFAULT 1,
  total_amount DECIMAL(10, 2),
  booking_date DATE DEFAULT CURRENT_DATE,
  FOREIGN KEY (user_id) REFERENCES users(user_id) ON DELETE CASCADE,
  FOREIGN KEY (tour_id) REFERENCES tours(tour_id) ON DELETE CASCADE
);


