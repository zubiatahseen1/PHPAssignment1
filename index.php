<?php
require_once('database.php');

$query = 'SELECT * FROM recipes ORDER BY title';
$statement = $db->prepare($query);
$statement->execute();
$recipes = $statement->fetchAll();
$statement->closeCursor();

include('header.php');
?>
    <p><a href="add_recipe_form.php">Add Recipe</a></p>

    <table>
        <tr>
            <th>Title</th>
            <th>Category</th>
            <th>Prep Time</th>
            <th>Servings</th>
            <th>Date Added</th>
        </tr>
        <?php foreach ($recipes as $recipe) : ?>
        <tr>
            <td><?php echo htmlspecialchars($recipe['title']); ?></td>
            <td><?php echo htmlspecialchars($recipe['category']); ?></td>
            <td><?php echo htmlspecialchars($recipe['prepTime']); ?> min</td>
            <td><?php echo htmlspecialchars($recipe['servings']); ?></td>
            <td><?php echo htmlspecialchars($recipe['dateAdded']); ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
<?php include('footer.php'); ?>