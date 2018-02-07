/*
var element = document.querySelector("button");
var element2 = document.getElementsByTagName("article")[0];

function bouton()
{
  alert("test");
}

function article()
{
  alert("test article");
}

element.addEventListener("click", bouton);
element2.addEventListener("click", article, true);
*/

/*::::::::::::::::::::::::::::VARIABLES:::::::::::::::::::::::::::::*/

var toolbar = document.getElementById('toolbar');
var previous = document.getElementById('slider-previous');
var next = document.getElementById('slider-next');
var toggle = document.getElementById('slider-toggle');
var random = document.getElementById('slider-random');
var slider = {};
slider.state = {};
slider.state.index = 1;
slider.state.click = 1;
slider.images =
[
  {
    chemin : "images/1.jpg",
    titre : "TITRE1"
  },
  {
    chemin : "images/2.jpg",
    titre : "TITRE2"
  },
  {
    chemin : "images/3.jpg",
    titre : "TITRE3"
  },
  {
    chemin : "images/4.jpg",
    titre : "TITRE4"
  },
  {
    chemin : "images/5.jpg",
    titre : "TITRE5"
  },
  {
    chemin : "images/6.jpg",
    titre : "TITRE6"
  }
];

/*:::::::::::::::::::::::::::::FUNCTION IMAGES::::::::::::::::::::::*/

slider.ImgPrevious = function()
{
  if (slider.state.index > 1)
    slider.state.index--;
  else if (slider.state.index == 1)
    slider.state.index = 6;
  slider.state.positon = slider.state.index - 1;
  slider.Showimg();
  slider.bulletcolor();
}

slider.ImgNext = function()
{
  if (slider.state.index < 6)
    slider.state.index++;
  else if (slider.state.index == 6)
    slider.state.index = 1;
  slider.state.positon = slider.state.index - 1;
  slider.Showimg();
}

slider.ClickAuto = function()
{
  if (slider.state.click == 0)
    slider.state.click = 1;
  else
    slider.state.click = 0;
}

slider.PlayAuto = function()
{
  slider.ClickAuto();
  var inter = setInterval(frame, 1000);
  function frame()
  {
    if (slider.state.click == 0)
        slider.ImgNext();
    else
        clearInterval(inter);
  }
}

slider.ImgRandom = function()
{
  var indexrandom = Math.floor(Math.random() * 6) + 1;
  if (slider.state.index == indexrandom)
    slider.ImgRandom();
  else
  {
    slider.state.index = indexrandom;
    slider.state.positon = slider.state.index - 1;
    slider.Showimg();
  }
}

/*::::::::::::::::::::::::DISPLAY IMG TEXT::::::::::::::::::::::::*/

slider.Showimg = function()
{
  var Imgsrc = document.getElementById('mySlides');
  var Imgtitre = document.getElementById('imgtitle');
  Imgsrc.src = slider.images[slider.state.index - 1].chemin;
  Imgtitre.innerHTML = slider.images[slider.state.index - 1].titre;
}

slider.Clickoutils = function()
{
  document.querySelector(".toolbar_toggle").classList.toggle('display');
}

/*::::::::::::::::::::::::::::KEYBOARD::::::::::::::::::::::::::::*/

slider.Keypresstest = function(event)
{
  var x = event.keyCode;
  if (x == 32)
    slider.PlayAuto();
  else if (x == 114)
    slider.ImgRandom();
}

slider.Keydown = function(event)
{
  var x = event.key;
  if (x == "ArrowRight")
    slider.ImgNext();
  else if (x == "ArrowLeft")
    slider.ImgPrevious();
}

/*::::::::::::::::::::::NAVIGATION BULLET::::::::::::::::::::::::*/

slider.createbullet = function()
{
  for (var i = 0; i < 6; i++)
  {
    var DivNode = document.createElement("a");
    document.querySelector(".container").appendChild(DivNode);
    DivNode.innerHTML= "<div class='divnode test'></div>";
  }
}

slider.bullet = function()
{
  slider.links = document.querySelectorAll(".divnode");
  for(var i = 0; i < slider.links.length; i++)
  {
    slider.links[i].addEventListener("click", slider.bulletindex);
  }
}

slider.bulletindex = function()
{
  slider.state.position;

  slider.state.position = Array.from(slider.links).indexOf(this);
  slider.state.index = slider.state.position + 1;
  slider.bulletcolor();
  slider.Showimg();
}

slider.bulletcolor = function()
{
  for (var i = 0; i < slider.links.length; i++)
  {
    if (i != slider.state.position)
    {
      slider.links[i].classList.remove("test");
    }
    else {
      slider.links[i].classList.add("test");
    }
  }
}

/*::::::::::::::::::::::::::::CALL FUNCTION::::::::::::::::::::::::*/

slider.createbullet();
slider.bullet();
document.addEventListener('keypress', slider.Keypresstest);
document.onkeydown = slider.Keydown;
toolbar.addEventListener('click', slider.Clickoutils);
previous.addEventListener('click', slider.ImgPrevious);
next.addEventListener('click', slider.ImgNext);
toggle.addEventListener('click', slider.PlayAuto);
random.addEventListener('click', slider.ImgRandom);
