<?php
include ('common/session.php');
include ('common/header.php');
?>
<!--Start of Header 2-->
<div class="container-fluid">
<div class="row">
<div class="col-lg-12">
<div style="width: auto;max-width: 1200px;height: 500px;text-align: center;margin: 0 auto;position: relative; ">
<img src="static/banner4.jpg" style="width: 100%;"class="img-responsive">
<h2 style="text-align:center;color:orange;  "><?php 
echo " Dear ". $user->firstname .", your profile is successfully updated" ;
?></h2>

</div>
</div>
</div>

<!--End of Header 2-->


<?php
include ('common/footer.php');
?>