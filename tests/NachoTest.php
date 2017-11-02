<?php
class NachoTest extends PHPUnit_Framework_TestCase
{
 
  public function testNachHasCheese()
  {
    $nacho = new \PiotrJaworski\Package\Nacho();
    $this->assertTrue($nacho->hasCheese());
  }
  
}
