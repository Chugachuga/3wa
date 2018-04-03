"use strict"

var currentprod;
var id    = $("#select").val();
var cart  = JSON.parse(localStorage.getItem('cart')) || {};

$("#select").ready(function()
{
  var id        = $("#select").val();
  var img       = $("#img")[0];
  var price     = $("#prix")[0];
  var content   = $("#description")[0];
  fetch(chemin + "?id=" + id).then(function(reponse)
  {
    reponse.json().then(function(product)
    {
      content.innerHTML = product['comment'];
      price.innerHTML = product['prix'];
      img.setAttribute("src", product['image']);
      currentprod = product;
    });
  });
});

$("#select").change(function()
{
  var id        = $("#select").val();
  var img       = $("#img")[0];
  var price     = $("#prix")[0];
  var content   = $("#description")[0];

  fetch(chemin + "?id=" + id).then(function(reponse)
  {
    reponse.json().then(function(product)
    {
      content.innerHTML   = product['comment'];
      price.innerHTML     = product['prix'];
      img.setAttribute("src", product['image']);
      currentprod         = product;
    });
  });
});

$("#ajouter").submit(function()
{
  event.preventDefault();

  var id         = $("#select").val();
  var quantity   = $("#quantity").val();
  var price      = $("#prix").text();
  var content    = $("#description").text();
  var name       = $("#select option[value='" + id + "']").text();
  if (quantity > 0)
  {
    addtocart(cart, id, quantity, price, content, name);
    displaycartAll(cart)
  }
});

$("#commander").submit(function()
{
  if(cart[id])
  {
    event.preventDefault();
  }
});

$(".annuler").click(function()
{
  cart = {};
  localStorage.clear();
  $(".cartajax").html("");
  return;
});

function addtocart(cart, id, quantity, price, content, name)
{
  var element = {};
  element.id = id;
  element.quantity = parseInt(quantity);

  if (!cart[element.id])
  {
    cart[element.id]              = {};
    cart[element.id]['name']      = name;
    cart[element.id]['quantity']  = element.quantity;
    cart[element.id]['price']     = parseFloat(price);
    cart[element.id]['content']   = content;
  }
  else
    cart[element.id]['quantity'] += element.quantity;
  var jsoncart = JSON.stringify(cart);
  localStorage.setItem('cart', jsoncart);
}

function displaycartbyID(cart, id)
{
  var produit = "<tr><td>" + cart[id]['name'] + "</td><td>" + cart[id]['content'] + "</td><td>" + cart[id]['price'] + "</td><td>" + cart[id]['quantity'] + "</td><td>" + cart[id]['price'] * cart[id]['quantity'] + "</td></tr>";
  return produit;
}

function displaycartAll(cart)
{
  $(".cartajax").html("");
  for (var key in cart)
  {
    $(".cartajax").append(displaycartbyID(cart, key));
  }
  $(".cartajax").append("<p>total :" + totalprice(cart) + "$</p>");
  return;
}

function totalprice(cart)
{
  var total = 0;
  for (var key in cart)
  {
    total += parseFloat(cart[key]['price']) * parseFloat(cart[key]['quantity']);
  }
  return total;
}
