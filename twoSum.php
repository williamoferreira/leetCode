<?php
	class Solution {

		/**
		 * @param Integer[] $nums
		 * @param Integer $target
		 * @return Integer[]
		 */
		static function twoSum($nums, $target) {
			for($i = 0; $i <= (sizeof($nums) - 2); $i++) {
				for ($j = $i + 1; $j <= ((sizeof($nums) - 1)); $j++) {
					echo ("posicoes: " . $i . ', ' . $j . " : ");
					echo ($nums[$i] . ' - ' . $nums[$j] . ", target: $target" . "\n");
					if (($nums[$i] + $nums[$j]) == $target) {
						return [$i, $j];
					}
				}
			}
			throw new \Exception("Não encontrado");
		}
	}	
	
	var_dump(Solution::twoSum(
		[2,7,11,15],
		9
	));
	
	
	var_dump(Solution::twoSum(
		[3,2,4],
		6
	));
	
	
	var_dump(Solution::twoSum(
		[3,3],
		6
	));
	
	
?>