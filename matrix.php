<?php 

function processMatrix($matrix){
    $diagonalSum = 0;

    $found_rows = [];
    foreach ($matrix as $index=> $mat) {
        if(count(array_unique($mat)) < count($mat)){
            $found_rows[] = $index;
        }
    }

    $num_of_found_rows = count($found_rows);

        $rows = count($matrix);

        $new = [];
        $flipped = [];
        $found_cols =0;

        for ($j=0; $j < $rows; $j++) { 
            $new = [];
            $cur = $matrix[$j];
            $vals = count($cur);

            for ($i=0; $i < $vals ; $i++) { 
                if($i == $j) {
                    $diagonalSum += $matrix[$i][$j];
                }
                $val = $matrix[$i][$j]; 
                $new[] = $val;
            }
            
            $flipped[] = $new;

            if(count(array_unique($new)) < count($new)){
                $found_cols++;
            }

            $new = [];
            
        }

        $result = [$diagonalSum, $num_of_found_rows, $found_cols];
        return json_encode($result);
 
}
$twodarray = [
    [1, 2, 3, 4],
    [2, 1, 4, 3],
    [3, 4, 1, 2],
    [4, 3, 2, 1]
];

$TwoDmatrix = [
    [2, 2, 2, 2],
    [2, 3, 2, 3],
    [2, 2, 2, 3],
    [2, 2, 2, 2]
];

var_dump(processMatrix($twodarray));
var_dump(processMatrix($TwoDmatrix));

?>