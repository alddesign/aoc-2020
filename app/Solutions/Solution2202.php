<?php
declare(strict_types = 1);
namespace Alddesign\EzMvc\Solutions;

use Alddesign\EzMvc\System\Helper;

class Solution2202 extends Solution
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
		
		$winner = $this->recursiveCombat($this->player1, $this->player2);
		$winnerCards = $winner === 1 ? $this->player1 : $this->player2;
		$winnerCards = array_reverse($winnerCards);

		$total = 0;
		$c = 0;
		foreach($winnerCards as $card)
		{
			$c++;
			$total += $c * $card;
		}

		echo "Winner ist player <b>$winner</b> with a total of <b>$total</b>";
	}

	private function recursiveCombat(array &$p1Cards, array &$p2Cards, int $level = 0)
	{
		$p1CardHistory = [];
		$p2CardHistory = [];

		while(true)
		{
			//Check unfair game end (this needed to be descibed more precisly...)
			if(in_array($p1Cards, $p1CardHistory) || in_array($p2Cards, $p2CardHistory))
			{
				return 1;
			}
			else
			{
				if(!in_array($p1Cards, $p1CardHistory)){ $p1CardHistory[] = $p1Cards; }
				if(!in_array($p2Cards, $p2CardHistory)){ $p2CardHistory[] = $p2Cards; }
			}


			$card1 = array_shift($p1Cards);
			$card2 = array_shift($p2Cards);

			if($card1 <= count($p1Cards) && $card2 <= count($p2Cards))
			{
				$newP1Cards = array_slice($p1Cards, 0, $card1);
				$newP2Cards = array_slice($p2Cards, 0, $card2);

				$winner = $this->recursiveCombat($newP1Cards, $newP2Cards, $level + 1);

				unset($newP1Cards);
				unset($newP2Cards);

				if($winner === 1)
				{
					$p1Cards[] = $card1;
					$p1Cards[] = $card2;
				}
				else
				{
					$p2Cards[] = $card2;
					$p2Cards[] = $card1;
				}
			}
			elseif($card1 > $card2)
			{
				$p1Cards[] = $card1;
				$p1Cards[] = $card2;
			}
			else
			{
				$p2Cards[] = $card2;
				$p2Cards[] = $card1;
			}

			if(empty($p1Cards))
			{
				return 2;
			}
			elseif(empty($p2Cards))
			{
				return 1;
			}
		}
	}
}
