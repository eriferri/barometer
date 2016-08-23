var rangeMin = 0;
var rangeMax = 100;

var progress = document.querySelector("#slider");
var rail = document.querySelector(".rail");
var knob = document.querySelector(".knob");
var width = rail.offsetWidth;

TweenMax.set(".knob", { xPercent: -50, yPercent: -50 });
TweenMax.set(".knob-container", { yPercent: -50, top: "50%" });

Draggable.create(".knob-container", {
  type: 'x',
  trigger: rail,  
  bounds: rail,
  onPress: function() {
    var rect = rail.getBoundingClientRect();
    var x = this.pointerX - rect.left;
    
    TweenLite.set(this.target, { x: x });
    
    this.update();
    setRange(x);
  },
  onDrag: function() {
    setRange(this.x);
  }
});

setRange(0);

function lerp(start, stop, amt) {
  amt = amt < 0 ? 0 : (amt > 1 ? 1 : amt);
  return start + (stop - start) * amt;
}

function setRange(x) {  
  var ratio = x / width;
  var value = lerp(rangeMin, rangeMax, ratio);
  progress.textContent = Math.round(value);
}