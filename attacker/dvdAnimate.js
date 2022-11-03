
function load_dvd() {
  var element = 
  '<div class="box">' +
    '<img src="http://127.0.0.1:6969/datboi.gif">' +
    '<img src="http://127.0.0.1:6969/chad.gif" width="100px">' +
    '<img src="http://127.0.0.1:6969/spongeboi.gif">'  +
    '<img src="http://127.0.0.1:6969/hacked.gif">' +
    '<img src="http://127.0.0.1:6969/gif.gif">' +
  '</div><style>' +
    '.box img {display: block;border-radius: 3rem;z-index: 99;background-color: #999999;box-shadow: inset -5px -5px 5px rgba(0,0,0,.6), 15px 15px 2px rgba(0,0,0,.04);position: absolute;}'+
    '.box img:nth-of-type(1) {animation: moveX1 2s linear 0s infinite alternate, moveY1 3.4s linear 0s infinite alternate;}' +
    '.box img:nth-of-type(2) {animation: moveX2 2s linear 0s infinite alternate, moveY2 3.4s linear 0s infinite alternate;}' +
    '.box img:nth-of-type(3) {animation: moveX3 2s linear 0s infinite alternate, moveY3 3.4s linear 0s infinite alternate;}' +
    '.box img:nth-of-type(4) {animation: moveX4 2s linear 0s infinite alternate, moveY4 3.4s linear 0s infinite alternate;}' +
    '.box img:nth-of-type(5) {animation: moveX5 2s linear 0s infinite alternate, moveY5 3.4s linear 0s infinite alternate;}' +
    '@keyframes moveX1 {from { left: 0;} to { left: 85%;}} @keyframes moveY1 { from { top: 0;} to { top: 85%;}}' +
    '@keyframes moveX2 {from { left: 85%;} to { left: 0;}} @keyframes moveY2 { from { top: 85%} to { top: 0;}}' +
    '@keyframes moveX3 {from { left: 50%;} to { left: 25%;}} @keyframes moveY3 { from { top: 50%} to { top: 0;}}' +
    '@keyframes moveX4 {from { left: 55%;} to { left: 40%;}} @keyframes moveY4 { from { top: 25%} to { top: 6%;}}' +
    '@keyframes moveX5 {from { left: 15%;} to { left: 50%;}} @keyframes moveY5 { from { top: 15%} to { top: 50%;}}' +
    '</script>';

  var h = document.getElementsByTagName("body")[0];
  h.insertAdjacentHTML("afterend", element); 
}

load_dvd();