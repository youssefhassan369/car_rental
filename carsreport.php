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

			<title>Home Page</title>


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
							<a class="nav-link" href="viewres.php">VIEW RESERVATIONS <span class="sr-only">(current)</span></a>
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
			<form action="carsreport.php" method="post">
				<br><br><br>
				<h2 style="color:white; text-align:center">CARS REPORT</h2><br>


        <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Plate no.</th>
      <th scope="col">Brand</th>
      <th scope="col">Type</th>
			<th scope="col">Model</th>
			<th scope="col">Year</th>
			<th scope="col">Transmission</th>
			<th scope="col">Color</th>
			<th scope="col">Price</th>
			<th scope="col">Seats</th>
			<th scope="col">State</th>
			<th scope="col">Insurance</th>
			<th scope="col">img.</th>
			<th scope="col">City</th>
    </tr>
  </thead>
  <tbody class="opacity-50" style="background:white;">
    <tr>
      <th scope="row">1</th>
      <td>10ABC</td>
      <td>Kia</td>
      <td>Sedan</td>
			<td>Rio</td>
			<td>2018</td>
			<td>A</td>
			<td>Black</td>
			<td>400 LE</td>
			<td>4</td>
			<td>Available</td>
			<td>800</td>
			<td>img..</td>
			<td>Alex</td>

    </tr>
    <tr>
      <th scope="row">2</th>
			<td>10ABC</td>
      <td>Kia</td>
      <td>Sedan</td>
			<td>Rio</td>
			<td>2018</td>
			<td>A</td>
			<td>Black</td>
			<td>400 LE</td>
			<td>4</td>
			<td>Available</td>
			<td>800</td>
			<td>img..</td>
			<td>Alex</td>
    </tr>
    <tr>
      <th scope="row">3</th>
			<td>10ABC</td>
      <td>Kia</td>
      <td>Sedan</td>
			<td>Rio</td>
			<td>2018</td>
			<td>A</td>
			<td>Black</td>
			<td>400 LE</td>
			<td>4</td>
			<td>Available</td>
			<td>800</td>
			<td>img..</td>
			<td>Alex</td>
    </tr>
  </tbody>
</table>


			</form>
		</div>
	</body>
</html>