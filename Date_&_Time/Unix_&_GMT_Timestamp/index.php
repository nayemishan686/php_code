<?php 
  //Unix timestamps means total how many second has passed since Unix epoch to now
  echo time();
  echo PHP_EOL; 
  
  //mktime(hour, minute, second, month, day, year)
  //You can see how many seconds have passed since Unix epoch to a given date
  echo mktime(0,0,0,12,1,2022);
  echo PHP_EOL;
  date_default_timezone_set('Asia/Dhaka');
  echo mktime(0,0,0,12,1,2022);
  echo PHP_EOL;
  echo gmmktime(0,0,0,12,1,2022);
  echo PHP_EOL;

  //To see date difference between two dates. You can use following formula
  $firstDate = mktime(0,0,0,2,10,2022);
  $lastDate = mktime(0,0,0,2,21,2022);
  $dateDiff = ($lastDate - $firstDate)/(24*60*60);
  echo $dateDiff;


?>