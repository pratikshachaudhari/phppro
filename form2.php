<!DOCTYPE html>
<html>
<body>
	Welcome
	<?php
		$a = $_POST["n1"];
		$b = $_POST["n2"];
		for($i=$a;$i<=$b;$i++)
		{
			if(($i%2) != 0)
			{
				if($i != 1)
				{
					echo "<h2> prime no  is: " .$i . "</h2>";
				}
			}
   
		}
		
	?>
</body>
</html>