<?php
session_start();
$name = $email = $password = '';
$nameErr = $emailErr = $password = '';

if(isset($_POST['submit'])){

      //VALIDATING Name
    if(empty($_POST['name'])){
      $nameErr = 'Name is required';
    }else{
      $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    }

  //VALIDATING Email
  if (empty($_POST['email'])) {
    $emailErr = 'Email is required';
  } else {
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
  }

  //VALIDATING Password
  if (empty($_POST['password'])) {
    $passwordErr = 'Password is required';
  } else {
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
  }
  header('Location: ../views/index.php');
  if($name && $email && $password){
    $_SESSION['name'] = $name;
  }
}
// echo '<pre>';
// var_dump($_SESSION);
// '</pre>';



?>