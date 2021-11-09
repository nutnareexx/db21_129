<?php
class Doctor{
    public $Docid;
    public $Docname;
    public $Doclast;
    public $Docphon;
    public $Dochosid;


    public function __construct($docid,$docname,$doclast,$docphon,$dochospi)
    {
        $this->Docid = $docid;
        $this->Docname = $docname;
        $this->Doclast = $doclast;
        $this->Docphon = $docphon;
        $this->Dochosid =$dochospi;
        
    }

    public static function getAll()
    {
        $doctorList=[];
        require("connection_connect.php");
        $sql = "SELECT * FROM `Doctor`";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc())
        {
            $Docid=$my_row[doctor_id];
            $Docname=$my_row[name_D];
            $Docphon=$my_row[phone_D];
            $Dochosid=$my_row[hospital_id];
            $doctorList[] = new Doctor($Docid,$Docname,$Docphon,$Dochosid);
        }
        require("connection_close.php");
        return $doctorList;
    }
}
?>