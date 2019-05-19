/*
Kata:
In this little assignment you are given a string of space separated numbers, and have to return the highest and lowest number.

Example:

highAndLow("1 2 3 4 5");  // return "5 1"
highAndLow("1 2 -3 4 5"); // return "5 -3"
highAndLow("1 9 3 4 -5"); // return "9 -5"
Notes:

All numbers are valid Int32, no need to validate them.
There will always be at least one number in the input string.
Output string must be two numbers separated by a single space, and highest number is first.

convert to an array
str_split
rsort
$firstAndLastCharacters = substr($string, 0, 4);

array_shift
array_pop()

explode
*/

highAndLow("1 2 -3 4 5");  // return "5 -3"

function highAndLow($str) {
$arr = explode(' ', $str);
sort($arr);
var_dump($arr);
}

<?php

//function highAndLow($numbers){
//    $arr = explode(' ', $numbers);
//    rsort($arr);
//    array_splice($arr, 1,3);
//    return implode(" ", $arr);
//}

//function highAndLow($numbers){
//    $arr = explode(' ', $numbers);
//    rsort($arr);
//    $first = reset($arr);
//    $last = end($arr);
//
//    return $firstLast;
//}

function highAndLow($numbers){
    $arr = explode(' ', $numbers);
    sort($arr);
    $high = end($arr);
    $low = reset($arr);
    $highLow = [$high,$low];
    return implode(" ", $highLow);
}

/*
 * Best code in codeWars:
function highAndLow($numbers) {
  $a = explode(' ', $numbers);
  return max($a) . " " . min($a);
}
*/

//var_dump(highAndLow("3 8 7 6 5"));
echo highAndLow("1 2 3 4 5");  // return "5 1"
echo highAndLow("1 2 -3 4 5"); // return "5 -3"
echo highAndLow("1 9 3 4 -5"); // return "9 -5"