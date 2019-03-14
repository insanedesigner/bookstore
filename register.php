<?php
	$title = "User Register";
	require_once "./template/header.php";
?>

	<form class="form-horizontal" method="post" action="user_register.php">
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label for="name" class="control-label col-md-4">First Name</label>
                    <div class="col-md-4">
                        <input type="text" name="fname" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="control-label col-md-4">Last Name</label>
                    <div class="col-md-4">
                        <input type="text" name="lname" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="control-label col-md-4">Username</label>
                    <div class="col-md-4">
                        <input type="text" name="username" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="pass" class="control-label col-md-4">Password</label>
                    <div class="col-md-4">
                        <input type="password" name="pass" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="pass" class="control-label col-md-4">Gender</label>
                    <div class="col-md-4">
                       <select class="form-control" class="gender">
                           <option value ="Male">Male</option>
                           <option value ="Female">Female</option>

                       </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="pass" class="control-label col-md-4">DOB</label>
                    <div class="col-md-4">
                        <input type="text" name="dob" class="form-control">
                    </div>
                </div>
                <!--<div class="form-group">
                    <label for="name" class="control-label col-md-4">Email</label>
                    <div class="col-md-4">
                        <input type="text" name="email" class="form-control">
                    </div>
                </div>-->
                <div class="form-group">
                    <label for="name" class="control-label col-md-4">Phone</label>
                    <div class="col-md-4">
                        <input type="text" name="phone" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-7" style="margin-right:-50px"></div>
                    <a href="user.php"> Already Registered?</a>
                </div>
                <div class="form-group text-center">

                    <input type="submit" name="submit" class="btn btn-primary " value="Register">

                </div>
            </div>
        </div>


	</form>

<?php
	require_once "./template/footer.php";
?>