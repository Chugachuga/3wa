"use strict";

var gamerchoice;
var random;
var tab;

tab = ["pierre", "feuille", "ciseaux"];

function randomInt(max)
{
  return Math.floor(Math.random() * max);
}
random = randomInt(3);

while (gamerchoice != tab[0] && gamerchoice != tab[1] && gamerchoice != tab[2]) {
  gamerchoice = prompt("pierre, feuille, ciseaux").toLowerCase();
  switch (gamerchoice)
  {
    case "pierre":
        document.write("Vous avez choisi : " + gamerchoice + " |");
        if (tab[random] == tab[0])
        {
          document.write("Ex aequo : Ordi a joué : " + tab[random]);
        }
        else if (tab[random] == tab[1])
        {
          document.write("Vous avez perdu :  Ordi a joué " + tab[random]);
        }
        else
        {
          document.write("Vous avez gagné : Ordi a joué  " + tab[random]);
        }
        break;
    case "feuille":
        document.write("Vous avez choisi : " + gamerchoice + " |");
        if (tab[random] == tab[1])
        {
          document.write("Ex aequo : Ordi a joué : " + tab[random]);
        }
        else if (tab[random] == tab[2])
        {
          document.write("Vous avez perdu :  Ordi a joué " + tab[random]);
        }
        else
        {
          document.write("Vous avez gagné : Ordi a joué  " + tab[random]);
        }
        break;
    case "ciseaux":
        document.write("Vous avez choisi : " + gamerchoice + " |");
        if (tab[random] == tab[2])
        {
          document.write("Ex aequo : Ordi a joué : " + tab[random]);
        }
        else if (tab[random] == tab[0])
        {
          document.write("Vous avez perdu :  Ordi a joué " + tab[random]);
        }
        else
        {
          document.write("Vous avez gagné : Ordi a joué  " + tab[random]);
        }
        break;
  }
}

/*var i;
i = 0;
while (i < 20)
{
  random = randomInt(3);
  document.write(random);
  i++;
}*/
