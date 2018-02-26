// STOCKAGE DATA //

function store(key, value)
{
  var myJSON = JSON.stringify(value);
  localStorage.setItem(key, myJSON);
}

function getData(key)
{
  var tab = JSON.parse(localStorage.getItem(key));
  return tab;
};
