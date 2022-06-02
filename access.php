<?php 
session_start();

// if(!isset($_SESSION['authorized'])){
// header('location:../../login.php');
// }else{}

if ($_SESSION['authorized']!=true) {
    header('location:../../login.php');
} else {
}
?>