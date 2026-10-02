<?php

session_start();

require_once 'config/db.php';
require_once 'core/function.php';
require_once 'core/validation.php';
require_once 'views/layout/nav.php';
require_once 'views/layout/header.php';

$pages=isset($_GET['page']) ? $_GET['page'] : 'home';
showMessage();
switch($pages){
    case 'home':
        require_once 'views/home.php';
        break;
    case 'register':
        require_once 'views/auth/register.php';
        break;
    case 'sign-up':
        require_once 'controller/auth/AuthController.php';
        break;
    case 'login':
        require_once 'views/auth/login.php';
        break;
    case 'login-user':
        require_once 'controller/auth/AuthController.php';
        break;
    case 'logout':
        require_once 'controller/auth/AuthController.php';
        break;
    case 'create_blog':
        require_once 'views/createBlog.php';
        break;
    case 'add_blog':
        require_once 'controller/blog/BlogController.php';
        break;
    case 'deleteblog':
        require_once 'views/home.php';
        break;
    case 'destroy_blog':
        require_once 'controller/blog/BlogController.php';
        break;
    case 'editblog':
        require_once 'views/updateBlog.php';
        break;
    case 'update_blog':
        require_once 'controller/blog/BlogController.php';
        break;
    case 'contact_form':
        require_once 'views/contact.php';
        break;
    case 'contact-us':
        require_once 'controller/ContactController.php';
        break;    
    case 'about':
        require_once 'views/about.php';
        break;
    default:
        require_once 'views/404.php';
        break;
}

require_once 'views/layout/footer.php';

