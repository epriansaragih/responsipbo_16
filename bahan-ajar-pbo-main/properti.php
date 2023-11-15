<?php

// import data/person.php
require_once "data/person.php";

// buat object baru dari kelas person
$person1 = new Person("eprian","siantar");
$person2 = new Person("volta","siantar");

// manipulasi properti nama person
$person1->name = "eprian";
$person2->name = "volta";

$person1->address = "siantar";
$person2->address = "siantar";

// menampilkan hasil
echo "nama = {$person1->name}" . PHP_EOL;
echo "alamat = {$person1->address}" . PHP_EOL;
echo "negara = {$person1->country}" . PHP_EOL;

echo "nama = {$person2->name}" . PHP_EOL;
echo "alamat = {$person2->address}" . PHP_EOL;
echo "negara = {$person2->country}" . PHP_EOL;
