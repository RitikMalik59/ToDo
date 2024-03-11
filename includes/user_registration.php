<?php include('db_connect.php'); ?>

<?php

if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($db_con, $_POST['username']);
    $email = mysqli_real_escape_string($db_con, $_POST['email']);
    $password = mysqli_real_escape_string($db_con, $_POST['password']);

    echo $username, $email, $password;

    $query = "INSERT INTO users (username,email,password) VALUES ('$username','$email','$password')";
    $new_user = mysqli_query($db_con, $query);

    // echo  $query;
    redirect('../login.php');
} else {
    echo "user not submitted";
}
