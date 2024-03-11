<?php include('db_connect.php');

if (isset($_POST['submit'])) {

    $username = mysqli_real_escape_string($db_con, $_POST['username']);
    $password = mysqli_real_escape_string($db_con, $_POST['password']);

    // echo $username, $password;

    $query = "SELECT * FROM users";
    $registered_users = mysqli_query($db_con, $query);
    // $user = mysqli_fetch_array($registered_users);

    while ($user = mysqli_fetch_array($registered_users)) {

        $db_username = $user['username'];
        $db_email = $user['email'];
        $db_password = $user['password'];

        if ($db_username == $username && $db_password == $password) {

            redirect(('../index.php'));
        }
    }

    if ($db_username !== $username && $db_password !== $password) {

        echo "Login Failed ! Please try Again .";
        echo "<button> <a href='../login.php'>Login</a></button> ";
    }

    // var_dump($user['username']);
    // var_dump($user['password']);
    // var_dump($db_username);
    // var_dump($db_email);
    // var_dump($db_password);
    // var_dump($registered_users);

}
