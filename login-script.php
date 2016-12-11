<?php
Include('config.php');
if (isset($_REQUEST['SUBMIT_MESSAGE'])) //here give the name of your button on which you would like    //to perform action.
{
// here check the submitted text box for null value by giving there name.
  if($_REQUEST['email']=="" || $_REQUEST['password']=='')
  {
  echo " Enter the correct data....";
  }
  else
  {
        $Useremail = $_POST['email'];
        $UserPassword = $_POST['password'] ; 
         
        //$sql="SELECT email FROM persons WHERE email=' ".$Useremail.”'' and password=’”.$UserPassword.”’”;
        $r="SELECT * FROM freelancers WHERE email='".$Useremail."' and password='".$UserPassword."'"; 
        $r = mysqli_query($connection,$r);
        /*if(!$r) {
           $err=mysql_error();
           print $err;
           exit();
        }
        if(mysql_affected_rows()==0){
           print "no such login in the system. please try again.";
           exit();
        }
        else{
           print "successfully logged into system.";
           //proceed to perform website’s functionality – e.g. present information to the user
        }*/
        if(mysqli_num_rows($r)>0)
        {
          //echo "LOGIN SUCCESFUL....";
          session_start();
          while($row=mysqli_fetch_array($r))
          {
            $_SESSION['user_email']=$row['email'];
          }
          header('LOCATION:freelancer2.php');
        }
        else
        {
          echo "password or email id is not correct...";
        }
  }
}

?>