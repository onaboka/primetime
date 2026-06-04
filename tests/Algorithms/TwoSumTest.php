<?php

use App\Algorithms\TwoSum\TwoSum;
use PHPUnit\Framework\TestCase;

class TwoSumTest extends TestCase
{
	public function testReturnsMatchingIndices()
	{
		$solver = new TwoSum();

		$this->assertSame(
			[0, 1],
			$solver->twoSum([2, 7, 11, 15], 9)
		);
	}

	public function testReturnsEmptyArrayWhenNoSolutionExists()
	{
		$solver = new TwoSum();

		$this->assertSame(
			[],
			$solver->twoSum([1, 2, 3, 4], 100)
		);
	}
}