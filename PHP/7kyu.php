<?php
// CodeWars 7kyu PHP


/*
Let us begin with an example:
Take a number: 56789. Rotate left, you get 67895.
Keep the first digit in place and rotate left the other digits: 68957.
Keep the first two digits in place and rotate the other ones: 68579.
Keep the first three digits and rotate left the rest: 68597. Now it is over since keeping the first four it remains only one digit which rotated is itself.
You have the following sequence of numbers:
56789 -> 67895 -> 68957 -> 68579 -> 68597
and you must return the greatest: 68957.
Task
Write function max_rot(n) which given a positive integer n returns the maximum number you got doing rotations similar to the above example.
So max_rot (or maxRot or ... depending on the language) is such as:
max_rot(56789) should return 68957
max_rot(38458215) should return 85821534
*/

//function maxRot($n) {
////    $arr = str_split($n, 1);
//   for($i = 0; )
///* NOT SOLVED*/
//
//}
//var_dump(maxRot(56789));

//function maxRot($n) : int {
//    $max = $n;
//    $rotations = strlen($n) - 1;
//    for ($i = 0; $i < $rotations; $i++) {
//        $n = substr($n, 0, $i) . rotate(substr($n, $i));
//        $max = max($max, $n);
//    }
//    return $max;
//}
//
//function rotate($s) {
//    return substr($s, 1) . substr($s, 0, 1);
//}


/*
Given an array of ones and zeroes, convert the equivalent binary value to an integer.

Eg: [0, 0, 0, 1] is treated as 0001 which is the binary representation of 1.

Examples:

Testing: [0, 0, 0, 1] ==> 1
Testing: [0, 0, 1, 0] ==> 2
 * */
//function binaryArrayToNumber($arr)
//{

    // using foreach to change every element of array
//    for
//    foreach ($arr as &$element) {
//        $maxIterations = count($arr);
//        for ($i = 0; $i <= $maxIterations; $i++) {
//            if ($element > 0) {
//                $binary = $element * 2**$i;
//            } else {
//                $binary = 0;
//            }
//        }
//    }
//    return $binary;
//}

//var_dump(binaryArrayToNumber([0,0,0,1]));

//function abbrevName($name)
//{
//   preg_match_all("/[^a-z]/", $name, $matches);
//   return str_replace(" ", ".", implode($matches[0]));
//}

//function abbrevName($name)
//{
//    preg_match_all("/[A-Z]/", $name, $matches);
//    return str_replace(" ", ".", implode(".", $matches[0]));
//}


function solution($str) {
   return strrev($str);
}

echo solution("world");
echo solution("hello");
echo solution("");
echo solution("h");

//multiply_with_defaults
//This function should receive 2 optional arguments, $a and $b, which should both default to 1 if they are not provided. This function should return the product of the two numbers.
//function multiply_with_defaults($a = 1, $b = 1) {
//    return $a * $b;
//}

//circle_area
//This function should receive an optional argument $radius which should default to 1 if no argument is provided. It should return the area of a circle with radius $radius. Allowances will be made for minor floating point errors.
//function circle_area($radius = 1) {
//    return $r = pi()*$radius*$radius;
//}

//prank_replace
//This function should receive 1 required argument followed by 2 optional arguments. The first (required) argument is a string $string in which we will perform our operation on. The second and third arguments are $match and $replacement which should default to "hello" and "goodbye" respectively. The function should then return a new string which is the original $string with all instances of $match replaced with $replacement.
//function prank_replace($string, $match = "hello", $replacement = "goodbye") {
//    return str_replace($match, $replacement, $string);
//}


//double - This function should receive a number $n which should be passed into the function by reference. The function should then double the value of $n and store this (new) value in $n. No return value is necessary.
//function double(&$n) {
//  return $n *= 2;
//}