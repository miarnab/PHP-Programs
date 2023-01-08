<!-- input a number and check whether its a pallindrome or not -->
<?php
$a = readline("Enter the number: ");
$r = 0;
$rev = 0;
$a1 = $a;
while(floor($a))
{
    $r = $a%10;
    $rev = $rev*10+$r;
    $a=$a/10;
}
if($a1==$rev)
{
    echo "Pallindrome Number";
}
else
{
    echo "Not a Pallindrome Number";
}
?>