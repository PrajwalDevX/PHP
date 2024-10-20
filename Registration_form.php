<form method="POST">



Create Username:<input type="text" name="txtname">
<br>
<br>

Enter Mobile No:<input type="text" name="txtmono">
<br>
<br>

Enter Email_Id:<input type="text" name="txtemail">
<br>
<br>

Enter Password: <input type="password" name="txtpwd">

<br>
<br>

Confirm Password: <input type="password" name="txtcpwd">
<br>
<br>

<input type="submit" value="Register" name="btnreg" >

<input type="submit"  value="Cancel" name="btncancel" >
<br>
<br>

<?php

$username=$_POST['txtname'];
$mono=$_POST['txtmono'];
$email=$_POST['txtemail'];

$pwd=$_POST['txtpwd'];
$cpwd=$_POST['txtcpwd'];

if(isset($_POST['btnreg']))
{

    if($pwd==$cpwd)
    {
        echo"Username Is :".$username;
        
        echo"<br>Mobile No Is :".$mono;
    
        echo"<br>Email Id Is :".$email;
    
    }
    else{
        echo"Login Unsuccessful";

    }

}


?>


