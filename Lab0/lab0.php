<?php
echo "<title>Lab 0</title>";
//Q1
echo "<h1>Question 1</h1>";
echo "<p><i>\"Good morning, Dave,\" said HAL</i></p>";
//Q2
echo "<h1>Question 2</h1>";
function area($radius){
    $a = pi() * $radius * $radius;
    return $a;
}
echo "area of radius 2 = " . area(2) . "<br>";
//Q3
echo "<h1>Question 3</h1>";
function temp($celFahr){
    settype($celFahr, float);
    $c = (5/9) * ($celFahr - 32);
    return $c;
}
echo "Fahrenheit: 66" . " Celsius: " . temp(66) . "<br>";
//Q4
echo "<h1>Question 4</h1>";
$string = " PHP is fun ";
$trimmed = trim($string);
$length = strlen($trimmed);
echo "String \"" . $string . "\" has " . $length .  " characters" . "<br>"; 
//Q5
echo "<h1>Question 5</h1>";
$string2 = "WDWWLWWWLDDWDL";
$index = strpos($string2, "WWW");
echo substr($string2, ($index + strlen("WWW")), 1) . " comes after WWW in string \"" . $string2 . "\"<br>";
//Q6
echo "<h1>Question 6</h1>";
function pal($drome){
    $question = strrev($drome);
    if(strcasecmp($drome, $question) == 0){
        echo $drome . " is a palindrome" . "<br>";
    }
    else{
        echo $drome . " is not a palindrome" . "<br>";
    }
}
$eins = "kayak";
$zwei = "Hannah";
$drei = "Able was I ere I saw Elba";
$vier = "Sarina";
echo pal($eins) . pal($zwei) . pal($drei) . pal($vier);
//Q7
echo "<h1>Question 7</h1>";
$num = 7;
function odd($num){
    if($num % 2 == 0){
        echo $num . " is even<br>";
    }
    else{
        echo $num . " is odd<br>";
    }
}
echo odd($num);
//Q8
echo "<h1>Question 8</h1>";
function leap(){
    if(date(L) == 1){
        echo "<strong>It is</strong><br>";
    }
    else{
        echo "<strong>It isn't</strong><br>";
    }
}
echo leap();
?>