<?php
 
 $con = new mysqli("localhost","root","","medicare");
 $stmt = $con->prepare("SELECT * FROM  contact");
 $stmt->execute() or die($this->con->error);
 $rows = array();
 $result = $stmt->get_result();
 if($result->num_rows>0){
 	while($data = $result->fetch_assoc()){
 			$rows[] = $data ; 
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

	<table class="table table-info table-striped table-hover">
		<thead>
			<h1 class="text-center text-danger">user details</h1>
			<tr>
				<th>id</th>
				<th> name </th>
				<th>email</th>
				<th>number</th>
				<th>text</th>
				<th>img </th>
				<th>action</th>
			</tr>
		</thead>
		<tbody>
			<?php  $i=0; ?>
			<?php  foreach($rows as $x){ 
				
				$i++;
				?>
			<tr>
				<td> <?php  echo $i; ?></td>
				<td> <?php  echo $x["name"];   ?> </td>
				<td> <?php  echo $x["email"];  ?> </td>
				<td> <?php  echo $x["number"]; ?> </td>
				<td> <?php  echo $x["text"];   ?> </td>
				<td> <img src="<?php  echo $x["img"];  ?>" 
					height="60px" width="60px"> </td>
				<td>
					<a href="./edit.php?id=<?php echo $x['id']; ?>"class="btn btn-sm btn-primary"> Edit </a>
					<a href="./delete.php?id=<?php echo $x['id']; ?>"class="btn btn-sm btn-danger">Delete </a>
  				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
  </body>
</html>