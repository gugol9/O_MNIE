<html>
<head>
    
    <meta charset="UTF-8"/>
    <title>Ogłoszenia drobne</title>
    <link rel="stylesheet" type="text/css" href="styl2.css"/>
    </head>
<body>
    
    <div id="baner"><h2>Ogłoszenia drobne</h2></div>
    <div id="lewy">
        <h2>Ogłoszeniodawcy</h2>
    
       
		<?php
		$connect = mysqli_connect('localhost','root','','portal');
		$ask = "SELECT `uzytkownik`.`id`, `uzytkownik`.`imie`, `uzytkownik`.`nazwisko`, `uzytkownik`.`email`, `ogloszenie`.`tytul` FROM `uzytkownik` inner join `ogloszenie` ON `uzytkownik`.`id` = `ogloszenie`.`uzytkownik_id` WHERE `uzytkownik`.`id` < 4 GROUP by `uzytkownik`.`id`";
		$result = mysqli_query($connect, $ask);
		while ($line=mysqli_fetch_row($result)) 
		{
			echo '<h3>'.$line[0].' '. $line[1].' '.$line[2].'</h3>';
			echo '<p>'.$line[3].'</p>';
			echo '<p>Ogłoszenie: '.$line[4];
		}

		mysqli_close($connect);
		
		?>
        
       
    </div>
    <div id="prawy">
        <h2>Nasze kategorie</h2>
        <ul>
            <li>Książki</li>
            <li>Muzyka</li>
            <li>Multimedia</li>
        </ul>
    
        <table >
            <th>Ile?</th><th>Koszt</th><th>Promocja</th>
            
            <tr>
                <td>1-40</td>
                <td>1,20PLN</td>
                <td rowspan="2">Subskrybuj newstleeter uspust 0,30 PLN na ogłoszenie</td>
            </tr>
        
            <tr>
                <td>41 i wiecej</td>
                <td>0,70PLN</td>  
            </tr>
        
        </table>
        
        
    </div>
    <div id="stopka">z</div>
    
    
    </body>


</html>