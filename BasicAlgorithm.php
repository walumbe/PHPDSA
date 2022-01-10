<html>
<body>
<?php
//compute sum of two given integers
//if the two given integrers are the same, triple their sum

//create a function
//pass the integers as parameters
//conditions inside the function
//if the integers are not the same, find the sum
//else find the sum and multiply by three

function findSum($num1, $num2)
{

    return ($num1 == $num2) ? ($num1 + $num2) * 3: $num1 + $num2;
}

//echo findSum(2,2);

//get the difference between n and 51
//if n is greater than 51,triple the difference

function getDifference($num)
{
    return ($num > 51) ? ($num - 51) * 3: $num - 51;

}

//echo getDifference(54);

//check two integers
//return true if one of them is 30
//return true if their sum is 30

function sum($a, $b){
    return $a + $b;
}

function checkTwoIntegers($integer1, $integer2)
{

    return ($integer1 == 30 || $integer2 == 30 || sum($integer1, $integer2) == 30 ) ;
}

//echo checkTwoIntegers(31,24);

//check whether the integer is within ten of 100 or 200

function tens($num)
{
    return ($num % 10 == 0) ?  "true" : "false";
}

//echo tens(80);


//add if at the beginning of the string
//if string already begins with if, return the string unchanged

function addIf($str) {
    if(substr($str, 0, 2) == "if") {
        return $str;
    }else {
        return "if ". $str;
    }
}

//echo addIf("else");

//remove character at given position
function removeCharacter($s, $n)
{
    return substr($s,0,$n).substr($s,$n+1,strlen($s)-$n);
}

echo removeCharacter("Jonathan", 3);

?>

</body>
</html>
