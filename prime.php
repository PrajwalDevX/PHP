<?php
$num=9;
$flag=0;

for($i=2;$i<=$num-1;$i++)
{

if($num % $i == 0)
{
$flag=1;
}

}


if($flag==1)
{
echo"Number is not prime";

}

else
{
echo"Number is prime";
}


?>