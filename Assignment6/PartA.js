$hours = [];
$count = 0;
function hours(){
    var box;
    while(box !== "-1"){
        box = prompt("Please enter an employee's hours or -1");
        $hours[$count] = box;
        $count++;
    }
    if(box === "-1"){
        $hours.pop();
    }
    return $hours;
}
function createTable(){
    var total = 0;
    var table = document.getElementById("table");
    for(var x=0; x<$hours.length; x++){
        $money = parseInt($hours[x]);
        var row = table.insertRow(x+1);
        var num = row.insertCell(0);
        var time = row.insertCell(1);
        var pay = row.insertCell(2);
        num.innerHTML = x+1;
        time.innerHTML = $money;
        if($money <= 40){
            $money = ($money * 15.00);
        }
        else{
            var temp = ($money - 40.00);
            $money = ((40.00 * 15.00) + (temp * 22.50));
        }
        pay.innerHTML = $money;
        total += $money;
    }
    document.getElementById("total").innerHTML = "Total Pay: " + total;
}
