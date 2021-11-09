<?php
class Opinion{
    public $oid;
    public $teid;
    public $d;
    public $doid;
    public $doname;
    public $op;

    public $staff;
    public $sym;
    public $teled;
    public $tem;
    public $p;
    public $pname;
    public $plast;



    public function __construct($oid,$d,$tid,$p,$n,$l,$doid,$dn,$op)
    {
       $this->oid = $oid;
       $this->d = $d;
       $this->teid = $tid;
       $this->p = $p;
       $this->pname = $n;
       $this->plast = $l;
       $this->doid = $doid;
       $this->doname = $dn;
       $this->op = $op;

    }

    public static function get($id)
    {
        require("connection_connect.php");
        $sql = "SELECT o.opID,o.opDate,o.teleID,t.patient_id,
        pp.NamePeople,pp.LastnameP,o.doctor_id,d.name_D,o.opinion 
        FROM doctorsopinion AS o
        NATURAL JOIN telemedicine AS t NATURAL JOIN Doctor AS d 
        NATURAL JOIN Patient AS p NATURAL JOIN People AS pp
        WHERE o.opID = '$id'";
        $result = $conn->query($sql);
        $my_row = $result->fetch_assoc();
        $oid= $my_row[opID];
        $d= $my_row[opDate];
        $teid= $my_row[teleID];
        $p= $my_row[patient_id];
        $pname= $my_row[NamePeople];
        $plast= $my_row[LastnameP];
        $doid = $my_row[doctor_id];
        $doname = $my_row[name_D];
        $op = $my_row[opinion];
        require("connection_close.php");
        return new Opinion($oid,$d,$teid,$p,$pname,$plast,$doid,$doname,$op);
    }

    public static function getAll(){
        $opiniobList=[];
        require("connection_connect.php");
        $sql = "SELECT o.opID,o.opDate,o.teleID,t.patient_id,
        pp.NamePeople,pp.LastnameP,o.doctor_id,d.name_D,o.opinion 
        FROM doctorsopinion AS o
        NATURAL JOIN telemedicine AS t NATURAL JOIN Doctor AS d 
        NATURAL JOIN Patient AS p NATURAL JOIN People AS pp";

        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc())
        {
            $oid= $my_row[opID];
            $d= $my_row[opDate];
            $teid= $my_row[teleID];
            $p= $my_row[patient_id];
            $pname= $my_row[NamePeople];
            $plast= $my_row[LastnameP];
            $doid = $my_row[doctor_id];
            $doname = $my_row[name_D];
            $op = $my_row[opinion];
            $opiniobList[] = new Opinion($oid,$d,$teid,$p,$pname,$plast,$doid,$doname,$op);
        }
        require("connection_close.php");
        return $opiniobList;
    }

    public static function add($oid,$tid,$odate,$doctorid,$op)
    {
        
        require("connection_connect.php");
        $sql = "INSERT INTO `doctorsopinion`(`opID`, `teleID`, `opDate`, `doctor_id`, `opinion`) 
        VALUES ('$oid','$tid','$odate','$doctorid','$op')";

        $result = $conn->query($sql);
        require("connection_close.php");
        return "add success $result rows";

    }

    public static function search($key)
    {
        $opList=[];
        require("connection_connect.php");
        $sql = "SELECT o.opID,o.opDate,o.teleID,t.patient_id,
        pp.NamePeople,pp.LastnameP,o.doctor_id,d.name_D,o.opinion 
        FROM doctorsopinion AS o
        NATURAL JOIN telemedicine AS t NATURAL JOIN Doctor AS d 
        NATURAL JOIN Patient AS p NATURAL JOIN People AS pp
        WHERE (o.opID LIKE '%$key%' OR o.opDate LIKE '%$key%' OR o.teleID LIKE '%$key%' OR t.patient_id
        LIKE '%$key%' OR pp.NamePeople LIKE '%$key%' OR pp.LastnameP LIKE '%$key%' OR o.doctor_id 
        LIKE '%$key%' OR d.name_D LIKE '%$key%' OR o.opinion )";
        $result = $conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $oid= $my_row[opID];
            $d= $my_row[opDate];
            $teid= $my_row[teleID];
            $p= $my_row[patient_id];
            $pname= $my_row[NamePeople];
            $plast= $my_row[LastnameP];
            $doid = $my_row[doctor_id];
            $doname = $my_row[name_D];
            $op = $my_row[opinion];
            $opList[] = new Opinion($oid,$d,$teid,$p,$pname,$plast,$doid,$doname,$op);
        }
        require("connection_close.php");
        return $opList;

    }

    public static function update($oid,$tid,$odate,$doctorid,$op)
    {
        require("connection_connect.php");
        $sql = "UPDATE `doctorsopinion` 
        SET `teleID`='$tid',`opDate`='$odate',`doctor_id`=$doctorid,`opinion`='$op' 
        WHERE `opID`='$oid'";
        $result = $conn->query($sql);
        require("connection_close.php");
        return "update success $result row";
    }
}
?>