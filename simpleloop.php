<?php

$i = 100;
myFunc($i);
function myFunc($val) {
   echo $val.",";
   $val = $val-2;
   ($val >= 0 ? myFunc($val) : '');
}
?>