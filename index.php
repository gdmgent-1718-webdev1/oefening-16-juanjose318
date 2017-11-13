<?php



function autoload($name) {

$path = "${name}.php";



require str_replace('\\',DIRECTORY_SEPARATOR,$path);

}

spl_autoload_register('autoload');



$kunstwerk1 = new Kunstwerken\Dans();
/*
$kunstwerk2 = new Kunstwerken\Boek();

$kunstwerk3 = new Kunstwerken\Beeldhouwerk();
$kunstwerk4 = new Kunstwerken\Film();
$kunstwerk5 = new Kunstwerken\Foto();
$kunstwerk6 = new Kunstwerken\Gedicht();
$kunstwerk7 = new Kunstwerken\Lied();
$kunstwerk8 = new Kunstwerken\Schilderij();
$kunstwerk9 = new Kunstwerken\Vaas();
*/

echo var_dump($kunstwerk1);
/*
echo var_dump($kunstwerk2);

echo var_dump($kunstwerk3);
echo var_dump($kunstwerk4);
echo var_dump($kunstwerk5);
echo var_dump($kunstwerk6);
echo var_dump($kunstwerk7);
echo var_dump($kunstwerk8);
echo var_dump($kunstwerk9);
*/