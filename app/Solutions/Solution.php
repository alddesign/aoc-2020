<?php
declare(strict_types = 1);
namespace Alddesign\EzMvc\Solutions;

use Alddesign\EzMvc\System\Helper;
use DateTime;

abstract class Solution
{
    public $day = 0;
    public $part = 0;
    public $ready = false;
    /** @var DateTime */
    public $date = null;
    
    public function __construct()
    {
        $class = get_class($this);

        try
        {
            $this->day = intval(substr($class, strlen($class) - 4, 2));
            $this->part = intval(substr($class, strlen($class) - 2));

            $this->date = new DateTime("2020-12-$this->day");
        }
        catch(\Exception $ex)
        {
            echo "Invalid solution class \"$class\". Format should be \"Solution0201\" for day 2, part 1";
            return;
        }
    }

    public function getUrl()
    {
        return Helper::url("/Solution/run/$this->day/$this->part");
    }
    
    abstract public function run();
}