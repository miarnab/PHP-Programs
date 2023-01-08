<!-- input a number and print its reverse -->
<?php
$n=readline("Enter the number: ");
$r=0;
$rev=0;
while($n>0){
    $r=$n%10;
    $rev=$rev*10+$r;
    $n=$n/10;
}
echo "The reversed number: ",$rev;
?>