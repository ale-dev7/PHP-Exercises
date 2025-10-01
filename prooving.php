<?php
// I am a Commentary
// I am a  Commentary
#echo"Hello Baby Girl!"; // ich bine eine Ausgabe kein Consolen Log
// Variablen in PHP benötigen vor Ihrem Namen eine dollar Zeichen $
$int_zahl = 32; // deklariert als $Zahl mit dem zugewiesenen Wert 346 (Definition)
$wort = '346'; // hier wird der Wert 346 als string gespeichert
$fzahl = 3.14; // hier wird der Wert 3.14 als Float gespeichert
$bool_wahr = true;
$bool_falsch = false; // hier wird der Wert false als Boolean gespeichert

#toten Code
if($int_zahl === $wort) // prüft genaustens, ob die Variableen vom gleichen Typ sind
{
    echo $bool_wahr; # variablen sind unkompatible
}
#toten Code
else // falls nicht, gebe das aus
{
    echo $bool_falsch;
}
// % Modulo operator (Restrechner)

echo $int_zahl % 2;

//Vergleichsoperatoren
// == und === (das eine prüft inhaltlich das andere zusätzlich den Datentyp)
// != (nicht gleich) !== (nicht inhaltlich gleich und vom gleichen Datentyp)
// && (und) || (oder)