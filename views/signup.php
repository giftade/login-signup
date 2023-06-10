<?php include __DIR__ . '/../config/database.php' ?>
<?php include __DIR__ . "/../inc/header.php" ?>
<?php include __DIR__ . '/../config/validate.php'; ?>
<?php $action =  '../config/validate.php' ;?>

<h2>Signup</h2>
<form method="post" action="<?php echo htmlspecialchars($action); ?>">
  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class="form-control" id="name" name="name" required>
  </div>
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" class="form-control" id="email" name="email" required>
  </div>
  <div class="form-group">
    <label for="password">Password:</label>
    <input type="password" class="form-control" id="password" name="password" required>
  </div>
  <input type="submit" name="submit" class="btn btn-primary">
</form>