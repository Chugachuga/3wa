$("body"). append("<h1>TEST APPEND</h1>");
$("body"). prepend("<h1>TEST PREPEND</h1>");
$("nav a").each(function(index){
  console.log(index);
});
$("nav a").hide();
$("nav a").show();
//$("img").fadeOut(2000);
$("img").hide().fadeIn(2000);
//$("header").remove();

$("header").hide().fadeIn(1200);
