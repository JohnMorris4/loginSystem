<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Document</title>
</head>
<body>


<header>
    <nav>
        <ul>
            <li><a href='index.php'>Home Page</a></li>
            <?php 
            if(isset($_SESSION['id'])){
            echo '<form action="includes/logout.inc.php">
                  <button type="submit">LOG OUT</button>
                  </form>';
            
            } else {
            echo
                "<form action='includes/login.inc.php' method='POST'>
                <input type='text' name='uid' placeholder='UserName'>
                <input type='password' name='pwd' placeholder='password'>
                <button type='submit'>Login</button></form>";
        }
            
       
   
            
            ?>
            <li><a href="signup.php">Sign up</a></li>
        </ul>
    </nav>
</header>