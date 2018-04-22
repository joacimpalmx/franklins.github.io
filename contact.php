<?php 
define("TITLE", "Contact Us | Franklin's Fine Dining");
include('includes/header.php');
?>

<div id="contact">

    <h1>Get in touch with us!</h1>
        <form action="" method="post" id="contact-form">

            <label for="name">Your Name</label>
            <input type="text" id="name" name="name">
            
            <label for="email">Your Email</label>
            <input type="email" id="email" name="email">

            <label for="message">Your Message</label>
            <textarea name="message" id="message"></textarea>

            <input type="checkbox" id="subscribe" name="subscribe" value="Subscribe">
            <label for="subscribe">Subscribe to Newsletter</label>

            <input type="submit" class="button next" name="contact_submit" value="Send Message">


        </form>

</div> <!-- contact -->


<?php 
include('includes/footer.php');
?>