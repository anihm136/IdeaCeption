if(sessionStorage.getItem("logged_in")==null)
{
  $("main").hide();
  $(".alert.alert-custom").show();
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
