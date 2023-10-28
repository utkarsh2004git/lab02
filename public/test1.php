<?php

include ("../app/file1.php");
include ("../app/file2.php");


echo "hello from test.php<br>";

echo sayHello();
echo sayHello();

$person1=new Person();
echo $person1->getName("Utkarsh");