<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="./bootstrap-offline/css/bootstrap.css">
  <script src="./bootstrap-offline/js/jquery-3.6.0.js"></script>
  <script src="./bootstrap-offline/js/bootstrap.js"></script>
  <script>
    $(document).ready(function() {
      $('#togglePassword').click(function() {
        const passwordInput = $('#password');
        const passwordFieldType = passwordInput.attr('type');

        if (passwordFieldType === 'password') {
          passwordInput.attr('type', 'text');
          $(this).html('Hide Password');
        } else {
          passwordInput.attr('type', 'password');
          $(this).html('Show Password');
        }
      });
    });
  </script>
  <title>Document</title>
</head>

<body>
  <div class="container d-flex flex-column  mt-5  p-5">