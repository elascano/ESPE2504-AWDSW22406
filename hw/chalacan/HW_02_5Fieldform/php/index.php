<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Registration</title>
</head>
<body>
   <form method="post" id="eventForm" style="margin: auto; padding: 20px; border: 1px solid #ccc; width: 400px; border-radius: 5px;">
        <h2 style="text-align: center; color: brown;">Event Registration</h2>
        <label>Event Name:</label>
        <input type="text" id="event_name" name="event_name" style="width: 100%; margin-bottom: 10px; padding: 5px;">
        
        <label>Event Date:</label>
        <input type="date" id="event_date" name="event_date" style="width: 100%; margin-bottom: 10px; padding: 5px;">
        
        <label>Location:</label>
        <input type="text" id="location" name="location" style="width: 100%; margin-bottom: 10px; padding: 5px;">
        
        <label>Max Attendees:</label>
        <input type="number" id="max_attendees" name="max_attendees" style="width: 100%; margin-bottom: 10px; padding: 5px;">
        
        <label>Event Type:</label>
        <select id="event_type" name="event_type" style="width: 100%; margin-bottom: 20px; padding: 5px;">
            <option value="conference">Conference</option>
            <option value="workshop">Workshop</option>
            <option value="webinar">Webinar</option>
        </select>
        
        <input type="submit" name="register_event" value="Register Event" style="width: 100%; padding: 10px; background-color: brown; color: white; border: none; cursor: pointer;">
   </form>

   <?php
     include("registro.php")
   ?>

   <script src="validation.js"></script>
</body>
</html>