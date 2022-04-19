<?php
if (isset($_SESSION['user'])) {
    include 'admin_menu.php';
} ?>

<?php include 'menu.php'; ?>

<?php if (isset($_SESSION['user'])) {
    include 'logout.php';
} ?>