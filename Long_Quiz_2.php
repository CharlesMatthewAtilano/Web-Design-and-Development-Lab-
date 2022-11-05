<html>
  
   <head>
      <title>Long Quiz</title>
   </head>
   
   <body>
   <h3> Problem 1 </h3>
	<?php
         $Salary_Rate = 600;
         $Salary = 0;
		 $Taxable_Amount = 0;
		 $Net_Pay = 0;
         
		 echo "Salary Rate: $Salary_Rate<br>";
         $Salary = $Salary_Rate * 15;
         echo "<br>Salary: $Salary<br/>";
         
         $Taxable_Amount = .30 * $Salary;
         echo "<br>TaxableAmount: $Taxable_Amount<br/>";
         
         $Net_Pay = $Salary - $Taxable_Amount;
         echo "<br>Net Pay: $Net_Pay<br/>";
     ?>
	<h3> <br>Problem 2</br> </h3>
	<?php
		$n = 50;
		$i = 1;
		$sum = 0;

		//sum of positive integers from 1 to 50
		while($i <= $n) {
		$sum += $i;
		$i++;
		}

		echo "Sum of positive integers: $sum";

	?>
	</body>
</html>