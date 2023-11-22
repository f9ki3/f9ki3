

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>f9ki3</title>
    <link rel="icon" href="../assets/img/linux.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link rel="stylesheet" href="../assets/css/color_palette.css">
    <script src="../assets/js/login.js"></script>
</head>
<body class="body">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4"></div>
            <div class="col-12 col-md-4 ">
                    <form action="" id="loginForm">
                        <div class="container py-5 d-flex flex-column align-items-center justify-content-center">
                            <div class="container d-flex flex-column align-items-center justify-content-center">
                                <img src="../assets/img/admin.gif" style="width: 25%" alt="">
                                <p class="text-light" style="font-size: 30px">Sign in Admin</p>
                            </div>
                            <div class="border border-secondary w-100 rounded py-3 pb-3 px-4" style="background-color: rgb(33, 13, 51)">
                                <label for="" class="text-light">Username</label>
                                <input type="text" class="form-control w-100 mt-2" placeholder="Username" id="username" name="username" required>
                                <label for="" class="text-light">Password</label>
                                <input type="password" class="form-control w-100 mt-2" placeholder="Password" id="password" name="password" required>
                                <button id="loginButton" class="btn w-100 mt-3" onclick="login()" style="background-color: green; color: white">LOGIN</button>
                                <div id="response" class="mt-3"></div>

                                <p id="response"></p>
                            </div>
                            <div class="border mt-3 border-secondary w-100 rounded pt-2" style="background-color: rgb(33, 13, 51)">
                                <p class="text-light text-center" style="font-size: 12px">Proceed to the website click here <a href="../app"> f9ki3</a></p>
                            </div>
                            
                        </div>
                    </form>

                </div>
            <div class="col-12 col-md-4"></div>
        </div>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>