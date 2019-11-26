<?php include 'header.php'; ?>

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

