<?php include __DIR__ . "/../inc/header.php"  ?>
<?php include __DIR__ . "/../config/validate_login.php" ?>


<h2>Log In</h2>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" value="<?php echo $email ?>" class="form-control <?php echo $emailNotFound ? 'is-invalid' : null ?>  <?php echo $emailErr ? 'is-invalid' : null ?>" id="email" name="email">
    <div class="invalid-feedback">
      <?php echo $emailErr ?>
      <?php echo $emailNotFound ?>
    </div>
  </div>
  <div class="form-group">
    <label for="password">Password:</label>
    <input type="password" class="form-control <?php echo $passIncorrect ? 'is-invalid' : null ?> <?php echo $passwordErr ? 'is-invalid' : null ?> " id="password" name="password">
    <div class="input-group-append mt-2">
      <button class="btn btn-outline-secondary" type="button" id="togglePassword">Show Password</button>
    </div>
    <div class="invalid-feedback">
      <?php echo $passwordErr ?>
      <?php echo $passIncorrect ?>
    </div>
  </div>
  <input type="submit" name="submit" value="Log In" class="btn btn-primary">
</form>
<div class="w-10 mt-3">
  <a href='<?php echo 'signup.php' ?>'>Don't have an account?, Sign Up!</a>
</div>
