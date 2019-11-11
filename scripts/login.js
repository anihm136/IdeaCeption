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
    console.log(data);
  });
  console.log("Sent ajax req")
})

$('#sign_up').click(() => {
  window.location = "../signup/"
})
