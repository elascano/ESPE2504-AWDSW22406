document.getElementById("search").addEventListener("click", function(){

let value = document.getElementById("search_park").value;

fetch("../oho/send_data.php",{
method: "POST",
value:value
})
.then(response => response.json())
.then(data=>{
    console.log("dato encontrado")
    console.log(data)
}).catch(error =>{
    console.log("no encontrado")
});
})

document.getElementById("send").addEventListener("click", function(){

let value = document.getElementById("search_park").value;
let data_find = document.getElementById("category").value;

fetch("../oho/send_data.php",{
method: "POST",
value:value
})
.then(response => response.json())
.then(data=>{
    console.log("dato encontrado")
    console.log(data)
}).catch(error =>{
    console.log("no encontrado")
});
})