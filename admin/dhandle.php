
<?php 


class handle
{
	private $con;

	public function  __construct()
	{
		$this->con = new mysqli("localhost","root","","medicare");
	}

	function  fetchData()
	{
		$stmt = $this->con->prepare("SELECT * FROM  user");
		$stmt->execute() or die($this->con->error);
		$result = $stmt->get_result();
		 if($result->num_rows>0){
            ?>
            <table class="table table-striped table-hover table-bordered mt-3">
            	<tr>
            		<td>id</td>
            		<td>username</td>
            		<td>email</td>
            		<td>ragisterdate</td>
            		<td>status</td>
           		</tr>
          <?php while($row = $result->fetch_assoc()){ ?> 
                <tr>
          			<td><?php echo $row['id']; ?></td>
          			<td><?php echo $row['username']; ?></td>
          			<td><?php echo $row['email']; ?></td>
          			<td><?php echo $row['registerdate']; ?></td>
          			<td><?php echo $row['status']; ?></td>
                </tr>
         <?php } ?>
		     </table> 
		  <?php }
	}
}
    $obj = new handle();
	$obj->fetchData();
?>