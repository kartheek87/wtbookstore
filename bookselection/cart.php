<?php
session_start(); $_SESSION['a1']=$_POST['bname']; $_SESSION['b1']=$_POST['price']; $_SESSION['c1']=$_POST['quantity']; $_SESSION['d1']=$_POST['amount']; ?>
<html>
<title>cart page</title>
<body>
<center>
<table width="100%" border="2"> <tr><th>book name</th>
<th>price</th> <th>quantity</th> <th>amount</th>
</tr>
<tr>
<td align="center">xml bible</td> <td align="center">$40.5</td> <td align="center">01</td>
<td align="center">$40.5</td> </tr>
<tr>
<td align="center">java</td>
<td align="center">$100</td>
<td align="center">03</td>
<td align="center">$300</td> </tr>
<tr>
<td align="center">wt</td>
<td align="center">$500</td>
<td align="center">05</td>
<td align="center">$2500</td>
</tr>
<tr>
<td align="center"><?php echo $_SESSION['a1']; ?></td> <td align="center"><?php echo $_SESSION['b1']; ?></td> <td align="center"><?php echo $_SESSION['c1']; ?></td> <td align="center"><?php echo $_SESSION['d1']; ?></td> </tr>
</table>
</center>
<form action="db.php">
<input type="submit" value="insert into db"/> </form>
<form action="logout.php">
<input type="submit" value="logout"/>
</form> </body> </html>