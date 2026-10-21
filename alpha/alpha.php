<?php
declare(strict_types=1);

require_once __DIR__ . '/db.php';

// Fetch all recipes from the database
$query = "SELECT * FROM recipes ORDER BY created_at DESC";
$result = mysqli_query($db, $query);
$recipes = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Cookbook - Alpha Milestone</title>
   <link rel="stylesheet" href="style.css">

</head>
<body>
    <h1>Online Cookbook 📖 (Alpha Milestone)</h1>
    <p>Welcome! Below is the list of recipes loaded from our relational database.</p>
    <hr>

    <?php if (empty($recipes)): ?>
        <p>No recipes found in the database.</p>
    <?php else: ?>
        <?php foreach ($recipes as $recipe): ?>
            <div class="recipe-card">
                <h3><?= htmlspecialchars($recipe['title']) ?></h3>
                <?php if (!empty($recipe['subtitle'])): ?>
                    <div class="subtitle"><?= htmlspecialchars($recipe['subtitle']) ?></div>
                <?php endif; ?>
                
                <div class="meta">
                    <span class="badge">Category: <?= htmlspecialchars($recipe['category']) ?></span> | 
                    <strong>Servings:</strong> <?= htmlspecialchars((string)$recipe['servings']) ?>
                </div>
                
                <p><?= htmlspecialchars($recipe['description']) ?></p>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</body>
</html>