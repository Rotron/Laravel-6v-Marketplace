@extends('layout')
@section('title', '4in1 Telecom || Single Product')

@section('content')
      <!-- BREADCRUMBS SETCTION START -->
      <div class="breadcrumbs-section plr-200 mb-80">
            <div class="breadcrumbs overlay-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="breadcrumbs-inner">
                                <h1 class="breadcrumbs-title">Single Product</h1>
                                <ul class="breadcrumb-list">
                                    <li><a href="{{ url('/#') }}">Home</a></li>
                                    <li>Single Product</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- BREADCRUMBS SETCTION END -->

        <!-- Start page content -->
        <section id="page-content" class="page-wrapper">

            <!-- SHOP SECTION START -->
            <div class="shop-section mb-80">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 col-xs-12">
                            <!-- single-product-area start -->
                            <div class="single-product-area mb-80">
                                <div class="row">
                                    <!-- imgs-zoom-area start -->
                                    <div class="col-md-5 col-sm-5 col-xs-12">
                                        <div class="imgs-zoom-area">
                                            <img id="zoom_03" src="{{ asset('frontend/img/product/6.jpg') }}" data-zoom-image="{{ asset('frontend/img/product/6.jpg') }}" alt="">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <div id="gallery_01" class="carousel-btn slick-arrow-3 mt-30">
                                                        <div class="p-c">
                                                            <a href="{{ url('/#') }}" data-image="{{ asset('frontend/img/product/2.jpg') }}" data-zoom-image="{{ asset('frontend/img/product/2.jpg') }}">
                                                                <img class="zoom_03" src="{{ asset('frontend/img/product/2.jpg') }}" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="p-c">
                                                            <a href="{{ url('/#') }}" data-image="{{ asset('frontend/img/product/3.jpg') }}" data-zoom-image="{{ asset('frontend/img/product/3.jpg') }}">
                                                                <img class="zoom_03" src="{{ asset('frontend/img/product/3.jpg') }}" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="p-c">
                                                            <a href="{{ url('/#') }}" data-image="{{ asset('frontend/img/product/4.jpg') }}" data-zoom-image="{{ asset('frontend/img/product/4.jpg') }}">
                                                                <img class="zoom_03" src="{{ asset('frontend/img/product/4.jpg') }}" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="p-c">
                                                            <a href="{{ url('/#') }}" data-image="{{ asset('frontend/img/product/5.jpg') }}" data-zoom-image="{{ asset('frontend/img/product/5.jpg') }}">
                                                                <img class="zoom_03" src="{{ asset('frontend/img/product/5.jpg') }}" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="p-c">
                                                            <a href="{{ url('/#') }}" data-image="{{ asset('frontend/img/product/6.jpg') }}" data-zoom-image="{{ asset('frontend/img/product/6.jpg') }}">
                                                                <img class="zoom_03" src="{{ asset('frontend/img/product/6.jpg') }}" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="p-c">
                                                            <a href="{{ url('/#') }}" data-image="{{ asset('frontend/img/product/7.jpg') }}" data-zoom-image="{{ asset('frontend/img/product/7.jpg') }}">
                                                                <img class="zoom_03" src="{{ asset('frontend/img/product/7.jpg') }}" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- imgs-zoom-area end -->
                                    <!-- single-product-info start -->
                                    <div class="col-md-7 col-sm-7 col-xs-12">
                                        <div class="single-product-info">
                                            <h3 class="text-black-1">Dummy Product Name </h3>
                                            <h6 class="brand-name-2">brand name</h6>
                                            <!--  hr -->
                                            <hr>
                                            <!-- single-pro-color-rating -->
                                            <div class="single-pro-color-rating clearfix">
                                                <div class="sin-pro-color f-left">
                                                    <p class="color-title f-left">Color</p>
                                                    <div class="widget-color f-left">
                                                        <ul>
                                                            <li class="color-1"><a href="{{ url('/#') }}"></a></li>
                                                            <li class="color-2"><a href="{{ url('/#') }}"></a></li>
                                                            <li class="color-3"><a href="{{ url('/#') }}"></a></li>
                                                            <li class="color-4"><a href="{{ url('/#') }}"></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="pro-rating sin-pro-rating f-right">
                                                    <a href="{{ url('/#') }}" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="{{ url('/#') }}" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="{{ url('/#') }}" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="{{ url('/#') }}" tabindex="0"><i class="zmdi zmdi-star-half"></i></a>
                                                    <a href="{{ url('/#') }}" tabindex="0"><i class="zmdi zmdi-star-outline"></i></a>
                                                    <span class="text-black-5">( 27 Rating )</span>
                                                </div>
                                            </div>
                                            <!-- hr -->
                                            <hr>
                                            <!-- plus-minus-pro-action -->
                                            <div class="plus-minus-pro-action clearfix">
                                                <div class="sin-plus-minus f-left clearfix">
                                                    <p class="color-title f-left">Qty</p>
                                                    <div class="cart-plus-minus f-left">
                                                        <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                                                    </div>
                                                </div>
                                                <div class="sin-pro-action f-right">
                                                    <ul class="action-button">
                                                        <li>
                                                            <a href="{{ url('/#') }}" title="Wishlist" tabindex="0"><i class="zmdi zmdi-favorite"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url('/#') }}" data-toggle="modal" data-target="#productModal" title="Quickview" tabindex="0"><i class="zmdi zmdi-zoom-in"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url('/#') }}" title="Compare" tabindex="0"><i class="zmdi zmdi-refresh"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url('/#') }}" title="Add to cart" tabindex="0"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- plus-minus-pro-action end -->
                                            <!-- hr -->
                                            <hr>
                                            <!-- single-product-price -->
                                            <h3 class="pro-price">Price: $ 869.00</h3>
                                            <!--  hr -->
                                            <hr>
                                            <div>
                                                <a href="#" class="button extra-small button-black" tabindex="-1">
                                                    <span class="text-uppercase">Buy now</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product-info end -->
                                </div>
                                <!-- single-product-tab -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <!-- hr -->
                                        <hr>
                                        <div class="single-product-tab">
                                            <ul class="reviews-tab mb-20">
                                                <li  class="active"><a href="{{ url('/#description') }}" data-toggle="tab">description</a></li>
                                                <li ><a href="{{ url('/#information') }}" data-toggle="tab">information</a></li>
                                                <li ><a href="{{ url('/#reviews') }}" data-toggle="tab">reviews</a></li>
                                            </ul>
                                            <div class="tab-content">
                                                <div role="tabpanel" class="tab-pane active" id="description">
                                                    <p>There are many variations of passages of Lorem Ipsum available, but the majo Rity have be suffered alteration in some form, by injected humou or randomis Rity have be suffered alteration in some form, by injected humou or randomis words which donot look even slightly believable. If you are going to use a passage Lorem Ipsum.</p>
                                                    <p>rerum blanditiis dolore dignissimos expedita consequatur deleniti consectetur non exercitationem. rerum blanditiis dolore dignissimos expedita consequatur deleniti consectetur non exercitationem.</p>
                                                </div>
                                                <div role="tabpanel" class="tab-pane" id="information">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, neque fugit inventore quo dignissimos est iure natus quis nam illo officiis,  deleniti consectetur non ,aspernatur.</p>
                                                    <p>rerum blanditiis dolore dignissimos expedita consequatur deleniti consectetur non exercitationem.</p>
                                                </div>
                                                <div role="tabpanel" class="tab-pane" id="reviews">
                                                    <!-- reviews-tab-desc -->
                                                    <div class="reviews-tab-desc">
                                                        <!-- single comments -->
                                                        <div class="media mt-30">
                                                            <div class="media-left">
                                                                <a href="{{ url('/#') }}"><img class="media-object" src="{{ asset('frontend/img/author/1.jpg') }}" alt="#"></a>
                                                            </div>
                                                            <div class="media-body">
                                                                <div class="clearfix">
                                                                    <div class="name-commenter pull-left">
                                                                        <h6 class="media-heading"><a href="{{ url('/#') }}">Gerald Barnes</a></h6>
                                                                        <p class="mb-10">27 Jun, 2016 at 2:30pm</p>
                                                                    </div>
                                                                    <div class="pull-right">
                                                                        <ul class="reply-delate">
                                                                            <li><a href="{{ url('/#') }}">Reply</a></li>
                                                                            <li>/</li>
                                                                            <li><a href="{{ url('/#') }}">Delate</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas .</p>
                                                            </div>
                                                        </div>
                                                        <!-- single comments -->
                                                        <div class="media mt-30">
                                                            <div class="media-left">
                                                                <a href="{{ url('/#') }}"><img class="media-object" src="{{ asset('frontend/img/author/2.jpg') }}" alt="#"></a>
                                                            </div>
                                                            <div class="media-body">
                                                                <div class="clearfix">
                                                                    <div class="name-commenter pull-left">
                                                                        <h6 class="media-heading"><a href="{{ url('/#') }}">Gerald Barnes</a></h6>
                                                                        <p class="mb-10">27 Jun, 2016 at 2:30pm</p>
                                                                    </div>
                                                                    <div class="pull-right">
                                                                        <ul class="reply-delate">
                                                                            <li><a href="{{ url('/#') }}">Reply</a></li>
                                                                            <li>/</li>
                                                                            <li><a href="{{ url('/#') }}">Delate</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas .</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  hr -->
                                        <hr>
                                    </div>
                                </div>
                            </div>
                            <!-- single-product-area end -->
                            <div class="related-product-area">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="section-title text-left mb-40">
                                            <h2 class="uppercase">related product</h2>
                                            <h6>There are many variations of passages of brands available,</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="active-related-product">
                                         <!-- product-item start -->
                                        <div class="col-xs-12">
                                            <div class="product-item">
                                                <div class="product-img">
                                                    <a href="{{ url('/SingleProduct') }}">
                                                        <img src="{{ asset('frontend/img/product/1.jpg') }}" alt=""/>
                                                    </a>
                                                </div>
                                                <div class="product-info">
                                                    <h6 class="product-title">
                                                        <a href="{{ url('/SingleProduct') }}">Product Name</a>
                                                    </h6>
                                                    <div class="pro-rating">
                                                        <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                        <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                        <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                        <a href="{{ url('/#') }}"><i class="zmdi zmdi-star-half"></i></a>
                                                        <a href="{{ url('/#') }}"><i class="zmdi zmdi-star-outline"></i></a>
                                                    </div>
                                                    <h3 class="pro-price">$ 869.00</h3>
                                                    <ul class="action-button">
                                                        <li>
                                                            <a href="{{ url('/#') }}" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url('/#') }}" data-toggle="modal"  data-target="#productModal" title="Quickview"><i class="zmdi zmdi-zoom-in"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url('/#') }}" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url('/#') }}" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product-item end -->
                                         <!-- product-item start -->
                                        <div class="col-xs-12">
                                            <div class="product-item">
                                                <div class="product-img">
                                                    <a href="{{ url('/SingleProduct') }}">
                                                        <img src="{{ asset('frontend/img/product/1.jpg') }}" alt=""/>
                                                    </a>
                                                </div>
                                                <div class="product-info">
                                                    <h6 class="product-title">
                                                        <a href="{{ url('/SingleProduct') }}">Product Name</a>
                                                    </h6>
                                                    <div class="pro-rating">
                                                        <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                        <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                        <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                        <a href="{{ url('/#') }}"><i class="zmdi zmdi-star-half"></i></a>
                                                        <a href="{{ url('/#') }}"><i class="zmdi zmdi-star-outline"></i></a>
                                                    </div>
                                                    <h3 class="pro-price">$ 869.00</h3>
                                                    <ul class="action-button">
                                                        <li>
                                                            <a href="{{ url('/#') }}" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url('/#') }}" data-toggle="modal"  data-target="#productModal" title="Quickview"><i class="zmdi zmdi-zoom-in"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url('/#') }}" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url('/#') }}" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product-item end -->
                                         <!-- product-item start -->
                                        <div class="col-xs-12">
                                            <div class="product-item">
                                                <div class="product-img">
                                                    <a href="{{ url('/SingleProduct') }}">
                                                        <img src="{{ asset('frontend/img/product/1.jpg') }}" alt=""/>
                                                    </a>
                                                </div>
                                                <div class="product-info">
                                                    <h6 class="product-title">
                                                        <a href="{{ url('/SingleProduct') }}">Product Name</a>
                                                    </h6>
                                                    <div class="pro-rating">
                                                        <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                        <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                        <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                        <a href="{{ url('/#') }}"><i class="zmdi zmdi-star-half"></i></a>
                                                        <a href="{{ url('/#') }}"><i class="zmdi zmdi-star-outline"></i></a>
                                                    </div>
                                                    <h3 class="pro-price">$ 869.00</h3>
                                                    <ul class="action-button">
                                                        <li>
                                                            <a href="{{ url('/#') }}" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url('/#') }}" data-toggle="modal"  data-target="#productModal" title="Quickview"><i class="zmdi zmdi-zoom-in"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url('/#') }}" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url('/#') }}" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product-item end -->
                                         <!-- product-item start -->
                                        <div class="col-xs-12">
                                            <div class="product-item">
                                                <div class="product-img">
                                                    <a href="{{ url('/SingleProduct') }}">
                                                        <img src="{{ asset('frontend/img/product/1.jpg') }}" alt=""/>
                                                    </a>
                                                </div>
                                                <div class="product-info">
                                                    <h6 class="product-title">
                                                        <a href="{{ url('/SingleProduct') }}">Product Name</a>
                                                    </h6>
                                                    <div class="pro-rating">
                                                        <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                        <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                        <a href="{{ url('/#') }}"><i class="zmdi zmdi-star"></i></a>
                                                        <a href="{{ url('/#') }}"><i class="zmdi zmdi-star-half"></i></a>
                                                        <a href="{{ url('/#') }}"><i class="zmdi zmdi-star-outline"></i></a>
                                                    </div>
                                                    <h3 class="pro-price">$ 869.00</h3>
                                                    <ul class="action-button">
                                                        <li>
                                                            <a href="{{ url('/#') }}" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url('/#') }}" data-toggle="modal"  data-target="#productModal" title="Quickview"><i class="zmdi zmdi-zoom-in"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url('/#') }}" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ url('/#') }}" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product-item end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-xs-12">
                            <!-- widget-search -->
                            <aside class="widget-search mb-30">
                                <form action="#">
                                    <input type="text" placeholder="Search here...">
                                    <button type="submit"><i class="zmdi zmdi-search"></i></button>
                                </form>
                            </aside>
                            <!-- widget-categories -->
                            <aside class="widget widget-categories box-shadow mb-30">
                                <h6 class="widget-title border-left mb-20">Categories</h6>
                                <div id="cat-treeview" class="product-cat">
                                    <ul>
                                        <li class="closed"><a href="{{ url('/#') }}">Brand One</a>
                                            <ul>
                                                <li><a href="{{ url('/#') }}">Mobile</a></li>
                                                <li><a href="{{ url('/#') }}">Tab</a></li>
                                                <li><a href="{{ url('/#') }}">Watch</a></li>
                                                <li><a href="{{ url('/#') }}">Head Phone</a></li>
                                                <li><a href="{{ url('/#') }}">Memory</a></li>
                                            </ul>
                                        </li>
                                        <li class="open"><a href="{{ url('/#') }}">Brand Two</a>
                                            <ul>
                                                <li><a href="{{ url('/#') }}">Mobile</a></li>
                                                <li><a href="{{ url('/#') }}">Tab</a></li>
                                                <li><a href="{{ url('/#') }}">Watch</a></li>
                                                <li><a href="{{ url('/#') }}">Head Phone</a></li>
                                                <li><a href="{{ url('/#') }}">Memory</a></li>
                                            </ul>
                                        </li>
                                        <li class="closed"><a href="{{ url('/#') }}">Accessories</a>
                                            <ul>
                                                <li><a href="{{ url('/#') }}">Footwear</a></li>
                                                <li><a href="{{ url('/#') }}">Sunglasses</a></li>
                                                <li><a href="{{ url('/#') }}">Watches</a></li>
                                                <li><a href="{{ url('/#') }}">Utilities</a></li>
                                            </ul>
                                        </li>
                                        <li class="closed"><a href="{{ url('/#') }}">Top Brands</a>
                                            <ul>
                                                <li><a href="{{ url('/#') }}">Mobile</a></li>
                                                <li><a href="{{ url('/#') }}">Tab</a></li>
                                                <li><a href="{{ url('/#') }}">Watch</a></li>
                                                <li><a href="{{ url('/#') }}">Head Phone</a></li>
                                                <li><a href="{{ url('/#') }}">Memory</a></li>
                                            </ul>
                                        </li>
                                        <li class="closed"><a href="{{ url('/#') }}">Jewelry</a>
                                            <ul>
                                                <li><a href="{{ url('/#') }}">Footwear</a></li>
                                                <li><a href="{{ url('/#') }}">Sunglasses</a></li>
                                                <li><a href="{{ url('/#') }}">Watches</a></li>
                                                <li><a href="{{ url('/#') }}">Utilities</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </aside>
                            <!-- operating-system -->
                            <aside class="widget operating-system box-shadow mb-30">
                                <h6 class="widget-title border-left mb-20">operating system</h6>
                                <form action="action_page.php">
                                    <label><input type="checkbox" name="operating-1" value="phone-1">Windows Phone</label><br>
                                    <label><input type="checkbox" name="operating-1" value="phone-1">Bleckgerry ios</label><br>
                                    <label><input type="checkbox" name="operating-1" value="phone-1">Android</label><br>
                                    <label><input type="checkbox" name="operating-1" value="phone-1">ios</label><br>
                                    <label><input type="checkbox" name="operating-1" value="phone-1">Windows Phone</label><br>
                                    <label><input type="checkbox" name="operating-1" value="phone-1">Symban</label><br>
                                    <label class="mb-0"><input type="checkbox" name="operating-1" value="phone-1">Bleckgerry os</label><br>
                                </form>
                            </aside>
                            <!-- widget-product -->
                            <aside class="widget widget-product box-shadow">
                                <h6 class="widget-title border-left mb-20">recent products</h6>
                                <!-- product-item start -->
                                <div class="product-item">
                                    <div class="product-img">
                                        <a href="{{ url('/SingleProduct') }}">
                                            <img src="{{ asset('frontend/img/product/4.jpg') }}" alt=""/>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <h6 class="product-title">
                                            <a href="{{ url('/SingleProduct') }}">Product Name</a>
                                        </h6>
                                        <h3 class="pro-price">$ 869.00</h3>
                                    </div>
                                </div>
                                <!-- product-item end -->
                                <!-- product-item start -->
                                <div class="product-item">
                                    <div class="product-img">
                                        <a href="{{ url('/SingleProduct') }}">
                                            <img src="{{ asset('frontend/img/product/8.jpg') }}" alt=""/>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <h6 class="product-title">
                                            <a href="{{ url('/SingleProduct') }}">Product Name</a>
                                        </h6>
                                        <h3 class="pro-price">$ 869.00</h3>
                                    </div>
                                </div>
                                <!-- product-item end -->
                                <!-- product-item start -->
                                <div class="product-item">
                                    <div class="product-img">
                                        <a href="{{ url('/SingleProduct') }}">
                                            <img src="{{ asset('frontend/img/product/12.jpg') }}" alt=""/>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <h6 class="product-title">
                                            <a href="{{ url('/SingleProduct') }}">Product Name</a>
                                        </h6>
                                        <h3 class="pro-price">$ 869.00</h3>
                                    </div>
                                </div>
                                <!-- product-item end -->
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
            <!-- SHOP SECTION END -->

        </section>
        <!-- End page content -->
@endsection

