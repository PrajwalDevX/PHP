
<title>mark</title>
<form method="POST">

    Enter marks of subjects:<br><br>
    
    DE2:<input type="text" name="txtde2">
    <br>
    <br>
    OR2:<input type="text" name="txtor2">
    <br>
    <br>
    SE1:<input type="text" name="txtse1">
    <br>
    <br>
    TOC:<input type="text" name="txttoc">
    <br>
    <br>
    WT2:<input type="text" name="txtwt2">
    <br>
    <br>
    SQL:<input type="text" name="txtsql">
    <br>
    <br>

    <input type="submit" name="btnview" value="View marksheet">

</form>

<?php


$de2= $_POST['txtde2'];
$or2= $_POST['txtor2'];
$se1 = $_POST['txtse1'];
$toc = $_POST['txttoc'];
$wt2= $_POST['txtwt2'];
$sql = $_POST['txtsql'];



if (isset($_POST['btnview'])) {
    if($de2<24 or $or2<24 or $se1<24 or $toc<24 or $wt2<24 or $sql<24)
    {
        echo "You are failed.<br>";
        $total=$de2+$or2+$se1+$toc+$wt2+$sql;
        echo"Total marks : $total" ;

        $per=($total/360)*100;
        echo"<br>Percentage is : $per" ;
    }
    else{
        echo"You are passed.<br>";

        $total=$de2+$or2+$se1+$toc+$wt2+$sql;
        echo"Total marks : $total" ;

        $per=($total/360)*100;
        echo"<br>Percentage is : $per" ;


    }


}




?>