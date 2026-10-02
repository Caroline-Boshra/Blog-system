<?php

    $action = $_GET['action'] ;
    if($action === 'logout'){
        logout();
    }

    if($_SERVER['REQUEST_METHOD'] !== "POST"){
        setMessage("Method not allowed",'danger');
            header("location: index.php?page=login");
            exit;
    }
   
    if($action === 'register'){
        
       register($name, $email, $phone, $password);
        
    }elseif($action === 'login'){

        login($email, $password);
    }
    


    function register($name, $email, $phone, $password){

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

    function login($email, $password){


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

    function logout(){
        session_unset();
        session_destroy();

        header("location: index.php?page=login");
        exit;
    }