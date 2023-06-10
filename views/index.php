<?php include __DIR__ . '/../config/validate.php' ?>


<?php
$name = $_SESSION['name'] ?? 'Guest';
echo "<h1>Welcome $name</h1>";
echo $nameErr;
?>