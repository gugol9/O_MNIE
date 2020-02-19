<html>

<head>
    <meta charset="UTF-8">
    <title>Weterynarz</title>
    <link rel="stylesheet" type="text/css" href="weterynarz.css" />
</head>

<body>
    <div id="baner">
        <h1>GABINET WETERYNARYJNY</h1>
    </div>
    <div id="lewy">
        <h2>PSY</h2>

        <?php

                  $connection = @mysqli_connect('localhost','root');
                  $db = @mysqli_select_db($connection,'weterynarz');
                  $query = @mysqli_query($connection, 'SELECT id,imie,wlasciciel FROM zwierzeta WHERE rodzaj=1');
                    while ($txt = @mysqli_fetch_assoc($query))
                  {
                      echo "<br>".($txt['id']." ".$txt['imie']." ".$txt['wlasciciel']);
                  }
                  mysqli_close($connection);
            ?>

            <h2>KOTY</h2>

            <?php

                $connection = @mysqli_connect('localhost','root');
                $db = @mysqli_select_db($connection, 'weterynarz');
                $query = @mysqli_query($connection,'SELECT id,imie,wlasciciel FROM zwierzeta WHERE rodzaj=2');
                    while($txt = @mysqli_fetch_assoc($query))
                    {
                        echo "<br>".($txt['id']." ".$txt['imie']." ".$txt['wlasciciel']);
                    }

                    mysqli_close($connection);          
            ?>

    </div>
    <div id="srodkowy">
        <h2>SZCZEGÓŁOWA INFORMACJA O ZWIERZĘTACH</h2>

        <?php

          $connection = @mysqli_connect('localhost','root');
          $db = @mysqli_select_db($connection,'weterynarz');
          $query = @mysqli_query($connection,'SELECT imie,telefon,szczepienie,opis FROM zwierzeta');

          while($txt = @mysqli_fetch_assoc($query))
          {
              echo "<br>".("Pacjent ".$txt['imie']);
              echo "<br>".("Telefon wlasciciela: "." ".$txt['telefon']." ostatnie szczepienie: ".$txt['szczepienie']."informacje: ".$txt['opis']);
                echo "<hr>";
          }

          ?>

    </div>
    <div id="prawy">
        <h2>WETERYNARZ</h2>
        <P>Krzysztof Nowakowski, lekarz weterynarii</P>
        <h2>GODZINY PRZYJĘĆ</h2>
        <table border="2">
            <tr>
                <td>Poniedziałek</td>
                <td>15:00 - 19:00</td>
            </tr>
            <tr>
                <td>Wtorek</td>
                <td>15:00 - 19:00</td>
            </tr>
        </table>


    </div>
</body>

</html>