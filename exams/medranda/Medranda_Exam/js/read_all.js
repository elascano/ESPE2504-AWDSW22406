singer_full_list = [];

get_full_singer_list();

function get_full_singer_list() {
    fetch("../php/read_all.php")
        .then(response => response.json())
        .then(data => {
            console.log("Singers were catch:", data);
            if (data.error) {
                console.error("[ERROR load_fill_project_list]: ", data.error);
            } else {
                singer_full_list = data;
                load_full_singer_list();
            }
        })
        .catch(error => console.error("Error en la solicitud fetch:", error));
}

function load_full_singer_list() {
    if (singer_full_list.length) {
        let table = document.getElementById("singer_table");
        let string_table = `<tr>
                <th>ID</th>
                <th>Singer Name</th>
                <th>Singer Nation</th>
                <th>Singer Born Date</th>
                <th>Singer Disk Number</th>
                <th>Singer Disk Price</th>
                <th>Price of all disks</th>
            </tr>`;
        singer_full_list.forEach((singer) => {
            let new_div_project = `
                <tr>
                    <td>${singer.id}</td>
                    <td>${singer.name}</td>
                    <td>${singer.nation}</td>
                    <td>${singer.born_date}</td>
                    <td>${singer.disk}</td>
                    <td>${singer.price}</td>
                    <td>${singer.disk * singer.price}</td>
                </tr>
            `;

            string_table += new_div_project;
        });
        table.innerHTML = string_table;
    }
}