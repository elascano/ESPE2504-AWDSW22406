document.addEventListener("DOMContentLoaded", function() {
    const form = document.querySelector("form");

    form.addEventListener("submit", function(event) {
        let isValid = true;
        const eventName = document.getElementById("event_name").value.trim();
        const eventDate = document.getElementById("event_date").value;
        const location = document.getElementById("location").value.trim();
        const maxAttendees = document.getElementById("max_attendees").value;
        const eventType = document.getElementById("event_type").value;

        if (eventName === "") {
            alert("Event Name is required.");
            isValid = false;
        }

        if (eventDate === "") {
            alert("Event Date is required.");
            isValid = false;
        } else {
            const today = new Date().toISOString().split("T")[0];
            if (eventDate < today) {
                alert("Event Date cannot be in the past.");
                isValid = false;
            }
        }

        if (location === "") {
            alert("Location is required.");
            isValid = false;
        }

        if (maxAttendees === "" || isNaN(maxAttendees) || maxAttendees <= 0) {
            alert("Max Attendees must be a positive number.");
            isValid = false;
        }

        if (eventType === "") {
            alert("Event Type is required.");
            isValid = false;
        }

        if (!isValid) {
            event.preventDefault();
        }
    });
});