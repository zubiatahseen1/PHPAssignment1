<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$error_message = $_SESSION['database_error'] ?? 'Unknown database error.';
include('header.php');
?>
    <h2>Database Error</h2>
    <p>There was a problem connecting to the database.</p>
    <p>Make sure Apache and MySQL are running in XAMPP.</p>
    <p><strong>Details:</strong> <?php echo htmlspecialchars($error_message); ?></p>
<?php include('footer.php'); ?>