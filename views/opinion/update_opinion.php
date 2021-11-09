<form method="get" action="">
    <br><lable> Opinion ID <input type="text" name="oid"
    value="<?php echo $opList->oid;?>"/> </lable>
    <br>
    <br><lable> Telemedicine ID <select name="tele">
        <?php foreach($teleList as $t)
        {
            echo "<option value=$t->tid";
            if($t->tid == $opList->teid){
                echo " selected='selected'";
            }
            echo "> $t->tid </option>";
        }
        ?> </select></lable>
    <br>
    <br><lable> Opinion Date <input type="date" name="date"
    value="<?php echo $opList->d;?>"/> </lable>
    <br>
    <br><lable> Doctor ID <select name="doctor">
        <?php foreach($doctorList as $doc)
        {
            echo "<option value=$doc->Docid";
            if($doc->Docid == $opList->doid){
                echo " selected='selected'";
            }
            echo "> $doc->Docname </option>";
        }
        ?> </select></lable>
    <br>
    <br><lable> Opinion <input type="text" name="op"
    value="<?php echo $opList->op;?>"/> </lable>
    <br>
    <br>

    <input type="hidden" name="controller" value="doctorsopinion"/>
    <button type="submit" name="action" value="index"> BACK </button>
    <button type="submit" name="action" value="update"> UPDATE </button>
</form>