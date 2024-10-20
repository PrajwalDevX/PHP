<form method="POST">



Enter Name:<input type="text" name="txtname">
<br>
<br>

Enter Mobile No:<input type="text" name="txtmono">
<br>
<br>

Enter Email_Id:<input type="text" name="txtemail">
<br>
<br>
Gender: <input type="radio" value="male" name="radmale"> Male
   
    <input type="radio" value="female" name="radmale" > Female

<br>
<br>

Address:<input type="text" name="txtaddress">
<br>
<br>

<h2> Languages Known</h2>
    


        <input type="checkbox" name="language1" value="English"> English
    
    <br>

    
        <input type="checkbox" name="language2" value="Hindi" > Hindi
  
    <br>

   
        <input type="checkbox" name="language3" value="Marathi"> Marathi
    <br>
    <br>

<input type="submit" value="Register" name="btnreg" >

<input type="submit"  value="Clear" name="btnclear" >
<br>
<br>

<?php

$username=$_POST['txtname'];
$mono=$_POST['txtmono'];
$email=$_POST['txtemail'];
$gender=$_POST['radmale'];
$address=$_POST['txtaddress'];
$language=array($_POST['language1'],$_POST['language2'],$_POST['language3']);


// foreach($language as $lang)
// {
//     echo" $lang" ;
// }


if(isset($_POST['btnreg']))
{
    echo"<table border=2>";
    
    echo"<tr> <td> Name</td> <td> $username</td></tr>";
    echo"<tr> <td> Mobile No.</td> <td> $mono</td></tr>";
    echo"<tr> <td> Email </td> <td> $email</td></tr>";
    echo"<tr> <td> Gender</td> <td> $gender</td></tr>";
    echo"<tr> <td> Address</td> <td> $address</td></tr>";
    echo"<tr> <td> Language known </td> <td>$language[0] $language[1] $language[2] </td> </tr>";
    
    
  //  echo "<tr> <td> Language known </td> <td> " . implode( $language," ,") . "</td> </tr>";
    echo"</table>";
    



}

?>


