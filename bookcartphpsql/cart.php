// tables database mysql and php

<?php
$bn1=$_POST['AI'];
$bn2=$_POST['HTML'];
$bn3=$_POST['XML'];
$bn4=$_POST['JAVA'];
$am1=$bn1*50;
$am2=$bn1*50;
$am3=$bn1*40;
$am4=$bn1*70;
$y=mysql_connect("localhost","root","");
mysql_select_db("pavan",$y);
$y="INSERT INTO cart(bookname,price,quantity,amount) VALUES('AI',50,$bn1,$am1)"; 
$res=mysql_query($y);
$y="INSERT INTO cart(bookname,price,quantity,amount) VALUES('HTML',50,$bn2,$am2)";
 $res=mysql_query($y);
$y="INSERT INTO cart(bookname,price,quantity,amount) VALUES('XML',40,$bn3,$am3)"; 
$res=mysql_query($y);
$y="INSERT INTO cart(bookname,price,quantity,amount) VALUES('JAVA',70,$bn4,$am4)"; 
$res=mysql_query($y);
$query="SELECT * FROM cart";
$result=mysql_query($query);
echo "<table>"."<tr>"."<th>"."BookName"."</th>"."<th>"."Price"."</th>"."<th>"."Quantity"."</th>"."<th>"."A mount"."</th>"."</tr>";
while($value=mysql_fetch_array($result))
{
echo "<tr>"."<td>".$value['bookname']."</td>"."<td>".$value['price']."</td>"."<td>".$value['quantity']."</td> "."<td>".$value['amount']."</td>"."</tr>";
}
?>
