<?php include 'state_edit.php';?>
<html>
	<head>
	<style>
	body {
	background-image: url('welcome.jpg');
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-size: cover;
	}
	</style>
		<link rel="stylesheet" media="screen" href="bootstrap.min.css">

			<title>Edit car state</title>


      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
      <ul class="navbar-nav">
        <a class="navbar-brand" href="adminhome.php">
   						 <img src="logo2.png" width="60" height="40" alt="">
					</a>
						<li class="nav-item active">
							<a class="nav-link" href="customersreport.php">CustomersREPORT <span class="sr-only">(current)</span></a>
						</li>
            <li class="nav-item active">
							<a class="nav-link" href="carsreport.php">CarsREPORT <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="reports.php">REPORTS <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="editcars.php">ADD/DEL CARS<span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="all_reservations.php">VIEW RESERVATIONS <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="advanced.php">ADVANCEDSearch <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a  class="nav-link" href="logout.php">Logout</a>
						</li>
      </ul>
    </div>
  </div>
</nav>

	</head>





	<body class="modal-body">
		<div>
			<form action="editcarstate.php" method="post">
				<br><br><br>
				<h2 style="color:white; text-align:center">Edit Car State</h2>

				<div style="background:lightgrey;opacity:90%; " >


					<div class="form-group">
							<label style="width:20%;font-size:20;color:black;margin-left:20%" class="form-control-plaintext" >Plate Number:</label>
							<input required style="width:25%;font-size:20;color:black;margin-left:20%"type='text' class="form-control" name='plate_number' id="plate_number"/>
							<br>
							<label style="width:20%;font-size:20;color:black;margin-left:20%" class="form-control-plaintext" >Car State:</label>
							<select required style="background:white; width:20%;font-size:20;color:black;margin-left:20%" class="form-control-plaintext" name="state" id="state">

							<option class="form-control-plaintext"  value="">A/O</option>
							<option class="form-control-plaintext" value="a">Available</option>
							<option  class="form-control-plaintext" value="o">Out of service</option>
							</select>

					</div>

					<div style="margin-left:60%">


				</div>
				<input style="color:white;background-color:red;font-size:20;margin-left:50%" class="btn btn-primary btn-lg" id=submit type="submit" name="edit" value="Edit State!"> <br></br>

				</div>

			</form>
		</div>

<!-- <script>
function myFunction() {
  let text;
  if (confirm("Car Deleted!") == true) {
    window.location.href="delete.php";
  }
}
</script> -->
</body>
</html>
