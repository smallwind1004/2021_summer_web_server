<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>報修系統</title>
</head>


<body>
    <!------------------------------ NavBar ------------------------------>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="index2.php">曉風報修</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index2.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="schedule_page.php">schedule</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="link.php">Multiplication table</a>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#loginModal">
                            Login
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!------------------------------ Container ------------------------------>
    <div class="container">
        <div class="mx-auto" style="width: 50%;">
            <img class="rounded-circle" style="width: 100%;" src="img\home_icon.jpg" alt="">
        </div>
    </div>

    <!------------------------------ Footer ------------------------------>
    <footer class="text-center text-white fixed-bottom" style="background-color: rgb(127, 127, 127);">
        <div class="container p-4 pb-0">
            <!-- Section: Social media -->
            <section class="mb-4">
                <!-- Facebook -->
                <a class="btn btn-primary btn-floating m-1" role="button" style="background-color: rgb(59, 89, 152);" href="https://www.facebook.com/SmallwindGG">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                    </svg>
                    <!-- <i class="fab fa-facebook-f"></i> -->
                </a>
                <!-- Google -->
                <a class="btn btn-primary btn-floating m-1" role="button" style="background-color: rgb(221, 75, 57);" href="mailto: o20392o@gmail.com">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-google" viewBox="0 0 16 16">
                        <path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z" />
                    </svg>
                </a>

                <!-- Instagram -->
                <a class="btn btn-primary btn-floating m-1" role="button" style="background-color: rgb(172, 43, 172);" href="#!">
                    <i class="bi bi-instagram"></i>
                </a>

                <!-- Linkedin -->
                <a class="btn btn-primary btn-floating m-1" role="button" style="background-color: rgb(0, 130, 202);" href="#!">
                    <i class="bi bi-linkedin"></i>
                </a>
                <!-- Github -->
                <a class="btn btn-primary btn-floating m-1" role="button" style="background-color: rgb(51, 51, 51);" href="#!">
                    <i class="bi bi-github"></i>
                </a>
            </section>
            <!-- Section: Social media -->
        </div>

        <div class="text-center p-2" style="background-color: rgba(0, 0, 0, 0.2);">
            <i class="bi bi-facebook"></i>
            <b>Powered by 曉風</b> @ 2021<br>
            <a class="text-white" href="#">email : o20392o@gmail.com</a>
        </div>

    </footer>

    <!------------------------------ Modal ------------------------------>
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header border-bottom-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <h2>登入與註冊</h2>
                        <br>
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#sign_in">登入</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#sign_up">註冊</a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div id="sign_in" class="container tab-pane active"><br>
                                <h3>登入</h3>
                                <div class="d-flex flex-column text-center">
                                    <form action="loginCheck.php" method="POST">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email address</label>
                                            <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Password</label>
                                            <input type="password" class="form-control" name="passwd" placeholder="Password">
                                        </div>
                                        <div class="btn-group">
                                            <input type="submit" class="btn btn-primary" value="登入">
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div id="sign_up" class="container tab-pane fade"><br>
                                <h3>註冊</h3>
                                <div class="d-flex flex-column text-center">
                                    <form onsubmit="return sign_up_check()" action="loginCheck.php" method="POST">
                                        <!-- 要改 -->
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">User name</label>
                                            <input type="text" class="form-control" name="username" aria-describedby="nameHelp" placeholder="Enter username">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email address</label>
                                            <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Password</label>
                                            <input type="password" class="form-control" name="passwd" placeholder="Password">
                                            <label for="emailRule">
                                                密碼規則<br>1.密碼長度為8~16個字元<br>2.至少要有一個大寫、一個小寫、一個數字以及一個特殊符號
                                            </label>
                                        </div>
                                        <div class="btn-group">
                                            <input type="submit" class="btn btn-primary" value="註冊">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/a8df694a4c.js" crossorigin="anonymous"></script>

</html>