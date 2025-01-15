

var regexNameUser = /^[a-zA-ZÀ-ỹ\s]{2,}$/;
var regexPhoneNumber = /^((\+\d{0,3})|0){1}\d{9}$/;
var regexAddress = /^[a-zA-ZÀ-ỹ0-9\,\-\s]{2,}$/;
var regexAccount = /^[a-zA-ZÀ-ỹ0-9\-\_\.]{2,}$/;
var regexPassword = /^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{6,}$/;

//(?=.* [A - Za - z]): Đảm bảo mật khẩu chứa ít nhất một chữ cái(A - Z hoặc a - z).
//(?=.*\d): Đảm bảo mật khẩu chứa ít nhất một chữ số(0 - 9).
//(?=.* [@$! %*# ?&]): Đảm bảo mật khẩu chứa ít nhất một ký tự đặc biệt trong nhóm @$!%*# ?&.
//[A - Za - z\d @$!%*# ?&]{ 6,}: Sau khi đảm bảo các điều kiện trên, mật khẩu phải có ít nhất 6 ký tự,
//bao gồm chỉ chữ cái, số và các ký tự đặc biệt đã được định nghĩa.

//Input
var nameUser = document.getElementById("nameUser");
var phoneNumber = document.getElementById("phoneNumber");
var address = document.getElementById("address");
var sexMale = document.getElementById("male");
var sexFemale = document.getElementById("female");
var dateOfBirth = document.getElementById("dateOfBirth");
var account = document.getElementById("account");
var password = document.getElementById("password");
var reEnterPassword = document.getElementById("reEnterPassword");
var submitBtn = document.getElementById("submitBtn");
var form = document.getElementById("form");

//Error
var msgErrorName = document.getElementById("msgErrorNameUser");
var msgErrorPhoneNumber = document.getElementById("msgErrorPhoneNumber");
var msgErrorAddress = document.getElementById("msgErrorAddress");
var msgErrorSex = document.getElementById("msgErrorSex");
var msgErrorDateOfBirth = document.getElementById("msgErrorDateOfBirth");
var msgErrorAccount = document.getElementById("msgErrorAccount");
var msgErrorPassword = document.getElementById("msgErrorPassword");
var msgErrorReEnterPassword = document.getElementById(
    "msgErrorReEnterPassword"
);

function CheckNameUser() {
    if (nameUser.value.trim() === "") {
        nameUser.style.borderColor = "#ff0000";
        msgErrorName.innerText = "Vui lòng nhập họ tên";
        msgErrorName.style.display = "inline-block";
        return false;
    } else if (!regexNameUser.test(nameUser.value.trim())) {
        nameUser.style.borderColor = "#ff0000";
        msgErrorName.innerText =
            "Họ tên không hợp lệ (Vui lòng nhập tối thiểu hai ký tự, không chứa chữ số và ký tự đặc biệt)";
        msgErrorName.style.display = "inline-block";
        return false;
    } else {
        nameUser.style.borderColor = "#ccc";
        msgErrorName.style.display = "none";
        return true;
    }
}

function CheckPhoneNumber() {
    if (phoneNumber.value.trim() === "") {
        phoneNumber.style.borderColor = "#ff0000";
        msgErrorPhoneNumber.innerText = "Vui lòng nhập số điện thoại";
        msgErrorPhoneNumber.style.display = "inline-block";
        return false;
    } else if (!regexPhoneNumber.test(phoneNumber.value.trim())) {
        phoneNumber.style.borderColor = "#ff0000";
        msgErrorPhoneNumber.innerText =
            "Số điện thoại không hợp lệ (Vui lòng nhập đúng định dạng, bắt đầu bằng +84 cho số quốc tế (ví dụ: +84334681298) hoặc bắt đầu bằng 0 cho số nội địa (ví dụ: 0334681298))";
        msgErrorPhoneNumber.style.display = "inline-block";
        return false;
    } else {
        phoneNumber.style.borderColor = "#ccc";
        msgErrorPhoneNumber.style.display = "none";
        return true;
    }
}

function CheckAddress() {
    if (address.value.trim() === "") {
        address.style.borderColor = "#ff0000";
        msgErrorAddress.innerText = "Vui lòng nhập địa chỉ";
        msgErrorAddress.style.display = "inline-block";
        return false;
    } else if (!regexAddress.test(address.value.trim())) {
        address.style.borderColor = "#ff0000";
        msgErrorAddress.innerText =
            "Địa chỉ không hợp lệ (Vui lòng nhập tối thiểu hai ký tự, ký tự đặc biệt chỉ bao gồm: (-) (,))";
        msgErrorAddress.style.display = "inline-block";
        return false;
    } else {
        address.style.borderColor = "#ccc";
        msgErrorAddress.style.display = "none";
        return true;
    }
    // return regexAddress.test(address.value.trim());
}

function CheckSex() {
    if (!(sexMale.checked || sexFemale.checked)) {
        msgErrorSex.innerText = "Vui lòng chọn giới tính";
        msgErrorSex.style.display = "inline-block";
        return false;
    } else {
        msgErrorSex.style.display = "none";
        return true;
    }
}

function CheckDate(day, month, year) {
    var date = new Date();
    var currentYear = +date.getFullYear();
    var currentMonth = +date.getMonth() + 1;
    var currentDay = +date.getDate();

    if (year > currentYear) {
        return false;
    } else if (year == currentYear) {
        if (month > currentMonth) {
            return false;
        } else if (month == currentMonth) {
            if (day > currentDay) {
                return false;
            } else {
                return true;
            }
        } else {
            return true;
        }
    } else {
        return true;
    }
}

function CheckDateOfBirth() {
    var arrDate = dateOfBirth.value.split("-");
    var day = +arrDate[2];
    var month = +arrDate[1];
    var year = +arrDate[0];
    if (dateOfBirth.value.trim() === "") {
        dateOfBirth.style.borderColor = "#ff0000";
        msgErrorDateOfBirth.innerText = "Vui lòng chọn ngày sinh";
        msgErrorDateOfBirth.style.display = "inline-block";
        return false;
    } else if (!CheckDate(day, month, year)) {
        dateOfBirth.style.borderColor = "#ff0000";
        msgErrorDateOfBirth.innerText =
            "Ngày sinh không hợp lệ (Vui lòng chọn ngày sinh trong quá khứ hoặc ngày hiện tại)";
        msgErrorDateOfBirth.style.display = "inline-block";
        return false;
    } else {
        dateOfBirth.style.borderColor = "#ccc";
        msgErrorDateOfBirth.style.display = "none";
        return true;
    }
}

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

function CheckReEnterPassword() {
    if (reEnterPassword.value.trim() === "") {
        reEnterPassword.style.borderColor = "#ff0000";
        msgErrorReEnterPassword.innerText = "Vui lòng nhập lại mật khẩu";
        msgErrorReEnterPassword.style.display = "inline-block";
        return false;
    } else if (!password.value.trim() === reEnterPassword.value.trim()) {
        reEnterPassword.style.borderColor = "#ff0000";
        msgErrorReEnterPassword.innerText =
            "Mật khẩu nhập lại không hợp lệ (Vui lòng kiểm tra và nhập lại mật khẩu)";
        msgErrorReEnterPassword.style.display = "inline-block";
        return false;
    } else {
        reEnterPassword.style.borderColor = "#ccc";
        msgErrorReEnterPassword.style.display = "none";
        return true;
    }
}

nameUser.onblur = function () {
    CheckNameUser();
};

phoneNumber.onblur = function () {
    CheckPhoneNumber();
};

address.onblur = function () {
    CheckAddress();
};

if (sexMale.checked || sexFemale.checked) {
    msgErrorSex.style.display = "none";
}

dateOfBirth.onblur = function () {
    CheckDateOfBirth();
};

account.onblur = function () {
    CheckAccount();
};

password.onblur = function () {
    CheckPassword();
};

reEnterPassword.onblur = function () {
    CheckReEnterPassword();
};

form.onsubmit = function () {
    CheckNameUser();
    CheckPhoneNumber();
    CheckAddress();
    CheckSex();
    CheckDateOfBirth();
    CheckAccount();
    CheckPassword();
    CheckReEnterPassword();

    if (
        CheckNameUser() &&
        CheckPhoneNumber() &&
        CheckAddress(address.value.trim()) &&
        CheckSex() &&
        CheckDateOfBirth() &&
        CheckAccount() &&
        CheckPassword() &&
        CheckReEnterPassword()
    ) {
        return true;
    } else {
        return false;
    }
};
