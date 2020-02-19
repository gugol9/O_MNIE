<?php

    session_start();
    if(isset($_SESSION['zalogowany'])&&($_SESSION['zalogowany']==true))
    {
        header('Location:panel.php');
        exit();
    }

  ?>


<html>
    <head>
        
        <meta charset="UTF-8">
            <title>System logowania i rejstracji</title>
            <link rel="stylesheet" type="text/css" href="main.css"/>
    
    
    
    
    </head>

    <body>
        <div id="glowny">
            
            <div id="naglowek">Witaj w systemie logowania do gry o osadnikach</div>
            
            <div id="log">
                
                
                    <form method="post" action="laczenie.php">

                        login: <input type="text" name="login"><br>
                        haslo: <input type="password" name="haslo"><br>
                                <input type="submit" value="zaloguj">
                   
                        
                               <?php
             
                                    if(isset($_SESSION['blad'])) //czy taka zmienna istnieje 
                                    
                                    echo $_SESSION['blad'];
                                    
        

                                    ?>
    
                        
                    </form>

                
            
            
            
            </div>
            
            <div id="stopka">o nas:</div>
            
            
        </div>
        
        
        
    
    </body>




</html>