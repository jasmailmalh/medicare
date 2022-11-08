<?php 
 if(isset($_POST['submit'])){
 	echo "<pre>";
 	print_r($_FILES);
 	echo "</pre>";

 	$name= $_FILES["img"]['name'];
 	$type =$_FILES['img']['type'];
 	$tmp_name = $_FILES['img']['tmp_name'];
 	$size  = $_FILES['img']['size'];


 	echo  $name ."<br>"; 
 	echo $size ."<br>" ;

 	
 }


?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
<div class="container">
	<div class="col-4 mt-3 mx-auto">
		
		<div class="card-body mt-3">
		
		<form  method="post" action="" enctype="multipart/form-data">
			<label class="label-form mb-3">Enter you image</label>
			<input type="file" name="img" >
			<div class="mt-3">
			<button class="btn btn-primary" name="submit">submit</button>
		</div>
	</div>
		</form>
	</div>
</div>


</body>
</html>