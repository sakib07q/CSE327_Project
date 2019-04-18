<? php
use PHPunit\framework\TestCase{

public function test(){

require calorie_intake_calculator.php;

$this->assertEquals(394.75,bmr_for_men(5,50,20,"lightly_active"));

}

}