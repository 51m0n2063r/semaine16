<?php
require_once "vendor/autoload.php";

$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
    'cache' =>false));
$faker = Faker\Factory::create('fr_FR');
/*require_once 'vendor/autoload.php';

$loader = new Twig_Loader_filesystem('/templates');
$twig = new Twig_Environment($loader, array(
    'cache' => false,
));
$faker = Faker\Factory::create();*/
echo $twig->render('index.twig.html',[
     'productName' => $faker ->catchPhrase(),
     'Price' => $faker ->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 60).' euro',
     'catchPhrase' => $faker ->company(),
     'companySuffix' => $faker ->jobTitle(),
     'domainName' => $faker ->domainName(),
     'email' => $faker ->email(),
     'e164PhoneNumber' => $faker ->phoneNumber(),
     'address' => $faker ->address(),
     'bes' => $faker ->userName(),
     'site' => $faker ->url(),
]);
?>