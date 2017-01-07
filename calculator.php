
<!DOCTYPE html>
<html>
	<head>
		<title>Tip Calculator</title>
		<link rel="stylesheet" type="text/css" href="stylesheet.css">
		<link href="calculator.php">
	</head>
		<body>
		
		<div class = "cbody">
		<h1> Welcome to Tipper </h1>
				<h4><i>The online Tip Calculator</i></h4>
			<form action="calculator.php" method="post">
			Bill: $
				<input type="text" name="bill" value="0"><br><br>

			Tip Percentages: 


				<input type="radio" name="percent" value=".10" checked> 10% 
				<input type="radio" name="percent" value=".15" > 15% 
				<input type="radio" name="percent" value=".20" > 20%  <br><br>

			Number of People:

				<input type="text" name="people" value="1"> <br><br>

				<input type="submit" name="submit" value="Calculate"> <br><br>
		</form>
	<?php
	$bill = number_format($_POST['bill'], 2, '.', '');
	$percent = number_format($_POST['percent'], 2, '.','');
	$people = $_POST['people'];
	$tip=$bill * $percent;
	$total=$tip + $bill;
	$totalPeople=$total/$people;
		if(isset($_POST['bill'], $_POST['percent'], $_POST['people'])){
			if(is_numeric($_POST['bill']) && is_numeric($_POST['people'])){
				if($people < 1){
					$people = 1;
				}
				echo "Bill:$".$bill;
				echo "<br>Tip Amount:$".number_format($tip, 2, '.',''); 
				echo "<br>People: ".$people;
				echo "<br>Total: ".number_format($total, 2, '.','');
				echo "<br>Total Per Person: ".number_format($totalPeople, 2, '.','');;
			}else echo "There are mistake with your input.";
		}else echo "There are missing input";
	?>
	</div>
		</body>
</html>
