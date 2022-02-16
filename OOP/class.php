<?php  
class demo  
{  
        private $a= "hello from class";  
        public function display()  
        {  
        echo $this->a;  
        }  
}  
$obj = new demo();  
    $obj->display();  
?>  