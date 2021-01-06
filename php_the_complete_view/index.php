<?php 
$a=10;
$b=20;

echo "vengat";
test($a);
echo $a; 


function test(&$a)
{
	$a++;
}


 ?>


<?php
echo"<br>call by reference<br>";


class abc{


public function __call($name,$arg){

if($name=='sum'){
	if(count($arg)==3){
	return $this->sum1($arg[0],$arg[1],$arg[2]);
	}

}
}
public function sum1($a,$b,$c){
	return($a+$b+$c);
}
}
	

$obj=new abc();
echo $obj->sum(1,2,3);


?>


<?php 
class overload {
    public $name;
    // public function __construct($agr) {
    //     $this->name = $agr;
    // }
    public function __call($methodname, $agrument) {
         if($methodname == 'sum2') {

          if(count($agrument) == 3) {

              echo $this->sum1($agrument[0], $agrument[1], $agrument[2]);
          }
        }
    }
    public function sum1($a,$b,$c) {

        return $a + $b + $c;
    }
}
$object = new overload('Sum');
echo $object->sum2(1,2,3);
?>



<?php
function testas(){
return mail("vengadesh@oxsoftwares.com", "my own mail", "message");
}
if(testas())
{
  echo "ok";
}
else{
  echo"no";
}


?>