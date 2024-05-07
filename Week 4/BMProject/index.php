<?php
session_start(); //Hàm bắt đầu phiên làm việc
require_once "./MVC/Bridge.php"; //Hàm gọi trang bridge
$myApp = new Application(); //Hàm tạo đối tượng myApp của lớp Application (Application là lớp nằm trong thư mục processing)
?>