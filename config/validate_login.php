<?php include __DIR__ . '/../config/database.php' ?>

<?php
$email = $password = $emailErr = $passwordErr  = $passIncorrect = $emailNotFound = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

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

  if(empty($emailErr || $passwordErr || $passIncorrect || $emailNotFound)){
    // Retrieve the user's record from the database based on email
    $stmt = $pdo->prepare("SELECT name, password FROM user_cred WHERE email = :email");
    $stmt->bindValue(':email', $email);
    $stmt->execute();

    if ($stmt->rowCount() === 1) {
      $row = $stmt->fetch(PDO::FETCH_ASSOC);
      $userName = $row['name'];
      $hashedPassword = $row['password'];

      // Verify the password
      if (password_verify($password, $hashedPassword)) {
        // Authentication successful, set session variables or redirect to authorized page
        // Example: Setting a session variable
        session_start();
        $_SESSION['user_name'] = $userName;

        // Redirect to a protected page
        header("Location: ../views/index.php");
        
      } else {
        $passIncorrect =  "Incorrect password";
        
      }
    } else {
      $emailNotFound =  "Email not found";
      
    }





  }

}



?>