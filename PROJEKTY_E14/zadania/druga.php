<?php
$suma = 0;

for($i = 0; $i <= 9 ;$i++){
    
$tablica[$i] = rand(1,10);
echo $tablica[$i]." ";
    
$suma += $tablica[$i];
    

}
echo  "<br> suma tablicy wynosi: ".$suma;

$srednia = $suma/10;
echo "<br> srednia wynosi:".$srednia;

sort($tablica);
print_r ($tablica); // print_r wyświetla tablice 
echo  "<br>";
echo "to jest najwiekszy element tablicy: ".$tablica[9];
echo  "<br>";
echo "to jest najmniejszy element tablicy: ".$tablica[0];



?>