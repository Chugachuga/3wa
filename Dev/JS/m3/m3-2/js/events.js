"use strict"

function choice()
{
  var checkedvalue = $('input[type=radio][name=radio]:checked').attr('id');
  switch (checkedvalue) {
    case "gethtml":
      $.get("php/article.php", callbackart);
      break;
    case "getjson":
      $.get("php/contacts.php", callbackcont);
      break;
    case "getfilms":
      $.get("php/films.php", callbackfilms);
      break;
    }
}
