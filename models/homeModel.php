<?php
class Home{
    public $t;
    public $c;

    public function __construct($t,$c)
    {
        $this->t = $t;
        $this->c = $c;
     
    }

    public static function getAll()
    {
        $homeList=[];
        require("connection_connect.php");
        $sql = "SELECT d.opinion,COUNT(d.opinion) AS quantity
        FROM doctorsopinion AS d 
        GROUP BY d.opinion";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc())
        {
            $t=$my_row[opinion];
            $c=$my_row[quantity];
            $homeList[] = new Home($t,$c);
        }
        require("connection_close.php");
        return $homeList;
    }

}
?>