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

			<title>customer reserve</title>


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
			<form action="customersreport.php" method="post">
				<br><br><br>
				<h2 style="color:white; text-align:center">Customers REPORT</h2><br>


        <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">customer_id</th>
      <th scope="col">SSN</th>
      <th scope="col">fname</th>
			<th scope="col">Lname</th>
			<th scope="col">phone</th>
			<th scope="col">email</th>
			<th scope="col">reg_date</th>
			<th scope="col">sex</th>
			<th scope="col">birth_date</th>
			<th scope="col">address</th>
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
			<td>400 LE</td>
			<td>4</td>
      <td>4</td>
			<td>Available</td>


    </tr>
    <tr>
      <th scope="row">2</th>
			<td>10ABC</td>
      <td>Kia</td>
      <td>Sedan</td>
			<td>Rio</td>
			<td>2018</td>
			<td>A</td>
			<td>400 LE</td>
			<td>4</td>
      <td>4</td>
			<td>Available</td>

    </tr>
    <tr>
      <th scope="row">3</th>
			<td>10ABC</td>
      <td>Kia</td>
      <td>Sedan</td>
			<td>Rio</td>
			<td>2018</td>
			<td>A</td>
			<td>400 LE</td>
			<td>4</td>
      <td>4</td>
			<td>Available</td>

    </tr>
  </tbody>
</table>


			</form>
		</div>
	</body>
</html>