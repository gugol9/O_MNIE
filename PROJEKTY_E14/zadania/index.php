<html>
<head>
    <title>PHP</title>
    <link rel="Stylesheet" type="text/css" href="style.css" />
    </head>

<body>
    
    <div id = "glowny">
    
   <h1>ZADANIE 1</h1>
        
        <?php
        require_once('druga.php');
            ?>
            
    </div>
     
    <div id = "zad2">
    
    <h1> ZADANIE 2 </h1>
        
        <?php 
        
        require_once('zad2.php');

        echo "pole kwadratu wynosi: " . pole_kwadratu(2);

        echo "<br>";
        echo "pole prostokąta wynosi: " . pole_prostokata(2, 5);

        echo "<br>";
        echo "pole trójkąta wynosi: " . pole_trojkata(3, 5);

        echo "<br>";
        echo "pole koła wynosi: " . pole_kola(3);
            ?>   
    </div>
    <img src="kotek.gif" align="right"/>    
    
    <div id = "zad3">
    <h1>ZADANIE 3</h1>
        <?php

        echo "<br> następujące elementy w obu tablicach sątakie same: ";
        require_once('zad3.php');

        echo "<br> suma liczb parzystych wynosi: ".$suma; 
        echo "<br> suma liczb nie parzystych wynosi: ".$a;
            ?>
        
    </div>    
    <p style="position: absolute; bottom: 0px;">Wszelkie prawa zastrzeżone © hehe :) 
        <b>Wykonał:</b>: Kamil Markowski</p>
    </body>


</html>