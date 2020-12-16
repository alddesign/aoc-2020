<?php
declare(strict_types = 1);
namespace Alddesign\EzMvc\Solutions;

use Alddesign\EzMvc\System\Helper;
use \SplFixedArray;

class Solution1502 extends Solution
{
	public $ready = true;

	private const INPUT = [14,8,16,0,1,17];
	private $cache = null;
	
	public function run()
	{
		set_time_limit(0);
		ini_set('memory_limit','512M'); //is there a better way
		
		$numbers = $this::INPUT;
		$targetNo = 30000000;
		$this->cache = new SplFixedArray($targetNo);

		$this->initCache($numbers);

		$value = $numbers[count($numbers) - 1];
		for($i = count($numbers) - 1; $i < $targetNo - 1; $i++)
		{
			$i2 = $this->getIndexFromChache($value);
			$this->updateCache($value, $i);
			if($i2 !== false)
			{
				$value= $i - $i2;
			}
			else
			{
				$value = 0;
			}
		}

		$result = $value;
		echo "The $targetNo th number is <b>$result</b>";
	}

	/** @return int|bool */
	private function getIndexFromChache(int $value)
	{
		return isset($this->cache[$value]) ? $this->cache[$value] : false;
	}

	private function updateCache(int $value, int $index)
	{
		$this->cache[$value] = $index;
	}

	private function initCache(array $numbers)
	{
		$l = count($numbers) - 2;
		for($i = 0; $i <= $l; $i++)
		{
			$this->cache[$numbers[$i]] = $i;
		}
	}
}
