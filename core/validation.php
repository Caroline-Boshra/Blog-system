<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}


function requiredFileds($value, $fieldName) {
    if (empty($value)) {
        return "$fieldName is required"; 
    }
    return null;
}

function validateEmail($email){
    
    if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        return "this filed must be like xxxxxxx@xx.com | 401 ";
    }
        return null;

}

function validatePassword($password){

    if (empty($password)) {

        return;
        
    }
    if (strlen($password) <= 6) {
        
     $_SESSION['errors']["password"] = "Password must be at least 6 characters ";

    }
    if (!preg_match("/[A-Z]/",$password)) {
        
        $_SESSION['errors']["password"] = "Password must contain at least 1 capital letter";

    }
    return null;
}



function registervalidate($name,$email,$phone,$password){

    $fileds=[
        "name" => $name,
        "email"=> $email,
        "phone"=> $phone,
        "password" => $password
    ];

    foreach($fileds as $filedName => $value){

        if(requiredFileds($value,$filedName))
        { 
            $error =requiredFileds($value,$filedName);
            return $error;
        }
       
    }
    if (validateEmail($email)) {
           $error =validateEmail($email);
           return $error;
    }

    if (validatePassword($password)) {
           $error =validatePassword($password);
           return $error;
    }
}

function loginvalidate($email,$password){

    $fileds=[
        "email"=> $email,
        "password" => $password
    ];

    foreach($fileds as $filedName => $value){

        if(requiredFileds($value,$filedName))
        { 
            $error =requiredFileds($value,$filedName);
            return $error;
        }
      
    }
     if (validateEmail($email)) {
           $error =validateEmail($email);
           return $error;
       }

       if (validatePassword($password)) {
           $error =validatePassword($password);
           return $error;
       }
}

function createBlogValidate($title, $content, $image) {

 $fileds=[
        "title" => $title,
        "content" => $content,
        "image" => $image['name']
    ];

    foreach($fileds as $filedName => $value){

        if(requiredFileds($value,$filedName))
        { 
            $error =requiredFileds($value,$filedName);
            return $error;
        }
     
    }

}

function updateBlogValidate($id, $title, $content, $image) {
    $fileds = [
        "id"      => $id,
        "title"   => $title,
        "content" => $content
    ];

    foreach ($fileds as $filedName => $value) {
        if (requiredFileds($value, $filedName)) { 
            return requiredFileds($value, $filedName);
        }
    }

    if (isset($image['tmp_name']) && !empty($image['tmp_name'])) {
        
        $isImage = getimagesize($image['tmp_name']);
        
        if ($isImage === false) {
            return "The uploaded file is not a valid image.";
        }
    }

    return null; 
}

function contactValidate($name, $email, $phone, $message) {
    $fields = [
        "name"    => $name,
        "email"   => $email,
        "phone"   => $phone,
        "message" => $message
    ];

    foreach ($fields as $fieldName => $value) {
        if (requiredFileds($value, $fieldName)) { 
            return requiredFileds($value, $fieldName);
        }
    }

    if (validateEmail($email)) {
        return validateEmail($email);
    }

    return null; 
}

