$('#signup_form').submit((ev) => {
  ev.preventDefault();
  var userName = $('.username').val();
  var userMail = $('.email').val();
  var pass = $('.password').val();
  var signup = $('#signup_button').val();
  var target = $('#signup_form').attr('action');
  var sendObj = {userName: userName, userMail: userMail, userPass: pass, signup_submit: signup};
  console.log(target);
  $.ajax({
    method: 'POST',
    url: target,
    data: sendObj
  }).done((data) => {
    console.log(data);
  });
  console.log("Sent ajax req")
})

