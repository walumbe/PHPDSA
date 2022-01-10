<?php
class Solution{

    /**
     * @param Integer[] $candidates
     * @param Integer $target
     * @return Integer[][]
     */
    function combinationSum($candidates, $target) {
        sort($candidates);
        $result = new ArrayObject();

        $this->getResult($result, new ArrayObject(), $candidates, $target, 0);
        return $result;
    }

    function getResult(...$result, ...$cur, $candidates, $target, $start)
    {
        if ($target > 0) {
            for ($i = $start; $i < count($candidates) && $candidates[$i] <= $target; $i++) {
                array_push($cur, $candidates[$i]);
                $this->getResult($result, $cur, $candidates, $target - $candidates[$i], $i);
                unset($cur[count($cur) - 1]);
            }    
        } else if($target == 0 ){
            array_push($result, $cur);
    	}
    }
}
?>