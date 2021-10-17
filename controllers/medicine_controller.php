<?php
class MedicineController
{
    public function index()
    {
        $medicineList = Medicine::getAll();
        require_once('views/medicines/index_medicine.php');
    }
    
    public function search()
    {
        $key = $_GET['key'];
        $medicineList = Medicine::search($key);
        require_once('views/medicines/index_medicine.php');
    }

    public function newMedicine()
    {
        require_once('views/medicines/new_medicine.php');
    }

    public function addMedicine()
    {
        $id = $_GET['id'];
        $name = $_GET['name'];
        $detail = $_GET['detail'];
        $effect = $_GET['effect'];
        $dose = $_GET['dose'];
        $time = $_GET['time'];
        $duration = $_GET['duration'];
        Medicine::add($id,$name,$detail,$effect,$dose,$time,$duration);
        MedicineController::index();
    }
   
}
?>