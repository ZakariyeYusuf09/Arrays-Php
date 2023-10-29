<?php
echo " <b>1) Question One</b><br>";
$binary = "11111111"; // Replace with your binary number

// Binary to Decimal
$decimal = 0;
$binaryLength = strlen($binary);

for ($i = 0; $i < $binaryLength; $i++) {
    $colors = $binary[$binaryLength - $i - 1];
    $decimal += $colors * (2 ** $i);
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

echo "<b>2) Question 2<br>[A]</b>";
$arrays = [5, -7, 12, 10, -7, 11, -6, 12, 1, -7, 2, 9];
foreach($arrays as $array){
    echo $array ."  ";

}
echo "<br>";
echo " <b>[B]</b>";
$total1 = 0;

foreach($arrays as $element){
    if($element%2!=0){
        $total1 +=$element;
    }
}
echo "The Total Of odd Elements of the array is : $total1" . "<br>";
echo "<b>[C]</b>";
$total2= 0;
for($i=0; $i<count($arrays); $i++){
    if($arrays[$i]%2==0){
        $total2 += $arrays[$i];
    }
}
echo "The Total Of Even Elements of the array is : $total2";
echo "<br>";
echo " <b>[D]</b>";
$total3 =0;
foreach($arrays as $value){
    $total3+=$value;
}
echo "The Total Of All Elements of the array is : $total3" . "<br>";
echo "<b>[E]</b>";
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

echo " <b>[F]</b>";
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
     $associativeArray = array(
        'Id' => 'IT20209290122',
        'Name' => 'Mohamed Ali Hassan',
        'Phone' => '0706172827',
        'Dob' => '25-09-2022',
        'Sex' => 'Male',
     );
    
    echo ("<table border ='1' width = '60%' cellspacing = '0'>");
        
    echo ("<tr style = 'background-color: lightblue;'>");
    echo ("<th> Index </th>");
    echo ("<th> Value </th>");
    echo ("</tr>");
    foreach ($associativeArray as $k1 => $row) {
        echo ("<tr><td style = 'background-color: lightgray;'>$k1");
        echo ("<td>$row");     
    }
    echo ("</table>");
echo "<b>4) Question Four</b><br>";
$colors = array (
    'Light' => array (
        'Red'=> 'Light Red',
        'Green'=> 'Light Green',
        'Blue'=> "Light Blue",
    ),
    'Normal' => array (
        'Red'=> 'Norma Light ',
        'Green'=> 'Normal Green',
        'Blue'=> "Normal Blue",
    ),
    'Dark' => array (
        'Red' => "Dark Red",
        "Green"=> "Dark Green",
        "Blue"=> "Dark Blue",
    ),
);
echo ("<table border ='1' width = '70%' cellspacing = '0'>");
    foreach ($colors as $k1 => $row) {
        echo ("<tr style = 'background-color: lightblue;'><th>");
        foreach ($row as $k2 => $k)
            echo ("<th>$k2");
        break;
    }
    foreach ($colors as $k1 => $row) {
        echo ("<tr><th style = 'background-color: lightgray; text-align: left;'>$k1");
        foreach ($row as $k2 => $k)
            echo ("<td>$k");
    }


?>