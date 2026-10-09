<!DOCTYPE html>
<html lang="ps" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ثبت‌نام</title>

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
                نوی حساب جوړ کړئ
            </h2>

            <form id="register-form">

                <label for="register-name">
                    بشپړ نوم
                </label>

                <input
                    type="text"
                    id="register-name"
                    required
                >


                <label for="register-email">
                    برېښنالیک
                </label>

                <input
                    type="email"
                    id="register-email"
                    required
                >


                <label for="register-phone">
                    د تلیفون شمېره
                </label>

                <input
                    type="tel"
                    id="register-phone"
                    required
                >


                <label for="register-password">
                    پټ نوم
                </label>

                <input
                    type="password"
                    id="register-password"
                    minlength="6"
                    required
                >


                <label for="register-confirm">
                    پټ نوم بیا ولیکئ
                </label>

                <input
                    type="password"
                    id="register-confirm"
                    minlength="6"
                    required
                >


                <button type="submit" class="main-btn">
                    ثبت‌نام
                </button>

            </form>

            <p class="form-bottom">
                مخکې حساب لرئ؟
                <a href="login.html">
                    ننوتل
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