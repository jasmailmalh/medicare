<?php

if(isset($_GET['id'])){
	$id = $_GET['id'];


	$con = new mysqli("localhost", "root","","medicare");
	$stmt = $con->prepare("SELECT * FROM contact WHERE id =?");
	$stmt->bind_param("i",$id);
	$stmt->execute();
	$rows = array();
    $result = $stmt->get_result();
	if($result->num_rows>0){
		$rows = $result->fetch_assoc();
	}

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

<div class="container mt-3 ">
  <div class="col-5 mx-auto">
	<div class="card">
		<div class="card-header">
		<h2 class="text-center">update</h2>
		</div>
			<div>
				<div class="card-body">
					<form  action="update.php" method="post" >
					<div class="mb-3">
						<input type="hidden" name="id"  value="<?php echo $rows['id']; ?>">
						<label for="" class="mb-3 form-label">Enter your name </label>
						<input type="text" name="name" class="form-control" value="<?php echo $rows['name']; ?>">
						<label for="" class="mb-3 form-label">Enter your email</label>
						<input type="email"  name="email" class="form-control" value="<?php echo $rows["email"] ?>">
						<label for="" class="mb-3 form-label">Enter your number </label>
						<input type="number" name="number" class="form-control" value="<?php  echo $rows['number'] ?>">
						<label for="" class="mb-3 form-label"> Enter your address</label>
						<input type="text"  name="text" class="form-control" value="<?php  echo $rows['text']?>">
						<div class="mt-3">
						<button  type="submit " name="submit" class="btn btn-primary" >submit </button>
					    </div>
					</div>
				    </form>
				</div>
			</div>
		</div>
	</div>
  </div>
</div>


</body>
</html>