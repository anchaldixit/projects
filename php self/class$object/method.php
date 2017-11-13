<?php
class person{
    const roll_no=1409010019;
    public $fastNama ="akanksha";
    public $lestName="tidde";
    
    public function getFastName()
      {
        return $this->fastName;
    }
    public function setFastName($tempName){
        $this->fastName =$tempName;
    }
}
$myObject = new person();
$myObject->setfastName("aka");
echo $myObject->getfastName();