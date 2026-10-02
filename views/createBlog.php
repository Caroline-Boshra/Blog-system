
        <!-- Main Content-->
        <main class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <h1 class="mb-4">Create Blog Post</h1>
                        <div class="my-5">
                            
                            <form  action="index.php?page=add_blog&action=store" method="POST" enctype="multipart/form-data">
                                
                                <div class="form-floating">
                                    <input class="form-control" name="title" type="text" placeholder="Enter title here..." data-sb-validations="required" />
                                    <label for="title">Title</label>
                                </div>
                                <div class="form-floating">
                                    <textarea class="form-control" name="content" placeholder="Enter your content here..." style="height: 12rem" ></textarea>
                                    <label for="content">Content</label>
                                </div>
                                 <div class="form-floating">
                                    <input class="form-control" name="image" type="file" placeholder="Upload image..." />
                                    <label for="image">Image</label>
                                </div>
                                <!-- Submit Button-->
                                <button class="btn btn-primary text-uppercase " id="submitButton" type="submit">Send</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- Footer-->

