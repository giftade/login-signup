
<?php
session_start();
$name = $email = $password = '';
$nameErr = $emailErr = $emailReg = $invalidEmail = $nameTaken = $passwordInvalid =  $passwordErr = '';

// Define the password validation pattern
$pattern = '/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/';


if($_SERVER['REQUEST_METHOD'] == 'POST'){

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
    // Check if the password matches the pattern
    if (preg_match($pattern, $_POST['password'])) {
       $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
  
    } else {
      // Password does not meet the requirements
      $passwordInvalid = "Password is invalid" . '</br>'.
        " it must contain:" . '</br>' .
      "At least one letter (uppercase or lowercase)". '</br>'.
     " At least one digit" . '</br>' .
     " At least one special character from the set @$!%*#?&" . '</br>' .
     " Length of at least 8 characters";
    }
 }

  //Check if username is already taken
  $stmt = $pdo->prepare("SELECT id FROM user_cred WHERE name = :name");
  $stmt->bindValue(':name', $name);
  $stmt->execute();

  if ($stmt->rowCount() > 0) {
    $nameTaken =  "Name is already taken";
  }

  // Check if the email is already registered
  $stmt = $pdo->prepare("SELECT id FROM user_cred WHERE email = :email");
  $stmt->bindValue(':email', $email);
  $stmt->execute();

  if ($stmt->rowCount() > 0) {
    $emailReg =  "Email already registered";
  }

  // Validate form data (you can add more validation rules)
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    
    $invalidEmail =  "Invalid email address";
  }

  //Adding to database
  if(empty($nameErr ||  $emailErr || $passwordErr || $emailReg || $invalidEmail || $nameTaken || $passwordInvalid)){

 $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $sql = 'INSERT INTO `user_cred` SET
      `name` = :name,
      `email` = :email,
      `password` = :password';
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':name', $name);
    $stmt->bindValue(':email', $email);
    $stmt->bindValue(':password', $hashedPassword);
    $stmt->execute();
    
    header('Location: ../views/login.php');
    exit;
  }

  

 
}




?>