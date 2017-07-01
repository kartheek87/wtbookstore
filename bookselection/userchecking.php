<?php include("database.php");
$r="select * from users"; $t=mysql_query($r); while($u=mysql_fetch_array($t))
{
extract($u);
$x=$uname;
$y=$password;
if($_POST['uname']==$x && $_POST['pwd']==$y)
{
echo"valid user";
include("uservalid.php"); }
else
echo"not a valid user";
} ?>