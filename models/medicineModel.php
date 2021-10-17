<?php
class Medicine{
    public $id;
    public $name;
    public $detail;
    public $effect;
    public $dose;
    public $time;
    public $duration;




    public function __construct($id,$name,$detail,$effect,$dose,$time,$duration)
    {
        $this->id = $id;
        $this->name = $name;
        $this->detail = $detail;
        $this->effect = $effect;
        $this->dose = $dose;
        $this->time = $time;
        $this->duration = $duration;
    }

    public static function getAll()
    {
        $medicineList=[];
        require("connection_connect.php");
        $sql = "SELECT * FROM `medicine`";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc())
        {
            $id=$my_row[Mid];
            $name=$my_row[Mname];
            $detail=$my_row[Mdetail];
            $effect=$my_row[Meffect];
            $dose=$my_row[Mdose];
            $time=$my_row[Mtime];
            $duration=$my_row[Mduration];
            $medicineList[] = new Medicine($id,$name,$detail,$effect,$dose,$time,$duration);
        }
        require("connection_close.php");
        return $medicineList;
    }

    public static function search($key){
        $medicineList=[];
        require("connection_connect.php");
        $sql = "SELECT * FROM `medicine` 
        WHERE (Mid LIKE '%$key%' OR Mname LIKE '%$key%' OR Mdetail LIKE '%$key%' OR Meffect LIKE '%$key%' OR Mdose LIKE '%$key%' 
        OR Mtime LIKE '%$key%' OR Mduration LIKE '%$key%')";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc())
        {
            $id=$my_row[Mid];
            $name=$my_row[Mname];
            $detail=$my_row[Mdetail];
            $effect=$my_row[Meffect];
            $dose=$my_row[Mdose];
            $time=$my_row[Mtime];
            $duration=$my_row[Mduration];
            $medicineList[] = new Medicine($id,$name,$detail,$effect,$dose,$time,$duration);
        }
        require("connection_close.php");
        return $medicineList;

    }

    public static function add($id,$name,$detail,$effect,$dose,$time,$duration)
    {
        require("connection_connect.php");
        $sql = "INSERT INTO `medicine`(`Mid`, `Mname`, `Mdetail`, `Meffect`, `Mdose`, `Mtime`, `Mduration`) 
        VALUES ('$id','$name','$detail','$effect',$dose,'$time','$duration')";
        $result = $conn->query($sql);
        require("connection_close.php");
        return "[ add success $result rows ]";
    }

}
?>