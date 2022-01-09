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
        <h2 style="color:white; text-align:center">Reserved cars and Customers</h2><br>
        <br><br>

        <label  style="font-size:130%;color:white"for="from_date">From:</label>
        <input required style="padding: 4px; width: 160px;"  value=""type="date" id="RStart_date" name="RStart_date">
        <label  style="font-size:130%;color:white"for="to_date" >To:</label>
        <input  style="padding: 4px; width: 160px;" type="date" id="REnd_date" name="REnd_date">
        <button type="submit" name="submit"  class="btn btn-success" value='search' style="background:grey;">Search</button><br><br>


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
        <th scope="col">Insurance</th>
        <!-- <th scope="col">img.</th> -->
        <th scope="col">office</th>
        <th scope="col">from</th>
        <th scope="col">to</th>

				<!-- <th scope="col">Office ID</th> -->
        <!-- <th scope="col">customer_id</th> -->
        <th scope="col">SSN</th>
        <th scope="col">fname</th>
  			<th scope="col">Lname</th>
  			<th scope="col">phone</th>
  			<th scope="col">email</th>
  			<!-- <th scope="col">reg_date</th> -->
  			<th scope="col">sex</th>
  			<th scope="col">bdate</th>
  			<th scope="col">address</th>
        </tr>
        </thead>
       
       
       <?php 
    include 'DB connection.php';
    if(isset($_POST['submit'])){
      $start_date=$_POST['RStart_date'];
      $end_date=$_POST['REnd_date'];


	$query="SELECT * FROM car natural join reservation natural join office natural join customer
  WHERE 
  `start_date` BETWEEN '$start_date' and '$end_date'
  OR 
  end_date BETWEEN '$start_date' and '$end_date'
  OR
  (
    ('$start_date' >`start_date` and '$start_date' < end_date)
  OR 
  ('$end_date' >`start_date` and '$end_date' < end_date)
)
  
  ORDER BY `start_date`";
	$result = mysqli_query($connection,$query); 
	$index=0;

	while ($row=mysqli_fetch_array($result)) {  $index=$index+1;
		?>
        <tbody class="opacity-50" style="background:white;">
        <tr>
        <th scope="row"><?php echo $index?></th>
        <td><?php echo $row['plate_number']?></td>
        <td><?php echo $row['brand']?></td>
        <td><?php echo $row['type']?></td>
        <td><?php echo $row['model']?></td>
        <td><?php echo $row['year']?></td>
        <td><?php echo $row['transmission']?></td>
        <td><?php echo $row['color']?></td>
        <td><?php echo $row['price']?> EGP</td>
        <td><?php echo $row['seats']?></td>
        <td><?php echo $row['state']?></td>
        <td><?php echo $row['insurance']?> EGP</td>
        <td><?php echo $row['city']?><br><?php echo $row['location']?></td>
        <td><?php echo $row['start_date']?></td>
				<td><?php echo $row['end_date']?></td>
        <td><?php echo $row['SSN']?></td>
				<td><?php echo $row['fname']?></td>
        <td><?php echo $row['lname']?></td>
        <td><?php echo $row['phone']?></td>
        <td><?php echo $row['email']?></td>
        <td><?php echo $row['sex']?></td>
        <td><?php echo $row['birth_date']?></td>
        <td><?php echo $row['address']?></td>
        


        </tr>
        <?php }} ?>

        <!-- <tr>
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

        </tr> -->
        </tbody>
        </table>




			</form>
		</div>
	</body>
</html>
