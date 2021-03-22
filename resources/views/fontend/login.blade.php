<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <base href="{{asset('')}}">
    @include('fontend.layouts.style')
</head>
<body>

<!-- Contact section start -->
<div class="contact-section">
    <div class="container">
        <div class="row login-box">
            <div class="col-lg-6 align-self-center pad-0">
                <div class="form-section align-self-center">
                    <h3>Đăng nhập</h3>
                    <div class="clearfix"></div>
                    <form action="#" method="GET">
                        <div class="form-group form-box">
                            <input type="email" name="email" class="input-text" placeholder="Username">
                        </div>
                        <div class="form-group form-box clearfix">
                            <input type="password" name="Password" class="input-text" placeholder="Password">
                        </div>
                        <div class="form-group clearfix">
                            <button type="submit" class="btn-md btn-theme float-left">Đăng nhập</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 bg-color-15 align-self-center pad-0 none-992 bg-img">
                <div class="info clearfix">
                    <div class="logo-2">
                        <a href="index.html">
                            <img src="img/logos/logo.png" alt="logo">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact section end -->

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