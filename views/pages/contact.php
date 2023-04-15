<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contact.css">
    <title>Contact Us</title>
    <link rel="stylesheet" href="<?= ROOT_PATH ?>/styles/contact.css">
</head>


<body>
    <div id=contact-wrapper>
    <h1 id="contact-h1"><?= $title ?></h1>
    </div>

    <div class="container">

        <div>
            <img id="contact-img"src="https://finder.porsche.com/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fporsche.8b432845.jpg&w=1920&q=75" alt="">
        </div>

        <p>Please fill out the form below and we'll get back to you as soon as possible.</p>
        <form action="#" method="post" class="contact-form">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="subject">Subject</label>
            <input type="text" id="subject" name="subject" required>

            <label for="message">Message</label>
            <textarea id="message" name="message" rows="6" required></textarea>

            <button type="submit" class="submit-btn">Submit</button>
        </form>
    </div>
</body>
</html>
