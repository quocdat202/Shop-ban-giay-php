var pass, repass, phone, regname;
function check_register() {
    pass = document.getElementById('reg-password');
    repass = document.getElementById('reg-repassword');
    phone = document.getElementById('reg-phone').value;
    regname = document.getElementById('reg-name').value;
    fullname = document.getElementById('reg-fullname').value;
    address = document.getElementById('reg-address').value;
    mail = document.getElementById('reg-mail').value;
    if (fullname == "") {
        document.getElementById('note').innerText = "Vui lòng nhập đầy đủ họ và tên";
        document.getElementById('note').style.color = "red";
        document.getElementById('reg-fullname').focus();
        return false;
    }
    else if (regname == "" || regname.length < 4) {
        document.getElementById('note').innerText = "Tên đang nhập phải dài hơn 4 kí tự";
        document.getElementById('note').style.color = "red";
        document.getElementById('reg-name').focus();
        return false;
    }
    else if (address == "") {
        document.getElementById('note').innerText = "Vui lòng điền đầy đủ địa chỉ cư trú";
        document.getElementById('note').style.color = "red";
        document.getElementById('reg-address').focus();
        return false;
    }
    else if (pass.value.length < 6) {
        document.getElementById('note').innerText = "Mật khẩu phải dài hơn 6 kí tự";
        document.getElementById('note').style.color = "red";
        pass.focus();
        return false;
    }
    else if (mail == "") {
        document.getElementById('note').innerText = "Vui lòng điền đầy đủ địa chỉ Gmail";
        document.getElementById('note').style.color = "red";
        document.getElementById('reg-mail').focus();
        return false;
    }
    else if (pass.value != repass.value) {
        document.getElementById('note').innerText = "Mật khẩu không khớp";
        document.getElementById('note').style.color = "red";
        repass.focus();
        pass.focus();
        return false;
    }
    else if (phone[0] != 0 || phone.length < 4) {
        document.getElementById('note').innerText = "Số điện thoại không hợp lệ";
        document.getElementById('note').style.color = "red";
        document.getElementById('reg-phone').focus();
        return false;
    }
    return true;
}