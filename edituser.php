<?php
include ('common/session.php');
include ('common/header.php');
?>
<form method="post" action="edit_proc.php">
<div class="row">
	<div class="col-lg-4"></div>				
	<div class="col-lg-4">
		<div class="form-group">  
			<label for="search">Search</label><br />    
			<input type="text" name="search" class="form-control" placeholder="Search User ">  </br>
		</div>
		
		<div class="form-group">
			<input type="submit"  class="btn btn-default" value ="SEARCH" >
		</div>
	</div>
</div>
</form>
<?php
include ('common/footer.php');
?>