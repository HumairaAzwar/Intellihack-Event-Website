<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Intellihack</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <?php include 'header.php'; ?>

    <section class="contact-section">
        <h2>Contact Us</h2>
        <p>We’d love to hear from you! Whether you have questions about the event, need assistance, or want to collaborate, please feel free to reach out through any of the methods below.</p>

        <div class="contact-info">
            <div class="contact-details">
                <h3>Get in Touch</h3>
                <p><strong>Email:</strong> <a href="mailto:contact@intellihack.com">contact@intellihack.com</a></p>
                <p><strong>Phone:</strong> +94 77 258 2766</p>
                <p><strong>Address:</strong> 35, Ried Avenue, Colombo, Sri Lanka</p>
                <p>For event-related inquiries, feel free to reach out during our office hours, Monday through Friday from 9:00 AM to 5:00 PM.</p>
            </div>

            <div class="contact-form">
                <h3>Send Us a Message</h3>
                <form action="contact_form_handler.php" method="post">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>

                    <label for="message">Message:</label>
                    <textarea id="message" name="message" rows="5" required></textarea>

                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>

        <div class="social-media">
            <h3>Connect With Us</h3>
            <p>Stay up-to-date by following us on social media:</p>
            <a href="https://facebook.com/intellihack" target="_blank">Facebook</a> |
            <a href="https://twitter.com/intellihack" target="_blank">Twitter</a> |
            <a href="https://instagram.com/intellihack" target="_blank">Instagram</a> |
            <a href="https://linkedin.com/company/intellihack" target="_blank">LinkedIn</a>
        </div>

        <div class="map">
            <h3>Find Us Here</h3>
            <<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13322.832912672417!2d79.86155519537249!3d6.902331433447744!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25963120b1509%3A0x2db2c18a68712863!2sUniversity%20of%20Colombo%20School%20of%20Computing%20(UCSC)!5e0!3m2!1sen!2slk!4v1731251099662!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <?php include 'footer.php'; ?>

</body>
</html>
