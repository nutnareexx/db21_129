<form method="get" action="">
    <br><label> Medicine ID <input type="text" name="id"
        value="<?php echo $medList->id;?>"/> </label><br>

    <br><label> Medicine NAME <input type="text" name="name"
        value="<?php echo $medList->name;?>"/> </label><br>

    <br><label> Medicine DETAIL <input type="text" name="detail"
        value="<?php echo $medList->detail;?>"/> </label><br>

    <br><label> Medicine EFFECT <input type="text" name="effect"
        value="<?php echo $medList->effect;?>"/> </label><br>

    <br><label> Medicine TIME <input type="text" name="time"
        value="<?php echo $medList->time;?>"/> </label><br>

    <br><label> Medicine DOSE <input type="text" name="dose"
        value="<?php echo $medList->dose;?>"/> </label><br>

    <br><label> Medicine DURATION <input type="text" name="duration"
        value="<?php echo $medList->duration;?>"/> </label><br>
    
    <br>
    <input type="hidden" name="controller" value="medicine"/>
    <button type="submit" name="action" value="index"> BACK </button>
    <button type="submit" name="action" value="update"> UPDATE </button>
</form>