<form method="POST">


Enter Username:<input type="text" name="txtname">
<br>
<br>
Enter Password: <input type="password" name="txtpwd">

<br>
<br>
<input type="submit" value="Login" name="btnlog" >

<input type="submit" value="Register" name="btnreg" >

<input type="submit"  value="Cancel" name="btncancel" >
<br>
<br>

<?php
$username=$_POST['txtname'];

$pwd=$_POST['txtpwd'];
if(isset($_POST['btnlog']))
{

    if($username=='prajwal@gmail.com' && $pwd=='prajwal@123')
    {
        echo"Login Successful";

    }
    else{
        echo"Login Unsuccessful";

    }

}


?>


