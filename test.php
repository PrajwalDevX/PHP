<html>
    <head>
<style>

    #table{
        border-radius: 12px;
        background-color:lightsalmon;
        padding: 12px;
        border: 2px;
        margin: 12px;
        /* border: salmon; */
    }


    #table td{
        /* border: saddlebrown; */
        /* border-radius: 12px; */
        padding: 12px;
        /* color:aliceblue; */
    }


</style>
</head>
</html>
<table border="1" id="table">

<?php

for ($num = 1; $num <= 10; $num++)
 {
    echo "<tr>";
       for ($i = 1; $i <= 10; $i++) 
{
        echo "<td>".$num * $i."</td>"; // Multiplication results
   
 }
    echo "</tr>";
}

?>

</table>
