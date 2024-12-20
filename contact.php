<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "partials/head.php" ?>
    <title>Weldmart | Contact</title>
</head>
<body>
    <?php include "partials/header.php" ?>
    <section class="contact">
        <div class="contact_form">
            <h2 class="contact_heading">Contact Us</h2>
            <div class="names">
                <div class="first_name">
                    <label for="f_name">First Name:</label>
                    <input type="text" name="f_name" id="f_name">
                </div>
                <div class="last_name">
                    <label for="l_name">Last Name:</label>
                    <input type="text" name="l_name" id="l_name">
                </div>
            </div>
            <div class="email">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email">
            </div>
            <div class="subject">
                <label for="subject">Subject:</label>
                <textarea name="subject" id="subject" rows="10"></textarea>
            </div>
        </div>
    </section>
    <?php include "partials/footer.php" ?>
</body>
</html>