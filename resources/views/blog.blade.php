@extends('layouts.app')


@section('content')

<!-- ==================== header-section Start ==================== -->
<section id="breadcrumb-section" class="breadcrumb-section">

    <!-- container -->
</section>
<!-- /.breadcrumb-section -->
<!-- ==================== header-section End ==================== -->





<!-- ==================== cateogry-section start ==================== -->
<section id="cateogry-section" class="cateogry-section w100dt mb-50 single-blog-section">
    <div class="container">
        <div class="row">

            <div class="col s12 m8 l8">

                <div class="row">

                    @foreach($articles as $article)
                        <div class="col m12 s12">
                            <div class="blogs mb-30">
                                <div class="card">
                                    <div class="card-image">
                                        {{--<img src="img/blog_list_{{ $article->id%9 }}.jpg" alt="Image">--}}
                                    </div>
                                    <!-- /.card-image -->
                                    <div class="card-content w100dt">
                                        <a href="/blog_detail_{{ $article->id }}.html" class="card-title">
                                            {{ $article->title }}
                                        </a>
                                        <p class="mb-30">
                                            <a href="/blog_detail_{{ $article->id }}.html" class="">
                                            {!! str_limit($article->content,100,'...') !!}
                                            </a>
                                        </p>
                                        <ul class="post-mate-time left">
                                            <li>
                                                <p class="hero left">
                                                    By - <a href="#" class="l-blue">Limancheng</a>
                                                </p>
                                            </li>
                                            <li>
                                                <i class="icofont icofont-ui-calendar"></i> {{ $article->add_time }}
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
                        </div>
                    @endforeach
                    <!-- colm6 -->
                </div>
                <!-- row -->
                {{ $articles->links('vendor/pagination/default') }}

            </div>
            <!-- colm8 -->

            <div class="col s12 m4 l4">
                <div class="sidebar-followme w100dt mb-30">
                    <div class="sidebar-title center-align">
                        <h2>文章标签</h2>
                    </div>
                    <!-- /.sidebar-title -->
                    <ul class="tag-list" style="margin-left:20px;margin-top:10px;margin-bottom:10px;">
                        @foreach($article_type as $key=>$val)
                            <li class="" style="margin:5px;"><a href="/blog_1_{{ $key }}.html" class="waves-effect">#{{ $val }}</a></li>
                        @endforeach
                    </ul>
                </div>
                <!-- /.sidebar-followme -->

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

            </div>
            <!-- colm4 -->

        </div>
        <!-- row -->
    </div>
    <!-- container -->
</section>
<!-- /#cateogry-section -->
<!-- ==================== cateogry-section end ==================== -->





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