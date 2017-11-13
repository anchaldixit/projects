<?php
    class person{
        public $firstName = "ANCHAL";
        public $lestName ="dixit";
        public $mobilNo = "9044558419";
    }
    $myObject = new person();
    echo $myObject ->firstName,"\n";
    echo $myObject ->lestName;
    $myObject ->firstName = "dazzling Anchal";
    echo $myObject ->firstName;
?>