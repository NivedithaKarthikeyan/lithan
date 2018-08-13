<?php

include("common/header.php"); 

?>
<html>
<style>

span{
color:red;
}
</style>
<!--Start of Header 2-->	
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">	
					<div style="width: auto;max-width: 1200px;height: 500px;text-align: center;margin: 0 auto;position: relative; ">
					<img src="static/banner2.jpg" style="width: 100%;"class="img-responsive">
					<h2 style="text-align:center;color:orange;  ">Welcome Back</h2>
					<h2 style="text-align:center;color:orange; ">Stay Connected!</h2>
					</div>
				</div>
			</div>
			
<!--End of Header 2-->
<!--Start of Form-->
			
			<form method="post" action="login_proc.php">
			<div class="row">
				<div class="col-lg-4"></div>				
				<div class="col-lg-4">
					<div class="form-group">  
					   
						<label for="email">USER NAME</label></br>    
						<input type="email" name="email" class="form-control" id="email" placeholder="Enter Email You Register With Us">  </br>
					</div>
					<div class="form-group">
					 
						<label for="password">PASSWORD</label></br>    
						<input type="password" name="password"class="form-control" id="password" placeholder="Password You Register With Us">
					</div>
					<div class="form-group">
						<input type="submit"  class="btn btn-default" name="signin" value ="SIGN IN" >
						</br></br>
			
						
						<p style="text-align:center">Not a member in ABC ?<a href="register.php" style="color:orange"> Sign Up</a>.</p>
						<p style="text-align:center"><a href="forgotpassword.php" style="color:orange"> Forgot Password</a> ?</p>
					</div>
					<div class="col-lg-4"></div>
				</div>
					</div></br></br>
					</form>
			</div>
	</html>
<!--end of Form-->
<?php 
include("common/footer.php");
?>