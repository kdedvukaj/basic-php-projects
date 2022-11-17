<?php

$connect = mysqli_connect('localhost','root','','ninja_pizza');

if(!$connect){
    echo 'Connection error: '.mysqli_connect_error();
}

?>

<!DOCTYPE html>
<html lang="en">
<?php include('templates/header.php'); ?>
<?php include('templates/footer.php'); ?>
</html>