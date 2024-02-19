<?php

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    
	
	static function romanToInt($s) {		
	
		$values = array(
			'I' => 1,
			'V' => 5,
			'X' => 10,
			'L' => 50,
			'C' => 100,
			'D' => 500,
			'M' => 1000,
		);
		
		$soma = 0;
		
		for($i = strlen($s) - 1; $i >= 0; $i--) {
			if ($soma == 0) {
				$soma += $values[$s[$i]];
			} else {
				if ($values[$s[$i]] >= $values[$s[$i + 1]]) {
					$soma += $values[$s[$i]];
				} else {
					$soma -= $values[$s[$i]];
				}
			}
		}
		
		return $soma;
	}
}
	
foreach (
	["III", "LVIII", "MCMXCIV", "CIII", "DCXXI", "LLII", "CCIII"] 
	as $key) {
	echo ("$key em inteiro: " . Solution::romanToInt($key) . "\n\n");
}