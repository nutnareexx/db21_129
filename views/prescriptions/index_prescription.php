<br> PRESCRIPTION <br>

<br> NEW prescription  <a href="?controller=prescription&action=newPrescription"> CLICK </a>
<br> NEW Detail Prescription  <a href="?controller=prescription&action=newdeatilPrescription"> CLICK </a>  
<br>
<br>
<form method="get" action="">
    <input type="text" name="key">
    <input type="hidden" name="controller" value="prescription">
    <button type="submit" name="action" value="search"> SEARCH </button>
</form>

<table border="1">
    <tr> <td> Prescription ID </td> <td> Telemedicine ID </td> <td> Date </td> 
    <td> Doctor ID </td> <td> Doctor Name </td>
    <td> Medicine ID </td> <td> Medicine Name </td> <td> Dose </td> <td> Note </td>
     <td> UPDATE </td> <td> DELETE </td> </tr>

    <?php foreach($prescriptionList as $p)
    {
        echo "<tr> <td> $p->pid </td> 
        <td> <a href= http://158.108.207.4/db21/db21_127/?controller=telemedicine&action=search&key=$p->teleID /> $p->teleID </a> </td> 
        <td> $p->preDate </td> 
        <td> <a href= http://158.108.207.4/db21/db21_125/?controller=doctor&action=search&key=$p->d_ID  /> $p->d_ID </a> </td> 
        <td> $p->dname 
        <td> <a href=?controller=medicine&action=search&key=$p->mid> $p->mid </td> 
        <td> $p->mname </td> <td> $p->predose </td> <td> $p->preNote </td> 

        <td> <a href=?controller=prescription&action=updateForm&pid=$p->pid&mid=$p->mid> UPDATE </a> </td> 
        <td> <a href=?controller=prescription&action=deleteConfirm&pid=$p->pid&mid=$p->mid> DELETE </td>
        </tr>";
    }
    echo"</table>";
    ?>