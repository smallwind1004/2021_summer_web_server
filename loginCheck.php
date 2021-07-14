<?php
include("db_conn.php");
$email = $_POST['email'];
$userPW = $_POST['passwd'];
echo "<br/>Hello<br/>";
// $sql = "SELECT * FROM public.user;";
$sql = "SELECT password FROM public.user where email = '$email';";
// $sql = "SELECT password FROM public.user WHERE email = '$email';";
echo $sql . "<br/>";

$result =  pg_query($db_handle, $sql);
echo $result . "\|/<br/>";
if (!$result) {
    echo "error";
} else if (pg_num_rows($result)) {
    $passwd = pg_fetch_all_columns($result)[0];
    echo "password : " . $passwd . "<br/>";
    echo "rows of results: " . pg_num_rows($result) . "<br/>";
    $sql2 = "SELECT * FROM public.user where password = crypt('$userPW', '$passwd');";
    $result =  pg_query($db_handle, $sql2);
    if (pg_num_rows($result)) {
        header("Location: profile.php");
    } else {
        echo "<b>password not match.</b>";
    }
} else {
    echo "<b>no such account!</b>";
}
