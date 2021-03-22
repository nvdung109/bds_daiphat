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
            <h1>Đất vàng đại phát</h1>
            <ul class="breadcrumbs">
                <li><a href="index.html">Trang chủ</a></li>
                <li class="active">Sản phẩm</li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub Banner end -->

<!-- Properties section start -->
<div class="properties-section content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <!-- Option bar start -->
                <div class="option-bar">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 pro_title">
                            <h1>Thông tin tuyển dụng</h1>
                        </div>
                    </div>
                </div>
                <!-- Property box 2 start -->
                <div class="property-box-2" >
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-pad">
                            <div class="property-thumbnail">
                                <a href="properties-details.html" class="property-img">
                                    <img src="img/properties/properties-list-1.jpg" alt="properties" class="img-fluid">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-pad">
                            <div class="detail">
                                <div class="hdg">
                                    <h3 class="title">
                                        <a href="properties-details.html">Tuyển dụng</a>
                                    </h3>
                                    <p class="con_des">Vietchem tuyển dụng Phó Giám đốc Công ty AquaDelta, Vietchem tuyển dụng Phó Giám đốc Công ty AquaDelta, Vietchem tuyển dụng Phó Giám đốc Công ty AquaDelta. Vietchem tuyển dụng Phó Giám đốc Công ty AquaDelta, Vietchem tuyển dụng Phó Giám đốc Công ty AquaDelta, Vietchem tuyển dụng Phó Giám đốc Công ty AquaDelta. </p>
                                </div>
                                
                            </div>
                            <div>
                                <ul class="facilities-list clearfix">
                                    <li>
                                        <span>Số lượng</span>3
                                    </li>
                                    <li>
                                        <span>Kinh nghiệm</span> 3 năm
                                    </li>
                                    <li>
                                        <span>Ngày đăng</span> 8/3/2021
                                    </li>
                                    <li>
                                        <span>Ngày hết hạn</span> 10/3/2021
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Page navigation start -->
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="sidebar-right">
                    <div class="posts-by-category widget">
                        <h3 class="sidebar-title">Danh sách bài viết</h3>
                        <div class="s-border"></div>
                        <div class="m-border"></div>
                        <ul class="list-unstyled list-cat">
                            <li><a href="#">Chính sách </a></li>
                            <li><a href="#">Apartment</a></li>
                            <li><a href="#">Condo</a></li>
                            <li><a href="#">Multi Family</a></li>
                            <li><a href="#">Villa</a> </li>
                            <li><a href="#">Other</a></li>
                        </ul>
                    </div>
                    <!-- Recent properties start -->
                    <div class="widget recent-properties">
                        <h3 class="sidebar-title">Khu đất nổi bật</h3>
                        <div class="s-border"></div>
                        <div class="m-border"></div>
                        <div class="media mb-4">
                            <a class="pr-3" href="properties-details.html">
                                <img class="media-object" src="img/properties/small-properties-1.jpg" alt="small-properties">
                            </a>
                            <div class="media-body align-self-center">
                                <h5>
                                    <a href="properties-details.html">Modern Family Home</a>
                                </h5>
                                <div class="listing-post-meta">
                                    $345,000 | <a href="#"><i class="fa fa-calendar"></i> Oct 27, 2018 </a>
                                </div>
                            </div>
                        </div>
                        <div class="media mb-4">
                            <a class="pr-3" href="properties-details.html">
                                <img class="media-object" src="img/properties/small-properties-2.jpg" alt="small-properties">
                            </a>
                            <div class="media-body align-self-center">
                                <h5>
                                    <a href="properties-details.html">Beautiful Single Home</a>
                                </h5>
                                <div class="listing-post-meta">
                                    $415,000 | <a href="#"><i class="fa fa-calendar"></i> Feb 14, 2018 </a>
                                </div>
                            </div>
                        </div>
                        <div class="media">
                            <a class="pr-3" href="properties-details.html">
                                <img class="media-object" src="img/properties/small-properties-3.jpg" alt="small-properties">
                            </a>
                            <div class="media-body align-self-center">
                                <h5>
                                    <a href="properties-details.html">Real Luxury Villa</a>
                                </h5>
                                <div class="listing-post-meta">
                                    $345,000 | <a href="#"><i class="fa fa-calendar"></i> Oct 12, 2018 </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Our agent sidebar start -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Properties section end -->

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