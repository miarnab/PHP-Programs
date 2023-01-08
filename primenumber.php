<!-- input 2 numbers as range and print prime numbers and number of prime numbers -->
<?php
$a = readline("Enter the number: ");
$count = 0;
for($i = 2;$i<=$a/2;$i++)
{
    if($a%$i!=0)
    {
        $count++;
    }
}
if($count==0)
{
    echo "Not a Prime Number";
}
else
{
    echo "Prime Number";
}
?>