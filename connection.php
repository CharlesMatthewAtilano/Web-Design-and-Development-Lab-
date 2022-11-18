<?php
$server = "localhost";
$db = "login";
$username = "";
$password = "";
$con = mysqli_connect($server,$username,$password,$db);

if ($con)
{ echo "Database is connected.";
echo "Login nice".$username;
}
else 
{	echo "T" .mysqli_error($con);}

if (isset($_POST['user']))
{
$username =	$_POST['user'];
$password =	$_POST['text'];
$sql = "SELECT 	* FROM users where username = '$username' AND password = '$password'";
$result =  mysqli_query($con,$sql);


if(mysqli_num_rows($result)==1)
{
echo "Login nice".$username;
exit();
}


else
{
echo "Login not nice".mysqli_error($con);
exit();
}
}

?>