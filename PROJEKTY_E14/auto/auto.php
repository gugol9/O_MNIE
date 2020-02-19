<html>
<head>
    <title>Komis Samochodowy</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="auto.css"/>
    </head>

    <body>
    <div id="baner"><h1>SAMOCHODY</h1></div>
    <div id="lewy">
        <h2>Wykaz samochodów</h2>
        <?php
        
            $connection = @mysqli_connect('localhost','root');
            $db = @mysqli_select_db($connection,'komis');
            $query = @mysqli_query($connection,'SELECT`id`,`model`,`marka` FROM samochody');
            
            while($wiersz=@mysqli_fetch_row($query))
            {
                echo '<li>'.$wiersz[0].' '.$wiersz[1].' '.$wiersz[2].'</li>';
            }
        
        
            mysqli_close($connection);
        
        ?>
        
        <h2>Zamówienia</h2>
        
        <?php
        
        $connection = @mysqli_connect('localhost','root');
            $db = @mysqli_select_db($connection,'komis');
            $query = @mysqli_query($connection,'SELECT `Samochody_id`,`Klient` FROM `zamowienia`');
        while($wiersz = @mysqli_fetch_row($query))
        {
            echo '<li>'.$wiersz[0].' '.$wiersz[1].'</li>';
        }
       
        
        
        mysqli_close($connection);
        
        
        
        ?>
        
        </div>
    <div id="prawy">
        
        <h2>Pełne dane: Fiat</h2>    
        
        <?php
        
        $connection = @mysqli_connect('localhost','root');
        $db = @mysqli_select_db($connection,'komis');
        $query = @mysqli_query($connection,"SELECT * FROM `samochody` WHERE marka = 'fiat'");
        
        while($wiersz = @mysqli_fetch_row($query))
        {
            echo $wiersz[0].' / '.$wiersz[1].' / '.$wiersz[2].' / '.$wiersz[3].' / '.$wiersz[4].' / '.$wiersz[5]."<br>";
        }
        
        
        mysqli_close($connection);
        ?>
        
        
    </div>
    <div id="stopka">
    <table>
        
        <tr>
            <td><a href="ss">Kwerendy</a></td>
            <td>Autor</td>
            <td>Kwerendy</td>
            
        </tr>    
        
  
        
        
        
    </table>    
        
        
        
    </div>
    
    
    </body>


</html>