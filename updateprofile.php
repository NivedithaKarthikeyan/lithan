<?php
include ('common/session.php');
include ('common/header.php');
?>
<form method="post" action="update_proc.php">
	<div class="row">
		<div class="col-lg-4"></div>				
			<div class="col-lg-4">
				<div class="form-group">  
					<label for="firstname">FIRST NAME</label>   
					<input type="text" name="firstname" class="form-control" id="firstname" placeholder="Enter firstname " value="<?php echo $user->firstname; ?>">  </br>
				</div>
				<div class="form-group">
					<label for="lastname">LAST NAME</label>    
					<input type="text" name="lastname"class="form-control" id="lastname" placeholder="Enter lastname "  value="<?php echo $user->lastname; ?>">
				</div>
				<div class="form-group">
					<label for="city">CITY</label></br>    
					<input type="text" name="city"class="form-control" id="city" placeholder="enter city"  value="<?php echo $user->city; ?>">
				</div>
				<div class="form-group">
					<label for="country">COUNTRY</label></br>    
					<input type="text" name="country"class="form-control" id="country" placeholder="enter country"  value="<?php echo $user->country; ?>">
				</div>
				<div class="form-group">
					<label for="company">COMPANY</label></br>    
					<input type="text" name="company"class="form-control" id="company" placeholder="enter company name"  value="<?php echo $user->companyname; ?>">
				</div>
				<div class="form-group">
				<input type="submit"  class="btn btn-default" name="update" value ="UPDATE" >
				<input type="reset" class="btn btn-default" value="CLEAR ">
				</br></br>
				</div>
	</form>
</div>
</div>







<?php
include ('common/footer.php');
?>