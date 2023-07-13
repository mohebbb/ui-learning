<?php
require_once 'config.php';

$username = $_POST['username'];
$password = $_POST['password'];

$check = mysqli_query($db, "SELECT * FROM users WHERE username = '$username' AND password = '$password'");
if(mysqli_num_rows($check) > 0 ) {
    header('location: ../index.php');
}else echo 'کاربری با این مشخصات یافت نشد!';


// if($_SERVER['REQUEST_METHOD'] == 'post') {
//     if(isset($_POST['username']) and isset($_POST['password'])) {
//         if (!empty($_POST['username']) and !empty($_POST['password'])) {
//             $result = registerUser($_POST['username'], $_POST['password']);
//         }
//     }
// }
// function registerUser($username , $password) {
//     global $db;
//     $sql = "insert into users (username , password) values (:username, :password)";
//     $stmt = $db->prepare($sql);
//     $stmt->execute([':username' => $username, ':password' => $password]);
//     return $stmt->rowCount();
// }