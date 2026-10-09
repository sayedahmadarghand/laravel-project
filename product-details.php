<!DOCTYPE html>
<html lang="ps" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>د محصول جزئیات</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header class="header">

        <div class="container header-content">

            <div class="logo">
                <h1>زموږ آنلاین پلورنځی</h1>
            </div>

            <nav class="nav">
                <a href="product-details.php" class="details-btn">
            </nav>

        </div>

    </header>


    <main class="container page-content">

        <div class="details-card">

            <div class="details-icon">
                📱
            </div>

            <div class="details-info">

                <h2>سمارټ موبایل</h2>

                <p>
                    دا یو عصري او کیفیت لرونکی سمارټ موبایل دی
                    چې د ورځني استعمال لپاره مناسب دی.
                </p>

                <p class="price">
                    ۲۵۰ ډالر
                </p>

                <p>
                    موجود شمېر: ۲۰ دانې
                </p>

                <label for="quantity">
                    شمېر:
                </label>

                <input
                    type="number"
                    id="quantity"
                    min="1"
                    value="1"
                >

                <br><br>

                <button
                    class="main-btn add-cart"
                    data-name="سمارټ موبایل"
                    data-price="250"
                >
                    ټوکرۍ ته اضافه کول
                </button>

            </div>

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