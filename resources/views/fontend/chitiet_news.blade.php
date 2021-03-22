<!DOCTYPE html>
<html lang="zxx">
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
            <h1>Chi tiết tin tức</h1>
            <ul class="breadcrumbs">
                <li><a href="index.html">Home</a></li>
                <li class="active">Blog Details Right</li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub Banner end -->

<!-- Blog body start -->
<div class="blog-body content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <!-- Blog 1 start -->
                <div class="blog-1 blog-big">
                    <div class="blog-photo">
                        <img src="img/blog/blog-1.jpg" alt="blog-img" class="img-fluid">
                    </div>
                    <div class="detail">
                        <h3>
                            <a href="#">Title</a>
                        </h3>
                        <div class="post-meta">
                            <span><a href="#"><i class="flaticon-male"></i>Amdin</a></span>
                            <span><a href="#"><i class="fa fa-eye" aria-hidden="true"></i>27</a></span>
                            <span><a href="#"><i class="flaticon-calendar"></i>8/3/2021</a></span>
                        </div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five</p>
                        <p>electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.But also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. But also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.more recently with desktop publishing</p>
                        <p>essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. But also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.more recently with desktop publishing</p>
                        <p>porem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.But also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.But also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. But also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.more recently with desktop publishing</p>
                        <br>
                    </div>
                </div>
                <!-- Heading 2 -->
                <!-- Contact 2 start -->
                @include('fontend.layouts.form_contact')
                <h3 class="heading-2">Tin tức tương tự</h3>
                <div class="row blog-similar">
                    <div class="col-lg-6 col-md-6">
                        <div class="blog-1">
                            <div class="blog-photo">
                                <img src="img/blog/blog-1.jpg" alt="small-blog" class="img-fluid">
                            </div>
                            <div class="detail">
                                <h3>
                                    <a href="blog-single-sidebar-right.html">Selling Your Real House</a>
                                </h3>
                                <div class="post-meta">
                                    <span><a href="#"><i class="flaticon-male"></i>Amdin</a></span>
                                    <span><a href="#"><i class="fa fa-eye" aria-hidden="true"></i>27</a></span>
                                    <span><a href="#"><i class="flaticon-calendar"></i>8/3/2021</a></span>
                                </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry</p>
                                <a href="blog-single-sidebar-right.html" class="read-more">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('fontend.layouts.search_news')
        </div>
    </div>
</div>
<!-- Blog body end -->

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