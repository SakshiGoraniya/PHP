<?php  
      
    class base  
    {  
        final public function dis1()  
        {  
            echo "Base class..";  
        }     
    }  
    class derived extends base  
    {  
        public function dis1()  
        {  
            echo "derived class";  
        }  
    }  
    $obj = new derived();  
    $obj->dis1();  
  
?>  