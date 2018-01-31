"use strict"

var diff;
var armor;
var sword;
var pdvjoueur;
var pdvdragon;
var dmg;
var dmgdrag;

const FACILE = 1;
const MOYEN = 2;
const HARD = 3;

const SWORD1 = 1;
const SWORD2 = 2;
const SWORD3 = 3;

const ARMOR1 = 1;
const ARMOR2 = 2;
const ARMOR3 = 3;

function Initialize()
{
  diff = parseFloat(prompt("Difficulté (1, 2, 3)"));
  armor = parseFloat(prompt("Armure (1, 2, 3)"));
  sword = parseFloat(prompt("Epée (1, 2, 3)"));
  pdvjoueur = 2000;
  pdvdragon = 2500;
}

function DamageScale()
{
  dmg = Math.floor(Math.random() * 30) + 60;
  dmgdrag = Math.floor(Math.random() * 50) + 90;
}

function DommageJoueur(sword)
{
  var damage;
  switch (sword)
  {
    case SWORD1:
      damage = dmg + (dmg * SWORD1);
      break;
    case SWORD2:
      damage = dmg + (dmg * SWORD2);
      break;
    case SWORD3:
      damage = dmg + (dmg * SWORD3);
      break;
  }
  return parseInt(damage);
}

function DommageDragon(diff, armor)
{
  var damagedrag;
  switch (diff)
  {
    case FACILE:
      damagedrag = dmgdrag + (dmgdrag * FACILE * 0) - (dmgdrag * armor * 10 / 100);
      break;
    case MOYEN:
      damagedrag = dmgdrag + (dmgdrag * MOYEN) - (dmgdrag * armor * 10 / 100);
      break;
    case HARD:
      damagedrag = dmgdrag + (dmgdrag * HARD) - (dmgdrag * armor * 10 / 100);
      break;
  }
  return parseInt(damagedrag);
}

function sleep(delay)
{
        var start = new Date().getTime();
        while (new Date().getTime() < start + delay);
}

function GameLoop()
{
  while (pdvjoueur > 0 && pdvdragon > 0)
  {
    DamageScale();
    var vitessejoueur = Math.floor(Math.random() * 100);
    var vitessedragon = Math.floor(Math.random() * 100);
    if (vitessejoueur >= vitessedragon)
    {
      pdvdragon -= DommageJoueur(sword);
      document.write("<p class='joueurtape'>**JOUEUR TAPE ** : " + DommageJoueur(sword) + " // PDV DRAGON = " + pdvdragon + "</p>");
    }
    else
    {
      pdvjoueur -= DommageDragon(diff, armor);
      document.write("<p class='dragontape'> **DRAGON TAPE ** : " + DommageDragon(diff,armor) + " // PDV JOUEUR = " + pdvjoueur + "</p>");
    }
  }
  if (pdvjoueur <= 0)
    document.write("<p class='dwin'>*****D R A G O N  W I N*****</p>");
  else if (pdvdragon <=0)
    document.write("<p class='jwin'>*****J O U E U R  W I N*****</p>");
}

function StartGame()
{
  Initialize();
  document.write("<p class='jwin'>JOUEUR PDV: " + pdvjoueur + "</p>");
  document.write("<p class='dwin'>DRAGON PDV: " + pdvdragon + "</p>");
  GameLoop();
}

StartGame();
