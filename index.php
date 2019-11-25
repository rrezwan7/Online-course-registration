<?php include 'header.php'; ?>

        <!--Student Login-->
        <div class="col-md-6 bg-info">
            <div class="text-center">
                <h2>Student Login</h2>
            </div>
            <form  name="form-1" action="result.php" method="get">
                <div class="form-group">
                  <label for="user-name">User Name</label>
                  <input type="text" name="user" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="" class="form-control">
                </div>
                <div class="form-group">
                <button class="btn btn-success" type="submit">Submit</button>
                <a href="newreg.php" class="btn btn-success">SignUp</a>
                
                </div>
            </form>
        
        </div>
        <!-- Faculty Login -->
        <div class="col-md-6 bg-info">
        <div class="text-center">
                <h2>Faculty Login</h2>
            </div>
            <form  name="form-2" action="faculty.php" method="get">
                <div class="form-group">
                  <label for="user-name">Faculty ID</label>
                  <input type="text" name="user" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="pass">Password</label>
                    <input type="password" name="pass" id="" class="form-control">
                </div>
                <div class="form-group">
                <button class="btn btn-success" type="submit">Submit</button>
               
                </div>
            </form>
        
        </div>
        </div>
  



<?php include 'footer.php'; ?>

