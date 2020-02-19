<html>
    <head>
        <meta charset="UTF-8">
    <title>Dom weselny</title>
       
        <link rel="stylesheet" type="text/css" href="style.css"/>
    
    </head> 
    
        <body>
            
            <div id="kontener">
                <div id="baner"><h1><img src = "p3.png" height = 70px/> Dom Weselny zorganizuje wesele za Ciebie <img src = "p3.png" height = 70px/></h1></div>
                    <div id="lewy"><h2> Dom Weselny </h2>
                    ul Przemysłowa 5 <br><br>
                    Kalisz <br><br>
                    <a href = "p3.png"> pobierz logo </a>
                    </div>
                
                <div id="srodkowy"><h2>Oferujemy</h2>
                <ul>
                    <li>Wesela</li>    
                    <li>Bankiety</li>    
                    <li>Konferencje</li>    
                </ul>
                
                
                </div>
                <div id="prawy"><a href = "Regulamin.txt" >Czytaj regulamin</a></div>
                <div id="dolny"><h2>Ile będzie kosztowało moje wesele?</h2>
               
                    
    Podaj liczbe gosci: <input  id = "pole"type="number"/><br>
                        <input  id = "klik" type="checkbox"/> Wesele z poprawinami? <br>
                        <button type="button" name="oblicz koszt" onclick = "licz()" >Oblicz koszt</button>
                        <div id = "wynik"></div>
                    
        <script type="text/javascript"> 
                
            function licz()
                {   
                    var liczba = document.getElementById("pole").value;
                    var liczba1 = document.getElementById("klik").value;
                    document.getElementById("wynik").innerHTML = liczba * 100;
                    
                
                }
            
            
            </script>
                
                </div>
                <div id="stopka"><i>Stronę internetową opracował: 00000000000</i></div>
            </div>
            
          
            
        </body>


</html>