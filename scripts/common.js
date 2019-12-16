// if (sessionStorage.getItem("logged_in") && )
if (sessionStorage.getItem("logged_in") && !document.getElementById("login")) {
  $(".login-button-header").hide();
  $(".logout-button-header").show();
} else if (
  !sessionStorage.getItem("logged_in") &&
  !document.getElementById("login")
) {
  $(".login-button-header").show();
  $(".logout-button-header").hide();
}

function login_redirect() {
  setCookie("source", window.location, 365);
  window.location = "../login";
}

function setCookie(name,value,days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days*24*60*60*1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "")  + expires + "; path=/";
}

function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
    }
    return null;
}

String.prototype.toProperCase = function () {
    return this.replace(/\w\S*/g, function(txt){return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();});
};
