document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById("studentForm");
    const insertBtn = document.getElementById("insertBtn");
    const sortBtn = document.getElementById("sortBtn");
    const searchInput = document.getElementById("searchInput");
    const deleteFilteredBtn = document.getElementById("deleteFilteredBtn");
    const tableContainer = document.getElementById("tableContainer");

    let students = [];
    let editingId = null;
    let sortAsc = true;

    // Crear tabla
    const table = document.createElement("table");
    table.innerHTML = `
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody id="studentTableBody"></tbody>
    `;
    tableContainer.appendChild(table);

    // Renderizar tabla
    function renderTable() {
        const tbody = document.getElementById("studentTableBody");
        tbody.innerHTML = "";

        const filter = searchInput.value.toLowerCase();
        const filtered = students.filter(s =>
            s.firstName.toLowerCase().includes(filter) ||
            s.lastName.toLowerCase().includes(filter) ||
            s.email.toLowerCase().includes(filter)
        );

        for (const s of filtered) {
            const row = document.createElement("tr");
            row.innerHTML = `
                <td>${s.firstName}</td>
                <td>${s.lastName}</td>
                <td>${s.email}</td>
                <td>${s.age}</td>
                <td>${s.gender}</td>
                <td>
                    <button onclick="editStudent(${s.id})">✏️</button>
                    <button onclick="deleteStudent(${s.id})">🗑️</button>
                </td>
            `;
            tbody.appendChild(row);
        }
    }

    // Insertar o actualizar estudiante
    insertBtn.addEventListener("click", () => {
        const newStudent = {
            id: editingId || Date.now(),
            firstName: form.firstName.value.trim(),
            lastName: form.lastName.value.trim(),
            email: form.email.value.trim(),
            age: parseInt(form.age.value),
            gender: form.gender.value
        };

        if (!newStudent.firstName || !newStudent.lastName || !newStudent.email || !newStudent.age || !newStudent.gender) {
            alert("All fields are required.");
            return;
        }

        if (editingId) {
            students = students.map(s => s.id === editingId ? newStudent : s);
            editingId = null;
            insertBtn.innerHTML = '<i class="fa fa-plus"></i> Insert';
        } else {
            students.push(newStudent);
        }

        form.reset();
        renderTable();
    });

    // Ordenar por nombre
    sortBtn.addEventListener("click", () => {
        students.sort((a, b) => {
            const fa = a.firstName.toLowerCase();
            const fb = b.firstName.toLowerCase();
            return sortAsc ? fa.localeCompare(fb) : fb.localeCompare(fa);
        });
        sortAsc = !sortAsc;
        renderTable();
    });

    // Buscar en tiempo real
    searchInput.addEventListener("input", renderTable);

    // Eliminar por filtro
    deleteFilteredBtn.addEventListener("click", () => {
        const filter = searchInput.value.toLowerCase();
        if (!filter) {
            alert("Enter a search term to delete filtered students.");
            return;
        }

        const confirmDelete = confirm("Are you sure you want to delete all filtered students?");
        if (confirmDelete) {
            students = students.filter(s =>
                !(
                    s.firstName.toLowerCase().includes(filter) ||
                    s.lastName.toLowerCase().includes(filter) ||
                    s.email.toLowerCase().includes(filter)
                )
            );
            renderTable();
        }
    });

    // Editar estudiante
    window.editStudent = function (id) {
        const student = students.find(s => s.id === id);
        if (!student) return;

        form.firstName.value = student.firstName;
        form.lastName.value = student.lastName;
        form.email.value = student.email;
        form.age.value = student.age;
        form.gender.value = student.gender;

        editingId = id;
        insertBtn.innerHTML = '<i class="fa fa-save"></i> Update';
    };

    // Eliminar estudiante
    window.deleteStudent = function (id) {
        if (confirm("Are you sure you want to delete this student?")) {
            students = students.filter(s => s.id !== id);
            renderTable();
        }
    };

    renderTable();
});
