
<title> Fabonacci </title>
<form method="POST">
Enter the terms:
<input type="text" name="txtget">
<br> <br>
<input type="submit" name="btncalc" value="Terms">
<?php

$num_terms=$_POST['txtget'];
$term1=0;
$term2=1;

echo"<br>";
 if(isset($_POST['btncalc']))
{
for($i=1;$i<=$num_terms;$i++)
{
 $term3=$term1+$term2;
echo"$term1&nbsp;";

$term1=$term2;
$term2=$term3;


}
}
?>

















