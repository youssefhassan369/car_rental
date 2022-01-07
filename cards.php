<!doctype html>
<html>
  <head>
  <link rel="stylesheet" media="screen" href="bootstrap.min.css">

      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

      <title>Hello, world!</title>
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
							<a style="color:black"class="nav-link" href="search.php">FOR BOOKING </a>
						</li>
						<li class="nav-item active">
							<a style="color:black"class="nav-link" href="reservations.php">MY RESERVATIONS </a>
						</li>
						
						
						<li class="nav-item">
							<a  class="nav-link" href="logout.php">Logout</a>
						</li>

					</ul>	
				</div>

			</nav>

  </head>



  <br><br>
  <?php foreach ($resultArray as $row) { ?>

    <div class="card mb-3 d-block" style="width: 1000px; margin-left: auto; margin-right: auto;">
      <div class="row g-0">
        <div class="col-lg-4">
          <img style="height:295px;width:540px"src="https://images.netdirector.co.uk/gforces-auto/image/upload/w_343,h_257,dpr_2.0,q_auto,c_fill,f_auto,fl_lossy/auto-client/4f3a94f309517d480173272c101fe224/thumbnail_mobile.jpg" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-lg-8">
          <div class="card-body">
            <h5 style="font-size:35px"class="card-title">Lambogini</h5>
            <p style="font-size:25px"class="card-text">"<?php echo $row['year']?>" </p>

            <button style="margin-left:40%;"class="btn btn-primary btn-lg" onclick="myFunction()">Reserve</button>

          </div>
        </div>
      </div>
    </div>
    <?php } ?>

    

    

    <div class="card mb-3 d-block" style="width: 1000px; margin-left: auto; margin-right: auto;height:300px">
      <div class="row g-0">
        <div class="col-lg-4">
          <img style="height:295px;width:540px"src="https://images.unsplash.com/photo-1605559424843-9e4c228bf1c2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTB8fGNhcnN8ZW58MHx8MHx8&w=1000&q=80" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-lg-8">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to addkitional content. This content is a little bit longer.</p>
            <button style="margin-left:40%;margin-top:19%"class="btn btn-primary btn-lg" onclick="myFunction()">Reserve</button>

          </div>
        </div>
      </div>
    </div>


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
