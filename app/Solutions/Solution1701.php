<?php
declare(strict_types = 1);
namespace Alddesign\EzMvc\Solutions;

use Alddesign\EzMvc\System\Helper;

class Solution1701 extends Solution
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

	/** @var int[][][]  */
	private $pocketDimension = [[[]]]; //[x][y][z] => true|false
	private $dimensionSteps = [];
	
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

		$this->outputJsonData();
	}

	private function outputJsonData()
	{
		//rebuilding array indexes... JS is not so cool with indexes like -1, -2,...
		foreach($this->dimensionSteps as $step => $dimensionStep)
		{
			$this->dimensionSteps[$step] = array_values($this->dimensionSteps[$step]);
			foreach($this->dimensionSteps[$step] as $z => $zDim)
			{
				$this->dimensionSteps[$step][$z] = array_values($this->dimensionSteps[$step][$z]);
				foreach($this->dimensionSteps[$step][$z] as $y => $yDim)
				{
					$this->dimensionSteps[$step][$z][$y] = array_values($this->dimensionSteps[$step][$z][$y]);
				}
			}			
		}

		echo "<script>var steps = ";
		echo  json_encode($this->dimensionSteps);
		echo ";</script>\n";
		echo '<script src="'.Helper::url('assets/three.min.js').'"></script>'. "\n";
		echo '<script src="'.Helper::url('assets/Solution17.js').'"></script>'. "\n";
	}


	/**
	 * PHP has an internal array index that is different from ours...
	 */
	private function sortDimension()
	{
		ksort($this->pocketDimension);
		foreach($this->pocketDimension as $z => $zDim)
		{
			ksort($this->pocketDimension[$z]);
			foreach($this->pocketDimension[$z] as $y => $yDim)
			{
				ksort($this->pocketDimension[$z][$y]);
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

		foreach($this->pocketDimension as $z => $zDim)
		{
			echo "<br><b>Z$z</b><br>";
			foreach($this->pocketDimension[$z] as $y => $yDim)
			{
				$yno = str_pad(strval($y), 3, '_', STR_PAD_LEFT);
				echo "$yno:";
				foreach($this->pocketDimension[$z][$y] as $x => $value)
				{
					echo $value ? '#' : '.';
				}
				echo "<br>";
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
		foreach($this->pocketDimension as $z => $zDim)
		{
			foreach($this->pocketDimension[$z] as $y => $yDim)
			{
				foreach($this->pocketDimension[$z][$y] as $x => $value)
				{
					$active += $value ? 1 : 0;
					$all++;
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
		foreach($this->pocketDimension as $z => $zDim)
		{
			foreach($this->pocketDimension[$z] as $y => $yDim)
			{
				foreach($this->pocketDimension[$z][$y] as $x => $value)
				{
					$active = $this->countNearbyActive($z,$y,$x);
					if($value)
					{
						$newPocketDimension[$z][$y][$x] = ($active === 2 || $active === 3) ? true : false;
					}
					else
					{
						$newPocketDimension[$z][$y][$x] = $active === 3 ? true : false;
					}
				}
			}
		}

		$this->pocketDimension = $newPocketDimension;
		unset($newPocketDimension);
	}

	private function countNearbyActive(int $z, int $y, int $x)
	{
		$active = 0;
		for($z1 = $z-1; $z1 <= $z + 1; $z1++)
		{
			for($y1 = $y-1; $y1 <= $y + 1; $y1++)
			{
				for($x1 = $x-1; $x1 <= $x + 1; $x1++)
				{
					if(isset($this->pocketDimension[$z1][$y1][$x1]) && $this->pocketDimension[$z1][$y1][$x1] === true && ($z !== $z1 || $y !== $y1 || $x !== $x1))
					{
						$active++;
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
		foreach($this->pocketDimension as $z => $zDim)
		{
			foreach($this->pocketDimension[$z] as $y => $yDim)
			{
				foreach($this->pocketDimension[$z][$y] as $x => $value)
				{
					$this->setNearbyInactive($z,$y,$x,$newPocketDimension);
				}
			}
		}

		$this->pocketDimension = $newPocketDimension;
		unset($newPocketDimension);
	}

	private function setNearbyInactive(int $z, int $y, int $x, array &$newPocketDimension)
	{
		for($z1 = $z-1; $z1 <= $z + 1; $z1++)
		{
			for($y1 = $y-1; $y1 <= $y + 1; $y1++)
			{
				for($x1 = $x-1; $x1 <= $x + 1; $x1++)
				{
					if(!isset($newPocketDimension[$z1][$y1][$x1]))
					{
						$newPocketDimension[$z1][$y1][$x1] = false;
					}
				}
			}
		}
	}

	private function initDimension()
	{
		$l = strlen($this::INPUT[0]);
		$z = 0; //i guess thats the case here!?
		foreach($this::INPUT as $y => $yDim)
		{
			for($x = 0; $x < $l; $x++)
			{
				$this->pocketDimension[$z][$y][$x] = $yDim[$x] === '#' ? true : false;
			}
		}
	}
}
