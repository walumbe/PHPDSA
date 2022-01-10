<?php 

function has_dupes($array) {
    $dupe_array = array();
    foreach ($array as $val) {
        if (++$dupe_array[$val] > 1) {
            return true;
        }
    }
    return false;
}

$arr = [1,2, 2,3];

var_dump(has_dupes($arr));

?>