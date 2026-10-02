<?php


if($_SERVER['REQUEST_METHOD'] !== "POST"){
    setMessage("Method not allowed",'danger');
        header("location: index.php?page=create_blog");
        exit;
}


    $name = trim(htmlspecialchars(htmlentities($_POST['name'])));
    $email = trim(htmlspecialchars(htmlentities($_POST['email'])));
    $phone = trim(htmlspecialchars(htmlentities($_POST['phone'])));
    $message = trim(htmlspecialchars(htmlentities($_POST['message'])));

    $errors = contactValidate($name, $email, $phone, $message);

    if(! empty($errors)){
        setMessage($errors,'danger');
        header("location: index.php?page=register");
        exit;
    }
    if(contactData($name, $email, $phone, $message)){
        setMessage("your message sent successfully ,we will get back to you soon.", 'success');
        header("location: index.php?page=home");
        exit;
    }else{
        setMessage("Error occurred while sending message.", 'danger');
        header("location: index.php?page=contact-us");
        exit;
    }