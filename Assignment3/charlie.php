<?php
//Part 1
echo "<h1>Part 1</h2>";
function isBitten(){
    $prob = rand(0,1);
    if($prob == 1){
        echo "Charlie ate my lunch!<br>";
    }
    else{
        echo "Charlie did not eat my lunch!<br>";
    }
}
isBitten();
?>
<?php
//Part 2
echo "<h1>Part 2</h1>";
echo "<table width = 300px border = 1px cellpadding = 1px cellspacing = 1px";
for($row = 1; $row <= 8; $row++){
    echo "<tr>";
    for($col = 1; $col <= 8; $col++){
        $tot = $row + $col;
        if($tot % 2 == 0){
            echo "<td height = 35px width = 35px bgcolor = red></td>";
        }
        else{
            echo "<td height = 35px width = 35px bgcolor = #000000></td>";
        }
    }
    echo "</tr>";
}
echo "</table>";
?>
<?php
//Part 3.1
echo "<h1>Part 3.1</h2>";
$month = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
echo "Months printed with a for loop:<br>";
for($x = 0; $x < count($month); $x++){
    echo $month[$x] . " ";
}
echo "<br>";
//Part 3.2
echo "<h1>Part 3.2</h2>";
function alpha($array){
    sort($array);
    echo "Months sorted and printed with a for loop:<br>";
    for($y = 0; $y < count($array); $y++){
        echo $array[$y] . " ";
    }
}
echo alpha($month) . "<br>";
//Part 3.3
echo "<h1>Part 3.3</h2>";
$month = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
echo "Months printed with a foreach loop:<br>";
foreach($month as $value){
    echo "$value ";
}
echo "<br>";
//Part 3.4
echo "<h1>Part 3.4</h2>";
echo "Months sorted and printed with a foreach loop:<br>";
sort($month);
function alpha2($array){
    foreach($array as $value){
        echo "$value ";
    }
}
echo alpha2($month) . "<br>";
?>
<?php
//Part 4.1
echo "<h1>Part 4.1</h2>";
$food = array("Chama Gaucha", "Aviva by Kameel", "Bone's Restaurant", "Umi Sushi Buckhead", "Fandangles", "Capital Grille", "Canoe", "One Flew South", "Fox Bros. BBQ", "South City Kitchen Midtown");
$cost = array("Chama Gaucha"=>"$40.50", "Aviva by Kameel"=>"$15.00", "Bone's Restaurant"=>"$65.00", "Umi Sushi Buckhead"=>"$40.50", "Fandangles"=>"$30.00", "Capital Grille"=>"$60.50", "Canoe"=>"$35.50", "One Flew South"=>"$21.00", "Fox Bros. BBQ"=>"$15.00", "South City Kitchen Midtown"=>"$29.00");
echo('<table>');
echo('<tr><th>' . "Restaurant Name" . '</th>');
echo('<th>' . "Average Cost" . '</th></tr>');
for($x = 0; $x < count($food); $x++){
    echo('<tr><td>' . $food[$x] . '</td>');
    echo('<td>' . $cost[$food[$x]] . '</td></tr>');
}
echo('</table>');
//Part 4.2
echo "<h1>Part 4.2</h1>";
asort($cost);
echo('<table>');
echo('<tr><th>' . "Restaurant Name" . '</th>');
echo('<th>' . "Average Cost" . '</th></tr>');
foreach($cost as $x=>$xval){
    echo('<tr><td>' . $x . '</td>');
    echo('<td>' . $xval . '</td></tr>');
}
echo('</table>');
//Part 4.3
echo "<h1>Part 4.3</h1>";
sort($food);
echo('<table>');
echo('<tr><th>' . "Restaurant Name" . '</th>');
echo('<th>' . "Average Cost" . '</th></tr>');
foreach($food as $x=>$xval){
    echo('<tr><td>' . $food[$x] . '</td>');
    echo('<td>' . $cost[$food[$x]] . '</td></tr>');
}
echo('</table>');
?>