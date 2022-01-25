Continue:
<?php
for($i=10; $i<=30; $i++){
    if($i%2 == 0){
        continue;
    }
    echo "$i \n";
}
?>

Break:
<?php
for($i=30; $i<=40; $i++){
    if($i%7==0){
        break;
    }
    echo   $i."\n";
}