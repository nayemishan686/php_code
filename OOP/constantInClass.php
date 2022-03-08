<?php 
//usuially we define constant like this
define('fName',"Nayem Hossain");
const lName = "Ishan\n";
echo fName . " " . lName;


//But when we use constant in class we need to declare like This
class MyClass{
    const FullName = "Nayem Hossain Ishan\n";
    function myName(){
        echo "My Full Name is ". self::FullName;
    }
}

echo MyClass::FullName;
$obj = new MyClass();
$obj -> myName();