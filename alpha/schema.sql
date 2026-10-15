CREATE DATABASE IF NOT EXISTS cookbook_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE cookbook_db;

DROP TABLE IF EXISTS recipes;

CREATE TABLE recipes (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    prep_time_minutes INT UNSIGNED NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;

-- Seed data for testing the list read
INSERT INTO recipes (title, description, prep_time_minutes) VALUES
('tres golpes', 'mashed plantains with fried egg, salami, and cheese. topped with pickled red onions', 40),
('la bandera', 'dominican rice and beans with meat and salad.', 60);