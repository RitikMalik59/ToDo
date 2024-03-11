
<?php



$db_con = mysqli_connect('localhost', 'root', '', 'todo');
if (!$db_con) {
    die(mysqli_connect_error());
}


function redirect($url)
{
    header('Location: ' . $url);
    die();
}
