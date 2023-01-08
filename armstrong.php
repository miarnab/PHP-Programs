<!-- input a number and print whether its an armstrong number or not -->
<?php
$a = readline("Enter the number: ");
$r = 0;
$sum = 0;
$a1 = $a;
while(floor($a))
{
    $r = $a%10;
    $sum = $sum + $r*$r*$r;
    $a=$a/10;
}
if($a1==$sum)
{
    echo "Armstrong Number";
}
else
{
    echo "Not an Armstrong Number";
}
?>