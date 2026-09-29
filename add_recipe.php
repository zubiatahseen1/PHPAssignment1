<?php
require_once('database.php');

// Get and sanitize the form data
$title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_SPECIAL_CHARS);
$category = filter_input(INPUT_POST, 'category', FILTER_SANITIZE_SPECIAL_CHARS);
$prepTime = filter_input(INPUT_POST, 'prepTime', FILTER_VALIDATE_INT);
$servings = filter_input(INPUT_POST, 'servings', FILTER_VALIDATE_INT);
$ingredients = filter_input(INPUT_POST, 'ingredients', FILTER_SANITIZE_SPECIAL_CHARS);
$instructions = filter_input(INPUT_POST, 'instructions', FILTER_SANITIZE_SPECIAL_CHARS);
$dateAdded = filter_input(INPUT_POST, 'dateAdded');

// Validate
if (empty($title) || empty($category) || empty($ingredients) ||
    empty($instructions) || empty($dateAdded) ||
    $prepTime === false || $prepTime === null || $prepTime < 1 ||
    $servings === false || $servings === null || $servings < 1) {
    $_SESSION['add_error'] = 'Please fill in all fields. Prep time and servings must be positive numbers.';
    header('Location: add_recipe_form.php');
    exit();
}

// Insert the recipe
$query = 'INSERT INTO recipes
            (title, category, prepTime, servings, ingredients, instructions, dateAdded)
          VALUES
            (:title, :category, :prepTime, :servings, :ingredients, :instructions, :dateAdded)';
$statement = $db->prepare($query);
$statement->bindValue(':title', $title);
$statement->bindValue(':category', $category);
$statement->bindValue(':prepTime', $prepTime);
$statement->bindValue(':servings', $servings);
$statement->bindValue(':ingredients', $ingredients);
$statement->bindValue(':instructions', $instructions);
$statement->bindValue(':dateAdded', $dateAdded);
$statement->execute();
$statement->closeCursor();

// Save the title for the confirmation page
$_SESSION['recipe_title'] = $title;

header('Location: add_recipe_confirmation.php');
exit();
?>