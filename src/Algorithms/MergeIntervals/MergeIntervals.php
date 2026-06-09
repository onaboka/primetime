<?php

namespace App\Algorithms\MergeIntervals;

class MergeIntervals
{
	function merge($intervals): array {
		usort($intervals, function ($a, $b) {
			return $a[0] <=> $b[0];
		});

		$result = [];
		$current = $intervals[0];

		foreach($intervals as $interval) {
			if($interval[0] <= $current[1] ) {
				$current[1] = max($current[1], $interval[1]);
			} else {
				$result[] = $current;
				$current = $interval;
			}
		}

		$result[] = $current;

		return $result;
	}
}