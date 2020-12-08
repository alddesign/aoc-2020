<?php
declare(strict_types = 1);
namespace Alddesign\EzMvc\Solutions;

class SolutionStore
{
    private $solutions = [];

    public function __construct()
    {
        $this
        ->addSolution(new Solution0101())
        ->addSolution(new Solution0102())
        ->addSolution(new Solution0201())
        ->addSolution(new Solution0202())
        ->addSolution(new Solution0301())
        ->addSolution(new Solution0302())
        ->addSolution(new Solution0401())
        ->addSolution(new Solution0402())
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
     * @param int $day
     * 
     * @return Solution[]
     */
    public function getSolutionsForDay(int $day)
    {
        return isset($this->solutions[$day]) ? $this->solutions[$day] : [];
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