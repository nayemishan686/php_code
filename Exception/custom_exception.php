<?php 
    class FirstException extends Exception{}
    class SecondException extends Exception{}
    
    function testException(){
        throw new FirstException();
    }

    try{
        testException();
    }catch(FirstException $e){
        echo "FirstException caught";
    }catch(SecondException $e){
        echo "SecondException caught";
    }catch(Exception $e){
        echo "Exception caught";
    }

?>