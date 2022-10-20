<?php
$n=readline("Enter the last number: ");
$count=0;
echo "Even numbers: ";
for($i=0;$i<=$n;$i++){
    if($i%2==0){
        $count++;
        echo $i,",";
    }
}
echo "\n";
echo "Number of even numbers: ",$count;
?>