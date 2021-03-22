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
                <img src="img/logos/black-logo.png" alt="logo">
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

<!-- Sub banner start -->
<div class="sub-banner">
    <div class="container">
        <div class="breadcrumb-area">
            <h1>Đất vàng</h1>
            <ul class="breadcrumbs">
                <li><a href="index.html">Home</a></li>
                <li class="active">Chi tiết</li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub Banner end -->

<!-- Properties details page start -->
<div class="properties-details-page content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <!-- Heading properties 3 start -->
                <div class="heading-properties-3">
                    <div class="clearfix">
                        <div class="pull-left">
                            <h1>Smart City</h1>
                        </div>
                        <div class="pull-right">
                            <h1><span>1.5 - 2 tỷ</span></h1>
                        </div>
                    </div>
                    <div class="clearfix">
                        <div class="pull-left">
                            <p><i class="flaticon-pin"></i>Đại lộ thăng long hà nội</p>
                        </div>
                        <div class="pull-right">
                            <p><i class="flaticon-calendar"></i>&nbsp<span>3/8/2021</span></p>
                        </div>
                    </div>
                </div>
                <!-- main slider carousel items -->
                <div id="propertiesDetailsSlider" class="carousel properties-details-sliders slide mb-40">
                    <div class="carousel-inner">
                        <div class="active item carousel-item" data-slide-number="0">
                            <img src="img/properties/properties-1.jpg" class="img-fluid" alt="slider-properties">
                        </div>
                        <div class="item carousel-item" data-slide-number="1">
                            <img src="img/properties/properties-2.jpg" class="img-fluid" alt="slider-properties">
                        </div>
                        <div class="item carousel-item" data-slide-number="2">
                            <img src="img/properties/properties-3.jpg" class="img-fluid" alt="slider-properties">
                        </div>
                        <div class="item carousel-item" data-slide-number="4">
                            <img src="img/properties/properties-4.jpg" class="img-fluid" alt="slider-properties">
                        </div>
                        <div class="item carousel-item" data-slide-number="5">
                            <img src="img/properties/properties-5.jpg" class="img-fluid" alt="slider-properties">
                        </div>
                        <a class="carousel-control left" href="#propertiesDetailsSlider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                        <a class="carousel-control right" href="#propertiesDetailsSlider" data-slide="next"><i class="fa fa-angle-right"></i></a>
                    </div>
                    <!-- main slider carousel nav controls -->
                    <ul class="carousel-indicators smail-properties list-inline nav nav-justified">
                        <li class="list-inline-item active">
                            <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#propertiesDetailsSlider">
                                <img src="img/properties/properties-1.jpg" class="img-fluid" alt="properties-small">
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a id="carousel-selector-1" data-slide-to="1" data-target="#propertiesDetailsSlider">
                                <img src="img/properties/properties-2.jpg" class="img-fluid" alt="properties-small">
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a id="carousel-selector-2" data-slide-to="2" data-target="#propertiesDetailsSlider">
                                <img src="img/properties/properties-3.jpg" class="img-fluid" alt="properties-small">
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a id="carousel-selector-3" data-slide-to="3" data-target="#propertiesDetailsSlider">
                                <img src="img/properties/properties-4.jpg" class="img-fluid" alt="properties-small">
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a id="carousel-selector-4" data-slide-to="4" data-target="#propertiesDetailsSlider">
                                <img src="img/properties/properties-5.jpg" class="img-fluid" alt="properties-small">
                            </a>
                        </li>
                    </ul>
                    <!-- main slider carousel items -->
                </div>
                <!-- Properties description start -->
                <div class="properties-description mb-40">
                    <h3 class="heading-2">
                        Description
                    </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra a. Aliquam pellentesque nibh et nibh feugiat gravida. Maecenas ultricies, diam vitae semper placerat, velit risus accumsan nisl, eget tempor lacus est vel nunc. Proin accumsan elit sed neque euismod fringilla. Curabitur lobortis nunc velit, et fermentum urna dapibus non. Vivamus magna lorem, elementum id gravida ac, laoreet tristique augue. Maecenas dictum lacus eu nunc porttitor, ut hendrerit arcu efficitur.</p>
                </div>
                <!-- Location start -->
                <div class="location mb-50">
                    <div class="map">
                        <h3 class="heading-2">Chỉ đường</h3>
                        <div id="map" class="contact-map"></div>
                    </div>
                </div>
                <!-- Inside properties start -->
                <div class="inside-properties mb-50">
                    <h3 class="heading-2">
                        Video
                    </h3>
                    <iframe src="https://www.youtube.com/embed/5e0LxrLSzok" allowfullscreen=""></iframe>
                </div>
                <!-- Similar Properties start -->
                <h3 class="heading-2">Dự án tương tự</h3>
                <div class="row similar-properties">
                    <div class="col-md-6">
                        <div class="property-box">
                            <div class="property-thumbnail">
                                <a href="properties-details.html" class="property-img">
                                    <div class="listing-badges">
                                        <span class="featured">Featured</span>
                                    </div>
                                    <div class="price-box"><span>$850.00</span> Per Month</div>
                                    <img class="d-block w-100" src="img/properties/properties-5.jpg" alt="properties">
                                </a>
                            </div>
                            <div class="detail">
                                <h1 class="title">
                                    <a href="properties-details.html">Real Luxury Villa</a>
                                </h1>

                                <div class="location">
                                    <a href="properties-details.html">
                                        <i class="flaticon-pin"></i>123 Kathal St. Tampa City,
                                    </a>
                                </div>
                            </div>
                            <ul class="facilities-list clearfix">
                                <li>
                                    <span>Area</span>3600 Sqft
                                </li>
                                <li>
                                    <span>Beds</span> 3
                                </li>
                                <li>
                                    <span>Baths</span> 2
                                </li>
                                <li>
                                    <span>Garage</span> 1
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
                    <div class="col-md-6">
                        <div class="property-box">
                            <div class="property-thumbnail">
                                <a href="properties-details.html" class="property-img">
                                    <div class="listing-badges">
                                        <span class="featured">Featured</span>
                                    </div>
                                    <div class="price-box"><span>$850.00</span> Per Month</div>
                                    <img class="d-block w-100" src="img/properties/properties-1.jpg" alt="properties">
                                </a>
                            </div>
                            <div class="detail">
                                <h1 class="title">
                                    <a href="properties-details.html">Modern Family Home</a>
                                </h1>

                                <div class="location">
                                    <a href="properties-details.html">
                                        <i class="flaticon-pin"></i>123 Kathal St. Tampa City,
                                    </a>
                                </div>
                            </div>
                            <ul class="facilities-list clearfix">
                                <li>
                                    <span>Area</span>3600 Sqft
                                </li>
                                <li>
                                    <span>Beds</span> 3
                                </li>
                                <li>
                                    <span>Baths</span> 2
                                </li>
                                <li>
                                    <span>Garage</span> 1
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
            </div>
            @include('fontend.layouts.search_sidebar')
        </div>
    </div>
</div>
<!-- Properties details page end -->

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

<!-- Mirrored from storage.googleapis.com/theme-vessel/checking-sites/neer-html/HTML/properties-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Mar 2021 03:10:37 GMT -->
</html>



