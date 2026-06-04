<?php

namespace App\Algorithms\TwoSum;

class TwoSum
{
	public function twoSum(array $nums, int $target): array
	{
		$map = [];

		foreach ($nums as $i => $num) {
			$diff = $target - $num;

			if (isset($map[$diff])) {
				return [$map[$diff], $i];
			}

			$map[$num] = $i;
		}

		return [];
	}
}