<!DOCTYPE html>
<html lang="ps" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>اړیکه</title>

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
                له موږ سره اړیکه ونیسئ
            </h2>

            <form id="contact-form">

                <label for="contact-name">
                    نوم
                </label>

                <input
                    type="text"
                    id="contact-name"
                    required
                >


                <label for="contact-email">
                    برېښنالیک
                </label>

                <input
                    type="email"
                    id="contact-email"
                    required
                >


                <label for="contact-phone">
                    د تلیفون شمېره
                </label>

                <input
                    type="tel"
                    id="contact-phone"
                >


                <label for="contact-message">
                    ستاسې پیغام
                </label>

                <textarea
                    id="contact-message"
                    rows="6"
                    required
                ></textarea>


                <button type="submit" class="main-btn">
                    پیغام واستوئ
                </button>

            </form>

        </div>


        <div class="contact-info">

            <h2>زموږ د اړیکې معلومات</h2>

            <p>
                📧 برېښنالیک:
                info@example.com
            </p>

            <p>
                📞 د تلیفون شمېره:
                0700000000
            </p>

            <p>
                📍 پته:
                کندهار، افغانستان
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