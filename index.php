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
   
   
   
    
<?php
include 'maps/footer.php';

?>