<?php
for ($i = 5; $i <= 15; $i++) {
    echo $i . " ";
}
?>
<?php
$message = "Hello World";
echo $message;
?>
<?php
$marks = 80; // example marks

if ($marks >= 90) {
    echo "Grade: A+";
} elseif ($marks >= 80) {
    echo "Grade: A";
} elseif ($marks >= 70) {
    echo "Grade: B";
} elseif ($marks >= 60) {
    echo "Grade: C";
} elseif ($marks >= 50) {
    echo "Grade: D";
} else {
    echo "Grade: F";
}
?>
<?php
$num = 5; // example number
$factorial = 1;

for ($i = 1; $i <= $num; $i++) {
    $factorial *= $i;
}

echo "Factorial of $num: " . $factorial;
?>
<?php
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}
?>
<?php
$list = array(
    "Italy" => "Rome",
    "Luxembourg" => "Luxembourg",
    "Belgium" => "Brussels",
    "Denmark" => "Copenhagen",
    "Finland" => "Helsinki",
    "France" => "Paris",
    "Slovakia" => "Bratislava",
    "Slovenia" => "Ljubljana",
    "Germany" => "Berlin",
    "Greece" => "Athens",
    "Ireland" => "Dublin",
    "Netherlands" => "Amsterdam",
    "Portugal" => "Lisbon",
    "Spain" => "Madrid",
    "Sweden" => "Stockholm",
    "United Kingdom" => "London",
    "Cyprus" => "Nicosia",
    "Lithuania" => "Vilnius",
    "Czech Republic" => "Prague",
    "Estonia" => "Tallin",
    "Hungary" => "Budapest",
    "Latvia" => "Riga",
    "Malta" => "Valetta",
    "Austria" => "Vienna",
    "Poland" => "Warsaw"
);

// Sort the array by the name of the capital
asort($list);

// Display the capital and country name
foreach ($list as $country => $capital) {
    echo "Capital of $country: $capital <br>";
}
?>
<?php
function isPalindrome($str)
{
    $str = strtolower(str_replace(' ', '', $str)); // convert to lowercase and remove spaces
    $reverse = strrev($str); //
