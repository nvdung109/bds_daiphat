<!DOCTYPE html>
<html lang="en">
<head>
    <title>Neer - Real Estate HTML Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <base href="{{ asset('') }}">
    @include('fontend.layouts.style')
</head>
<body>
<!-- Main header start -->
<header class="main-header header-transparent sticky-header">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand logo" href="index.html">
                <img src="fontend/fontend/img/logos/black-logo.png" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Trang chủ
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="index.html">Index 01</a></li>
                            <li><a class="dropdown-item" href="index-2.html">Index 02</a></li>
                            <li><a class="dropdown-item" href="index-3.html">Index 03</a></li>
                            <li><a class="dropdown-item" href="index-4.html">Index 04</a></li>
                            <li><a class="dropdown-item" href="index-5.html">Index 05</a></li>
                            <li><a class="dropdown-item" href="index-6.html">Index 06</a></li>
                            <li><a class="dropdown-item" href="index-7.html">Index 07</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Nhà phố
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Property List</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="properties-list-rightside.html">Right Sidebar</a></li>
                                    <li><a class="dropdown-item" href="properties-list-leftsidebar.html">Left Sidebar</a></li>
                                    <li><a class="dropdown-item" href="properties-list-fullwidth.html">Fullwidth</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Property Grid</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="properties-grid-rightside.html">Right Sidebar</a></li>
                                    <li><a class="dropdown-item" href="properties-grid-leftside.html">Left Sidebar</a></li>
                                    <li><a class="dropdown-item" href="properties-grid-fullwidth.html">Fullwidth</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Property Map</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="properties-map-rightside-list.html">Map List 01</a></li>
                                    <li><a class="dropdown-item" href="properties-map-leftside-list.html">Map List 02</a></li>
                                    <li><a class="dropdown-item" href="properties-map-rightside-grid.html">Map Grid 01</a></li>
                                    <li><a class="dropdown-item" href="properties-map-leftside-grid.html">Map Grid 02</a></li>
                                    <li><a class="dropdown-item" href="properties-map-full.html">Map FullWidth</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Property Detail</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="properties-details.html">Property Detail 01</a></li>
                                    <li><a class="dropdown-item" href="properties-details-2.html">Property Detail 02</a></li>
                                    <li><a class="dropdown-item" href="properties-details-3.html">Property Detail 03</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Đất nghỉ dưỡng
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="agent-list.html">Agent List</a></li>
                            <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Agent Grid</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="agent-grid.html">Agent Grid 01</a></li>
                                    <li><a class="dropdown-item" href="agent-grid-2.html">Agent Grid 02</a></li>
                                    <li><a class="dropdown-item" href="agent-grid-3.html">Agent Grid 03</a></li>
                                </ul>
                            </li>
                            <li><a class="dropdown-item" href="agent-detail.html">Agent Detail</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown megamenu-li">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cần mua - bán</a>
                        <div class="dropdown-menu megamenu" aria-labelledby="dropdown01">
                            <div class="megamenu-area">
                                <div class="row sobuz">
                                    <div class="col-sm-6 col-md-4 col-lg-4">
                                        <div class="megamenu-section">
                                            <h6 class="megamenu-title">Pages</h6>
                                            <a class="dropdown-item" href="about.html">About Us</a>
                                            <a class="dropdown-item" href="services.html">Services</a>
                                            <a class="dropdown-item" href="elements.html">Elements</a>
                                            <a class="dropdown-item" href="properties-list-rightside.html">Properties List</a>
                                            <a class="dropdown-item" href="properties-grid-rightside.html">Properties Grid</a>
                                            <a class="dropdown-item" href="properties-map-leftside-list.html">Properties Map</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4">
                                        <div class="megamenu-section">
                                            <h6 class="megamenu-title">Pages</h6>
                                            <a class="dropdown-item" href="pricing-tables.html">Pricing Tables</a>
                                            <a class="dropdown-item" href="properties-comparison.html">Properties Comparison</a>
                                            <a class="dropdown-item" href="search-brand.html">Properties Brands</a>
                                            <a class="dropdown-item" href="gallery-3column.html">Gallery 3 column</a>
                                            <a class="dropdown-item" href="gallery-4column.html">Gallery 4 column</a>
                                            <a class="dropdown-item" href="typography.html">Typography</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4">
                                        <div class="megamenu-section">
                                            <h6 class="megamenu-title">Pages</h6>
                                            <a class="dropdown-item" href="faq.html">Faq</a>
                                            <a class="dropdown-item" href="icon.html">Icons</a>
                                            <a class="dropdown-item" href="contact.html">Contact Us</a>
                                            <a class="dropdown-item" href="coming-soon.html">Coming Soon</a>
                                            <a class="dropdown-item" href="404.html">Error Page</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown megamenu-li">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Đất nhà xưởng</a>
                        <div class="dropdown-menu megamenu" aria-labelledby="dropdown01">
                            <div class="megamenu-area">
                                <div class="row sobuz">
                                    <div class="col-sm-6 col-md-4 col-lg-4">
                                        <div class="megamenu-section">
                                            <h6 class="megamenu-title">Pages</h6>
                                            <a class="dropdown-item" href="about.html">About Us</a>
                                            <a class="dropdown-item" href="services.html">Services</a>
                                            <a class="dropdown-item" href="elements.html">Elements</a>
                                            <a class="dropdown-item" href="properties-list-rightside.html">Properties List</a>
                                            <a class="dropdown-item" href="properties-grid-rightside.html">Properties Grid</a>
                                            <a class="dropdown-item" href="properties-map-leftside-list.html">Properties Map</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Tin tức
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Blog Columns</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="blog-columns-2col.html">2 Columns</a></li>
                                    <li><a class="dropdown-item" href="blog-columns-3col.html">3 Columns</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Blog Classic</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="blog-classic-sidebar-right.html">Right Sidebar</a></li>
                                    <li><a class="dropdown-item" href="blog-classic-sidebar-left.html">Left Sidebar</a></li>
                                    <li><a class="dropdown-item" href="blog-classic-fullwidth.html">FullWidth</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Blog Details</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="blog-single-sidebar-right.html">Right Sidebar</a></li>
                                    <li><a class="dropdown-item" href="blog-single-sidebar-left.html">Left Sidebar</a></li>
                                    <li><a class="dropdown-item" href="blog-single-fullwidth.html">Fullwidth</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink7" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Liên hệ
                        </a>
                    </li>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="login.html">Login</a></li>
                            <li><a class="dropdown-item" href="signup.html">Register</a></li>
                            <li><a class="dropdown-item" href="forgot-password.html">Forgot Password</a></li>
                            <li><a class="dropdown-item" href="dashboard.html">Dashboard</a></li>
                            <li><a class="dropdown-item" href="my-profile.html">My Profile</a></li>
                            <li><a class="dropdown-item" href="my-properties.html">My Properties</a></li>
                            <li> <a class="dropdown-item" href="my-invoices.html">My Invoices</a></li>
                            <li><a class="dropdown-item" href="favorited-properties.html">Favorited Properties</a></li>
                            <li><a class="dropdown-item" href="messages.html">Messages</a></li>
                            <li><a class="dropdown-item" href="bookings.html">Bookings</a></li>
                            <li><a class="dropdown-item" href="submit-property.html">Submit Property</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" aria-expanded="false">
                            Tuyển dụng
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
<!-- Main header end -->

<!-- Banner start -->
<div class="banner" id="banner">
    <div id="bannerCarousole" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item banner-max-height active item-bg">
                <img class="d-block w-100 h-100" src="fontend/img/banner/img-1.jpg" alt="banner">
                <div class="carousel-caption banner-slider-inner h-100"></div>
            </div>
            <div class="carousel-item banner-max-height item-bg">
                <img class="d-block w-100 h-100" src="fontend/img/banner/img-2.jpg" alt="banner">
                <div class="carousel-caption banner-slider-inner h-100"></div>
            </div>
            <div class="carousel-item banner-max-height item-bg">
                <img class="d-block w-100 h-100" src="fontend/img/banner/img-4.jpg" alt="banner">
                <div class="carousel-caption banner-slider-inner h-100"></div>
            </div>

            <div class="carousel-caption d-flex h-100 banner-slider-inner-2">
                <div class="carousel-content container">
                    <div class="text-center bi-3">
                        <div class="clearfix">
                            <h3>Đất vàng đại phát</h3>
                            <p>Hãy tìm ngôi nhà tuyệt vời của bạn</p>
                        </div>
                        <div class="clearfix"></div>
                        <div class="inline-search-area isa-4 clearfix">
                            <div class="row">
                                <div class="col-xl-2 col-lg-2 col-sm-4 col-6 search-col">
                                    <select class="selectpicker search-fields" name="any-status">
                                        <option>Loại đất</option>
                                        <option>For Rent</option>
                                        <option>For Sale</option>
                                    </select>
                                </div>
                                <div class="col-xl-2 col-lg-2 col-sm-4 col-6 search-col">
                                    <select class="selectpicker search-fields" name="all-type">
                                        <option>Thành phố</option>
                                        <option>Apartments</option>
                                        <option>Shop</option>
                                        <option>Restaurant</option>
                                        <option>Villa</option>
                                    </select>
                                </div>
                                <div class="col-xl-2 col-lg-2 col-sm-4 col-6 search-col">
                                    <select class="selectpicker search-fields" name="bedrooms">
                                        <option>Quận/Huyện</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                </div>
                                <div class="col-xl-2 col-lg-2 col-sm-4 col-6 search-col">
                                    <select class="selectpicker search-fields" name="bathrooms">
                                        <option>Giá</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                </div>
                                <div class="col-xl-2 col-lg-2 col-sm-4 col-6 search-col">
                                    <select class="selectpicker search-fields" name="location">
                                        <option>Diện tích</option>
                                        <option>United States</option>
                                        <option>American Samoa</option>
                                        <option>Belgium</option>
                                        <option>Canada</option>
                                    </select>
                                </div>
                                <div class="col-xl-2 col-lg-2 col-sm-4 col-6 search-col">
                                    <button class="btn button-theme btn-search btn-block">
                                        <i class="fa fa-search"></i><strong>Tìm kiếm</strong>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="inline-search-area isa-3 clearfix">
                            <div class="row clearfix">
                                <div class="col-md-6 col-sm-6 col-6">
                                    <select class="selectpicker search-fields" name="any-status">
                                        <option>Any Status</option>
                                        <option>For Rent</option>
                                        <option>For Sale</option>
                                    </select>
                                </div>
                                <div class="col-md-6 col-sm-6 col-6">
                                    <select class="selectpicker search-fields" name="all-type">
                                        <option>All Type</option>
                                        <option>Apartments</option>
                                        <option>Shop</option>
                                        <option>Restaurant</option>
                                        <option>Villa</option>
                                    </select>
                                </div>
                                <div class="col-md-6 col-sm-6 col-6">
                                    <select class="selectpicker search-fields" name="bedrooms">
                                        <option>Bedrooms</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                </div>
                                <div class="col-md-6 col-sm-6 col-6">
                                    <select class="selectpicker search-fields" name="bathrooms">
                                        <option>Bathrooms</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                </div>
                                <div class="col-md-6 col-sm-6 col-6">
                                    <select class="selectpicker search-fields mb-0" name="location">
                                        <option>location</option>
                                        <option>United States</option>
                                        <option>American Samoa</option>
                                        <option>Belgium</option>
                                        <option>Canada</option>
                                    </select>
                                </div>
                                <div class="col-md-6 col-sm-6 col-6">
                                    <button class="btn button-theme btn-search btn-block mb-0">
                                        <i class="fa fa-search"></i><strong>Search</strong>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="btn-secton">
            <ol class="carousel-indicators">
                <li data-target="#bannerCarousole" data-slide-to="0" class="active"></li>
                <li data-target="#bannerCarousole" data-slide-to="1"></li>
                <li data-target="#bannerCarousole" data-slide-to="2"></li>
            </ol>
        </div>
    </div>
</div>
<!-- Banner end -->

<!-- Search Section start -->
<div class="search-section search-area pb-hediin-12 bg-grea animated fadeInDown" id="search-style-1">
    <div class="container">
        <div class="search-section-area">
            <div class="search-area-inner">
                <div class="search-contents">
                    <form method="GET">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                                <div class="form-group">
                                    <select class="selectpicker search-fields" name="any-status">
                                        <option>Any Status</option>
                                        <option>For Rent</option>
                                        <option>For Sale</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                                <div class="form-group">
                                    <select class="selectpicker search-fields" name="all-type">
                                        <option>All Type</option>
                                        <option>Apartments</option>
                                        <option>Shop</option>
                                        <option>Restaurant</option>
                                        <option>Villa</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                                <div class="form-group">
                                    <select class="selectpicker search-fields" name="bedrooms">
                                        <option>Bedrooms</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                                <div class="form-group">
                                    <select class="selectpicker search-fields" name="bathrooms">
                                        <option>Bathrooms</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                                <div class="form-group">
                                    <select class="selectpicker search-fields" name="location">
                                        <option>location</option>
                                        <option>United States</option>
                                        <option>American Samoa</option>
                                        <option>Belgium</option>
                                        <option>Canada</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                                <div class="form-group">
                                    <button class="search-button">Search</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Search Section end -->

<!-- Categories strat -->
<div class="categories content-area-10">
    <div class="container">
        <!-- Main title -->
        <div class="main-title text-center">
            <h1>Địa điểm phổ biến nhất hiện nay</h1>
        </div>
        <div class="row">
            <div class="col-lg-5 col-md-12 col-sm-12 col-pad">
                <div class="category">
                    <div class="category_bg_box category_long_bg cat-4-bg">
                        <div class="category-overlay">
                            <div class="category-content">
                                <h3 class="category-title">
                                    <a href="#">Tokyo</a>
                                </h3>
                                <p class="category-subtitle">12 Properties</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-12 col-sm-12">
                <div class="row">
                    <div class="col-sm-6 col-pad">
                        <div class="category">
                            <div class="category_bg_box cat-1-bg">
                                <div class="category-overlay">
                                    <div class="category-content">
                                        <h3 class="category-title">
                                            <a href="properties-list-rightside.html">Rome</a>
                                        </h3>
                                        <p class="category-subtitle">27 Properties</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-pad">
                        <div class="category">
                            <div class="category_bg_box cat-5-bg">
                                <div class="category-overlay">
                                    <div class="category-content">
                                        <h3 class="category-title">
                                            <a href="#">Italy Rome</a>
                                        </h3>
                                        <p class="category-subtitle">62 Properties</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-pad">
                        <div class="category">
                            <div class="category_bg_box cat-3-bg">
                                <div class="category-overlay">
                                    <div class="category-content">
                                        <h3 class="category-title">
                                            <a href="#">United States</a>
                                        </h3>
                                        <p class="category-subtitle">84 Properties</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-pad">
                        <div class="category">
                            <div class="category_bg_box cat-2-bg">
                                <div class="category-overlay">
                                    <div class="category-content">
                                        <h3 class="category-title">
                                            <a href="#">London</a>
                                        </h3>
                                        <p class="category-subtitle">36 Properties</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Categories end -->

<!-- Featured Properties start -->
<div class="featured-properties content-area-2">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1>Dự án nổi bật</h1>
            <p>Các dự án hiện đang được giao bán với giá ưu đãi</p>
        </div>
        <!-- Slick slider area start -->
        <div class="slick-slider-area">
            <div class="row slick-carousel" data-slick='{"rows":2, "slidesToShow": 3, "autoplay": true, "autoplaySpeed": 2000, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 3, "slidesToScroll": 3}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>
                <div class="slick-slide-item">
                    <div class="property-box">
                        <div class="property-thumbnail">
                            <a href="properties-details.html" class="property-img">
                                <div class="price-box"><span>$850.00</span> Per month</div>
                                <img class="d-block w-100" src="fontend/img/properties/properties-6.jpg" alt="properties">
                            </a>
                        </div>
                        <div class="detail">
                            <h1 class="title">
                                <a href="properties-details.html">Smart City</a>
                            </h1>

                            <div class="location">
                                <a href="properties-details.html">
                                    <i class="flaticon-pin"></i>Di trạch, Hoài Đức, Hà Nội
                                </a>
                            </div>
                        </div>
                        <ul class="facilities-list clearfix">
                            <li>
                                <span>Diện tích</span><p>200m2</p>
                            </li>
                            <li>
                                <span>Loại đất</span> <p>Căn hộ</p>
                            </li>
                        </ul>
                        <div class="footer">
                            <a href="#">
                                <i class="flaticon-male"></i>Jhon Doe
                            </a>
                            <span>
                                <i class="flaticon-calendar"></i>5 Days ago
                            </span>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="property-box">
                        <div class="property-thumbnail">
                            <a href="properties-details.html" class="property-img">
                                <div class="price-box"><span>$850.00</span> Per month</div>
                                <img class="d-block w-100" src="fontend/img/properties/properties-6.jpg" alt="properties">
                            </a>
                        </div>
                        <div class="detail">
                            <h1 class="title">
                                <a href="properties-details.html">Smart City</a>
                            </h1>

                            <div class="location">
                                <a href="properties-details.html">
                                    <i class="flaticon-pin"></i>Di trạch, Hoài Đức, Hà Nội
                                </a>
                            </div>
                        </div>
                        <ul class="facilities-list clearfix">
                            <li>
                                <span>Diện tích</span><p>200m2</p>
                            </li>
                            <li>
                                <span>Loại đất</span> <p>Căn hộ</p>
                            </li>
                        </ul>
                        <div class="footer">
                            <a href="#">
                                <i class="flaticon-male"></i>Jhon Doe
                            </a>
                            <span>
                                <i class="flaticon-calendar"></i>5 Days ago
                            </span>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="property-box">
                        <div class="property-thumbnail">
                            <a href="properties-details.html" class="property-img">
                                <div class="price-box"><span>$850.00</span> Per month</div>
                                <img class="d-block w-100" src="fontend/img/properties/properties-6.jpg" alt="properties">
                            </a>
                        </div>
                        <div class="detail">
                            <h1 class="title">
                                <a href="properties-details.html">Smart City</a>
                            </h1>

                            <div class="location">
                                <a href="properties-details.html">
                                    <i class="flaticon-pin"></i>Di trạch, Hoài Đức, Hà Nội
                                </a>
                            </div>
                        </div>
                        <ul class="facilities-list clearfix">
                            <li>
                                <span>Diện tích</span><p>200m2</p>
                            </li>
                            <li>
                                <span>Loại đất</span> <p>Căn hộ</p>
                            </li>
                        </ul>
                        <div class="footer">
                            <a href="#">
                                <i class="flaticon-male"></i>Jhon Doe
                            </a>
                            <span>
                                <i class="flaticon-calendar"></i>5 Days ago
                            </span>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="property-box">
                        <div class="property-thumbnail">
                            <a href="properties-details.html" class="property-img">
                                <div class="price-box"><span>$850.00</span> Per month</div>
                                <img class="d-block w-100" src="fontend/img/properties/properties-6.jpg" alt="properties">
                            </a>
                        </div>
                        <div class="detail">
                            <h1 class="title">
                                <a href="properties-details.html">Smart City</a>
                            </h1>

                            <div class="location">
                                <a href="properties-details.html">
                                    <i class="flaticon-pin"></i>Di trạch, Hoài Đức, Hà Nội
                                </a>
                            </div>
                        </div>
                        <ul class="facilities-list clearfix">
                            <li>
                                <span>Diện tích</span><p>200m2</p>
                            </li>
                            <li>
                                <span>Loại đất</span> <p>Căn hộ</p>
                            </li>
                        </ul>
                        <div class="footer">
                            <a href="#">
                                <i class="flaticon-male"></i>Jhon Doe
                            </a>
                            <span>
                                <i class="flaticon-calendar"></i>5 Days ago
                            </span>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="property-box">
                        <div class="property-thumbnail">
                            <a href="properties-details.html" class="property-img">
                                <div class="price-box"><span>$850.00</span> Per month</div>
                                <img class="d-block w-100" src="fontend/img/properties/properties-6.jpg" alt="properties">
                            </a>
                        </div>
                        <div class="detail">
                            <h1 class="title">
                                <a href="properties-details.html">Smart City</a>
                            </h1>

                            <div class="location">
                                <a href="properties-details.html">
                                    <i class="flaticon-pin"></i>Di trạch, Hoài Đức, Hà Nội
                                </a>
                            </div>
                        </div>
                        <ul class="facilities-list clearfix">
                            <li>
                                <span>Diện tích</span><p>200m2</p>
                            </li>
                            <li>
                                <span>Loại đất</span> <p>Căn hộ</p>
                            </li>
                        </ul>
                        <div class="footer">
                            <a href="#">
                                <i class="flaticon-male"></i>Jhon Doe
                            </a>
                            <span>
                                <i class="flaticon-calendar"></i>5 Days ago
                            </span>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="property-box">
                        <div class="property-thumbnail">
                            <a href="properties-details.html" class="property-img">
                                <div class="price-box"><span>$850.00</span> Per month</div>
                                <img class="d-block w-100" src="fontend/img/properties/properties-6.jpg" alt="properties">
                            </a>
                        </div>
                        <div class="detail">
                            <h1 class="title">
                                <a href="properties-details.html">Smart City</a>
                            </h1>

                            <div class="location">
                                <a href="properties-details.html">
                                    <i class="flaticon-pin"></i>Di trạch, Hoài Đức, Hà Nội
                                </a>
                            </div>
                        </div>
                        <ul class="facilities-list clearfix">
                            <li>
                                <span>Diện tích</span><p>200m2</p>
                            </li>
                            <li>
                                <span>Loại đất</span> <p>Căn hộ</p>
                            </li>
                        </ul>
                        <div class="footer">
                            <a href="#">
                                <i class="flaticon-male"></i>Jhon Doe
                            </a>
                            <span>
                                <i class="flaticon-calendar"></i>5 Days ago
                            </span>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="property-box">
                        <div class="property-thumbnail">
                            <a href="properties-details.html" class="property-img">
                                <div class="price-box"><span>$850.00</span> Per month</div>
                                <img class="d-block w-100" src="fontend/img/properties/properties-6.jpg" alt="properties">
                            </a>
                        </div>
                        <div class="detail">
                            <h1 class="title">
                                <a href="properties-details.html">Smart City</a>
                            </h1>

                            <div class="location">
                                <a href="properties-details.html">
                                    <i class="flaticon-pin"></i>Di trạch, Hoài Đức, Hà Nội
                                </a>
                            </div>
                        </div>
                        <ul class="facilities-list clearfix">
                            <li>
                                <span>Diện tích</span><p>200m2</p>
                            </li>
                            <li>
                                <span>Loại đất</span> <p>Căn hộ</p>
                            </li>
                        </ul>
                        <div class="footer">
                            <a href="#">
                                <i class="flaticon-male"></i>Jhon Doe
                            </a>
                            <span>
                                <i class="flaticon-calendar"></i>5 Days ago
                            </span>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="property-box">
                        <div class="property-thumbnail">
                            <a href="properties-details.html" class="property-img">
                                <div class="price-box"><span>$850.00</span> Per month</div>
                                <img class="d-block w-100" src="fontend/img/properties/properties-6.jpg" alt="properties">
                            </a>
                        </div>
                        <div class="detail">
                            <h1 class="title">
                                <a href="properties-details.html">Smart City</a>
                            </h1>

                            <div class="location">
                                <a href="properties-details.html">
                                    <i class="flaticon-pin"></i>Di trạch, Hoài Đức, Hà Nội
                                </a>
                            </div>
                        </div>
                        <ul class="facilities-list clearfix">
                            <li>
                                <span>Diện tích</span><p>200m2</p>
                            </li>
                            <li>
                                <span>Loại đất</span> <p>Căn hộ</p>
                            </li>
                        </ul>
                        <div class="footer">
                            <a href="#">
                                <i class="flaticon-male"></i>Jhon Doe
                            </a>
                            <span>
                                <i class="flaticon-calendar"></i>5 Days ago
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slick-btn">
                <div class="slick-prev slick-arrow-buton-2 sab-4">
                    <i class="fa fa-angle-left"></i>
                </div>
                <div class="slick-next slick-arrow-buton-2 sab-3">
                    <i class="fa fa-angle-right"></i>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Featured Properties end -->

<!-- Services start -->
<div class="services content-area bg-grea-3">
    <div class="container">
        <!-- Main title -->
        <div class="row">
            <div class="col-lg-4 col-md-12">

                <div class="media service-info-3">
                    <div class="icon">
                        <i class="flaticon-user"></i>
                    </div>
                    <div class="media-body align-self-center">
                        <h2>Hỗ trợ tận tâm</h2>
                        <p>Chúng tôi luôn mang đến những dịch vụ tốt nhất cho khách hàng</p>
                        <a class="rm-btn" href="services.html">Xem thêm...</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="media service-info-3">
                    <div class="icon">
                        <i class="flaticon-empire-state-building"></i>
                    </div>
                    <div class="media-body align-self-center">
                        <h2>Ngôi nhà tuyệt vời</h2>
                        <p>Những ngôi nhà tuyệt vời là điều chúng tôi mang đến cho bạn</p>
                        <a class="rm-btn" href="services.html">Xem thêm...</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="media service-info-3">
                    <div class="icon">
                        <i class="flaticon-discount"></i>
                    </div>
                    <div class="media-body align-self-center">
                        <h2>Thanh toán linh hoạt</h2>
                        <p>Thủ tục nhanh gọn, dễ dàng, ít tốn thời gian</p>
                        <a class="rm-btn" href="services.html">Read more...</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services end -->

<!-- Counters 2 strat -->
<!-- <div class="counters-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="media counter-box">
                    <div class="icon">
                        <i class="flaticon-sale"></i>
                    </div>
                    <div class="media-body align-self-center">
                        <h2 class="counter Starting">672</h2>
                        <p>Listings For Sale</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="media counter-box">
                    <div class="icon">
                        <i class="flaticon-rent"></i>
                    </div>
                    <div class="media-body align-self-center">
                        <h2 class="counter Starting">475</h2>
                        <p>Listings For Rent</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="media counter-box">
                    <div class="icon">
                        <i class="flaticon-user"></i>
                    </div>
                    <div class="media-body align-self-center">
                        <h2 class="counter Starting">705</h2>
                        <p>Our Agents</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="media counter-box">
                    <div class="icon">
                        <i class="flaticon-broker"></i>
                    </div>
                    <div class="media-body align-self-center">
                        <h2 class="counter Starting">950</h2>
                        <p>Brokers</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- Counters 2 end -->

<!-- Blog start -->
<div class="blog content-area">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1>Tin tức bất động sản</h1>
        </div>
        <!-- Slick slider area start -->
        <div class="slick-slider-area">
            <div class="row slick-carousel" data-slick='{"slidesToShow": 3, "autoplay": true,
             "autoplaySpeed": 2000, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>
                <div class="slick-slide-item">
                    <div class="blog-2">
                        <div class="blog-photo">
                            <img src="fontend/img/blog/blog-1.jpg" alt="blog" class="img-fluid bp">
                        </div>
                        <div class="detail">
                            <div class="post-meta clearfix">
                                <ul>
                                    <li>
                                        <strong><a href="#">Đại Nam</a></strong>
                                    </li>
                                    <li class="float-right mr-0"><a href="#"><i class="fa fa-eye" aria-hidden="true"></i></a>17K</li>
                                    <li class="float-right"><a href="#"><i class="flaticon-calendar"></i></a>8/3/2021</li>
                                </ul>
                            </div>
                            <h4>
                                <a href="blog-single-sidebar-right.html">Selling Your Real House</a>
                            </h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the</p>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="blog-2">
                        <div class="blog-photo">
                            <img src="fontend/img/blog/blog-1.jpg" alt="blog" class="img-fluid bp">
                        </div>
                        <div class="detail">
                            <div class="post-meta clearfix">
                                <ul>
                                    <li>
                                        <strong><a href="#">Đại Nam</a></strong>
                                    </li>
                                    <li class="float-right mr-0"><a href="#"><i class="fa fa-eye" aria-hidden="true"></i></a>17K</li>
                                    <li class="float-right"><a href="#"><i class="flaticon-calendar"></i></a>8/3/2021</li>
                                </ul>
                            </div>
                            <h4>
                                <a href="blog-single-sidebar-right.html">Selling Your Real House</a>
                            </h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the</p>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="blog-2">
                        <div class="blog-photo">
                            <img src="fontend/img/blog/blog-1.jpg" alt="blog" class="img-fluid bp">
                        </div>
                        <div class="detail">
                            <div class="post-meta clearfix">
                                <ul>
                                    <li>
                                        <strong><a href="#">Đại Nam</a></strong>
                                    </li>
                                    <li class="float-right mr-0"><a href="#"><i class="fa fa-eye" aria-hidden="true"></i></a>17K</li>
                                    <li class="float-right"><a href="#"><i class="flaticon-calendar"></i></a>8/3/2021</li>
                                </ul>
                            </div>
                            <h4>
                                <a href="blog-single-sidebar-right.html">Selling Your Real House</a>
                            </h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the</p>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="blog-2">
                        <div class="blog-photo">
                            <img src="fontend/img/blog/blog-1.jpg" alt="blog" class="img-fluid bp">
                        </div>
                        <div class="detail">
                            <div class="post-meta clearfix">
                                <ul>
                                    <li>
                                        <strong><a href="#">Đại Nam</a></strong>
                                    </li>
                                    <li class="float-right mr-0"><a href="#"><i class="fa fa-eye" aria-hidden="true"></i></a>17K</li>
                                    <li class="float-right"><a href="#"><i class="flaticon-calendar"></i></a>8/3/2021</li>
                                </ul>
                            </div>
                            <h4>
                                <a href="blog-single-sidebar-right.html">Selling Your Real House</a>
                            </h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog end -->

<!-- Footer start -->
@include('fontend.layouts.footer')
<!-- Footer end -->

<!-- Full Page Search -->
<div id="full-page-search">
    <button type="button" class="close">×</button>
    <form action="https://storage.googleapis.com/theme-vessel/checking-sites/neer-html/HTML/index.html#">
        <input type="search" value="" placeholder="type keyword(s) here" />
        <button type="submit" class="btn btn-sm button-theme">Search</button>
    </form>
</div>
@include('fontend.layouts.scripts')
</body>
</html>