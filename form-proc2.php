<?php 
/**
 * to display and confirm with the user what he is registring in the portal
 */
include("common/header.php"); 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $companyname = $_POST['company'];
    $country = $_POST['country'];
    $city = $_POST['city'];
    
    if (empty($_POST['subscription']))
    {
        $subscription =0;
    }
    else 
        $subscription =1;
}
?>
<!--Start of Header 2-->
<html>
<body>

		
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">				
					<h1 style="text-align:center;color:orange">Please Confirm Your Info</h1>
				</div></br>
			</div>
<!--End of Header 2-->
<!--Start of Form-->
			</br>
			<form method="post" action="form-proc3.php">
			<div class="row">
				<div class="col-lg-4"></div>				
				<div class="col-lg-4">
				
	<!--First Name-->					
					<div class="form-group">  
                    <input type="hidden" name="firstname" value="<?php echo $firstname; ?>">
					 <label for="firstname">Firstname</label></br>  
					  <?php echo $firstname; ?>
						
					</div>
	<!--First Name-->
	<!--Last Name-->
				<div class="form-group">  
                    <input type="hidden" name="lastname" value="<?php echo $lastname; ?>">
                     <label for="lasttname">Lastname</label></br>  
                    <?php echo $lastname; ?>
                </div>
                <div class="form-group">  
                   <input type="hidden" name="gender" value="<?php echo $gender; ?>">
                    <label for="gender">gender</label></br>  
                     <?php echo $gender; ?>
                </div>
	<!--Last Name-->
	
	
                <div class="form-group">  
                    <input type="hidden" name="companyname" value="<?php echo $companyname; ?>">
                     <label for="company">Company</label></br>  
                    <?php echo $companyname; ?>
                </div>
				<div class="form-group">  
                    <input type="hidden" name="city" value="<?php echo $city; ?>">
                     <label for="city">City</label></br>  
                    <?php echo $city; ?>
					 
                </div>
				<div class="form-group">  
                    <input type="hidden" name="country" value="<?php echo $country; ?>">
                     <label for="country">Country</label></br> 
                     <?php echo $country; ?>
                </div>
					 
                
	<!--Email-->
                <div class="form-group">  
                   <input type="hidden" name="email" value="<?php echo $email; ?>">
                   <label for="email">Email</label></br> 
                    Email: <?php echo $email; ?>
					
                </div>
	<!--Email-->                
	<!--Password-->                
                <div class="form-group">
                  <input type="hidden" name="password" value="<?php echo $password; ?>">
                  <label for="Password">Password</label></br> 
                    Password: <?php echo $password; ?>
                </div>
	<!--Password-->	
	<!--Confirm Password-->			
				<div class="form-group">
                   <input type="hidden" name="password" value="<?php echo $password; ?>">
                   <label for="confirmPassword">ConfirmPassword</label></br> 
                    Password: <?php echo $password; ?>
                </div>
<!--Confirm Password-->	
				<div class="form-group">
		        <label for="subscription">subscription</label></br>
		        
		       <?php if ($subscription==1)
		              {
		                  
		               $dis= "email subscribed";
		              }
		               else 
		               $dis= "email not subscribed";
		           
?> 
<input type="hidden" name="subscription" value="<?php echo $dis?>">
subscription: <?php echo $dis; ?>
</div>
				<div>
				
				<input type="submit" class="btn btn-default" name="submit" value="SUBMIT" ></input>
				<button type="button" class="btn btn-default" onclick="window.location.href='register.php'">BACK</button>
			</form>
				
		</div></br>
	</div>
	</div>
	<!--end of Form-->
<div class="col-lg-4"></div>
</body>
</html>

<?php include("common/footer.php"); ?>

