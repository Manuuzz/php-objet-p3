<?php 
    include "personnageExo3.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Exo 2</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <?php
    
        $perso1 = new Personnage("Julien");
        $perso1->stat(); 

    ?>
    
    <a href="index.php" >Index</a>



</body>
</html>