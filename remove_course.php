<?php
session_start();
if($_SESSION['authuser']!=1)
{
echo"ACCESS DENIED";
exit();
}
$connect = mysql_connect("localhost", "root", "") or die ("check your server connection.");

mysql_select_db("2008b4a5723p");


$remove = "DELETE FROM regis WHERE  cname='$_GET[cname]' and uname='$_GET[uuname]'";

$results=mysql_query($remove) or die(mysql_error());

include'header.php' ;

echo " COURSE SUCESSFULLY REMOVED<br/><a class=btn.btn-success href='index.php'>Back</a>";

include 'footer.php';

?>