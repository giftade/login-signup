<?php include __DIR__ . '/../config/database.php'?>
<?php include __DIR__ . "/../inc/header.php" ?>


<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])  ?>" class="mt-4 d-flex flex-column w-75  p-5" method="POST">
  <!-- Name input  -->
  <div class="mb-3 w-50">
    <input type="text" maxlength="50" class="form-control px-5  w-100" name="name" placeholder="Input name">
  </div>

  <!-- Email input  -->
  <div class="mb-3 w-50">
    <input type="email" class="form-control px-5  w-100" name="email" placeholder="Input email">
  </div>

  <!-- Password input  -->
  <div class="mb-3 w-50">
    <input type="password" class="form-control px-5  w-100" name="password" placeholder="Input password">
  </div>

  <div class="mb-3 form-group">
    <input type="submit" name="submit" value="Sign Up" class="btn btn-dark w-50">
  </div>

</form>