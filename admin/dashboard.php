<?php 
session_start();
  if(isset($_SESSION['email']))
  {
      header('location:https://medicare.test/admin/deshboard.php');
  } 
?>
<!DOCTYPE html>
  <html>
    <head>
      <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylsheet" type="text/css" href="admin.css">
    <style>
        .space-between{
           justify-content: space-between;
        }
        .d-flex{
          display: flex;
          justify-content: space-between;
        }
        .flex-div{
          width: 200px;
          height: 200px;
          background-color:darkcyan;
        }
    </style> 

    </head>
<body>



 <div class="container-fluid">
  <div class="row d-flex bg-light py-3" >
	  <div class="col-md-4 text-start">
      <h4 class="text-danger fs-3">Dashboard </h4>
    </div>
	   <div class="col-md-8 text-end">
       <div class="dropdown">  
          <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">Hi admin
          </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="logout.php">logout</a></li>
                    <li><a class="dropdown-item" href="#">changes</a></li>
                </ul>
    </div>
    </div>
  </div>
</div>


 <!-- body portion -->

<div class="my-2 container-fluid bg-light">
    <a class="btn btn-primary" href="fetch.php">contact detail</a>
</div>

  <div class="container-fluid bg-light d-flex space-between">
      <button id="loaddata" class="btn btn-primary">load data</button>
    
  <button type="button" id="addnewdata" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  add new data
</button>
  </div>



  <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">
              Modal title
            </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
      </div>


  <form id="frm" > 
    <div class="modal-body">
      <div>
        <div class="container">
          <div class="row">
            <div class="col-6 mb-3">
              <label>Enter name</label>
              <input type="text" name="name" id="name" class="form-control">
            </div>
            <div class="col-6 mb-3">
              <label>Enter Email</label>
              <input type="text" name="email" id="email" class="form-control">
            </div>
            <div class="col-12 mb-3">
              <label>Register date</label>
              <input type="text" name="registerdate" id="registerdate" class="form-control" value="<?php echo date("y-m-d") ?>" readonly>
            </div>
            <div class="col-12 mb-3">
              <label>status</label>
              <input type="text" name="status" id="status" class="form-control"
              value="<?php  echo "Inactive";?>" readonly>
            </div>
            <div class="col-12 mb-3">
          </div>
             
          </div>
        </div>
      

      </div>
    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <input type="submit" name="submit" id="submit1" class="btn btn-primary">
      </div>
  </form>
    </div>
  </div>
</div>

    <div class="container result"></div>
   </div>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="js/bootstrap.bundle.min.js" ></script>
<script src="js/jquery.js"></script>
<script src="admin.js"></script>
</body>
</html>


