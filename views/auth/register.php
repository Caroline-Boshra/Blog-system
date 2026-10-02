<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <p>Registration Form</p>
                        <div class="my-5">
                           
                            <form  action="index.php?page=sign-up&action=register" method="POST">
                                <div class="form-floating">
                                    <input class="form-control" id="name" name="name" type="text" placeholder="Enter your name..."  />
                                    <label for="name">Name</label>
                                </div>
                                <div class="form-floating">
                                    <input class="form-control" id="email" name="email" type="email" placeholder="Enter your email..." />
                                    <label for="email">Email address</label>
                                </div>
                                <div class="form-floating">
                                    <input class="form-control" id="phone" name="phone" type="tel" placeholder="Enter your phone number..."  />
                                    <label for="phone">Phone Number</label>
                                </div>
                                <div class="form-floating">
                                    <input class="form-control" id="password" name="password" type="password" placeholder="Enter your password..."  />
                                    <label for="password">Password</label>
                                </div>
                                                                <!-- Submit Button-->
                                <button class="btn btn-primary text-uppercase "  type="submit">Send</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
</body>
</html>