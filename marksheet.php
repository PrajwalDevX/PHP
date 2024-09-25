
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

<table border=1>

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
    echo"<br><br><tr><th colspan='3'>Student Name: Prajwal Ghatole</th></tr>";

    echo"<tr>";
    echo"<td>Subjects</td>";
    echo"<td>Toatal Marks</td>";
    echo"<td>Obtained Marks</td>";
    echo"</tr>";
    
    echo"<tr>";
    echo"<td>DE2</td>";
    echo"<td> 60 </td>";
    echo"<td>$de2</td>";
    echo"</tr>";

    echo"<tr>";
    echo"<td>OR2</td>";
    echo"<td> 60 </td>";
    echo"<td>$or2</td>";
    echo"</tr>";

    echo"<tr>";
    echo"<td>SE1</td>";
    echo"<td> 60 </td>";
    echo"<td>$se1</td>";
    echo"</tr>";
    
    echo"<tr>";
    echo"<td>TOC</td>";
    echo"<td> 60 </td>";
    echo"<td>$toc</td>";
    echo"</tr>";

    echo"<tr>";
    echo"<td>WT2</td>";
    echo"<td> 60 </td>";
    echo"<td>$wt2</td>";
    echo"</tr>";

    echo"<tr>";
    echo"<td>SQL</td>";
    echo"<td> 60 </td>";
    echo"<td>$sql</td>";
    echo"</tr>";

    
    echo"<tr><th colspan='3'>Total Marks:        $total</th></tr>";



}





?>
</table>