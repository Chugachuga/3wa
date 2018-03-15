"use strict"

function Board(pen){
  this.canvas = $('#tableau')[0];
  this.isDrawing = false;
  this.context = this.canvas.getContext("2d");
  this.currentLocation = null;
  this.pen = pen;
}

Board.prototype.onMouseDown = function(){
  $('#tableau').mousedown(function(){
    program.board.isDrawing = true;
    var width = program.pen.width;
    program.board.currentLocation = program.board.getMouseLocation(event);
    program.board.context.fillStyle = program.pen.color;
    program.board.context.fillRect(program.board.currentLocation[0], program.board.currentLocation[1], width, width);
  });
}

Board.prototype.onMouseUp = function(){
  $('#tableau').mouseup(function(){
    program.board.isDrawing = false;
  });
}

Board.prototype.onMouseMove = function()
{
  program.board.onMouseDown();
  program.board.onMouseUp();
  $('#tableau').mousemove(function()
  {
    if (program.board.isDrawing)
    {
      program.board.context.lineWidth = program.pen.width;
      var tab = program.board.getMouseLocation(event);
      program.board.context.strokeStyle = program.pen.color;
      program.board.context.beginPath();
      program.board.context.moveTo(program.board.currentLocation[0],program.board.currentLocation[1]);
      program.board.context.lineTo(tab[0], tab[1]);
      program.board.context.stroke();
      program.board.currentLocation = tab;
    }
  });
}

Board.prototype.onMouseLeave = function(){
  program.board.isDrawing = false;
}

Board.prototype.Clear = function(){
  $('#erase').click(function(){
    program.board.context.clearRect(0, 0, program.board.canvas.width, program.board.canvas.height);
  });
}

Board.prototype.getMouseLocation = function(event)
{
    var canvasPos = this.canvas.getBoundingClientRect();
    var posx = event.clientX;
    var posy = event.clientY;
    var tab = new Array();
    tab[0] = posx - canvasPos.left - 4;
    tab[1] = posy - canvasPos.top - 4;
    return(tab);
}
