$("#signup_form").submit(ev => {
  ev.preventDefault();
  var userName = $(".username").val();
  var userMail = $(".email").val();
  var pass = $(".password").val();
  var signup = $("#signup_button").val();
  var target = $("#signup_form").attr("action");
  var sendObj = {
    userName: userName,
    userMail: userMail,
    userPass: pass,
    signup_submit: signup
  };
  console.log(target);
  $.ajax({
    method: "POST",
    url: target,
    data: sendObj
  }).done(data => {
    // console.log(data);
    if (typeof JSON.parse(data) == "object") {
      $("#sign_up").hide();
      var user = JSON.parse(data);
      var success =
        "<div class='alert alert-success'>Account successfully created. You are now logged in as " +
        user.name +
        "!</div>";
      $("main.main_body").append(success);
      sessionStorage.setItem("logged_in", "true");
      setTimeout(() => {
        window.location = "../";
      }, 20000);
    } else if (data == 0) {
      $(".signup-error")
        .html(
          "Username or email already exists. Please try with a different one."
        )
        .show();
    }
  });
});
