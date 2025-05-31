function calculeTotal(){ 
    let money = document.getElementById("amountMoney").value;
    let amountProduct = document.getElementById("amountProduct").value;
    let product = document.getElementById("product").value;
    let total = money * amountProduct;
    document.getElementById("total").innerHTML = "The total I spend per " + product + " is " + total + "$";
}
