<?php

/**
 * @file Mymath.php
 * @brief Clase Mymath que fa sumes
 * 
 * 
 * @author Frangj66
 * @date 2025
 */


class Mymath
{
	/**
	 * @brief Fa una suma
	 * 
	 * @return x + y
	*/
	public static function suma ($x, $y) 
	{
		return $x + $y;
	}

	public static function pot ($base, $exp) 
	{
		$res = 1;
		for ($i = 0; $i < $exp; $i++)
			$res *= $base;

		return $res;
	}
}



$n1 = 2;
$n2 = 3;

echo 'El producte de ' . $n1 . ' i ' . $n2 . ' es: '  . Mymath::suma($n1, $n2) . "\n";
echo 'La potencia ' . $n1 . ' i ' . $n2 . ' es: '  . Mymath::pot($n1, $n2) . "\n";

?>
