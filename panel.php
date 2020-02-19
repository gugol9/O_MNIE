
<?php

session_start();

?>



<html>
    <head>  
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="projekt_motywacja1.css"/>
        <title>Motywacja</title>
        
    </head>
    <body>
        
            
          

                    <header>     
                           <nav class="navbar navbar-light bg-warning navbar-expand-md" >
                               
                                <a class = "navbar-brand" href="projekt_motywacja.html"><img src="logo.png" height="30" width="30" alt="" class = "d-inline-block mr-3 aling-bottom" />MOTYWACJA</a>
                               
                               
                              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Przelacznik_nawigacji">
                                    <span class="navbar-toggler-icon"></span>
                               </button>
                               
                               <div class="collapse navbar-collapse" id="menu">
                                   <ul class="navbar-nav">
                                       
                                        <li class="nav-item ">
                                            <a href="projekt_motywacja.html" class="nav-link mr-5">STRONA GŁÓWNA</a>
                                        </li>
                                       
                                       
                                        <li class="nav-item dropdown">
                                            
                                            <a href="#" class="nav-link dropdown-toggle" data-toggle= "dropdown" "mr-5" role="button" aria-expanded="false" id="submenu" aria-haspopup="true">ZACZYNAM</a>
                                            
                                                <div class="dropdown-menu"  aria-labelledby = "submenu">
                                                    <a class="dropdown-item" href="zaloguj_na_stronie.php">Logowanie</a>
                                                    <a class="dropdown-item" href="#">Rejstrowanie</a>

                                                </div>  
                                        </li>
                                       
                                       <li class="nav-item">
                                            <a href="projekt_motywacja.html" class="nav-link ml-5">POZOSTAŁE PROJEKTY</a>
                                        </li>
                                       
                                       <li class="nav-item">
                                            <a href="projekt_motywacja.html" class="nav-link ml-5">O MNIE</a>
                                        </li>
                                       
                                       <li class="nav-item">
                                            <a href="projekt_motywacja.html" class="nav-link ml-5">KONTAKT</a>
                                        </li>
                                       
                                        <li></li>
                                        <li></li>
                                   </ul>
                               </div>
                               
                               
                            </nav>
                    </header> 
                
                <main>
                    <section class="all">
                          <div class="container">
                    <div class="row">
             
 <div class="text-light">

        <?php
        
        
            echo "<p>Witaj ".$_SESSION['imie']."</p>"."<br>";
            echo " ".$_SESSION['login']."<br>";
        
            echo "Rodzaj Twojego marzenia: ".$_SESSION['rodzaj_marzenia']."<br>";
            echo "Twoje marzenie do realizacji: ".$_SESSION['marzenie_do_zrealizowania']."<br>";
         
            echo '<a href="logout.php">wyloguj</a>';
            
          
        
            
        
        
        ?>
     <br><br><br><br>
    
             
        
       <br><br><br><br>
     <p>Dodaj swoje nowe cele na rok 2020</p><br>
     
     <form action="nowy.php" method="POST">
         
         <select name="wybor">
            <option>Pragnienia osobiste</option>
            <option>Relacje z rodziną i przyjaciółmi</option>
            <option>Zdrowie</option>
            <option>Finanse osobiste</option>
            <option>Kariera zawodowa</option>
		
	</select>
      <br>   Wpisz swoje marzenie do zrealizowania: <input type="text" name="marzenie"/><br>
         <input type="submit" value="zapisz"/>
             
        
     
     
     
     </form>
     
     
    <a href="dodawanie.php">dodaj marzenie</a>
    
     </div>



                            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
                            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

                            <script src="js/bootstrap.min.js">

                            </script>


                    </div>
            </div>
         </section>
    </main>
    </body>
</html>