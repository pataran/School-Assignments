<?php
include('class_lib.php');

?>
<h2>html</h2>
<?php $table = new Html_Helper();
$names = array('first_name'=>'patrick','last_name'=>'gandolfo','nick_name'=>'gandalf');

echo $table->print_table($names);

 $sample_array = array("CA", "WA", "UT", "TX", "AZ", "NY"); 

 echo $table->print_select('State',$sample_array);

?>
