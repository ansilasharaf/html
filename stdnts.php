<?php

$students = array("Senora", "Amreen", "Sia", "Maria", "Ann");


echo "Array of students: ";
print_r($students);


sort($students);
echo "<br>Sorted Array (ascending order): ";
print_r($students);


$students = array("Senora" => 4, "Amreen" => 3, "Sia" => 0, "Maria" => 1, "Ann" => 2);
asort($students);
echo "<br>After asort: ";
print_r($students);


arsort($students);
echo "<br>After arsort: ";
print_r($students);
?>
