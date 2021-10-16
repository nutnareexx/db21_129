<?php
class MedicineController
{
    public function index()
    {
        $medicine_list = Medicine::getAll();
        require_once('views/medicines/index_medicine.php');
    }
   
}
?>