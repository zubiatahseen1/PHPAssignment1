# Recipe Box

Recipe Box is a small PHP and MySQL web app for keeping track of recipes. I built it for my PHP assignment, using the Contact Manager we made in class as a guide.

## What it does

- Shows all saved recipes in a table (title, category, prep time, servings, and date added)
- Lets you add a new recipe through a form
- Shows a confirmation page after a recipe is added
- Shows a friendly error page if the database can't be reached

## Built with

- PHP (PDO with prepared statements)
- MySQL / phpMyAdmin
- HTML and CSS
- XAMPP for running it locally

## How to run it

1. Install XAMPP and start Apache and MySQL.
2. Copy the `PHPAssignment1` folder into XAMPP's `htdocs` folder.
3. Open phpMyAdmin, create a database called `recipe_box`, and import `SQL/recipes.sql`.
4. Go to `http://localhost/PHPAssignment1/` in your browser.

The app uses XAMPP's default MySQL login (username `root`, no password). If yours is different, update it in `database.php`.

## Project files

- `index.php` – recipe list
- `add_recipe_form.php` – form for adding a recipe
- `add_recipe.php` – saves the new recipe to the database
- `add_recipe_confirmation.php` – confirms the recipe was added
- `database.php` – database connection
- `database_error.php` – error page for connection problems
- `header.php` / `footer.php` – shared page layout
- `css/main.css` – styling
- `SQL/recipes.sql` – database export with sample recipes

## Author

Zubia Tahseen
