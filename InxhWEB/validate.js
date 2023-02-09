
document.querySelector(".register").addEventListener("click",validateRegister);


function validateEmail(email) {
    var re = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    return re.test(String(email).toLowerCase());
}

function validateRegister(){
    let username = document.querySelector("#username").value;
    let email = document.querySelector("#email").value;
    let password = document.querySelector("#pass").value;
    let errorMessage = document.querySelector("#errorRegister");
    errorMessage.style.color = "red";

    if(username.trim() == "" || username == null){
        event.preventDefault();
        errorMessage.textContent = "Firstname cannot be null !";    
    }else if(!validateEmail(email)){
        event.preventDefault();
        errorMessage.textContent = "You must enter a valid email address !";
    }else if(password.trim() == "" || password == null){
        event.preventDefault();
        errorMessage.textContent = "Password cannot be null !";
    }else if(password.length < 6){
        event.preventDefault();
        errorMessage.textContent = "Password should be minimum 6 characters !";
    }
}

