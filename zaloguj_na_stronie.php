<?php

    session_start();
  /*  if(isset($_SESSION['zalogowany'])&&($_SESSION['zalogowany']==true))
    {
        header('Location:panel.php');
        exit();
    }*/

  ?>

<html>
    <head>  
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="projekt_motywacja1.css"/>
        <title>Motywacja - logowanie</title>

    </head>
    <body>
        
            
          

                    <header>     
                           <nav class="navbar navbar-light bg-warning navbar-expand-md" >
                               
                                <a class = "navbar-brand  text-body " href="projekt_motywacja.html"><img src="logo.png" height="30" width="30" alt="" class = "d-inline-block mr-3 aling-bottom" />MOTYWACJA</a>
                               
                               
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
                                                    <a class="dropdown-item" href="logowanie.php">Logowanie</a>
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
                              
                    <div id = "logowanie">
                    
                        
                        <form method="POST" action="laczenie.php">
                           login:  <input type="text" name="login" /><br><br>
                           hasło:   <input type="password" name="haslo" /><br><br>
                                    <input type="submit" value="zaloguj" />
                         
                        </form>
                        
                        <?php
                            if(isset($_SESSION['blad']))
                            {
                                echo $_SESSION['blad'];
                            }
                        
                        
                        
                        
                        
                        ?>

                 
                   </div>
            </div>
         </section>
    </main>



                            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
                            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

                            <script src="js/bootstrap.min.js">

                            </script>
 
    </body>
</html>