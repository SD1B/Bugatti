<?php 
session_start();
include 'functionsInlogpagina.php';

if(isset($_POST["submit"])){
    if($_POST["username"]=="" or $_POST["password"]==""){
        echo '<script>alert("Gebruikers naam en password mogen niet leeg zijn")</script>'; 
    }else{
        $username=strip_tags(trim($_POST["username"]));
        $password=strip_tags(trim($_POST["password"]));
        $query=$db->prepare("SELECT * FROM gebruikers WHERE username=? AND password=?");
        $query->execute(array($username,$password));
        $control=$query->fetch(PDO::FETCH_OBJ);
        if($control > 0){
            $_SESSION["username"]=$username;
            header("Location:Welcome.php");
        }
        echo '<script>alert("Incorrect wachtwoord of gebruikersnaam")</script>'; 
        
    }
}

?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <img id="B" src="image/bug.jpg" alt="Bug">
    <title>Log in</title>
    
</head>
<body>
 <div class="wrapper">
    <form method="POST">
        <h1>Bugatti Premium Club <i class='bx bxs-crown'></i></h1>
        <div class="input-box">
            <input type="text" placeholder="Username" name="username" required><i class='bx bxs-user'></i>
        </div>
        <div class="input-box">
            <input type="password" placeholder="Password" name="password" required><i class='bx bxs-lock'></i>
        </div>
        <div class="remember-forgot">
            <Label><input type="checkbox">Remember me</Label><a href="#">Forgot password?</a>
        </div>
        <button name="submit" type="submit" class="btn">Login</button>
        <div class="register-link">
            <p>Join the Bugatti Club <a href="Register.php">Register</a></p>
            <p>Back to <a href="Home.php">Home</a></p>
        </div>
    </form>
 </div>

    
</body>
</html>