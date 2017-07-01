<?php //if(!empty($_POST['hdnProcess'])) //{
// //
setcookie("UserId", $_POST['Uname']); 
setcookie("Passwd", $_POST['password']);
setcookie("user1","pavan"); 
setcookie("user2","guru"); setcookie("user3","eshwar"); 
setcookie("user4","vinay"); setcookie("pass1","pavan"); 
setcookie("pass2","guru"); setcookie("pass3","eshwar"); 
setcookie("pass4","vinay");
$UserId = $_POST['Uname']; 
$passwd = $_POST['password'];
if( ($_COOKIE['user1']==$UserId && $_COOKIE['pass1']==$passwd ) || ($_COOKIE['user2']==$UserId && $_COOKIE['pass2']==$passwd ) || ($_COOKIE['user3']==$UserId && $_COOKIE['pass3']==$passwd )|| ($_COOKIE['user4']==$UserId && $_COOKIE['pass4']==$passwd ) )
{ echo "success"; }
else
{ echo "failure"; //setcookie("UserId",NULL,NULL); //setcookie("passwd",NULL,NULL);
} //} ?>