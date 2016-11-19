<?php
include 'maps/header.php';

?>



        
       
  
   
   <?php
        if(isset($_SESSION['id'])){
            echo "You are logged in with the ID of: ".$_SESSION['id'];
            
        } else {
            echo "You are not logged in";
        }
    
    
   ?>
   <br><br><br>
   <?php
            if(isset($_SESSION['id'])){
            echo "You are already logged in!";
            
        } else {
            echo "<form action='includes/signup.inc.php' method='POST'>
        <input type='text' name='first' placeholder='First Name'><br>
        <input type='text' name='last' placeholder='Last Name'><br>
        <input type='text' name='uid' placeholder='UserName'><br>
        <input type='password' name='pwd' placeholder='password'><br><br>
        <button type='submit'>Sign Up</button>
        </form>";
        }


?>
   
    
    
<?php
include 'maps/footer.php';

?>