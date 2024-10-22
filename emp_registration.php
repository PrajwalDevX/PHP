<form method="POST">


<input type="hidden"  name="hidid" value="101">
Enter Name:<input type="text" name="txtname">
<br>
<br>

Enter Mobile No:<input type="number" name="txtmono">
<br>
<br>

Enter Email_Id:<input type="email" name="txtemail">
<br>
<br>
Address:<input type="textarea" name="txtaddress">
<br>
<br>

City:
<select name="selcity">
     
    <option></option>  
    <option value="Nagpur">Nagpur</option>
    <option value="Mumbai">Mumbai</option>
    <option value="Pune">Pune</option>

</select> 
<br>
<br>






Gender: <input type="radio" value="male" name="radmale"> Male
   
    <input type="radio" value="female" name="radmale" > Female

<br>
<br>



<h2> Technologies</h2>
    


        <input type="checkbox" name="tech1" value="Frontend"> Frontend
    
    <br>

    
        <input type="checkbox" name="tech2" value="Backend" > Backend
  
    <br>

   
        <input type="checkbox" name="tech3" value="Business Logic">Business Logic 
    <br>

    
    <input type="checkbox" name="tech4" value="Cloud">Cloud
    <br>

    
    <input type="checkbox" name="tech5" value="Networking">Networking
    
    <br>
    <br>


    Upload Photo:
    <input type="file" name="filephoto" >
    <br>
    <br>
    Upload Resume:
    <input type="file" name="fileresume" >
    <br>
    <br>

<input type="submit" value="Register" name="btnreg" >

<input type="reset"  value="Clear" name="btnclear" >
<br>
<br>

<?php
$id=$_POST['hidid'];
$username=$_POST['txtname'];
$mono=$_POST['txtmono'];
$email=$_POST['txtemail'];
$gender=$_POST['radmale'];
$address=$_POST['txtaddress'];
$tech=array($_POST['tech1'],$_POST['tech2'],$_POST['tech3'],$_POST['tech4'],$_POST['tech5']);
$photo=$_POST['filephoto'];

$resume=$_POST['fileresume'];

$city=$_POST['selcity'];


 

if(isset($_POST['btnreg']))
{

    echo"<table border=2>";
    echo"<tr> <td> ID</td> <td> $id</td></tr>";
    
    echo"<tr> <td> Name</td> <td> $username</td></tr>";
    echo"<tr> <td> Mobile No.</td> <td> $mono</td></tr>";
    echo"<tr> <td> Email </td> <td> $email</td></tr>";
  
    
    echo"<tr> <td> Address</td> <td> $address</td></tr>";
    echo"<tr> <td> City</td> <td> $city</td></tr>";

    echo"<tr> <td> Gender</td> <td> $gender</td></tr>";
  
   
    echo"<tr> <td> Technologies </td> <td>$tech[0] $tech[1] $tech[2] $tech[3] $tech[4]  </td> </tr>";
    echo"<tr> <td> Photo</td> <td> $photo</td></tr>";
    echo"<tr> <td> Resume</td> <td> $resume</td></tr>";

    echo"</table>";
    



}


?>


