<?php
//Thêm kết nối database
require_once '../libs/product.php';
require_once '../config/config.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if (delete('products', $id)) {
        $_SESSION['message'] = "xóa id: ".$id." thành công";
        header("location:" . ROOT . "admin/?page=product");
        die();
    }
}
?>