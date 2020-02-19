<?php
   session_start();
 
    if ((!isset($_POST['login'])) || (!isset($_POST['haslo'])))//jezeli uzytkownik nie wpisze hasla to przekierowuje go do formularza logowania zabezpieczenie                                                                   przed wpisaniem z marszu linku do gra2.php
	{
		header('Location: projekt_motywacja.php');
		exit();
	}
    
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
                
                    //INSERT INTO `gosc`(`ID`, `Imie`, `Nazwisko`, `login`, `haslo`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5]) 
                    // nazwa bazy danych gosc sprawdzic login i haslo wikus 
        
        
                    $zap = "INSERT INTO user(id, imie, nazwisko, login, haslo, rodzaj_marzenia, marzenie_do_zrealizowania, czy_zrealizowano, kiedy_wpisano_marzenie, kiedy_wykonano) VALUES ('','','','$login','$haslo','$wybor','$marzenie','','$data','')";

                    $result1 = $polaczenie1->query($zap);
        
                    $polaczenie1 -> close();
        
    }
        
    

    $polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
	
	if ($polaczenie->connect_errno!=0)
	{
		echo "Error: ".$polaczenie->connect_errno;
	}
    else
    {
        $login = $_POST['login'];
        $haslo = $_POST['haslo'];
       
        
        $login = htmlentities($login, ENT_QUOTES, "UTF-8");
		$haslo = htmlentities($haslo, ENT_QUOTES, "UTF-8");
    
        
        if($rezultat =$polaczenie -> query(sprintf(  $sql = "SELECT *FROM user WHERE login = '$login' AND haslo = '$haslo'",mysqli_real_escape_string($polaczenie,$login),
		mysqli_real_escape_string($polaczenie,$haslo))))
       {
            $ilu = $rezultat -> num_rows;
            if($ilu > 0)
            {
                $_SESSION['zalogowany'] = true;
                
                $wiersz = $rezultat -> fetch_assoc();
                
                $_SESSION['imie'] = $wiersz['imie'];
                $_SESSION['login'] = $wiersz['login'];
                $_SESSION['rodzaj_marzenia'] = $wiersz['rodzaj_marzenia'];
                $_SESSION['marzenie_do_zrealizowania'] = $wiersz['marzenie_do_zrealizowania'];
                
                    
                   
                
                
                unset($_SESSION['blad']);
                $rezultat -> free_result();
                header('Location: panel.php');
                  
        
                
                
            }
            else
                {
                    $_SESSION['blad'] = '<span style="color:red">nieprawidłowy login lub hasło</span>';
                    header('Location:zaloguj_na_stronie.php');
                }
            
             
       }
        
                
                    $polaczenie -> close();
        
        
        
        
                  
        
        
        
    }
        

/*$polaczenie1 = new mysqli($host, $db_user, $db_password, $db_name);
	
	if ($polaczenie1->connect_errno!=0)
	{
		echo "Error: ".$polaczenie1->connect_errno;
	}
    else
    {

                    $wybor = $_POST['wybor']; 
                    $marzenie = $_POST['marzenie']; 
                    $data=date("Y-m-d");

                    $zap = "INSERT INTO user(id, imie, nazwisko, login, haslo, rodzaj_marzenia, marzenie_do_zrealizowania, czy_zrealizowano, kiedy_wpisano_marzenie, kiedy_wykonano) VALUES ('','','','$login','$haslo','$wybor','$marzenie','','$data','')";

                    $result1 = $polaczenie->query($zap);
 $polaczenie1 -> close();
        

    }*/




?>