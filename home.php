<?php 
include("common/header.php"); 
?>

<div class="row">
<div class="hero">
    <h1 >WELCOME TO ABC COMMUNITY PORTAL</h1>
    <p >Join the world of software developers</br>
	Your dream job is closer than you think!</p>
    <img src="static/banner1.jpg" class="img-responsive" style="width: 100%;">
	
    
  </div>
  </div>
</main>


<!--End of Hero Banner-->
<!--Start of future use space-->
	
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					
				</div>
			</div>
		</div></br>
<!--End of future use space-->
<!--Start of Content 1-->

		<div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">

					<p style="text-align:center">ABC is platform where software developers can </br> 
					share their upcoming projects & ideas to the world.</p>
					<hr>
					<p style="text-align:center">To seek new team for your upcoming projects.  </br> 
					To seek new jobs if you're looking for one</br></br>
					<hr>
					<p style="text-align:center">A bigger connection means more oppertunities can find you!</p>
					
					</p>
					<button type="button" class="btn btn-default btn-block" onclick="window.location.href='register.php'">GET STARTED</button></br>
				</div>
					<div class="container-fluid">
						<div class="col-lg-4">
								<img src="static/showcase_4.jpg" class="img-responsive center-block" /></br>                           	
						</div>
							<div class="container-fluid">
								<div class="col-lg-4">
										<img src="static/showcase_5.jpg" class="img-responsive center-block" /></br>	
								</div>
							</div>
					</div>
			</div>
		</div><hr>

<!--End of Content 1-->
<!--Start of future use space-->
	
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					
				</div>
			</div>
		</div></br>
<!--End of future use space-->
<!-- start of heading 1-->
		<div class="container-fluid">
			<div class ="row">
				<div class="col-lg-12">
				<h2 style="text-align:center">ABOUT ABC COMMUNITY PORTAL !</h2>
				</div>
			</div>
		</div>
<!-- end of heading 1-->
<!--Start of Content 2-->
  	    <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
					<img src="static/img2.png" class="img-responsive center-block" /></br>
						<h4 style="text-align:center">PROFILE</h4>      
							<p style="text-align:center">Tell Your Story With Your Profile</br> 
								Add a job to show who you are</p>
				</div>
					<div class="container-fluid">
							<div class="col-lg-4">
								<img src="static/img3.png" class="img-responsive center-block" /></br>                           
									<h4 style="text-align:center">CONNECT</h4>
										<p style="text-align:center">Build your network by connecting to more people</br> 
										 You can find out more oppertunity.</p>
							</div>
					
		
							<div class="container-fluid">
								<div class="col-lg-4">
										<img src="static/img1.png" class="img-responsive center-block" /></br>	
											<h4 style="text-align:center">POST</h4>
											   <p style="text-align:center">Use the upwork platform to chat,</br> 
											   share files, and collaborate from</br> your desktop or on the go.
								</div>
							</div>
					</div>
			</div>
		</div><hr>	

	<style>
.hero{
  width: auto;
  max-width: 1200px;
  height: 500px;
  text-align: center;
  margin: 0 auto;
  position: relative; 
}
.hero h1{
  margin: auto;
  position: absolute; 
  top: 70px;
  left: 0;
  right: 0;
  bottom: 0;
  z-index: 1;
}
.hero p{
  color: #FFF;
  font-size: 1.5em;
  margin: auto;
  position: absolute; 
  top: 160px;
  left: 0;
  right: 0;
  bottom: 0;
   z-index: 1;
}


.hero h1, .hero p{
  -webkit-animation: scale-in 1.3s ease-out;
  -moz-animation: scale-in 1.3s  ease-out;
    animation: scale-in 1.3s ease-out; 
}
	@media all and (max-width: 768px) {
  
  
  .hero h1{
    font-size: 5vw;
    top: 13vw;
  }
  .hero p{
    font-size: 3vw;
    top: 27vw;
  }
 
}
	</style>
	


<?php include("common/footer.php"); ?>
