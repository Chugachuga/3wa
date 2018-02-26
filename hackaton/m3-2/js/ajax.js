"use strict"

var answer = new Array;

function callbackquestion(response)
{
  $('.result').html(response);
}

function test(key)
{
  var value = getData(key);
  
  value++;
  console.log(key);
  console.log(value);
  store(key,value);
}

function remove()
{
  localStorage.removeItem("answer");
}
//function questionumber()
