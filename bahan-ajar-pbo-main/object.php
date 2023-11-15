<?php

require_once "data/person.php";

$person = new Person("eprian","siantar");
$person->name = "eprian";
$person->address = "siantar";
$person->country = "portugal";

$person2 = new person("volta", "siantar");
$person2->name = "volta";
$person2->address = "siantar";
$person2->country = "portugal";

// menampilkan hasil
echo "nama = {$person->name}" . PHP_EOL;
echo "alamat = {$person->address}" . PHP_EOL;
echo "negara = {$person->country}" . PHP_EOL;

echo "nama = {$person2->name}" . PHP_EOL;
echo "alamat = {$person2->address}" . PHP_EOL;
echo "negara = {$person2->country}" . PHP_EOL;