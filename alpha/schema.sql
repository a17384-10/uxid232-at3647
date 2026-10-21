CREATE DATABASE IF NOT EXISTS cookbook_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE cookbook_db;

DROP TABLE IF EXISTS recipes;

CREATE TABLE recipes (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,[cite: 1]
    title VARCHAR(255) NOT NULL,[cite: 1]
    description TEXT NOT NULL,[cite: 1]
    ingredients TEXT NOT NULL,
    prep_time_minutes INT UNSIGNED NOT NULL,[cite: 1]
    category VARCHAR(100) NOT NULL,
    image VARCHAR(255) DEFAULT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP[cite: 1]
) ENGINE=InnoDB;[cite: 1]

-- Seed data for testing the list read
INSERT INTO recipes (title, description, ingredients, prep_time_minutes, category, image) VALUES
(1, 'Ancho-Orange Chicken', 'with Kale Rice & Roasted Carrots', 'Chicken', 4, 'We\'re amping up chicken breasts with a glaze of smoky ancho chile paste and fresh orange juice in this recipe. On the side, roasted carrots and lightly creamy, golden raisin-studded rice perfectly accent the sweetness of the glaze.', '../images/ancho-orange-chicken/dish.jpg'),
(2, 'Beef Medallions & Mushroom Sauce', 'with Mashed Potatoes', 'Beef', 2, 'In this easy recipe, inspired by steak Diane (an American restaurant classic), we\'re searing beef medallions, then using the fond in the pan to make a rich, bright mushroom sauce for spooning on top. Garlic mashed potatoes and sautéed kale make for delicious, simple sides.', '../images/beef-medallions-mushroom-sauce/dish.jpg'),
(3, 'Broccoli & Basil Pesto Sandwiches', 'with Romaine & Citrus Salad', 'Vegetarian', 4, 'These Italian focaccia sandwiches are layered with broccoli, three cheeses, and a savory basil, cashew, and pine nut pesto, then baked in the oven to meld all the bright, aromatic flavors. On the side, we\'re serving a refreshing salad of romaine and seasonal clementine, dressed in a creamy dressing made with fresh clementine juice.', '../images/broccoli-basil-pesto-sandwiches/dish.jpg'),
(4, 'Broccoli & Mozzarella Calzones', 'with Caesar Salad', 'Vegetarian', 4, 'These calzones are loaded with melty fresh mozzarella, creamy ricotta, and tender broccoli—balanced by a tangy tomato dipping sauce. For a refreshing side, we\'re tossing crunchy romaine and briny black olives in our take on Caesar dressing.', '../images/broccoli-mozzarella-calzones/dish.jpg'),
(5, 'Bucatini Alfredo', 'with Broccoli', 'Vegetarian', 2, 'This quick-cooking recipe captures all the deliciously creamy, rich flavor of the classic Italian-American sauce—with the welcome addition of quick-braised broccoli. A dusting of pecorino cheese completes each bowl with a touch of sharpness.', '../images-renamed/bucatini-alfredo/dish.jpg');