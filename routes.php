<?php 
$controllers = array('pages'=>['home','error'],
                    'medicine'=>['index','newMedicine','addMedicine','search','updateForm','update','deleteConfirm','delete']);

function call($controller,$action){
    require_once("controllers/".$controller."_controller.php");
    switch($controller)
    {
        case"pages": $controller = new PagesController();
        break;
        case"medicine": require_once("models/medicineModel.php");
            $controller = new MedicineController();
        break;
    }
    $controller->{$action}();
}

if(array_key_exists($controller,$controllers))
{
    if(in_array($action,$controllers[$controller]))
    {
        call($controller,$action);
    }
    else{
        call('pages','error');
    }
}
else{
    call('pages','error');
}
?>