function sum() {
    var soa = Number(document.getElementById("soa").value);
    var sob = Number(document.getElementById("sob").value);
    if (soa === '' || sob === '') {
        alert("Hãy nhập số để tính")
    }
    else {
        var sum = parseInt(soa + sob);
        document.querySelector('#kq').innerHTML = sum

    }

}