// CODE PRINCIPALE //

Display();
$(function() {
    $("body").on("click", "#submit", addContact);
    $("body").on("click", "#add", showadd);
    $("li").on("click", Clickli);
    $("body").on("click", "#remove", removeContact);
    $(".editbutton").on("click", editContact);
    $("body").on("click", "#editer", changeContact);
})
