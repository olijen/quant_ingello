<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/main.css">
    <link rel="stylesheet" href="/assets/css/vendor.css">
    <title>Document</title>
</head>
<body>
<section class="page-title-area bg-color" data-bg-color="#f4f4f4" style="background-color: rgb(244, 244, 244);">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="page-title">Shop Fullwidth</h1>
                <ul class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="current"><span>Shop Fullwidth</span></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<div class="shop-page-wrapper shop-fullwidth ptb--80">
    <div class="container">
        <div class="row mb--50">
            <div class="col-12">
                <div class="shop-toolbar">
                    <div class="row align-items-center">
                        <div class="col-md-5 mb-sm--30 mb-xs--10">
                            <div class="shop-toolbar__left">
                                <div class="product-ordering">
                                    <select class="product-ordering__select nice-select" style="display: none;">
                                        <option value="0">Default Sorting</option>
                                        <option value="1">Relevance</option>
                                        <option value="2">Name, A to Z</option>
                                        <option value="3">Name, Z to A</option>
                                        <option value="4">Price, low to high</option>
                                        <option value="5">Price, high to low</option>
                                    </select><div class="nice-select product-ordering__select" tabindex="0"><span class="current">Default Sorting</span><div class="nice-select-search-box"><input type="text" class="nice-select-search" placeholder="Search..."></div><ul class="list"><li data-value="0" class="option selected">Default Sorting</li><li data-value="1" class="option">Relevance</li><li data-value="2" class="option">Name, A to Z</li><li data-value="3" class="option">Name, Z to A</li><li data-value="4" class="option">Price, low to high</li><li data-value="5" class="option">Price, high to low</li></ul></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="shop-toolbar__right">
                                <p class="product-pages">Showing Result 08 Among 72</p>
                                <div class="product-view-mode ml--50 ml-xs--0">
                                    <a class="active" href="#" data-target="grid">
                                        <img src="/assets/img/icons/grid.png" alt="Grid">
                                    </a>
                                    <a href="#" data-target="list">
                                        <img src="/assets/img/icons/list.png" alt="Grid">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid shop-products">
        <div class="row">
            <?php foreach ($data['products'] as $index_product => $product) : ?>
                <div class="col-xl-3 col-md-4 col-sm-6 mb--50">
                    <div class="payne-product">
                        <div class="product__inner">
                            <div class="product__image">
                                <figure class="product__image--holder">
                                    <img src="/assets/img/products/product-03-270x300.jpg" alt="Product">
                                </figure>
                                <a href="/main/product_show?id=<?= $product['id']?>" class="product__overlay"></a>
                                <div class="product__action">
                                    <a data-toggle="modal" data-target="#productModal" class="action-btn">
                                        <i class="fa fa-eye"></i>
                                        <span class="sr-only">Quick View</span>
                                    </a>
                                    <a href="wishlist.html" class="action-btn">
                                        <i class="fa fa-heart-o"></i>
                                        <span class="sr-only">Add to wishlist</span>
                                    </a>
                                    <a href="compare.html" class="action-btn">
                                        <i class="fa fa-repeat"></i>
                                        <span class="sr-only">Add To Compare</span>
                                    </a>
                                    <a href="cart.html" class="action-btn">
                                        <i class="fa fa-shopping-cart"></i>
                                        <span class="sr-only">Add To Cart</span>
                                    </a>
                                </div>
                            </div>
                            <div class="product__info">
                                <div class="product__info--left">
                                    <h3 class="product__title">
                                        <a href="/main/product_show?id=<?= $product['id']?>"><?= $product['title'] ?></a>
                                    </h3>
                                    <div class="product__price">
                                        <span class="money"><?= $product['price']?></span>
                                        <span class="sign">$</span>
                                    </div>
                                </div>
                                <div class="product__info--right">
                                            <span class="product__rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>

        </div>
        <div class="row">
            <div class="col-12">
                <nav class="pagination-wrap mt--35 mt-md--25">
                    <ul class="pagination">
                        <li><span class="page-number current">1</span></li>
                        <li><a href="#" class="page-number">2</a></li>
                        <li><span class="dot"></span></li>
                        <li><span class="dot"></span></li>
                        <li><span class="dot"></span></li>
                        <li><a href="#" class="page-number">16</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>

<!--<div class="row">-->

<!--</div>-->
</body>
</html>