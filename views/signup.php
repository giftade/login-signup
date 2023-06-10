<?php include __DIR__ . '/../config/database.php' ?>
<?php include __DIR__ . "/../inc/header.php" ?>
<?php include __DIR__ . '/../config/validate_signup.php'; ?>


<h2>Signup</h2>
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
    <input type="password" class="form-control <?php echo $passwordErr ? 'is-invalid' : null ?>" id="password" name="password">
    <div class="invalid-feedback">
      <?php echo $passwordErr ?>
    </div>
  </div>
  <input type="submit" name="submit" class="btn btn-primary">
</form>