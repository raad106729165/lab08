<?php
session_start();

if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit();
}

include 'header.inc';
?>
  <h1>Welcome, <?php echo htmlspecialchars($_SESSION['user']); ?>!</h1>
<?php include 'footer.inc'; ?>
