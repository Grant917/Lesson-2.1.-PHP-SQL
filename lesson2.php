<?php

	$x = rand(0,100);
	echo 'Число ' . $x;
	$a = 1;
	$b = 1;
	$g = false;


	while ($g=false) 
	{
		if ($a>$x)
		{
            echo "Задуманное число НЕ входит в числовой ряд";
			$g=true;
			break;
		}
		else 
		{
			if ($a=$x)
			{
                echo "Задуманное число входит в числовой ряд";
				$g=true;
				break;
			}
			else
			{
				$c=$a;
				$a=$a+$b;
				$b=$c;
				$g=false;
			}
		}
	}


echo <<<HTML
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Схема</title>
</head>
<body >
<div>  $x </div>
<div>  $a </div>
<div>  $b </div>
</body>

</html>
HTML;

?>
