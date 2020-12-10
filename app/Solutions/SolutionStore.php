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
        ->addSolution(new Solution0501())
        ->addSolution(new Solution0502())
        ->addSolution(new Solution0601())
        ->addSolution(new Solution0602())
        ->addSolution(new Solution0701())
        ->addSolution(new Solution0702())
        ->addSolution(new Solution0801())
        ->addSolution(new Solution0802())
        ->addSolution(new Solution0901())
        ->addSolution(new Solution0902())
        ->addSolution(new Solution1001())
        ->addSolution(new Solution1002())
        ->addSolution(new Solution1101())
        ->addSolution(new Solution1102())
        ->addSolution(new Solution1201())
        ->addSolution(new Solution1202())
        ->addSolution(new Solution1301())
        ->addSolution(new Solution1302())
        ->addSolution(new Solution1401())
        ->addSolution(new Solution1402())
        ->addSolution(new Solution1501())
        ->addSolution(new Solution1502())
        ->addSolution(new Solution1601())
        ->addSolution(new Solution1602())
        ->addSolution(new Solution1701())
        ->addSolution(new Solution1702())
        ->addSolution(new Solution1801())
        ->addSolution(new Solution1802())
        ->addSolution(new Solution1901())
        ->addSolution(new Solution1902())
        ->addSolution(new Solution2001())
        ->addSolution(new Solution2002())
        ->addSolution(new Solution2101())
        ->addSolution(new Solution2102())
        ->addSolution(new Solution2201())
        ->addSolution(new Solution2202())
        ->addSolution(new Solution2301())
        ->addSolution(new Solution2302())
        ->addSolution(new Solution2401())
        ->addSolution(new Solution2402())
        ->addSolution(new Solution2501())
        ->addSolution(new Solution2502())
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