// ADD REMOVE EDIT IN DATABASE //

var contacts = new Array;

function addContact()
{
  var contacts = getData("contacts");

  if (contacts == null)
  {
    contacts = [];
    store("contacts", contacts);
  }

  var contact =
  {
    nom: $("#lastname").val(),
    prenom: $("#firstname").val(),
    numero: $("#phonenumber").val(),
    civilite: $("#civil").val()
  }
  contacts.push(contact);
  store("contacts", contacts);
  location.reload();
}

function removeContact()
{
  if(removeAllContact() || !$("li"))
  {
    Display();
    return;
  }
  var tab = getData("contacts");
  for (var i = 0; i < $("li").length; i++)
  {
    if ($("li")[i].classList.value == "select")
      tab.splice(i, 1);
  }
  localStorage.removeItem("contacts");
  store("contacts", tab);
  location.reload();
}

function removeAllContact()
{
  for (var i = 0; i < $("li").length; i++)
  {
    if ($("li")[i].classList.value == "select")
      return 0;
  }
  localStorage.removeItem("contacts");
  return 1;
}

function infosContact()
{
  $(".edit").remove();
  tab = getData("contacts");
  for (var i = 0; i < $("li").length; i++)
  {
    if ($("li")[i].classList.value == "select")
    {
      $('.list').append("<div class='edit' value=" + i + "><h1>" + tab[i]['civilite'] + " " + tab[i]['nom'] + " " + tab[i]['prenom'] + "</h1><h2>" + tab[i]['numero'] + "</h2></div>");
    }
  }
}

function editContact()
{
  $(".editbutton").removeClass("select");
  $(this).toggleClass("select");
  tab = getData("contacts");
  $(".editform").remove();
  var i = this.value;
  if (this.classList.value == "editbutton select")
  {
    $(".list").append("<section class='editform'><h1>Editer</h1><label for='civil'>Civilité</label><select id='civil2'><option value='MR'>Monsieur</option><option value='MME'>Madame</option></select><div class='nom'><label for='lastname'>Nom</label><input type='text' value='" + tab[i]['nom'] + "' id='lastname2'></div><div class='prenom'><label for='firstname'>Prenom</label><input type='text' id='firstname2' value='" + tab[i]['prenom'] + "'></div><div class='tel'><label for='phonenumber'>Numero de Téléphone</label><input type='text' id='phonenumber2' value='" + tab[i]['numero'] + "'><button id='editer' value='" + i +"'>Editer</button></section>");
  }
}

function changeContact()
{
  var contacts = getData("contacts");
  var contact2 =
  {
    nom: $("#lastname2").val(),
    prenom: $("#firstname2").val(),
    numero: $("#phonenumber2").val(),
    civilite: $("#civil2").val()
  }

  var index = $("#editer").val();
  contacts[index]['nom'] = contact2['nom'];
  contacts[index]['prenom'] = contact2['prenom'];
  contacts[index]['numero'] = contact2['numero'];
  contacts[index]['civilite'] = contact2['civilite'];
  store("contacts", contacts);
  location.reload();
}

function Display()
{
  $('ul li').remove();
  var tab = getData("contacts");
  if (tab)
  {
    for (var i = 0; i < tab.length; i++)
    {
      $('.list ul').append("<div class='test'><li value=" + i + ">" + tab[i]['civilite'] + " " + tab[i]['prenom'] + " " + tab[i]['nom'] + " " + tab[i]['numero'] + "</li><button class='editbutton' value=" + i + "><i class='fas fa-edit'></i></button></div>");
    }
  }
}

function showadd()
{
  $(".form").toggleClass("show");
}

function Clickli()
{
  $(this).toggleClass("select");
  infosContact();
}
