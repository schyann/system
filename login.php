<?php
  $accounts = array(
    "user1" => array(
      "username" => 'admin',
      "password" => '1234'
    ),
    "user2" => array(
      "username" => 'ken',
      "password" => 'ken'
    )
    );
  if(isset($_POST['username']) && isset($_POST['password'])){
    $username = htmlentities($_POST['username']);
    $password = htmlentities($_POST['password']);
    foreach($accounts as $keys => $value){
      if($username == $value['username'] && $password == $value['password']){
        header('Location: dashboard.php');
      }
    }
  }





?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login</title>
<link rel="stylesheet" href="style.css">

</head>
<body>
<div id="login-form-wrap">
  <h2>Kenoh Customs</h2>
  <form action="login.php" method="post" id="login-form">
    <p>
    <input type="text" id="username" name="username" placeholder="Username" required><i class="validation"><span></span><span></span></i>
    </p>
    <p>
    <input type="password" id="password" name="password" placeholder="Password" required><i class="validation"><span></span><span></span></i>
    </p>
    <p>
    <input type="submit" name="login" id="login" value="Login">
    </p>
  </form>
</div>
  
</body>
</html>
