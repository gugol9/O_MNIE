<?php
    
session_start();

if(!isset($_SESSION['zalogowany']))  //jezeli uzytwkonik nie jest zalogowany to wyslij go do index.php
{
    header('Location:index.php');
}


?>


<html>

<head>
        <link rel="stylesheet" type="text/css" href="main1.css"/>
    
    </head>

    
    <body>
    
        <?php
        
        
            echo "Witaj ".$_SESSION['user']."<br>";
            echo '<br>';
            echo "drewno: ".$_SESSION['drewno']."<br>";
            echo "kamien: ".$_SESSION['kamien']."<br>";
            echo "zboze: ".$_SESSION['zboze']."<br>";
            echo "dni premium: ".$_SESSION['dnipremium']."<br>"."<br>";
        
            echo '<a href="logout.php">wyloguj</a>';
            
          
        
        
        
        
        ?>
    
    
    </body>



</html>