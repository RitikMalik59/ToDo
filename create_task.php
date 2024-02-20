<?php

include_once('db_connect.php');


if (isset($_POST['add_task'])) {

    $title = $_POST['title'] ?? '';

    $query = "INSERT INTO tasks (title) VALUES ('$title')";
    $new_task = mysqli_query($db_con, $query);

    redirect('index.php');
    // echo $title, $query;
} else {
    echo "task not submitted";
}
