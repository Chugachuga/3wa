"use strict"

function test()
{
  var w = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
  var h = Math.max(document.documentElement.clientHeight, window.innerHeight || 0);

  console.log(w);
  console.log(h);
  for(var i = 0; i < w; i+= 50)
  {
    $("#frag-1").append("<div style='background: url('images/post-it1.png'); position: absolute; top: 0; padding: 100px; z-index: 990; display:inline-block; width: 100px; left: " + i + "px' </div>");
  }
  console.log($("#frag-1"));
}

test();
