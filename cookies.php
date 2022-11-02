<?php
include 'helpers/helper_functions.php';

$cookie_name = "fg";
$cookie_value = "John Doe";
saveCookie($cookie_name, $cookie_value); // 86400 = 1 day

?>

<!DOCTYPE html>

<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
}
?>

</body>
</html>

<script>
    var getCookies = function(){
  var pairs = document.cookie.split(";");
  var cookies = {};
  for (var i=0; i<pairs.length; i++){
    var pair = pairs[i].split("=");
    cookies[(pair[0]+'').trim()] = unescape(pair.slice(1).join('='));
  }
  return cookies;
}

fetch('https://api.ipify.org/').then(
  r => r.text()
).then(console.log);
</script>