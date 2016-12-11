<!DOCTYPE html>
<html lang="en">
<head>
  <title>Hire</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        .jumbotron 
        {
      margin-bottom: 30px;
      margin-top: 60px;
      color:grey;      
        }
    </style>
</head>
<body style="background-color: black;">
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h4 class="modal-title">Log-in</h4>
        </div>
        <form action="login-script.php" method="post" role="form">
              <div class="modal-body">
                <div class="form-group">
              <label for="InputEmail">Email address</label>
              <input class="form-control" name="InputEmail" id="InputEmail" placeholder="Enter email" type="email">
              </div>
            <div class="form-group">
              <label for="InputPassword">Password</label>
            <input class="form-control" id="InputPassword" name="InputPassword" placeholder="Password" type="password">
            </div>
                <p class="text-right"><a href="#">Forgot password?</a></p>
              </div>
              <div class="modal-footer">
                <!--<a href="#" data-dismiss="modal" class="btn">Close</a>-->

                   <div class="col-xs-6 col-sm-6 col-md-6">
                       <input type="submit" name="SUBMIT_MESSAGE" value="LOG-IN" class="btn btn-lg btn-success btn-block">
                  </div>



                <!--<a href="#" class="btn btn-primary">Log-in</a>-->
              </div>
        </form>
      </div>
    </div>
</div>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="freelancer.php">Freelancing</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav">
         <li><a href="#"><span class="glyphicon glyphicon-search"></span> Search</a></li>     
    </ul>

    <ul class="nav navbar-nav navbar-right">
      <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Register</a></li>
      <li><a href= "#myModal" data-toggle="modal" data-target="#myModal"  ><span class="glyphicon glyphicon-log-in" ></span>Login</a></li>
      <li><a href="contactus.php"><span class="glyphicon glyphicon-earphone"></span> ContactUs</a></li>       
    </ul>
    </div>
  </div>
</nav>
	

<div class="jumbotron">
  <h1 style="text-align: center;">Sectors</h1>
  <!--p>...</p>
  <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p-->
  <div class="row">
  <div class="col-xs-6 col-md-3">
    <a href="webdesigning.php" class="thumbnail">
      <img src="webdesigning.png" alt="..." style="width:150px;height:150px;">
      <div class="carousel-caption">
              <h6 style="text-align: center;">Web designing</h6>
            </div>
    </a>
  </div>
  <div class="col-xs-6 col-md-3">
    <a href="logodesigning.php" class="thumbnail">
      <img src="logodesigning.png" alt="..." style="width:150px;height:150px;">
      <div class="carousel-caption">
              <h6 style="text-align: center;">Logo designing</h6>
            </div>
    </a>
  </div>
  <div class="col-xs-6 col-md-3">
    <a href="articlewriting.php" class="thumbnail">
      <img src="article.png" alt="..." style="width:150px;height:150px;">
      <div class="carousel-caption">
              <h6 style="text-align: center;">Article Writing</h6>
            </div>
    </a>
  </div>
  <div class="col-xs-6 col-md-3">
    <a href="#" class="thumbnail">
      <img src="furniture.png" alt="..." style="width:150px;height:150px;">
      <div class="carousel-caption">
              <h6 style="text-align: center;">Furniture</h6>
            </div>
    </a>
  </div>
  <div class="col-xs-6 col-md-3">
    <a href="mobileapp.php" class="thumbnail">
      <img src="mobileapp.png" alt="..." style="width:150px;height:150px;">
      <div class="carousel-caption">
              <h6 style="text-align: center;">Mobile App</h6>
            </div>
    </a>
  </div>

</div>
</div>
</body>

<footer class="container-fluid text-center">
  <p>Copyright&copy VINIT VIJAN</p>  
  
  <p style="text-align: right">For more details contact 1800 1080 2200</p>
</footer>
</html>