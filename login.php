<?php include 'header.inc'; ?>
  <h1>Login</h1>
<?php if (isset($_GET['error'])): ?>
  <p>Invalid username or password.</p>
<?php endif; ?>
  <form method="post" action="process.php">
    <p>
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required>
    </p>
    <p>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>
    </p>
    <input type="hidden" name="token" value="R106729165">
    <p>
      <input type="submit" value="Login">
    </p>
  </form>
<?php include 'footer.inc'; ?>
