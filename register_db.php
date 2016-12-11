<?php
//start php tag
//include connect.php page for database connection
Include('config.php');
//if submit is not blanked i.e. it is clicked.
if (isset($_REQUEST['SUBMIT_MESSAGE'])) // name of the button 
{
// checking the submitted text box for null value by giving there name.
  if($_REQUEST['username']=="" || $_REQUEST['name']==""||$_REQUEST['aboutyou']==""||$_REQUEST['password']=="")
  {
        echo " <br><br><br<br><br><br>All the fields must be filled";
  }
  else
  {
      
      $username=$_POST['username'];
      $name=$_POST['name'];
      $aboutyou=$_POST['aboutyou'];

      //$u_city=$_POST['user_city'];
      //$u_state=$_POST['user_state'];
      //$u_mobile=$_POST['mobile'];
      //$u_eid=$_POST['e_id'];
      $password=$_POST['password'];
      $webdesigning=$_POST['webdesigning'];
      $logodesigning=$_POST['logodesigning'];
      $articlewriting=$_POST['articlewriting'];
      $furniture=$_POST['furniture'];
      $mobileapp=$_POST['mobileapp'];
      $sql = "INSERT INTO freelancers (username,name,aboutyou,password,webdesigning,logodesigning,articlewriting,furniture,mobileapp) VALUES ('$username','$name','$aboutyou','$password','$webdesigning','$logodesigning','$articlewriting','$furniture','$mobileapp')";
      $insert = $connection->query($sql);
  
       // Print response from MySQL
        if ( $insert ) 
        {
            echo "<br><br><br><br<br><br>CONGRATULATIONS ! YOU ARE A NEW MEMBER OF OUR COMMUNITY....<br>";
            
        } 
        else 
        {
            die("Error: {$connection->errno} : {$connection->error}");
        }
  
  // Close our connection
  $connection->close();
  }
} 
?>