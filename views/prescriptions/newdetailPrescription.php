<br>
<form method="get" action="">
<br><label> Prescription ID <select name="preid">
    <?php foreach($prescriptionList as $p){
        echo "<option value= $p->pid> $p->pid </option>";
    } 
    ?> </label>
<br>
<br><label> Telemedicine ID <select name="teleid">
    <?php foreach($telemedicineList as $t){
        echo "<option value=$t->tid> $t->tid </option>";
    }
    ?> 
    </select></label>
<br>

<br><label> Medicine ID <select name="medID">
    <?php foreach($medicineList as $m){
        echo "<option value=$m->id> $m->name </option>";
    }
    ?> 
    </select></label>
<br>
<br><label> Prescription Dose <input type="text" name="pdose"/> </label>
<br>
<br><label> Prescription Note <input type="text" name="pnote"/> </label>
<br>
<br>

<input type="hidden" name="controller" value="prescription"/>
<button type="submit" name="action" value="index"> BACK </button>
<button type="submit" name="action" value="add_detailPrescription"> SAVE </button>
</form>