<title>Calculator</title>
<form method="POST">
    Enter First Number:
    <input type="text" name="txtnum1">
    <br>
    <br>
    Enter Second Number:
    <input type="text" name="txtnum2">
    <br>
    <br>
    <input type="submit" name="btnadd" value="+">

    <input type="submit" name="btnsub" value="-">

    <input type="submit" name="btnmul" value="*">

    <input type="submit" name="btndiv" value="/">

    <input type="submit" name="btnmod" value="%">

</form>

<?php
    $num1=$_POST["txtnum1"];

    $num2=$_POST["txtnum2"];


    $result=0;

if (isset($_POST['btnadd']))
 {
    $result=$num1+$num2;
    echo"Addition is :$result";
}


if (isset($_POST['btnsub']))
 {
    $result=$num1-$num2;
    echo"substraction is :$result";

}


if (isset($_POST['btnmul']))
 {
    $result=$num1*$num2;
    echo"multiplication is :$result";

}

if (isset($_POST['btndiv']))
 {
    $result=$num1/$num2;
    echo"Division is :$result";
}


if (isset($_POST['btnmod'])) {
    $result = $num1 % $num2; // Modulus operator
    echo "Modulus is: $result";
}




?>