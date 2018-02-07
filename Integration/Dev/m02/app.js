"use strict";

/*var name;
name = "varname";
console.log("name =", name);

const TAUX = 20;
console.log("TAUX =", TAUX);

var taux10 = TAUX + 10;
console.log("taux10 =", taux10);

taux10++;
console.log("taux10++ =", taux10);

taux10++;
console.log("taux10++ =", taux10);

taux10--;
console.log("taux10-- =", taux10);

taux10 = taux10 * 2 / 4;
console.log("taux10 * 2 / 4 =", taux10);*/

/*:::::::::::::::::::CALCUL TVA TTC::::::::::::::::::::::::*/
/*
const TAUX = 20;
var ttc;
var tva;
var red;

var ht = parseFloat(prompt("HT"));
if (isNaN(ht) || ht < 0)
{
  while (isNaN(ht) || ht < 0)
  {
    ht = parseFloat(prompt("HT"));
  }
}

var redquestion = confirm("Reduction ?");

if (redquestion == "true")
{
  red = parseFloat(prompt("reduction de combien ? (valeur decimale sans unité)"));
  ht = ht - (ht * (red / 100));
}

tva = ht * (TAUX / 100);
ttc = ht * (1 + (TAUX / 100));

console.log(redquestion);
console.log(red);
console.log(ht);
document.write("<p>TVA = " + tva + "</p>");
document.write("<p>TTC = " + ttc + "</p>");
*/

/*:::::::::::::::::::::CALCULATRICE:::::::::::::::::::::*/

var number1 = parseFloat(prompt("number 1"));
var op = prompt("operator (+, -, *, /)");
var number2 = parseFloat(prompt("number 2"));
var result;

if (isNaN(number1) || isNaN(number2))
{
  while (isNaN(number1) || isNaN(number2))
  {
    var number1 = parseFloat(prompt("number 1"));
    var number2 = parseFloat(prompt("number 2"));
  }
}

switch (op)
{
  case "+":
  case "plus" :
    result = number1 + number2;
    break;
  case "-":
  case "moins" :
    result = number1 - number2;
    break;
  case "*":
  case "fois" :
    result = number1 * number2;
    break;
  case "/":
  case "divisé" :
    result = number1 / number2;
    break;
  case "^":
  case "puissance" :
    result = Math.pow(number1, number2);
    break;
}

/*if (op == "+" || op == "plus")
{
  result = number1 + number2;
}

if (op == "-" || op == "moins")
{
  result = number1 - number2;
}

if (op == "*" || op == "fois")
{
  result = number1 * number2;
}

if (op == "/" || op == "divisé")
{
  result = number1 / number2;
}

if (op == "^" || op == "puissance")
{
  result = Math.pow(number1, number2);
}
*/
console.log(result);
if (isNaN(result) || result == Infinity)
{
  document.write("ERROR : Please Input Numbers variables or acceptable operator");
}

else
{
  var msg = "Result = " + result + " !";
  document.write(msg);
}

/*::::::::::::::::::TABLEAUX:::::::::::::::::::*/
/*
var tab;
tab = ["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche"];

var i = parseFloat(prompt("Entrez un nombre entre 1 et 7"));

if (isNaN(i) || i < 1 || i > 7)
{
  document.write(" Error : Entrez un nombre entre 1 et 7");
}
else
{
  alert(tab[i - 1]);
}*/

/*:::::::::::::::::::::DATE::::::::::::::::::::*/
/*
var date;
var jour;
var mois;
var year;
var nbj;
var time;
var j;
var m;
var hour;
var min;
var sec;

date = new Date();
mois = ["Janvier", "Fevrier", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout",
          "Septembre", "Octobre", "Novembre", "Decembre"];
jour = ["Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi"];
j = date.getDay();
m = date.getMonth();
nbj = date.getDate();
year = date.getFullYear();
hour = date.getHours();
min = date.getMinutes();
sec = date.getSeconds();


console.log(date);
console.log(j);
console.log(m);
console.log(nbj);
console.log(hour);
console.log(min);
console.log(sec);

document.write("Nous sommes le " + jour[j] + " " + nbj + " " + mois[m] + " " + year);
function timer()
{
  date = new Date();
  hour = date.getHours();
  min = date.getMinutes();
  sec = date.getSeconds();
  document.write(hour + ":" + min + ":" + sec + " ");
}
setInterval(function() { timer(); }, 1000);
*/

/*::::::::::::::::OBJET VOITURE::::::::::::::::*/

/*var jour;
var mois;
var date;
var year;
var car;
var j;
var m;

mois = ["Janvier", "Fevrier", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout",
          "Septembre", "Octobre", "Novembre", "Decembre"];
jour = ["Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi"];
car = new Object();
car.marque = "Mercedes";
car.year = 2010;
car.buy = new Date('2014-05-12');
car.pass = ["Jean", "Jacques"];
j = car.buy.getDay();
m = car.buy.getMonth();
date = car.buy.getDate();
year = car.buy.getFullYear();

document.write("<ul><li>Marque : " + car.marque + "</li><li> Année de construction : " + car.year + "</li>" + "</li><li>Vehicule acheté le : " + jour[j] + " " + date + " " + mois[m] + " " + year + "</li><li> Passager(s) : " + car.pass[0] + " , " + car.pass[1] + "</li></ul>");
*/
