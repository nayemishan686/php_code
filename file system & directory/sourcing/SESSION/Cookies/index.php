<?php 
    //setcookie(name,vlaue,expire,path,domain,secure,httponly);
    // setcookie("first", "PHP is my favourite programming language", time()+30);
    // echo $_COOKIE['first'];
    
    //array set using setcookie
    setcookie("array[id]",1, time()+30);
    setcookie("array[name]","Nayem", time()+30);
    setcookie("array[lname]", "Hossain", time()+30);
    foreach($_COOKIE['array'] as $key=>$val){
        echo $key ." = ". $val."<br/>";
    }

    //array set in using serialize
    setcookie("array2",serialize(array('id'=>1,'name'=>'Jhum')), time()+30);
    foreach($_COOKIE['array2'] as $key=>$val){
        echo $key ." = ". $val."<br/>";
    }
    //print_r(unserialize($_COOKIE['array2']));
?>

<!-- cookie access by js -->
<!-- <script src="https://cdn.jsdelivr.net/npm/js-cookie@3.0.1/dist/js.cookie.min.js"></script>
<script>
    alert(Cookies.get('first'));
</script> -->