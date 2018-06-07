//Q1
$(document).ready(function(){
    $("#card").click(function(){
        $("#extraW").hide();
        $("#extraC").show();
    });
    $("#wire").click(function(){
        $("#extraC").hide();
        $("#result").empty();
    });
});
function check(){
    if($("#card").is(":checked")){
        var num = document.getElementById("num");
        var month = document.getElementById("month");
        var year = document.getElementById("year");
        var pin = document.getElementById("pin");
        var numeric1 = false;
        var numeric2 = false;
        var numeric3 = false;
        var numeric4 = false;
        var string = "Please enter:\n";
        if(num.value.length == 0)
            string += "Card Number\n";
        else
            numeric1 = true;
        if(month.value.length == 0)
            string += "Expiration Month\n";
        else
            numeric2 = true;
        if(year.value.length == 0)
            string += "Expiration Year\n";
        else
            numeric3 = true;
        if(pin.value.length == 0)
            string += "Security Number\n";
        else
            numeric4 = true;
        if(numeric1 == true && numeric2 == true && numeric3 == true && numeric4 == true){
            document.getElementById("result").innerHTML = "Credit Card Number: " + num.value + " Expiration Number: " + month.value + "/" + year.value
            + " Security Number: " + pin.value;
        }
        else{
            document.getElementById("result").innerHTML = "";
            alert(string);
        }
    }
    else if($("#wire").is(":checked")){
        $("#extraW").show();
    }
    else
        alert("Please select an option");
}
//Q2
function allowDrop(ev) {
    ev.preventDefault();
}
function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
}
function drop(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    if(confirm("Do you want to remove this?") == true)
        document.getElementById(data).style.display = "none";
    else
        alert("You selected cancel!");
}
//Q3
function load() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("more").innerHTML =
        this.responseText;
      }
    };
    xhttp.open("GET", "one.txt", true);
    xhttp.send();
  }
  function loaddoc() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("more").innerHTML =
        this.responseText;
      }
    };
    xhttp.open("GET", "two.txt", true);
    xhttp.send();
  }
  function loadDoc() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("more").innerHTML =
        this.responseText;
      }
    };
    xhttp.open("GET", "three.txt", true);
    xhttp.send();
  }