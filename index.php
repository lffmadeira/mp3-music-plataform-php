<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">

        <title>Blues Station</title>       

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <link rel="stylesheet" href="style.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        
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