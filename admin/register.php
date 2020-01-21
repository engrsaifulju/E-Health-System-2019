<!DOCTYPE html>
<?php 
$success='';
   if(isset($_POST['submit_registration_form'])){
       $fname=$_POST['fname'];
       $lname=$_POST['lname'];
        $email=$_POST['email'];
       $psw=$_POST['psw'];
       
       $connection=mysqli_connect('localhost','root','','medical');
       $result=mysqli_query($connection,"insert into registration (fname,lname,email,psw) values ('$fname','$lname','$email','$psw')");
       if($result==true){
           $success='Your Registration is success !!!';
       }
       else{ $success='Error !!';}
   }
?>




<html lang="en">

  <head>
     
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Register</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body class="bg-dark">

    <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Register an Account</div>
        <div class="card-body">
          <form action="" method="post">
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" class="form-control" placeholder="First name" required="required" autofocus="autofocus" name="fname">
                    <label for="firstName">First name</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" class="form-control" placeholder="Last name" required="required" name="lname">
                    <label for="lastName">Last name</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="email" class="form-control" placeholder="Email address" name="email" required="required">
                <label for="inputEmail" >Email address</label>
              </div>
            </div>
            <div class="form-group">
<!--              <div class="form-row">-->
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="password" class="form-control" placeholder="Password" required="required" name="psw">
                    <label for="inputPassword">Password</label>
                  </div>
                </div>
<!--
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="password" id="confirmPassword" class="form-control" placeholder="Confirm password" required="required" name="cpsw">
                    <label for="confirmPassword">Confirm password</label>
                  </div>
                </div>
-->
<!--              </div>-->
            </div>
            <a class="btn btn-primary btn-block" value="submit" name="submit_registration_form">Register</a>
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="login.php">Login Page</a>
            <a class="d-block small" href="forgot-password.php">Forgot Password?</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  </body>

</html>
