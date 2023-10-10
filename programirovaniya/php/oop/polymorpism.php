<?php
/**polyorpism 
 * banyak bentuk
 * beberapa class yang memiliki method yang sama tapi berbeda implementasi
  berelasi dengan parent class yang memiliki method yang sama
*/
class Orang_tua_tsugimoto{
    protected  $name='';
  public function __construct(string $name='parent') {
    $this->name = $name;
  }
  public function Aisatsu():string{
    return "ohayou watashi wa {$this->name} desu yoroshiku !!";
  }
} //parent class
    //yoshiaki_urushibara_tsugimoto
class yoshiaki_urushibara_tsugimoto extends Orang_tua_tsugimoto{
  protected $name='yoshiaki_urushibara_tsugimoto';
  public function __construct(string $name='parent') {
    $this->name = $name;
  }
  public function Aisatsu():string{
    return "ohayou watashi wa {$this->name} desu yoroshiku !!";
  }
} //child class
 //sujoko_kujo_tsugimoto
class sujoko_kujo_tsugimoto extends Orang_tua_tsugimoto{
  protected $name='sujoko_kujo_tsugimoto';
  public function __construct(string $name='parent') {
    $this->name = $name;
  }
  public function Aisatsu():string{
    return "ohayou watashi wa {$this->name} desu yoroshiku !!";
  }

} //child class
  //yoshimura_joseph_tsugimoto
class yoshimura_joseph_tsugimoto extends Orang_tua_tsugimoto{
  protected $name='yoshimura_joseph_tsugimoto';
  public function __construct(string $name='parent') {
    $this->name = $name;
  }
  public function Aisatsu():string{
    return "ohayou watashi wa {$this->name} desu yoroshiku !!";
  }

} //child class

 $yoshiaki_urushibara =new yoshiaki_urushibara_tsugimoto();
  $yoshiaki_urushibara->Aisatsu();
  
 $sujoko_kujo_tsugimoto =new sujoko_kujo_tsugimoto();
  $sujoko_kujo_tsugimoto->Aisatsu();

 $yoshimura_joseph_tsugimoto =new yoshimura_joseph_tsugimoto();
  $yoshimura_joseph_tsugimoto->Aisatsu();