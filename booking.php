<?php
session_start();
$title="Book Your Tickets.";
include ("includes/header.php");
include ("includes/navigation.php");
include('database.php');
$errorMovie= $errorSession="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if(!empty($_POST["movie"]) && !empty($_POST["session"]))
    {

        $movie=trim($_POST["movie"]);
        $session=trim($_POST["session"]);
        $_SESSION['selection']=["movie"=>$movie,"session"=>$session];
        header("location: SeatSelection.php");

    }
    else
    {
        if(empty($_POST["movie"]))
            $errorMovie="Please Select Movie";
        if(empty($_POST["session"]))
            $errorSession="Please Select Session";
    }
}
?>





<form name="bookingForm"  id="bookingForm1" method='POST' onsubmit="return checkFields()" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <fieldset>
        <legend>Book your Ticket</legend>
        <p><label>Movie</label>
            <select id="movieSelected" name="movie" onchange="run()"	>
                <option  value="">Please select..</option>
                <optgroup label="Kids">
                    <?php
                    foreach ($moviesDatabase['movies']['kids'] as $value) {
                        echo "<option value='{$value}'>{$value}</option>";
                    }
                    ?>
                </optgroup>
                <optgroup label="Action">
                    <?php
                    foreach ($moviesDatabase['movies']['actions'] as $value) {
                        echo "<option value='{$value}'>{$value}</option>";
                    }
                    ?>
                </optgroup>
                <optgroup label="Romantic Comedy">
                    <?php
                    foreach ($moviesDatabase['movies']['romantics'] as $value) {
                        echo "<option value='{$value}'>{$value}</option>";
                    }
                    ?>
                </optgroup>
                <optgroup label="Foreign">
                    <?php
                    foreach ($moviesDatabase['movies']['internationals'] as $value) {
                        echo "<option value='{$value}'>{$value}</option>";
                    }
                    ?>
                </optgroup>

            </select><span id="movieError"><?php echo $errorMovie; ?></span></p>
        <p><label>Session</label>
            <select id="session" name="session"  >
                <option value="" >Select the times</option>

                <?php
                echo "<optgroup id='{$moviesDatabase['movies']['kids'][0]}' label='{$moviesDatabase['movies']['kids'][0]}' class='hidden' >";
                foreach ($moviesDatabase['moviesKids']['timeSlots'] as $value) {
                    echo "<option value='{$value}'>{$value}</option>"; }
                echo "</optgroup>";
                ?>

                <?php
                echo "<optgroup id='{$moviesDatabase['movies']['actions'][0]}' label='{$moviesDatabase['movies']['actions'][0]}' class='hidden' >";
                foreach ($moviesDatabase['moviesAction']['timeSlots'] as $value) {
                    echo "<option value='{$value}'>{$value}</option>"; }
                echo "</optgroup>";
                ?>
                <?php
                echo "<optgroup id='{$moviesDatabase['movies']['internationals'][0]}' label='{$moviesDatabase['movies']['internationals'][0]}' class='hidden' >";
                foreach ($moviesDatabase['moviesInt']['timeSlots'] as $value) {
                    echo "<option value='{$value}'>{$value}</option>"; }
                echo "</optgroup>";
                ?>

                <?php
                echo "<optgroup id='{$moviesDatabase['movies']['romantics'][0]}' label='{$moviesDatabase['movies']['romantics'][0]}' class='hidden' >";
                foreach ($moviesDatabase['moviesRomantic']['timeSlots'] as $value) {
                    echo "<option value='{$value}'>{$value}</option>"; }
                echo "</optgroup>";
                ?>
            </select><span id="sessionError"><?php echo $errorSession; ?></span></p>
    </fieldset>
    <p class='p'><input class="booknow-bottom" name="bookNow" 	type="submit" value="Book Now"></p>


</form>

<?php
include ("includes/footer.php");
?>


</body>

</html>

