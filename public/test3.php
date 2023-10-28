<?php

include("../app/file3.php");

echo \Company\Myproject\sayHello();

$person1=new  \Company\Myproject\Person();
echo $person1->getName("Utkarsh");

use \Company\Myproject\Person; //top of the file ,

$person1=new  Person();
echo $person1->getName("Ketan");
