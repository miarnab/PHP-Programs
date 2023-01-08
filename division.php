<!-- input two numbers and find their quotient and remainder -->
<?php
$a=readline("Enter the first number: ");
$b=readline("Enter the second number: ");
$quo = 1;
$rem = 1;
if($a>$b)
{
    $quo = $a/$b;
    $rem = $a%$b;
}
else
{
    $quo = $b/$a;
    $rem = $b%$a;
}
echo "Quotient between the two numbers: ",$quo;
echo "Remainder between the two numbers: ",$rem;    
?>