
<?php
session_start();
$name = $email = $password = '';
$nameErr = $emailErr = $passwordErr = '';

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
 
  //Adding to database
  if(empty($nameErr ||  $emailErr || $passwordErr)){
  //    header('Location: ../views/index.php');
  // if($name && $email && $password){
  //   $_SESSION['name'] = $name;
  //}
    $sql = 'INSERT INTO `user_cred` SET
      `name` = :name,
      `email` = :email,
      `password` = :password';
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':name', $name);
    $stmt->bindValue(':email', $email);
    $stmt->bindValue(':password', $password);
    $stmt->execute();
  }

  

 
}
// echo '<pre>';
// var_dump($_SESSION);
// '</pre>';


?>