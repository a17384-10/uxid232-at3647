<?php
declare(strict_types=1);

require_once __DIR__ . '/db.php';

// Fetch all recipes from the database[cite: 2]
$query = "SELECT * FROM recipes ORDER BY created_at DESC";
$result = mysqli_query($db, $query);
$recipes = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>alpha build</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <h1>🌮📚🥞Cookbook🍩📖🧁</h1>
    <p>Hello! These are five recipes pulled from the database</p>
    <hr>

    <?php if (empty($recipes)): ?>
        <p>No recipes found in the database.</p>
    <?php else: ?>
        <?php foreach ($recipes as $recipe): ?>
            <div class="recipe-card">
                <!-- details and picture -->
                <div class="recipe-top-row">
                    <div class="recipe-info">
                        <h3><?= htmlspecialchars($recipe['title']) ?></h3>
                        
                        <?php if (!empty($recipe['subtitle'])): ?>
                            <div class="subtitle"><?= htmlspecialchars($recipe['subtitle']) ?></div>
                        <?php endif; ?>
                        
                        <div class="meta">
                            <span class="badge">Category: <?= htmlspecialchars($recipe['category']) ?></span> | 
                            <strong>Servings:</strong> <?= htmlspecialchars((string)$recipe['servings']) ?>
                        </div>
                    </div>

                    <?php if (!empty($recipe['image'])): ?>
                        <img src="<?= htmlspecialchars($recipe['image']) ?>" alt="<?= htmlspecialchars($recipe['title']) ?>" class="recipe-img">
                    <?php endif; ?>
                </div>

                <!-- description -->
                <div class="recipe-description">
                    <p><?= htmlspecialchars($recipe['description']) ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</body>
</html>