<?php
session_start();
if ($_SESSION['authuser'] != 1) {
  echo "ACCESS DENIED";
  exit();
}

$connect = mysql_connect("localhost", "root", "") or die("check your server connection.");
mysql_select_db("2008b4a5723p");

$cname = $_POST['course'];
$name = $_POST['name'];

include 'header.php';

$q = "SELECT count(cname) FROM regis WHERE uname='$name'";                 // for verifying the total courses by a student
$r = mysql_query($q) or die(mysql_error());
$reg = mysql_fetch_assoc($r);
foreach ($reg as $value) {
  if ($value > 3) {

    echo "<h2> ERRROR IN REGISTRATION(YOU HAVE ALREADY SELECTED 4 COURSES)";
    echo "<a class=back href='new_course_reg.php'>Back</a></br> </h2>";
    exit();
  }
}

$q1 = "SELECT count(cname) FROM regis WHERE cname='$cname'";                 // for verifying the total students in the course
$r1 = mysql_query($q1) or die(mysql_error());
$reg1 = mysql_fetch_assoc($r1);
foreach ($reg1 as $value1) {
  if ($value1 > 15) {
    printf("<h2>ERRROR IN REGISTRATION(MAXIMUM STUDENTS IN A COURSE REACHED)</h2>");
    exit();
  }
}

$q2 = "SELECT cname FROM regis WHERE cname='$cname' AND uname='$name'";                 // for verifying the if student has already registered for the course
$r2 = mysql_query($q2) or die(mysql_error());
$reg2 = mysql_fetch_assoc($r2);
if (mysql_num_rows($r2) != 0) {
  echo "<h2>COURSE ALREADY REGISTERED BY STUDENT $name <a class=back href='new_course_reg.php'>Back</a> </h2> ";
  exit();
}

$query = "SELECT name FROM course WHERE name='$cname'";              //for inserting the record
$results = mysql_query($query) or die(mysql_error());
if ($rows = mysql_fetch_assoc($results)) {
  foreach ($rows as $value)
    echo "<h2>" . $value . "</h2>";

  echo "<br/><h2>  Above course has been added sucessfully";
  echo "<br/>";
  echo "<a class=back href='new_course_reg.php'>Back</a></br> </h2>";
  $insert = "INSERT INTO regis(uname,cname)
values('$name','$value')";
  $results = mysql_query($insert) or die(mysql_error());
} else {
  echo "error in registration";
  exit();
}

$sum = 0;
$q2 = "SELECT count(cname) FROM regis WHERE uname='$name'";                 // total credit of courses for each student
$r2 = mysql_query($q2) or die(mysql_error());
$reg2 = mysql_fetch_assoc($r2);
foreach ($reg2 as $value2) {
  if ($value2 == 4)                            //If 4 courses registered the will check credit hours 
  {

    $q3 = "SELECT cname FROM regis WHERE uname='$name'";
    $r3 = mysql_query($q3) or die(mysql_error());
    while ($reg3 = mysql_fetch_assoc($r3)) {
      foreach ($reg3 as $value3) {
        $q4 = "SELECT credit FROM course WHERE name='$value3'";
        $r4 = mysql_query($q4) or die(mysql_error());
        $reg4 = mysql_fetch_assoc($r4);
        foreach ($reg4 as $value4) {
          $sum = $sum + $value4;
        }
      }
    }
    if ($sum < 9)                    //If credit hours are less then 9 then registration error
    {
      printf("REGISTRATION ERROR(TOTAL CREDIT IS LESS THAN 9)");
      exit();
    }
  }
}

include 'footer.php';
