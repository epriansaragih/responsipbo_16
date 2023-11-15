<?php

require_once "data/Person.php";

$person1 = new Person("Eprian", "Siantar");
$person1->name = "Eprian";
$person1->sayHello("Eprian");

$person1->info();