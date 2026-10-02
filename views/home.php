<?php $blogs = getBlogs(); ?>
   
        <!-- Main Content-->
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <!-- Post preview-->
                     <?php foreach($blogs as $blog):?>
                    <div class="post-preview">
                        <div style="display: flex;gap: 10px; align-items: center; ">
                            <img src="<?= "http://{$_SERVER['HTTP_HOST']}" . dirname($_SERVER['PHP_SELF']) . $blog['image'] ?>" alt="Blog Image" style="width: 200px; height: 100px;">
                        </div>
                        <h2 class="post-title"><?= $blog['title'] ?></h2>
                        <h3 class="post-subtitle"><?= $blog['content'] ?></h3>
                        <p class="post-meta">
                            Posted by : <?= getUserName($blog['user_id']) ?>
                            <br>
                            <!-- <a href="#!">Start Bootstrap</a> -->
                            posted on : <?= $blog['created_at'] ?>
                           
                        </p> 
                        <?php if(isset($_SESSION['user_id']) && $_SESSION['user_id'] === $blog['user_id']): ?>
                        <div style="display: flex; gap: 10px;">
                         <form action="index.php?page=destroy_blog&action=delete" method="POST" style="display: inline;">
                                <input type="hidden" name="id" value="<?= $blog['id'] ?>">
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                            
                            <form action="index.php?page=editblog" method="POST" style="display: inline;">
                                <input type="hidden" name="id" value="<?= $blog['id'] ?>">
                                <button type="submit" class="btn btn-warning btn-sm"> Edit </button>
                            </form>
                        </div>
                        <?php endif; ?>
                    </div>
                    <?php endforeach;?>
                    <!-- Divider-->
                
                    <!-- Pager-->
                </div>
            </div>
        </div>
        <!-- Footer-->

