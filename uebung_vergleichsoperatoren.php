<?php

// Erstelle 4 Variablen:
//1.Eine Zahl
//2.Eine Zahl mit Komma
//3.Ein Wort
//4.Ein Boolean(True)

//1 Vergleiche die Zahl mit der Kommazahl und lasse dir einen Text ausgeben, ob die beiden inhatlichen Werte gleich sind.
//2 Vergeliche das Wort mit der Zahl und lasse dir einen Text ausgeben, ob diesen beiden Datentypisch zusammenpassen oder nicht
//3 Prüfe, ob die Zahl oder die Kommazahl großer als 10 ist und lass dir wieder einen Prüftext deiner Wahl ausgeben.
//4 Prüfe, ob die Zahl oder die Kommazahl ein boolean ist.
//5 Prüfe, ob dein Wort (string) den Text, "Hello World" beinhaltet, falls nichts, ändere ihn und lass dir die Variable als echo

$intzahl = 95;
$fzahl = 9.5;
$wort = 'Baum';
$boolean = true;

//1
if ($intzahl == $fzahl)
{
    echo 'Die Werte beider Zahl sind inhaltlich gleich';
}
else
{
    echo 'Die Werte sind nicht gleich<br>';
}

//2
if ($wort === $intzahl)
{
    echo "Die Werte beider Zahl sind inhaltlich gleich'";
}
else ($wort != $intzahl);
{
    echo 'Die Werte sind identisch<br>';
}


//3
if ($intzahl > 10 || $fzahl > 10)
{
    if($intzahl > 10)
    {
        echo'intzahl ist größer 10';
    }
    else
    {
        echo'der float ist größer als 10';
    }

}
else
{
    echo'keine Zahl ist größer 10';
}

// verschachteltes if
if ($intzahl > 10) {
    if ($fzahl > 10) {
        echo 'Beide Zahlen sind größer als 10';
    } else {
        echo 'Die Ganzzahl ist größer als 10, die Kommazahl nicht';
    }
} else {
    if ($fzahl > 10) {
        echo 'Die Kommazahl ist größer als 10, die Ganzzahl nicht';
    } else {
        echo 'Beide Zahlen sind kleiner oder gleich 10';
    }
}

//4
if($intzahl === $boolean || $fzahl === $boolean) // Wenn beide true sind ...ansonst
{
    echo 'Beide true';

}
elseif ($intzahl === $boolean) // prüfen ob kommazahl true ist..ansonsten
{
    echo 'Intzahl ist ein Boolean, Kommazahl ist nicht';
}
elseif ($fzahl === $boolean)
{
    echo 'Kommazahl ist ein Boolean, Intzahl ist nicht';
}
else
{
    echo 'Beide vollig falsch'; // alle beide sind keinerlei bolean oder nullen
}
//5
if ($intzahl > 10 || $fzahl > 10)
{
    if($intzahl > 10)
    {
        echo'intzahl ist größer 10';
    }
    else
    {
        echo'der float ist größer als 10';
    }

}
else
{
    echo'keine Zahl ist größer 10';
}
#komment