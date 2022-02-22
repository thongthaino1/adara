<?php //print_r($products);
//
//die();?>

<main>

    <!-- breadcrumb-area -->
    <section class="breadcrumb-area breadcrumb-bg" data-background="public/layouts/img/bg/breadcrumb_bg01.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>Shop Sidebar</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Shop</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    <!-- shop-area -->
    <section class="shop-area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-8">
                    <div class="shop-top-meta mb-35">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="shop-top-left">
                                    <ul>
                                        <li><a href="#"><i class="flaticon-menu"></i> FILTER</a></li>
                                        <li>Showing 1–9 of 80 results</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="shop-top-right">
                                    <form action="#">
                                        <select name="select">
                                            <option value="">Sort by newness</option>
                                            <option>Free Shipping</option>
                                            <option>Best Match</option>
                                            <option>Newest Item</option>
                                            <option>Size A - Z</option>
                                        </select>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <?php foreach ($products as $product){?>
                        <div class="col-xl-4 col-sm-6">
                            <div class="new-arrival-item text-center mb-50">
                                <div class="thumb mb-25">
                                    <a href="shop-details.html"><img src="public/layouts/img/product/shoes_arrival_product06.jpg" alt=""></a>
                                    <div class="product-overlay-action">
                                        <ul>
                                            <li><a href="cart.html"><i class="far fa-heart"></i></a></li>
                                            <li><a href="shop-details.html"><i class="far fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="content">
                                    <h5><a href="shop-details.html"><?php echo $product->ten_san_pham; ?></a></h5>
                                    <span class="price"><?php echo $product->don_gia; ?></span>
                                </div>
                            </div>
                        </div>
                        <?php }?>

                    </div>

                    <div class="pagination-wrap">
                        <ul>
                            <li class="prev"><a href="#">Prev</a></li>
                            <li><a href="#">1</a></li>
                            <li class="active"><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">...</a></li>
                            <li><a href="#">10</a></li>
                            <li class="next"><a href="#">Next</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4">
                    <aside class="shop-sidebar">
                        <div class="widget side-search-bar">
                            <form action="#">
                                <input type="text">
                                <button><i class="flaticon-search"></i></button>
                            </form>
                        </div>
                        <div class="widget">
                            <h4 class="widget-title">Product Categories</h4>
                            <div class="shop-cat-list">
                                <ul>
                                    <li><a href="#">Accessories</a><span>(6)</span></li>
                                    <li><a href="#">Computer</a><span>(4)</span></li>
                                    <li><a href="#">Covid-19</a><span>(2)</span></li>
                                    <li><a href="#">Electronics</a><span>(6)</span></li>
                                    <li><a href="#">Frame Sunglasses</a><span>(12)</span></li>
                                    <li><a href="#">Furniture</a><span>(7)</span></li>
                                    <li><a href="#">Genuine Leather</a><span>(9)</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="widget">
                            <h4 class="widget-title">Price Filter</h4>
                            <div class="price_filter">
                                <div id="slider-range"></div>
                                <div class="price_slider_amount">
                                    <span>Price :</span>
                                    <input type="text" id="amount" name="price" placeholder="Add Your Price" />
                                </div>
                            </div>
                        </div>
                        <div class="widget">
                            <h4 class="widget-title">Product Brand</h4>
                            <div class="sidebar-brand-list">
                                <ul>
                                    <li><a href="#">New Arrivals <i class="fas fa-angle-double-right"></i></a></li>
                                    <li><a href="#">Clothing & Accessories <i class="fas fa-angle-double-right"></i></a></li>
                                    <li><a href="#">Winter Jacket <i class="fas fa-angle-double-right"></i></a></li>
                                    <li><a href="#">Baby Clothing <i class="fas fa-angle-double-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="widget has-border">
                            <div class="sidebar-product-size mb-30">
                                <h4 class="widget-title">Product Size</h4>
                                <div class="shop-size-list">
                                    <ul>
                                        <li><a href="#">S</a></li>
                                        <li><a href="#">M</a></li>
                                        <li><a href="#">L</a></li>
                                        <li><a href="#">XL</a></li>
                                        <li><a href="#">XXL</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-product-color">
                                <h4 class="widget-title">Color</h4>
                                <div class="shop-color-list">
                                    <ul>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="widget">
                            <h4 class="widget-title">Top Items</h4>
                            <div class="sidebar-product-list">
                                <ul>
                                    <?php foreach ($productsSideBar as $product){
                                        ?>

                                    <li>
                                        <div class="sidebar-product-thumb">
                                            <a href="#"><img src="public/layouts/img/product/sidebar_product01.jpg" alt=""></a>
                                        </div>
                                        <div class="sidebar-product-content">
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <h5><a href="#"><?php echo $product->ten_san_pham; ?></a></h5>
                                            <span><?php echo $product->don_gia; ?></span>
                                        </div>
                                    </li>
                                    <?php }?>

                                </ul>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!-- shop-area-end -->

</main>
<!-- main-area-end -->