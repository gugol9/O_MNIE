<?php
$a = 0 ;

$tab1 = array();
$tab2 = array();


for($i = 0; $i <10 ;$i++)
{
    $tab1[$i] = rand (1, 10);
    $tab2[$i] = rand (5, 10);
        if ($tab1[$i] == $tab2[$i])
            echo $tab1[$i].", ";



   if (($tab1 % 2 ) == 0)
        $suma += $tab1[$i];
            
 
   if (($tab2 % 3 ) == 0)
        $a += $tab2[$i];

}
echo  "<br>";
sort($tab1);
print_r ($tab1);

echo  "<br>";
sort($tab2);
print_r ($tab2);

if ($tab1[9] == $tab1[1])
    echo "liczby z tablicy 1 sa takie same";
    else
    {
        echo "<br> liczby z tablicy 1 są różne...";
    }

if ($tab2[9] == $tab2[1])
    echo "liczby z tablicy 2 sa takie same";
    else
    {
        echo "<br> liczby z tablicy 2 są różne...";
    }
?>