<?php

$dsn = 'sqlite:C:\laragon\www\projet_symfony\var\data.db';
try {
    $pdo = new PDO($dsn);

    $pdo->exec("INSERT INTO recipe (name, text, total_duration, number_of_people, image) VALUES
    ('Spaghetti Bolognese', 'A classic Italian pasta dish with a rich meat sauce.', '45 minutes', 4, 'spaghetti_bolognese.jpg'),
    ('Chicken Curry', 'A spicy and flavorful chicken curry.', '1 hour', 6, 'chicken_curry.jpg'),
    ('Vegetable Stir Fry', 'A quick and healthy vegetable stir fry.', '30 minutes', 2, 'vegetable_stir_fry.jpg')");

    $pdo->exec("INSERT INTO ingredient (name) VALUES
    ('Spaghetti'),
    ('Ground Beef'),
    ('Tomato Sauce'),
    ('Chicken Breast'),
    ('Curry Powder'),
    ('Mixed Vegetables')");

    $pdo->exec("INSERT INTO recipe_ingredient (recipe_id, ingredient_id) VALUES
    (1, 1),
    (1, 2),
    (1, 3),
    (2, 4),
    (2, 5),
    (3, 6)");

    $pdo->exec("INSERT INTO comment (recipe_id, text, date) VALUES
    (1, 'This recipe was amazing! The whole family loved it.', '2024-05-16 10:30:00'),
    (2, 'The chicken curry was a bit too spicy for me.', '2024-05-16 11:00:00'),
    (3, 'Very healthy and quick to make. Will do it again!', '2024-05-16 12:00:00')");

    echo "Data inserted successfully.";

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
