"use strict"

function callbackcont(response)
{
  var response = JSON.parse(response);

  for(var i = 1; i <= Object.keys(response).length; i++)
  {
    if (i == 1)
    {
      $('.result').html("<p><strong><bold>Prénom</strong>:" + response[i]['prenom'] + "</p>");
      $('.result').append("<p><i>Téléphone</i>:" + response[i]['telephone'] + "</p>");
    }
    else
    {
      $('.result').append("<p><strong>Prénom</strong>:" + response[i]['prenom'] + "</p>");
      $('.result').append("<p><i>Téléphone</i>:" + response[i]['telephone'] + "</p>");
    }
  }
}

function callbackart(response)
{
  $('.result').html(response);
}

function callbackfilms(response)
{
  $('.result').html(response)
}
