const help_art = document.getElementById("help-art")
function show_help_article() { help_art.style.display = "flex"; }
function hide_help_article() { help_art.style.display = "none"; }

var cookies = document.cookie.split(';');

console.log(cookies);

for (var i = 0; i < cookies.length; i++) {
    var cke = cookies[i].trim();
    if (cke == "log_in_status=user_not_found") {
        alert("نام کاربری یا رمز عبور اشتباه است");
        var time = new Date();
        time.setTime(time.getTime() - (1000 * 24 * 60 * 60));
        time.toUTCString()
        document.cookie = "log_in_status=user_not_found;expires=" + time + ";path=/";
    }
}