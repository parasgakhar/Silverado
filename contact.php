<?php
session_start();
include ("includes/header.php");
include ("includes/navigation.php");

?>

<div class="normal">
    <h1 class="title-head">
        Contact Us <br>
        You can get in touch with us.
    </h1>
</div>


<body>

    <form action="http://titan.csit.rmit.edu.au/~e54061/wp/contact.php" method="post">
        <div class="container">
            <h2>  Fill the details Below</h2>
            <div class="form-input">
                <label for="email" class="label-l">Email address:</label>
                <input type="email" id="emailAdd" name="email" value="" required/>
            </div>
            <div class="form-input">
                <label for="subject" class="label-l">Subject:</label>
                <select name="subject" id="subject" required>
                    <option value="" disabled selected>Select an option</option>
                    <option value="General Enquiry">General Enquiries</option>
                    <option value="Group and Corporate Bookings">Group Bookings</option>
                    <option value="Suggestions and Complaints">Suggestions and Complaints</option>
                </select>
            </div>

            <div class="form-input">
                <label for="message" class="label-l">Message:</label>
                <textarea name="message" id="message" rows="10" required></textarea>
                <button type="reset" class="btn"  value="Clear">Clear</button>
                <button type="submit" class="btn" value="Submit">Submit</button>
            </div>
        </div>
    </form>

    <?php
    include ("includes/footer.php");
    ?>
</body>
</html>