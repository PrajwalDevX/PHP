<form method="POST">
    
    Enter The Radius :
    <input type="text" name="txtrad">
    <br>
    <br>
    Enter The Lenght:
    <input type="text" name="txtlen">
    <br>
    <br>

    Enter The Breadth:
    <input type="text" name="txtbred">
    <br>
    <br>

    <input type="submit" name="btnaot" value="Area Of triangle ">

    <input type="submit" name="btnaor" value="Area Of Rectangle">

    <input type="submit" name="btnaoc" value="Area Of Circle">

</form>

<?php


$r = $_POST['txtrad'];
$length = $_POST['txtlen'];
$breadth = $_POST['txtbred'];

if (isset($_POST['btnaot'])) {
    $aot = 0.5 * $length * $breadth;
    echo "<br>area of Triangle is:$aot";
}

if (isset($_POST['btnaor'])) {

    $aor = $length * $breadth;
    echo "<br>Area Of Rectangle is:$aor";
}

if (isset($_POST['btnaoc'])) {
    $aoc = 3.14 * $r * $r;
    echo "Area Of Circle is:$aoc";
}

?>