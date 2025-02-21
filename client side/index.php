<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client-Side Form Validation</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <h2>Sign Up Form</h2>
        <form id="signupForm">
            <!-- Name -->
            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" required minlength="3" pattern="[A-Za-z ]+" title="Only letters allowed">
            <span class="error-message"></span>

            <!-- Email -->
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
            <span class="error-message"></span>

            <!-- Password -->
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required minlength="6">
            <span class="error-message"></span>

            <!-- Phone Number -->
            <label for="phone">Phone Number</label>
            <input type="tel" id="phone" name="phone" required pattern="[0-9]{10}" title="Enter a 10-digit phone number">
            <span class="error-message"></span>

            <!-- Submit -->
            <button type="submit">Register</button>
        </form>
    </div>

    <script src="script.js"></script>
</body>
</html>
