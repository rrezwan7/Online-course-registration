<?php
session_start();
if ($_SESSION['authuser'] != 1) {
    echo "ACCESS DENIED";
    exit();
}

$connect = mysql_connect("localhost", "root", "") or die("check your server connection.");
mysql_select_db("2008b4a5723p");

$name = $_POST['cname'];
$query = "SELECT uname FROM regis WHERE cname='$name'";
$results = mysql_query($query) or die(mysql_error());

include 'header.php';

echo "<div class=col> <h1>Students enrolled in : " . $name . "</h1>";
echo "<ol>";
while ($rows = mysql_fetch_assoc($results)) {
    foreach ($rows as $value) {
        echo "<li class=h2>";
        echo $value;
        echo "</li>\n";
    }
}
echo "</ol> </div>\n";

include 'footer.php';
