<?php
$id = $_GET['id'] ?? $_POST['id'] ?? null;
$conn = $GLOBALS['conn'];
$sql = "SELECT * FROM posts WHERE id = '$id'";
$result = mysqli_query($conn, $sql);
$post = mysqli_fetch_assoc($result);
?>
        <!-- Main Content-->
        <main class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <h1 class="mb-4">update Blog Post</h1>
                        <div class="my-5">
                            
                         <form action="index.php?page=update_blog&action=edit" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?= $post['id'] ?? '' ?>">
                            
                            <div class="form-floating mb-3">
                                <input class="form-control" name="title" type="text" value="<?= $post['title'] ?? '' ?>" placeholder="Enter title here..." required />
                                <label for="title">Title</label>
                            </div>
                            
                            <div class="form-floating mb-3">
                                <textarea class="form-control" name="content" placeholder="Enter your content here..." style="height: 12rem" required><?= $post['content'] ?? '' ?></textarea>
                                <label for="content">Content</label>
                            </div>

                            <?php if (!empty($post['image'])): ?>
                                <div class="mb-3">
                                    <label class="form-label d-block">Current Image:</label>
                                    <img src=".<?= $post['image'] ?>" alt="Post Image" style="max-width: 150px; height: auto;" class="img-thumbnail">
                                </div>
                            <?php endif; ?>

                            <div class="form-floating mb-3">
                                <input class="form-control" name="image" type="file" />
                                <label for="image">Change Image (Optional)</label>
                            </div>

                            <button class="btn btn-primary text-uppercase" id="submitButton" type="submit">Update</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- Footer-->

