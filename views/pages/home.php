<p> Welcome to our homepage </p>

<br>


<table border="1">
    <tr> <td> Title </td> <td> Quantity </td>  </tr>

    <?php foreach($hList as $h)
    {
        echo "<tr> <td> $h->t </td> 
        <td>  $h->c </td> 
    
        </tr>";
    }
    echo"</table>";
    ?>

