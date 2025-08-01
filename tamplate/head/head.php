<?php
 session_start();
 ?>

<!DOCTYPE html>
  <html>
    <head>
      <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
	
	        <link rel="stylesheet" type="text/css" href="./css/index.css">
          <link rel="stylesheet" type="text/css" href="style.css">

	
	       <link rel="stylsheet"  type="text/css"  href="font-awesome.css">
	       <link rel="preconnect" href="https://fonts.gstatic.com">




          <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300&display=swap" rel="stylesheet">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
 	        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
          
    </head>

<body onload="fetch()">


  <!-- on site top baar -->



<div class="main">
   <div class="container-fluid bg-primary "></div>

  <div class="container-fluid  ">
    <div class="row py-2">
      <div class="col-md-5 front_nav ">                   
	        <i class="fa fa-heart"> </i> welcome my site 
	            <a href="covidessential.php">covid-19</a>medical accesories 
				    <i class="fa fa-coffee fa-xs"></i>
		  </div>

			<div class="col-md-12 col-sm-12 col-lg-3 text-center  ">
			   <a href="tel:+917973733520" class="border rounded-pill bg-primary  text-center text-white">+9191009200</a>
		  </div>
<?php 
if(isset($_SESSION['email'])){ ?>

		    <div class="col-md-4 col-sm-12  text-center">
		   		<a href="myaccount.php" data-toggle="tooltip" title="my account"><i class="fa fa-user-circle-o m-2" aria-hidden="true">My Account</i></a>
		    	<a href="#" data-toggle="tooltip" title="Cart"><i class=" fa fa-cart-plus  m-2" aria-hidden="true"></i>Cart</a>
		    	<a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart m-2" aria-hidden="true">Wishlist</i></a>
		    </div>
	    </div>
  </div>
</div>

<?php }?>

<!--  start stickey nav bar -->

<div class="main2 sticky-top" style="width: 100%; ">
	<nav class="navbar navbar-expand-lg navbar-dark bg-light text-dark  py-2  sticky-top ">
  	<div class="container-fluid ">
  		 <!-- <span class="fs-3 fw-bold text-white">Medicare</span> -->
  		
       <a class="navbar-brand  " style="text-decoration:none;" href="index.php">
      <img src="./img/Medicare-removebg-preview.png" class="img-fluid" width="100px" height="30px" ></a>
  		    
        <button class="navbar-toggler  bg-primary" type="button" data-bs-toggle="collapse" data-bs-target="#menu"
   			  aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon  rounded text-danger"></span>
   			</button>

    			<div class="collapse navbar-collapse bg-light text-dark" id="menu">
    				<ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-center text-white">
    				   <li class="nav-item">
    				      		<a class="nav-link active  text-dark " aria-current="page" href="index.php">Home</a>
    				    </li>

    				    	<li class="nav-item">
    				     		 <a class="nav-link text-dark " href="covidessential.php">Covid Essential</a>
    				    	</li>

    				     		<li class="nav-item">
    				     			 <a class="nav-link text-dark " href="fitness.php">Fitness</a>
    				    		</li>
    				     	
    				    			<li class="nav-item dropdown">
    				      			<a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          		          Mom & baby      				 
          		          </a>

          								<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
           						 				<li><a class="dropdown-item text-dark" href="babycare.php">Baby care</a></li>
           						 				<li><a class="dropdown-item text-dark" href="mandfcare.php">Maternity & Faminine care</a></li>
           								</ul>
                        </li>

    				    		<li class="nav-item dropdown">
    				      				<a class="nav-link dropdown-toggle text-dark " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          		            Personal Care
          		            </a>

          									<ul class="dropdown-menu text-dark" aria-labelledby="navbarDropdown">
           						 				<li><a class="dropdown-item" href="#">Fregances care</a></li>
           						 				<li><a class="dropdown-item" href="#">body care</a></li>
           						 				<li><a class="dropdown-item" href="#">Home  care</a></li>
           						 				<li><a class="dropdown-item" href="#">Face care</a></li>
           						 				<li><a class="dropdown-item" href="#">Hair  care</a></li>
           						 				<li><a class="dropdown-item" href="#">Eye care</a></li>
           						 			</ul>
           						 	

                    	</li>

    				    					
    				    						<li class="nav-item">
    				     			 				<a class="nav-link text-dark " href="contact.php">contact</a>
                               <li class="nav-item">
                              <a class="nav-link text-dark " href="tel:+917973733520">call us</a>
                            </li>
    				    						</li>
                            <li class="nav-item">

                              <?php
                              if(!isset($_SESSION["email"]))
                              {
                                ?>
                                <a class="nav-link text-dark " href="login.php">Login</a>
                             <?php }?>
                             <?php
                              if(isset($_SESSION["email"]))
                              {
                                ?>
                                <a class="nav-link text-dark " href="logout.php">Logout</a>
                             <?php }?>


                              
                            </li>
                            

          </ul>

      							<form class="d-flex">
      							      <input class="form-control me-2 rounded-pill  text-dark" type="search" placeholder="Search" 							aria-label="Search">
      							      <button class="btn btn-outline-primary border-primary  text-dark " type="submit">Search</button>
     							  </form>

          </div>
    </div>
  </nav>
</div>