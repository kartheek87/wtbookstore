<?php $c=mysql_connect("localhost","root",""); $d=mysql_select_db("hari",$c);
if($c)
echo"connected to database <br>"; else
echo"not connected"; ?>