var first = true;
var obj = document.getElementById("el");
function edittext() {
    if(first == true) {
        obj.innerHTML = "สวัสดี";
    first = false;
    }
    else{
        obj.innerHTML = "ค๊าบ";
    first = true;
    }
    
}
setInterval(edittext,500);