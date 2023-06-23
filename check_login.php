<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <title>logincheck</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
   <?php
   session_start();
   $host = 'localhost';
   $user = 'root';
   $pw = '';
   $db_name = 'user';
      $mysqli = new mysqli($host, $user, $pw, $db_name);
      
      $username = $_POST['_id'];
      $userpass = $_POST['_pw'];
      
      $q = "SELECT * FROM member WHERE id = '$username' AND pass = password('$userpass')";
      $result = $mysqli->query($q);
      $row = $result->fetch_array(MYSQLI_ASSOC);
      
      if ($row != null) {
         $_SESSION['username'] = $row['id'];
         $_SESSION['name'] = $row['sei'];
         echo "<script>location.replace('index.php');</script>";
         exit;
      }
      if($row == null){
         echo "<script>alert('IDもしくはパスワードが間違えました。')</script>";
         echo "<script>location.replace('login.php');</script>";
         exit;
      }
      ?>
   </body>