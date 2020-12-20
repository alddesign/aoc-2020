<?php
declare(strict_types = 1);
namespace Alddesign\EzMvc\Solutions;

use Alddesign\EzMvc\System\Helper;

class Solution1702 extends Solution
{
	public $ready = true;

	private const INPUT =
	[
		'.##..#.#',
		'#...##.#',
		'##...#.#',
		'.##.##..',
		'...#.#.#',
		'.##.#..#',
		'...#..##',
		'###..##.'
	];

	//Test
	private const INPUT1 = 
	[
		'.#.',
		'..#',
		'###'
	];

	/** @var int[][][][]  */
	private $pocketDimension = [[[[]]]]; //[w][x][y][z] => true|false

	public function run()
	{
		set_time_limit(0);

		$this->initDimension();
		$this->dimensionSteps[] = $this->pocketDimension;
		for($i = 1; $i <= 6; $i++)
		{
			$this->expandDimension();
			$this->updateDimension();			
			$this->dimensionSteps[] = $this->pocketDimension;
		}


		$active = $this->countCubes(1);

		echo "There are <b>$active</b> active cubes";
	}


	/**
	 * PHP has an internal array index that is different from ours...
	 */
	private function sortDimension()
	{
		ksort($this->pocketDimension);
		foreach($this->pocketDimension as $w => $wDim)
		{
			ksort($this->pocketDimension[$w]);
			foreach($this->pocketDimension as $z => $zDim)
			{
				ksort($this->pocketDimension[$w][$z]);
				foreach($this->pocketDimension[$w][$z] as $y => $yDim)
				{
					ksort($this->pocketDimension[$w][$z][$y]);
				}
			}
		}

	}

	/**
	 * Prints the dimension like in the example
	 * @param bool $die Quit after
	 */
	private function printDim(bool $die = true)
	{
		$this->sortDimension();

		foreach($this->pocketDimension as $w => $wDim)
		{
			echo "<br><b>Z$w</b><br>";
			foreach($this->pocketDimension[$w] as $z => $zDim)
			{
				echo "<br><b>Z$z</b><br>";
				foreach($this->pocketDimension[$w][$z] as $y => $yDim)
				{
					$yno = str_pad(strval($y), 3, '_', STR_PAD_LEFT);
					echo "$yno:";
					foreach($this->pocketDimension[$w][$z][$y] as $x => $value)
					{
						echo $value ? '#' : '.';
					}
					echo "<br>";
				}
			}
		}

		if($die)
		{
			die;
		}
	}

	private function countCubes(int $which = 1) //0 = inactive, 1 = active, 2 = all;
	{
		$active = 0;
		$all = 0;
		foreach($this->pocketDimension as $w => $wDim)
		{
			foreach($this->pocketDimension[$w] as $z => $zDim)
			{
				foreach($this->pocketDimension[$w][$z] as $y => $yDim)
				{
					foreach($this->pocketDimension[$w][$z][$y] as $x => $value)
					{
						$active += $value ? 1 : 0;
						$all++;
					}
				}
			}
		}


		$inactive = $all - $active;

		switch($which)
		{
			case(0) : return $inactive;
			case(1) : return $active;
			default : return $all;
		}
	}

	private function updateDimension()
	{	
		$this->sortDimension();

		$newPocketDimension = $this->pocketDimension;
		foreach($this->pocketDimension as $w => $wDim)
		{
			foreach($this->pocketDimension[$w] as $z => $zDim)
			{
				foreach($this->pocketDimension[$w][$z] as $y => $yDim)
				{
					foreach($this->pocketDimension[$w][$z][$y] as $x => $value)
					{
						$active = $this->countNearbyActive($w,$z,$y,$x);
						if($value)
						{
							$newPocketDimension[$w][$z][$y][$x] = ($active === 2 || $active === 3) ? true : false;
						}
						else
						{
							$newPocketDimension[$w][$z][$y][$x] = $active === 3 ? true : false;
						}
					}
				}
			}
		}


		$this->pocketDimension = $newPocketDimension;
		unset($newPocketDimension);
	}

	private function countNearbyActive(int $w, int $z, int $y, int $x)
	{
		$active = 0;
		for($w1 = $w-1; $w1 <= $w + 1; $w1++)
		{
			for($z1 = $z-1; $z1 <= $z + 1; $z1++)
			{
				for($y1 = $y-1; $y1 <= $y + 1; $y1++)
				{
					for($x1 = $x-1; $x1 <= $x + 1; $x1++)
					{
						if(isset($this->pocketDimension[$w1][$z1][$y1][$x1]) && $this->pocketDimension[$w1][$z1][$y1][$x1] === true && ($w !== $w1 || $z !== $z1 || $y !== $y1 || $x !== $x1))
						{
							$active++;
						}
					}
				}
			}
		}

		return $active;
	}

	
	/**
	 * After the dimension is initialized or calculated, we need to expand by 1 in each x,y,z with FALSE
	 * 
	 * @return void
	 */
	private function expandDimension()
	{
		$this->sortDimension();

		$newPocketDimension = $this->pocketDimension;
		foreach($this->pocketDimension as $w => $wDim)
		{
			foreach($this->pocketDimension[$w] as $z => $zDim)
			{
				foreach($this->pocketDimension[$w][$z] as $y => $yDim)
				{
					foreach($this->pocketDimension[$w][$z][$y] as $x => $value)
					{
						$this->setNearbyInactive($w,$z,$y,$x,$newPocketDimension);
					}
				}
			}
		}


		$this->pocketDimension = $newPocketDimension;
		unset($newPocketDimension);
	}

	private function setNearbyInactive(int $w, int $z, int $y, int $x, array &$newPocketDimension)
	{
		for($w1 = $w-1; $w1 <= $w + 1; $w1++)
		{
			for($z1 = $z-1; $z1 <= $z + 1; $z1++)
			{
				for($y1 = $y-1; $y1 <= $y + 1; $y1++)
				{
					for($x1 = $x-1; $x1 <= $x + 1; $x1++)
					{
						if(!isset($newPocketDimension[$w1][$z1][$y1][$x1]))
						{
							$newPocketDimension[$w1][$z1][$y1][$x1] = false;
						}
					}
				}
			}
		}
	}

	private function initDimension()
	{
		$l = strlen($this::INPUT[0]);
		$w = 0;
		$z = 0; //i guess thats the case here!?
		foreach($this::INPUT as $y => $yDim)
		{
			for($x = 0; $x < $l; $x++)
			{
				$this->pocketDimension[$w][$z][$y][$x] = $yDim[$x] === '#' ? true : false;
			}
		}
	}
}
