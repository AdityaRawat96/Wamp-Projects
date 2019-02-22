var mic;
var volhistory = [];

function setup() {
  var myCanvas = createCanvas(400, 50);
  myCanvas.parent("alertDiv");
  mic = new p5.AudioIn();
  mic.start();
}

function draw() {
  background(0);
  var vol = mic.getLevel();
  volhistory.push(vol);
  stroke(255);
  strokeWeight(1);
  beginShape();
  noFill();
  for(var i=0;i<volhistory.length;i++){
    var y = map(volhistory[i],0,1,height/2,0);
    vertex(i,y);
  }
  endShape();

  if(volhistory.length > width)
  {
    volhistory.splice(0,1);
  }
}


function touchStarted() {
  if (getAudioContext().state !== 'running') {
    getAudioContext().resume();
  }
}
