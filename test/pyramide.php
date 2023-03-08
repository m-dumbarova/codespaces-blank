<?php

/*

   *
  ***
 *****
 
*/

?> 

<html>
	<body>
		<form action="piramide3.php" method="POST">
			<h1>Voer een getal in:</h1>
			<input type="text" id="getal" name="getal_van_gebruiker">
			<input type="submit" value="Submit">
		</form>
	</body>
</html>

<?php

	if (isset($_POST['getal_van_gebruiker']))
	{
		$aantal_rijen = $_POST['getal_van_gebruiker'];
	} 
	else 
	{
		$aantal_rijen = 0;
	} 
	echo "Het programa zal een gelijkzijdige driehoek uitprinten. Het bestaat uit " . $aantal_rijen . " rijen van sterretjes.";
	echo "<br/>";
	echo "<br/>";
	
	function piramide_van_sterretjes($aantal_rijen)
	{
		$count_chars_laatste_rij = (($aantal_rijen*2)-1);
		return $count_chars_laatste_rij;
	}
	
	$chars_op_laatste_rij = piramide_van_sterretjes($aantal_rijen);
	echo "Aantal elementen op de laatste rij: ". $chars_op_laatste_rij;
	echo "<br/>";
	
	$mid_positie = ceil($chars_op_laatste_rij/2);
	echo "De mid positie van de laatste rij: " .$mid_positie;
	echo "<br/>";
	echo "<br/>";
/////////////////////////////////////////////////////////////////////////////////////
// Solution 1 	
	for ($i=1; $i<=$aantal_rijen; $i++)
	{
		for ($j=1; $j<=$aantal_rijen-$i; $j++)
		{
			echo "&nbsp; ";
		}
		
		for ($k=1; $k<=$i-1; $k++)
		{
			echo "*";
		}
		
		for ($p=2; $p<=$i+1; $p++)
		{
			echo "*";
		}
		
		echo "<br/>";
	}
	echo "<br/>";
	echo "<br/>";

/////////////////////////////////////////////////////////////////////////////////////
// Solution 2
	for ($i=0; $i<$aantal_rijen; $i++)
	{
		for($j=0; $j<$aantal_rijen*2-1; $j++)
		{
			if ($j<$aantal_rijen-$i-1 || $j>=$aantal_rijen+$i)
			{
				echo "&nbsp; ";
			}
			else{
				echo "*";
			}		
		}
		echo "<br/>";
	}
	echo "<br/>";
	echo "<br/>";

/////////////////////////////////////////////////////////////////////////////////////
// Solution 3
	for ($i=0; $i<$aantal_rijen; $i++)
	{
		for($j=0; $j<$aantal_rijen-$i-1; $j++)
		{
			echo "&nbsp; ";
		}
		for($j=0; $j<$i*2+1; $j++)
		{
			echo "*";
		}
		echo "<br/>";
	}

echo "<br/>";
echo "<br/>";

/////////////////////////////////////////////////////////////////////////////////////
// Oplossing 4
	for ($i=0; $i<$aantal_rijen; $i++)
	{
		for($j=0; $j<$aantal_rijen+$i; $j++)
		{
			if ($j<$aantal_rijen-$i-1)
			{
				echo "&nbsp; ";
			}
			else
			{
				echo "*";
			}		
		}
		echo "<br/>";
	}

echo "<br/>";
echo "<br/>";

/////////////////////////////////////////////////////////////////////////////////////
//Solution 5 - extra
	echo "Extra opdracht: Ruit van * door matrix";
	echo "<br/>";
	echo "<br/>";

	$my_array = array($aantal_rijen);
	for ($i=0; $i<$aantal_rijen; $i++)
	{
		$rij = '';
		for($j=0; $j<$aantal_rijen-$i-1; $j++)
		{
			$rij .= "&nbsp; ";
		}
		for($j=0; $j<$i*2+1; $j++)
		{
			$rij .= "*";
		}
		$my_array[$i] = $rij;
	}
	for ($i = 0 ; $i < $aantal_rijen -1 ; $i++) {
		echo $my_array[$i];
		echo "<br/>";
	}
	for ($i = $aantal_rijen -1 ; $i >= 0 ; $i--) {
		echo $my_array[$i];
		echo
		 "<br/>";
	}

echo "<br/>";
echo "<br/>";

	


?>