$("#login_form").submit(ev => {
  ev.preventDefault();
  var userName = $(".email").val();
  var pass = $(".password").val();
  var login = $(".btn-block").val();
  var target = $("#login_form").attr("action");
  var sendObj = { userMail: userName, userPass: pass, login_submit: login };
  $.ajax({
    method: "POST",
    url: target,
    data: sendObj
  }).done(data => {
    console.log(data);
    if (typeof JSON.parse(data) == "object") {
      var user = JSON.parse(data);
      $("#login_details").hide();
      $("#login_footer").hide();
      var success =
        "<div class='alert alert-success'>You have successfully logged in as " +
        user.name +
        "!</div>";
      $("main.main_body").append(success);
      sessionStorage.setItem("logged_in", "true");
      console.log(document.cookie);
      setTimeout(() => {
        if (getCookie("source") != null) {
          window.location = getCookie("source");
        } else {
          window.location = "../";
        }
      }, 20000);
    } else if (data == 0) {
      $(".login-error")
        .html("Please check username/email")
        .show();
    } else {
      $(".login-error")
        .html("Password is incorrect. Please check and try again")
        .show();
    }
  });
});

$("#sign_up").click(() => {
  window.location = "../signup/";
});

if (sessionStorage.getItem("logged_in")) {
  $("login_details, login_footer").hide();
  $(".logout-message").show();
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
