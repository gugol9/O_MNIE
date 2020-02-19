<html   lang="pl-PL" >
    <head>      
        <meta charset="UTF-8"> 
        <link rel="Stylesheet" type="text/css" href="styl_oszczep.css" />
    </head>
    <body>
        
        <div id = "kontener">
            <div id = "baner"><h1>Klub sportowy: rzut oszczepem</h1></div>
            <div id = "glowny"><h1>Nasz rekord:

                    <?php

                    $con=mysqli_connect('localhost', 'root', '', 'sportowcy');

                    $sql2="select count(id) from sportowiec";
                    
                    $query2=mysqli_query($con,$sql2);

                    ?>
                
        <?php

                $connection = @mysqli_connect('localhost', 'root');

                $db = @mysqli_select_db($connection, 'sportowcy');

                $query = mysqli_query($connection , 'SELECT max(wynik) FROM wyniki where dyscyplina_id=3');
                while ($txt = @mysqli_fetch_assoc($query))
                    {
                        echo($txt['max(wynik)']);
                    }

        
        ?>
                </h1>

            <table border="2">
                  <?php

                  echo '<table>';
                  $i=mysqli_fetch_assoc($query2)['count(id)'];
                  for ($a = 0; $a < $i; $a=$a+2) {
                      $id=$a+1;
                      $sql3="select imie, nazwisko, avg(wynik) from sportowiec, wyniki where sportowiec.id=wyniki.sportowiec_id and dyscyplina_id=3 and sportowiec_id=$id;";
                      $query3=mysqli_query($con,$sql3);
                      $row=mysqli_fetch_assoc($query3);
                        echo "<tr><td><b>".$row['imie']." ".$row['nazwisko']."</b><br><p>Średni wynik: ".$row['avg(wynik)'] . "</p></td>";
                      $id=$a+2;
                      $sql3="select imie, nazwisko, avg(wynik) from sportowiec, wyniki where sportowiec.id=wyniki.sportowiec_id and dyscyplina_id=3 and sportowiec_id=$id;";
                      $query3=mysqli_query($con,$sql3);
                      $row=mysqli_fetch_assoc($query3);
                         echo "<td><b>".$row['imie']." ".$row['nazwisko']."</b><br><p>Średni wynik: ".$row['avg(wynik)'] . "</p></td></tr>";
                  }
                  echo "</table>";
                
                 ?>

            </table>
            
            </div>
            <div id = "stopka">Klub sportowy
                <br><center>Stronę opracował: 000000000  (Kamil Markowski)</center>
            </div>
        </div>
        
        
    
    </body>


</html>