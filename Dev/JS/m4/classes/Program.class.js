"use strict"

function Program(){
  this.pen = new Pen();
  this.board = new Board(this.pen);
  this.onClickPenColor = function(){
    $(".color").click(function(){program.pen.setColor(this.id)});
  }
  this.onClickPenWidth = function(){
    $(".style").click(function(){program.pen.setWidth(this.id)});
  }
  this.Start = function(){
    /*$('style').each(function(){
      var color = ($(this).data('color'));
      $(this).css('background', color);
    })*/
  }
}

/*Program.prototype.onClickPenCOlor = function(event){

  Sans le bien -> this = la div
  Avec le biend -> this = classe App ( ou program);
var color = $(event.currentTarget).data('color');
this.pen.setColor(color);
}
*/
