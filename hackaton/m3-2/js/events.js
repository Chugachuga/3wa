"use strict"

function choice()
{
  var i = $('button[type="button"][id="execute"]').attr('value');
  i++;
  var checkedvalue = $('input[type=radio][name=radio]:checked').attr('id');
  if(i > 5)
  {
    remove();
    header("location: ../index.html");
    exit();
  }
  $.get("php/question" + i + ".php" , callbackquestion);
  $("#execute").attr("value", i);

  //if (i == value)
  //exit();
}
