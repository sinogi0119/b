<?php
include './lib/db_conn.php';

    $username = $_GET['id'];
    $sql = "SELECT idx from member where id='$username'";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_array($result);

    echo isset($data['idx']) ? "X" : "O";
?>