<?php
error_reporting(E_ALL);
require_once '../config/conn.php';

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM users WHERE email LIKE '$email' AND password LIKE '$password'  LIMIT 1";
    $result = $conn->query($sql);

    $count = mysqli_num_rows($result);

    // If result matched $myusername and $mypassword, table row must be 1 row

    if ($count == 1) {
        $_SESSION['usernamwe'] = $email;

        header("location: index.php");
    } else {
        $_SESSION['errors'] = "Credentials don't match!";
        header('location: /login/login.php');
    }
}


// register

if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password = $_POST['psw'];
    $confirm = $_POST['psw-repeat'];
    $voter_registration_no = $_POST['voter_registration_no'];

    $hashed_pwd = md5($password);

    if ($password != $confirm) {
        $_SESSION['feedback'] = [
            'msg' => "Password mismatch encountered"
        ];
        header('Location: /register/register.php');
    }

    $date = Date('Y-m-d h:i:s');

    $insert = "INSERT INTO users (voter_registration_no, name, email, gender, password, has_voted, created_at, updated_at) VALUES('$voter_registration_no', '$name', '$email', '$gender', '$hashed_pwd', 0, '$date', '$date')";

    if ($insert = $conn->query($insert)) {
        $_SESSION['success'] = "Member created successfully";
        $_SESSION['username'] = $email;
        header('Location: /index.php');
    } else {
        $_SESSION['errors'] = "Something went wrong! Try again later!";
        header('Location: /login/login.php');
    }
}
