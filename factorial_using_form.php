
<title>Factorial</title>
<form method="post">
    Enter the number:
<input type="text" name="txtget">
<br>
<br>


<input type="submit" value="FIND " name="btncalc">
<br>
<br>
</form>

<?php

$num=$_POST['txtget'];
$fact=1;
if(isset($_POST['btncalc']))
{

$i=1;
while($i<=$num)
{

$fact=$fact*$i;
$i++;

}

echo"Factorial is: $fact";
}
?>


