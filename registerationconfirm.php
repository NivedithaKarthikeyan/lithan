<?php
ob_start();
include("common/header.php");

$email=$_GET["email"];
?>
<html>
<!--Start of content-->
			</br>
			<div class="row">
				<div class="col-lg-4"></div>				
				<div class="col-lg-4">
                <div class="form-group">  
                <p style="text-align:center"> 
                You have successfully signed up your account with ABC
				</p>
				 <h2 style="text-align:center"><?php echo $email ?></h2>  
				 <h1 style="font-size:18px">A Confirmation Mail Has Been Sent To Your Mail ID </h1>
				
				<p style="text-align:center"> 
				</br>
				You will use YOUR email ID to log in your account
				</br>
				
				Please enter the password you provided during the registration process
				</br>
				</br>
				Click <a href="login.php" style="color:orange">log in</a> to get Started!
				</p>
			
				</div>
				</br>
				
				<div class="form-group">
				
				</br></br>
				</div>
				<div class="col-lg-4"></div>
			</div>
		</div></br></br>
	</div>
<!--Start of content-->
</html>
<?php include("common/footer.php"); ?>