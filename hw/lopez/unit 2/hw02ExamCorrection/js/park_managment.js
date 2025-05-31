document.getElementById("search").addEventListener("click", function(){
let formData = new FormData();
formData.append("value", document.getElementById("search_park").value);

fetch("php/find_data.php", {
    method: "POST",
    body: formData
})
.then(response => response.json())
.then(data => {
    console.log("Data received:", data);
    document.getElementById("park_table").innerHTML = data;
})
.catch(error => {
    console.error("Error:", error);
});

})


document.getElementById("send").addEventListener("click", function(){

let park_name = document.getElementById("name_park").value;
let park_capacity = document.getElementById("capacity_park").value;
let park_fee = document.getElementById("fee_park").value;
let park_lenght = document.getElementById("lenght_park").value;
let park_width = document.getElementById("width_park").value;
let total_price = park_fee*park_capacity;
let park_area = park_width*park_lenght;
alert("Precio de la renta es de: " + total_price + " dolares por "+ park_area +" metros cuadrados"
);

fetch("php/send_data.php",{
method: "POST",
park_name: park_name,
park_capacity: capacity,
park_fee: park_fee,
park_lenght: park_lenght,
park_width: park_width
})
.then(response => response.json())
.then(data=>{
    console.log("dato encontrado")
    console.log(data)
}).catch(error =>{
    console.log("no encontrado")
});
})

document.addEventListener("DOMContentLoaded", function() {
    fetch("php/get_table.php")
    .then(response => response.json())
    .then(data => {
        let tablehtml = data;
        document.getElementById("park_table").innerHTML = tablehtml;
    })

});