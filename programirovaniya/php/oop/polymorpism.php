<?php
/**polyorpism 
 *            @static polymorpism
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

// polimorpism atau polymorpich/banyak bentuk merupakan salah 1 konsep terpenting di dalam paradigma oop
//yakni class yang memiliki method/fungsi yang sama tapi memiliki tugas yang berbeda
 $yoshiaki_urushibara =new yoshiaki_urushibara_tsugimoto();
  $yoshiaki_urushibara->Aisatsu();
  
 $sujoko_kujo_tsugimoto =new sujoko_kujo_tsugimoto();
  $sujoko_kujo_tsugimoto->Aisatsu();

 $yoshimura_joseph_tsugimoto =new yoshimura_joseph_tsugimoto();
  $yoshimura_joseph_tsugimoto->Aisatsu();
  //====================================conoh lain dari poliorpik
  //banyak  class memilki method yang sama tapi menghandle tugas yang berbeda
  //dinamik polymorpism menggunakkan interfacce sedang static polymorpism hanya menggunakkan parent class
  //sehingga dinamik polymorpism lebih aman sebab jika ada rekan developer yang menghapus method di suatu class
  //yang mengimplementasi BaseApi interface maka class tersebut akan protes sehingga bug akan terlihat dengan jelas 
  //      @dinamik polymorpism
interface BaseApi{
  function GetApi():string;
  function GetInformation():string;
  function PostApi():string;
}

    class FrontEnd implements BaseApi{
        function GetApi():string{
            return 'getting data from api trough axios cause we are front end dev';
        }
        function GetInformation():string{
          return 'getting information from 3d party api trough axios cause we are front end dev';
      }
        function PostApi():string{
          return 'sending data from api trough axios cause we are front end dev';
      }
    }
    class BackEnd implements BaseApi{
        function GetApi():string{
          return 'getting data from api trough database convert to json cause we are back end dev';
      }
        function GetInformation():string{
          return 'getting data from api trough database convert to json cause we are back end dev';
      }
        function PostApi():string{
          return 'getting post request from client get the data send it to database and return back to client response.status 201[content has been created] cause we are back end dev';
      }
    }

    $FrontEnd=new FrontEnd();
      $FrontEnd->GetApi();
      $FrontEnd->GetInformation();
      $FrontEnd->PostApi();
    $BackEnd=new BackEnd();
      $BackEnd->GetApi();
      $BackEnd->GetInformation();
      $BackEnd->PostApi();


  //=======================================================
  class Constanta{
    const name='vika rahmanova nurulianov';
    public function Aisatsu() {
      echo "ohayou minasan watashi no na wa {self::name} ";
    }
  }
  //tenik constanta
    $konstanta=new Constanta();
      $konstanta->Aisatsu();
    Constanta::name;