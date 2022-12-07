<?php

function function_with_returning_value($a=7,$b=7)
{
$mult=$a*$b;
#print $mult;
return $mult;
}


echo "the multiplication is   " .
function_with_returning_value();

