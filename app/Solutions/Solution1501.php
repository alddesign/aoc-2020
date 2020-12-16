<?php
declare(strict_types = 1);
namespace Alddesign\EzMvc\Solutions;

use Alddesign\EzMvc\System\Helper;

class Solution1501 extends Solution
{
	public $ready = true;

	private const INPUT = [14,8,16,0,1,17];
	
	public function run()
	{
		set_time_limit(0);
		
		$numbers = $this::INPUT;
		$targetNo = 2020 - 1;
		for($i = count($numbers) - 1; $i < $targetNo; $i++)
		{
			$n = $numbers[$i];
			$i2 = $this->arraySeach($n, $numbers);
			if($i2 !== false)
			{
				$numbers[] = $i - $i2;
			}
			else
			{
				$numbers[] = 0;
			}
		}

		$result = $numbers[count($numbers) - 1];
		echo "The 2020th number is <b>$result</b>";
	}

	/** @return int|bool */
	private function arraySeach(int $value, array &$array)
	{
		for($i = count($array) - 2; $i >= 0; $i--)
		{
			if($array[$i] === $value)
			{
				return $i;
			}
		}

		return false;
	}
}
