<html>
<head>
<title>Exercise</title>
<body align = center><h1>
<?php

$a = 59;

if ($a>=70)
{
	$grade = "Passed";
}
else if($a>=60 && $a<70)
{
	$grade = "Remedial";
}
else
{
	$grade = "Failed";
}
echo "Student Grade: $grade";

?></h1>
</body>

</head>

</html>