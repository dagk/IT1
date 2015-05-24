<?php
//Copyright 2015 BITJUNGLE Rune Mathisen
//Lisens: https://www.apache.org/licenses/LICENSE-2.0


/*
 * Variabler i PHP kan være av fire ulike datatyper: 
 * 		○ Integer - heltall, for eksempel -4 eller 19
 * 		○ Float - desimaltall, for eksempel 3,1416
 * 		○ String - tekststrenger, for eksempel "Hallo verden!"
 * 		○ Boolean - en variabel som bare kan ha to verdier (sant/usant)
 * 
 * Variabler i PHP:
 * 		○ Starter med et $-tegn
 * 		○ Vi tilordner verdi med et likhetstegn: $var = verdi 
 * 		○ Vi kan også ha sammensatte datatyper i Array eller Object,
 * 		  det skal vi se på senere
 * 
 * Aritmetiske operatorer i PHP:
 * 		○ $x + $y      Addisjon
 * 		○ $x - $y      Subtraksjon
 * 		○ $x * $y      Multiplikasjon
 * 		○ $x / $y      Divisjon
 * 		○ $x % $y      Modulo-operasjon (rest etter divisjon av heltall)
 * 		○ $x ** $y     Eksponent (x opphøyd i y)
 * 
 * Vi avslutter alle linjer i PHP med et semikolon.
 * Koden \n betyr ny linje i utskriften fra programmet.
 * For å skrive ut noe fra programmet vårt, bruker vi kommandoen echo.
 * Du lærer mer om bruk av echo i fila 002-streng-1.php.
 */


//Integer
$epler = 3;
$pærer = 4;
$frukt = $epler + $pærer;
echo "Antall frukt er $frukt \n";

//Float
$tall_1 = 2.71828;
$tall_2 = 3.14159;
$tall_3 = $tall_1 ** $tall_2 - $tall_2;
echo "e opphøyd i pi minus pi er omtrent $tall_3 \n";

//String
$tekststreng = "Dette er en tekststreng";
echo "Teksteksempel: $tekststreng \n";

//Boolean
$heltsant = true;
$ikkesant = false;
echo "Variabelen heltsant er $heltsant \n";
echo "Variabelen ikkesant er $ikkesant \n";
?>