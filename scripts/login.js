$('#login_form').submit((ev) => {
  ev.preventDefault();
  var userName = $('.email').val();
  var pass = $('.password').val();
  var login = $('.btn-block').val();
  var target = $('#login_form').attr('action');
  var sendObj = {userMail: userName, userPass: pass, login_submit: login};
  console.log(target);
  $.ajax({
    method: 'POST',
    url: target,
    data: sendObj
  }).done((data) => {
     if (typeof(JSON.parse(data)) == "object") {
      var user = JSON.parse(data);
       $("#login_details").hide();
      $("#login_footer").hide();
       var success = "<div class='alert alert-success'>You have successfully logged in as " + user.name + "!</div>";
       $("main.main_body").append(success);
       sessionStorage.setItem("logged_in","true");
       setTimeout(() => {window.location = "../";},3000)
    } else {
      console.log("This is in else")
      console.log(data);
    }
    // console.log(typeof( data ));
  });
})

$('#sign_up').click(() => {
  window.location = "../signup/"
})
