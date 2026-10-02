<?php


if($_SERVER['REQUEST_METHOD'] === "POST"){

   
    $email = trim(htmlspecialchars(htmlentities($_POST['email']))); 
    $password = trim(htmlspecialchars(htmlentities($_POST['password'])));

    $errors = loginvalidate( $email, $password);

    if(! empty($errors)){
        setMessage($errors,'danger');
        header("location: index.php?page=register");
        exit;
    }
    if(loginUser($email, $password)){
        setMessage("User logged in successfully!", 'success');
        header("location: index.php?page=home");
        exit;
    }else{
        setMessage("Invalid email or password.", 'danger');
        header("location: index.php?page=register");
        exit;
    }
}