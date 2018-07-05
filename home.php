<!DOCTYPE html>
<html lang="en">
<head>
  <title>MyTrip</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
<style>
   .carousel-inner > .item > img{
       width:100%;
       height:360px;    
     }
    .thumnails{
        width:900px;
        margin: auto;
    }
        
    .text_format{
        font-family: Times New Roman;
    }
    
</style>
</head>
<body>

<header>
    <div class="navbar navbar-default navbar-fixed-top navbar-inverse">
        <div class="collpase navbar-collapse" id="example"> 
          <ul class="nav navbar-nav">
            <li class="active"><a href="form.php"><span class="glyphicon glyphicon-tasks"></span>Book Now</a></li>
          </ul>
        </div>
                                     
        <!--  
        <form action="" class="navbar-form navbar-right" role="search">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Start Reading">
            </div>
            <button type="submit" class="btn btn-primary">Begin!</button> 
          </form>
        -->                                          
        </div>

      </div>
    </div>
    
   </header>  
     <div class="container">
      <div class="carousel slide" data-ride="carousel" id="carouselex">
        <ol class="carousel-indicators">
          <li data-target="#carouselex" data-slide-to="0" class="active"></li>
          <li data-target="#carouselex" data-slide-to="1"></li>
          <li data-target="#carouselex" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
          <div class="item active">
            <img src="./imgs/flight1.jpeg" alt="image">
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
    </div>
    
<br>
<br>
<br>

<div class="container">
      <div class="row">                               
        <div class="col-md-3 col-sm-6 col-md-3">
            <div class="thumbnail">
            <a href="">
              <img src="./imgs/ic-flight-1.jpg" alt="Poems">
            </a><center>
                <h4 class="text_format">Chennai - Bangalore</h4></center>
           </div>
        </div>
          
       <div class="col-md-3 col-sm-6 col-md-3">
           <div class="thumbnail">
            <a href="">
              <img src="./imgs/ic-flight-2.jpg" alt="GOT">
            </a>
               <center>
                   <h4 class="text_format">Delhi - Chennai</h4></center>
          </div>
       </div> 
  
         <div class="col-md-3 col-sm-3 col-md-3">
           <div class="thumbnail">
            <a href="">
              <img src="./imgs/ic-flight-4.jpg" alt="GOT">
            </a><center>
               <h4 class="text_format">NewYork - China</h4></center>
          </div>
       </div> 
          <div class="col-md-3 col-sm-3 col-md-3">
           <div class="thumbnail">
            <a href="">
              <img src="./imgs/ic-flight-3.jpg" alt="GOT">
            </a><center>
               <h4 class="text_format">Chennai - Hyderabad</h4></center>
          </div>
       </div> 
    </div>
    </div>
    </body>
</html>
