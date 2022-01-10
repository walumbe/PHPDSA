<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reverse String</title>
</head>
<body>

<?php
    // Reverse letters of the word
    function reverse($str, $first, $last)
    {
        // variable to store character
        $store_char = "";

        while($first <= $last)
        {
            // swapping the first
            // and the last character
            $store_char = $str[$first];
            $str[$first] = $str[$last];
            $str[$last] = $store_char;
            $first++;
            $last--;

        }

    }

    // function to reverse strings
    function reverseString($s)
    {
        $s = explode(" ", $s);
        $start = 0;
        for($end = 0; $end < count($s); $end++)
        {
            // if we see a space
            // reverse the previous word
            if($s[$end] == " ")
            {
                reverse($s, $start, $end);
            }
        }

        // reverse the last word
        // reverse($s, $start, count($s)-1);
        // echo "<pre>";
        // var_dump($s);
        // echo "</pre>";

    //     for($i = count($s); $i >= 0; $i--){
    //         $arr[] = $s[$i];
    //     }
    
    //    $s =  trim(implode(" ", $arr));
    

        // Reverse the entire string
        // reverse($s, 0, strlen($s)-1);
        return join(" ", $s);
        // return $s;
    }

    $s = "  Bob     Loves  Alice  ";
    var_dump(reverseString($s));

?>
    
</body>
</html>

    

