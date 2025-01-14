<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login | Cyber</title>
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/css/login.css" />
</head>

<body>
    <div id="toast"></div>
    <form id="form" action="/admin/login" method="post" autocomplete="off">
        <div class="login">
            <div class="content">
                <h1 class="heading">Login Account</h1>

                <div class="form-item">
                    <label for="account">Account</label>
                    <div class="form-item__body">
                        <div class="form-input">
                            <input
                                type="text"
                                name="account"
                                id="account"
                                placeholder="Enter account"
                                />
                        </div>
                    </div>
                </div>
                <div class="form-item">
                    <label for="password">Password</label>
                    <div class="form-item__body">
                        <div class="form-input">
                            <input
                                type="password"
                                name="password"
                                id="password"
                                placeholder="Enter password" />
                        </div>
                    </div>
                </div>
               

                <div class="form-submit">
                    <button type="submit" class="btn-login" id="submitBtn">
                        Login
                    </button>
                </div>
                

                <div class="sign-up">
                    <span>Don't have an account?</span>
                    <a href="/admin/signup">Sign up</a>
                </div>
            </div>
        </div>
        <!-- <script src="/js/login.js"></script> -->
    </form>
</body>
</html>
