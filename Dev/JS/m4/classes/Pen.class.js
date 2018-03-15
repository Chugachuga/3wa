"use strict"

function Pen(){
  this.color = "black";
  this.width = 1;
}

Pen.prototype.setColor = function(color)
{
  this.color = color;
}

Pen.prototype.setWidth = function(width)
{
  switch (width) {
    case "light":
      this.width = 1;
      break;
    case "bold":
      this.width = 4;
      break;
  }
  return (this.width);
}

Pen.prototype.configure = function(canvasContext){
/*config le canvas*/
}
