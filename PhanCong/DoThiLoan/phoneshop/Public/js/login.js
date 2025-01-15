var regexAccount = /^[a-zA-ZÀ-ỹ0-9\-\_\.]{2,}$/;
var regexPassword =
    /^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{6,}$/;

// Input
var account = document.getElementById("account");
var password = document.getElementById("password");
var form = document.getElementById("form");

//Error
var msgErrorAccount = document.getElementById("msgErrorAccount");
var msgErrorPassword = document.getElementById("msgErrorPassword");

function CheckAccount() {
    if (account.value.trim() === "") {
        account.style.borderColor = "#ff0000";
        msgErrorAccount.innerText = "Vui lòng nhập tên tài khoản";
        msgErrorAccount.style.display = "inline-block";
        return false;
    } else if (!regexAccount.test(account.value.trim())) {
        account.style.borderColor = "#ff0000";
        msgErrorAccount.innerText =
            "Tên tài khoản không hợp lệ (Vui lòng nhập tối thiểu hai ký tự, không có khoảng trắng và ký tự đặc biệt chỉ bao gồm: (-) (.) (_))";
        msgErrorAccount.style.display = "inline-block";
        return false;
    } else {
        account.style.borderColor = "#ccc";
        msgErrorAccount.style.display = "none";
        return true;
    }
}

function CheckPassword() {
    if (password.value.trim() === "") {
        password.style.borderColor = "#ff0000";
        msgErrorPassword.innerText = "Vui lòng nhập mật khẩu";
        msgErrorPassword.style.display = "inline-block";
        return false;
    } else if (!regexPassword.test(password.value.trim())) {
        password.style.borderColor = "#ff0000";
        msgErrorPassword.innerText =
            "Mật khẩu không hợp lệ (Vui lòng nhập tối thiểu sáu ký tự, bao gồm ít nhất một ký tự viết hoa, một ký tự viết thường, một chữ số và một ký tự đặc biệt)";
        msgErrorPassword.style.display = "inline-block";
        return false;
    } else {
        password.style.borderColor = "#ccc";
        msgErrorPassword.style.display = "none";
        return true;
    }
}

account.onblur = function () {
    CheckAccount();
};

password.onblur = function () {
    CheckPassword();
};

form.onsubmit = function () {
    CheckAccount();
    CheckPassword();

    if (CheckAccount() && CheckPassword()) {
        return true;
    } else {
        return false;
    }
};


//Toast
function toast({ title = "", msg = "", type = "success", duration = 3000 }) {
    var main = document.getElementById("toast");
    if (main) {
        var toast = document.createElement("div");

        //Auto remove toast
        var autoRemoveToastID = setTimeout(function () {
            main.removeChild(toast);
        }, duration + 1000);

        //Remove toast when click
        toast.onclick = function (e) {
            if (e.target.closest(".toast__close")) {
                main.removeChild(toast);
                clearTimeout(autoRemoveToastID);
            }
        };

        toast.classList.add("toast", `toast-${type}`);
        var delayTime = (duration / 1000).toFixed(2);
        toast.style.animation = `slideInLeft ease 0.5s, fadeOut linear 1s ${delayTime}s forwards`;
        toast.innerHTML = `
            <div class="toast__icon">
                <img src="./assets/icon/${type}-icon.svg"/>
            </div>
            <div class="toast__body">
                <h3 class="toast__title">${title}</h3>
                <p class="toast__msg">${msg}</p>
            </div>
            <div class="toast__close">
                <img src="./assets/icon/close-toast.svg"/>
            </div>`;
        main.appendChild(toast);
    }
}
var statusServer = document.getElementById("statusServer");
window.onload = function () {
    if (String(statusServer.value) === 'signUpSuccess') {
        toast({ title: "Sign Up Success", msg: "Sign up successfully at Cyber", type: "userSuccess", duration: 8000 });
    }
};

