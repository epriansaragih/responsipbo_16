<?php

// import data/person.php
require_once "data/person.php";

// buat object dari kelas person
$eprian = new Person("eprian", "siantar");

// tambahkan value nama di object
$eprian->name = "eprian";

// panggil function sayHelloNull dengan parameter
$eprian->sayHello("volta");

// buat object dari kelas person
$volta = new Person("volta", "siantar");

// tambahkan value nama di object
$volta->name = "volta";

// panggil function sayHelloNull dengan parameter null
$volta->sayHello(null);
