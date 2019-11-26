<?php
session_start();
if($_SESSION['authuser']!=1)
{
echo"ACCESS DENIED";
exit();
}

$connect = mysql_connect("localhost", "root", "") or die ("check your server connection");
$uname= $_POST['myusername'];
$upass= $_POST['mypassword'];

$_SESSION['username']=$uname;
$_SESSION['pass']=$upass;

mysql_select_db ("2008b4a5723p");
$query="SELECT * FROM members WHERE username='$uname' and password='$upass'";

$results=mysql_query($query) or die(mysql_error());

include 'header.php'; 

if($row = mysql_fetch_array($results))
{ echo"<div class=col> <div class=h2 text-center>Welcome ". $row['username'] ."!!</div><br/>";
    echo "<table class=table table-bordered>
    <div class=col><h2 class=text-center> User Information </h2></div> 
    <thead>
    <tr>
      <th scope=col>User Name</th>
      <th scope=col>Branch</th>
      <th scope=col>Semester</th>
    </tr>
  </thead>";

 echo "<tbody> <tr>";
 echo  "<td>". $row['username']. "</td>";
 echo  "<td>". $row['branch']. "</td>";
 echo  "<td>". $row['year']. "</td>";
echo "</tr></tbody>";
}

else {
    echo"LOGIN FAILED(INVALID USERNAME OR PASSWORD)";
    exit();
}
echo "</table>";
 ?>

<form action="new_course_reg.php" method="post">
<input type="submit" class="btn btn-info" value="Course Registration">
</form>

<?php
$query="Select regis.cname, course.credit, course.instructor 
FROM course 
INNER JOIN regis 
ON course.name=regis.cname 
AND regis.uname= '$uname';";
$results=mysql_query($query) or die(mysql_error());
echo "<table class=table table-bordered>
<div class=col><h2 class=text-center> Registered Course </h2></div> 
<thead>
<tr>
<th scope=col></th>
  <th scope=col>Course ID</th>
  <th scope=col>Credits</th>
  <th scope=col>Instructor</th>
</tr>
</thead>";
while ($rows=mysql_fetch_assoc($results)) {
    echo "<tbody> <tr>";
    echo  "<td> <a href='Remove_Course.php?cname=$rows[cname]&uuname=$uname'>Remove</a> </td>";
    foreach($rows as $value) 
    {
        echo  "<td>". $value . "</td>";

    }
    echo "</tr></tbody>";}
    echo "</table> </div>";
    


 include 'footer.php';?>