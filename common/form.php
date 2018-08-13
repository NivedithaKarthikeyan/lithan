<html>
<head>
<script>

function validateForm() {
    var w = document.forms["REGISTRATIONFORM"]["firstname"].value;
    if (w == "") {
        
         alert("Enter your First Name");
        return false;
    }
    
    
    var w = document.forms["REGISTRATIONFORM"]["lastname"].value;
    if (w == "") {
        
           alert("Enter your Last Name");
        return false;
    }
    
    var radios = document.getElementsByName("gender");
    var formValid = false;
    var i = 0;
    while (!formValid && i < radios.length) {
        if (radios[i].checked) formValid = true;
        i++;        
    }
    if (!formValid) {
   alert ("Must check some option for gender!");
    return formValid;}
    var w = document.forms["REGISTRATIONFORM"]["company"].value;
    if (w == "") {
        
            alert("enter your company");
        return false;
    }
    var w = document.forms["REGISTRATIONFORM"]["city"].value;
    if (w == "") {
        
            alert("enter your city");
        return false;
    }
    var w = document.forms["REGISTRATIONFORM"]["country"].value;
    if (w == "") {
        
            alert("enter your country");
        return false;
    }
    var w = document.forms["REGISTRATIONFORM"]["email"].value;
    if (w == "") {
        
           alert("Enter your  email");
        return false;
    }
   
   
    var p= document.forms["REGISTRATIONFORM"]["password"].value;
    if (p == "") {
        
            alert("enter your password");
        return false;
    }
    else if (w.length<8){
        alert("enter a valid password more than 8 digit");
        return false;}
    var w = document.forms["REGISTRATIONFORM"]["cpassword"].value;
    var p=document.forms["REGISTRATIONFORM"]["password"].value;
    if (w == "") {
        
            alert("enter your password");
        return false;
    }
    else if (w!=p){
        alert("password does not match please type correctly");
        return false;}
   
}
    </script>
    </head>
</html>
<style>
.error {color: #FF0000;}
</style>

	<!--Start of Form-->
	<form  name="REGISTRATIONFORM" method="post" onsubmit="return validateForm()" action="form-proc2.php">
		<div class="row">
			<div class="col-lg-4"></div>
			<div class="col-lg-4">

<!--firstName -->
    
					</br><label for= "firstname" >FIRST NAME</label></br>
					<span class="error">*</span>
					<input type="text"  class="form-control" name="firstname" placeholder="Enter First Name"
					value="<?php echo isset($_POST['firstname']) ? htmlentities($_POST['firstname']) : ''  ?>"> </br>
					
					
<!--firstName -->
<!--lastName -->
    
			<label for= "lastname">LAST NAME</label></br>
			<span class="error">* </span>
			<input type="text" class="form-control" name="lastname" placeholder="Enter Last Name" 
			value="<?php echo isset($_POST['lastname']) ? htmlentities($_POST['lastname']) : ''  ?>">  </br>
			
<!--lastName -->
<!--gender -->
			<label for= "gender">GENDER</label></br>
			<span class="error">* </span>
			<input type="radio" name="gender" value="female" <?php if (isset($_POST['gender'])&& $_POST['gender']=="female") echo "checked";?>>Female
  <input type="radio" name="gender" value="male"  <?php if (isset($_POST['gender'])  && $_POST['gender']=="male") echo "checked";?>>Male
 </br>
  
			
<!--gender -->
<!--company -->
				</br><label for= "company name">COMPANY NAME</label></br>
				<span class="error">* </span>
			<input type="text"  class="form-control" name="company" placeholder="Enter Company Name">  </br>
			
<!--company -->
<!--city -->
			<label for= "city">CITY</label></br>
				<span class="error">* </span>
			<input type="text"  class="form-control" name="city" placeholder="Enter City Name">  </br>
			
<!--city -->
<!--country -->
			<label for= "country">COUNTRY</label></br>
				<span class="error">*</span>
			<input type="text"  class="form-control" name="country" placeholder="Enter Country Name">  </br>
			
<!--country -->
<!--email -->
			<label for= "email">EMAIL ID</label></br>
			 <span class="error">*</span>
			 </br>
			<input type="email"  name="email" placeholder="Enter Emial ID" 
			value="<?php echo isset($_POST['email']) ? htmlentities($_POST['email']) : '' ?>">
			
  <br>
			<br>
<!--email -->
<!--password -->
			<label for= "password">PASSWORD</label></br>
			<span class="error">* </span>
			<input type="password" class="form-control" name="password" placeholder="Enter password (more than 8 characters)">
			</br>
			 
<!--password-->
			<label for= "password">CONFIRM PASSWORD</label></br>
			<span class="error">*</span>
    
			<input type="password" class="form-control" name="cpassword" placeholder="Retype password">
			</br>
			
<!--password-->
<!--subscription-->
			
    
			<input type="checkbox" name="subscription" value="subscription">subscribe for email notification
			</br>
			
<!--subscription-->
<input type ="submit" value="SUBMIT" name="Submit" >
<input type ="reset" value="CLEAR">
</form>
			

</div>
</div>
</br>
<p style="text-align:center">By joining, you agree to the <a style="color:orange">Terms and Privacy Policy</a>.</p>

<p style="text-align:center">Already have an account? <a href="login.html" style="color:orange">Login</a>
<div class="col-lg-4"></div>
</div>


<!--End of Form-->