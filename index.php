<?php 
$bill=15;
if($bill == 1 && $bill <= 50){
echo '3.50/unit' ;
}
elseif ($bill > 50 && $bill <=150) {
    echo'4/unit';
}
else {
    echo '6.50/unit' ;
}

?>