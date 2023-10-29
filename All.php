<?php
echo " <b>1) Question One</b><br>";
$binary = "11111111"; // Replace with your binary number

// Binary to Decimal
$decimal = 0;
$binaryLength = strlen($binary);

for ($i = 0; $i < $binaryLength; $i++) {
    $bit = $binary[$binaryLength - $i - 1];
    $decimal += $bit * (2 ** $i);
}

// Decimal to Octal
$octal = '';
$tempDecimal = $decimal;
while ($tempDecimal > 0) {
    $remainder = $tempDecimal % 8;
    $octal = $remainder . $octal;
    $tempDecimal = (int)($tempDecimal / 8);
}

// Decimal to Hexadecimal
$hexadecimal = '';
$tempDecimal = $decimal;
$hexChars = "0123456789ABCDEF";

while ($tempDecimal > 0) {
    $remainder = $tempDecimal % 16;
    $hexadecimal = $hexChars[$remainder] . $hexadecimal;
    $tempDecimal = (int)($tempDecimal / 16);
}

echo "Binary: $binary<br>";
echo "Decimal: $decimal<br>";
echo "Octal: $octal<br>";
echo "Hexadecimal: $hexadecimal<br>";

echo " <b>2) [A] Question Two</b> Declarig and Printing All elements of the array<br>";
$arrays = [5, -7, 12, 10, -7, 11, -6, 12, 1, -7, 2, 9];
foreach($arrays as $array){
    echo $array ."  ";

}
echo "<br>";
echo " <b>2) [B] Question Two</b><br>";
$total1 = 0;

foreach($arrays as $element){
    if($element%2!=0){
        $total1 +=$element;
    }
}
echo "The Total Of odd Elements of the array is : $total1" . "<br>";
echo " <b>2) [C] Question Two</b><br>";
$total2= 0;
for($i=0; $i<count($arrays); $i++){
    if($arrays[$i]%2==0){
        $total2 += $arrays[$i];
    }
}
echo "The Total Of Even Elements of the array is : $total2";
echo "<br>";
echo " <b>2) [D] Question Two</b><br>";
$total3 =0;
foreach($arrays as $value){
    $total3+=$value;
}
echo "The Total Of All Elements of the array is : $total3" . "<br>";
echo " <b>2) [E] Question Two</b><br>";
$arrays = [5, -7, 12, 10, -7, 11, -6, 12, 1, -7, 2, 9];

$smallest = min($arrays); 
$positions = array(); 

for ($i = 0; $i < count($arrays); $i++) {
    if ($arrays[$i] === $smallest) {
        $positions[] = $i; 
    }
}

echo "The minimum number of the array is: $smallest " . " and their positions are  : ";
foreach ($positions as $pos){
    echo $pos .  "  ";
}
echo "<br>";

echo " <b>2) [F] Question Two</b><br>";
$maximum = max($arrays); 
$positions = array(); 

for ($i = 0; $i < count($arrays); $i++) {
    if ($arrays[$i] === $maximum) {
        $positions[] = $i; 
    }
}

echo "The maximum number of the array is: $maximum " . " and their positions are  : ";
foreach ($positions as $pos){
    echo $pos .  "  ";
}
echo "<br>";


echo "<b>3) Question Three</b><br>";
?>