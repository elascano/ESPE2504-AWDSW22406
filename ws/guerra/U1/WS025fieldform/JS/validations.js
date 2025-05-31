document.addEventListener("DOMContentLoaded", function () {
    const form = document.forms["registerproduct"];

    form.addEventListener("submit", function (event) {
        const name = form["name"].value.trim();
        const description = form["description"].value.trim();
        const category = form["category"].value;
        const price = parseFloat(form["price"].value);
        const stock = parseInt(form["stock"].value);

        if (name.length < 5 || name.length > 100) {
            alert("The product name must be between 5 and 100 characters.");
            event.preventDefault();
            return;
        }

        const nameRegex = /^[a-zA-Z0-9\s\-\.\/]+$/;
        if (!nameRegex.test(name)) {
            alert("The product name can only contain letters, numbers, spaces, hyphens (-), slashes (/), and periods (.)");
            event.preventDefault();
            return;
        }

        if (description.length < 10 || description.length > 500) {
            alert("The product description must be between 10 and 500 characters.");
            event.preventDefault();
            return;
        }

        if (category === "") {
            alert("Please select a product category.");
            event.preventDefault();
            return;
        }

        if (isNaN(price) || price <= 0) {
            alert("The price must be a number greater than 0.");
            event.preventDefault();
            return;
        }

        if (isNaN(stock) || stock < 0) {
            alert("The stock must be a number equal to or greater than 0.");
            event.preventDefault();
            return;
        }
    });
});
