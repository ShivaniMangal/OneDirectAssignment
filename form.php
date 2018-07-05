<!-- THIS IS THE SEARCH PAGE -->
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Booking Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--BOOTSTRAP HEADERS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
ul {
    list-style-type: none;
   // margin: 20;
  //  padding: 10px ;
  
}
li {
    float: centre;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding-top: 150px ;
    text-decoration: none;
}
.navbar{
  margin-bottom:0;
}
</style>

</head>    
<body>
<header>
<!-- Navigation Bar Top of the Page-->
<nav class="navbar navbar-default navbar-fixed-top navbar-inverse   ">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="./home.php"><span class="glyphicon glyphicon-home"></span></a></li>
    </div>
  </div>
</nav> 
</header>
    
<style>
   .carousel-inner > .item > img{
       width:100%;
       height:360px;
     }
</style>
     
<!-- Carousel Code -->    
    <div class="container">
      <div class="carousel slide" data-ride="carousel" id="carouselex">
        <ol class="carousel-indicators">
          <li data-target="#carouselex" data-slide-to="0" class="active"></li>
          <li data-target="#carouselex" data-slide-to="1"></li>
          <li data-target="#carouselex" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
          <div class="item active">
            <img src="./imgs/sunset.jpg" alt="image">
          </div>
            
          <div class="item">
            <img src="./imgs/airplane.jpg" alt="image">
          </div>
            
          <div class="item">
            <img src="./imgs/flight.jpg" alt="image">
          </div>
            
          <a href="#carouselex" class="left carousel-control" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
          </a>
          <a href="#carouselex" class="right carousel-control" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
        </div>
      </div>
    
<br>
<br>
<br>
<!-- Check for Availability Form -->
<form method="post" action="flights.php" target="_blank">

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="From">From</label>
      <select id="From" class="form-control" name="Source">
        <option>Chennai, IN - Chennai Airport (MAA)</option>
         <option>Bangalore, IN - Kempegowda International Airport (BLR)</option>
        <option>Hyderabad, IN - Rajiv Gandhi International (HYD)</option>
      </select>
    </div>
    </div>

    <div class="form-group col-md-6">
      <label for="To">To</label>
      <select id="To" class="form-control" name="Destination">
        <option>Bangalore, IN - Kempegowda International Airport (BLR)</option>
        <option>Chennai, IN - Chennai Airport (MAA)</option>
        <option>Hyderabad, IN - Rajiv Gandhi International (HYD)</option>
        <option>New York, US - La Guardia (LGA)</option>
      </select>
    </div>
    <div>


  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="DepartureDate">Departure Date</label>
      <input type="Date" class="form-control" id="DepartureDate" name="Date">
    </div>
    <div class="form-group col-md-6">
      <label for="inputState">No. of Passengers</label>
      <select id="inputState" class="form-control" name="no_of_passengers">
        <option selected>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
        <option>8</option>
        <option>9</option>
      </select>
    </div>
  </div>

  <div class="form-group col-md-6">     
    <button type="submit" class="btn btn-primary">Check for Flights</button>
  </div>
</form>
</div>
</body>
</html>