<?php
declare(strict_types = 1);
namespace Alddesign\EzMvc\Controllers;

use Alddesign\EzMvc\Models\DefaultModel;
use Alddesign\EzMvc\Solutions\SolutionStore;
use Alddesign\EzMvc\System\Config;
use Alddesign\EzMvc\System\View;
use Alddesign\EzMvc\System\Controller;
use Alddesign\EzMvc\System\Helper;
use DateInterval;
use DateTime;

/** Another Controller */
abstract class Solution extends Controller
{
	public static function list()
	{
		$solutionStore = new SolutionStore();

		$date = new DateTime('2020-11-30');
		$endDate = new DateTime('2021-01-3');
		$entries = [];
		do
		{
			$isDecember = $date->format('n') === '12';
			$day = intval($date->format('j'));
			$entries[] = 
			(object)[
				'date' => $date,
				'day' => $day,
				'isDecember' => $isDecember, 
				'solutions' => $isDecember ? $solutionStore->getSolutionsForDay($day) : [],
				'isMon' => $date->format('N') === '1',
				'isSun' => $date->format('N') === '7'
			];
			$date = $date->add(new DateInterval('P1D')); //+1 day
		}
		while($date <= $endDate);
		
		View::createRoot('list', ["entries" => $entries, 'title' => 'Solution list'])->render();
	}

	public static function run($day, $params)
	{
		$day = intval($day);
		$part = intval($params[0]);

		$solutionStore = new SolutionStore();
		$solution = $solutionStore->getSolution($day, $part);

		View::createRoot('run', ["solution" => $solution, 'title' => "Solution day $day part $part"])->render();
	}
}