<?php
session_start();
if($_SESSION['user_name']){
$name = $_SESSION['user_name'] ;
echo "<h1>Welcome $name</h1>";
}else{
  header('Location: login.php');
}



?>
<a href='<?php echo 'logout.php'?>' class="btn btn-outline-secondary">Log Out</a>