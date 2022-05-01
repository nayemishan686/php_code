<?php
$files = "/opt/lampp/htdocs/php_code/file system & directory/directory_iterator.php";
//to see BaseName
//echo pathinfo($files, PATHINFO_BASENAME);

//to see DIRNAME
//echo pathinfo($files, PATHINFO_DIRNAME);

//to see EXTENSION
//echo pathinfo($files, PATHINFO_EXTENSION);

//to see filename 
echo pathinfo($files, PATHINFO_FILENAME);