<!doctype html>
<html>
  <head>
  <link rel="stylesheet" media="screen" href="bootstrap.min.css">

      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

      <title>Available Cars</title>
    <style>
        body {
          background-image: url('cards_background.png');
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-size: cover;
          }
    </style>
    

      <nav class="navbar navbar-expand-lg navbar-light bg-light ">
				
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
					<a class="navbar-brand" href="#">
   						 <img src="logo2.png" width="60" height="40" alt="">
					</a>
						<li class="nav-item active">
							<a style="color:black"class="nav-link" href="search_design.php">FOR BOOKING </a>
						</li>
						<li class="nav-item active">
							<a style="color:black"class="nav-link" href="reservations.php">My Reservations </a>
						</li>
						
						
						<li class="nav-item">
							<a  class="nav-link" href="logout.php">Logout</a>
						</li>

					</ul>	
				</div>

			</nav>

  </head>



  <br><br>
  <?php 
    include 'DB connection.php';
    if(isset($_POST['search'])){
    $year=$_POST['year'];
    $brand=$_POST['brand'];
    $city=$_POST['city'];
    $max_price=$_POST['tprice'];
    $min_price=$_POST['fprice'];
    $transmission=$_POST['transmission'];
    $type=$_POST['type'];
    $start_date=$_POST['RStart_date'];
    $end_date=$_POST['REnd_date'];

    
    $sql = "SELECT *
    FROM  car natural join office
    WHERE  `year` >= '$year' and city='$city' and transmission='$transmission' and price >= '$min_price' and price <='$max_price' and plate_number NOT IN  ( 
    SELECT  plate_number
    FROM reservation   
    WHERE  
    (start_date <='$start_date' and end_date >= '$start_date') OR (start_date <='$end_date' and end_date >= '$end_date')                      
    Union
    SELECT plate_number 
    FROM service
    WHERE 
    (start_date <='$start_date' and end_date >= '$start_date') OR (start_date <='$end_date' and end_date >= '$end_date'))";
    
    $brand_query="and brand= '$brand' " ;
    $type_query="and type ='$type' " ;
    $query_end="and plate_number NOT IN  ( 
    SELECT  plate_number
    FROM reservation   
    WHERE  
    (start_date <='$start_date' and end_date >= '$start_date') OR (start_date <='$end_date' and end_date >= '$end_date')                      
    Union
    SELECT plate_number 
    FROM service
    WHERE 
    (start_date <='$start_date' and end_date >= '$start_date') OR (start_date <='$end_date' and end_date >= '$end_date') ";

  if($brand!=""){
    $sql.=$brand_query;
  }

  if($type!=""){
    $sql.=$type_query;
  }

  $result = mysqli_query($connection,$sql);
   while ($row=mysqli_fetch_array($result)) { ?>

    <div class="card mb-3 d-block" style="width: 1000px; margin-left: auto; margin-right: auto;">
      <div class="row g-0">
        <div class="col-lg-4">
          <img style="height:295px;width:540px"src="cars/<?php echo $row['image'];?>" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-lg-8">
          <div class="card-body">
            <h5 style="font-size:35px"class="card-title"><?php echo $row['brand']?>   <?php echo $row['model']?>   <?php echo $row['year']?></h5>
            <p style="font-size:25px"class="card-text">Seats:  <?php echo $row['seats']?>  <br>Transmission:  <?php echo $row['transmission']?>    <br>Price/day:  <?php echo $row['price']?>  EGP <br> Insurance value:  <?php echo $row['insurance']?>  EGP</p>

            <button style="margin-left:40%;"class="btn btn-primary btn-lg" onclick="myFunction()">Reserve</button>

          </div>
        </div>
      </div>
    </div>
    <?php }} ?>
    
    <script>
function myFunction() {
  let text;
  if (confirm("Are you sure you want to reserve this car!") == true) {
    window.location.href="reservations.php";
  } else {
    text = "You canceled!";
  }
}
</script>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
      
    </script>
</html>
