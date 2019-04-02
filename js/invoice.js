var fee = document.querySelector("#fee");
var tax = document.querySelector("#tax");
var acf = document.querySelector("#ac");
var total = document.querySelector("#total");
var to = document.querySelector("#to");
var guests = parseInt(document.querySelector("#guests").innerHTML);


window.onload = function() {
    
    var feeI = parseFloat(fee.innerHTML);
    console.log(feeI);
    feeI= feeI * guests;
    console.log(feeI);
    to.innerHTML = feeI;
    
    tax.innerHTML = (0.13 * feeI).toFixed(2);
    acf.innerHTML = (feeI/3).toFixed(2);
    
    var taxI=parseFloat(tax.innerHTML);
    var acfI = parseFloat(acf.innerHTML);
    total.innerHTML = (feeI + taxI+ acfI).toFixed(2);
    
    
    
    
}