<?php
Class PostData
{
    private $name;
    private $email;
    private $pass;

    public function __construct()
    {
        $this->getData();
    }
//
//    public function getData()
//    {
//        if($_POST) {
//            foreach ($_POST as $key => $value) {
//
//            }
//            list($this->name, $this->email, $this->pass) = $_POST;
//        }
//        echo $this->name . 1;
//        echo $this->email;
//        echo $this->pass;
//    }
}

$a = new PostData();
var_dump($_POST);
if ($_POST){
    echo $_POST['email'];
} else {
    echo $_POST['email'] . 1;
}
