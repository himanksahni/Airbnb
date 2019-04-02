
var modal = document.querySelectorAll(".book_modal")[0];

var login_btn = document.querySelector("#bookBtn");

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

