<?php
class Prescription{
    public $pid;
    public $teleID;
    public $preDate;
    public $d_ID;
    public $dname;
    public $dlast;
    public $mid;
    public $mname;
    public $predose;
    public $preNote;

    public function __construct($pid,$tid,$pdate,$did,$dname,$dl,$mid,$mname,$pdose,$pnote)
    {
        $this->pid = $pid;
        $this->teleID = $tid;
        $this->preDate = $pdate;
        $this->d_ID = $did;
        $this->dname =$dname;
        $this->dlast = $dl;
        $this->mid = $mid;
        $this->mname = $mname;
        $this->predose = $pdose;
        $this->preNote = $pnote;
    }

    public static function get($pid,$mid)
    {
        require("connection_connect.php");
        $sql = "SELECT p.preID,p.teleID,p.preDate,p.doctor_id,c.name_D,c.lastname_D,d.Mid,m.Mname,d.preDose,d.prenote
        FROM prescription AS p
        NATURAL JOIN detailPrescription AS d NATURAL JOIN Doctor AS c NATURAL JOIN medicine AS m
        WHERE p.preID='$pid' AND d.Mid='$mid'";
        $result = $conn->query($sql);
        $my_row = $result->fetch_assoc();
        $pid=$my_row[preID];
        $teleID=$my_row[teleID];
        $preDate=$my_row[preDate];
        $d_ID=$my_row[doctor_id];
        $dname=$my_row[name_D];
        $dlast=$my_row[lastname_D];
        $mid=$my_row[Mid];
        $mname=$my_row[Mname];
        $predose=$my_row[preDose];
        $preNote=$my_row[prenote];
        require("connection_close.php");
        return new Prescription($pid,$teleID,$preDate,$d_ID,$dname,$dlast,$mid,$mname,$predose,$preNote);
    }

    public static function getAll()
    {
        $prescriptionList=[];
        require("connection_connect.php");
        $sql = "SELECT p.preID,p.teleID,p.preDate,p.doctor_id,c.name_D,c.lastname_D,d.Mid,m.Mname,d.preDose,d.prenote
        FROM prescription AS p
        NATURAL JOIN detailPrescription AS d NATURAL JOIN Doctor AS c NATURAL JOIN medicine AS m";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc())
        {
            $pid=$my_row[preID];
            $teleID=$my_row[teleID];
            $preDate=$my_row[preDate];
            $d_ID=$my_row[doctor_id];
            $dname=$my_row[name_D];
            $dlast=$my_row[lastname_D];
            $mid=$my_row[Mid];
            $mname=$my_row[Mname];
            $predose=$my_row[preDose];
            $preNote=$my_row[prenote];
            $prescriptionList[] = new Prescription($pid,$teleID,$preDate,$d_ID,$dname,$dlast,$mid,$mname,$predose,$preNote);
        }
        require("connection_close.php");
        return $prescriptionList;
    }


    public static function add($id,$tid,$date,$docid)
    {
        
        require("connection_connect.php");
        $sql1 = "INSERT INTO `prescription`(`preID`, `teleID`, `preDate`, `doctor_id`) 
        VALUES ('$id','$tid','$date',$docid)";
        $result1 = $conn->query($sql1);

        require("connection_close.php");
        return "[ add success $result1 rows ]";
    
    }

    public static function add_detail($id,$mid,$dose,$note)
    {
        
        require("connection_connect.php");
        $sql2 = "INSERT INTO `detailPrescription`(`preID`, `Mid`, `preDose`, `prenote`) 
        VALUES ('$id','$mid',$dose,'$note')";
        $result2 = $conn->query($sql2);

        require("connection_close.php");
        return "[ add success $result2 rows]";
    
    }



    public static function search($key)
    {
        $prescriptionList=[];
        require("connection_connect.php");
        $sql = "SELECT p.preID,p.teleID,p.preDate,p.doctor_id,c.name_D,c.lastname_D,d.Mid,m.Mname,d.preDose,d.prenote
        FROM prescription AS p
        NATURAL JOIN detailPrescription AS d NATURAL JOIN Doctor AS c NATURAL JOIN medicine AS m
        WHERE (p.preID LIKE '%$key%' OR p.teleID LIKE '%$key%' OR p.preDate LIKE '%$key%' OR p.doctor_id LIKE '%$key%' OR 
        c.name_D LIKE '%$key%' OR c.lastname_D LIKE '%$key%' OR d.Mid LIKE '%$key%' OR m.Mname LIKE '%$key%' OR 
        d.preDose LIKE '%$key%' OR d.prenote LIKE '%$key%')";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc())
        {
            $pid=$my_row[preID];
            $teleID=$my_row[teleID];
            $preDate=$my_row[preDate];
            $d_ID=$my_row[doctor_id];
            $dname=$my_row[name_D];
            $dlast=$my_row[lastname_D];
            $mid=$my_row[Mid];
            $mname=$my_row[Mname];
            $predose=$my_row[preDose];
            $preNote=$my_row[prenote];
            $prescriptionList[] = new Prescription($pid,$teleID,$preDate,$d_ID,$dname,$dlast,$mid,$mname,$predose,$preNote);
        }
        require("connection_close.php");
        return $prescriptionList;
    }

    public static function update($pid,$teleID,$preDate,$d_ID,$mid,$predose,$preNoten)
    {
        require("connection_connect.php");

        $sql1 = "UPDATE `prescription` 
                SET `teleID`='$teleID',`preDate`='$preDate',`doctor_id`=$d_ID 
                WHERE `preID`='$pid'";
        $result1 = $conn->query($sql1);

        $sql2 = "UPDATE `detailPrescription` 
        SET `preDose`=$predose,`prenote`='$preNoten' 
        WHERE `preID`='$pid' AND `Mid`='$mid'";
        $result2 = $conn->query($sql2);

        require("connection_close.php");
        return "update success $result1 row and $result2 row";

    }

    public static function delete ($id,$mid)
    {
        require_once("connection_connect.php");
        $sql2 = "DELETE FROM `detailPrescription` 
        WHERE preID ='$id' AND Mid= '$mid' ";
        $result2 = $conn->query($sql2); 
        require("connection_close.php");
        return "Delete success $result2 row";
    }




}
?>