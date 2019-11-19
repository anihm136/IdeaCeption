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
