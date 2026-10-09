* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

html {
    scroll-behavior: smooth;
}

body {
    font-family: Tahoma, Arial, sans-serif;
    background-color: #f5f7fb;
    color: #222;
    line-height: 1.8;
}

a {
    text-decoration: none;
}

button,
input,
textarea {
    font-family: inherit;
}

.container {
    width: 90%;
    max-width: 1200px;
    margin: auto;
}


/* Header */

.header {
    background-color: #0d47a1;
    color: white;
    padding: 20px 0;
    box-shadow: 0 3px 12px rgba(0, 0, 0, 0.15);
}

.header-content {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 25px;
}

.logo h1 {
    font-size: 28px;
    margin-bottom: 3px;
}

.logo p {
    color: #dbeafe;
    font-size: 14px;
}


/* Navigation */

.nav {
    display: flex;
    align-items: center;
    gap: 8px;
    flex-wrap: wrap;
}

.nav a {
    color: white;
    padding: 9px 13px;
    border-radius: 6px;
    transition: 0.3s;
    font-size: 15px;
}

.nav a:hover {
    background-color: #1976d2;
}

#cart-count {
    background-color: #ff9800;
    color: white;
    padding: 1px 7px;
    border-radius: 20px;
    font-size: 12px;
}


/* Hero */

.hero {
    background: linear-gradient(135deg, #1565c0, #42a5f5);
    color: white;
    text-align: center;
    padding: 90px 20px;
}

.hero h2 {
    font-size: 40px;
    margin-bottom: 15px;
}

.hero p {
    font-size: 18px;
    max-width: 700px;
    margin: auto;
}

.btn {
    display: inline-block;
    margin-top: 25px;
    background-color: white;
    color: #0d47a1;
    padding: 12px 28px;
    border-radius: 7px;
    font-weight: bold;
    transition: 0.3s;
}

.btn:hover {
    background-color: #e3f2fd;
}


/* Sections */

.section {
    padding: 60px 0;
}

.light-section {
    background-color: #eef4fa;
}

.section-title {
    text-align: center;
    color: #0d47a1;
    font-size: 30px;
    margin-bottom: 35px;
}


/* Categories */

.category-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
}

.category-card {
    background-color: white;
    padding: 28px 20px;
    text-align: center;
    border-radius: 12px;
    box-shadow: 0 5px 18px rgba(0, 0, 0, 0.07);
    transition: 0.3s;
}

.category-card:hover {
    transform: translateY(-6px);
}

.category-icon {
    font-size: 45px;
    margin-bottom: 10px;
}

.category-card h3 {
    color: #1565c0;
    margin-bottom: 8px;
}

.category-card p {
    color: #666;
    margin-bottom: 12px;
}

.category-card a {
    color: #1565c0;
    font-weight: bold;
}


/* Products */

.product-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 25px;
}

.product-card {
    background-color: white;
    padding: 25px;
    border-radius: 12px;
    text-align: center;
    box-shadow: 0 5px 18px rgba(0, 0, 0, 0.08);
    transition: 0.3s;
}

.product-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.12);
}

.product-icon {
    font-size: 60px;
    margin-bottom: 12px;
}

.product-card h3 {
    color: #1565c0;
    font-size: 21px;
    margin-bottom: 8px;
}

.product-description {
    color: #666;
    min-height: 55px;
}

.price {
    color: #0d47a1;
    font-size: 20px;
    font-weight: bold;
    margin: 15px 0;
}

.product-buttons {
    display: flex;
    justify-content: center;
    gap: 8px;
    flex-wrap: wrap;
}

.details-btn,
.add-cart,
.main-btn {
    border: none;
    cursor: pointer;
    padding: 10px 15px;
    border-radius: 6px;
    font-size: 14px;
}

.details-btn {
    background-color: #e3f2fd;
    color: #0d47a1;
}

.details-btn:hover {
    background-color: #bbdefb;
}

.add-cart,
.main-btn {
    background-color: #1565c0;
    color: white;
}

.add-cart:hover,
.main-btn:hover {
    background-color: #0d47a1;
}


/* Page */

.page-content {
    padding-top: 50px;
    padding-bottom: 60px;
    min-height: 600px;
}


/* Product Details */

.details-card {
    background-color: white;
    max-width: 900px;
    margin: auto;
    padding: 45px;
    border-radius: 15px;
    box-shadow: 0 6px 25px rgba(0, 0, 0, 0.08);
    display: flex;
    align-items: center;
    gap: 50px;
}

.details-icon {
    font-size: 140px;
    min-width: 220px;
    text-align: center;
}

.details-info {
    flex: 1;
}

.details-info h2 {
    color: #0d47a1;
    font-size: 32px;
    margin-bottom: 15px;
}

.details-info p {
    margin-bottom: 10px;
    color: #555;
}

#quantity {
    width: 100px;
    padding: 10px;
    margin-right: 8px;
    border: 1px solid #ccc;
    border-radius: 6px;
}


/* Forms */

.form-card {
    background-color: white;
    max-width: 600px;
    margin: auto;
    padding: 40px;
    border-radius: 14px;
    box-shadow: 0 6px 25px rgba(0, 0, 0, 0.08);
}

.form-card form {
    display: flex;
    flex-direction: column;
}

.form-card label {
    margin-bottom: 6px;
    margin-top: 14px;
    font-weight: bold;
}

.form-card input,
.form-card textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 7px;
    outline: none;
    font-size: 15px;
}

.form-card input:focus,
.form-card textarea:focus {
    border-color: #1565c0;
    box-shadow: 0 0 5px rgba(21, 101, 192, 0.2);
}

.form-card .main-btn {
    margin-top: 22px;
}

.form-bottom {
    text-align: center;
    margin-top: 20px;
}

.form-bottom a {
    color: #1565c0;
    font-weight: bold;
}


/* Cart */

.cart-box {
    background-color: white;
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
}

.cart-item {
    border-bottom: 1px solid #ddd;
    padding: 20px 0;
}

.cart-item:last-child {
    border-bottom: none;
}

.cart-item h3 {
    color: #1565c0;
    margin-bottom: 10px;
}

.cart-controls {
    display: flex;
    align-items: center;
    gap: 10px;
    flex-wrap: wrap;
}

.cart-quantity {
    width: 80px;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 6px;
}

.remove-btn {
    background-color: #d32f2f;
    color: white;
    border: none;
    padding: 8px 14px;
    border-radius: 6px;
    cursor: pointer;
}

.remove-btn:hover {
    background-color: #b71c1c;
}

.cart-total {
    margin-top: 25px;
    padding-top: 20px;
    border-top: 2px solid #ddd;
    text-align: center;
}

.empty-cart {
    background-color: white;
    text-align: center;
    padding: 50px 20px;
    border-radius: 12px;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.07);
}

.empty-cart h3 {
    color: #0d47a1;
    margin-bottom: 20px;
}


/* Contact */

.contact-info {
    background-color: white;
    max-width: 600px;
    margin: 30px auto 0;
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.07);
}

.contact-info h2 {
    color: #0d47a1;
    margin-bottom: 15px;
}

.contact-info p {
    background-color: #f1f6fc;
    padding: 10px;
    margin-top: 10px;
    border-radius: 6px;
}


/* Footer */

.footer {
    background-color: #0d47a1;
    color: white;
    text-align: center;
    padding: 25px;
}


/* Responsive */

@media (max-width: 1000px) {

    .header-content {
        flex-direction: column;
        text-align: center;
    }

    .category-grid {
        grid-template-columns: repeat(2, 1fr);
    }

    .product-grid {
        grid-template-columns: repeat(2, 1fr);
    }

    .details-card {
        flex-direction: column;
        text-align: center;
    }
}


@media (max-width: 600px) {

    .container {
        width: 94%;
    }

    .nav {
        flex-direction: column;
        width: 100%;
    }

    .nav a {
        width: 100%;
        text-align: center;
    }

    .hero {
        padding: 60px 15px;
    }

    .hero h2 {
        font-size: 29px;
    }

    .category-grid {
        grid-template-columns: 1fr;
    }

    .product-grid {
        grid-template-columns: 1fr;
    }

    .details-card {
        padding: 25px;
    }

    .details-icon {
        min-width: auto;
        font-size: 100px;
    }

    .form-card {
        padding: 25px 20px;
    }

    .product-buttons {
        flex-direction: column;
    }

    .details-btn,
    .add-cart {
        width: 100%;
    }
}