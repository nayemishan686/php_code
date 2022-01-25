<?php
 $j=0;
 for($i=0; $i<=100; $i++){
    if($i%7 == 0){
        echo $i;
         echo PHP_EOL;
        $j++;
    }
}
 echo "Total operation {$j}";
?>
<?php
  echo PHP_EOL;
  $j=0;
  for($i=0; $i<=100; $i++){
      if($i%7 == 0) echo $i. "\n";
     $j++;
  }
 echo "Total operation {$j}";

 //Multiple Steping
 $j = 0;
 for($i=0, $j=0; $i<=100; $i+=7,$j+=11){
     echo $i."\n";
     echo $j < 100? $j. "\n": '';
     $j++;
 }
 echo "Total operation of $j";