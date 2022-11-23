<?php
    include("connectdb.php");
    $sql = "CREATE table IF NOT EXISTS users (
    user VARCHAR(10) NOT NULL,
    username VARCHAR(10) NOT NULL UNIQUE,
    password VARCHAR(10) NOT NULL,
    level int(1) NOT NULL
    )";
if (mysqli_query($con, $sql)) {
    echo "Tạo database thành công";
} else {
    echo "Tạo database thất bại: " . $con->error;
}
?>