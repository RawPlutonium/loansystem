<?php

if (session_start()) {
	session_unset();
	$_SESSION['myid'] = '';
	$_SESSION['names'] = '';
	$_SESSION['email'] = '';
	$_SESSION['roleid'] = '';
	$_SESSION['CREATED'] = '';
	$_SESSION['logged'] = '';
	session_destroy();
}

session_start();

require_once("include/admin.func.php");
require_once("include/dbinfo.inc.php");



?>

<!DOCTYPE HTML>
<html>
<head>
<title>Loan Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/lbootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="css/lstyle.css" rel='stylesheet' type='text/css' />
<link href="css/lfont-awesome.css" rel="stylesheet"> 
<script src="js/ljquery.min.js"></script>

<script src="js/lbootstrap.min.js"></script>
</head>
<body id="login">

  <div class="app-cam">
   <div class="well1 white">
   <div class="login-logo">
    <a href=""><img src="images/logo.png" width="260" alt="Loan System" title=""></a>
	
  </div>
  <h2 class="form-heading">Loan Dashboard</h2>
  <form class="form-floating ng-pristine ng-invalid ng-invalid-required ng-valid-email ng-valid-url ng-valid-pattern" autocomplete="off" action="" method="post">
          <fieldset>
            <?php
		
			  ///print_r($_POST);
			  if(isset($_POST['submitLogin']))
			  {
				//print_r($_POST);
				$email = $_POST['username'];
				$password = $_POST['password'];
				$role = $_POST['role'];
				
				if(empty($email) || empty($password) || empty($role))
				{
					echo '<center><font size=2 color=red>*All fields are Mandatory</font></center>';
				}
				else
				{
				
				
				
				$email = stripslashes($email);
				$password = stripslashes($password);
					 
				// encrypt password
				$email = mysqli_escape_string($con,$email);
				$password = md5($password);
				
				$loguser = login_user($email,$password,$role);
				
				if(mysqli_num_rows($loguser) == 1)
				{
					$rows = mysqli_fetch_array($loguser);
					$_SESSION['myid'] = $rows['uid'];
					$_SESSION['names'] = $rows['names'];
					$_SESSION['email'] = $rows['email'];
					$_SESSION['roleid'] = $rows['roleid'];
					$_SESSION['CREATED'] = time();
					$_SESSION['logged'] = 1; // Sets the session;
			
			
		
					echo '<script>self.location=\'loans.php\'</script>';	
				}
				else
				{
					echo '<center><font size=2 color=red>*Invalid Login Credentials</font></center>';
				}
				
				}
			  }
			
			?>
            <div class="form-group">
              <label class="control-label">Username</label>
              <input class="form-control1 ng-invalid ng-valid-email ng-invalid-required ng-touched" ng-model="model.email" required="" name="username" type="text" value="<?php echo @$_POST['username']; ?>" autocomplete="nope" >
            </div>
          
            <div class="form-group">
              <label class="control-label">Password</label>
              <input class="form-control1 ng-invalid ng-valid-url ng-invalid-required ng-touched" ng-model="model.url" required="" name="password" type="password" autocomplete="new-password">
            </div>
			
			<div class="form-group">
              <label class="control-label">&nbsp;</label>
			  <select name="role" class="form-control1 ng-invalid ng-valid-url ng-invalid-required ng-touched" ng-model="model.url" required="" ng-model="model.select" required="">
			  <option value="">Select Role </option>
                <!--<option value='1'>Employer</option>
                <option value='2'>Bank</option>-->
                <option value='3'>Administrator</option>
                
                
              </select>
            </div>
		
			
			<div class="submit"><input type="submit" name="submitLogin" value="Login"></div>
		
		<ul class="new">
			<li class="new_left"><p><a href="#">&nbsp;</a></p></li>
			<li class="new_right"><p class="sign"><a href="">&nbsp;</a></p></li>
			<div class="clearfix"></div>
		</ul>
		
          </fieldset>
        </form>
      </div>
	  </div>
	  </div>
   <div class="copy_layout login">
      
   </div>