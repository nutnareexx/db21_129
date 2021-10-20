<?php echo "<br> Are you sure to delete this medicine <br>
            <br> MEDICINE ID : $medList->id 
            <br> MEDICINE NAME : $medList->name
            <br> MEDICINE DETAIL : $medList->detail 
            <br>";

?>

<form method="get" action="">
    <input type="hidden" name="controller" value="medicine"/>
    <input type="hidden" name="x" value="<?php echo $medList->id;?>"/>
    <button type="submit" name="action" value="index"> BACK </button>
    <button type="submit" name="action" value="delete"> DETELE </button>
</form>