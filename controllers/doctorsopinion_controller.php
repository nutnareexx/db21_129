<?php
class OpinionController
{
    public function index()
    {
        $opList = Opinion::getAll();
        require_once('views/opinion/index_opinion.php');
    }

    public function newOpinion()
    {
        $teleList = Telemedicine::getAll();
        $doctorList = Doctor::getAll();
        require_once('views/opinion/new_opnion.php');
    }

    public function addOpinion()
    { 
        $id = $_GET['opid'];
        $t = $_GET['t'];
        $d = $_GET['date'];
        $dc = $_GET['doctorid'];
        $op = $_GET['op'];
        Opinion::add($id,$t,$d,$dc,$op);
        OpinionController::index(); 

    }

    public function search()
    {
        $key = $_GET['key'];
        $opList = Opinion::search($key);
        require_once('views/opinion/index_opinion.php');
    }

    public function updateForm()
    {
        $id = $_GET['id'];
        $opList = Opinion::get($id);
        $teleList = Telemedicine::getAll();
        $doctorList = Doctor::getAll();
        require_once('views/opinion/update_opinion.php');
    }

    public function update()
    {
        $id = $_GET['oid'];
        $t = $_GET['tele'];
        $d = $_GET['date'];
        $dc = $_GET['doctor'];
        $op = $_GET['op'];
        Opinion::update($id,$t,$d,$dc,$op);
        OpinionController::index();
    }
}
?>