<?php

$connect = mysqli_connect('localhost','root','','ninja_pizza');

if(!$connect){
    echo 'Connection error: '.mysqli_connect_error();
}