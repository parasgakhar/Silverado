<?php
session_start();
include ("includes/header.php");
include ("includes/navigation.php");
include ("includes/footer.php");
?>
<body>

<header>
<div class="automatic-slide" style="max-width: 100%">
    <img class="slide" src="img/Nikka.jpg" style="width: 100%">
    <img class="slide" src="img/action.jpg" style="width: 100%">
    <img class="slide" src="img/romantic.jpg" style="width: 100%">
    <img class="slide" src="img/child.jpg" style="width: 100%">

</div>

<script>
    var myIndex= 0;
    carousel();
    function carousel() {
        var i;
        var x = document.getElementsByClassName("slide");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) {myIndex = 1}
        x[myIndex-1].style.display = "block";
        setTimeout(carousel, 2000); // Change image every 2 seconds
    }
</script>
</header>

<div class="normal">
    <h1 class="title-head">
        SILVERADO GRAND RE-OPENING
    </h1>
</div>

<div class="container-news">
    <h1>
        What's New at <b>Silverado</b>
    </h1>
    <div>
        <article>
            <h3> BeanBags Available</h3>
            <p class="date">10 October 2017</p>
            <p> We now have a new addition to our seating and that is for limited seats only to make your experience with cinema
            more comfortable and cozy with our soft Beanbags!</p>
        </article>
        <article>
            <h3> New Discounts</h3>
            <p> We are doing a Grand Re-opening so there are some discounts for this new opening month
            so feel free to drop in to the cinema to avail new exciting discount offers</p>
            <p style="font-size: 50%">*Conditions Apply</p>
        </article>
        <article>
            <h3> Work With Us </h3>
            <p> Want to know more about the cinema industry?</p>
            <p> Come and Join Us!</p>
        </article>
    </div>
</div>





</body>
</html>