<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>GIVE_ME_pyramid</title>
</head>
<body>
<?php
function triangle($num){ 
	for($height=1;$height<=$num;$height++){
		for($width=1;$width<=($num*2-1);$width++){
			if( $width == $num -($height-1) ){
				for($star = 1 ; $star <= (2*$height-1) ; $star++){
					echo "★";
				}
				$width+=2*$height-1;
			}
			else{
				echo "&ensp;&nbsp;";
			}
		}
		echo "<br>";
	}
}


function reverse_triangle($num){
	for($height=$num;$height>=1;$height--){
			for($width=1;$width<=($num*2-1);$width++){
				if( $width == $num -($height-1) ){
					for($star = 1 ; $star <= (2*$height-1) ; $star++){
						echo "★";
					}
					$width+=2*$height-1;
				}
				else{
					echo "&ensp;&nbsp;"; // 跟★字元差不多等寬的空白。
				}
			}
			echo "<br>";
		}
}

	$num=$_GET["number"];			// 將金字塔高以_GET方式接收。
	if($num>0) triangle($num);		// 當金字塔高為正整數時。
	else reverse_triangle(-$num);	// 當金字塔高為副整數時。

?>
	
</body>
</html>

