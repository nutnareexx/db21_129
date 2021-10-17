<br> MEDICINE <br>

<br> NEW MEDICINE  <a href="?controller=medicine&action=newMedicine">  CLICK </a> 
<br>
<br>
<form method="get" action="">
    <input type="text" name="key">
    <input type="hidden" name="controller" value="medicine">
    <button type="submit" name="action" value="search"> SEARCH </button>
</form>

<table border="1">
    <tr> <td> ID </td> <td> NAME </td> <td> DETAIL </td> 
    <td> EFFECT </td> <td> DOSE </td> <td> TIME </td> <td> DURATION </td>
    <td> UPDATE </td> <td> DELETE </td> </tr>

    <?php foreach($medicineList as $m)
    {
        echo "<tr> <td> $m->id </td> <td> $m->name </td> <td> $m->detail </td> 
        <td> $m->effect </td> <td> $m->dose </td> <td> $m->time </td> <td> $m->duration </td> 
        <td> update </td> <td> delete </td></tr>";
    }
    echo"</table>";
    ?>