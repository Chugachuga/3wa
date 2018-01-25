"use strict";

var gamerchoice;
var random;
var tab;

gamerchoice = prompt("pierre, feuille, ciseaux");
gamerchoice = gamerchoice.toLowerCase();
tab = ["pierre", "feuille", "ciseaux"]
function randomInt(max)
{
  return Math.floor(Math.random() * max);
}
random = randomInt(3);
document.write("Vous avez choisi : " + gamerchoice + " ")
switch (gamerchoice)
{
  case "pierre":
      if (tab[random] == tab[0])
      {
        document.write("Ex eaquo : Ordi a joué : " + tab[random]);
      }
      if (tab[random] == tab[1])
      {
        document.write("Vous avex perdu :  Ordi a joué " + tab[random]);
      }
      if (tab[random] == tab[2])
      {
        document.write("Vous avez gagné : Ordi a joué  " + tab[random]);
      }
      break;
  case "feuille":
      if (tab[random] == tab[1])
      {
        document.write("Ex eaquo : Ordi a joué : " + tab[random]);
      }
      if (tab[random] == tab[2])
      {
        document.write("Vous avex perdu :  Ordi a joué " + tab[random]);
      }
      if (tab[random] == tab[0])
      {
        document.write("Vous avez gagné : Ordi a joué  " + tab[random]);
      }
      break;
  case "ciseaux":
      if (tab[random] == tab[2])
      {
        document.write("Ex eaquo : Ordi a joué : " + tab[random]);
      }
      if (tab[random] == tab[0])
      {
        document.write("Vous avex perdu :  Ordi a joué " + tab[random]);
      }
      if (tab[random] == tab[1])
      {
        document.write("Vous avez gagné : Ordi a joué  " + tab[random]);
      }
      break;
}

/*var i;
i = 0;
while (i < 20)
{
  random = randomInt(3);
  document.write(random);
  i++;
}*/
