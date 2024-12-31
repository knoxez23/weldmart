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
            <p>Contact Form</p>
            <h2 class="contact_heading">Send a Request</h2>
            <div class="names">
                <div class="first_name">
                    <input type="text" name="f_name" id="f_name" placeholder="First Name *">
                </div>
                <div class="last_name">
                    <input type="text" name="l_name" id="l_name" placeholder="Last Name *">
                </div>
            </div>
            <div class="email">
                <input type="email" name="email" id="email" placeholder="Email *">
                <input type="text" name="subject" id="subject" placeholder="Subject *">
            </div>
            <div class="subject">
                <textarea name="comment" id="comment" rows="10" placeholder="Your Comment ..."></textarea>
            </div>
            <button>Send Request</button>
        </div>
    </section>
    <?php include "partials/footer.php" ?>
</body>
</html>