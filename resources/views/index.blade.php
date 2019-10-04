<!DOCTYPE html>
<!-- saved from url=(0028)https://hacpai.com/halt.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="MC的博客！">
    <meta name="keywords" content="博客,个人博客,MC个人博客,满成的个人博客,PHP,Laravel,Lara博客" />
    <meta name="author" content="limanc.com">
    <title>首页-MC的博客</title>
    <link rel="stylesheet" href="/index/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/index/css/bootstrap-grid.min.css" />
    <!--播放器-->
    <link rel="stylesheet" href="/index/css/player.css">
    <style type="text/css">
        .btn{
            border: none;
            border-radius: 0;
            text-transform: uppercase;
            padding-top: 0;
            padding-bottom: 0;
            position: relative;
            transition: all 0.3s ease 0s;
        }
        .btn:before{
            content: "";
            display: block;
            width: 100%;
            position: absolute;
            top: 0;
            left: 0;
            border-top: 2px solid transparent;
            transition: all 0.3s ease 0s;
        }
        .btn:hover:before{
            transform: translateY(42px);
        }
        .btn:after{
            content: "\f105";
            font-family:fontawesome;
            display: inline-block;
            width: 44px;
            height: 44px;
            border: 2px solid transparent;
            font-size: 24px;
            line-height: 40px;
            position: relative;
            top: 0;
            right: -16px;
            transition: all 0.43s ease 0s;
        }
        .btn:hover:after{
            transform: rotateX(180deg);
        }
        .btn.btn-sm:hover:before{
            transform: translateY(32px);
        }
        .btn.btn-sm:after{
            width: 34px;
            height: 34px;
            line-height: 30px;
            font-size: 20px;
            right: -10px;
        }
        .btn.btn-xs:hover:before{
            transform: translateY(22px);
        }
        .btn.btn-xs:after{
            width: 24px;
            height: 24px;
            line-height: 20px;
            font-size: 16px;
            right: -5px;
        }
        .btn.red{
            color: #ff6e6e;
        }
        .btn.red:before,
        .btn.red:after{
            border-color: #ff6e6e;
        }
        .btn.blue{
            color: #5cbcf7;
        }
        .btn.blue:before,
        .btn.blue:after{
            border-color: #5cbcf7;
        }
        .btn.orange{
            color: #ef965b;
        }
        .btn.orange:before,
        .btn.orange:after{
            border-color: #ef965b;
        }
        .btn.green{
            color: #7ad79a;
        }
        .btn.green:before,
        .btn.green:after{
            border-color: #7ad79a;
        }
        .btn.bai{
            color: #fff;
        }
        .btn.bai:before,
        .btn.bai:after{
            border-color: #fff;
        }
        .btn.ju{
            color: #FF5722;
        }
        .btn.ju:before,
        .btn.ju:after{
            border-color: #FF5722;
        }
        @media only  screen and (max-width: 767px){
            .btn{ margin-bottom: 20px; }
        }
    </style>
    <link href="/index/css/Location.css" type="text/css" rel="stylesheet">

</head>
<script>function fuckyou(){
        window.close(); //关闭当前窗口(防抽)
        //window.location="http://blog.hac-ker.net/"; //将当前窗口跳转置空白页
    }
    function ck() {
        console.profile();
        console.profileEnd();
        //我们判断一下profiles里面有没有东西，如果有，肯定有人按F12了，没错！！
        if(console.clear) { console.clear() };
        if (typeof console.profiles =="object"){
            return console.profiles.length > 0;
        }
    }
    function hehe(){
        if( (window.console && (console.firebug || console.table && /firebug/i.test(console.table()) )) || (typeof opera == 'object' && typeof opera.postError == 'function' && console.profile.length > 0)){
            fuckyou();
        }
        if(typeof console.profiles =="object"&&console.profiles.length > 0){
            fuckyou();
        }
    }
    hehe();
    window.onresize = function(){
        if((window.outerHeight-window.innerHeight)>200)
//判断当前窗口内页高度和窗口高度，如果差值大于200，那么呵呵
            fuckyou();
    }</script>
<script type="text/javascript">
    document.onkeydown = function(event){
        if ((event.ctrlKey)&&(event.keyCode==115 || event.keyCode==83)){
            event.returnValue=false;
            return;
        }
    }
</script>
<script type="text/javascript">
    function test(){
        var dom = document.getElementById("myimg");
        alert(dom.src);
    }
</script>
<body class="body--ready" data-pinterest-extension-installed="cr1.39.1"  oncontextmenu=self.event.returnValue=false onselectstart="return false">

<canvas class="canvas" width="100%" height="100%"></canvas>
<div id="willerce">
    <div>
        <img src="/img/logo.png" id="logo" title="JOKER"/>
        <h1>MC 的博客</h1>
        <a>专心修炼吹流弊和做博客!</a>
    </div>
    <div class="menu">
        <a class="btn btn-lg red" href="/blog.html" >进入文章列表</a>
        <a class="btn btn-lg green" href="tencent://AddContact/?fromId=50&fromSubId=1&subcmd=all&uin=1073517446" >QQ</a>
        <a class="btn btn-lg bai" href="/blog.html" >留言</a>

    </div>
</div>
<span class="copyright">&copy; 2019&nbsp<a href="/">MC 的博客</a></span>
<script src="/index/js/Seffects.js" type="text/javascript"></script>
<!--播放器 -->

<div id="QPlayer">
    <div id="pContent">
        <div id="player">
            <span class="cover"></span>
            <div class="ctrl">
                <div class="musicTag marquee">
                    <strong>Title</strong>
                    <span> - </span>
                    <span class="artist">Artist</span>
                </div>
                <div class="progress">
                    <div class="timer left">0:00</div>
                    <div class="contr">
                        <div class="rewind icon"></div>
                        <div class="playback icon"></div>
                        <div class="fastforward icon"></div>
                    </div>
                    <div class="right">
                        <div class="liebiao icon"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ssBtn">
            <div class="adf"></div>
        </div>
    </div>
    <ol id="playlist"></ol>
</div>

<script src="/index/js/jquery.min.js"></script>
<script src="/index/js/jquery.marquee.min.js"></script>

<script>
    var	playlist = [
        {title:"wiat for love",artist:"elliott yamin",mp3:"http://wma.9ku.com/file2/176/175843.mp3",cover:"http://p4.music.126.net/NpR4nUoJXsQmWunZWCz4OQ==/898300999944140.jpg",},
        {title:"优美的小调(钢琴曲)",artist:"张宇桦",mp3:"http://p2.music.126.net/W6WzGTa92tI0fgsQQlMfmA==/5853799906336964.mp3",cover:"http://p3.music.126.net/CWeAKWr06dC8pc0rajYN_w==/109951162811772268.jpg?param=106x106",},
        {title:"风中的蒲公英(钢琴曲)",artist:"张宇桦",mp3:"http://p2.music.126.net/jK9lUoe_NpVPmMm8eGALiw==/5830710162234114.mp3",cover:"http://p4.music.126.net/CWeAKWr06dC8pc0rajYN_w==/109951162811772268.jpg?param=106x106",},
        {title:"Sun",artist:"Steerner",mp3:"http://p2.music.126.net/EB4EZJOoEhnifn1EdALgMQ==/1388683193786247.mp3",cover:"http://p3.music.126.net/xEuUgUnosjgJxpKANkJX3g==/1401877332796018.jpg?param=106x106",},
        {title:"Crystals ",artist:"Steerner",mp3:"http://p2.music.126.net/gEakusyQy4945-RNdIHhqw==/1400777821635635.mp3",cover:"http://p4.music.126.net/xEuUgUnosjgJxpKANkJX3g==/1401877332796018.jpg?param=106x106",},
    ];
    var isRotate = true;
    var autoplay = true;
</script>
<script src="/index/js/player.js"></script>
<script>

    function bgChange(){
        var lis= $('.lib');
        for(var i=0; i<lis.length; i+=2)
            lis[i].style.background = 'rgba(246, 246, 246, 0.5)';
    }
    window.onload = bgChange;
</script>
</body><div></div></html>
