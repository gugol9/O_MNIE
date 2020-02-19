<?php

    require_once "login.php";
    $polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
    

     if($polaczenie ->connect_errno!=0)
    {
        echo "Error:".$polaczenie -> connect_errno;
    }
    else
    {
        $imie = $_POST['imie'];
        $nazwisko = $_POST['nazwisko'];
        $log = $_POST['log'];
        $pass = $_POST['pass'];
        //$data=date("Y-m-d"); //wpisanie obecnej daty do baz danych
        //$data = '$dzien'.'-'.'$miesiac'.'-'.'rok';
 

    $sql = "INSERT INTO gosc(ID, Imie, Nazwisko, login, haslo ) VALUES ('','$imie','$nazwisko','$log','$pass')";

    $result = $polaczenie->query($sql);
    

        
    
   $polaczenie -> close();
         }
?>