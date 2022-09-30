<?php
$one=true;
$two=false;
$unknow0=123;
$unknow1=123.;
$unknow2='abc';
$unknow3=123.30046364324356;
$unknow4=143.123456789123456789;//after decimal 14 values 
echo$unknow0;
echo'<br>';
echo$unknow1,'<br>';
echo$unknow2,"</br>";
echo$unknow3,'<br>';
echo$unknow4,"<br>";


echo "-------------CHECKING DATA TYPES IN PHP-------------------------------------------",'<br>';
#CHECK data type
/* in PHP*/
//easy lang

echo var_dump($unknow0),"<br>";
echo var_dump($unknow1),'</br>';
echo var_dump($unknow2),'</br>';
echo var_dump($unknow3),'</br>';
echo var_dump($unknow4),'</br>';
echo var_dump($one),'</br>';//bool(true)
echo var_dump($two),'</br>';#bool(false)
echo ($one),'</br>';#bool(true)
echo $one,'</br>';#bool(true)
?>