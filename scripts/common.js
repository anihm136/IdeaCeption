// if (sessionStorage.getItem("logged_in") && )
if (sessionStorage.getItem("logged_in") && !document.getElementsByClassName("login")[0]) {
    $(".login-button-header").hide();
    $(".logout-button-header").show();
} else if (!sessionStorage.getItem("logged_in") && !document.getElementsByClassName("login")[0]) {
    $(".login-button-header").show();
    $(".logout-button-header").hide();
}
