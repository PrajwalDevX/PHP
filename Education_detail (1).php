<form method="POST">



Enter Name:<input type="text" name="txtname">
<br>
<br>

Enter Mobile No:<input type="text" name="txtmono">
<br>
<br>

SSC %:<input type="text" name="txtsscper">
<br>
<br>
HSC Stream: <input type="radio" value="Arts" name="hscstream"> Arts 
   
    <input type="radio" value="Commerce" name="hscstream"> Commerce
    
    <input type="radio" value="Science" name="hscstream" > Science

<br>
<br>

HSC %:<input type="text" name="txthscper">
<br>

Graduation Stream: <input type="radio" value="BCA" name="gradstream"> BCA
   
    <input type="radio" value="B.com" name="gradstream"> B.Com
    
    <input type="radio" value="B.Sc" name="gradstream" > B.Sc
<br>



<input type="submit" value="Register" name="btnreg" >

<input type="submit"  value="Clear" name="btnclear" >
<br>
<br>

<?php

$username=$_POST['txtname'];
$mono=$_POST['txtmono'];
$sscper=$_POST['txtsscper'];
$hscstream=$_POST['hscstream'];
$hscper=$_POST['txthscper'];
$gradstream=$_POST['gradstream'];




if(isset($_POST['btnreg']))
{
    echo"<table border=2>";
    
    echo"<tr> <td> Name</td> <td> $username</td></tr>";
    echo"<tr> <td> Mobile No.</td> <td> $mono</td></tr>";
    echo"<tr> <td> SSC % </td> <td> $sscper</td></tr>";
    echo"<tr> <td> HSC Stream</td> <td> $hscstream</td></tr>";
    echo"<tr> <td> HSC %</td> <td> $hscper</td></tr>";
    echo"<tr> <td> Graduation Stream</td> <td> $gradstream</td></tr>";
   
    echo"</table>";
    
}


?>


