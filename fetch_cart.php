<?php
session_start();
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }
    if (!in_array($id, $_SESSION['cart'])) {
        $_SESSION['cart'][] = $id;
    }
    echo json_encode($_SESSION['cart']);
} else {
    echo json_encode(['error' => 'No product ID provided']);
}
?>
