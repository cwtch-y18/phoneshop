
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login | Cyber</title>
    <!-- <link rel="stylesheet" href="./assets/css/reset.css" /> -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer" />
    <!-- Font Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="/css/login.css" />
</head>
<body>
    <div id="toast"></div>
    <input type="hidden" id="statusServer" runat="server" />
    <form id="form" action="" method="post" autocomplete="off" runat="server">
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
                                runat="server" />
                        </div>
                        <span class="form-message" id="msgErrorAccount"
                            runat="server"></span>
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
                                placeholder="Enter password"
                                runat="server" />
                        </div>
                        <span class="form-message" id="msgErrorPassword"
                            runat="server"></span>
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
    </form>

    <script src="/js/login.js"></script>
</body>
</html>
