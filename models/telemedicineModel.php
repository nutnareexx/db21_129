<?php
class Telemedicine{
    public $tid;
    public $pid;
    public $tsym;
    public $ttem;
    public $tdate;
    public $staff;


    public function __construct($tid,$pid,$tsym,$ttem,$tdate,$staff)
    {
        $this->tid = $tid;
        $this->pid = $pid;
        $this->tsym = $tsym;
        $this->ttem = $ttem;
        $this->tdate =$tdate;
        $this->staff=$staff;
        
    }

    public static function getAll()
    {
        $telemedicineList=[];
        require("connection_connect.php");
        $sql = "SELECT * FROM `telemedicine`";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc())
        {
            $tid=$my_row[teleID];
            $pid=$my_row[patient_id];
            $tsym=$my_row[symptom];
            $ttem=$my_row[temperature];
            $tdate=$my_row[teledate];
            $staff=$my_row[staffinfh];
            $telemedicineList[] = new Telemedicine($tid,$pid,$tsym,$ttem,$tdate,$staff);
        }
        require("connection_close.php");
        return $telemedicineList;
    }
}
?>