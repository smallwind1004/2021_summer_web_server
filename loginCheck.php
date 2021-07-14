<?php
include("db_conn.php");
$userPW = $_POST['passwd'];
echo "<br/>Hello<br/>";
// // $sql = "SELECT * FROM public.user;";
// // $sql = "SELECT * FROM public.user WHERE passwd = crypt('$userPW', gen_salt('bf'));";
$sql = "SELECT * FROM public.user WHERE passwd = crypt('$userPW', passwd);";
echo $sql . "<br/>";

$result =  pg_query($db_handle, $sql);
echo $result . "|||||<br/>";
if ($result) {
    echo "success";
    echo "rows of results: " . pg_num_rows($result) . "<br/>";
}else{
    echo "error";
}