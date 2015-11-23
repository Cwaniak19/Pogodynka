<?php
function cgs()
{
$czas = explode(" ", microtime());
$a = (double)$czas[0];
$b = (double)$czas[1];
return $a + $b;
}
$start = cgs();
?>

<?php
$koniec = cgs();
$ile = $koniec - $start;
echo "Wykonano w " . substr($ile, 0, 5) . " sek."; 
?>