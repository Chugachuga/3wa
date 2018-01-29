"use strict";

var num;
var result;
var random;
var x;
var y;


while (isNaN(num) || num > 10)
{
   num = parseFloat(prompt("Saisir un nombre"));
}

function test()
{
    document.write("<td><label>resultat ?</label><input type='text' id='number'><input type='submit' onClick='getnum()'></td>");
}

function getnum()
{
  var number = document.getElementById('number').value;
  if (number == result)
  {
      var t = document.getElementById("Mytable").rows[x].cells;
      t[x][y].innerHTML = number;
      alert("ok");
  }
  alert(number + result);
}

document.write("<table id='Mytable'>");
for (var x = 1; x <= num; x++)
{
  document.write("<tr>")
  for (var y = 1; y <= num; y++)
  {
    random = Math.floor(Math.random() * 3);
    result = x * y;
    if (x == y)
    {
      document.write("<td class='color'>" + result + "</td>");
    }
    else
    {
      if (random == 1)
      {
        console.log(result);
        test();
      }
      else
      {
        document.write("<td>" + result + "</td>");
      }
    }
  }
  document.write("</tr>");
}

document.write("</table>");
