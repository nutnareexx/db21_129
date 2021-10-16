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
    <br>[<a href="?controller=pages&action=home"> HOME </a>]
    <br>[<a href="?controller=medicine&action=index"> medicine </a>]
    <?php require_once("routes.php");?>
</body>
</html>