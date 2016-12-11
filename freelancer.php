<!DOCTYPE html>
<html lang="en">
<head>
  <title>Freelancing</title>
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
<body>
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
              <label for="email">Email address</label>
              <input class="form-control" name="email" id="email" placeholder="Enter email" type="email">
              </div>
            <div class="form-group">
              <label for="password">Password</label>
            <input class="form-control" id="password" name="password" placeholder="Password" type="password">
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
    <!--div class="collapse navbar-collapse" id="myNavbar"-->
      <!--li class="active"><a href="freelancer.php">Home</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li> 
        </ul>
      </li-->
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
  
<div class="container">

<br>
<br>
<div class="row">
      
        </div>
              <div class="col-md-12">
          
            <img src="pic1.jpg" alt="Image_work_from_home" class="img-responsive">
          
            <div class="carousel-caption">
              <h1 style="text-align: center;">Get your work done</h1>
              <h1 style="text-align: center;">with our top freelancers</h1>
            </div>
          
        </div>
      
      
 </div>
  
  <!--img src="pic1.jpg" class="img-rounded" alt="Image_work_from_home" width="1280" height="720"-->
  <p>Hello there!!</p>
  <p>Hire from 1 million+ top quality talent</p>

<div class="col-sm-12">
<div class="col-md-3">
  <a href="hire.php" class="btn btn-primary btn-lg btn-block col-md-6">Hire</a>
  <a href="register.php" class="btn btn-default btn-lg btn-block col-md-6">Register</a>
</div>
</div>

<div class="jumbotron">

  <h2 style="text-align: center;">How it works</h2>
      <br>
      <br>
    <div class="row">
      <div class="col-md-3">
        <img src="pic3.jpg" alt="Image_work_from_home" style="display: block; margin: 0 auto;" class="img-responsive">
        <center><a href="#">FIND</a></center>
        <p style="text-align: center;"><small>Post a job to tell us about your project. We'll quickly match you with the right freelancers.</p>
      </div>

      <div class="col-md-3">
        <img src="pic4.jpg" alt="Image_work_from_home" style="display: block; margin: 0 auto;" class="img-responsive">
        <h5 style="text-align: center;">HIRE</h5>
        <p style="text-align: center;"><small>Browse profiles, reviews, and proposals then interview top candidates. Hire a favorite and begin your project.</p>
      </div>

      <div class="col-md-3">
        <img src="pic5.jpg" alt="Image_work_from_home" style="display: block; margin: 0 auto;" class="img-responsive">
        <h5 style="text-align: center;">WORK</h5>
        <p style="text-align: center;"><small>Use the Upwork platform to chat, share files, and collaborate from your desktop or on the go.</p>
      </div>

      <div class="col-md-3">
        <img src="pic6.jpg" alt="Image_work_from_home" style="display: block; margin: 0 auto;" class="img-responsive">
        <h5 style="text-align: center;">PAY</h5>
        <p style="text-align: center;"><small>Invoicing and payments happen on Upwork. With Upwork Protection, only pay for work you authorize.</p>
      </div>
    </div>
</div>

<!--img src="pic2.jpg" alt="Image_work_from_home" class="img-responsive"-->

  &nbsp;
  &nbsp;
  &nbsp;
  &nbsp;
  &nbsp;
  &nbsp;
  &nbsp;
  &nbsp;
  &nbsp;
  &nbsp;
  &nbsp;
  &nbsp;
  
</div>





</body>

<footer class="container-fluid text-center">
  <p>Copyright&copy VINIT VIJAN</p>  
  <form class="form-inline">Get deals:
    <input type="email" class="form-control" size="50" placeholder="Email Address">
    <button type="button" class="btn btn-danger">Sign Up</button>
  </form>
  <p style="text-align: right">For more details contact 1800 1080 2200</p>
</footer>
</html>

