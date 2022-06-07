<?php
$n= 5;
$nb= 1;
for ($i = 1; $i <= $n; $i++)
{
for ($k = 1; $k <= $i; $k++)
{
    while($nb<$n)
{echo ".";
$nb++;}
echo "*";
}
echo "<br/>";
}
?>