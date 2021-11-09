<?php
class PagesController
{
    public function home()
    {
        $hList = Home::getAll();
        require_once('views/pages/home.php');
    }
    public function error()
    {
        require_once('views/pages/error.php');
    }
    


    
}
?>