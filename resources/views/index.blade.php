@extends('layouts.app')


@section('content')
    <!-- ==================== blog-slider-section start ==================== -->
    <section id="blog-slider-section" class="blog-slider-section w100dt mb-50">
        <div class="container">

            <div class="slider">
                <ul class="slides">
                    <li class="slider-item">
                        <img src="img/myself.jpg" alt="Image">
                        {{--<div class="caption center-align">--}}
                            {{--<a href="#" class="tag l-blue w100dt mb-30">Travel</a>--}}
                            {{--<h1 class="card-title mb-10">--}}
                                {{--Labore Etdolore Magna Aliqua Utero--}}
                            {{--</h1>--}}
                            {{--<p>--}}
                                {{--Sedquia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.--}}
                                {{--Sedquia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.--}}
                            {{--</p>--}}
                            {{--<a href="single-blog.html" class="custom-btn waves-effect waves-light">READ MORE</a>--}}
                        {{--</div>--}}
                    </li>
                    <li class="slider-item">
                        <img src="img/lifestyle.jpg" alt="Image">
                        <div class="caption left-align">
                            <a href="#" class="tag l-blue w100dt mb-30">Lifestyle</a>
                            <h1 class="card-title mb-10">
                                Labore Etdolore Magna Aliqua Utero
                            </h1>
                            <p>
                                Sedquia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                                Sedquia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                            </p>
                            <a href="single-blog.html" class="custom-btn waves-effect waves-light">READ MORE</a>
                        </div>
                    </li>
                    <li class="slider-item">
                        <img src="img/fashion.jpg" alt="Image">
                        <div class="caption right-align">
                            <a href="#" class="tag l-blue w100dt mb-30">Fashion</a>
                            <h1 class="card-title mb-10">
                                Labore Etdolore Magna Aliqua Utero
                            </h1>
                            <p>
                                Sedquia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                                Sedquia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                            </p>
                            <a href="single-blog.html" class="custom-btn waves-effect waves-light">READ MORE</a>
                        </div>
                    </li>
                </ul>
            </div>

        </div>
        <!-- container -->
    </section>
    <!-- /#blog-slider-section -->
    <!-- ==================== blog-slider-section end ==================== -->





    <!-- ==================== daily-lifestyle-section Start ==================== -->
    <section id="daily-lifestyle-section" class="daily-lifestyle-section mb-50">
        <div class="container">

            <div class="owl-carousel small-carousel owl-theme">
                @foreach($love_articles as $love)
                    <div class="item">
                        <div class="card horizontal">
                            <div class="card-image">
                                <img src="/img/blog_list_{{ $love->id%9 }}.jpg" alt="Image" style="height:136px;">
                                <span class="effect"></span>
                            </div>
                            <!-- /.card-image -->
                            <div class="card-stacked">
                                <div class="card-content">
                                    <a href="/blog_detail_{{ $love->id }}.html" class="tag left l-blue mb-10">{!! str_limit($love->title,20,'...') !!}</a>
                                    <a href="/blog_detail_{{ $love->id }}.html" class="sm-name">{!! str_limit($love->content,30,'...') !!}</a>
                                </div>
                                <!-- /.card-content -->
                                <div class="card-action">
                                    <p class="hero left">
                                        BY - <a href="/blog_detail_{{ $love->id }}.html" class="l-blue">Limancheng</a>
                                    </p>
                                    <ul class="post-mate right">
                                        <li>
                                            <a href="/blog_detail_{{ $love->id }}.html" class="m-0"><i class="icofont icofont-comment"></i> 32</a>
                                        </li>
                                    </ul>
                                    <!-- /.post-mate -->
                                </div>
                                <!-- /.card-action -->
                            </div>
                            <!-- /.card-stacked -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.item -->
                @endforeach
            </div>
            <!-- /.small-carousel -->
        </div>
        <!-- container -->
    </section>
    <!-- /#daily-lifestyle-section -->
    <!-- ==================== daily-lifestyle-section End ==================== -->





    <!-- ==================== blog-section start ==================== -->
    <section id="blog-section" class="blog-section w100dt mb-50">
        <div class="container">
            <div class="row">

                <div class="col s12 m8 l8">
                    @foreach($articles as $article)
                        <div class="blogs mb-30">
                            <div class="card">
                                <div class="card-image">
                                    <img src="/img/blog_list_{{ $article->id%9 }}.jpg" alt="Image">
                                    <a class="btn-floating center-align cmn-bgcolor halfway-fab waves-effect waves-light">
                                        <i class="icofont icofont-camera-alt"></i>
                                    </a>
                                </div>
                                <!-- /.card-image -->
                                <div class="card-content w100dt">
                                    <p>
                                    </p>
                                    <a href="/blog_detail_{{ $article->id }}.html" class="card-title">
                                        {{ $article->title }}
                                    </a>
                                    <p class="mb-30">
                                        {!! str_limit($article->content,100,'...') !!}
                                    </p>
                                    <ul class="post-mate-time left">
                                        <li>
                                            <p class="hero left">
                                                By - <a href="#" class="l-blue">Limancheng</a>
                                            </p>
                                        </li>
                                        <li>
                                            <i class="icofont icofont-ui-calendar"></i> {{ date('Y-m-d', $article->add_time) }}
                                        </li>
                                    </ul>

                                    <ul class="post-mate right">
                                        <li class="like">
                                            <a href="#">
                                                <i class="icofont icofont-heart-alt"></i> {{ $article->love_num }}
                                            </a>
                                        </li>
                                        <li class="comment">
                                            <a href="#">
                                                <i class="icofont icofont-comment"></i> 32
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- /.card-content -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.blogs -->
                    @endforeach

                </div>
                <!-- colm8 -->




                <div class="col s12 m4 l4">

                    <div class="sidebar-testimonial mb-30">
                        <div class="sidebar-title center-align">
                            <h2>Hi Its Me!</h2>
                        </div>
                        <!-- /.sidebar-title -->

                        <div class="carousel carousel-slider center" data-indicators="true">
                            <div class="carousel-item">
                                <div class="item-img">
                                    <span>R</span>
                                </div>
                                <h2>Rakibul Hassan</h2>
                                <small>Web Design & Development</small>
                                <p>
                                    Sedut perspiciatis unde omnis iste natus errorsit voluptatem accusantium doloremque.
                                </p>
                            </div>
                            <div class="carousel-item">
                                <div class="item-img">
                                    <span>O</span>
                                </div>
                                <h2>Rakibul Hassan</h2>
                                <small>Web Design & Development</small>
                                <p>
                                    Sedut perspiciatis unde omnis iste natus errorsit voluptatem accusantium doloremque.
                                </p>
                            </div>
                            <div class="carousel-item">
                                <div class="item-img">
                                    <span>K</span>
                                </div>
                                <h2>Rakibul Hassan</h2>
                                <small>Web Design & Development</small>
                                <p>
                                    Sedut perspiciatis unde omnis iste natus errorsit voluptatem accusantium doloremque.
                                </p>
                            </div>
                            <div class="carousel-item">
                                <div class="item-img">
                                    <span>I</span>
                                </div>
                                <h2>Rakibul Hassan</h2>
                                <small>Web Design & Development</small>
                                <p>
                                    Sedut perspiciatis unde omnis iste natus errorsit voluptatem accusantium doloremque.
                                </p>
                            </div>
                            <div class="carousel-item">
                                <div class="item-img">
                                    <span>B</span>
                                </div>
                                <h2>Rakibul Hassan</h2>
                                <small>Web Design & Development</small>
                                <p>
                                    Sedut perspiciatis unde omnis iste natus errorsit voluptatem accusantium doloremque.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- /.sidebar-testimonial -->




                    <div class="sidebar-followme w100dt mb-30">
                        <div class="sidebar-title center-align">
                            <h2>Follow Me</h2>
                        </div>
                        <!-- /.sidebar-title -->

                        <ul class="followme-links w100dt">
                            <li class="mrb15">
                                <a href="#" class="facebook">
                                    <i class="icofont icofont-social-facebook"></i>
                                    <small class="Followers white-text">105 Likes</small>
                                </a>
                            </li>
                            <li class="mrb15">
                                <a href="#" class="twitter">
                                    <i class="icofont icofont-social-twitter"></i>
                                    <small class="Followers white-text">50 Follows</small>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="google-plus">
                                    <i class="icofont icofont-social-google-plus"></i>
                                    <small class="Followers white-text">39 Follows</small>
                                </a>
                            </li>

                            <li class="mrb15">
                                <a href="#" class="linkedin">
                                    <i class="icofont icofont-brand-linkedin"></i>
                                    <small class="Followers white-text">50 Follows</small>
                                </a>
                            </li>
                            <li class="mrb15">
                                <a href="#" class="pinterest">
                                    <i class="icofont icofont-social-pinterest"></i>
                                    <small class="Followers white-text">50 Follows</small>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="instagram">
                                    <i class="icofont icofont-social-instagram"></i>
                                    <small class="Followers white-text">39 Likes</small>
                                </a>
                            </li>
                        </ul>

                    </div>
                    <!-- /.sidebar-followme -->




                    <div class="featured-posts w100dt mb-30">
                        <div class="sidebar-title center-align">
                            <h2>Featured Posts</h2>
                        </div>
                        <!-- /.sidebar-title -->

                        <div class="sidebar-posts">
                            <div class="card">
                                <div class="card-image mb-10">
                                    <img src="img/blog3.jpg" alt="Image">
                                    <span class="effect"></span>
                                </div>
                                <!-- /.card-image -->
                                <div class="card-content w100dt">
                                    <p>
                                        <a href="#" class="tag left w100dt l-blue mb-10">Lifestyle</a>
                                    </p>
                                    <a href="single-blog.html" class="card-title">
                                        Lorem Ipsum Dolor Site Amet Consectetur Adipisicing Elito seddo Eiusmod
                                    </a>
                                    <ul class="post-mate-time left">
                                        <li>
                                            <p class="hero left">
                                                By - <a href="#" class="l-blue">SujonMaji</a>
                                            </p>
                                        </li>
                                    </ul>

                                    <ul class="post-mate right">
                                        <li class="like">
                                            <a href="#">
                                                <i class="icofont icofont-heart-alt"></i> 55
                                            </a>
                                        </li>
                                        <li class="comment">
                                            <a href="#">
                                                <i class="icofont icofont-comment"></i> 32
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- /.card-content -->
                            </div>
                            <!-- /.card -->

                            <div class="card">
                                <div class="card-image mb-10">
                                    <img src="img/blog1.jpg" alt="Image">
                                    <span class="effect"></span>
                                </div>
                                <!-- /.card-image -->
                                <div class="card-content w100dt">
                                    <p>
                                        <a href="#" class="tag left w100dt l-blue mb-10">Fashion</a>
                                    </p>
                                    <a href="single-blog.html" class="card-title">
                                        Lorem Ipsum Dolor Site Amet Consectetur Adipisicing Elito seddo Eiusmod
                                    </a>
                                    <ul class="post-mate-time left">
                                        <li>
                                            <p class="hero left">
                                                By - <a href="#" class="l-blue">SujonMaji</a>
                                            </p>
                                        </li>
                                    </ul>

                                    <ul class="post-mate right">
                                        <li class="like">
                                            <a href="#">
                                                <i class="icofont icofont-heart-alt"></i> 55
                                            </a>
                                        </li>
                                        <li class="comment">
                                            <a href="#">
                                                <i class="icofont icofont-comment"></i> 32
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- /.card-content -->
                            </div>
                            <!-- /.card -->

                            <div class="card">
                                <div class="card-image mb-10">
                                    <img src="img/blog2.jpg" alt="Image">
                                    <span class="effect"></span>
                                </div>
                                <!-- /.card-image -->
                                <div class="card-content w100dt">
                                    <p>
                                        <a href="#" class="tag left w100dt l-blue mb-10">Travel</a>
                                    </p>
                                    <a href="single-blog.html" class="card-title">
                                        Lorem Ipsum Dolor Site Amet Consectetur Adipisicing Elito seddo Eiusmod
                                    </a>
                                    <ul class="post-mate-time left">
                                        <li>
                                            <p class="hero left">
                                                By - <a href="#" class="l-blue">SujonMaji</a>
                                            </p>
                                        </li>
                                    </ul>

                                    <ul class="post-mate right">
                                        <li class="like">
                                            <a href="#">
                                                <i class="icofont icofont-heart-alt"></i> 55
                                            </a>
                                        </li>
                                        <li class="comment">
                                            <a href="#">
                                                <i class="icofont icofont-comment"></i> 32
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- /.card-content -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.sidebar-posts -->

                    </div>
                    <!-- /.featured-posts -->




                    <div class="top-post w100dt mb-30">
                        <div class="sidebar-title center-align">
                            <h2>Top Posts</h2>
                        </div>
                        <!-- /.sidebar-title -->

                        <ul id="tabs-swipe-demo" class="top-post-tab tabs tabs-fixed-width">
                            <li class="tab"><a href="#test-swipe-1" class="active">Most Views</a></li>
                            <li class="tab"><a href="#test-swipe-2">Recent</a></li>
                            <li class="tab"><a href="#test-swipe-3">Comments</a></li>
                        </ul>

                        <div id="test-swipe-1" class="tab-contant most-view">

                            <div class="sidebar-posts">
                                <div class="card">
                                    <div class="card-image mb-10">
                                        <img src="img/fashion.jpg" alt="Image">
                                        <span class="effect"></span>
                                    </div>
                                    <!-- /.card-image -->
                                    <div class="card-content w100dt">
                                        <p>
                                            <a href="#" class="tag left w100dt l-blue mb-10">Fashion</a>
                                        </p>
                                        <a href="single-blog.html" class="card-title">
                                            Lorem Ipsum Dolor Site Amet Consectetur Adipisicing Elito seddo Eiusmod
                                        </a>
                                        <ul class="post-mate-time left">
                                            <li>
                                                <p class="hero left">
                                                    By - <a href="#" class="l-blue">SujonMaji</a>
                                                </p>
                                            </li>
                                        </ul>

                                        <ul class="post-mate right">
                                            <li class="like">
                                                <a href="#">
                                                    <i class="icofont icofont-heart-alt"></i> 55
                                                </a>
                                            </li>
                                            <li class="comment">
                                                <a href="#">
                                                    <i class="icofont icofont-comment"></i> 32
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /.card-content -->
                                </div>
                                <!-- /.card -->

                                <div class="hot-post w100dt mb-10">
                                    <div class="hot-post-image">
                                        <img src="img/img3.jpg" alt="Image">
                                        <span class="effect"></span>
                                    </div>
                                    <!-- /.hot-post-image -->
                                    <div class="hot-post-stacked">
                                        <p>
                                            <a href="#" class="tag left w100dt l-blue mb-10">Fashion</a>
                                        </p>
                                        <a href="single-blog.html" class="sm-name mb-10">Trud Exercitation EllaMcop Saboris</a>
                                        <div class="hot-post-action">
                                            <p class="hero left">
                                                BY - <a href="#" class="l-blue">SujonMaji</a>
                                            </p>
                                            <ul class="post-mate right">
                                                <li class="comment">
                                                    <a href="#">
                                                        <i class="icofont icofont-comment"></i> 32
                                                    </a>
                                                </li>
                                            </ul>
                                            <!-- /.post-mate -->
                                        </div>
                                        <!-- /.hot-post-action -->
                                    </div>
                                    <!-- /.hot-post-stacked -->
                                </div>
                                <!-- /.hot-post -->

                                <div class="hot-post w100dt mb-10">
                                    <div class="hot-post-image">
                                        <img src="img/img2.jpg" alt="Image">
                                        <span class="effect"></span>
                                    </div>
                                    <!-- /.hot-post-image -->
                                    <div class="hot-post-stacked">
                                        <p>
                                            <a href="#" class="tag left w100dt l-blue mb-10">Travel</a>
                                        </p>
                                        <a href="single-blog.html" class="sm-name mb-10">Trud Exercitation EllaMcop Saboris</a>
                                        <div class="hot-post-action">
                                            <p class="hero left">
                                                BY - <a href="#" class="l-blue">SujonMaji</a>
                                            </p>
                                            <ul class="post-mate right">
                                                <li class="comment">
                                                    <a href="#">
                                                        <i class="icofont icofont-comment"></i> 32
                                                    </a>
                                                </li>
                                            </ul>
                                            <!-- /.post-mate -->
                                        </div>
                                        <!-- /.hot-post-action -->
                                    </div>
                                    <!-- /.hot-post-stacked -->
                                </div>
                                <!-- /.hot-post -->

                                <div class="hot-post w100dt mb-10">
                                    <div class="hot-post-image">
                                        <img src="img/img1.jpg" alt="Image">
                                        <span class="effect"></span>
                                    </div>
                                    <!-- /.hot-post-image -->
                                    <div class="hot-post-stacked">
                                        <p>
                                            <a href="#" class="tag left w100dt l-blue mb-10">Lifestyle</a>
                                        </p>
                                        <a href="single-blog.html" class="sm-name mb-10">Trud Exercitation EllaMcop Saboris</a>
                                        <div class="hot-post-action">
                                            <p class="hero left">
                                                BY - <a href="#" class="l-blue">SujonMaji</a>
                                            </p>
                                            <ul class="post-mate right">
                                                <li class="comment">
                                                    <a href="#">
                                                        <i class="icofont icofont-comment"></i> 32
                                                    </a>
                                                </li>
                                            </ul>
                                            <!-- /.post-mate -->
                                        </div>
                                        <!-- /.hot-post-action -->
                                    </div>
                                    <!-- /.hot-post-stacked -->
                                </div>
                                <!-- /.hot-post -->
                            </div>
                            <!-- /.sidebar-posts -->

                        </div>
                        <!-- /.most-view -->


                        <div id="test-swipe-2" class="tab-contant recent-post">

                            <div class="hot-post w100dt p-15">
                                <div class="hot-post-image">
                                    <img src="img/img3.jpg" alt="Image">
                                    <span class="effect"></span>
                                </div>
                                <!-- /.hot-post-image -->
                                <div class="hot-post-stacked">
                                    <p>
                                        <a href="#" class="tag left w100dt l-blue mb-10">Fashion</a>
                                    </p>
                                    <a href="single-blog.html" class="sm-name mb-10">Trud Exercitation EllaMcop Saboris</a>
                                    <div class="hot-post-action">
                                        <p class="hero left">
                                            BY - <a href="#" class="l-blue">SujonMaji</a>
                                        </p>
                                        <ul class="post-mate right">
                                            <li class="comment">
                                                <a href="#">
                                                    <i class="icofont icofont-comment"></i> 32
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- /.post-mate -->
                                    </div>
                                    <!-- /.hot-post-action -->
                                </div>
                                <!-- /.hot-post-stacked -->
                            </div>
                            <!-- /.hot-post -->

                            <div class="hot-post w100dt p-15">
                                <div class="hot-post-image">
                                    <img src="img/img2.jpg" alt="Image">
                                    <span class="effect"></span>
                                </div>
                                <!-- /.hot-post-image -->
                                <div class="hot-post-stacked">
                                    <p>
                                        <a href="#" class="tag left w100dt l-blue mb-10">Fashion</a>
                                    </p>
                                    <a href="single-blog.html" class="sm-name mb-10">Trud Exercitation EllaMcop Saboris</a>
                                    <div class="hot-post-action">
                                        <p class="hero left">
                                            BY - <a href="#" class="l-blue">SujonMaji</a>
                                        </p>
                                        <ul class="post-mate right">
                                            <li class="comment">
                                                <a href="#">
                                                    <i class="icofont icofont-comment"></i> 32
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- /.post-mate -->
                                    </div>
                                    <!-- /.hot-post-action -->
                                </div>
                                <!-- /.hot-post-stacked -->
                            </div>
                            <!-- /.hot-post -->

                            <div class="hot-post w100dt p-15">
                                <div class="hot-post-image">
                                    <img src="img/img1.jpg" alt="Image">
                                    <span class="effect"></span>
                                </div>
                                <!-- /.hot-post-image -->
                                <div class="hot-post-stacked">
                                    <p>
                                        <a href="#" class="tag left w100dt l-blue mb-10">Fashion</a>
                                    </p>
                                    <a href="single-blog.html" class="sm-name mb-10">Trud Exercitation EllaMcop Saboris</a>
                                    <div class="hot-post-action">
                                        <p class="hero left">
                                            BY - <a href="#" class="l-blue">SujonMaji</a>
                                        </p>
                                        <ul class="post-mate right">
                                            <li class="comment">
                                                <a href="#">
                                                    <i class="icofont icofont-comment"></i> 32
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- /.post-mate -->
                                    </div>
                                    <!-- /.hot-post-action -->
                                </div>
                                <!-- /.hot-post-stacked -->
                            </div>
                            <!-- /.hot-post -->

                            <div class="hot-post w100dt p-15">
                                <div class="hot-post-image">
                                    <img src="img/img3.jpg" alt="Image">
                                    <span class="effect"></span>
                                </div>
                                <!-- /.hot-post-image -->
                                <div class="hot-post-stacked">
                                    <p>
                                        <a href="#" class="tag left w100dt l-blue mb-10">Fashion</a>
                                    </p>
                                    <a href="single-blog.html" class="sm-name mb-10">Trud Exercitation EllaMcop Saboris</a>
                                    <div class="hot-post-action">
                                        <p class="hero left">
                                            BY - <a href="#" class="l-blue">SujonMaji</a>
                                        </p>
                                        <ul class="post-mate right">
                                            <li class="comment">
                                                <a href="#">
                                                    <i class="icofont icofont-comment"></i> 32
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- /.post-mate -->
                                    </div>
                                    <!-- /.hot-post-action -->
                                </div>
                                <!-- /.hot-post-stacked -->
                            </div>
                            <!-- /.hot-post -->

                            <div class="hot-post w100dt p-15">
                                <div class="hot-post-image">
                                    <img src="img/img2.jpg" alt="Image">
                                    <span class="effect"></span>
                                </div>
                                <!-- /.hot-post-image -->
                                <div class="hot-post-stacked">
                                    <p>
                                        <a href="#" class="tag left w100dt l-blue mb-10">Fashion</a>
                                    </p>
                                    <a href="single-blog.html" class="sm-name mb-10">Trud Exercitation EllaMcop Saboris</a>
                                    <div class="hot-post-action">
                                        <p class="hero left">
                                            BY - <a href="#" class="l-blue">SujonMaji</a>
                                        </p>
                                        <ul class="post-mate right">
                                            <li class="comment">
                                                <a href="#">
                                                    <i class="icofont icofont-comment"></i> 32
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- /.post-mate -->
                                    </div>
                                    <!-- /.hot-post-action -->
                                </div>
                                <!-- /.hot-post-stacked -->
                            </div>
                            <!-- /.hot-post -->

                            <div class="hot-post w100dt p-15">
                                <div class="hot-post-image">
                                    <img src="img/img1.jpg" alt="Image">
                                    <span class="effect"></span>
                                </div>
                                <!-- /.hot-post-image -->
                                <div class="hot-post-stacked">
                                    <p>
                                        <a href="#" class="tag left w100dt l-blue mb-10">Fashion</a>
                                    </p>
                                    <a href="single-blog.html" class="sm-name mb-10">Trud Exercitation EllaMcop Saboris</a>
                                    <div class="hot-post-action">
                                        <p class="hero left">
                                            BY - <a href="#" class="l-blue">SujonMaji</a>
                                        </p>
                                        <ul class="post-mate right">
                                            <li class="comment">
                                                <a href="#">
                                                    <i class="icofont icofont-comment"></i> 32
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- /.post-mate -->
                                    </div>
                                    <!-- /.hot-post-action -->
                                </div>
                                <!-- /.hot-post-stacked -->
                            </div>
                            <!-- /.hot-post -->

                        </div>
                        <!-- /.recent-post -->


                        <div id="test-swipe-3" class="tab-contant Comments-post">

                            <div class="card-panel grey lighten-5 z-depth-1">
                                <div class="row valign-wrapper">
                                    <div class="col s3">
                                        <img src="img/img1.png" alt="Image" class="circle responsive-img"> <!-- notice the "circle" class -->
                                    </div>
                                    <div class="col s9">
											<span class="black-text">
												Lorem ipsum dolor sit amet, consectetur adipisicing elit.
											</span>
                                    </div>
                                </div>
                            </div>
                            <!-- card-panel -->

                            <div class="card-panel grey lighten-5 z-depth-1">
                                <div class="row valign-wrapper">
                                    <div class="col s3">
                                        <img src="img/img2.png" alt="Image" class="circle responsive-img"> <!-- notice the "circle" class -->
                                    </div>
                                    <div class="col s9">
											<span class="black-text">
												Lorem ipsum dolor sit amet, consectetur adipisicing elit.
											</span>
                                    </div>
                                </div>
                            </div>
                            <!-- card-panel -->

                            <div class="card-panel grey lighten-5 z-depth-1">
                                <div class="row valign-wrapper">
                                    <div class="col s3">
                                        <img src="img/img3.png" alt="Image" class="circle responsive-img"> <!-- notice the "circle" class -->
                                    </div>
                                    <div class="col s9">
											<span class="black-text">
												Lorem ipsum dolor sit amet, consectetur adipisicing elit.
											</span>
                                    </div>
                                </div>
                            </div>
                            <!-- card-panel -->

                            <div class="card-panel grey lighten-5 z-depth-1">
                                <div class="row valign-wrapper">
                                    <div class="col s3">
                                        <img src="img/img1.png" alt="Image" class="circle responsive-img"> <!-- notice the "circle" class -->
                                    </div>
                                    <div class="col s9">
											<span class="black-text">
												Lorem ipsum dolor sit amet, consectetur adipisicing elit.
											</span>
                                    </div>
                                </div>
                            </div>
                            <!-- card-panel -->

                            <div class="card-panel grey lighten-5 z-depth-1">
                                <div class="row valign-wrapper">
                                    <div class="col s3">
                                        <img src="img/img1.png" alt="Image" class="circle responsive-img"> <!-- notice the "circle" class -->
                                    </div>
                                    <div class="col s9">
											<span class="black-text">
												Lorem ipsum dolor sit amet, consectetur adipisicing elit.
											</span>
                                    </div>
                                </div>
                            </div>
                            <!-- card-panel -->

                            <div class="card-panel grey lighten-5 z-depth-1">
                                <div class="row valign-wrapper">
                                    <div class="col s3">
                                        <img src="img/img1.png" alt="Image" class="circle responsive-img"> <!-- notice the "circle" class -->
                                    </div>
                                    <div class="col s9">
											<span class="black-text">
												Lorem ipsum dolor sit amet, consectetur adipisicing elit.
											</span>
                                    </div>
                                </div>
                            </div>
                            <!-- card-panel -->

                            <div class="card-panel grey lighten-5 z-depth-1">
                                <div class="row valign-wrapper">
                                    <div class="col s3">
                                        <img src="img/img2.png" alt="Image" class="circle responsive-img"> <!-- notice the "circle" class -->
                                    </div>
                                    <div class="col s9">
											<span class="black-text">
												Lorem ipsum dolor sit amet, consectetur adipisicing elit.
											</span>
                                    </div>
                                </div>
                            </div>
                            <!-- card-panel -->

                            <div class="card-panel grey lighten-5 z-depth-1">
                                <div class="row valign-wrapper">
                                    <div class="col s3">
                                        <img src="img/img3.png" alt="Image" class="circle responsive-img"> <!-- notice the "circle" class -->
                                    </div>
                                    <div class="col s9">
											<span class="black-text">
												Lorem ipsum dolor sit amet, consectetur adipisicing elit.
											</span>
                                    </div>
                                </div>
                            </div>
                            <!-- card-panel -->

                            <div class="card-panel grey lighten-5 z-depth-1">
                                <div class="row valign-wrapper">
                                    <div class="col s3">
                                        <img src="img/img1.png" alt="Image" class="circle responsive-img"> <!-- notice the "circle" class -->
                                    </div>
                                    <div class="col s9">
											<span class="black-text">
												Lorem ipsum dolor sit amet, consectetur adipisicing elit.
											</span>
                                    </div>
                                </div>
                            </div>
                            <!-- card-panel -->

                            <div class="card-panel grey lighten-5 z-depth-1">
                                <div class="row valign-wrapper">
                                    <div class="col s3">
                                        <img src="img/img1.png" alt="Image" class="circle responsive-img"> <!-- notice the "circle" class -->
                                    </div>
                                    <div class="col s9">
											<span class="black-text">
												Lorem ipsum dolor sit amet, consectetur adipisicing elit.
											</span>
                                    </div>
                                </div>
                            </div>
                            <!-- card-panel -->

                        </div>
                        <!-- /.tab-contant -->
                    </div>
                    <!-- /.top-post -->




                    <div class="sidebar-subscribe w100dt">
                        <div class="sidebar-title center-align">
                            <h2>Subscribe</h2>
                        </div>
                        <!-- /.sidebar-title -->

                        <div class="subscribe">
                            <p class="mb-30">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmo.
                            </p>
                            <form action="#">
                                <div class="input-field">
                                    <input id="email" type="email" class="validate">
                                    <label class="left-align" for="email">Enter email address</label>
                                </div>
                                <a class="waves-effect waves-light">SUBMIT NOW</a>
                            </form>
                        </div>
                        <!-- /.subscribe -->

                    </div>
                    <!-- /.sidebar-subscribe -->

                </div>
                <!-- colm4 -->

            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </section>
    <!-- /#blog-section -->
    <!-- ==================== blog-section end ==================== -->





    <!-- ==================== instag leftram-section Start ==================== -->
    <section id="instagram-section" class="instagram-section w100dt">

        <div class="instagram-link w100dt">
            <a href="#">
                <span>FIND US ON INSTAGRAM</span>
                @SUJONMAJIDESIGN
            </a>
        </div>

    </section>
    <!-- /#instag leftram-section -->
    <!-- ==================== instag leftram-section End ==================== -->
@endsection

