<!-- input two numbers and print their substraction -->
<?php
$a=readline("Enter the first number: ");
$b=readline("Enter the second number: ");
$diff=0;
if($a>$b){
    $diff=$a-$b;
}
else{
    $diff=$b-$a;
}
echo "Difference between the two numbers: ",$diff;    
?>