<?php


$conn= mysqli_connect('localhost', 'root','', 'blog') ;

if(!$conn){
    header('Location: ./views/maintenance.php');
    exit();
}