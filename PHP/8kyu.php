<?php
/*
Given an array of integers as strings and numbers, return the sum of the array values as if all were numbers.

Return your answer as a number.

*/
//My code:
function sum_mix($a) {
    return array_sum($a);
}

/*
 * Write a function to convert a name into initials. This kata strictly takes two words with one space in between them.

The output should be two capital letters with a dot seperating them.

It should look like this:

Sam Harris => S.H

Patrick Feeney => P.F

 * */
//My code:
function abbrevName($name){
    $arr = preg_split("/[\s,]+/", $name);
//    $first = array_slice($arr, 0);
//    $second = array_slice($arr, 0);

    return max($arr). "." . min($arr);
}
//var_dump(abbrevName("Sam Harris"));

/*It's pretty straightforward. Your goal is to create a function that removes the first and last characters of a string. You're given one parameter, the original string. You don't have to worry with strings with less than two characters.
*/
//My code:
function remove_char(string $s): string {
    // Write your code here
    $st = str_split($s);
    $newarray = array_slice($st, 1, -1);
    return implode($newarray);
}
//echo remove_char("person");
// Easy way for weakest^
// Best code:

//function remove_char(string $s): string {
//  return substr($s, 1, -1);
//}

//interesting one:
//function remove_char(string $s): string {
//    $tmp = "";
//    for($i = 0; $i < strlen($s); $i++)
//    {
//        if($i != 0 && $i != strlen($s) - 1)
//        {
//            $tmp.=$s[$i];
//        }
//    }
//    return $tmp;
//}

/*Given a non-empty array of integers, return the result of multiplying the values together in order. Example:
*/
//[1, 2, 3, 4] => 1 * 2 * 3 * 4 = 24
//My code:
function grow($a) {
    // Your code here
    return array_product($a);
    }

//var_dump(grow([2, 2, 2, 2, 2, 2]));

// Best code:
//function grow($a) {
//
//    if ( !empty($a) ) {
//        return $result = array_product($a);
//    }
//}
// interesting ones:

//function multiply($x, $y){
//    return $x * $y;
//}
//
//function grow($a) {
//    return array_reduce($a, 'multiply', 1);
//}

//use function array_product as grow;

//function grow($a) {
//   $proizvod=1;
//  for ($i=0; $i < count($a) ; $proizvod*=$a[$i++]) {}
//return $proizvod;
//}

/*
Remove n exclamation marks in the sentence from left to right. n is positive integer.
 */

//function remove(string $s, int $n): string {
//    $sR = str_replace("!", "", $s);
//    $nR = str_replace(number, "", $n);
//    return $sR;
//}

//echo remove("!!!!Hi", 1);
// Best code:

//function remove(string $s, int $n): string {
//    return preg_replace('/!/', "", $s, $n);
//}

// interesting ones:
//function remove(string $s, int $n): string {
//    return implode("", explode("!", $s, $n+1));
//}

//function remove(string $s, int $n): string {
//    while (($s = preg_replace("/^(.*?)\!{1}(.*?)$/", "$1$2", $s)) && --$n > 0);
//    return $s;
//}

//function remove(string $s, int $n): string {
//    $r = '';
//    $l = strlen($s);
//    for($i=0; $i<$l; $i++) {
//        if ($s[$i] != '!') {
//            $r .= $s[$i];
//        }
//        elseif ($n) {
//            --$n;
//        }
//        else {
//            $r .= $s[$i];
//        }
//    }
//    return $r;
//}

/*
 * Very simple, given a number, find its opposite.
Examples:
1: -1
14: -14
-34: 34
 */
//My code:
function opposite($n) {

    return $num = $n > 0 ? -$n : 0 - $n;
}

//echo opposite(10);

//Best code:
//function opposite($n) {
//    return -$n;
//}

//I laughed so hard :D

//function opposite($n) {
//
//  $nInt = intval($n);
//
//   if($nInt === 0)
//  {
//    return $nInt;
//  }
//
//  if($nInt > 0)
//  {
//    $isPositive = true;
//    $isNegative = false;
//  }
//  else
//  {
//    $isPositve = false;
//    $isNegative = true;
//  }
//
//
//  if($isNegative)
//  {
//   for($i = $nInt; $i<$nInt*2*-1; $i++)
//   {
//     if($i == $nInt*-1-1)
//     {
//       return ++$i;
//     }
//   }
//  }
//  else
//  {
//    if($isPositive)
//    {
//      for($i = $nInt; $i>$nInt*2*-1; $i--)
//     {
//       if($i == ($nInt-1)*-1)
//       {
//         return --$i;
//       }
//     }
//    }
//  }
//}

/*
 Given an array of integers.

Return an array, where the first element is the count of positives numbers and the second element is sum of negative numbers.

If the input array is empty or null, return an empty array.

Example
For input [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, -11, -12, -13, -14, -15], you should return [10, -65].
 */

function countPositivesSumNegatives($input) {
//    if ( !empty($input)) {
//        return empty($input);
//    }
    $newArray = [0, 0];

    for ($i = 0; $i < count($input); $i++){
       if($input[$i] <= 0) {
           $newArray[1] += $input[$i];
       } else {
           $newArray[0] += 1;
       }
    }
    return $newArray;
}
//echo countPositivesSumNegatives([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, -11, -12, -13, -14, -15]);
//var_dump(countPositivesSumNegatives(countPositivesSumNegatives([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, -11, -12, -13, -14, -15])));
//


//function countSheep($num){
//    //your code here
//    for ($i = 0; $i <=$num; $i++) {
//        echo $i . " sheep...";
//    }
//}
//echo countsheep(3);

function countSheep($num){
    //your code here
    $values = '';
    for ($i = 1; $i <=$num; $i++) {
        $values .= $i . ' sheep...';
    }
    return $values;
}
//var_dump(countSheep(6));

////your code here
//for ($i = 0; $i <= 10; $i++) {
////        return $i . " sheep...";
//    echo $i . " sheep...";
//}

//interesting code:

//function countsheep($n) {
//    return implode(array_map(function ($n) { return "$n sheep..."; }, range(1, $n)));
//}

//function countsheep($num) {
//    $glue = ' sheep...';
//
//    return implode($glue, range(1, $num)) . $glue;
//}

/*
 * */

function finalGrade($exam, $projects) {
// write your answer here
//    return $result = (
//        ($exam > 90 || $projects > 10)
//        ? ($result = 100)
//            : ($exam > 75 || $projects >= 5)
//                ? ($result = 90)
//                    : ( $exam > 50 || $projects >= 2)
//                        ? ($result = 75)
//                            : ( $exam < 50 || $projects < 2)
//                                ? ($result = 0) : $result = 0);
//    if ($exam > 90 || $projects > 10) {
//        return $result = 100;
//    } elseif ($exam > 75 || $projects >= 5) {
//        return $result = 90;
//    } elseif ($exam > 50 || $projects >= 2) {
//        return $result = 75;
//    } else {
//        return $result = 0;
//    }
    if ($exam > 90 || $projects > 10) {
        return $result = 100;
    }
    if ($exam > 75 && $projects >= 5) {
        return $result = 90;
    }
    if ($exam > 50 && $projects >= 2) {
        return $result = 75;
    }
    if ($exam < 50 && $projects < 2) {
        return $result = 0;
    }
}
//echo finalGrade(51, 2);

//best code:
//function finalGrade($exam, $projects) {
//    if($exam > 90 || $projects > 10) return 100;
//    if($exam > 75 && $projects > 4) return 90;
//    if($exam > 50 && $projects > 1) return 75;
//    return 0;
//
//}
//interesting one:
//function finalGrade($exam, $projects) {
//
//    if($exam <0 || $exam >100 || $projects<0 ) return false;
//    else{
//        if($exam > 90 || $projects > 10) return 100;
//        if($exam >75 && $projects >= 5) return 90;
//        if($exam >50 && $projects >= 2) return 75;
//        else return 0;
//    }
//}

/*
Our football team finished the championship. The result of each match look like "x:y". Results of all matches are recorded in the collection.

For example: ["3:1", "2:2", "0:1", ...]

Write a function that takes such collection and counts the points of our team in the championship. Rules for counting points for each match:

if x>y - 3 points
if x<y - 0 point
if x=y - 1 point
Notes:

there are 10 matches in the championship
0 <= x <= 4
0 <= y <= 4
 * */

//function points(array $games) {
//    foreach($games as $element):
//        $result = $element
//    endforeach;
//
//    return $result;
//
//}
//var_dump(points(['1:0','2:0','3:0','4:0','2:1','3:1','4:1','3:2','4:2','4:3']));

/*
 * Summation
Write a program that finds the summation of every number from 1 to num. The number will always be a positive integer greater than 0.

For example:

summation(2) -> 3
1 + 2

summation(8) -> 36
1 + 2 + 3 + 4 + 5 + 6 + 7 + 8*/
function summation($n) {
    $sum = 0;
 for ($i = 1; $i <= $n; $i++) {
      $sum += $i;
 };
  return $sum;
}
//    echo summation(6);
//
// Cleverest code:
//function summation($n) {
//  return $n * ($n + 1) / 2;
//}
//function summation($n) {
//  return array_sum(range(1, $n));
//}
//
/*
You get an array of numbers, return the sum of all of the positives ones.
Example [1,-4,7,12] => 1 + 7 + 12 = 20
Note: if there is nothing to sum, the sum is default to 0.
*/
function positive_sum($arr)
{
    return array_sum(array_filter($arr, function ($n){ return $n > 0;}));
}
//var_dump(positive_sum([1, -2, 3, 4, 5]));
// interesting code:
// function positive_sum($arr) {
//  $sum = 0;
//
//  foreach ($arr as $element) {
//    $sum += $element > 0 ? $element : 0;
//  }
//
//  return $sum;
//}