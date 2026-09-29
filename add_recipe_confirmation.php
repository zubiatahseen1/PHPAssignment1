<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$recipe_title = $_SESSION['recipe_title'] ?? 'Your recipe';
unset($_SESSION['recipe_title']);

include('header.php');
?>
    <h2>Recipe Added</h2>
    <p><strong><?php echo $recipe_title; ?></strong> was added to your Recipe Box.</p>
    <p><a href="index.php">Back to Recipe List</a></p>
    <p><a href="add_recipe_form.php">Add Another Recipe</a></p>
<?php include('footer.php'); ?>