@extends('layouts.app')

@section('title', '关于我-满成的博客')

@section('css')
    <link href="/template/css/about.css" rel="stylesheet">
@endsection

@section('js')
    <script src="/template/js/ab.js"></script>
@endsection

@section('content')
    <article>
        <div class="photowall">
            <ul class="wall_a">
                <li><a href="/"><img src="/template/images/1.JPEG">
                        <figcaption>
                            <h2>总有人要赢的，那个人为什么不能是我？ </h2>
                        </figcaption>
                    </a></li>
                <li>
                    <p class="text_b"><a href="/">逃避自己的人，最终只能导致自己世界的崩塌，而变得越来越没有安全感。</a></p>
                </li>
                <li><a href="/"><img src="/template/images/3.jpg">
                        <figcaption>
                            <h2>灾难总是接踵而至，这正是世间的常理。你以为只要解释一下，就有谁会来救你吗?要是死了，就只能说明我不过是如此程度的男人。 </h2>
                        </figcaption>
                    </a></li>
                <li>
                    <p class="text_b"><a href="/">逃避自己的人，最终只能导致自己世界的崩塌，而变得越来越没有安全感。</a></p>
                </li>
                <li>
                    <p class="text_b"><a href="/">逃避自己的人，最终只能导致自己世界的崩塌，而变得越来越没有安全感。</a></p>
                </li>
                <li><a href="/"><img src="/template/images/5.jpg">
                        <figcaption>
                            <h2>不再因为别人过得好而焦虑，在没有人看得到你的时候依旧能保持节奏 </h2>
                        </figcaption>
                    </a></li>
                <li>
                    <p class="text_b"><a href="/">逃避自己的人，最终只能导致自己世界的崩塌，而变得越来越没有安全感。</a></p>
                </li>
                <li><a href="/"><img src="/template/images/6.jpg">
                        <figcaption>
                            <h2>不再因为别人过得好而焦虑，在没有人看得到你的时候依旧能保持节奏 </h2>
                        </figcaption>
                    </a></li>
            </ul>
        </div>
        <div class="abox">
            <h2>博主简介</h2>
            <div class="biji-content" id="content">房子暂时没有，存款还未过万，模样平平常常，多看几眼就会习惯。平日悠闲独自游荡，没有其它擅长，心地还算善良。生活路漫长，过完一天算一天。</div>
            <div class="navlist">
                <ul>
                    <li class="navcurrent"><a href="#top1">基本信息</a> </li>
                    <li> <a href="#top2" >工作技能</a> </li>
                    <li> <a href="#top3" >心路历程</a> </li>
                    <li> <a href="#top4" >我的博客</a> </li>
                    <li> <a href="#top5" >购买空间</a> </li>
                </ul>
            </div>
            <div class="navtab">
                <div class="navitem" style="display: block;" name = "top1">
                    <div class="content">
                        <p>网名：dancesmile | XXX</p>
                        <p>职业：JavaWeb开发工程师、网页设计 </p>
                        <p>邮箱：18210493942@163.com</p>
                        <p>公众号：</p>
                        <p><img src="/template/images/wxgzh.jpg"></p>

                    </div>
                </div>
                <div class="navitem" name = "top2">
                    <div class="content">
                        <p class="ab_t">工作技能：</p>
                        <p>1、web前端页面的开发</p>
                        <p>2、根据产品需求，配合后端开发人员协作实现前端页面效果和功能</p>
                        <p>3、能够进行手机端和Pc端Html页面制作</p>
                        <p>4、熟练使用html5，CSS3，javascript，熟悉页面架构和布局</p>
                        <p>5、熟练使用Javascript框架</p>
                    </div>
                </div>
                <div class="navitem" name = "top3">
                    <div class="content">
                        <p class="ab_t">心路历程：</p>
                        <p><a href="http://www.wbyweb.com/news/life/2018-04-27/816.html" target="_blank">【走进心灵】个人博客，属于我的小世界！</a></p>
                        <p><a href="http://www.wbyweb.com/news/life/2018-06-17/873.html" target="_blank">【爱设计】安静地做一个爱设计的女子</a></p>
                        <p><a href="http://www.wbyweb.com/jstt/bj/2015-01-09/740.html" target="_blank">【匆匆那些年】总结个人博客经历的这四年</a></p>
                        <p><a href="http://www.wbyweb.com/jstt/bj/2014-11-06/732.html" target="_blank">分享我的个人博客访问量如何做到IP从10到600的</a></p>
                        <p><a href="http://www.wbyweb.com/news/s/2014-01-08/635.html" target="_blank">个人博客从简不繁</a></p>
                        <p><a href="http://www.wbyweb.com/jstt/bj/2013-06-18/285.html" target="_blank">如果个人博客网站再没有价值，你还会坚持吗？</a></p>
                        <p><a href="http://www.wbyweb.com/news/life/2013-06-06/68.html" target="_blank">Web之路，经历了心酸之后</a></p>
                    </div>
                </div>
                <div class="navitem" name = "top4">
                    <div class="content">
                        <p class="ab_t">我的博客：</p>
                        <p>域 名：www.wbyweb.com 创建于2011年01月12日&nbsp;</p>
                        <p>服务器：阿里云服务器&nbsp;&nbsp;<a href="https://promotion.aliyun.com/ntms/act/ambassador/sharetouser.html?userCode=8smrzoqa&amp;productCode=vm" target="_blank"><span style="color:#FF0000;"><strong>前往阿里云官网购买&gt;&gt;</strong></span></a></p>
                        <p>备案号：陕ICP备11002373号-1</p>
                        <p>程 序：PHP 帝国CMS7.5&nbsp; &nbsp;<u><a href="http://www.wbyweb.com/blogs/876.html" target="_blank"><span style="color:#000000;">为什么选择帝国cms？</span></a></u></p>
                        <p class="ab_t">微信扫码打赏：</p>

                        <p><img src="/template/images/wbypay.jpg"></p>

                    </div>
                </div>
                <div class="navitem" name = "top5">
                    <div class="content">
                        <p class="ab_t">购买空间：</p>
                        <p><a href="https://s.click.taobao.com/t?e=m%3D2%26s%3Dtx5qvgOp2sEcQipKwQzePCperVdZeJviEViQ0P1Vf2kguMN8XjClAv6rqJwbkViRJZyTmHFgi7toyO3ddgEZ98KZ%2FCBiGC%2BAA120cfxpzVcJ9DgiofYXHhmIkXBqRClNTcEU%2BDykfuSM%2BhtH71aX6uIOTs4KMj3yjpOyWSRdiSZDEm2YKA6YIrbIzrZDfgWtwGXLU4WXsy%2FSGTLzgkOZ%2F6tHZYFMpqEnXF%2B87KN7TKeiZ%2BQMlGz6FQ%3D%3D" target="_blank">【推荐】阿里云ECS</a></p>
                        <p><a href="https://s.click.taobao.com/t?e=m%3D2%26s%3DBd7iLbiMBvscQipKwQzePCperVdZeJviEViQ0P1Vf2kguMN8XjClAv6rqJwbkViRlCnp0VPQiKVoyO3ddgEZ98KZ%2FCBiGC%2BAA120cfxpzVe3QAIFZ4qxdxmIkXBqRClNTcEU%2BDykfuSM%2BhtH71aX6uIOTs4KMj3yjpOyWSRdiSZDEm2YKA6YIrbIzrZDfgWtewfOCTsUhuL7A4ojqcFxLlxfvOyje0ynomfkDJRs%2BhU%3D" target="_blank">【推荐】阿里云学生特惠云服务器</a></p>
                        <p><a href="https://s.click.taobao.com/t?e=m%3D2%26s%3DOU6WqfEvy%2FQcQipKwQzePCperVdZeJviEViQ0P1Vf2kguMN8XjClAv6rqJwbkViRgNciauKrSpxoyO3ddgEZ98KZ%2FCBiGC%2BAA120cfxpzVdiEIb0a5VTxRmIkXBqRClNTcEU%2BDykfuTlSg55GVX5wb6HrfO5Rkxh34mdTsZIUcAD%2Bi4rDfTRpeTIM5d0rdP%2BMLZ4%2BrZ7PWchhQs2DjqgEA%3D%3D" target="_blank">RDS云数据库</a></p>
                        <p><a href="https://s.click.taobao.com/t?e=m%3D2%26s%3DkOyMRXLe5y0cQipKwQzePCperVdZeJviEViQ0P1Vf2kguMN8XjClAv6rqJwbkViRLZXTD7FAd8hoyO3ddgEZ98KZ%2FCBiGC%2BAA120cfxpzVdeQ9pcQh0ldxmIkXBqRClNTcEU%2BDykfuSM%2BhtH71aX6htm26afTqZhX2AelcDTwouII%2BH4AtnKmf9aAWiTxsBW2YeVZAPpWRfGDF1NzTQoPw%3D%3D" target="_blank">云数据库Redis版</a></p>
                        <p><a href="https://s.click.taobao.com/t?e=m%3D2%26s%3DNEP6My0TsB0cQipKwQzePCperVdZeJviEViQ0P1Vf2kguMN8XjClAv6rqJwbkViR2Wp0cUyixa5oyO3ddgEZ98KZ%2FCBiGC%2BAA120cfxpzVeG2k2079gAVRmIkXBqRClNTcEU%2BDykfuSM%2BhtH71aX6htm26afTqZhX2AelcDTwouII%2BH4AtnKmf9aAWiTxsBWuCgE0st4OyjGDmntuH4VtA%3D%3D" target="_blank">阿里云DDOS防护-高防IP</a></p>
                        <p><a href="https://s.click.taobao.com/t?e=m%3D2%26s%3DxKaTivPOxxscQipKwQzePCperVdZeJviEViQ0P1Vf2kguMN8XjClAv6rqJwbkViRxJn51p0fCRZoyO3ddgEZ98KZ%2FCBiGC%2BAA120cfxpzVe%2FTQ%2BKb31whBmIkXBqRClNTcEU%2BDykfuTlSg55GVX5wVaL%2B82m0QZTEzn0DH69aFtLyrb2g0H2G%2Fwamd%2BEL%2FWmhcLzAjcuTkddow9d%2FMD%2BXQ%3D%3D" target="_blank">阿里云云解析</a></p>
                        <p><a href="https://s.click.taobao.com/t?e=m%3D2%26s%3DbAEFASZ9ijccQipKwQzePCperVdZeJviEViQ0P1Vf2kguMN8XjClAv6rqJwbkViR4CZyur93miVoyO3ddgEZ98KZ%2FCBiGC%2BAA120cfxpzVfmlqlNq1vcQRmIkXBqRClNTcEU%2BDykfuSM%2BhtH71aX6mMC%2FVYRjeGkg1LZ9gMhib9Lyrb2g0H2G3pD%2Buoa%2BvW2xgxdTc00KD8%3D" target="_blank">阿里云精品网站模版</a></p>
                        <p><a href="https://s.click.taobao.com/t?e=m%3D2%26s%3DYFtE9mLmbI8cQipKwQzePCperVdZeJviEViQ0P1Vf2kguMN8XjClAv6rqJwbkViR%2F67zSlRHtIZoyO3ddgEZ98KZ%2FCBiGC%2BAA120cfxpzVdqFcPM5kapBRmIkXBqRClNTcEU%2BDykfuSM%2BhtH71aX6htm26afTqZhX2AelcDTwouII%2BH4AtnKmf9aAWiTxsBWI8xs9INDEPvGJe8N%2FwNpGw%3D%3D" target="_blank">web应用防火墙</a></p>
                        <p><a href="https://s.click.taobao.com/t?e=m%3D2%26s%3DG7ldZyW9ShocQipKwQzePCperVdZeJviEViQ0P1Vf2kguMN8XjClAv6rqJwbkViRVSG%2Bc1h4z9hoyO3ddgEZ98KZ%2FCBiGC%2BAA120cfxpzVf0SX%2FX7ryxfhmIkXBqRClNTcEU%2BDykfuSM%2BhtH71aX6htm26afTqZhX2AelcDTwouII%2BH4AtnKmf9aAWiTxsBWC9C%2BaUDluR%2FGJe8N%2FwNpGw%3D%3D" target="_blank">云盾证书</a></p>
                    </div>
                </div>
            </div>
        </div>
    </article>
@endsection
