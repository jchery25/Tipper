
<!DOCTYPE html>
<html>
	<head>
		<title>Tip Calculator</title>
		<link rel="stylesheet" type="text/css" href="stylesheet.css">
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

				<div id = "amount">
					<?php
						$bill = number_format($_POST['bill'], 2, '.', '');
						$percent = number_format($_POST['percent'], 2, '.','');
						$people = $_POST['people'];
						$tip = $bill * $percent;
						$total = $tip + $bill;
						$totalPeople = $total/$people;

						if($bill >= 0 && $people > 0 ){
							
							echo "Bill: $".$bill;
							echo "<br>Tip Amount:$".number_format($tip, 2, '.',''); 
							echo "<br>People: ".$people;
							echo "<br>Total:$".number_format($total, 2, '.','');
							echo "<br>Total Per Person:$".number_format($totalPeople, 2, '.','');
							
						}else{
							echo "Invalid Input";
						}
					?>
					<br><br>
				</div>
		</div>
		</body>
</html>
