<html>
	<head>
	</head>
	<body>
		<?php
			$a =true;
			$b =false;
			
			echo "nilai a AND b adalah "; var_dump ($a and $b);
			echo "<br> nilai a OR nilai b adalah "; var_dump ($a or $b);
			echo "<br> nilai a XOR nilai b adalah "; var_dump ($a xor $b);
			echo "<br><br> nilai a && nilai b adalah "; var_dump ($a && $b);
			echo "<br> nilai a || b adalah "; var_dump ($a || $b);
			echo "<br> nilai !a || nilai b adalah "; var_dump (!$a && $b);
		?>
	</body>
</html>