<?php
declare(strict_types = 1);
namespace Alddesign\EzMvc\Solutions;

abstract class Solution
{
    public $day = 0;
    public $part = 0;
    
    public function __construct(int $day, int $part)
    {
        $this->day = $day;
        $this->part = $part;
    }
    
    abstract public function run();
}