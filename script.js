/* =========================================
   د آنلاین پلورنځي JavaScript
========================================= */


/* د ټوکرۍ معلومات */

let cart = JSON.parse(localStorage.getItem("cart")) || [];


/* =========================================
   د ټوکرۍ خوندي کول
========================================= */

function saveCart() {
    localStorage.setItem("cart", JSON.stringify(cart));
}


/* =========================================
   د ټوکرۍ شمېر تازه کول
========================================= */

function updateCartCount() {

    const countElement = document.getElementById("cart-count");

    if (!countElement) {
        return;
    }

    const totalItems = cart.reduce(
        function (total, item) {
            return total + item.quantity;
        },
        0
    );

    countElement.textContent = totalItems.toLocaleString("ps-AF");
}


/* =========================================
   محصول ټوکرۍ ته اضافه کول
========================================= */

function addToCart(name, price, quantity = 1) {

    const existingProduct = cart.find(
        function (item) {
            return item.name === name;
        }
    );


    if (existingProduct) {

        existingProduct.quantity += quantity;

    } else {

        cart.push({
            name: name,
            price: Number(price),
            quantity: quantity
        });

    }


    saveCart();

    updateCartCount();

    alert("محصول په بریالیتوب سره ټوکرۍ ته اضافه شو.");
}


/* =========================================
   ټول قیمت
========================================= */

function getCartTotal() {

    return cart.reduce(
        function (total, item) {
            return total + item.price * item.quantity;
        },
        0
    );
}


/* =========================================
   د ټوکرۍ ښکاره کول
========================================= */

function showCart() {

    const container = document.getElementById("cart-container");

    if (!container) {
        return;
    }


    if (cart.length === 0) {

        container.innerHTML = `
            <div class="empty-cart">
                <h3>ستاسې د پیرودلو ټوکرۍ تشه ده.</h3>

                <a href="products.html" class="main-btn">
                    محصولات وګورئ
                </a>
            </div>
        `;

        return;
    }


    let html = `
        <div class="cart-box">
    `;


    cart.forEach(
        function (item, index) {

            const total =
                item.price * item.quantity;


            html += `
                <div class="cart-item">

                    <h3>${item.name}</h3>

                    <p>
                        د یوه محصول بیه:
                        ${item.price} ډالر
                    </p>

                    <div class="cart-controls">

                        <label>
                            شمېر:
                        </label>

                         <button type=button onclick=changeQuantity(${index}, ${item.quantity - 1}) ${item.quantity <= 1 ? 'disabled' : ''}>−</button>
 <input type=number class=cart-quantity min=1 value=${item.quantity} onchange=changeQuantity(${index}, this.value)>
 <button type=button onclick=changeQuantity(${index}, ${item.quantity + 1})>+</button>

                        <span>
                            د محصولاتو بیه:
                            ${total} ډالر
                        </span>

                        <button
                            class="remove-btn"
                            onclick="removeFromCart(${index})"
                        >
                            لرې کول
                        </button>

                    </div>

                </div>
            `;
        }
    );


    const total = getCartTotal();


    html += `
            <div class="cart-total">

                <h2>
                    ټوله بیه:
                    ${total} ډالر
                </h2>

                <br>

                <button
                    class="main-btn"
                    onclick="checkout()"
                >
                    پېرود بشپړ کړئ
                </button>

            </div>

        </div>
    `;


    container.innerHTML = html;
}


/* =========================================
   د محصول شمېر بدلول
========================================= */

function changeQuantity(index, value) {

    const quantity = Number(value);

    if (quantity < 1 || isNaN(quantity)) {
        return;
    }


    cart[index].quantity = quantity;

    saveCart();

    updateCartCount();

    showCart();
}


/* =========================================
   محصول حذف کول
========================================= */

function removeFromCart(index) {

    cart.splice(index, 1);

    saveCart();

    updateCartCount();

    showCart();
}


/* =========================================
   پېرود بشپړول
========================================= */

function checkout() {

    if (cart.length === 0) {

        alert("ستاسې د پیرودلو ټوکرۍ تشه ده.");

        return;
    }


    const total = getCartTotal();


    const confirmOrder = confirm(
        "ایا غواړئ پېرود بشپړ کړئ؟\n\n" +
        "ټوله بیه: " + total + " ډالر"
    );


    if (confirmOrder) {

        alert(
            "ستاسې پېرود په بریالیتوب سره ثبت شو."
        );


        cart = [];

        saveCart();

        updateCartCount();

        showCart();
    }
}


/* =========================================
   د Add to Cart تڼۍ
========================================= */

function setupAddToCartButtons() {

    const buttons = document.querySelectorAll(".add-cart");


    buttons.forEach(
        function (button) {

            button.addEventListener(
                "click",
                function () {

                    const name =
                        button.dataset.name;

                    const price =
                        Number(button.dataset.price);


                    let quantity = 1;


                    const quantityInput =
                        document.getElementById("quantity");


                    if (quantityInput) {

                        quantity =
                            Number(quantityInput.value);

                        if (
                            quantity < 1 ||
                            isNaN(quantity)
                        ) {
                            quantity = 1;
                        }
                    }


                    addToCart(
                        name,
                        price,
                        quantity
                    );
                }
            );

        }
    );
}


/* =========================================
   ثبت‌نام
========================================= */

function setupRegister() {

    const form =
        document.getElementById("register-form");


    if (!form) {
        return;
    }


    form.addEventListener(
        "submit",
        function (event) {

            event.preventDefault();


            const name =
                document.getElementById(
                    "register-name"
                ).value.trim();


            const email =
                document.getElementById(
                    "register-email"
                ).value.trim();


            const phone =
                document.getElementById(
                    "register-phone"
                ).value.trim();


            const password =
                document.getElementById(
                    "register-password"
                ).value;


            const confirmPassword =
                document.getElementById(
                    "register-confirm"
                ).value;


            if (
                !name ||
                !email ||
                !phone ||
                !password ||
                !confirmPassword
            ) {

                alert(
                    "مهرباني وکړئ ټولې برخې ډکې کړئ."
                );

                return;
            }


            if (password.length < 6) {

                alert(
                    "پټ نوم باید لږ تر لږه ۶ توري ولري."
                );

                return;
            }


            if (password !== confirmPassword) {

                alert(
                    "د پټ نومونو ترمنځ سمون نشته."
                );

                return;
            }


            const user = {
                name: name,
                email: email,
                phone: phone,
                password: password
            };


            localStorage.setItem(
                "user",
                JSON.stringify(user)
            );


            alert(
                "ستاسې ثبت‌نام په بریالیتوب سره ترسره شو."
            );


            window.location.href = "login.html";
        }
    );
}


/* =========================================
   Login
========================================= */

function setupLogin() {

    const form =
        document.getElementById("login-form");


    if (!form) {
        return;
    }


    form.addEventListener(
        "submit",
        function (event) {

            event.preventDefault();


            const email =
                document.getElementById(
                    "login-email"
                ).value.trim();


            const password =
                document.getElementById(
                    "login-password"
                ).value;


            const savedUser =
                JSON.parse(
                    localStorage.getItem("user")
                );


            if (!savedUser) {

                alert(
                    "لومړی باید ثبت‌نام وکړئ."
                );

                return;
            }


            if (
                email === savedUser.email &&
                password === savedUser.password
            ) {

                localStorage.setItem(
                    "loggedIn",
                    "true"
                );


                alert(
                    "تاسې په بریالیتوب سره حساب ته دننه شوئ."
                );


                window.location.href = "index.html";

            } else {

                alert(
                    "برېښنالیک یا پټ نوم ناسم دی."
                );
            }
        }
    );
}


/* =========================================
   د اړیکې فورم
========================================= */

function setupContact() {

    const form =
        document.getElementById("contact-form");


    if (!form) {
        return;
    }


    form.addEventListener(
        "submit",
        function (event) {

            event.preventDefault();


            const name =
                document.getElementById(
                    "contact-name"
                ).value.trim();


            const email =
                document.getElementById(
                    "contact-email"
                ).value.trim();


            const message =
                document.getElementById(
                    "contact-message"
                ).value.trim();


            if (!name || !email || !message) {

                alert(
                    "مهرباني وکړئ اړینې برخې ډکې کړئ."
                );

                return;
            }


            alert(
                "ستاسې پیغام په بریالیتوب سره واستول شو."
            );


            form.reset();
        }
    );
}


/* =========================================
   د پاڼې له پرانیستل کېدو وروسته
========================================= */

document.addEventListener(
    "DOMContentLoaded",
    function () {

        updateCartCount();

        showCart();

        setupAddToCartButtons();

        setupRegister();

        setupLogin();

        setupContact();

    }
);