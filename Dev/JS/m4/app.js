"use strict";

/*function Perso(prenom)
{
  this.prenom = prenom;
  this.parler = function(text){
    alert(this.prenom + " a dit: " + text);
  }
  this.show = function(){
    $('body').append(" ¯\_(ツ)_/¯ (" + this.prenom + ")<br>");
  }
}

var perso1 = new Perso();
perso1.nom = "Lastname";
perso1.prenom = "Firstname";
perso1.parler("salut");
perso1.show();

var perso2 = new Perso("Wesh");
perso2.nom = "Lastname2";
perso2.prenom = "Firstname2";
perso2.email = "blabla";
perso2.parler("oui oui");
perso2.show();*/

function Voiture(marque, image)
{
  this.id = $('.voiture').length;
  this.marque = marque;
  this.image = image;

  this.moveRight = function()
  {
    $('#' + this.id).animate({
      marginLeft: '+=800px'
    }, 750);
  }
}

Voiture.prototype.show = function(){
  $('body').append("<img id='" + this.id + "' class='voiture' src='" + this.image + "'>");
};

var voiture1 = new Voiture("Audi", 'https://i.skyrock.net/5891/29605891/pics/991435822_small.jpg');
voiture1.show();
voiture1.moveRight();
