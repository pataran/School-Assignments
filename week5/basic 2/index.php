<?php
include('class_lib.php');


?><h2>car 1</h2>
<?php $car1 = new Car(2000, 35, 'FULL', 15, .12);


echo $car1->display_all();
?>
