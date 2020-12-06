<?php
include("php/dbconnect.php");

$error = '';
if(isset($_POST['submit']))
{

$username =  $username=$_POST['username'];
$phone=$_POST['phone'];
$password=$_POST['password'];
$psw = md5($password);
$rs=mysqli_query($conn,"select * from user where username='$username'");
if (mysqli_num_rows($rs)>0)
{
    echo '<script>alert("Username already exists.")</script>';

}
else{

$query="insert into user(username,phone,password) values('$username','$phone','$psw')";
$rs=mysqli_query($conn,$query)or die("Could Not Perform the Query");

 echo '<script>if(confirm("Account created successfully.\nGo to Login Page")){location.replace("login.php")}</script>';
 }

}

if (isset($_SESSION["login"]) )
    {
        header("Location: index.php");
        exit;
    }


?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>School Fees Payment System</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="css/font-awesome.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
<style>
.myhead{
margin-top:0px;
margin-bottom:0px;
text-align:center;
}
body, html {
  height: 100%;
  margin: 0;
}
body {
  background-image: url("img.jpg");
  height: 100%; 
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
</head>
<body >
    <div class="container">
        
         <div class="row ">
               
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                          
                            <div class="panel-body" style="background-color: #E2E2E2; margin-top:50px; border:solid 3px #0e0e0e;">
							  <h3 class="myhead">School Fees Payment System Registration</h3>
                                <form action="" method="post" onsubmit="">
                                    <hr />
									
									
                                   
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input type="text" class="form-control" placeholder="Your Username " name="username" required />
                                        </div>
					<div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input type="text" class="form-control" placeholder="Phone No: " name="phone" required="true" minlength="10" maxlength="10" />
                                        </div>
                                        
									<div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" class="form-control"  placeholder="Your Password" id="password" name="password" required="true" minlength="6" />
						</div>
                                      <input type="submit" class="btn btn-primary" name="submit" value="Submit">
					<input type="reset" class="btn btn-default" value="Reset">
                                   
                                    </form>
					<p>Already have an account? <a href="login.php">Login here</a>.</p>
                            </div>
                           
                        </div>
                
                
        </div>
    </div>

</body>
</html>
<script>

