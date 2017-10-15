<?php
session_start();
if(isset($_SESSION['ref']))
{
    $ref=$_SESSION['ref'];

    // unset($_SESSION['cart'][$ref]['movieName']);
    // unset($_SESSION['cart'][$ref]['timeSlot']);
    // unset($_SESSION['cart'][$ref]['seats']);
    unset($_SESSION['cart'][$ref]);
    header('location: ticket.php');

}
else
{
    $ref=$_SESSION['ref'];


    unset($_SESSION['cart'][$ref]);
    header('location: ticket.php');
}
?>