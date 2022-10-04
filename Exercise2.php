<html>
	<head><title>This is my first webpage</title></head>
	<body bgcolor = "blue" >
		<p> This HTML will get delivered as is </p>
		<?php echo "<p>But this file will be interpreted by PHP turned into HTML</p>";
			$j = 4;
			$k = 4;
			$num1 = 6;
			$num2 = 2;
			$sum = $num1 + $num2;
			$username = "Charles Matthew Atilano";
			echo $username;
			$count = 17;
			echo "<br>";
			echo $count;
			echo "<br>";
			echo "6 + 2 = " .$sum;
			echo "<br>";
			echo "My Name is ".$username;
			echo "<br>";
			$pi = 3.1416;
			$radius = 5;
			echo $pi*($radius*$radius);
			echo "<br>";
			echo $j;
			echo "<br>";
			echo $k;
			echo "<br>";
			if ($j===$k)
			{
				echo "Identical in terms of data type";
			}
			else
			{
				echo "They are not identical";
			}
			
		?>

</body>
</html>