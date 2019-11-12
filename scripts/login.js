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
      setTimeout(() => {
        window.location = "../";
      }, 3000);
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
