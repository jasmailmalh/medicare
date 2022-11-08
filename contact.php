<?php
require_once("./tamplate/head/head.php");
?>


<div>
<div class="container my-4">
	<div class="row">
		<div class="col-lg-6">
			<div>
				<div>
				    <h3 class="text-red"> Contact us </h3> 
				</div>
			        	<div>
								Should you have any queries or suggestions, drop into the address given below or just give us a call. We would be more than glad to hear from you and get back to you.
						</div>

			        <hr class="mb-4">
						<p><li class="fas fa-home mr-3"> new york 23 ,us</li></p>
						<p><li class="fas fa-envelope mr-3"> jasmailmalh13@gmail.com</li></p>
						<p><li class="fas fa-phone mr-3"> +12 234234</li></p>
						<p>
							<li class="fas fa-print mr-3"> +016 3452235</li>
						</p>
			</div>
		</div>
		
			<div class="col-lg-6">
				<div class ="col-12" >
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3424.277020862898!2d75.78972391446541!3d30.87891058562518!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391a81830bce415d%3A0x94eaae4dc8dc36d4!2sG-Tech%20Computers!5e0!3m2!1sen!2sin!4v1621395925177!5m2!1sen!2sin" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
				</div>
			</div>
    </div>
</div></div>

<div>
<div class="contact-area my-4  ">
	<div class="container border">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 text-center">
				<div class="container mx-auto">
					<div class="my-3">	
						<h3>Send us a message </h3>	
					</div>

					<div class="my-3">
								Should you have any queries or suggestions, drop into the address given below or just give us a call. We would be more than glad to hear from you and get back to you.
					</div>
					
				</div>
			</div>			
		</div>	


		<div class="form-area">
			<div class="container">
           		<form action="contect-handle.php" method="POST" enctype="multipart/form-data">
					<div class="row mx-auto">
						<div class="col-lg-4 col-md-12 col-sm-4  my-2">
			 				<input type="text" name="name" class="form-control" placeholder="Enter your name">
						</div>

						<div class="col-lg-4 col-md-12 col-sm-4  my-2">
			 				<input type="email" name="email" class="form-control"  placeholder="Enter your Email">
						</div>

						<div class="col-lg-4 col-md-12 col-sm-4  my-2">
			 				<input type="number"  name= "number" class="form-control"  placeholder="Enter your number">
						</div>

						<div class="col-12 col-md-12 w-100  my-2 ">
							<textarea class="form-control" name="text" rows="3"></textarea>
						</div>
					</div>

					<div>
						<input type="file" name="img" class="form-control" placeholder="enter img">
					</div>

						<div class="col-12 text-center my-4 ">
							<button type="submit" name="submit" id="submit1" class="btn btn-primary border-20 rounded-pill ">SEND MESSAGE</button>
						</div>
				</form>
			</div>
		</div>
	</div>	
</div>
</div>
							

<!-- footer -->

<?php
include_once("./tamplate/footer/footer.php");
?>
