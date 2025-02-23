<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">

        <title>Blues Station</title>       

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <link rel="stylesheet" href="style.css">
        
    </head>   
    <body>
        <div class="title p-2">
            
            <h1>Blues Station</h1> 
        
        </div>
        <hr>    
        <div class="container">
            
            <?php
                include_once 'helpers.php';

                if(isset($_GET['page']))  {
                    if (file_exists("pages/{$_GET['page']}.php")) {
                        include_once "pages/{$_GET['page']}.php";
                    } else {
                        include_once 'pages/error404.php';
                 }
                } else {    
                    include_once 'pages/albums.php';
                }       
            ?>
        
        </div>
    </body>
</html>