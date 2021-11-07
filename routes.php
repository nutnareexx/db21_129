<?php 
$controllers = array('pages'=>['home','error'],
                    'medicine'=>['index','newMedicine','addMedicine','search','updateForm','update','deleteConfirm','delete'],
                    'prescription'=>['index','newPrescription','newdeatilPrescription','addPrescription','add_detailPrescription','search','updateForm','update','deleteConfirm','delete']);

function call($controller,$action){
    require_once("controllers/".$controller."_controller.php");
    switch($controller)
    {
        case"pages": 
            $controller = new PagesController();
        break;

        case"medicine": 
            require_once("models/medicineModel.php");
            $controller = new MedicineController();
        break;
        
        case"prescription": 
            require_once("models/prescriptionModel.php");
            require_once("models/medicineModel.php");
            require_once("models/doctorModel.php");
            require_once("models/telemedicineModel.php");
            require_once("models/pre_detail.php");
            $controller = new PreprescriptionController();
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