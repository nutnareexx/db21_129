<table border="1">
    <tr> <td> ID </td> <td> NAME </td> <td> DETAIL </td> 
    <td> EFFECT </td> <td> DOSE </td> <td> TIME </td> <td> DURATION </td> </tr>

    <?php foreach($medicine_list as $m)
    {
        echo "<tr> <td> $m->id </td> <td> $m->name </td> <td> $m->detail </td> 
        <td> $m->effect </td> <td> $m->dose </td> <td> $m->time </td> <td> $m->duration </td> </tr>";
    }
    echo"</table>";
    ?>