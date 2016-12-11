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
<body style="background-color: lightblue;">
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
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      <li><a href="contactus.php"><span class="glyphicon glyphicon-earphone"></span> ContactUs</a></li>       
    </ul>
    </div>
  </div>
</nav>
<div class="jumbotron">
<!--try bootstrap from here-->

<div class="row">
  
      

<?php
Include('config.php');
//Include('')
$query="SELECT * FROM freelancers";
if(!($result=@mysqli_query($connection,$query)))
  showerror();

while ($row=@mysqli_fetch_array($result)) {
  if($row['mobileapp']==1){


/*print"{$row["id"]}<br>";
print"<h5>Username</h5>";
     print "\n\t<td>{$row["username"]}</td>";
     echo"<h5>Name</h5>";
      print"\n\t<td>{$row["name"]}</td>";
      echo"<h5>About the user</h5>";
      print"\n\t<td>{$row["aboutyou"]}</td>\n</tr><br>";
    echo"<br><br>";*/
      $column1=$row["id"];
      $column2=$row["username"];
      $column3=$row["name"];
      $column4=$row["aboutyou"];
      //\n{$row["webdesigning]}".
      //"\n{$row["logodesigning"]}";
  ?>    
<div class="col-xs-6 col-md-12">
    <a class="thumbnail">
      <td class="text-center"><?php echo $column1; ?></td><br>
      <td href="#" class="text-center"><?php echo $column2; ?></td><br>
      <td href="#" class="text-center"><?php echo $column3; ?></td><br>
      <td class="text-center"><?php echo $column4; ?></td><br>

    <!--img src="..." alt="..."-->
    </a>
  </div>
  <?php
}       //if
  }     //while   
  ?>
      

</div>
</div>
</body>
<footer class="container-fluid text-center">
  <p>Copyright&copy VINIT VIJAN</p>  
  
  <p style="text-align: right">For more details contact 1800 1080 2200</p>
</footer>
</html>