
<html>
<head>
    <meta charset="utf-8">
    <title>HOTEL VICTORIA'S</title>
    <meta name="description" content="Hotel">
    <meta name="keywords" content="hotel, goscie">
    <meta name="author" content="Kamil Markowski">
    <meta http-equiv="X-Ua-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="main1.css"/>

</head>
<body>

<header>
    <nav class="navbar navbar-light bg-danger navbar-expand-md" >

        <a class = "navbar-brand ml-5" href="index.html"><img src="Hotel-2.png" height="30" width="30" alt="" class = "d-inline-block mr-5 aling-bottom" />HOTEL</a>


        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Przelacznik_nawigacji">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav  mr-auto">

                <li class="nav-item active ">
                    <a href="index.html" class="nav-link ml-5  text-body">STRONA GŁÓWNA</a>
                </li>


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-body ml-5" href="#" data-toggle="dropdown" role="button" aria-expanded="false" id="submenu" aria-haspopup="true"> ZACZYNAM </a>
                    <div class="dropdown-menu"  aria-labelledby = "submenu">
                        <a class="dropdown-item" href="zaloguj_na_stronie.php">Logowanie</a>
                        <a class="dropdown-item" href="rejstrowanie.html">Rejstrowanie</a>
                    </div>
                </li>

                <li class="nav-item">
                    <a href="rejstrowanie.html" class="nav-link ml-5 text-body">ZAREZERUJ POBYT</a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link ml-5 text-body">O NAS</a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link ml-5 text-body">KONTAKT</a>
                </li>

                <li class="nav-item">
                    <a href="../projekt_motywacja.html" class="nav-link ml-5 text-body">WRÓC DO MOJEJ STRONY</a>
                </li>

            </ul>
        </div>


    </nav>
</header>



<p>Zarezerwowałeś pobyt w hotelu na dzien:</p>








<?php




$servername = "localhost";
$username = "root";
$password = "";
$dbname = "goscie";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$imie = $_POST['imie'];
$nazwisko = $_POST['nazwisko'];
$tel = $_POST['telefon'];
$email = $_POST['email'];
$czas = $_POST['time'];
$today = date("Y-m-d");

$sql = "INSERT INTO rezerwacja (id, imie, nazwisko, tel, email, kiedy_wpisano, na_kiedy ) VALUES (NULL ,'$imie','$nazwisko','$tel','$email','$today','$czas')";
if ($conn->query($sql) === TRUE) {
    echo  '<div class="container">'."Pana/Pani imie: ".$imie.'<br>'." Pana/Pani nazwisko: ".$nazwisko.'<br>'."Pana/Pani data rezerwacji ".$czas.'</div>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>
<center>  <div class = "klik"><a  href="index.html">Powrót na strone główną</a></div></center>
</body>

</html>