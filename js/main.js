
var modal = document.querySelectorAll(".login_modal")[0];

var login_btn = document.querySelector("#logInbtn");

var close_btn = document.querySelectorAll(".close")[0];

// Login Screen appears

login_btn.addEventListener("click", function(){
    
    modal.style.display = "block";
    
});


// When the user clicks on <span> (x), close the modal
close_btn.addEventListener("click",function(){
    
    modal.style.display = "none";
    
    
});


// When the user clicks anywhere outside of the modal, close it
    
window.addEventListener("click", function(){
    
    if (event.target == modal) {
        modal.style.display = "none";
    }
    
});






var signup_modal = document.querySelectorAll(".signup_modal")[0];

var signup_btn = document.querySelector("#signUp");

var close_btn1 = document.querySelectorAll(".close1")[0];

// Sign Up Screen appears

signup_btn.addEventListener("click", function(){
    
    signup_modal.style.display = "block";
    
});


// When the user clicks on <span> (x), close the modal
close_btn1.addEventListener("click",function(){
    
    signup_modal.style.display = "none";
    
    
});


// When the user clicks anywhere outside of the modal, close it
    
window.addEventListener("click", function(){
    
    if (event.target == signup_modal) {
        signup_modal.style.display = "none";
    }
    
});