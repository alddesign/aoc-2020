<?php
declare(strict_types = 1);
namespace Alddesign\EzMvc\Solutions;

use Alddesign\EzMvc\System\Helper;

class Solution1302 extends Solution
{
	public $ready = true;

	private const TIME = 1000511;
	private const BUSES = 
	[
		'29',
		'x',
		'x',
		'x',
		'x',
		'x',
		'x',
		'x',
		'x',
		'x',
		'x',
		'x',
		'x',
		'x',
		'x',
		'x',
		'x',
		'x',
		'x',
		'x',
		'x',
		'x',
		'x',
		'37',
		'x',
		'x',
		'x',
		'x',
		'x',
		'409',
		'x',
		'x',
		'x',
		'x',
		'x',
		'x',
		'x',
		'x',
		'x',
		'x',
		'x',
		'x',
		'x',
		'x',
		'x',
		'x',
		'17',
		'13',
		'19',
		'x',
		'x',
		'x',
		'23',
		'x',
		'x',
		'x',
		'x',
		'x',
		'x',
		'x',
		'353',
		'x',
		'x',
		'x',
		'x',
		'x',
		'x',
		'x',
		'x',
		'x',
		'x',
		'x',
		'x',
		'x',
		'x',
		'x',
		'x',
		'x',
		'x',
		'x',
		'x',
		'x',
		'x',
		'x',
		'x',
		'x',
		'x',
		'x',
		'x',
		'x',
		'x',
		'x',
		'x',
		'x',
		'x',
		'x',
		'x',
		'x',
		'x',
		'x',
		'x',
		'41'
	];
	
	public function run()
	{
		set_time_limit(0);
		
		$buses = [];
		$b = $this::BUSES;
		$l = count($b);
		for($c = 0; $c < $l; $c++)
		{
			if($b[$c] !== 'x')
			{
				$buses[$c] = intval($b[$c]);
			}
		}

		$interval = 1;
		$time = 0;
		$incTime = true;
		while(true)
		{
			$incTime = true;
			foreach($buses as $offset => $id)
			{
				if(($time + $offset) % $id === 0)
				{
					//if we find a matching line, we remove this bus, and multiply its id with the interval
					//cause this is now the least amount of steps we need to take to do the next check
					$interval *= $id;
					unset($buses[$offset]);
					$incTime = false;
					break;
				}
			}
			if($buses === [])
			{
				break;
			}

			$time += $incTime ? $interval : 0;
		}

		echo "<b>$time</b> ist the first possible option";
	}
}
