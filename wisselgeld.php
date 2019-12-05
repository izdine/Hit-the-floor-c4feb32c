<?php
$invoer = Intval($argv[1]);
 $Geld = floor($invoer / 10);

  if ($Geld > 0 ) {
    echo "€" . $Geld . " X €10 euro ";
}
  $invoer %= 10;
  $Geld2 = floor($invoer / 5);

  if ($Geld2 > 0 ) {
    echo "€" . $Geld2 . " X €5 euro ";
}

  $invoer %= 5;
  $Geld3 = floor($invoer / 2);

  if ($Geld3 > 0 ) {
    echo "€" . $Geld3 . " X €2 euro ";
}

  $invoer %= 2;
  $Geld4 = floor($invoer / 5);

  if ($Geld4 > 0 ) {
    echo "€" . $Geld4 . " X €1 euro ";
}

if ($Geld * $Geld2 * $Geld3 * $Geld4 == 0 ){
echo " Geen wisselgeld ";
}
