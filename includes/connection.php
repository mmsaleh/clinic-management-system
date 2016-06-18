<?php
// open connection to mysql server
$link = mysqli_connect( 'localhost', 'root', 'root', 'clinic');
if(!$link){
  die('cannot connect to server');
}
