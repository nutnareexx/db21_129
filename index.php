<?php
if(isset($_GET['controller']) && isset($_GET['action']))
{
    $controller = $_GET['controller'];
    $action = $_GET['action'];
}
else{
    $controller = 'pages';
    $action = 'home';
}
?>

<html>
<head></head>
<body>
    <?php echo "controller = ".$controller.", action = ".$action ;?>
    <br>
    <br>
    [<a href="?controller=pages&action=home"> HOME </a>]

    [<a href="?controller=doctorsopinion&action=index"> Doctors Opinion </a>]
    
    [<a href="?controller=prescription&action=index"> PRESCRIPTION </a>]

    [<a href="?controller=medicine&action=index"> MEDICINE </a>]


    <br> 
    <?php require_once("routes.php");?>
</body>
</html>