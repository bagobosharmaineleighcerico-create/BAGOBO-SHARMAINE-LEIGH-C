<?php

// connection to the the database
$host          = "localhost";
$username      = "root":
$password      = "";
$databaseName  = "bsis3c";



// data from input tag
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

// cheack the matching creadentail
if ($username == "leigh" && $password === "041005") {
    echo "success";
} else {
    echo "Denied";
}  

?>

sript.js

function showPassword() {
    var x = document.getElementById("password");

    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}

function login() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    if(username === "leigh" && password === "041005"){
        alert("Login Successful! Welcome " + username + "!");
    }else{
        alert("Invalid Username or Password");
    }
}
Compose

