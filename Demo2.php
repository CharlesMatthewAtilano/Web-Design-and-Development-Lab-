<html>
<head><title>My Web Page</title></head>
<?php

$content = "Welcome to PHP Programming";
$a = 5;
$_msg = "Hello, again";
$x = 8;
$y = 8;

echo $content;
echo"<br>".$a;
echo"<br>";
echo $_msg;

//Arithmetic Operations
echo "<br>".$x+$y;
echo"<br>";
echo $x-$y;
echo"<br>";
echo $x*$y;
echo"<br>";
echo $x/$y;
echo"<br>";
echo $x%$y;
echo"<br>";
echo $x**$y;

//Comparison Operations
if($x==$y)
{
	echo "<br>"."They are identical";
}
else
{
	echo "<br>"."They are not identical";
}
echo"<br>";
//Increment/decrement operators
//for loop 
/*for ($a=5;$a>=1; $a--)
{
		echo "<br>".$a;
}
echo"<br>";*/ 

//while loop 
while($a>=1)
{
		echo "The number is: $a \n";
		echo"<br>";
		$a-=1;    //$a= $a-1
}
//do while loop
$a=1;
do 
{
  echo "The number is: $a <br>";
  $a++;
} while ($a<=2);

?>
</html>