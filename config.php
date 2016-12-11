<?php
$connection=mysqli_connect("localhost","root","");
mysqli_select_db($connection,"freelancing");


//$conn_error = 'Could not connect.';
/*$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_pass = '';
$connection = mysqli_connect($mysql_host, $mysql_user, $mysql_pass);
$mysql_db = 'freelancing';
if(!$connection = mysqli_connect($mysql_host, $mysql_user, $mysql_pass) || !mysqli_select_db($connection, $mysql_db))
{
	//showerror();
	die("Could not connect");
}
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    //you need to exit the script, if there is an error
    exit();
}*/

?>