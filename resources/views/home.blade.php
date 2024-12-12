<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #121212; /* Dark background */
            color: #ffffff; /* Light text color */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            position: relative; /* For positioning the buttons */
        }
        .container {
            text-align: center;
        }
        h1 {
            margin-bottom: 20px;
        }
        .button-container {
            position: absolute; /* Positioning the buttons */
            top: 20px; /* Distance from the top */
            right: 20px; /* Distance from the right */
            display: flex; /* Use flexbox for layout */
            gap: 10px; /* Space between buttons */
        }
        .button {
            background-color: #5cb85c;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            text-decoration: none; /* Remove underline from link */
            cursor: pointer;
        }
        .button:hover {
            background-color: #4cae4c;
        }
    </style>
</head>
<body>

<div class="button-container">
    <a href="/register" class="button">Register</a> <!-- Link to the registration page -->
    <a href="/login" class="button">Login</a> <!-- Link to the login page -->
</div>

<div class="container">
    <h1>Welcome!</h1>
    <p>Please register or log in to continue.</p>
</div>

</body>
</html>
