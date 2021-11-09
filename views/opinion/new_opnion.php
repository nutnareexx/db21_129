<form method="get" action="">
    <br><label> Opinion ID <input type="text" name="opid"/> </label>
    <br>
    <br><label> Telemedicine ID <select name="t">
        <?php foreach($teleList as $t)
        {
            echo "<option value = $t->tid> $t->tid </option>";
        }
        ?> 
        </select></label>
    <br>
    <br><label> Opinion Date <input type="date" name="date"/> </label>
    <br>
    <br><label> Doctor ID <select name="doctorid">
        <?php foreach($doctorList as $d)
        {
            echo "<option value = $d->Docid> $d->Docname  </option>";
        }
        ?> 
        </select></label>
    <br>
    <br><label> Opinion <input type="text" name="op"/> </label>
    <br>
    <br>

    <input type="hidden" name="controller" value="doctorsopinion"/>
    <button type="submit" name="action" value="index"> BACK </button>
    <button type="submit" name="action" value="addOpinion"> SAVE </button>
</form>
