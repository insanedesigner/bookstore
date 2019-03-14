<?php
	$title = "User section";
	require_once "./template/header.php";
?>

	<form class="form-horizontal" method="post" action="user_login.php">
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label for="name" class="control-label col-md-4">Username</label>
                    <div class="col-md-4">
                        <input type="text" name="name" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="pass" class="control-label col-md-4">Password</label>
                    <div class="col-md-4">
                        <input type="password" name="pass" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-7" style="margin-right:-13px"></div>
                    <a href="register.php"> Iam a new user</a>
                </div>
                <div class="form-group text-center">

                    <input type="submit" name="submit" class="btn btn-primary " value="Login">

                </div>
            </div>
        </div>


	</form>

<?php
	require_once "./template/footer.php";
?>