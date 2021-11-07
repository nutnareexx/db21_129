<?php
class PreprescriptionController
{
    public function index()
    {
        $prescriptionList = Prescription::getAll();
        require_once('views/prescriptions/index_prescription.php');
    }

    public function newPrescription()
    {
        $medicineList = Medicine::getAll();
        $telemedicineList =Telemedicine::getAll();
        $doctorList = Doctor::getAll();
        require_once('views/prescriptions/newPrescription.php');
    }

    public function newdeatilPrescription()
    {
        $medicineList = Medicine::getAll();
        $prescriptionList = PreModel::getAll();
        require_once('views/prescriptions/newdetailPrescription.php');
    }

    public function addPrescription()
    {
        $id = $_GET['preid'];
        $tid = $_GET['teleid'];
        $date = $_GET['predate'];
        $docid = $_GET['docID'];
        Prescription::add($id,$tid,$date,$docid);
        $medicineList = Medicine::getAll();
        $prescriptionList = PreModel::getAll();
        require_once('views/prescriptions/newdetailPrescription.php');
        
    }

    public function add_detailPrescription()
    {
        $id = $_GET['preid'];
        $mid = $_GET['medID'];
        $dose = $_GET['pdose'];
        $note = $_GET['pnote'];
        Prescription::add_detail($id,$mid,$dose,$note);
        PreprescriptionController::index();
        
    }

    public function search()
    {
        $key = $_GET['key'];
        $prescriptionList = Prescription::search($key);
        require_once('views/prescriptions/index_prescription.php');
    }

    public function updateForm()
    {
        
        $id=$_GET['pid'];
        $m=$_GET['mid'];
        $preList = Prescription::get($id,$m);
        $medicineList = Medicine::getAll();
        $telemedicineList =Telemedicine::getAll();
        $doctorList = Doctor::getAll();
        require_once('views/prescriptions/updateForm.php');
    }

    public function update()
    {
        $id = $_GET['pid'];
        $tid = $_GET['teleid'];
        $pdate = $_GET['pred'];
        $docid = $_GET['doctorid'];
        $medid = $_GET['medid'];
        $predose = $_GET['pdose'];
        $prenote = $_GET['prenote'];
        Prescription::update($id,$tid,$pdate,$docid,$medid,$predose,$prenote);
        PreprescriptionController::index();
    }

    public function deleteConfirm()
    {
        
        $id=$_GET['pid'];
        $mid = $_GET['mid'];
        $pList = Prescription::get($id,$mid);
        require_once('views/prescriptions/delete_prescription.php');
    }

    public function delete()
    {
        $id = $_GET['x'];
        $mid = $_GET['y'];
        Prescription::delete($id,$mid);
        PreprescriptionController::index();
    }

}
?>