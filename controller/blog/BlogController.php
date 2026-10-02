<?php


if($_SERVER['REQUEST_METHOD'] !== "POST"){
    setMessage("Method not allowed",'danger');
        header("location: index.php?page=create_blog");
        exit;
}
   $action = $_GET['action'] ;
    if($action === 'store'){
        
        store($title, $content, $image);
        
    }elseif($action === 'delete'){
        $id = $_POST['id'];
        delete($id);
    }
    elseif($action === 'edit'){
        $id = $_POST['id'];
        update($id, $title, $content, $image);
    }

function store($title, $content, $image){
     $title = trim(htmlspecialchars(htmlentities($_POST['title'])));
    $content = trim(htmlspecialchars(htmlentities($_POST['content'])));
    $image = $_FILES['image'];        $user_id = $_SESSION['user_id'];
    $errors = createBlogValidate($title, $content, $image);

    if(! empty($errors)){
        setMessage($errors,'danger');
        header("location: index.php?page=create_blog");
        exit;
    }
    if(createBlog($title, $content, $image, $user_id)){
        setMessage("Blog post created successfully!", 'success');
        header("location: index.php?page=home");
        exit;
    }else{
        setMessage("Error occurred while creating blog post.", 'danger');
        header("location: index.php?page=create_blog");
        exit;
    }
}

function delete($id){
         
        if(deleteBlog($id)){
            setMessage("Blog post deleted successfully!", 'success');
            header("location: index.php?page=home");
            exit;
        }else{
            setMessage("Error occurred while deleting blog post.", 'danger');
            header("location: index.php?page=home");
            exit;
        }
}

function update($id, $title, $content, $image){

    $id      = isset($_POST['id']) ? trim($_POST['id']) : '';
    $title   = isset($_POST['title']) ? trim(htmlspecialchars(htmlentities($_POST['title']))) : '';
    $content = isset($_POST['content']) ? trim(htmlspecialchars(htmlentities($_POST['content']))) : '';
    $image   = isset($_FILES['image']) ? $_FILES['image'] : null;

    $errors = updateBlogValidate($id, $title, $content, $image);

    if (!empty($errors)) {
        setMessage($errors, 'danger');
        header("location: index.php?page=editblog&id=$id");
        exit;
    }

    if (updateBlog($id, $title, $content, $image)) {
        setMessage("Blog post updated successfully!", 'success');
        header("location: index.php?page=home");
        exit;
    } else {
        setMessage("Error occurred while updating blog post.", 'danger');
        header("location: index.php?page=editblog&id=$id");
        exit;
    }
}
