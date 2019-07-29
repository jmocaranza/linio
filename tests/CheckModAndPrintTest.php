<?php
use PHPUnit\Framework\TestCase;

class CheckModAndPrintTest extends TestCase{

  /**
  *  
  * Test multiple of 3
  */ 
  public function testMultipleOf3()
  {
    require("src/CheckModAndPrint.php");

    $previous_response[0] = false;
    $previous_response[1] = 3;
    $msg = "Linio";

    $checkMod = new CheckModAndPrint(1 , 100 ,[] );
    
    $m3 = [3,6,9,12,15,18,21,24,27,30];
    foreach ($m3 as $i ){
      $response = $checkMod->checkMod( $i, [3], $msg, $previous_response );
      $this->assertEquals( $msg , $response[1]);
    }

  }

  /**
  *  
  * Test multiple of 5
  */ 
  public function testMultipleOf5()
  {
    $previous_response[0] = false;
    $previous_response[1] = 5;
    $msg = "IT";

    $checkMod = new CheckModAndPrint(1 , 100 ,[] );

    $m3 = [5,10,15,20,25,30,35,40,45,50,55,60,65,70,75,80,85,90,95,100];
    foreach ($m3 as $i ){
      $response = $checkMod->checkMod( $i , [5], $msg, $previous_response );
      $this->assertEquals( $msg , $response[1] );
    }
  }

    /**
  *  
  * Test multiple of 3 and 5
  */ 
  public function testMultipleOf3And5()
  {
    $previous_response[0] = false;
    $previous_response[1] = 0;
    $msg = "Linianos";

    $checkMod = new CheckModAndPrint(1 , 100 ,[] );
    $m3 = [15,30,45,60,75,90];
    foreach ($m3 as $i ){    
    $response = $checkMod->checkMod( $i , [3,5], $msg, $previous_response );
    $this->assertEquals( $msg , $response[1] );
    }

  }

}

?>
