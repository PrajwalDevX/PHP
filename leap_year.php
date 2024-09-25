<form method="POST">

<input type="text" name="txtget"><br><br>


<input type="submit" value="Check " name="btncalc">

</form>


<?php
// Input year to check


$year = $_POST['txtget']; // You can change the year to test
    if(isset($_POST['btncalc']))
    {
    if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
        echo "$year is a leap year.";
    } else {
        echo "$year is not a leap year.";
    }
}
?>