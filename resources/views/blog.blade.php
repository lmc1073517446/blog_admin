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
                        <h2>热门文章</h2>
                    </div>
                    <!-- /.sidebar-title -->
                    <div id="test-swipe-2" class="tab-contant recent-post">
                        @foreach($hot_article as $val)
                            <div class="hot-post w100dt p-15">
                                <div class="hot-post-image">
                                    <img src="/img/article_{{ $val['id']%4 }}.jpg" alt="Image">
                                    <span class="effect"></span>
                                </div>
                                <!-- /.hot-post-image -->
                                <div class="hot-post-stacked">
                                    {{--<p>--}}
                                        {{--<a href="#" class="tag left w100dt l-blue mb-10"> </a>--}}
                                    {{--</p>--}}
                                    <a href="/blog_detail_{{ $val->id }}.html" class="sm-name mb-10">{{ mb_substr($val->title,0,20) }}...</a>
                                    <div class="hot-post-action" style="">
                                        <p class="hero left">
                                            BY - <a href="#" class="l-blue">{{ $val->author_name }}</a>
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
                        @endforeach
                    </div>
                    <!-- /.recent-post -->
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