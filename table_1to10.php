<table border="1">

<?php

for($num=1;$num<=10;$num++) { // Outer loop for numbers 1 to 10
    echo "<tr><th colspan='5'>Multiplication Table for $num</th></tr>"; // Heading for each table
    for($i=1;$i<=10;$i++) { // Inner loop for each multiplication step
        echo "<tr>";
        echo "<td>$num</td>";
        echo "<td>*</td>";
        echo "<td>$i</td>";
        echo "<td>=</td>";
        echo "<td>".$num*$i."</td>";
        echo "</tr>";
    }
}

?>

</table>
