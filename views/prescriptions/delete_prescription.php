<?php echo "<br> Are you sure to delete this medicine <br>
            <br> Prescription ID : $pList->pid
            <br> Telemedicine ID : $pList->teleID
            <br> Prescription Date : $pList->preDate
            <br> Doctor ID : $pList->d_ID
            <br> Doctor Name : $pList->dname 
            <br> Medicine ID : $pList->mid
            <br> Medicine Name : $pList->mname
            <br> Prescription Dose : $pList->predose
            <br> Prescription Note : $pList->preNote 
            <br>
            <br>";

?>

<form method="get" action="">
    <input type="hidden" name="controller" value="prescription"/>
    <input type="hidden" name="x" value="<?php echo $pList->pid;?>"/>
    <input type="hidden" name="y" value="<?php echo $pList->mid;?>"/>
    <button type="submit" name="action" value="index"> BACK </button>
    <button type="submit" name="action" value="delete"> DETELE </button>
</form>