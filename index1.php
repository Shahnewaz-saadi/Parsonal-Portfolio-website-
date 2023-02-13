<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <form action="connection.php" method="post">
            <h1>Contact Us Form</h1>
            <input type="text" id="firstName" placeholder="First Name" name="fname">
            <input type="text" id="lastName" placeholder="Last Name" name="lname">
            <input type="email" id="email" placeholder="Email" name="email">
            <input type="text" id="mobile" placeholder="Mobile" name="mobile">
            <h4>Type Your Message Here...</h4>
            <textarea name="message"></textarea>
            <input type="submit" value="submit" id="button">
        </form>
    </div>
</body>
</html>