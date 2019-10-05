@extends('layouts.app')

@section('content')

<!-- ==================== header-section Start ====================-->
<section id="breadcrumb-section" class="breadcrumb-section w100dt mb-30">

</section>
<!-- /.breadcrumb-section -->
<!-- ==================== header-section End ====================-->





<!-- ==================== single-blog-section start ====================-->
<section id="single-blog-section" class="single-blog-section w100dt mb-50">
    <div class="container">
        <div class="row">

            <div class="col m8 s12">

                <div class="blogs mb-30">
                    <div class="card">
                        <!-- /.card-image -->
                        <div class="card-content" style="margin-right:10px;">
                            <a href="#" class="card-title mb-30">
                                {{ $article->title }}
                            </a>
                            <ul class="post-mate-time left mb-30">
                                <li>
                                    <p class="hero left">
                                        By - <a href="#" class="l-blue">{{ $article->author_name }}</a>
                                    </p>
                                </li>
                                <li>
                                    <i class="icofont icofont-ui-calendar"></i> {{ $article->add_time }}
                                </li>
                            </ul>

                            <ul class="post-mate right mb-30">
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

                            <p class="w100dt mb-10">
                                {!! $article->content !!}
                            </p>

                            <ul class="tag-list left" style="margin-top:20px;">
                                @foreach($article->label as $val)
                                    <li><a href="#!" class="waves-effect">#{{ $article_type[$val] }}</a></li>
                                @endforeach
                            </ul>

                        </div>
                        <!-- /.card-content -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.blogs -->

                <div class="prv-nxt-post w100dt mb-30">
                    <div class="row">
                        @if(!empty($article_prev))
                            <div class="col m6 s12">
                                <div class="sb-prv-post">
                                    <div class="pn-img left">
                                        <img src="/img/img1.jpg" alt="Image">
                                    </div>
                                    <div class="pn-text left-align">
                                        <a href="/blog_detail_{{ $article_prev->id }}.html" class="title-name mb-10" style="widht:200px;">{!! str_limit($article_prev->title,20,'...') !!}</a>
                                        <a href="/blog_detail_{{ $article_prev->id }}.html" class="prv-nxt-btn l-blue"><i class="icofont icofont-caret-left"></i> 上一篇</a>
                                    </div>
                                </div>
                                <!-- /.sb-prv-post -->
                            </div>
                            <!-- colm6 -->
                        @endif
                        @if(!empty($article_next))
                            <div class="col m6 s12">
                                <div class="sb-nxt-post">
                                    <div class="pn-img right">
                                        <img src="/img/img2.jpg" alt="Image">
                                    </div>
                                    <div class="pn-text right-align">
                                        <a href="/blog_detail_{{ $article_next->id }}.html" class="title-name mb-10" style="width:200px;">{!! str_limit($article_next->title,20,'...') !!}</a>
                                        <a href="/blog_detail_{{ $article_next->id }}.html" class="prv-nxt-btn l-blue">下一篇 <i class="icofont icofont-caret-right"></i></a>
                                    </div>
                                </div>
                                <!-- /.sb-nxt-post -->
                            </div>
                            <!-- colm6 -->
                        @endif
                    </div>
                    <!-- row -->
                </div>

                <div class="peoples-comments w100dt mb-30">
                    <div class="leave-comment">

                        <div class="sidebar-title center-align" id="content-start">
                            <h2>评论</h2>
                        </div>

                        <form class="comment-area w100dt" action="#">
                            <div class="row">
                                <div class="col s12">
                                    <div class="form-item">
                                        <textarea id="textarea1" class="materialize-textarea master_content"></textarea>
                                    </div>
                                </div>
                            </div>
                            <!-- row -->
                            <button type="button" class="custom-btn waves-effect waves-light right submit-comment" pid="0" a_id="{{ $article->id }}" content_id="master_content">发表评论</button>
                        </form>
                        <!-- /.comment-area -->
                    </div>
                    <!-- /.leave-comment -->
                    <div class="sidebar-title center-align">
                        <h2>评论内容</h2>
                    </div>

                    <div class="comment-area w100dt comment-content">
                        @foreach($comment_list as $key=>$comment)
                            <div class="comment w100dt mb-30 comment-id-{{ $comment['id'] }}">
                                <div class="ppic left">
                                    <img src="/img/vistor_{{ $comment['id']%7 }}.jpg" alt="Image">
                                </div>
                                <!-- /.ppic -->
                                <div class="pname">
                                    <h4 class="mb-10">
                                        <a href="#" class="card-title l-blue">
                                            {{ $comment['user_name'] }}
                                        </a>
                                    </h4>
                                    <p class="comment-text mb-10">
                                        {{ $comment['content'] }}
                                    </p>

                                    <ul class="post-mate-time left">
                                        <li class="reply">
                                            <a href="javascript:void(0)" reply-type="master" class="comment-reply" pid="{{ $comment['id'] }}" comment-user-name="{{ $comment['user_name'] }}" aid="{{ $article->id }}" top-level="{{ $comment['id'] }}">
                                                回复
                                            </a>
                                        </li>
                                        <li>
                                            <i class="icofont icofont-ui-calendar"></i> {{ date('Y-m-d H:i:s', $comment['add_time']) }}
                                        </li>
                                    </ul>

                                </div>
                                <!-- /.pname -->
                                @foreach($comment['slave'] as $slave)
                                    <div class="cmnt-reply comment w100dt">
                                        <div class="ppic left">
                                            <img src="/img/vistor_{{ $slave['id']%7 }}.jpg" alt="Image">
                                        </div>
                                        <!-- /.ppic -->
                                        <div class="pname">
                                            <h4 class="mb-10">
                                                <a href="#" class="card-title l-blue">
                                                    {{ $slave['user_name'] }}
                                                </a>
                                            </h4>
                                            <p class="comment-text mb-10">
                                                回复<a href="javascript:void(0)" class="card-title l-blue">{{ $slave['reply_user_name'] }}</a>：{{ $slave['content'] }}
                                            </p>

                                            <ul class="post-mate-time left">
                                                <li class="reply">
                                                    <a href="javascript:void(0)" reply-type="slave" class="comment-reply" pid="{{ $slave['id'] }}" reply-user-name="{{ $slave['user_name'] }}" aid="{{ $article->id }}" master-slave="{{ $comment['id'] }}"  top-level="{{ $comment['id'] }}">
                                                        回复
                                                    </a>
                                                </li>
                                                <li>
                                                    <i class="icofont icofont-ui-calendar"></i> {{ date('Y-m-d H:i:s', $slave['add_time']) }}
                                                </li>
                                            </ul>

                                        </div>
                                        <!-- /.pname -->
                                    </div>
                                    <!-- /.cmnt-reply -->
                                 @endforeach
                            </div>
                            <!-- /.comment -->

                        @endforeach

                    </div>
                    <!-- /.comment-area -->
                </div>
                <!-- /.peoples-comments -->

            </div>
            <!-- colm8 -->




            <div class="col s12 m4 l4">
                <div class="sidebar-followme w100dt mb-30">
                    <div class="sidebar-title center-align">
                        <h2>文章标签</h2>
                    </div>
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
                                    <img src="/img/fashion.jpg" alt="Image">
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
                                    <img src="/img/img3.jpg" alt="Image">
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
                                    <img src="/img/img2.jpg" alt="Image">
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
                                    <img src="/img/img1.jpg" alt="Image">
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
                                <img src="/img/img3.jpg" alt="Image">
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
                                <img src="/img/img2.jpg" alt="Image">
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
                                <img src="/img/img1.jpg" alt="Image">
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
                                <img src="/img/img3.jpg" alt="Image">
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
                                <img src="/img/img2.jpg" alt="Image">
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
                                <img src="/img/img1.jpg" alt="Image">
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
                                    <img src="/img/img1.png" alt="Image" class="circle responsive-img"> <!-- notice the "circle" class -->
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
                                    <img src="/img/img2.png" alt="Image" class="circle responsive-img"> <!-- notice the "circle" class -->
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
                                    <img src="/img/img3.png" alt="Image" class="circle responsive-img"> <!-- notice the "circle" class -->
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
                                    <img src="/img/img1.png" alt="Image" class="circle responsive-img"> <!-- notice the "circle" class -->
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
                                    <img src="/img/img1.png" alt="Image" class="circle responsive-img"> <!-- notice the "circle" class -->
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
                                    <img src="/img/img1.png" alt="Image" class="circle responsive-img"> <!-- notice the "circle" class -->
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
                                    <img src="/img/img2.png" alt="Image" class="circle responsive-img"> <!-- notice the "circle" class -->
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
                                    <img src="/img/img3.png" alt="Image" class="circle responsive-img"> <!-- notice the "circle" class -->
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
                                    <img src="/img/img1.png" alt="Image" class="circle responsive-img"> <!-- notice the "circle" class -->
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
                                    <img src="/img/img1.png" alt="Image" class="circle responsive-img"> <!-- notice the "circle" class -->
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
<!-- /#single-blog-section -->
<!-- ==================== single-blog-section end ====================-->





<!-- ==================== instag leftram-section Start ====================-->
<section id="instagram-section" class="instagram-section w100dt">

    <div class="instagram-link w100dt">
        <a href="#">
            <span>FIND US ON INSTAGRAM</span>
            @SUJONMAJIDESIGN
        </a>
    </div>

</section>
<!-- /#instag leftram-section -->
<!-- ==================== instag leftram-section End ====================-->
@endsection
@section('appendjs')
    @parent

    <script>
        $(function(){
            //发表评论
            $('.submit-comment').click(function(){
                var pid = $(this).attr('pid');//评论父类id,默认为0
                var a_id = $(this).attr('a_id');//文章id
                var content_class = $(this).attr('content_id');
                var content = $('.'+content_class).val();
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: '/to_comment',
                    data: {
                        pid: pid,
                        a_id: a_id,
                        content: content,
                        reply_user_name : '',
                        master_slave :0
            },
                    method: "POST"
                }).done(function(e){
                    if(e.code==200){
                        var html =
                            '<div class="comment w100dt mb-30 comment-id-'+e.data.id+'">' +
                            '<div class="ppic left">' +
                            '<img src="/img/vistor_'+e.data.id%7+'.jpg" alt="Image">' +
                        '</div>' +
                        '<div class="pname">' +
                        '<h4 class="mb-10">' +
                        '<a href="#" class="card-title l-blue">'+e.data.user_name+'</a>' +
                        '</h4>' +
                        '<p class="comment-text mb-10">' + content +
                        '</p>' +
                        '<ul class="post-mate-time left">' +
                        '<li class="reply"><a href="javascript:void(0)" class="comment-reply" pid="'+pid+'" comment-user-name="'+e.data.user_name+'" aid="'+a_id+'" top-level="'+e.data.id+'">回复</a></li>' +
                        '<li><i class="icofont icofont-ui-calendar"></i>刚刚</li>' +
                        '</ul>' +
                        '</div>' +
                        '</div>';
                        $(".comment-content").prepend(html);
                        location.href='#content-start'
                    }else{
                        alert('评论失败');
                    }
                }).fail(function(e){
                    alert('评论失败');
                });
            })
            //评论回复
            $('.comment-area').on('click','comment-reply',function(){
                alert(2);
                var pid = $(this).attr('pid');
                var reply_user_name = $(this).attr('comment-user-name');
                var aid = $(this).attr('aid');
                var master_slave = $(this).attr('master-slave');
                var top_level = $(this).attr('top-level');
                var html =
                    '<div class="cmnt-reply comment w100dt">' +
                        '<div class="ppic left"><img src="/img/img3.png" alt="Image"></div>' +
                        '<div class="pname">' +
                            '<h4 class="mb-10"><a href="#" class="card-title l-blue">Angelina Jolie</a></h4>' +
                            '<p class="comment-text mb-10">' +
                                '<input id="" type="text" class="validate">' +
                                '<a href="#reply" class="waves-effect waves-light reply-comment" pid="'+pid+'" reply-user-name="'+reply_user_name+'" aid="'+aid+'" master-slave="'+master_slave+'">发表</a>' +
                            '</p>' +
                        '</div>' +
                    '</div>';
                alert(1);
                $('.comment-id-'+top_level).append(html);
                location.href='#reply';

            })
            //回复评论
            $('.comment-area').on('click','.reply-comment',function(){
                var pid = $(this).attr('pid');//评论父类id,默认为0
                var a_id = $(this).attr('aid');//文章id
                var reply_user_name = $(this).attr('reply-user-name');
                var content = $(this).prev().val();
                var master_slave = $(this).attr('master-slave');
                var obj = $(this);
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: '/to_comment',
                    data: {
                        pid: pid,
                        a_id: a_id,
                        content: content,
                        reply_user_name:reply_user_name,
                        master_slave:master_slave
                    },
                    method: "POST"
                }).done(function(e){
                    if(e.code==200){
                        obj.parent().parent().parent().remove();
                        var html =
                            '<div class="cmnt-reply comment w100dt">' +
                                '<div class="ppic left">' +
                                    '<img src="/img/vistor_'+e.data.id%7+'.jpg" alt="Image">' +
                                '</div>' +
                                '<div class="pname">' +
                                    '<h4 class="mb-10">' +
                                        '<a href="#" class="card-title l-blue">'+e.data.user_name+'</a>' +
                                    '</h4>' +
                                    '<p class="comment-text mb-10">'+content+'</p>' +
                                    '<ul class="post-mate-time left">' +
                                        '<li class="reply">' +
                                            '<a href="javascript:void(0)" class="comment-reply" pid="'+e.data.id+'" comment-user-name="'+e.data.user_name+'" aid="'+a_id+'" master-slave="'+e.data.master_slave+'">回复</a>' +
                                        '</li>' +
                                        '<li><i class="icofont icofont-ui-calendar"></i>刚刚</li>' +
                                    '</ul>' +
                                '</div>' +
                            '</div>';
                        $('.comment-id-'+e.data.pid).append(html);
                        //location.href='#content-start'
                    }else{
                        alert('评论失败');
                    }
                }).fail(function(e){
                    alert('评论失败');
                });
            })
        })
    </script>
@endsection
