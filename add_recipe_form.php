<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$add_error = $_SESSION['add_error'] ?? '';
unset($_SESSION['add_error']);

include('header.php');
?>
    <h2>Add Recipe</h2>

    <?php if ($add_error != '') : ?>
        <p class="error"><?php echo htmlspecialchars($add_error); ?></p>
    <?php endif; ?>

    <form action="add_recipe.php" method="post" class="recipe-form">
        <label>Title:</label>
        <input type="text" name="title" required>

        <label>Category:</label>
        <select name="category" required>
            <option value="Breakfast">Breakfast</option>
            <option value="Lunch">Lunch</option>
            <option value="Dinner">Dinner</option>
            <option value="Dessert">Dessert</option>
            <option value="Snack">Snack</option>
        </select>

        <label>Prep Time (minutes):</label>
        <input type="number" name="prepTime" min="1" required>

        <label>Servings:</label>
        <input type="number" name="servings" min="1" required>

        <label>Ingredients (one per line):</label>
        <textarea name="ingredients" rows="6" required></textarea>

        <label>Instructions:</label>
        <textarea name="instructions" rows="6" required></textarea>

        <label>Date Added:</label>
        <input type="date" name="dateAdded" required>

        <input type="submit" value="Save Recipe">
    </form>

    <p><a href="index.php">Back to Recipe List</a></p>
<?php include('footer.php'); ?>