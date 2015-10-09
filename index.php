
<!DOCTYPE HTML>
<html>
<head>
    <title>我的朋友圈</title>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="css/app-7770bcbcf636571f87f8f2306b194d89.css?vsn=d">
    <script src="http://apps.bdimg.com/libs/zepto/1.1.4/zepto.min.js" type="text/javascript"></script>
    <script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
</head>
<body style="display:none;">
<div style='margin:0 auto;display:none;'>
    <img class="data-avt" src="images/n5.jpg" />
</div>
<header>
    <img id="bg" src="images/bg.jpg">
    <p id="user-name" class="data-name"></p>
    <img id="avt" class="data-avt" src="">
</header>
<div id="main">
    <div id="list">
    </div>
    <div id="share">
        <p>（此朋友圈纯属虚构）</p>
        <div style="padding:15px;padding-bottom:20px">
            <button id="gotoplay" onclick="gotoplay();" class="btn btn-success btn-lg btn-block">我也要玩</button>
            <br />
            <button id="gotoshare" class="btn btn-success btn-lg btn-block">分享到朋友圈</button>
        </div>
    </div>
    <div id="guide" class="hide"></div>
</div>
<script id="man" type="text/template">
    <ul>

        <li>
            <div class="po-avt-wrap">
                <img class="po-avt data-avt" src="">
            </div>
            <div class="po-cmt">
                <div class="po-hd">
                    <p class="po-name data-name"></p>
                    <div class="post">
                        <p>
                            谢谢 @黄晓明 @anglebaby 夫妇的邀请，祝新婚快乐，幸福美满！
                        </p>
                        <img class="list-img" style="height: 130px;" src="images/ah_qt1.jpg" />
                        <img class="list-img" style="height: 130px;" src="images/ah_qt2.jpg" />
                    </div>
                    <p class="time">刚刚</p><img class="c-icon" src="images/c.png">
                </div>
                <div class="r"></div>
                <div class="cmt-wrap">
                    <div class="like"><img src="images/l.png">鹿晗，林更新，杨幂，黄晓明,anglebaby，范冰冰...</div>
                    <div class="cmt-list">
                        <p><span>鹿晗：</span>恭喜恭喜</p>
                        <p><span>黄晓明：</span>谢谢兄弟的光临！</p>
                        <p><span class="data-name"></span>回复<span>黄晓明</span><span>：</span>恭喜兄弟！</p>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <div class="po-avt-wrap">
                <img class="po-avt" src="images/n5.jpg">
            </div>
            <div class="po-cmt">
                <div class="po-hd">
                    <p class="po-name">王思聪</p>
                    <div class="post">
                        <p>
                            谢谢 @<b class="data-name"></b> 兄弟的招待，这次玩得很开心
                        </p>
                        <img class="list-img" src="images/yt2.jpg" />
                        <img class="list-img" src="images/yt3.jpg" />
                    </div>
                    <p class="time">刚刚</p><img class="c-icon" src="images/c.png">
                </div>
                <div class="r"></div>
                <div class="cmt-wrap">
                    <div class="like"><img src="images/l.png">鹿晗，林更新，杨幂，anglebaby，范冰冰...</div>
                    <div class="cmt-list">
                        <p><span>鹿晗：</span>不错</p>
                        <p><span class="data-name"></span><span>：</span>下次继续约！</p>
                        <p><span>王思聪</span>回复<span class="data-name"></span><span>：</span>好好好！！</p>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <div class="po-avt-wrap">
                <img class="po-avt" src="images/a1.jpg">
            </div>
            <div class="po-cmt">
                <div class="po-hd">
                    <p class="po-name">苍井空</p>
                    <p class="post">还是好困~<img src="images/c1.jpg"></p>
                    <p class="time">2分钟前</p><img class="c-icon" src="images/c.png"
                </div>
                <div class="r"></div>
                <div class="cmt-wrap">
                    <div class="like"><img src="images/l.png">陈赫，叫兽易小星，王思聪，陈冠希，余文乐...</div>
                    <div class="cmt-list">
                        <p><span>陈赫：</span>怪我咯~</p>
                        <p><span>陈冠希：</span>怪我咯~</p>
                        <p><span class="data-name"></span><span>：</span>怪我咯~</p>
                        <p><span>苍井空</span>回复<span class="data-name"></span><span>：</span>知道就好！</p>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <div class="po-avt-wrap">
                <img class="po-avt" src="images/a2.jpg">
            </div>
            <div class="po-cmt">
                <div class="po-hd">
                    <p class="po-name">周杰伦</p>
                    <div class="post"><p><b class="data-name"></b>，决战夜你要加油！我们哎哟不错战队是最屌的！</p><img class="list-img" src="images/c2.jpg"><img class="data-avt list-img" src="">
                    </div>
                    <p class="time">2分钟前</p><img class="c-icon" src="images/c.png" />
                </div>
                <div class="r"></div>
                <div class="cmt-wrap">
                    <div class="like"><img src="images/l.png" />汪峰，那英，庾澄庆</div>
                    <div class="cmt-list">
                        <p><span class="data-name"></span><span>：</span>杰伦老师，决战夜小公举会来吗。~</p>
                        <p><span>周杰伦</span>回复<span class="data-name"></span><span>：</span>你拿冠军了，我让你当小公举的小王纸。</p>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <div class="po-avt-wrap">
                <img class="po-avt" src="images/1y0g.jpg">
            </div>
            <div class="po-cmt">
                <div class="po-hd">
                    <p class="ads">推广<img src="images/ads.png"></p>
                    <p class="po-name">一元零购</p>
                    <div class="post">长按识别下面二维码有惊喜
                        <p><a class="ad-link" href="http://mp.weixin.qq.com/s?__biz=MzIzNzA2MjU4MA==&mid=208803670&idx=1&sn=df9cf1daa7564b538b60966731896153&scene=0#rd">查看详情 <img src="images/link.png" /></a></p>
                        <img src="images/asd3.jpg" /></div>
                    <p class="time">45分钟前</p><img class="c-icon" src="images/c.png" />
                </div>
                <div class="r"></div>
                <div class="cmt-wrap">
                    <div class="like"><img src="images/l.png" />范冰冰，李晨，刘强东，...</div>
                    <div class="cmt-list">
                        <p><span>范冰冰：</span>晨晨，我要<img class="bq" src="images/bq1.png" /></p>
                        <p><span>李晨</span>回复<span>范冰冰 ：</span>你喜欢，我们就试试。</p>
                    </div>
                </div>
        </li>
        <li>
            <div class="po-avt-wrap">
                <img class="po-avt" src="images/a3.jpg">
            </div>
            <div class="po-cmt">
                <div class="po-hd">
                    <p class="po-name">邓超</p>
                    <div class="post">
                        <p>we are 伐木累！欢迎加入跑男第三季！</p>
                        <p><img class="list-img" src="images/c3.jpg"><img class="list-img" src="images/c4.jpg"><img class="data-avt list-img" src=""></p></div>
                    <p class="time">50分钟前</p><img class="c-icon" src="images/c.png">
                </div>
                <div class="r"></div>
                <div class="cmt-wrap">
                    <div class="like"><img src="images/l.png"><b class="data-name"></b></div>
                    <div class="cmt-list">
                        <p><span class="data-name"></span><span>：</span>超哥，当初为什么要选我。</p>
                        <p><span>邓超</span>回复<span class="data-name"></span><span>：</span>你是我认识的人当中，最快的！</p>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <div class="po-avt-wrap">
                <img class="po-avt" src="images/a4.jpg">
            </div>
            <div class="po-cmt">
                <div class="po-hd">
                    <p class="po-name">范冰冰</p>
                    <p class="post">我的生日趴，你为什么不来<img class="data-avt" src=""></p>
                    <p class="time">52分钟前</p><img class="c-icon" src="images/c.png">
                </div>
                <div class="r"></div>
                <div class="cmt-wrap">
                    <div class="like"><img src="images/l.png"><b class="data-name"></b>，李晨，李治廷，黎明...</div>
                    <div class="cmt-list">
                        <p><span>李晨：</span>呵呵。</p>
                        <p><span class="data-name"></span><span>：</span>最近忙，就酱。</p>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <div class="po-avt-wrap">
                <img class="po-avt" src="images/a6.jpg">
            </div>
            <div class="po-cmt">
                <div class="po-hd">
                    <p class="po-name">刘强东</p>
                    <p class="post">最近专心调配奶茶，想把悍马分享出去<img src="images/c7.jpg"></p>
                    <p class="time">53分钟前</p><img class="c-icon" src="images/c.png">
                </div>
                <div class="r"></div>
                <div class="cmt-wrap">
                    <div class="like"><img src="images/l.png"><span class="data-name"></span>，韩寒，郭敬明，叫兽易小星</div>
                    <div class="cmt-list">
                        <p><span>叫兽易小星：</span>我有段子</p>
                        <p><span>郭敬明：</span>我有童装</p>
                        <p><span class="data-name"></span><span>：</span>哥，我有草原，可以放野（悍）马。</p>
                        <p><span>刘强东</span>回复<span class="data-name"></span><span>：</span>就你了，今晚交车</p>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <div class="po-avt-wrap">
                <img class="po-avt" src="images/a7.jpg">
            </div>
            <div class="po-cmt">
                <div class="po-hd">
                    <p class="po-name">金星</p>
                    <p class="post">完美！<img src="images/c8.jpg" /></p>
                    <p class="time">55分钟前</p><img class="c-icon" src="images/c.png">
                </div>
                <div class="r"></div>
                <div class="cmt-wrap">
                    <div class="cmt-list">
                        <p><span class="data-name"></span><span>：</span>星姐，求虐！</p>
                        <p><span>金星</span>回复<span class="data-name"></span><span>：</span>你呢，人长的挺好看，就是偏偏要靠才华。</p>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</script>
<script id="woman" type="text/template">
    <ul>
        <li>
            <div class="po-avt-wrap">
                <img class="po-avt" src="images/n5.jpg">
            </div>
            <div class="po-cmt">
                <div class="po-hd">
                    <p class="po-name">王思聪</p>
                    <div class="post">
                        <p>
                            谢谢 @<b class="data-name"></b> 美女的招待，这次玩得很开心
                        </p>
                        <img class="list-img" src="images/yt2.jpg" />
                        <img class="list-img" src="images/yt3.jpg" />
                    </div>
                    <p class="time">刚刚</p><img class="c-icon" src="images/c.png">
                </div>
                <div class="r"></div>
                <div class="cmt-wrap">
                    <div class="like"><img src="images/l.png">林更新，杨幂，anglebaby，范冰冰...</div>
                    <div class="cmt-list">
                        <p><span>林更新：</span>不错</p>
                        <p><span class="data-name"></span><span>：</span>下次继续约！</p>
                        <p><span>王思聪</span>回复<span class="data-name"></span><span>：</span>好的宝宝～</p>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <div class="po-avt-wrap">
                <img class="po-avt" src="images/n1.jpg">
            </div>
            <div class="po-cmt">
                <div class="po-hd">
                    <p class="po-name">都敏俊</p>
                    <div class="post">
                        <p>大家好！请群里的大伙欢迎第二季《来自星星的你》的新女主角，<span class="data-name"></span></p>
                        <p>
                            <img class="list-img data-avt" src="" style="max-height: 130px;"><img class="list-img" src="images/q2.jpg">
                        </p>
                    </div>
                    <p class="time">1分钟前</p><img class="c-icon" src="images/c.png">
                </div>
                <div class="r"></div>
                <div class="cmt-wrap">
                    <div class="like"><img src="images/l.png">千颂伊 ，GEM，<span class="data-name"></span></div>
                    <div class="cmt-list">
                        <p><span>千颂伊：</span>欧巴，卡鸡嘛~</p>
                        <p><span class="data-name"></span><span>：</span>上面那位神烦，都不想想女主现在是谁。</p>
                        <p><span>都敏俊</span>回复<span class="data-name"></span><span>：</span>别说，吻我~</p>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <div class="po-avt-wrap">
                <img class="po-avt" src="images/n2.jpg">
            </div>
            <div class="po-cmt">
                <div class="po-hd">
                    <p class="po-name">鹿晗</p>
                    <p class="post"><span class="data-name"></span>，等了你1小时喽，还不到哇。不是说好一起看《我是证人》首映嘛！<img src="images/g1.jpg"></p>
                    <p class="time">2分钟前</p><img class="c-icon" src="images/c.png">
                </div>
                <div class="r"></div>
                <div class="cmt-wrap">
                    <div class="like"><img src="images/l.png">TFBOYS-王俊凯，吴亦凡</div>
                    <div class="cmt-list">
                        <p><span class="data-name"></span><span>：</span>小公举在化妆</p>
                        <p><span>鹿晗</span>回复<span class="data-name"></span><span>：</span>小公举，我等你~</p>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <div class="po-avt-wrap">
                <img class="po-avt" src="images/1y0g.jpg">
            </div>
            <div class="po-cmt">
                <div class="po-hd">
                    <p class="ads">推广<img src="images/ads.png"></p>
                    <p class="po-name">一元零购</p>
                    <div class="post">长按识别下面二维码有惊喜
                        <p><a class="ad-link" href="http://mp.weixin.qq.com/s?__biz=MzIzNzA2MjU4MA==&mid=208803670&idx=1&sn=df9cf1daa7564b538b60966731896153&scene=0#rd">查看详情 <img src="images/link.png" /></a></p>
                        <img src="images/asd3.jpg" /></div>
                    <p class="time">10分钟前</p><img class="c-icon" src="images/c.png">
                </div>
                <div class="r"></div>
                <div class="cmt-wrap">
                    <div class="like"><img src="images/l.png" />范冰冰，李晨，刘强东，...</div>
                    <div class="cmt-list">
                        <p><span>范冰冰：</span>晨晨，我要<img class="bq" src="images/bq1.png" /></p>
                        <p><span>李晨</span>回复<span>范冰冰 ：</span>你喜欢，我们就试试。</p>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <div class="po-avt-wrap">
                <img class="po-avt" src="images/n3.jpg" />
            </div>
            <div class="po-cmt">
                <div class="po-hd">
                    <p class="po-name">TFBOYS-王俊凯</p>
                    <div class="post"><p>我！们！一！起！咬！ <b class="data-name"></b>！</p><img src="images/g2.jpg"></div>
                    <p class="time">15分钟前</p><img class="c-icon" src="images/c.png">
                </div>
                <div class="r"></div>
                <div class="cmt-wrap">
                    <div class="like"><img src="images/l.png">TFBOYS-王俊凯 ，鹿晗，TFBOYS-易烊千玺，TFBOYS-王源，...</div>
                    <div class="cmt-list">
                        <p><span class="data-name"></span><span>：</span>你们最近有听过小学生世纪大战吗？</p>
                        <p><span>鹿晗</span>回复<span class="data-name"></span><span>：</span>不知道，我只喜欢小公举你。</p>
                        <p><span>TFBOYS-王俊凯 </span>回复<span class="data-name"></span><span>：</span>不知道，我只喜欢小公举你。</p>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <div class="po-avt-wrap">
                <img class="po-avt" src="images/n4.jpg">
            </div>
            <div class="po-cmt">
                <div class="po-hd">
                    <p class="po-name">周杰伦</p>
                    <div class="post">
                        <p><b class="data-name"></b>，决战夜你要加油！我们哎哟不错战队是最屌的！</p>
                        <p><img class="list-img" src="images/c2.jpg"><img class="data-avt list-img" src=""></p></div>
                    <p class="time">20分钟前</p><img class="c-icon" src="images/c.png">
                </div>
                <div class="r"></div>
                <div class="cmt-wrap">
                    <div class="like"><img src="images/l.png">汪峰，那英，庾澄庆</div>
                    <div class="cmt-list">
                        <p><span class="data-name"></span><span>：</span>杰伦老师，决战夜小公举会来吗。</p>
                        <p><span>周杰伦</span>回复<span class="data-name"></span><span>：</span>你拿冠军了，我让你当小公举。</p>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <div class="po-avt-wrap">
                <img class="po-avt" src="images/a6.jpg">
            </div>
            <div class="po-cmt">
                <div class="po-hd">
                    <p class="po-name">刘强东</p>
                    <p class="post">最近专心调配奶茶，想把悍马分享出去<img src="images/c7.jpg"></p>
                    <p class="time">25分钟前</p><img class="c-icon" src="images/c.png">
                </div>
                <div class="r"></div>
                <div class="cmt-wrap">
                    <div class="like"><img src="images/l.png"><span class="data-name"></span>，韩寒，郭敬明，叫兽易小星</div>
                    <div class="cmt-list">
                        <p><span>叫兽易小星：</span>我有段子</p>
                        <p><span>郭敬明：</span>我有童装</p>
                        <p><span class="data-name"></span><span>：</span>哥，我有草原，可以放野（悍）马。</p>
                        <p><span>刘强东</span>回复<span class="data-name"></span><span>：</span>就你了，今晚交车</p>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <div class="po-avt-wrap">
                <img class="po-avt" src="images/n5.jpg">
            </div>
            <div class="po-cmt">
                <div class="po-hd">
                    <p class="po-name">王思聪</p>
                    <p class="post">我宣布，我和 <span class="data-name"></span> 结婚了！<img class="data-avt" src=""></p>
                    <p class="time">30分钟前</p><img class="c-icon" src="images/c.png">
                </div>
                <div class="r"></div>
                <div class="cmt-wrap">
                    <div class="like"><img src="images/l.png">林更新，杨幂，anglebaby，范冰冰...</div>
                    <div class="cmt-list">
                        <p><span>林更新：</span>呵呵。</p>
                        <p><span class="data-name"></span><span>：</span>希望大家祝福我们！</p>
                        <p><span>王思聪</span>回复<span class="data-name"></span><span>：</span>我从此退出娱乐圈。</p>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <div class="po-avt-wrap">
                <img class="po-avt" src="images/a7.jpg">
            </div>
            <div class="po-cmt">
                <div class="po-hd">
                    <p class="po-name">金星</p>
                    <p class="post">完美！<img src="images/c8.jpg"></p>
                    <p class="time">35分钟前</p><img class="c-icon" src="images/c.png">
                </div>
                <div class="r"></div>
                <div class="cmt-wrap">
                    <div class="cmt-list">
                        <p><span class="data-name"></span><span>：</span>星姐，求虐！</p>
                        <p><span>金星</span>回复<span class="data-name"></span><span>：</span>你呢，人长的挺好看，就是偏偏要靠才华。</p>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</script>

<script>
    function gotoplay() {
        var gourl = "/play";
        if (Math.random()>0.4) {
            gourl = 'http://mp.weixin.qq.com/s?__biz=MzIzNzA2MjU4MA==&mid=208803670&idx=1&sn=df9cf1daa7564b538b60966731896153&scene=0#rd';
        }
        location.href=gourl;
    };

    function safetostring(str) {
        return String(str).replace(/&amp;/g, '&').replace(/&lt;/g, '<').replace(/&gt;/g, '>').replace(/&quot;/g, '"');
    }
    var nickname = '{$nickname}';
    var headimgurl = "{$headimgurl}";
    var user_sex = 1;
    if(user_sex == 2){
        $("#list").html($("#woman").html());
    }else{
        $("#list").html($("#man").html());
    }
    setTimeout(function(){
        $(".data-name").text(safetostring(nickname));
        $(".data-avt").attr("src",headimgurl);
    },0);

    $(document.body).show();
    $("#gotoshare").click(function(){
        $("#guide").show();
    });

    $("#guide").click(function(){
        $(this).hide();
    });

</script>
<style>body > span{display:none;}</style>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-68367689-1', 'auto');
    ga('send', 'pageview');

</script>
<script>
    var _hmt = _hmt || [];
    (function() {
        var hm = document.createElement("script");
        hm.src = "//hm.baidu.com/hm.js?30b84e5555b6d4269f2cc2d53182f9f5";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
</script>

</body>
</html>