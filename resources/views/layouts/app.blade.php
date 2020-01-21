<!DOCTYPE html>
<html lang="zxx">

<head>

    <title>{{ $header['title'] }}</title>
    <meta name="description" content="{{ $header['description'] }}"/>
    <meta name="Keywords" content="{{ $header['keywords'] }}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- css include -->
    <link rel="stylesheet" type="text/css" href="{{asset(_STATIC_FILES_.'/css/materialize.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset(_STATIC_FILES_.'/css/icofont.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset(_STATIC_FILES_.'/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset(_STATIC_FILES_.'/css/owl.theme.default.min.css')}}">

    <!-- my css include -->
    <link rel="stylesheet" type="text/css" href="{{asset(_STATIC_FILES_.'/css/custom-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset(_STATIC_FILES_.'/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset(_STATIC_FILES_.'/css/responsive.css')}}">

</head>


<body>




<div class="thetop"></div>
<!-- for back to top -->

<div class='backToTop'>
    <a href="#" class='scroll'>
        <span>T</span>
        <span>O</span>
        <span>P</span>
        <span class="go-up">
					<i class="icofont icofont-long-arrow-up"></i>
				</span>
    </a>
</div>
<!-- backToTop -->




<!-- ==================== header-section Start ==================== -->
<header id="header-section" class="header-section w100dt navbar-fixed">

    <nav class="nav-extended main-nav">
        <div class="container">
            <div class="row">
                <div class="nav-wrapper w100dt">

                    <div class="logo left">
                        <a href="/" class="brand-logo">
                            <img src="{{asset(_STATIC_FILES_.'/img/logo.png')}}" style="width:93px;height:35px;" alt="brand-logo">
                        </a>
                    </div>
                    <!-- logo -->

                    <div>
                        <a href="#" data-activates="mobile-demo" class="button-collapse">
                            <i class="icofont icofont-navigation-menu"></i>
                        </a>
                        <ul id="nav-mobile" class="main-menu center-align hide-on-med-and-down">
                            <li @if($header['current_page']=='index')class="active"@endif><a href="/">首页</a></li>
                            <li @if($header['current_page']=='blog_list')class="active"@endif><a href="/blog.html">文章列表</a></li>
                            {{--<li class="dropdown">--}}
                                {{--<a href="#">PAGES <i class="icofont icofont-simple-down"></i></a>--}}
                                {{--<ul class="dropdown-container">--}}
                                    {{--<li><a href="404.html">404 Page</a></li>--}}
                                {{--</ul>--}}
                                {{--<!-- /.dropdown-container -->--}}
                            {{--</li>--}}
                            {{--<li><a href="single-blog.html">BLOG SINGLE</a></li>--}}

                            <li @if($header['current_page']=='contact')class="active"@endif><a href="/contact.html">关于我</a></li>
                            {{--<li class="dropdown">--}}
                                {{--<a href="#">登录 <i class="icofont icofont-simple-down"></i></a>--}}
                                {{--<ul class="dropdown-container">--}}
                                    {{--<li><a href="/github-authorize">github 登录</a></li>--}}
                                {{--</ul>--}}
                            {{--<!-- /.dropdown-container -->--}}
                            {{--</li>--}}
                        </ul>
                        <!-- /.main-menu -->

                        <!-- ******************** sidebar-menu ******************** -->
                        <ul class="side-nav" id="mobile-demo">
                            <li class="snavlogo center-align"><a href="/"><img src="/img/logo.png" alt="logo"></a></li>
                            <li @if($header['current_page']=='index')class="active"@endif><a href="/">首页</a></li>
                            <li @if($header['current_page']=='blog_list')class="active"@endif><a href="/blog.html">首页</a></li>
                            {{--<li class="dropdown">--}}
                            {{--<a href="#">PAGES <i class="icofont icofont-simple-down"></i></a>--}}
                            {{--<ul class="dropdown-container">--}}
                            {{--<li><a href="404.html">404 Page</a></li>--}}
                            {{--</ul>--}}
                            {{--<!-- /.dropdown-container -->--}}
                            {{--</li>--}}
                            {{--<li><a href="single-blog.html">BLOG SINGLE</a></li>--}}

                            <li @if($header['current_page']=='contact')class="active"@endif><a href="/contact.html">关于我</a></li>
                        </ul>
                    </div>
                    <!-- main-menu -->
                    @if(!session('user'))
                        <a href="https://github.com/login/oauth/authorize?client_id=689780fd178575437e3f" class="search-trigger right">
                            登录
                        </a>
                    @else
                        <a href="javascript:void(0)" class="search-trigger right">
                            <img style="width:50px;height:50px;border-radius:100%;margin-top:-16px;" src="{{asset(_STATIC_FILES_.session('user')['avatar'])}}">
                        </a>
                    @endif
                    <!-- search -->
                    <div id="myNav" class="overlay">
                        <a href="javascript:void(0)" class="closebtn">&times;</a>
                        <div class="overlay-content">
                            <form>
                                <input type="text" name="search" placeholder="Search...">
                                <br>
                                <button class="waves-effect waves-light" type="submit" name="action">Search</button>
                            </form>
                        </div>
                    </div>

                </div>
                <!-- /.nav-wrapper -->
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </nav>

</header>
<!-- /#header-section -->
<!-- ==================== header-section End ==================== -->



@yield('content')






<!-- ==================== footer-section Start ==================== -->
<footer id="footer-section" class="footer-section w100dt">
    <div class="container">

        <div class="footer-logo w100dt center-align mb-30">
            <a href="#" class="brand-logo">
                <img src="/img/logo.png" alt="brand-logo">
            </a>
        </div>
        <!-- /.footer-logo -->

        <ul class="footer-social-links w100dt center-align mb-30">
            <li><a href="#" class="facebook">FACEBOOK</a></li>
            <li><a href="#" class="twitter">TWITTER</a></li>
            <li><a href="#" class="google-plus">GOOGLE+</a></li>
            <li><a href="#" class="linkedin">LINKDIN</a></li>
            <li><a href="#" class="pinterest">PINTEREST</a></li>
            <li><a href="#" class="instagram">INSTAGRAM</a></li>
        </ul>

        <p class="center-align">
            <i class="icofont icofont-heart-alt l-blue"></i>

            Copyright © www.limanc.cn 版权所有. <a href="http://beian.miit.gov.cn" target="_blank">京ICP备16062608号</a>
        </p>

    </div>
    <!-- container -->
</footer>
<!-- /#footer-section -->
<!-- ==================== footer-section End ==================== -->


<!-- my custom js -->
<script type="text/javascript" src="{{asset(_STATIC_FILES_.'/js/jquery-3.1.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset(_STATIC_FILES_.'/js/materialize.js')}}"></script>
<script type="text/javascript" src="{{asset(_STATIC_FILES_.'/js/owl.carousel.min.js')}}"></script>

<!-- my custom js -->
<script type="text/javascript" src="{{asset(_STATIC_FILES_.'/js/custom.js')}}"></script>

<script type="text/javascript">
</script>

<!-- 追加js -->
@section('appendjs')
@show
</body>

</html>