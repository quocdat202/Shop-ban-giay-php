function kiemtra() {
    if (document.getElementById('cart-input-info1').value == "") {
        document.getElementById('note-text').innerText = "Vui lòng nhập họ tên người nhận";
        document.getElementById('note-text').style.color = "red";
        document.getElementById('cart-input-info1').focus();
        return false;
    }

    else if (document.getElementById('cart-input-info2').value == "") {
        document.getElementById('note-text').innerText = "Vui lòng điền email";
        document.getElementById('note-text').style.color = "red";
        document.getElementById('cart-input-info2').focus();
        return false;
    }

    else if (document.getElementById('cart-input-info3').value == "") {
        document.getElementById('note-text').innerText = "Vui lòng nhập đầy đủ số điện thoại";
        document.getElementById('note-text').style.color = "red";
        document.getElementById('cart-input-info3').focus();
        return false;
    }

    else if (document.getElementById('cart-input-info4').value == "") {
        document.getElementById('note-text').innerText = "Vui lòng nhập đầy đủ địa chỉ";
        document.getElementById('note-text').style.color = "red";
        document.getElementById('cart-input-info4').focus();
        return false;
    }
    return true;

}
