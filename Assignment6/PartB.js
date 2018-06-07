var answer;
var interval = null;
var value = 0;
var count = 10;
var right;
var wrong;
function sound(src) {
    this.sound = document.createElement("audio");
    this.sound.src = src;
    this.sound.setAttribute("preload", "auto");
    this.sound.setAttribute("controls", "none");
    this.sound.style.display = "none";
    document.body.appendChild(this.sound);
    this.play = function(){
        this.sound.play();
    }
    this.stop = function(){
        this.sound.pause();
    }    
}
function change(){
    document.getElementById("timer").innerHTML = ++value;
}
function start(){
    end();
    value = 0;
    answer = Math.floor((Math.random()*100)+1);
    interval = setInterval(change, 1000);
}
function end(){
    clearInterval(interval);
}
function guess(){
    var result = "";
    right = new sound("Pew.mp3");
    wrong = new sound("No.mp3");
    var guess = document.getElementById("guess").value;
    guess = parseInt(guess);
    if(count != 0){
        if(guess == answer){
            result = "Congrats! You win (:";
            right.play();
            start();
            count = 10;
            answer = Math.floor((Math.random()*100)+1);
        }
        else if(guess > answer){
            count--;
            wrong.play();
            result = "Sorry, you guessed too high ):";
        }
        else{
            count--;
            wrong.play();
            result = "Sorry, you guessed too low ):";
        }
    }
    else if(count == 0 && result != "Congrats! You win (:"){
        result = "Sorry, you ran out of tries ):<br>The correct answer was " + answer;
        start();
        count = 10;
    }
    document.getElementById("game").innerHTML = result + "<br>Tries Left: " + count;
}
