<?php
// namespace Animals;
// include_once 'cat.php';
// include_once 'dog.php';

// $cat=new Cat();
// $cat->cat();

// $dog=new Dog();
// $dog->dog();

include_once 'cat.php';
include_once 'dog.php';

$cat=new Animals\Cat();
$cat->cat();

$dog=new Animals\Dog();
$dog->dog();