<?php

for($i=1;$i<=4;$i++)
{
    for($j=1;$j<=$i;$j++)
    {
        echo"* ";
    }
    echo"<br>";

}




// Second half of the pattern (decreasing stars)
for($i=3; $i>=1; $i--) {
    for($j=1; $j<=$i; $j++) {
        echo "* ";
    }
    echo "<br>";
}

?>
