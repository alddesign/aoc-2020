<?php
declare(strict_types = 1);
namespace Alddesign\EzMvc\Solutions;

class SolutionStore
{
    private $solutions = [];

    public function __construct()
    {
        $this
        ->addSolution(new Solution0101(1,1))
        ->addSolution(new Solution0102(1,2))
        ->addSolution(new Solution0201(2,1))
        ->addSolution(new Solution0202(2,2))
        ;
    }

    private function addSolution(Solution $soluntion)
    {
        $this->solutions[$soluntion->day][$soluntion->part] = $soluntion;
        return $this;
    }

    /**
     * @param int $day
     * @param int $part
     * 
     * @return Solution
     */
    public function getSolution(int $day, int $part)
    {
        return $this->solutions[$day][$part];
    }

    /**
     * Gets an array with all solutions
     * @return array
     */
    public function getSolutions()
    {
        return $this->solutions;
    }
}