<?php

$name="Sanchita";
$roll=9;
$mark=82.00;
$pass=true;
$sub=["html","css","js","php","mysql"];

class stud{
    public $city="Sangli";
    public $state="maharashtra";
}

$stud=new stud();

echo "name:$name<br> 
Roll no:$roll <br>
Marks:$mark<br>
Pass:$pass<br>
Subjects:$sub[0]<br>
Student Address:{$stud->city},{$stud->state}";
echo "<br>";
print_r($sub);
?>
