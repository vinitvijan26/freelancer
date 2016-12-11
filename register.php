<!DOCTYPE html>
<html lang="en">

<head>

  <title>SignUp</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    
     .active
     {
      background-color: red;
     }
     body
     {
        background-color: white;/*#D6EBC2;*/
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
      <!--li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li-->
      <li><a href="contactus.php"><span class="glyphicon glyphicon-earphone"></span> ContactUs</a></li>       
    </ul>
    </div>
  </div>
</nav>

 <!-- <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="index.php" style="color:black">Home</a></li>
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="active "><a href="#"><span class="glyphicon glyphicon-user"></span> SignUp</a></li>

        <li ><a href="#myModal" data-toggle="modal" data-target="#myModal" style="color:black"><span class="glyphicon glyphicon-log-in" ></span> Login</a></li>
        <li ><a href="#" style="color:black"><span class="glyphicon glyphicon-menu-hamburger"></span> AboutUs</a></li>  
            

      </ul>
    </div>
  </div>
</nav>-->


<div class="container" style="margin-top:70px">
    <h1 class="well">Registration Form</h1>
  <div class="col-lg-12 well">
  <div class="row">
        <form action="register_db.php" method="post" role="form">
          <div class="col-sm-12">
            <div class="row">
              <div class="col-sm-6 form-group">
                <label for="username">Username</label>
                <input type="text" placeholder="Enter First Name Here.."  name="username" id="username" class="form-control">
              </div>
              <div class="col-sm-6 form-group">
                <label for="name">Name</label>
                <input type="text" placeholder="Enter Last Name Here.." name="name" id="name" class="form-control">
              </div>
            </div>          
            <div class="form-group">
              <label for="aboutyou">About you</label>
              <textarea placeholder="About you.." id="aboutyou" name="aboutyou" rows="3" class="form-control"></textarea>
            </div>  

            <!--div class="row">
              <div class="col-sm-6 form-group">
                <label for="user_city">City</label>
                <input type="text" id="user_city" name="user_city" placeholder="Enter City Name Here.." class="form-control">
              </div>  
              <div class="col-sm-6 form-group">
                <label for="user_state">State</label>
                <input type="text" id="user_state" name="user_state" placeholder="Enter State Name Here.." class="form-control">
              </div>  
                
            </div>
                        
          <div class="form-group">
            <label for="mobile">Contact Number</label>
            <input type="number" name="mobile" id="mobile" placeholder="Enter Mobile Number Here.." class="form-control">
          </div>    
          <div class="form-group">
            <label for="e_id">Email Address</label>
            <input type="text" name="e_id" id="e_id" placeholder="Enter Email Address Here.." class="form-control">
          </div-->  

          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Decide your password...." class="form-control">
          </div>  
          <div> Sectors : </div>
          <div class="checkbox">
            <label>
            <input type="checkbox" value="1" name="webdesigning">
            webdesigning
            </label>
          </div>
          <div class="checkbox">
            <label>
            <input type="checkbox" value="1" name="logodesigning">
            logodesigning
            </label>
          </div>
          <div class="checkbox">
            <label>
            <input type="checkbox" value="1" name="articlewriting">
            articlewriting
            </label>
          </div>
          <div class="checkbox">
            <label>
            <input type="checkbox" value="1" name="furniture">
            furniture
            </label>
          </div>
          <div class="checkbox">
            <label>
            <input type="checkbox" value="1" name="mobileapp">
            mobileapp
            </label>
          </div>
          <!--<button type="button" class="btn btn-lg btn-info">Submit</button> -->

          <div class="col-xs-6 col-sm-6 col-md-6">
              <input type="submit" name="SUBMIT_MESSAGE" value="SUBMIT" class="btn btn-lg btn-success btn-block">
          </div>  


          </div>
        </form> 
        </div>
  </div>
</div>

</body>
</html>