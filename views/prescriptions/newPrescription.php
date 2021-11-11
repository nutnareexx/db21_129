<br>
<form method="get" action="">
<br><label> Prescription ID <input type="text" name="preid"/> </label>
<br>
<br><label> Telemedicine ID <select name="teleid">
    <?php foreach($telemedicineList as $t){
        echo "<option value=$t->tid> $t->tid </option>";
    }
    ?> 
    </select></label>
<br>
<br><label> Prescription Date <input type="date" name="predate"/> </label>
<br>
<br><label> Doctor <select name="docID">
    <?php foreach($doctorList as $d){
        echo "<option value=$d->Docid> $d->Docid </option>";
    }
    ?> 
    </select></label>
<br>
<br>

<input type="hidden" name="controller" value="prescription"/>
<button type="submit" name="action" value="index"> BACK </button>
<button type="submit" name="action" value="addPrescription"> NEXT </button>
</form>
