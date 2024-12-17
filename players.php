<?php
$players = array("Virat Kohli",
    "Rohit Sharma",
    "MS Dhoni",
    "Sachin Tendulkar",
    "Shreyas Iyer",
    "Khaleel Ahmed ",
    "KL Rahul",
    "Prasidh Krishna",
    "Ravindra Jadeja",
    "Ishan Kishan"
);
?>

<html>
<body>
	<center><h2><u>List Of Cricket Players</h2></center></u>
	<center><table border="1">
	<tr>
		
	<th>Sl. No.</th>
		
	<th>Players Name</th>
	</tr>

	
	<?php
		$slNo = 1;

		foreach($players as $player)
		{
			echo"<tr><td>$slNo</td><td>$player</td></tr>";
			$slNo++;
		}
	?>
	
	</table></center>
</body>
</html>