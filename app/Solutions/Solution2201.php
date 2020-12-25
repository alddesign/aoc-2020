<?php
declare(strict_types = 1);
namespace Alddesign\EzMvc\Solutions;

use Alddesign\EzMvc\System\Helper;

class Solution2201 extends Solution
{
	public $ready = true;

	/** @var int[] $player1 */
	private $player1 =
	[
		24,
		22,
		26,
		6,
		14,
		19,
		27,
		17,
		39,
		34,
		40,
		41,
		23,
		30,
		36,
		11,
		28,
		3,
		10,
		21,
		9,
		50,
		32,
		25,
		8
	];

	/** @var int[] $player2 */
	private $player2 =
	[
		48,
		49,
		47,
		15,
		42,
		44,
		5,
		4,
		13,
		7,
		20,
		43,
		12,
		37,
		29,
		18,
		45,
		16,
		1,
		46,
		38,
		35,
		2,
		33,
		31
	];
	
	private $player1test =
	[
		9,
		2,
		6,
		3,
		1
	];	

	private $player2test =
	[
		5,
		8,
		4,
		7,
		10
	];


	public function run()
	{
		set_time_limit(0);
		
		$winnerCards = [];
		$winner = 0;
		while(true)
		{
			$card1 = array_shift($this->player1);
			$card2 = array_shift($this->player2);

			if($card1 > $card2)
			{
				$this->player1[] = $card1;
				$this->player1[] = $card2;
			}
			else
			{
				$this->player2[] = $card2;
				$this->player2[] = $card1;
			}

			if(empty($this->player1))
			{
				$winner = 2;
				$winnerCards = $this->player2;
				break;
			}
			elseif(empty($this->player2))
			{
				$winner = 1;
				$winnerCards = $this->player1;
				break;
			}
		}

		$total = 0;
		$c = 0;
		$winnerCards = array_reverse($winnerCards);
		foreach($winnerCards as $card)
		{
			$c++;
			$total += $c * $card;
		}

		echo "Winner ist player <b>$winner</b> with a total of <b>$total</b>";
	}
}
