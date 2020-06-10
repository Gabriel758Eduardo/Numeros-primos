<?php

	$num = $_POST["numero"];
	$cont = 0;
	for {$x = 1;$x <= $num ; $x++}{
		if{$num % $num == 0}
			$cont++;
	}
	if{$cont == 2}
		echo "<p> primo </p>";
	else
		echo"<p> não eh primo </p>";
		
?>