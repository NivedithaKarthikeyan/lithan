<?php
include("common/header.php");
?>
<html>
<!--Start of Header 2-->	
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">				
					<h1 style="text-align:center;color:orange">Forgot your password?</h1>
				</div></br>
			</div>
<!--End of Header 2-->
<!--Start of content-->
			</br>
			<form method="post" action="forgotpasswordconfirm.php">
			<div class="row">
				<div class="col-lg-4"></div>				
				<div class="col-lg-4">
                <div class="form-group">  
                <p> 
                By Clicking the GENERTAE button below, you confirm that you 
				would like to generate a New password for this email account. 
				</br></br>
				The old password will immediately stop working and any devices 
				using this password will no longer be able to access 
				this account.
				</br></br>
				Please enter the mail address you provided during the registration process,
				the link to generate new password will be sent to your mail address immedaitely .
				</br>
				Try login agian with the new password!
				</p>
				</div>
				<div class="form-group">  
                    <label for="email">Email</label></br>    
                            <input type="email" class="form-control" id="email" placeholder="Enter Email You Register With Us">  
                </div>
                <div class="form-group">
				<input type="submit" class="btn btn-default" value ="GENERATE">
				</br></br>
				</div>
				</form>
				
				<div class="col-lg-4"></div>
			</div>
		</div></br></br>
	</div>
<!--end of content-->
</html>
<?php
include("common/footer.php");
?>