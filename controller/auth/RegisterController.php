<?php


if($_SERVER['REQUEST_METHOD'] === "POST"){

    $name = trim(htmlspecialchars(htmlentities($_POST['name'])));
    $email = trim(htmlspecialchars(htmlentities($_POST['email'])));
    $phone = trim(htmlspecialchars(htmlentities($_POST['phone'])));
    $password = trim(htmlspecialchars(htmlentities($_POST['password'])));

    $errors = registervalidate($name, $email, $phone, $password);

    if(! empty($errors)){
        setMessage($errors,'danger');
        header("location: index.php?page=register");
        exit;
    }
    if(registerUser($name, $email, $phone, $password)){
        setMessage("User registered successfully!", 'success');
        header("location: index.php?page=home");
        exit;
    }else{
        setMessage("Error occurred while registering user.", 'danger');
        header("location: index.php?page=register");
        exit;
    }
}