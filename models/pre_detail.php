<?php
class PreModel{
    public $pid;
    public $teleID;
    public $preDate;
    public $d_ID;


    public function __construct($pid,$tid,$pdate,$did)
    {
        $this->pid = $pid;
        $this->teleID = $tid;
        $this->preDate = $pdate;
        $this->d_ID = $did;
 
    }

    public static function getAll()
    {
        $preList=[];
        require("connection_connect.php");
        $sql = "SELECT * FROM `prescription`";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc())
        {
            $pid=$my_row[preID];
            $teleID=$my_row[teleID];
            $preDate=$my_row[preDate];
            $d_ID=$my_row[doctor_id];
            $preList[] = new PreModel($pid,$teleID,$preDate,$d_ID);
        }
        require("connection_close.php");
        return $preList;
    }
}
?>