<?php
session_start();
$id=$_SESSION['customer_id'];
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<link rel="stylesheet" media="screen" href="bootstrap.min.css">

    <title>My reservation</title>
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
							<a class="nav-link" href="search_design.php">FOR BOOKING <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="reservations.php">MY RESERVATIONS <span class="sr-only">(current)</span></a>
						</li>
					
						<li class="nav-item">
							<a  class="nav-link" href="logout.php">Logout</a>
						</li>

					</ul>	
				</div>

			</nav>

  </head>





  <body >
  <?php 
    include 'DB connection.php';
      $query="SELECT fname,lname,SSN,email,brand,model,`year`,plate_number,`start_date`,end_date,total_cost,reservation_id,reserv_date
        From customer natural join reservation natural join car
        where customer_id='$id' ";
        $result = mysqli_query($connection,$query);

        while ($row=mysqli_fetch_array($result)) { ?>
      <div class="accordion-item" id="accordion">
          <h2 class="accordion-header" id="headingone">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseone" aria-expanded="false" aria-controls="collapseone">
              Reservation ID: <?php echo $row['reservation_id'];?>           ( Reservation Date: <?php echo $row['reserv_date'];?>)
            </button>
          </h2>
          <div id="collapseone" class="accordion-collapse collapse" aria-labelledby="headingone" data-bs-parent="#accordionExample">
            <div class="accordion-body">

              <div class="card">
                <div class="card-header">
                Start from :  <?php echo $row['start_date'];?> <br>To : <?php echo $row['end_date'];?>
                </div>
                <div class="card-body">
                 
                  <div class="card mb-3" style="max-width: 540px;">
                          <div class="row g-0">
                            <div class="col-md-4">
                              <img src="https://images.unsplash.com/photo-1605559424843-9e4c228bf1c2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTB8fGNhcnN8ZW58MHx8MHx8&w=1000&q=80" class="img-fluid rounded-start" alt="...">
                            </div>
                            
                            <div class="col-md-8">
                              <div class="card-body">
                                <h5 class="card-title">lamborgini</h5>
                                <p class="card-text">*Brand:lamborgini*  *Type:sedan* *Model:logan*   *Year:2022*   *Transmision:A* *price:70000*    *Seats:5*     *insurance:8000* </p>

                              </div>
                            </div>
                          </div>
                        </div>
                  <p class="card-text">start date :_____ --end date:_____ --city:____--</p>
                  <button style="background:green; "class="btn btn-primary btn-lg" onclick="myFunction()">....Pay! ....</button>
                </div>
              </div>
            </div>
            </div>

      </div>
</div>
<?php } ?>


    <script>
    function myFunction() {
      let text;
      if (confirm("Success!") == true) {
        window.location.href="reservations.php";
      }
    }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
