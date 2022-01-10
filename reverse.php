<?php
function reverseString($s)
{
    $new_str = "";
    $s= trim($s);
    $arr = explode(" ", $s);
    $array_length = count($arr);
    for($i = $array_length - 1; $i >= 0; $i--)
    {
        if(trim($arr[$i]) != "")
        {
            $new_str .= $arr[$i];
            if($i < $array_length)
            {
                $new_str .= " ";
            }
        }
    }
    return trim($new_str);
}

var_dump(reverseString("the sky is blue"));

var_dump(reverseString( "  hello world  "));

var_dump(reverseString("a good   example"));

var_dump(reverseString("Alice does not even like bob"));

?>