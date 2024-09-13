<?php
session_start();
unset($_SESSION['cart']);
unset($_SESSION['cardPay']);
header("Location: cart.php");
?>