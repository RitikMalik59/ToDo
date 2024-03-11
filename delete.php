<?php
include_once('includes/db_connect.php');

if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];
    // echo $delete_id;

    $query = "DELETE FROM tasks Where id=$delete_id";
    $delete_task = mysqli_query($db_con, $query);
    redirect('index.php');
}
