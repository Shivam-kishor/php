<?php
function deefault($fname="first",$lname='last')
{
    $v="$fname $lname";
    return $v;
}

$name=deefault('baba');
echo"helloo $name";