<?php $y=mysql_connect("localhost","root",""); 
mysql_select_db("pavan",$y);
$x="select * from catalogue"; 
$res=mysql_query($x);
$var="AddtoCart";
echo "<form method=post action=cart.php>";
//echo "<table>"." <tr>"." <th>"."Bookname"."</th>"."<th>"."Price"."</th>"."<th>"."<input type=button name=btn1 value=$var>"."</input>"."</th>"."</tr>"."</table>";
echo "<table>"." <tr>"." <th>"."Bookname"."</th>"."<th>"."Price"."</th>"."<th>"."Quantity"."</th>"."<th>".""."</th>"."</tr>"; //echo "</form>";
$num=1;
while($val=mysql_fetch_array($res))
{
$str= "btn"+ $num;
//echo "<table>"."<tr>"."<td>".$val['bookname']."</td>"."<td>".$val['price']."</td>"."<td>"."<input type=button name=$str value=$var>"."</input>"."</td>"."</tr>"."</table>"; $str2=$val['bookname'];
//$str4="pr"+$num;
//$str5=$val['price'];
echo "<tr>"."<td>".$val['bookname']."</td>"."<td>".$val['price']."</td>"."<td>"."<input name=$str2>"."</input>"."</td>"."</tr>";
$num++;
// echo "".$val['bookname']."".$val['price'];
}
echo "<tr>"."<td>"."<input type=submit name=btn1
echo "</form>";
?>