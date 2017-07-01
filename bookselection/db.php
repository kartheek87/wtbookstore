<?php
session_start(); include("database.php"); $a2=$_SESSION['a1']; $b2=$_SESSION['b1']; $c2=$_SESSION['c1']; $d2=$_SESSION['d1'];
//echo $a2;
/*
$x="create table cart1(bname
database.php
varchar(10)
notnull,price
varchar(10)
notnull, quantity varchar(10)
notnull,amount varchar(10) notnull)"; $y=mysql_query($x);
if($x)
echo"<br> created"; else
echo"<br>not created"; */
$query="insert into cart values($a2,$b2,$c2,$d2)"; $q=mysql_query($query);
if($q)
echo"<br> inserted successfully"; else
echo"<br><br> not inserted"; session_unset();
?>