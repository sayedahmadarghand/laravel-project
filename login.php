<!DOCTYPE html>
<html lang="ps" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ننوتل - آنلاین پلورنځی</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header class="header">

        <div class="container header-content">

            <div class="logo">
                <h1>زموږ آنلاین پلورنځی</h1>
            </div>

            <nav class="nav">
                <a href="index.html">کور</a>

                <a href="products.html">محصولات</a>

                <a href="cart.html">
                    د پیرودلو ټوکرۍ
                    <span id="cart-count">۰</span>
                </a>

                <a href="login.html">ننوتل</a>

                <a href="register.html">ثبت‌نام</a>

                <a href="contact.html">اړیکه</a>
            </nav>

        </div>

    </header>


    <main class="container page-content">

        <div class="form-card">

            <h2 class="section-title">
                خپل حساب ته ننوتل
            </h2>

            <form id="login-form">

                <label for="login-email">
                    برېښنالیک
                </label>

                <input
                    type="email"
                    id="login-email"
                    placeholder="خپل برېښنالیک ولیکئ"
                    required
                >


                <label for="login-password">
                    پټ نوم
                </label>

                <input
                    type="password"
                    id="login-password"
                    placeholder="خپل پټ نوم ولیکئ"
                    required
                >


                <button type="submit" class="main-btn">
                    ننوتل
                </button>

            </form>


            <p class="form-bottom">
                حساب نه لرئ؟
                <a href="register.html">
                    ثبت‌نام وکړئ
                </a>
            </p>

        </div>

    </main>


    <footer class="footer">

        <div class="container">

            <p>
                © ۲۰۲۶ زموږ آنلاین پلورنځی - ټول حقوق خوندي دي.
            </p>

        </div>

    </footer>


    <script src="script.js"></script>

</body>
</html>