
<?php
    session_start();
  require_once "login.php";

$polaczenie1 = new mysqli($host, $db_user, $db_password, $db_name);
	
	if ($polaczenie1->connect_errno!=0)
	{
		echo "Error: ".$polaczenie1->connect_errno;
	}
    else
    {
        
               
                    $wybor = $_POST['wybor']; 
                    $marzenie = $_POST['marzenie']; 
                    $data=date("Y-m-d");

                    $zap = "INSERT INTO user(id, imie, nazwisko, login, haslo, rodzaj_marzenia, marzenie_do_zrealizowania, czy_zrealizowano, kiedy_wpisano_marzenie, kiedy_wykonano) VALUES ('','','','','','$wybor','$marzenie','','$data','')";

                    $result1 = $polaczenie1->query($zap);
        
                    $polaczenie1 -> close();
        
    }
        ?>