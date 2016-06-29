
<?php
class Chairs
{
  public static function getMaxProfit($offers, $demands) {
	// your code
	sort($offers);
	rsort($demands);
	$i1=0;
	$i2=0;
	$res_i=0;
	$i1=count($offers);
	$i2=count($demands);
	if ($i1 >= $i2)
		for ($i = 0; $i < $i2; $i++) {
			if ($offers[$i]<$demands[$i])
				$res_i = $res_i + $demands[$i]-$offers[$i];
		
	}
	else
		for ($i = 0; $i < $i1; $i++) {
			if ($offers[$i]<$demands[$i])
				$res_i = $res_i + $demands[$i]-$offers[$i];
	
  }
  return $res_i;
}
}
$offers=array (5, 10, 8, 4, 7, 2);
$demands=array (3, 1, 11, 18, 9);
echo Chairs::getMaxProfit($offers,$demands);
