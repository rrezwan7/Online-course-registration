<?php
session_start();
if ($_SESSION['authuser'] != 1) {
    echo "ACCESS DENIED";
    exit();
}
$connect = mysql_connect("localhost", "root", "") or die("check your server connection.");

mysql_select_db("2008b4a5723p");


$remove = "DELETE FROM regis WHERE  cname='$_GET[cname]' and uname='$_GET[uuname]'";

$results = mysql_query($remove) or die(mysql_error());

include 'header.php';

echo " <h1> COURSE SUCESSFULLY REMOVED<h1><h2><a class=back href='index.php'>Back</a></h2>";

include 'footer.php';
