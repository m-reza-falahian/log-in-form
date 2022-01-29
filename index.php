<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ورود</title>
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="https://gitcdn.ir/library/PersianFonts/vazir/style.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.2/font/bootstrap-icons.min.css">
</head>

<body dir="rtl">
    <article class="help-article" id="help-art">
        <i class="bi bi-x-circle-fill help-bi-x" onclick="hide_help_article()"></i>
        <h3>راهنما</h3>
        <p>برای ورود به طورآزمایشی : <br>نام کاربری = user <br> رمز ورود = a1b2c3</p>
        <br>
        <br>
        <p>برای ورود به طورآزمایشی : <br>نام کاربری = admin <br> رمز ورود = a1b2c3</p>
    </article>
    <section class="section" onclick="show_help_article()">
        <span id="section-span">راهنما</span>
        <i class="bi bi-question-circle"></i>
    </section>
    <main class="main">
        <div class="form-title">
            <h1>فرم ورود</h1>
        </div>
        <div class="form">
            <form action="./php/main.php" method="post">
                <label for="user-name">نام کاربری</label>
                <input type="text" name="user-name" title="نام کاربری" required>
                <label for="password">رمز ورود</label>
                <input type="password" name="password" title="رمز ورود" required>
                <span><a href="">فراموشی رمزعبور</a></span>
                <input type="submit" value="ورود" class="submit" title="ورود">
            </form>
        </div>
    </main>
    <footer class="footer">
        <p>طراحی و توسعه یافته توسط Mr.F</p>
    </footer>
</body>
<script src="./js/main.js"></script>

</html>