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
<body>
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
        Book Tickets<br>
        Its Always Easy to Book Tickets Here!
    </h1>
</div>


<form id="BookingForm" name="BookingForm" action="http://titan.csit.rmit.edu.au/~e54061/wp/testbooking.php"
      method="post">
    <table>
        <tr>
            <th>Movie: </th>
            <td colspan = "2">
                <select name="movie" id="movie" onchange="changeOptions()">
                    <option value="AC">Star Wars: The Last Jedi</option>
                    <option value="CH">The Emoji Movie</option>
                    <option value="AF">Nikka Zaildar</option>
                    <option value ="RC">Everybody love Somebody</option>
                </select>
            </td>
        </tr>
        <tr>
            <th>Day: </th>
            <td colspan="2">
                <select name="day" id="day" onchange="changeBasedOnDay()">
                    <option value="WED">Wednesday</option>
                    <option value="THUR">Thursday</option>
                    <option value="FRI">Friday</option>
                    <option value ="SAT">Saturday</option>
                    <option value ="SUN">Sunday</option>
                </select>
            </td>
        </tr>
        <tr>
            <th>Time: </th>
            <td colspan="2">
                <input type="text" name="time" id="time" value="9pm" readonly>
            </td>
        </tr>
        <tr><td colspan="3"></td></tr>
        <tr>
            <th>Ticket Type</th>
            <th>Quantity</th>
            <th>Subtotal Price</th>
        </tr>
        <!-- Adult Price -->
        <tr>
            <td>Adult</td>
            <td>
                <select name="SA" id="SA" onchange="newCalc(this)">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                </select>
            </td>
            <td>
                <input type="text" id="SA_subTotal" value="0.00" readonly>
            </td>
        </tr>

        <!-- Concession Price -->
        <tr>
            <td>Concession</td>
            <td>
                <select name="SP" id="SP" onchange="newCalc(this)">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                </select>
            </td>
            <td>
                <input type="text" id="SP_subTotal" value="0.00" readonly>
            </td>
        </tr>

        <!-- Child Price -->
        <tr>
            <td>Child</td>
            <td>
                <select name="SC" id="SC" onchange="newCalc(this)">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                </select>
            </td>
            <td>
                <input type="text" id="SC_subTotal" value="0.00" readonly>
            </td>
        </tr>

        <!-- First Class Adult Price -->
        <tr>
            <td>Child</td>
            <td>
                <select name="FA" id="FA" onchange="newCalc(this)">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                </select>
            </td>
            <td>
                <input type="text" id="fcA_subTotal" value="0.00" readonly>
            </td>
        </tr>

        <!-- First Class Child Price -->
        <tr>
            <td>Child</td>
            <td>
                <select name="FC" id="FC" onchange="newCalc(this)">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                </select>
            </td>
            <td>
                <input type="text" id="fcC_subTotal" value="0.00" readonly>
            </td>
        </tr>

        <!-- Beanbag 1 Price -->
        <tr>
            <td>Beanbag (1 Person)</td>
            <td>
                <select name="B1" id="B1" onchange="newCalc(this)">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                </select>
            </td>
            <td>
                <input type="text" id="bb1_subTotal" value="0.00" readonly>
            </td>
        </tr>

        <!-- Beanbag 2 Price -->
        <tr>
            <td>Beanbag (2 People)</td>
            <td>
                <select name="B2" id="B2" onchange="newCalc(this)">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                </select>
            </td>
            <td>
                <input type="text" id="bb2_subTotal" value="0.00" readonly>
            </td>
        </tr>

        <!-- Beanbag 3 Price -->
        <tr>
            <td>Beanbag (3 Children)</td>
            <td>
                <select name="B3" id="B3" onchange="newCalc(this)">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                </select>
            </td>
            <td>
                <input type="text" id="bb3_subTotal" value="0.00" readonly>
            </td>
        </tr>

        <tr>
            <th colspan ="2">Total: </th>
            <td>
                <input type="text" name="price" id="price" value="0.00" readonly>
            </td>

        </tr>
    </table>




    <input type="Submit" value="Submit">
</form>

<script type="text/javascript">
    function changeOptions(){
        var AC_choice = ['Wednesday','WED','Thursday','THUR','Friday',
            'FRI','Saturday','SAT','Sunday','SUN'];
        var all_choice  = ['Monday','MON','Tuesday','TUE','Wednesday','WED',
            'Thursday','THUR','Friday','FRI','Saturday','SAT',
            'Sunday','SUN'];
        var AF_choice = ['Monday','MON','Tuesday','TUE','Saturday','SAT','Sunday','SUN'];

        var x = document.getElementById("movie").value;
        var other = document.getElementById("day");
        var i;

        if(x == "AC")
        {
            other.options.length = 0;
            for (i = 0; i < AC_choice.length-1;i+=2){
                other.options[other.options.length] = new Option(AC_choice[i],AC_choice[i+1],true,false)
            }
        }
        if(x == "CH" || x == "RC")
        {
            other.options.length = 0;
            for (i = 0; i < all_choice.length-1;i+=2){
                other.options[other.options.length] = new Option(all_choice[i],all_choice[i+1],true,false)
            }
        }
        if(x == "AF")
        {
            other.options.length = 0;
            for (i = 0; i < AF_choice.length-1;i+=2){
                other.options[other.options.length] = new Option(AF_choice[i],AF_choice[i+1],true,false)
            }

        }
        timeBasedOnDay();
    }

    function changeBasedOnDay(){
        var mov = document.getElementById("movie").value;
        var day = document.getElementById("day").value;
        var time = document.getElementById("time");

        timeBasedOnDay(mov,day,time);

    }

    function timeBasedOnDay(mov, day, time){

        var timearray = ['12pm','1pm','3pm','6pm','9pm'];

        if(mov == "AC"){
            time.value = timearray[4];
        }
        if(mov == "CH"){
            if(day == "MON" || day == "TUE"){
                time.value = timearray[1];
            }else if(day == "SAT" || day == "SUN"){
                time.value = timearray[0];
            }else{
                time.value = timearray[3];
            }
        }
        if(mov == "AF"){
            if(day == "MON" || day == "TUE"){
                time.value = timearray[3];
            }else{
                time.value = timearray[2];
            }
        }
        if(mov == "RC"){
            if(day == "MON" || day =="TUE"){
                time.value = timearray[4];
            }else if(day == "SAT" || day == "SUN"){
                time.value = timearray[3];
            }else {
                time.value = timearray[1];
            }
        }
    }

    function newCalc (sel){
        var val = sel.value;
        var price, subtotal, temp;

        var day = document.getElementById("day").value;
        var time = document.getElementById("time").value;

        var adult = document.getElementById("SA").value;
        var concession = document.getElementById("SP").value;
        var child = document.getElementById("SC").value;

        var fcAdult = document.getElementById("FA").value;
        var fcChild = document.getElementById("FC").value;

        var beanbag1 = document.getElementById("B1").value;
        var beanbag2 = document.getElementById("B2").value;
        var beanbag3 = document.getElementById("B3").value;

        var total = document.getElementById("price");

        var a_subtotal = document.getElementById("SA_subTotal");
        var co_subtotal = document.getElementById("SP_subTotal");
        var ch_subtotal = document.getElementById("SC_subTotal");

        var fcA_subtotal = document.getElementById("fcA_subTotal");
        var fcC_subtotal = document.getElementById("fcC_subTotal");

        var bb1_subtotal = document.getElementById("bb1_subTotal");
        var bb2_subtotal = document.getElementById("bb2_subTotal");
        var bb3_subtotal = document.getElementById("bb3_subTotal");



        if(day == "MON" || day == "TUE" || time == "1pm"){
            // cheap day
            if(val == adult){
                price = 12;
                subtotal = price * val;
                a_subtotal.value =  parseFloat(+subtotal).toFixed(2);
            }
            if(val == concession) {
                price = 10;
                subtotal = price * val;
                co_subtotal.value = parseFloat(+subtotal).toFixed(2);
            }
            if(val == child) {
                price = 8;
                subtotal = price * val;
                ch_subtotal.value = parseFloat(+subtotal).toFixed(2);
            }
            if(val == fcAdult){
                price = 25;
                subtotal = price * val;
                fcA_subtotal.value = parseFloat(+subtotal).toFixed(2);
            }
            if(val == fcChild){
                price = 20;
                subtotal = price * val;
                fcC_subtotal.value = parseFloat(+subtotal).toFixed(2);
            }
            if(val == beanbag1){
                price = 20;
                subtotal = price * val;
                bb1_subtotal.value = parseFloat(+subtotal).toFixed(2);
            }
            if(val == beanbag2){
                price = 30;
                subtotal = price * val;
                bb2_subtotal.value = +parseFloat(+subtotal).toFixed(2);
            }
            if(val == beanbag3){
                price = 30;
                subtotal = price * val;
                bb3_subtotal.value = parseFloat(+subtotal).toFixed(2);
            }
        }else{
            if(val == adult){
                price = 18;
                subtotal = price * val;
                a_subtotal.value = parseFloat(+subtotal).toFixed(2);
            }

            if(val == concession) {
                price = 15;
                subtotal = price * val;
                co_subtotal.value = parseFloat(+subtotal).toFixed(2);
            }

            if(val == child) {
                price = 12;
                subtotal = price * val;
                ch_subtotal.value = parseFloat(+subtotal).toFixed(2);
            }
            if(val == fcAdult){
                price = 30;
                subtotal = price * val;
                fcA_subtotal.value = parseFloat(+subtotal).toFixed(2);
            }
            if(val == fcChild){
                price = 25;
                subtotal = price * val;
                fcC_subtotal.value = parseFloat(+subtotal).toFixed(2);
            }
            if(val == beanbag1){
                price = 30;
                subtotal = price * val;
                bb1_subtotal.value = parseFloat(+subtotal).toFixed(2);
            }
            if(val == beanbag2){
                price = 30;
                subtotal = price * val;
                bb2_subtotal.value = parseFloat(+subtotal).toFixed(2);
            }
            if(val == beanbag3){
                price = 30;
                subtotal = price * val;
                bb3_subtotal.value = parseFloat(+subtotal).toFixed(2);
            }
        }


        temp = +a_subtotal.value + +co_subtotal.value + +ch_subtotal.value
            + +fcA_subtotal.value + +fcC_subtotal.value + +bb1_subtotal.value + +bb2_subtotal.value
            + +bb3_subtotal.value;

        total.value = parseFloat(temp).toFixed(2);

    }

</script>


<footer class="site-footer">

        <H4>Copyright © 2017 All Rights Reserved</H4>
        <p> Created By Paras Gakhar</p>

    </footer>

</body>

</html>

