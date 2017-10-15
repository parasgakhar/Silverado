<?php
session_start();
$title="Book Your Tickets.";
include ("includes/header.php");
include ("includes/navigation.php");
if (!empty($_SESSION['cart'])) {
include('database.php');?>


   <?php

echo "<table>";
    $grandTotalAmount=0;
    $grantTotalSeats=0;
    for($i=0;$i<count($_SESSION['cart']);$i++)
    {
        $totalForEachMovie=0;
        $totalSeats=0;
        $movie=$_SESSION['cart'][$i]['movieName'];
        $time=$_SESSION['cart'][$i]['timeSlot'];
        // echo '<tr><th colspan="3">Your Movies</th><th>Movie Time</th></tr>';
        echo "<tr rowspan='2'><th colspan='4'>Movie: {$movie} <br> Time: {$time}</th></tr>";
        echo "<tr><th>Your Seat</th><th>No of Seats</th><th>Price</th><th>Sub Total</th></tr>";

        $seat=$_SESSION['cart'][$i]['seats'];
        foreach ($seat as $key => $value) {
            if($value>0)
            {
                if($key=="SF"){$key='Standard Full Price'; $price=number_format($seatPrice['seatsPrice']['price'][0], 2);}
                if($key=="SP"){$key='Standard Concession'; $price=number_format($seatPrice['seatsPrice']['price'][1], 2);}
                if($key=="SC"){$key='Standard Child'; $price=number_format($seatPrice['seatsPrice']['price'][2], 2);}
                if($key=="FA"){$key='First Class Adult'; $price=number_format($seatPrice['seatsPrice']['price'][3], 2);}
                if($key=="FC"){$key='First Class Child'; $price=number_format($seatPrice['seatsPrice']['price'][4], 2);}
                if($key=="BA"){$key='Bin Adult';$price=number_format($seatPrice['seatsPrice']['price'][5], 2);}
                if($key=="BF"){$key='Bin Family';$price=number_format($seatPrice['seatsPrice']['price'][6], 2);}
                if($key=="BC"){$key='Bin Child';$price=number_format($seatPrice['seatsPrice']['price'][7], 2);}
                $subTotal=number_format($value*$price, 2);
                echo "<tr><td>{$key}</td><td>{$value}</td><td>$".$price."</td><td>$".$subTotal."</td></tr>";
                $totalForEachMovie+=$subTotal;
                $totalForEachMovie = number_format($totalForEachMovie, 2);
                $totalSeats+=$value;
            }
        }
        $grandTotalAmount+=$totalForEachMovie;
        $grandTotalAmount = number_format($grandTotalAmount, 2);
        $grantTotalSeats+=$totalSeats;
        echo "<tr><th>Total Seats</th><th>{$totalSeats}</th><th>Total Amount</th><th>$".$totalForEachMovie."</th></tr>";
        $_SESSION['ref']=$i;
        echo "<tr><td colspan='2'><a id='addButton' href='bookingTest.php'>Add Another Movie</a></td><td colspan='2'><a id='deleteButton' href='deleteMovie.php'>Delete this movie</a></td></tr>";

        echo "<tr><td colspan='4'></td></tr>";


    }
    echo '<tr><th>Total No of Seats</th><th>'.$grantTotalSeats.'</th><th>Total Amount</th><th>$'.$grandTotalAmount.'</th></tr>
<tr><th  colspan="2"></th><th colspan="2"> 
<button id ="printbtn" type="button" value="Print this page" onclick="window.print();" >Print Your Ticket</button></th></tr>
</table>';
    }

    else
    {
        header('location:booking.php');
    }
    ?>

<?php
include ("includes/footer.php");
?>
    </body></html>