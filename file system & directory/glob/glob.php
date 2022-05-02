<?php
//to see all files and directories, you can use the following step
print_r(glob('./*'));

//to see only directories, you can use the following step
print_r(glob('./*',GLOB_ONLYDIR));

//to see only files which contain i, you can use the following step
print_r(glob('./*i*'));

//to see only files which contain i and a, you can use the following step
print_r(glob('./a*'));

//to see all images from assets, you can use the following step
print_r(glob('./assets/*/*.jpg'));

