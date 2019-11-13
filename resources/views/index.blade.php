<!DOCTYPE html>
<!-- saved from url=(0028)https://hacpai.com/halt.html -->
<html>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta name="description" content="MC的博客！">
    <meta name="keywords" content="博客,个人博客,MC个人博客,满成的个人博客,PHP,Laravel,Lara博客" />
    <meta name="author" content="limanc.com">
    <title>首页-MC的博客</title>
    <link rel="stylesheet" href="{{asset(_STATIC_FILES_.'/index/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset(_STATIC_FILES_.'/index/css/bootstrap-grid.min.css')}}" />
    <!--播放器-->
    <link rel="stylesheet" href="{{asset(_STATIC_FILES_.'/index/css/player.css')}}">
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
    <link href="{{asset(_STATIC_FILES_.'/index/css/Location.css')}}" type="text/css" rel="stylesheet">

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
<body onclick="toJump()" class="body--ready" data-pinterest-extension-installed="cr1.39.1"  oncontextmenu=self.event.returnValue=false onselectstart="return false">

<canvas class="canvas" width="100%" height="100%"></canvas>
<div id="willerce">
    <div>
        <img src="{{asset(_STATIC_FILES_.'/img/logo.png')}}" id="logo" title="JOKER"/>
        <h1>MC 的博客</h1>
        <a>专心修炼吹流弊和做博客!</a>
    </div>
    <div class="menu">
        <a class="btn btn-lg red" href="/blog.html" >进入博客</a>
        <a class="btn btn-lg green" href="tencent://AddContact/?fromId=50&fromSubId=1&subcmd=all&uin=1073517446" >QQ</a>
        <a class="btn btn-lg bai" href="/blog.html" >留言</a>

    </div>
</div>
<span class="copyright">Copyright © www.limanc.cn 版权所有. 京ICP备19049714号</span>
<script src="{{asset(_STATIC_FILES_.'/index/js/Seffects.js')}}" type="text/javascript"></script>

<script src="{{asset(_STATIC_FILES_.'/index/js/jquery.min.js')}}"></script>
<script src="{{asset(_STATIC_FILES_.'/index/js/jquery.marquee.min.js')}}"></script>

<script>

    function bgChange(){
        var lis= $('.lib');
        for(var i=0; i<lis.length; i+=2)
            lis[i].style.background = 'rgba(246, 246, 246, 0.5)';
    }
    window.onload = bgChange;
    function toJump(){
        location.href='/blog.html';
    }
</script>
</body><div></div></html>
