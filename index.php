<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Student Index</title>
    </head>
    <body>
       <?php

include('Student.php'); 
$students = array();
$first = new Student();

$first->surname = "Doe ";

$first->first_name = "John";

$first->add_email('home','john@doe.com');

$first->add_email('work','jdoe@mcdonalds.com');

$first->add_grade(65);

$first->add_grade(75);

$first->add_grade(55);

$first->status = "Junior";

$students['j123'] = $first;
$second = new Student();

$second->surname = "Einstein";

$second->first_name = "Albert";

$second->add_email('home','albert@braniacs.com');

$second->add_email('work1','a_einstein@bcit.ca');

$second->add_email('work2','albert@physics.mit.edu');

$second->add_grade(95);

$second->add_grade(80);

$second->add_grade(50);

$second->status = " Senior";

$students['a456'] = $second;
$third = new Student();

$third->surname = "Jianhui";

$third->first_name = "Chen";

$third->add_email('home','xxx@xx.com');

$third->add_email('work1','xxx@xx.com');

$third->add_email('work2','xxx@xx.com');

$third->add_grade(95);

$third->add_grade(100);

$third->add_grade(70);

$third->status = " Senior";

$students['a01159926'] = $third;

$fourth = new Student();

$fourth->surname = "Zhaohang";

$fourth->first_name = "Liu";

$fourth->add_email('home','xxx@xx.com');

$fourth->add_email('work1','xxx@xx.com');

$fourth->add_email('work2','xxx@xx.com');

$fourth->add_grade(95);

$fourth->add_grade(100);

$fourth->add_grade(70);

$fourth->status = " Senior";

$students['a0112'] = $fourth;
foreach($students as $student) 
    echo $student->toString();

?>
    </body>
</html>