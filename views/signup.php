<?php include __DIR__ . '/../config/database.php' ?>
<?php include __DIR__ . "/../inc/header.php" ?>
<?php include __DIR__ . '/../config/validate_signup.php'; ?>


<h2>Sign Up</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" value="<?php echo $name ?>" class="form-control <?php echo $nameTaken ? 'is-invalid' : null; ?> <?php echo $nameErr ? 'is-invalid' : null; ?>" id="name" name="name">
    <div class="invalid-feedback">
      <?php echo $nameErr ?>
      <?php echo $nameTaken ?>
    </div>
  </div>
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="text" value="<?php echo $email ?>" class="form-control <?php echo $invalidEmail ? 'is-invalid' : null ?> <?php echo $emailReg ? 'is-invalid' : null ?> <?php echo $emailErr ? 'is-invalid' : null ?>" id="email" name="email">
    <div class="invalid-feedback">
      <?php echo $emailErr ?>
      <?php echo $emailReg ?>
      <?php echo $invalidEmail ?>
    </div>
  </div>
  <div class="form-group">
    <label for="password">Password:</label>
    <input type="password" class="form-control <?php echo $passwordInvalid ? 'is-invalid' : null ?> <?php echo $passwordErr ? 'is-invalid' : null ?>" id="password" name="password">
    <div class="input-group-append mt-2">
      <button class="btn btn-outline-secondary" type="button" id="togglePassword">Show Password</button>
    </div>
    <div class="invalid-feedback">
      <?php echo $passwordErr ?>
      <?php echo $passwordInvalid ?>
    </div>
  </div>
  <input type="submit" name="submit" value="Sign Up" class="btn btn-primary">
</form>
<div class="w-10 mt-3">
  <a href='<?php echo 'login.php' ?>'>Already have an account?, Log In!</a>
</div>