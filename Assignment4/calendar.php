<!DOCTYPE html>
<html>
    <head>
        <title>Calendar</title>
        <link rel = "stylesheet" href = "calendar.css">
    </head>
    <body>
        <h1>Assignment 4.2</h1>
        <form action = "http://codd.cs.gsu.edu/~pphejlada1/Assignment4/calendar.php" method = "post">
        <div id = "today">
        <?php
            date_default_timezone_set("America/New_York");
            echo date("l jS \of F Y g:i:s A");
            function get_hour_string(){
                return date("g A");
            }
        $date = get_hour_string();
        ?>
        </div>
        <br>
        <div id = "options">
        Hours Displayed: 
        <select name = "number">
            <option value = "1">1</option>
            <option value = "2">2</option>
            <option value = "3">3</option>
            <option value = "4">4</option>
            <option value = "5">5</option>
            <option value = "6">6</option>
            <option value = "7">7</option>
            <option value = "8">8</option>
            <option value = "9">9</option>
            <option value = "10">10</option>
            <option value = "11">11</option>
            <option value = "12" selected = "selected">12</option>
        </select>
        <input type = "submit" name = "button">
        <input type = "reset">
        </div>
        <table>
            <tr>
                <th>Hours</th>
                <th>Gob</th>
                <th>Tobias</th>
                <th>George Michael</th>
            </tr>
            <div id = "hour"> 
            <?php 
            if(isset($_POST['button'])){
                $number = $_POST["number"];
            }
            else{
                $number = 12;
            }
            for($x = 0; $x <= $number; $x++){ ?>
                <tr>
                    <td><?php echo date("g A", strtotime('+'.$x.' hours'));; ?></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            <?php } ?>
            </div>
        </table>
        </form>
    </body>
</html>