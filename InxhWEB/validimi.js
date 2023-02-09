
document.querySelector(".contact").addEventListener("click",validateRegister);


function validateEmail(email) {
    var re = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    return re.test(String(email).toLowerCase());
}
function validateNumber(phone){
    var  regex=/^\+383\d{8}$/;
    return re.test(phone);
}

function validateRegister(){
    let fname = document.querySelector("#fname").value;
    let lname = document.querySelector("#lname").value;
    let email = document.querySelector("#email").value;
    let phone = document.querySelector("#phone").value;
    let subject = document.querySelector("#subject").value;
  
    let errorMessage = document.querySelector("#errorRegister");
    errorMessage.style.color = "red";

    if(fname.trim() == "" || fname == null){
        event.preventDefault();
        errorMessage.textContent = "Firstname cannot be null !";    
    }else if (lname.trim() == "" || lname == null){
        event.preventDefault();
        errorMessage.textContent = "Lastname cannot be null !";    
    }else if(!validateEmail(email)){
        event.preventDefault();
        errorMessage.textContent = "You must enter a valid email address !";
    }else if(!validateNumber(phone)){
        event.preventDefault();
        errorMessage.textContent = "You must enter a valid number !";
    }
}
