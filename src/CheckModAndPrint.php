<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

class CheckModAndPrint{

  var $number_i;
  var $number_f;
  var $mods_f;
  
  function __construct( $number_i , $number_f , $mods )
  {
    $this->number_i = $number_i;
    $this->number_f = $number_f;
    $this->mods = $mods;
  }

  /**
  * Start processing 
  *
  */ 
  public function start()
  {
    for ($i = $this->number_i; $i <= $this->number_f; $i++) {
      $response[0] = false;
      $response[1] = $i;

      foreach( $this->mods as $mods)
      {
        $response = $this->checkMod( $i , $mods['mods'], $mods['ms'], $response );
      }

      $this->print( $response[1] ); 
    }
  }

  /**
   * Find multiple for a given number
   *
   * @param integer $numero dividend number
   * @param array $mods Array of integers , divisor number, 
   * @param string $message Message
   * @param string $previous_response 
   * @return Status
   */ 
  public function checkMod( $numero , $mods , $message, $previous_response )
  {
    foreach($mods as $mod)
    {
      if( $numero % $mod != 0 || $previous_response[0] )
      {
        return $previous_response;
      }
    }

    $response[0] = true;
    $response[1] = "".$message."";

    return $response;
  }

  /**
   * echo a given string
   *
   * @param string   $msg  Message to print
   * @return void
   */ 
  private function print( $msg )
  {
    echo $msg."<br/>";
  }

}
/*

$mods = [
  ["mods" => [3,5],
    "ms" => "Linianos",],
    ["mods" => [3],
    "ms" => "Linio"],
    ["mods" => [5],
    "ms" => "IT"],    
];

$app = new CheckModAndPrint(1 , 100 ,$mods );
$app->start();*/


?>
