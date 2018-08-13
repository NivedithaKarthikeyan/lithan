
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Homepage</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href ="css/bootstrap.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	 <script src="js/bootstrap.min.js"></script>
	 </head>
<body style="font-family: Montserrat">
<!--Start of Hero Banner-->
<main>

<!--Start of Navigation-->
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
			     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>                        
			</button>          
			
					<a class="navbar-brand" href="home.php" ><img style="height: 50px;margin:auto;width: auto;" class="img-circle"src="static/logo.jpg"></a>
				</div>
					<div class="collapse navbar-collapse" id="myNavbar">
					
						<ul class="nav navbar-nav navbar-right">
						
							  <?php if (isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in']) {?>
							 
      </li>					
                          <?php if (isset($_SESSION['is_admin']) && $_SESSION['is_admin']) {?>
                           <li><a href="updateprofile.php"style="color:orange">UPDATE PROFILE</a></li>
                          <li><a href="edituser.php"style="color:orange">EDIT USER</a></li>
                          <li><a href="email.php"style="color:orange">SEND EMAIL</a></li>
                          
                          <?php } else { ?>
                         <li><a href="updateprofile.php"style="color:orange">UPDATE PROFILE</a></li>
							 <li><a href="searchuser.php"style="color:orange">SEARCH USER</a></li>
                          <?php } ?>
                           <li><a href="logout.php"style="color:orange">LOGOUT</a></li>
                           <?php } else { ?>
							<li><a href="register.php"style="color:orange">REGISTER</a></li>
							<li><a href="login.php"style="color:orange">LOGIN</a></li>
							<?php }?>
						</ul>
				</div>
			</div>
</nav>	
<!--end of Navigation-->
</main>
</html>