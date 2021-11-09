<form method="get" action="">
    <br><label> Prescription ID <input type="text" name="pid"
        value="<?php echo $preList->pid;?>"/> </label><br>

    <br><label> Telemedicine ID <select name="teleid">
        <?php foreach($telemedicineList as $t)
        {
            echo"<option value = $t->tid";
            if($t->tid==$preList->teleID){
                echo" selected='selected'";
            }
            echo">$t->tid</option>";
        }?>
        </select></label><br>

    <br><label> Prescription Date <input type="date" name="pred"
        value="<?php echo $preList->preDate;?>"/> </label><br>

    <br><label> Doctor ID <select name="doctorid">
        <?php foreach($doctorList as $d)
        {
            echo"<option value = $d->docid";
            if($d->docid==$preList->d_ID){
                echo" selected='selected'";
            }
            echo">$d->Docname </option>";
        }?>"
        </select></label><br>

    <br><label> Medicine ID <select name="medid">
        <?php foreach($medicineList as $m)
        {
            echo"<option value = $m->id";
            if($m->id==$preList->mid){
                echo" selected='selected'";
            }
            echo">$m->name</option>";
        }?>
         </select></label><br>

    <br><label> Prescription Dose <input type="text" name="pdose"
        value="<?php echo $preList->predose;?>"/> </label><br>

    <br><label> Prescription Note <input type="text" name="prenote"
        value="<?php echo $preList->preNote;?>"/> </label><br>
    
    <br>
    <input type="hidden" name="controller" value="prescription"/>
    <button type="submit" name="action" value="index"> BACK </button>
    <button type="submit" name="action" value="update"> UPDATE </button>
</form>