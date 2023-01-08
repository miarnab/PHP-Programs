<!-- input two numbers as range and find the odd numbers and their count -->
<?php
$n=readline("Enter the last number: ");
$count=0;
echo "Odd numbers: ";
for($i=0;$i<$n;$i++){
    if($i%2!=0){
        $coungt++;
        echo $i,",";
    }
}
echo "\n";
echo "Number of odd numbers: ",$count;
?>