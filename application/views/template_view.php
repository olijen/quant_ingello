<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">


<html lang="ru">
<head>
	<meta charset=utf-8">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link rel = "stylesheet" href = "/vendor.css">
    <link rel = "stylesheet" href = "/main.css">
    <link rel="stylesheet" href="/main.js">
    <link rel="stylesheet" href="/vendor.js">
    <link rel="stylesheet" href="/header.html">
    <link rel="stylesheet" href="/any_files/footer.html">
    Content-Type: text/html; charset=utf-8'
    <title>Главная</title>

    <style>
        body{
            font-family: 'Poppins', sans-serif;  ;
        }
        * {
            box-sizing: border-box;
        }
        .page {
            display: flex;
            justify-content: space-between;
            text-align: center;

        }
        .page .left {
            border-right: 3px solid #367fca;
            width: 15%;
        }
        .page .right {
            padding-left: 10px;
            width: 100%;
        }
        form span {
            display: block;
        }
    </style>
</head>
<body>
<div class="header__inner header--fixed">
    <div class="container">
        <div class="header__main">

            <div class="header__col header__center">
                <nav class="main-navigation d-none d-lg-block">
                    <ul class="mainmenu">
                        <li class="mainmenu__item menu-item-has-children position-relative">
                            <a href="/any_files/reg.php" class="mainmenu__link">Home</a>
                        </li>
                        <li class="mainmenu__item menu-item-has-children position-static">
                            <a href="#" class="mainmenu__link">Shop</a>
                            <div class="inner-menu megamenu-holder">
                                <ul class="megamenu">
                                    <li>
                                        <a class="megamenu-title" href="/main/index">Show all Product</a>
                                    </li>
                            </div>
                        </li>
                        <li class="mainmenu__item menu-item-has-children position-relative">
                            <a href="#" class="mainmenu__link">Pages</a>

                        </li>
                        <li class="mainmenu__item menu-item-has-children position-relative">
                            <a href="#" class="mainmenu__link">Blog</a>

                        </li>
                        <li class="mainmenu__item">
                            <a href="contact-us.html" class="mainmenu__link">Contact Us</a>
                        </li>
                    </ul>
                </nav>
            </div>

        </div>
    </div>
</div><br><br><br>

<div class="page">
        <div class="right">
            <?php  include 'application/views/'.$content_view; ?>
        </div>
    </div>
<footer class="footer bg-color pt--70 pt-xs--60" data-bg-color="#f4f8fa" style="background-color: rgb(244, 248, 250);">
    <div class="container">
        <div class="row border-bottom pb--60 pb-sm--28 pb-xs--49">
            <div class="col footer-column-1 mb-sm--42">
                <div class="footer-widget">
                    <div class="textwidget">
                        <figure class="footer-logo mb--10">
                            <img src="assets/img/logo/logo.png" alt="Logo">
                        </figure>
                    </div>
                    <div class="address-widget">
                        <address>1203 Town Center Orive #L 335458 USA</address>
                        <a href="tel:+84112345678">+841 123 456 78</a>
                        <a href="mailto:info@company.com">info@company.com</a>
                    </div>
                </div>
            </div>
            <div class="col footer-column-2 mb-md--33">
                <div class="footer-widget">
                    <h3 class="widget-title mb--35 mb-sm--15">Store Menu</h3>
                    <ul class="footer-menu">
                        <li>
                            <a href="shop.html">
                                <i class="fa fa-angle-right"></i>
                                <span>Best Seller</span>
                            </a>
                        </li>
                        <li>
                            <a href="shop.html">
                                <i class="fa fa-angle-right"></i>
                                <span>New Arrivals</span>
                            </a>
                        </li>
                        <li>
                            <a href="shop.html">
                                <i class="fa fa-angle-right"></i>
                                <span>Men</span>
                            </a>
                        </li>
                        <li>
                            <a href="shop.html">
                                <i class="fa fa-angle-right"></i>
                                <span>Women</span>
                            </a>
                        </li>
                        <li>
                            <a href="shop.html">
                                <i class="fa fa-angle-right"></i>
                                <span>Accessories</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col footer-column-3 mb-sm--33">
                <div class="footer-widget">
                    <h3 class="widget-title mb--35 mb-sm--15">Information</h3>
                    <ul class="footer-menu">
                        <li>
                            <a href="#">
                                <i class="fa fa-angle-right"></i>
                                <span>About Us</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-angle-right"></i>
                                <span>Delivery Information</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-angle-right"></i>
                                <span>Privacy Policy</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-angle-right"></i>
                                <span>Terms &amp; Conditions</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-angle-right"></i>
                                <span>Look Books</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col footer-column-4 mb-xs--33">
                <div class="footer-widget">
                    <h3 class="widget-title mb--35 mb-sm--15">Question</h3>
                    <div class="footer-widget">
                        <ul class="footer-menu">
                            <li>
                                <a href="#">
                                    <i class="fa fa-angle-right"></i>
                                    <span>Help</span>
                                </a>
                            </li>
                            <li>
                                <a href="order-tracking.html">
                                    <i class="fa fa-angle-right"></i>
                                    <span>Track Order</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-angle-right"></i>
                                    <span>Support</span>
                                </a>
                            </li>
                            <li>
                                <a href="shop.html">
                                    <i class="fa fa-angle-right"></i>
                                    <span>Shopping &amp; Delivery</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-angle-right"></i>
                                    <span>FAQs</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col footer-column-5">
                <div class="footer-widget">
                    <h3 class="widget-title mb--35 mb-sm--15">My Account</h3>
                    <ul class="footer-menu">
                        <li>
                            <a href="my-account.html">
                                <i class="fa fa-angle-right"></i>
                                <span>My Account</span>
                            </a>
                        </li>
                        <li>
                            <a href="order-tracking.html">
                                <i class="fa fa-angle-right"></i>
                                <span>Order Delivery</span>
                            </a>
                        </li>
                        <li>
                            <a href="wishlist.html">
                                <i class="fa fa-angle-right"></i>
                                <span>Wishlist</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-angle-right"></i>
                                <span>Newsletter</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row ptb--20">
            <div class="col-12 text-center">
                <p class="copyright-text">Payne © 2019 all rights reserved</p>
                <div class="social space-10">
                    <a href="https://www.facebook.com" target="_blank" rel="noopener noreferrer" class="social__link">
                        <i class="fa fa-facebook"></i>
                        <span class="sr-only">Facebook</span>
                    </a>
                    <a href="https://www.twitter.com" target="_blank" rel="noopener noreferrer" class="social__link">
                        <i class="fa fa-twitter"></i>
                        <span class="sr-only">Twitter</span>
                    </a>
                    <a href="https://www.linkedin.com" target="_blank" rel="noopener noreferrer" class="social__link">
                        <i class="fa fa-linkedin"></i>
                        <span class="sr-only">Linkedin</span>
                    </a>
                    <a href="https://www.instagram.com" target="_blank" rel="noopener noreferrer" class="social__link">
                        <i class="fa fa-instagram"></i>
                        <span class="sr-only">Instagram</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>
</html>