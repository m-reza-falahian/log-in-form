const help_art = document.getElementById("help-art");
const help_art_x = document.getElementById("help-art-x");
function show_help_article() { help_art.style.display = "flex"; }
function hide_help_article() { help_art.style.display = "none"; }
function change_help_art_x() { help_art_x.className = "bi bi-x help-bi-x" };
function unchange_help_art_x() { help_art_x.className = "bi bi-x-circle-fill help-bi-x" };

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
    } else if (cke == "log_in_status=mysql_is_not_conected") {
        alert("اتصال با پایگاه داده برقرار نشد");
        var time = new Date();
        time.setTime(time.getTime() - (1000 * 24 * 60 * 60));
        time.toUTCString()
        document.cookie = "log_in_status=user_not_found;expires=" + time + ";path=/";
    }
}