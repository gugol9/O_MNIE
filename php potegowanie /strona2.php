<html>
    <head>
    
    </head>
        
    <body>  
        <h1>POTĘGOWANIE</h1>
        <form action="" method="POST">
            <p><i>Podaj liczbe:</i>
            <input type="number" name="a1"/></p>
           <p><i>Podaj potęgę:</i>
            <input type="number" name="a2"/></p>

            <p>
                <button type="submit">potęguj</button>
            </p>
        </form>
    
        
        <?php
            
            if(isset($_POST['a1'], $_POST['a2'])) 
            { 
                echo pow($_POST['a1'], $_POST['a2']); 
            }
        ?>
            
            

        
    </body>


</html>