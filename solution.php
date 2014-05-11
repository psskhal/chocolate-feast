<?php
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
fscanf(STDIN, "%d\n", $number);
 
for($i=0;$i<$number;$i++){
    list($n,$c,$m) = fscanf(STDIN, "%d %d %d");
    print f($n,$c,$m)."\n";
}
 
function f($n,$c,$m){
    
    $total_chocolates = $wrappers = floor($n/$c);
    while($wrappers >= $m){
        $tmp = floor($wrappers/$m);
        $wrappers = ($wrappers % $m);
        $wrappers += $tmp;
        $total_chocolates += $tmp;
    }
 
    return $total_chocolates;
}
