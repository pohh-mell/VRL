window.fbAsyncInit = function() {
  FB.init({
      appId      : '764717310292073', // App ID
      status     : true, // check login status
      cookie     : true, // enable cookies to allow the server to access the session
      xfbml      : true,  // parse XFBML
      version    : 'v2.2'
    });
};
  // Load the SDK asynchronously
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/et_EE/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk')); 

function Login(){
  FB.login(function(response) {
    if (response.authResponse) {
      testAPI(); 
    } else {
      console.log('Authorization failed.');
    }
  }, {scope: 'public_profile,email'});
}

function testAPI() {
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', function(response) {
      console.log('Successful login for: ' + response.name);
      document.getElementById('aff').innerHTML = 'Tere tulemast, ' + response.name + '!';
      document.getElementById('out').style.visibility="visible";
      document.getElementById('kandideerimine').style.visibility="visible";
    });
  }

function myfun(){
    window.location.search += '&reload=true';
  }
  

  function LogOut() {
    FB.logout(function(response) {
      console.log('Successful logout for: ' + response.name);
      myfun();
     });
  }

