<!-- input two numbers and find their quotient and remainder using ternary operator -->
<?php
$a=readline("Enter the first number: ");
$b=readline("Enter the second number: ");
$quo=$a>$b?($a/$b):($b/$a);
$rem=$a>$b?($a%$b):($b%$a);
echo "Quotient of the two numbers: ",$quo,"\n";
echo "Remainder of the two numbers: ",$rem;
?>