Parasyti koda naudojant if ir elseif - Saukimas i kariuomene.
Turi buti aprasytos salygos: NEPILNAMETIS/PILNAMETIS, DIRBANTIS/NEDIRBANTIS/STUDIJUOJA.
Saukimo amzius 27 imtinai.
Ivedami duomenys: Vardas, Amzius, Statusas(studentas/dirbantis/nedirbantis)


telefonu uzduotis
PHP - Sukurti masyva kuriame bus telefonu firmos o jose aprasyta: Pavadinimas telefono, kaina,
nuotrauka. (bent 6vnt telefonu).
HTML/CSS - sukurti centre 3x2 telefono korteles ir atvaizduoti informacija forach’o
pagalba

Kauliuku uzduotis - 
Sukurti koda kuris atspindetu kauliuku zaidima su kompiuteriu.
1. Kompiuteris meta du kauliukus atsitiktinai
parenkamos reiksmes nuo 1 iki 6
2. zaidejas meta du kauliukus atsitiktinai
parenkamos reiksmes nuo 1 iki 6
3. Aprasyti antyki tarp kompiuterio ir zaidejo (kas laimjo)
4. HTML apipavidalinti kad matytusi kokius kauliukus ismete PC ir
kokius kauliukus ismete ZAIDEJAS (sukurti masyva panasu i praeitos
uzduoties, priskirti kauliuku nuotraukas)
5.Prie laimetojo, jam laimejus, turi atsirasti uzrasas LAIMEJOTE.

<?php

$vardas = 'Jonas';
$amzius = '23';
$statusas = 'studentas';


if ($amzius > 0 && $amzius < 18){
    print 'yra nepilnametis';
}elseif ($amzius >= 18 && $amzius <= 27 && $statusas !== 'studentas'){
    print 'esi saukiamas i kariuomene';
}elseif ($amzius > 27 && $amzius < 65){
    print 'esi nesaukiamas i kariuomene';
}
else{
    print 'esi nesaukiamas i kariuomene';
}


?>

