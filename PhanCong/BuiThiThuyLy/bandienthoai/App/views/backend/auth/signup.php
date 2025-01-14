
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0" />
    <title>Sign up | Cyber</title>
    <!--Reset CSS-->
    <link rel="stylesheet" href="./assets/css/reset.css" />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer" />
    <!-- Font Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link
        rel="preconnect"
        href="https://fonts.gstatic.com"
        crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="/css/signup.css" />
</head>
<body>
    <form id="form" action="/admin/signup" method="post" autocomplete="off" >
        <div class="sign-up">
            <div class="content">
                <h1 class="heading">Sign up for an account</h1>
                <div class="form-item">
                    <label for="nameUser">Name</label>
                    <div class="form-item__body">
                        <div class="form-input">
                            <input
                                type="text"
                                name="nameUser"
                                id="nameUser"
                                placeholder="Enter name"
                                 />
                        </div>
                        <span
                            class="form-message"
                            id="msgErrorNameUser"
                            ></span>
                    </div>
                </div>
                <div class="form-item">
                    <label for="phoneNumber">Phone number</label>
                    <div class="form-item__body">
                        <div class="form-input">
                            <input
                                type="text"
                                name="phoneNumber"
                                id="phoneNumber"
                                placeholder="Enter phone number"
                                 />
                        </div>
                        <span
                            class="form-message"
                            id="msgErrorPhoneNumber"
                            ></span>
                    </div>
                </div>
                <div class="form-item">
                    <label for="address">Address</label>
                    <div class="form-item__body">
                        <div class="form-input">
                            <input
                                type="text"
                                name="address"
                                id="address"
                                placeholder="Enter address"
                                 />
                        </div>
                        <span
                            class="form-message"
                            id="msgErrorAddress"
                            ></span>
                    </div>
                </div>
                <div class="form-item">
                    <label for="sex">Sex</label>
                    <div class="form-item__body">
                        <div class="form-input">
                            <div class="radio-item">
                                <input
                                    type="radio"
                                    name="sex"
                                    value="male"
                                    id="male"
                                     />
                                <label for="male">Male</label>
                            </div>
                            <div class="radio-item">
                                <input
                                    type="radio"
                                    name="sex"
                                    value="female"
                                    id="female"
                                     />
                                <label for="female">Female</label>
                            </div>
                        </div>
                        <span
                            class="form-message"
                            id="msgErrorSex"
                            ></span>
                    </div>
                </div>
                <div class="form-item">
                    <label for="dateOfBirth">Date of birth</label>
                    <div class="form-item__body">
                        <div class="form-input">
                            <input
                                type="date"
                                name="dateOfBirth"
                                id="dateOfBirth"
                                 />
                        </div>
                        <span
                            class="form-message"
                            id="msgErrorDateOfBirth"
                            ></span>
                    </div>
                </div>
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
                        <span
                            class="form-message"
                            id="msgErrorAccount"
                            ></span>
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
                                 />
                        </div>
                        <span
                            class="form-message"
                            id="msgErrorPassword"
                            ></span>
                    </div>
                </div>
                <div class="form-item">
                    <label for="reEnterPassword">
                        Re-enter password</label>
                    <div class="form-item__body">
                        <div class="form-input">
                            <input
                                type="password"
                                name="reEnterPassword"
                                id="reEnterPassword"
                                placeholder="Re-enter password"
                                 />
                        </div>
                        <span
                            class="form-message"
                            id="msgErrorReEnterPassword"
                            ></span>
                    </div>
                </div>
                <div class="form-submit">
                    <button
                        type="submit"
                        class="btn-sign-up"
                        id="submitBtn">
                        Sign up
                    </button>
                </div>

                <div class="login">
                    <span>Have an account?</span>
                    <a href="/admin/login">Login</a>
                </div>
            </div>
        </div>
    </form>
    <!-- <script src="/js/signup.js"></script> -->
     
</body>
</html>
</html>
