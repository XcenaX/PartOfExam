<?php

use App\Classes\Database;

include "autoload.php";
session_start();

$data = $_GET;

if($data["userName"] == null){
    echo "No username passed";
    exit();
}
if($data["password"] == null){
    echo "No password passed";
    exit();
}

$db = new Database("realibiBD");
$user = $db->query("SELECT * FROM users WHERE userName='" . $data["userName"] . "'")[0];

if($user == null){
    echo "Username is not valid";
    exit();
}
else if($user["password"] != $data["password"]){
    echo "No password passed";
    exit();
}

$_SESSION["user"] = $user["id"];
header("Location: /");