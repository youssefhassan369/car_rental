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
							<a class="nav-link" href="customersreport.php">Customers <span class="sr-only">(current)</span></a>
						</li>
            <li class="nav-item active">
							<a class="nav-link" href="carsreport.php">Cars <span class="sr-only">(current)</span></a>
						</li>
            <li class="nav-item active">
							<a class="nav-link" href="reports.php">Reports <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="editcars.php">Add/Delete Cars<span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="all_reservations.php">Reservations <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="advanced.php">Advanced Search <span class="sr-only">(current)</span></a>
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
			<form action="carcustomer.php" method="post">
				<br><br><br>
        <h2 style="color:white; text-align:center">RESERVED CARS AND THEIR CUSTOMERs</h2><br>
        <br><br>

        <label  style="font-size:130%;color:white"for="from_date">From:</label>
        <input required style="padding: 4px; width: 160px;"  value=""type="date" id="RStart_date" name="RStart_date">
        <label  style="font-size:130%;color:white"for="to_date" >To:</label>
        <input  style="padding: 4px; width: 160px;" type="date" id="REnd_date" name="REnd_date">
        <button type="submit"  class="btn btn-success" value='search' style="background:grey;">Search</button><br><br>


        <table class="table">

        <thead class="thead-dark">
        <tr>
        <th scope="col">#</th>
        <th scope="col">Plate no.</th>
        <th scope="col">Brand</th>
        <th scope="col">Type</th>
        <th scope="col">Model</th>
        <th scope="col">Year</th>
        <th scope="col">Tran.</th>
        <th scope="col">Color</th>
        <th scope="col">Price</th>
        <th scope="col">Seats</th>
        <th scope="col">State</th>
        <th scope="col">Insu.</th>
        <th scope="col">img.</th>
        <th scope="col">City</th>
				<th scope="col">Office ID</th>
        <th scope="col">customer_id</th>
        <th scope="col">SSN</th>
        <th scope="col">fname</th>
  			<th scope="col">Lname</th>
  			<th scope="col">phone</th>
  			<th scope="col">email</th>
  			<!-- <th scope="col">password</th> -->
  			<th scope="col">reg_date</th>
  			<th scope="col">sex</th>
  			<th scope="col">bdate</th>
  			<th scope="col">addr.</th>
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
				<td>Alex</td>
        <td>10ABC</td>
        <td>Kia</td>
        <td>Sedan</td>
        <td>Rio</td>
        <td>2018</td>
        <td>A</td>
        <!-- <td>Black</td> -->
        <td>400 LE</td>
        <td>4</td>
        <td>Available</td>
        <td>800</td>


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

        </tr>
        </tbody>
        </table>




			</form>
		</div>
	</body>
</html>
