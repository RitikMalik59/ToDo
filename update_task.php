<?php
include_once('includes/db_connect.php');
// var_dump($_POST);
// // Or
// print_r($_POST);
// $name = '';
// $updateTask = $_POST['updateTask'];
// $updateId = $_POST['updateId'];

// echo $updateTask, $updateId;
// echo 'Hello Ritik';
// exit;



if (isset($_POST['updateId'])) {

    $updateId = mysqli_real_escape_string($db_con, $_POST['updateId']);
    $updateTask = mysqli_real_escape_string($db_con, $_POST['updateTask']);
    // $title = $_POST['title'] ?? '';

    $query = "UPDATE tasks SET title = '$updateTask' WHERE id = $updateId";
    $updatedTask = mysqli_query($db_con, $query);
    echo $query;
}
//  else {
//     echo "updated task not submitted";
// }


if (isset($_POST['checkBoxId'])) {

    $checkBoxId = mysqli_real_escape_string($db_con, $_POST['checkBoxId']);
    $status = mysqli_real_escape_string($db_con, $_POST['status']);
    // $title = $_POST['title'] ?? '';

    $query = "UPDATE tasks SET status = $status WHERE id = $checkBoxId";
    $updatedTask = mysqli_query($db_con, $query);
    echo $query;
} 
// else {
//     echo "updated task not submitted";
// }
