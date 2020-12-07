<?php
declare(strict_types = 1);
namespace Alddesign\EzMvc\Controllers;

use Alddesign\EzMvc\Models\DefaultModel;
use Alddesign\EzMvc\Solutions\SolutionStore;
use Alddesign\EzMvc\System\Config;
use Alddesign\EzMvc\System\View;
use Alddesign\EzMvc\System\Controller;
use Alddesign\EzMvc\System\Helper;

/** Another Controller */
abstract class Solution extends Controller
{
    public static function list()
    {
        $solutionStore = new SolutionStore();
        
        View::createRoot('list', ["solutions" => $solutionStore->getSolutions()])->render();
    }

    public static function run($day, $params)
    {
        $day = intval($day);
        $part = intval($params[0]);

        $solutionStore = new SolutionStore();
        $solution = $solutionStore->getSolution($day, $part);

        View::createRoot('run', ["solution" => $solution])->render();
    }
}