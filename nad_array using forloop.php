<?php
/*$ndarray=
array(
   array(1,3,5,7),
    array(8,9,10,11),
    array(1,3,5,7));

for($i=0;$i<3;$i++)
{
for($j=0;$j<3;$j++)
{
echo $ndarray[$i][$j]," ";
}
    echo"<br>";
}

*/

#wap where 3 employee print em id, name, salary.




$emp=array(array(1,"ram",5000),
        array(2,"shyaam",1000),
        array(3,"gyaan",15000)
);
for($i=0;$i<3;$i++)
{
    for($j=0;$j<3;$j++) 
{
echo $emp[$i][$j]," ";
}
    echo "<br>";
}
?>