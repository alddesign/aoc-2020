<?php
declare(strict_types = 1);
namespace Alddesign\EzMvc\Solutions;

use Alddesign\EzMvc\System\Helper;

class Solution1002 extends Solution
{
	public $ready = true;

	private const INPUT =
	[
		133,
		157,
		39,
		74,
		108,
		136,
		92,
		55,
		86,
		46,
		111,
		58,
		80,
		115,
		84,
		67,
		98,
		30,
		40,
		61,
		71,
		114,
		17,
		9,
		123,
		142,
		49,
		158,
		107,
		139,
		104,
		132,
		155,
		96,
		91,
		15,
		11,
		23,
		54,
		6,
		63,
		126,
		3,
		10,
		116,
		87,
		68,
		72,
		109,
		62,
		134,
		103,
		1,
		16,
		101,
		117,
		35,
		120,
		151,
		102,
		85,
		145,
		135,
		79,
		2,
		147,
		33,
		41,
		93,
		52,
		48,
		64,
		81,
		29,
		20,
		110,
		129,
		43,
		148,
		36,
		53,
		26,
		42,
		156,
		154,
		77,
		88,
		73,
		27,
		34,
		12,
		146,
		78,
		47,
		28,
		97
	];


	/** @var array */
	private $adapters = [];
	private $maxIndex = 0;
	private $pathCache = [];

	public function run()
	{
		set_time_limit(0);

		$this->adapters = $this::INPUT;
		$this->adapters[] = 0; //We need to simulate the outlet for our loop

		$this->maxIndex = count($this->adapters) - 1;
		sort($this->adapters);

		$total = $this->calculatePaths(0);

		echo "There are <b>$total</b> possible adapter combinations";
	}

	private function calculatePaths(int $index)
	{
		$total = 0;

		//Prevents recursion on already caculated paths:
		if(isset($this->pathCache[$index]))
		{
			return $this->pathCache[$index];
		}

		if($index === $this->maxIndex)
		{
			return 1;
		}

		for($i = $index + 1; $i <= $index + 3 && $i <= $this->maxIndex; $i++)
		{
			if($this->adapters[$i] <= $this->adapters[$index] + 3)
			{
				$total += $this->calculatePaths($i);
			}
		}	

		//Add a cache entry
		if(!isset($this->pathCache[$index]))
		{
			$this->pathCache[$index] = $total;
		}
		
		return $total;
	}	
}
