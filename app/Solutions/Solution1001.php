<?php
declare(strict_types = 1);
namespace Alddesign\EzMvc\Solutions;

use Alddesign\EzMvc\System\Helper;

class Solution1001 extends Solution
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
	
	public function run()
	{
		set_time_limit(0);
		
		/**
		 * Some questions: 
		 * With a sorted array this is EZ shit?
		 * What about joltage differences of 2 jolt? (There arnt any 2 jolt differences in the input)
		 * The hardest thing was to read the description of this puzzle
		 */
		$adapters = $this::INPUT;
		sort($adapters);

		$differences = [1 => 0, 2 => 0, 3 => 0];
		foreach($adapters as $i => $joltage)
		{
			$diff = $i === 0 ? $joltage : $joltage - $adapters[$i-1];
			$differences[$diff] += 1;
		}
		//Last one: the built-in adapter
		$differences[3] += 1;

		$result = $differences[1] * $differences[3];
		
		echo "The result is <b>$result</b>...<br><small>Thats it? - Yes it is!</small>";
	}
}
