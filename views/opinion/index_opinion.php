<br> OPINION <br>

<br> NEW OPINION  <a href="?controller=doctorsopinion&action=newOpinion">  CLICK </a> 
<br>
<br>
<form method="get" action="">
    <input type="text" name="key">
    <input type="hidden" name="controller" value="doctorsopinion">
    <button type="submit" name="action" value="search"> SEARCH </button>
</form>

<table border="1">
    <tr> <td> Opinion ID </td> <td> Opinion Date </td> <td> Telemedicine ID </td> 
    <td> Patient ID </td> <td> Patient Name </td> <td> Patient Lastname </td> 
    <td> Doctor ID </td> <td> Doctor Name </td> <td> Opinion </td>
    <td> UPDATE </td>  </tr>

    <?php foreach($opList as $o)
    {
        echo "<tr> <td> $o->oid </td> <td> $o->d </td> 
        <td> <a href= http://158.108.207.4/db21/db21_127/?controller=telemedicine&action=search&key=$o->teid /> $o->teid </a></td> 
        <td> $o->p </td> <td> $o->pname </td> <td> $o->plast </td> 
        <td> <a href= http://158.108.207.4/db21/db21_125/Myweb/?controller=doctor&action=search&key=$o->doid /> $o->doid </a></td> 
        <td> $o->doname </td> <td> $o->op </td>
        <td> <a href=?controller=doctorsopinion&action=updateForm&id=$o->oid> UPDATE </a> </td> 
        </tr>";
    }
    echo"</table>";
    ?>