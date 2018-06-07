var interval = null;
function newBoard(){
  interval = 0;
  $flipped = ["",""];
  $images = [];
  $num = [];
  $level = document.getElementById('size').value;
  $correct = 0;
  $loadout = 0;
  $timeout = 0;
  document.getElementById('instructions').innerHTML = "";
  for(var x=0; x<(2*$level); x++){
    var img = 'Images/' + x + '.jpg';
    $images.push(img);
    $images.push(img);
  }
  for(var x=0; x<(4*$level); x++)
    $num.push(x+1);
  if($level == "4"){
    $load = 3000;
    $timeout = 120;
  }
  else if($level == "5"){
    $load = 5000;
    $timeout = 150;
  }
  else{
    $load = 8000;
    $timeout = 180;
  }
  randomize();
  makeTable();
  $value = $timeout;
  begin();
  setTimeout(function(){
    for(var x=0; x<(4*$level); x++)
      hide(x);},$load);
}
function randomize(){
  Array.prototype.randomize = function(){
    var x = this.length, y, temp;
    while(--x){
      y = Math.floor(Math.random()*(x-1));
      temp = this[x];
      this[x] = this[y];
      this[y] = temp;
    }
  };
  $images.randomize();
}
function makeTable(){
  document.getElementById('memory_board').innerHTML = "";
  var count = 0;
  var string = "<table>";
  for(var row=0; row < 4; row++){
    string += "<tr>";
    for(var cell=0; cell < $level; cell++){
      string += '<td><button onclick = "clicked(' + count + ')" style = "height: 175px">' + $num[count] +'<img src = "' + $images[count] + '" id = "' + count + '" style = "visibility: visible"></td>';
      count++;
    }
    string += "</tr>";
  }
  string += "</table>";
  document.getElementById('memory_board').innerHTML = string;
}
function clicked(index){
  if($flipped[0] == ""){
    $flipped[0] = $images[index];
    $flipped[2] = index;
    document.getElementById(index).style.visibility = "visible";
  }
  else{
    document.getElementById(index).style.visibility = "visible";
    $flipped[1] = $images[index];
    $flipped[3] = index;
    if($flipped[0] == $flipped[1]){
      $flipped[0] = "";
      $flipped[1] = "";
      $correct++;
      if($correct == 2*$level){
        alert("Congratulations! You matched all the cats!");
        end();
        newBoard();
      }
    }
    else{
      setTimeout("hide($flipped[2])",1000);
      setTimeout("hide($flipped[3])", 1000);
      $flipped[0] = "";
      $flipped[1] = "";
    }
  }
}
function hide(index){
  document.getElementById(index).style.visibility = "hidden";
}
function change(){
  document.getElementById("timer").innerHTML = --$value;
  if($value == 0){
    alert("Sorry, game over!");
    end();
    newBoard();
  }
}
function end(){
  clearInterval(interval);
}
function begin(){
  end();
  interval = setInterval(change, 1000);
}