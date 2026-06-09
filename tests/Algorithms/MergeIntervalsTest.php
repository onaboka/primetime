<?php

use App\Algorithms\MergeIntervals\MergeIntervals;
use PHPUnit\Framework\TestCase;

// Given an array of intervals where intervals[i] = [start, end],
// merge all overlapping intervals, and return an array
// of the non-overlapping intervals that cover all the intervals in the input.
class MergeIntervalsTest extends TestCase
{
	public function testMerge() {
		$solver = new MergeIntervals();

		$this->assertSame(
			[[1,6],[8,10],[15,18]],
			$solver->merge([[1,3],[2,6],[8,10],[15,18]])
		);
	}

	public function testOverlappingMerge() {
		$solver = new MergeIntervals();

		$this->assertSame(
			[[1,5]],
			$solver->merge([[1,4],[4,5]])
		);
	}

	public function testContainedIntervalMerge() {
		$solver = new MergeIntervals();

		$this->assertSame(
			[[1,7]],
			$solver->merge([[4,7],[1,4]])
		);
	}
}