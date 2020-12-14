<?php
declare(strict_types = 1);
namespace Alddesign\EzMvc\Solutions;

class Solution1301 extends Solution
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
		foreach($this::BUSES as $bus)
		{
			if($bus !== 'x')
			{
				$buses[] = intval($bus);
			}
		}

		$myBusId = 0;
		$time = $this::TIME;
		while($myBusId === 0)
		{
			foreach($buses as $bus)
			{
				if($time % $bus === 0)
				{
					$myBusId = $bus;
					break;
				}
			}
			$time += $myBusId === 0 ? 1 : 0;
		}

		$minutes = $time - $this::TIME;
		$result = $myBusId * $minutes;
		echo "Its busId $myBusId and you have to wait $minutes minutes. The result ist <b>$result</b>";

	}
}
