<?php
class Calculation
{
    PUBLIC $a,$b,$c;
function Sum()
{
    $this->c=$this->a+$this->b;
        
    return $this ->c;
}
}
//$d=new calculation();


$d=new cALculation();
$d->a=10;
$d->b=20;
echo $d->sum();
