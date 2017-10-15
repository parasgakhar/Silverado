<?php
session_start();
$title="Select your Seats";
include ("includes/header.php");
include ("includes/navigation.php");

$errorMessage= $session=$movie="";

if (!empty($_SESSION['selection'])) {
    include('database.php');
    $movie=trim($_SESSION["selection"]["movie"]);
    $session=trim($_SESSION["selection"]["session"]);

    if(isset($_POST['submitBooking']))
    {
        if(empty($_POST["SF"]) && empty($_POST["SP"])&&empty($_POST["SC"]) && empty($_POST["FA"])&&empty($_POST["FC"]) && empty($_POST["BA"])&&empty($_POST["BF"]) && empty($_POST["BC"]))
        {
            $errorMessage="You must choose at least 1 seat.";
        }

        else
        {
            if(!isset($_SESSION['cart']))
            {
                $_SESSION[$movie]=array();

            }

            $_SESSION['cart'][]=
                array(
                    'movieName'=>$movie,
                    'timeSlot'=>$session,
                    'seats'=>array(
                        "SF"=> $_POST["SF"],
                        "SP"=>$_POST["SP"],
                        "SC"=>$_POST["SC"],
                        "FA"=>$_POST["FA"],
                        "FC"=>$_POST["FC"],
                        "BA"=>$_POST["BA"],
                        "BF"=>$_POST["BF"],
                        "BC"=>$_POST["BC"]
                    )
                );
            unset($_SESSION['selection']);
            header('location:ticket.php');
        }

    }//checking empty fields
}//If this page is loaded with posted from form.
else
{
    header('Location:booking.php');
}

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="test.css">
    <title></title>
    <script type="text/javascript" src="js.js"></script>

</head>
<body>

<form method="POST">
    <fieldset>
        <legend>
            Select Seats
        </legend>
        <fieldset><legend>Standard</legend>
            <p class='ticket-selection'><label>Full</label>
                <span class="span">
           		<?php echo "$"; echo number_format($seatPrice['seatsPrice']['price'][0], 2); ?>
          </span>
                <select id='SF' name='SF' onchange='run(<?php echo $seatPrice['seatsPrice']['price'][0]; ?>,"priceSF","SF")'>
                    <!-- This php is used to make the code readable and short. Having 10 lines of options for all the select option below will fill the page otherwise. -->
                    <?php
                    for($i=0;$i<10;$i++)
                    {
                        if($i>0)
                            $value=$i;
                        else $value="";
                        echo "<option value=".$value.">".$i."</option>";
                    }
                    ?>
                </select>
                <span class='ticket-selection-price'>$<span id='priceSF' ><?php echo number_format(0,2);?></span></span>

            </p>

            <p class='ticket-selection'><label>Conce</label>
                <span class="span">
           		<?php echo "$"; echo number_format($seatPrice['seatsPrice']['price'][1], 2); ?>

          </span>

                <select id="SP" name='SP' onchange='run(<?php echo $seatPrice['seatsPrice']['price'][1]; ?>,"priceSP","SP")'>
                    <?php
                    for($i=0;$i<10;$i++)
                    {
                        if($i>0)
                            $value=$i;
                        else $value="";
                        echo "<option value=".$value.">".$i."</option>";
                    }
                    ?>
                </select>
                <span class='ticket-selection-price'>$<span id='priceSP'><?php echo number_format(0,2);?></span></span>

            </p>


            <p class='ticket-selection'><label>Child</label>
                <span class="span">
           		<?php echo "$"; echo number_format($seatPrice['seatsPrice']['price'][2], 2); ?>
          </span>
                <select id='SC' name='SC' onchange='run(<?php echo $seatPrice['seatsPrice']['price'][2]; ?>,"priceSC","SC")'>
                    <?php
                    for($i=0;$i<10;$i++)
                    {
                        if($i>0)
                            $value=$i;
                        else $value="";
                        echo "<option value=".$value.">".$i."</option>";
                    }
                    ?>
                </select>
                <span class='ticket-selection-price'>$<span id='priceSC'><?php echo number_format(0,2);?></span></span>

            </p>
        </fieldset>
        <fieldset><legend>First Class</legend>
            <p class='ticket-selection'><label>Adult</label>
                <span class="span">
           		<?php echo "$"; echo number_format($seatPrice['seatsPrice']['price'][3], 2); ?>

          </span>
                <select id='FA' name='FA'  onchange='run(<?php echo $seatPrice['seatsPrice']['price'][3]; ?>,"priceFA","FA")'>
                    <?php
                    for($i=0;$i<10;$i++)
                    {
                        if($i>0)
                            $value=$i;
                        else $value="";
                        echo "<option value=".$value.">".$i."</option>";
                    }
                    ?>
                </select>
                <span class='ticket-selection-price'>$<span id='priceFA'><?php echo number_format(0,2);?></span></span>


            </p>
            <p class='ticket-selection'><label>Child</label>
                <span class="span">
           		<?php echo "$"; echo number_format($seatPrice['seatsPrice']['price'][4], 2); ?>

          </span>

                <select id='FC' name='FC' onchange='run(<?php echo $seatPrice['seatsPrice']['price'][4]; ?>,"priceFC","FC")'>
                    <?php
                    for($i=0;$i<10;$i++)
                    {
                        if($i>0)
                            $value=$i;
                        else $value="";
                        echo "<option value=".$value.">".$i."</option>";
                    }
                    ?>
                </select>
                <span class='ticket-selection-price'>$<span id='priceFC'><?php echo number_format(0,2);?></span></span>



            </p>
        </fieldset>
        <fieldset><legend>Bean Bags</legend>
            <p class='ticket-selection'><label>Adult</label>
                <span class="span">
           		<?php echo "$"; echo number_format($seatPrice['seatsPrice']['price'][5], 2); ?>

          </span>
                <select id='BA' name='BA' onchange='run(<?php echo $seatPrice['seatsPrice']['price'][5]; ?>,"priceBA","BA")'>
                    <?php
                    for($i=0;$i<10;$i++)
                    {
                        if($i>0)
                            $value=$i;
                        else $value="";
                        echo "<option value=".$value.">".$i."</option>";
                    }
                    ?>
                </select>
                <span class='ticket-selection-price'>$<span id='priceBA'><?php echo number_format(0,2);?></span></span>

            </p>
            <p class='ticket-selection'><label>Family</label>
                <span class="span">
           		<?php echo "$"; echo number_format($seatPrice['seatsPrice']['price'][6], 2); ?>

          </span>
                <select id='BF' name='BF'  onchange='run(<?php echo $seatPrice['seatsPrice']['price'][6]; ?>,"priceBF","BF")'>
                    <?php

                    for($i=0;$i<10;$i++)
                    {
                        if($i>0)
                            $value=$i;
                        else $value="";
                        echo "<option value=".$value.">".$i."</option>";
                    }
                    ?>
                </select>
                <span class='ticket-selection-price'>$<span id='priceBF'><?php echo number_format(0,2);?></span></span>

            </p>
            <p class='ticket-selection'><label>Child</label>
                <span class="span">
           		<?php echo "$"; echo number_format($seatPrice['seatsPrice']['price'][7], 2); ?>

          </span>
                <select id='BC'  name='BC' onchange='run(<?php echo $seatPrice['seatsPrice']['price'][7]; ?>,"priceBC","BC")'>
                    <?php

                    for($i=0;$i<10;$i++)
                    {
                        if($i>0)
                            $value=$i;
                        else $value="";
                        echo "<option value=".$value.">".$i."</option>";
                    }


                    ?>
                </select>
                <span class='ticket-selection-price'>$<span id='priceBC'><?php echo number_format(0,2);?></span></span>

            </p>
        </fieldset>
    </fieldset>

    <p class='p'><input type="submit" name="submitBooking"  class="booknow-bottom" value="Submit"></p>

</form>

<div class='cart'>
    <h2>Your Booking</h2>
    <div>
        <div class='selected-movie'>
            <!-- <img src='../img/<?php echo "$movie.jpg"; ?>' style='max-width:100%;height: 100%'> -->
        </div>
        <div id="timeSlot">Time Selected:<?php echo " $session"; ?> </div>
        <div id="timeSlot">Movie Selected:<?php echo " $movie"; ?> </div>

        <span class="total">Total:  $<span id="total"><?php echo number_format(0,2);?></span></span>
        <span class="errorMessage"><?php echo $errorMessage; ?></span>
    </div>
</div>
</section>

<script type="text/javascript">
    function run(priceGiven,selected,id)
    {
        totalPrice = document.getElementById(id).value * priceGiven;
        document.getElementById(selected).innerHTML=totalPrice.toFixed(2);
        var p0=document.getElementById("priceSF").innerText;
        var p1=document.getElementById("priceSP").innerText;
        var p2=document.getElementById("priceSC").innerText;
        var p3=document.getElementById("priceFA").innerText;
        var p4=document.getElementById("priceFC").innerText;
        var p5=document.getElementById("priceBA").innerText;
        var p6=document.getElementById("priceBF").innerText;
        var p7=document.getElementById("priceBC").innerText;
        var totalCart=parseFloat(p0)+parseFloat(p1)+parseFloat(p2)+parseFloat(p3)+parseFloat(p4)+parseFloat(p5)+parseFloat(p6)+parseFloat(p7);
        document.getElementById("total").innerHTML=totalCart.toFixed(2);
    }

</script>
</body>
</html>