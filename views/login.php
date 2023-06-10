<?php include __DIR__ . "/../inc/header.php"  ?>
<?php include __DIR__ . "/../config/validate_login.php" ?>


<h2>Log In</h2>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" class="form-control" id="email" name="email" required>
  </div>
  <div class="form-group">
    <label for="password">Password:</label>
    <input type="password" class="form-control" id="password" name="password" required>
  </div>
  <input type="submit" name="submit" value="Log In" class="btn btn-primary">
</form>