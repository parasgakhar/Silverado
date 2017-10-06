<!DOCTYPE html>
<html>
<head>
    <title>Silverado</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400italic,700,700italic,300,300italic" rel="stylesheet" type="text/css" />
    <link href='https://fonts.googleapis.com/css?family=Exo+2:900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css " href="css/main.css" />
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="shortcut icon" href="img/fevi.png"/>
</head>

<nav>
    <ul>
        <li><a class="logo" href="index.php?page=home"><img src="img/icon_Silverado.png" style="width:50px; height:50px" alt="Silverado Logo"/><span>Silverado</span></a></li>
        <li><a href="nowshowing.php?page=nowshowing">Now Showing</a> </li>
        <li><a href="booking.php?page=booking">Book Tickets</a> </li>
        <li><a href="contact.php?page=contact">Contact Us</a> </li>
    </ul>
</nav>

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


</body>


    <footer class="site-footer">

        <H4>Copyright © 2017 All Rights Reserved</H4>
        <p> Created By Paras Gakhar</p>

    </footer>

</html>