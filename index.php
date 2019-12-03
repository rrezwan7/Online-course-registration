
<?php
session_start();
session_destroy();
session_start();
$_SESSION['authuser']=1;

if(isset($_POST['save_btn']))
    {      
     
	 
$connect = mysql_connect("localhost", "root", "") or die ("check your server connection");
$uname= $_GET['myusername'];
$upass= $_GET['mypassword'];

$_SESSION['username']=$uname;
$_SESSION['pass']=$upass;

mysql_select_db ("2008b4a5723p");
$query="SELECT * FROM members WHERE username='$uname' and password='$upass'";

$results=mysql_query($query) or die(mysql_error());

if($row = mysql_fetch_array($results))
{
echo'<script> window.location="SchoolDB/result.php"; </script> ';
}
else{
  echo"LOGIN FAILED(INVALID USERNAME OR PASSWORD)";
  exit();
  }
  }

 include 'header.php'; ?>

        <!--Student Login-->
        <div class="col-md-6">
            <div class="inside-form">
            <div class="text-center">
                <h2>Student Login</h2>
            </div>
            <form  name="form-1" action="result.php" method="post">
                <div class="form-group">
                  <label for="myusername">User Name</label>
                  <input type="text" id="myusername" name="myusername" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="mypassword" name="mypassword" class="form-control">
                </div>
                <div class="form-group">
                <button class="btn btn-success" type="submit">Submit</button>
                <a href="newreg.php" class="btn btn-success">SignUp</a>
                
                </div>
            </form>
            </div>
        
        </div>
        <!-- Faculty Login -->
        <div class="col-md-6">
        <div class="inside-form">
        <div class="text-center">
                <h2>Faculty Login</h2>
            </div>
            <form  name="form-2" action="result1.php" method="post">
                <div class="form-group">
                  <label for="myusername">Faculty ID</label>
                  <input type="text" name="myusername" id="myusername"  class="form-control">
                </div>
                <div class="form-group">
                    <label for="mypassword">Password</label>
                    <input type="password" name="mypassword" id="mypassword" class="form-control">
                </div>
                <div class="form-group">
                <button class="btn btn-success" type="submit">Submit</button>
               
                </div>
            </form>
            </div>
        
        </div>
        </div>





<?php include 'footer.php'; ?>

