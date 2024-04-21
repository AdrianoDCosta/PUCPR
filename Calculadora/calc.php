<html>
	<body background="img.png">
		<center>
			<?php
				$valor1=$_POST["v1"];
				$valor2=$_POST["v2"];
				$radio=$_POST["btnradio"];
				
				$soma=$valor1+$valor2;
				$sub=$valor1-$valor2;
				$div=$valor1/$valor2;
				$mult=$valor1*$valor2;
				
					if($radio == "+")
						{
						echo "Resultado = <b><u>$soma</u></b>";
						}
					elseif($radio == "-")
						{
						echo "Resultado = <b><u>$sub</u></b>";
						}
					elseif($radio == "/")
						{
						echo "Resultado = <b><u>$div</b></u>";
						}
					else
						{
						echo "Resultado = <b><u>$mult</b></u>";
						}
			?>
		</center>
	</body>
</html>