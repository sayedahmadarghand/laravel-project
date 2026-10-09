<?php
if (!isset($result) || $result === false) {
    http_response_code(500);
    exit('د محصولاتو ترلاسه کولو کې ستونزه ده.');
}

$icons = [
    'موبایل' => '📱',
    'لپټاپ' => '💻',
    'هیډفون' => '🎧',
    'سمارټ واچ' => '⌚',
    'بوټان' => '👟',
    'کمیس' => '👕'
];
?>
<!DOCTYPE html>
<html lang="ps" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>محصولات - آنلاین پلورنځی</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<header class="header">
    <div class="container header-content">
        <div class="logo">
            <h1>زموږ آنلاین پلورنځی</h1>
        </div>

        <nav class="nav">
            <a href="/">کور</a>
            <a href="/products">محصولات</a>
            <a href="/cart.php">د پیرودلو ټوکرۍ</a>
            <a href="/login.php">ننوتل</a>
            <a href="/register.php">ثبت‌نام</a>
            <a href="/contact.php">اړیکه</a>
        </nav>
    </div>
</header>

<main class="container page-content">
    <h2 class="section-title">ټول محصولات</h2>

    <div class="product-grid">

        <?php while ($product = $result->fetch_assoc()): ?>
            <div class="product-card">

                <div class="product-icon">
                    <?= $icons[$product['name']] ?? '🛍️' ?>
                </div>

                <h3>
                    <?= htmlspecialchars($product['name'], ENT_QUOTES, 'UTF-8') ?>
                </h3>

                <p class="product-description">
                    <?= htmlspecialchars($product['description'] ?? '', ENT_QUOTES, 'UTF-8') ?>
                </p>

                <p class="price">
                    <?= number_format((float)$product['price'], 2) ?> افغانۍ
                </p>

                <div class="product-buttons">
                    <a href="/product-details.php?id=<?= (int)$product['id'] ?>"
                       class="details-btn">
                        جزئیات
                    </a>

                    <button
                        type="button"
                        class="add-cart"
                        data-id="<?= (int)$product['id'] ?>"
                        data-name="<?= htmlspecialchars($product['name'], ENT_QUOTES, 'UTF-8') ?>"
                        data-price="<?= (float)$product['price'] ?>">
                        ټوکرۍ ته اضافه کول
                    </button>
                </div>

            </div>
        <?php endwhile; ?>

    </div>
</main>

<footer class="footer">
    <div class="container">
        <p>© ۲۰۲۶ زموږ آنلاین پلورنځی - ټول حقوق خوندي دي.</p>
    </div>
</footer>

<script src="/script.js"></script>

</body>
</html>