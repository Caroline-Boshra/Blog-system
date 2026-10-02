<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

function setMessage($message, $type) {
    $_SESSION['message'] = [
        'type' => $type,
        'text' => $message
    ];
} 

function showMessage() {
    
    if (isset($_SESSION['message'])) {
        
        $type = $_SESSION['message']['type'];
        $text = $_SESSION['message']['text'];
        
    
        if (is_array($text)) {
            $text = implode("<br>", $text);
        }

        echo "<div class='alert alert-$type' role='alert'>$text</div>";
        
        unset($_SESSION['message']);
    }
} 


function registerUser($name, $email, $phone, $password) {
    
    $conn = $GLOBALS['conn'];
   
        $passwordHashed =password_hash($password,PASSWORD_DEFAULT);

    $sql="INSERT INTO users (name, email, phone, password) VALUES ('$name', '$email', '$phone', '$passwordHashed')";
    $reslt = mysqli_query($conn,$sql);
    if ($reslt) {
        $new_id = mysqli_insert_id($conn); 
        $_SESSION['user_id'] = $new_id;
        $_SESSION['user'] = [
            "id"=> $new_id,
            "name"=> $name,
            "email"=> $email,
            "phone"=> $phone
        ];
       return true;
    }else {    
        $_SESSION['errors']="error while insert data";
        header("location: index.php?page=register");
        exit;
    }
}
function loginUser($email, $password) {
    
    $conn = $GLOBALS['conn'];
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_num_rows($result);

    if ($user === 0) {
         setMessage("User not found", 'danger');
         header("location: index.php?page=login");
         exit;
    } 
    
    $userData = mysqli_fetch_assoc($result);
    if (password_verify($password, $userData['password'])) {
        $_SESSION['user_id'] = $userData['id'];
        $_SESSION['user'] = [
            "id"=> $userData['id'],
            "name"=> $userData['name'],
            "email"=> $userData['email']
          
        ];
        return true;
    } else {
        setMessage("Invalid email or password.", 'danger');
        header("location: index.php?page=login");
        exit;
    }
    
}



function createBlog($title,$content,$image,$user_id){

    $conn= $GLOBALS['conn'];
    $imageName = $image['name'];
    
    $fullPath = (__DIR__ . "/../assets/uploads/" . $imageName);
    $relativePath = "/assets/uploads/" . $imageName;
    move_uploaded_file($image['tmp_name'], $fullPath);
    $sql="INSERT INTO posts (title, content, image, user_id, created_at) VALUES ('$title', '$content', '$relativePath', '$user_id', NOW())";
    $result=mysqli_query($conn,$sql);
    if($result){
        
        return true;
    } else {
        return false;
         
    }
    

}

function getBlogs(){
    $conn = $GLOBALS['conn'];
    $sql = "SELECT * FROM posts";
    $result = mysqli_query($conn, $sql);
    $blogs = mysqli_fetch_all($result, MYSQLI_ASSOC);

    if ($blogs === 0) {
         setMessage("No blogs found", 'danger');
         header("location: index.php?page=login");
         exit;
    } 

    return $blogs;

}

function getUserName($user_id){
    $conn = $GLOBALS['conn'];
    $sql = "SELECT name FROM users WHERE id = '$user_id'";
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) === 0) {
        return "Unknown User";
    } 
    
    $row = mysqli_fetch_assoc($result);
    return $row['name'];
}

function deleteBlog($id){
    $conn = $GLOBALS['conn'];
    
    $selectSql = "SELECT image FROM posts WHERE id = '$id'";
    $selectResult = mysqli_query($conn, $selectSql);
    $post = mysqli_fetch_assoc($selectResult);
    
    if ($post && !empty($post['image'])) {
        
        $fullPath = __DIR__ . "/.." . $post['image'];
        
        if (file_exists($fullPath)) {
            unlink($fullPath); 
        }
    }
    
    $deleteSql = "DELETE FROM posts WHERE id = '$id'";
    $deleteResult = mysqli_query($conn, $deleteSql);
    
    if ($deleteResult) {
        return true;
    } else {
        return false;
    }
}

function updateBlog($id, $title, $content, $image) {
    $conn = $GLOBALS['conn'];
    
    $selectSql = "SELECT image FROM posts WHERE id = '$id'";
    $selectResult = mysqli_query($conn, $selectSql);
    $post = mysqli_fetch_assoc($selectResult);

    if (!$post) {
        return false;
    }

    $imagePath = $post['image']; 

    if ($image && isset($image['name']) && !empty($image['name']) && $image['error'] === 0) {
        
        $oldFullPath = __DIR__ . "/.." . $post['image'];
        if (!empty($post['image']) && file_exists($oldFullPath) && is_file($oldFullPath)) {
            unlink($oldFullPath);
        }

        $imageName = time() . '_' . basename($image['name']);
        $fullPath  = __DIR__ . "/../assets/uploads/" . $imageName;
        $imagePath = "/assets/uploads/" . $imageName;
        
        move_uploaded_file($image['tmp_name'], $fullPath);
    }

    $editSql = "UPDATE posts SET title = '$title', content = '$content', image = '$imagePath' WHERE id = '$id'";
    
    return mysqli_query($conn, $editSql);
}

function contactData($name, $email,$phone, $message){


  $conn= $GLOBALS['conn'];
    
    $sql="INSERT INTO contact_us (name, email, phone, message) VALUES ('$name', '$email', '$phone', '$message')";
    $result=mysqli_query($conn,$sql);
    if($result){
        
        return true;
    } else {
        return false;
         
    }
    
}