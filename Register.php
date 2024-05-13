<?php
require 'functionsRegistreren.php';
$p=new crud();
if (isset($_POST['submit'])){
$name=$_POST['username'];
$password=$_POST['password'];
$confiPassword=$_POST['passwordTwo'];
if (!empty($_POST['username'])&&!empty($_POST['password'])){
if ( $password== $confiPassword) {
    $p->insertData($name,$password);
   
}else{
    echo '<script>alert("Wachtwoord is niet hetzelfde")</script>'; 
}

}

}




?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Register.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Register</title>
</head>
<body>
<div class="container">
    <video playsinline autoplay loop class="background-clip">
        <source src="Video/bugatti-w16.mp4" type="video/mp4">
    </video>
</div>
<div class="wrapper">
    <form method="POST">
        <h1>Bugatti Register  <i class='bx bxs-crown'></i></h1>
        <div class="input-box">
            <input type="text" placeholder="Username" name="username" required><i class='bx bxs-user'></i>
        </div>
        <div class="input-box">
            <input type="password" placeholder="Password" name="password" required><i class='bx bxs-lock'></i>
        </div>
        <div class="input-box">
            <input type="password" placeholder="Password" name="passwordTwo" required><i class='bx bxs-lock'></i>
        </div>
        <button name="submit" type="submit" class="btn">Join the Bugatti Premium Club</button>
        <div class="register-link">
        <p><a href="Login.php">login</a></p>
        <p><a href="Home.php">Home</a></p>
        </div>
    </form>
 </div>
</body>
</html>