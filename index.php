
<!DOCTYPE HTML>
<html>
<head>
    <title>�ҵ�����Ȧ</title>
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
        <p>��������Ȧ�����鹹��</p>
        <div style="padding:15px;padding-bottom:20px">
            <button id="gotoplay" onclick="gotoplay();" class="btn btn-success btn-lg btn-block">��ҲҪ��</button>
            <br />
            <button id="gotoshare" class="btn btn-success btn-lg btn-block">��������Ȧ</button>
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
                            лл @������ @anglebaby �򸾵����룬ף�»���֣��Ҹ�������
                        </p>
                        <img class="list-img" style="height: 130px;" src="images/ah_qt1.jpg" />
                        <img class="list-img" style="height: 130px;" src="images/ah_qt2.jpg" />
                    </div>
                    <p class="time">�ո�</p><img class="c-icon" src="images/c.png">
                </div>
                <div class="r"></div>
                <div class="cmt-wrap">
                    <div class="like"><img src="images/l.png">¹�ϣ��ָ��£����ݣ�������,anglebaby��������...</div>
                    <div class="cmt-list">
                        <p><span>¹�ϣ�</span>��ϲ��ϲ</p>
                        <p><span>��������</span>лл�ֵܵĹ��٣�</p>
                        <p><span class="data-name"></span>�ظ�<span>������</span><span>��</span>��ϲ�ֵܣ�</p>
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
                    <p class="po-name">��˼��</p>
                    <div class="post">
                        <p>
                            лл @<b class="data-name"></b> �ֵܵ��д��������úܿ���
                        </p>
                        <img class="list-img" src="images/yt2.jpg" />
                        <img class="list-img" src="images/yt3.jpg" />
                    </div>
                    <p class="time">�ո�</p><img class="c-icon" src="images/c.png">
                </div>
                <div class="r"></div>
                <div class="cmt-wrap">
                    <div class="like"><img src="images/l.png">¹�ϣ��ָ��£����ݣ�anglebaby��������...</div>
                    <div class="cmt-list">
                        <p><span>¹�ϣ�</span>����</p>
                        <p><span class="data-name"></span><span>��</span>�´μ���Լ��</p>
                        <p><span>��˼��</span>�ظ�<span class="data-name"></span><span>��</span>�úúã���</p>
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
                    <p class="po-name">�Ծ���</p>
                    <p class="post">���Ǻ���~<img src="images/c1.jpg"></p>
                    <p class="time">2����ǰ</p><img class="c-icon" src="images/c.png"
                </div>
                <div class="r"></div>
                <div class="cmt-wrap">
                    <div class="like"><img src="images/l.png">�ºգ�������С�ǣ���˼�ϣ��¹�ϣ��������...</div>
                    <div class="cmt-list">
                        <p><span>�ºգ�</span>���ҿ�~</p>
                        <p><span>�¹�ϣ��</span>���ҿ�~</p>
                        <p><span class="data-name"></span><span>��</span>���ҿ�~</p>
                        <p><span>�Ծ���</span>�ظ�<span class="data-name"></span><span>��</span>֪���ͺã�</p>
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
                    <p class="po-name">�ܽ���</p>
                    <div class="post"><p><b class="data-name"></b>����սҹ��Ҫ���ͣ����ǰ�Ӵ����ս������ŵģ�</p><img class="list-img" src="images/c2.jpg"><img class="data-avt list-img" src="">
                    </div>
                    <p class="time">2����ǰ</p><img class="c-icon" src="images/c.png" />
                </div>
                <div class="r"></div>
                <div class="cmt-wrap">
                    <div class="like"><img src="images/l.png" />���壬��Ӣ���׳���</div>
                    <div class="cmt-list">
                        <p><span class="data-name"></span><span>��</span>������ʦ����սҹС���ٻ�����~</p>
                        <p><span>�ܽ���</span>�ظ�<span class="data-name"></span><span>��</span>���ùھ��ˣ������㵱С���ٵ�С��ֽ��</p>
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
                    <p class="ads">�ƹ�<img src="images/ads.png"></p>
                    <p class="po-name">һԪ�㹺</p>
                    <div class="post">����ʶ�������ά���о�ϲ
                        <p><a class="ad-link" href="http://mp.weixin.qq.com/s?__biz=MzIzNzA2MjU4MA==&mid=208803670&idx=1&sn=df9cf1daa7564b538b60966731896153&scene=0#rd">�鿴���� <img src="images/link.png" /></a></p>
                        <img src="images/asd3.jpg" /></div>
                    <p class="time">45����ǰ</p><img class="c-icon" src="images/c.png" />
                </div>
                <div class="r"></div>
                <div class="cmt-wrap">
                    <div class="like"><img src="images/l.png" />�������������ǿ����...</div>
                    <div class="cmt-list">
                        <p><span>��������</span>��������Ҫ<img class="bq" src="images/bq1.png" /></p>
                        <p><span>�</span>�ظ�<span>������ ��</span>��ϲ�������Ǿ����ԡ�</p>
                    </div>
                </div>
        </li>
        <li>
            <div class="po-avt-wrap">
                <img class="po-avt" src="images/a3.jpg">
            </div>
            <div class="po-cmt">
                <div class="po-hd">
                    <p class="po-name">�˳�</p>
                    <div class="post">
                        <p>we are ��ľ�ۣ���ӭ�������е�������</p>
                        <p><img class="list-img" src="images/c3.jpg"><img class="list-img" src="images/c4.jpg"><img class="data-avt list-img" src=""></p></div>
                    <p class="time">50����ǰ</p><img class="c-icon" src="images/c.png">
                </div>
                <div class="r"></div>
                <div class="cmt-wrap">
                    <div class="like"><img src="images/l.png"><b class="data-name"></b></div>
                    <div class="cmt-list">
                        <p><span class="data-name"></span><span>��</span>���磬����ΪʲôҪѡ�ҡ�</p>
                        <p><span>�˳�</span>�ظ�<span class="data-name"></span><span>��</span>��������ʶ���˵��У����ģ�</p>
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
                    <p class="po-name">������</p>
                    <p class="post">�ҵ�����ſ����Ϊʲô����<img class="data-avt" src=""></p>
                    <p class="time">52����ǰ</p><img class="c-icon" src="images/c.png">
                </div>
                <div class="r"></div>
                <div class="cmt-wrap">
                    <div class="like"><img src="images/l.png"><b class="data-name"></b>���������͢������...</div>
                    <div class="cmt-list">
                        <p><span>���</span>�Ǻǡ�</p>
                        <p><span class="data-name"></span><span>��</span>���æ���ͽ���</p>
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
                    <p class="po-name">��ǿ��</p>
                    <p class="post">���ר�ĵ����̲裬��Ѻ�������ȥ<img src="images/c7.jpg"></p>
                    <p class="time">53����ǰ</p><img class="c-icon" src="images/c.png">
                </div>
                <div class="r"></div>
                <div class="cmt-wrap">
                    <div class="like"><img src="images/l.png"><span class="data-name"></span>����������������������С��</div>
                    <div class="cmt-list">
                        <p><span>������С�ǣ�</span>���ж���</p>
                        <p><span>��������</span>����ͯװ</p>
                        <p><span class="data-name"></span><span>��</span>�磬���в�ԭ�����Է�Ұ��������</p>
                        <p><span>��ǿ��</span>�ظ�<span class="data-name"></span><span>��</span>�����ˣ�������</p>
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
                    <p class="po-name">����</p>
                    <p class="post">������<img src="images/c8.jpg" /></p>
                    <p class="time">55����ǰ</p><img class="c-icon" src="images/c.png">
                </div>
                <div class="r"></div>
                <div class="cmt-wrap">
                    <div class="cmt-list">
                        <p><span class="data-name"></span><span>��</span>�ǽ㣬��Ű��</p>
                        <p><span>����</span>�ظ�<span class="data-name"></span><span>��</span>���أ��˳���ͦ�ÿ�������ƫƫҪ���Ż���</p>
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
                    <p class="po-name">��˼��</p>
                    <div class="post">
                        <p>
                            лл @<b class="data-name"></b> ��Ů���д��������úܿ���
                        </p>
                        <img class="list-img" src="images/yt2.jpg" />
                        <img class="list-img" src="images/yt3.jpg" />
                    </div>
                    <p class="time">�ո�</p><img class="c-icon" src="images/c.png">
                </div>
                <div class="r"></div>
                <div class="cmt-wrap">
                    <div class="like"><img src="images/l.png">�ָ��£����ݣ�anglebaby��������...</div>
                    <div class="cmt-list">
                        <p><span>�ָ��£�</span>����</p>
                        <p><span class="data-name"></span><span>��</span>�´μ���Լ��</p>
                        <p><span>��˼��</span>�ظ�<span class="data-name"></span><span>��</span>�õı�����</p>
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
                    <p class="po-name">������</p>
                    <div class="post">
                        <p>��Һã���Ⱥ��Ĵ�ﻶӭ�ڶ������������ǵ��㡷����Ů���ǣ�<span class="data-name"></span></p>
                        <p>
                            <img class="list-img data-avt" src="" style="max-height: 130px;"><img class="list-img" src="images/q2.jpg">
                        </p>
                    </div>
                    <p class="time">1����ǰ</p><img class="c-icon" src="images/c.png">
                </div>
                <div class="r"></div>
                <div class="cmt-wrap">
                    <div class="like"><img src="images/l.png">ǧ���� ��GEM��<span class="data-name"></span></div>
                    <div class="cmt-list">
                        <p><span>ǧ������</span>ŷ�ͣ�������~</p>
                        <p><span class="data-name"></span><span>��</span>������λ�񷳣���������Ů��������˭��</p>
                        <p><span>������</span>�ظ�<span class="data-name"></span><span>��</span>��˵������~</p>
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
                    <p class="po-name">¹��</p>
                    <p class="post"><span class="data-name"></span>��������1Сʱඣ��������ۡ�����˵��һ�𿴡�����֤�ˡ���ӳ�<img src="images/g1.jpg"></p>
                    <p class="time">2����ǰ</p><img class="c-icon" src="images/c.png">
                </div>
                <div class="r"></div>
                <div class="cmt-wrap">
                    <div class="like"><img src="images/l.png">TFBOYS-�����������ෲ</div>
                    <div class="cmt-list">
                        <p><span class="data-name"></span><span>��</span>С�����ڻ�ױ</p>
                        <p><span>¹��</span>�ظ�<span class="data-name"></span><span>��</span>С���٣��ҵ���~</p>
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
                    <p class="ads">�ƹ�<img src="images/ads.png"></p>
                    <p class="po-name">һԪ�㹺</p>
                    <div class="post">����ʶ�������ά���о�ϲ
                        <p><a class="ad-link" href="http://mp.weixin.qq.com/s?__biz=MzIzNzA2MjU4MA==&mid=208803670&idx=1&sn=df9cf1daa7564b538b60966731896153&scene=0#rd">�鿴���� <img src="images/link.png" /></a></p>
                        <img src="images/asd3.jpg" /></div>
                    <p class="time">10����ǰ</p><img class="c-icon" src="images/c.png">
                </div>
                <div class="r"></div>
                <div class="cmt-wrap">
                    <div class="like"><img src="images/l.png" />�������������ǿ����...</div>
                    <div class="cmt-list">
                        <p><span>��������</span>��������Ҫ<img class="bq" src="images/bq1.png" /></p>
                        <p><span>�</span>�ظ�<span>������ ��</span>��ϲ�������Ǿ����ԡ�</p>
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
                    <p class="po-name">TFBOYS-������</p>
                    <div class="post"><p>�ң��ǣ�һ����ҧ�� <b class="data-name"></b>��</p><img src="images/g2.jpg"></div>
                    <p class="time">15����ǰ</p><img class="c-icon" src="images/c.png">
                </div>
                <div class="r"></div>
                <div class="cmt-wrap">
                    <div class="like"><img src="images/l.png">TFBOYS-������ ��¹�ϣ�TFBOYS-����ǧ����TFBOYS-��Դ��...</div>
                    <div class="cmt-list">
                        <p><span class="data-name"></span><span>��</span>�������������Сѧ�����ʹ�ս��</p>
                        <p><span>¹��</span>�ظ�<span class="data-name"></span><span>��</span>��֪������ֻϲ��С�����㡣</p>
                        <p><span>TFBOYS-������ </span>�ظ�<span class="data-name"></span><span>��</span>��֪������ֻϲ��С�����㡣</p>
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
                    <p class="po-name">�ܽ���</p>
                    <div class="post">
                        <p><b class="data-name"></b>����սҹ��Ҫ���ͣ����ǰ�Ӵ����ս������ŵģ�</p>
                        <p><img class="list-img" src="images/c2.jpg"><img class="data-avt list-img" src=""></p></div>
                    <p class="time">20����ǰ</p><img class="c-icon" src="images/c.png">
                </div>
                <div class="r"></div>
                <div class="cmt-wrap">
                    <div class="like"><img src="images/l.png">���壬��Ӣ���׳���</div>
                    <div class="cmt-list">
                        <p><span class="data-name"></span><span>��</span>������ʦ����սҹС���ٻ�����</p>
                        <p><span>�ܽ���</span>�ظ�<span class="data-name"></span><span>��</span>���ùھ��ˣ������㵱С���١�</p>
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
                    <p class="po-name">��ǿ��</p>
                    <p class="post">���ר�ĵ����̲裬��Ѻ�������ȥ<img src="images/c7.jpg"></p>
                    <p class="time">25����ǰ</p><img class="c-icon" src="images/c.png">
                </div>
                <div class="r"></div>
                <div class="cmt-wrap">
                    <div class="like"><img src="images/l.png"><span class="data-name"></span>����������������������С��</div>
                    <div class="cmt-list">
                        <p><span>������С�ǣ�</span>���ж���</p>
                        <p><span>��������</span>����ͯװ</p>
                        <p><span class="data-name"></span><span>��</span>�磬���в�ԭ�����Է�Ұ��������</p>
                        <p><span>��ǿ��</span>�ظ�<span class="data-name"></span><span>��</span>�����ˣ�������</p>
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
                    <p class="po-name">��˼��</p>
                    <p class="post">���������Һ� <span class="data-name"></span> ����ˣ�<img class="data-avt" src=""></p>
                    <p class="time">30����ǰ</p><img class="c-icon" src="images/c.png">
                </div>
                <div class="r"></div>
                <div class="cmt-wrap">
                    <div class="like"><img src="images/l.png">�ָ��£����ݣ�anglebaby��������...</div>
                    <div class="cmt-list">
                        <p><span>�ָ��£�</span>�Ǻǡ�</p>
                        <p><span class="data-name"></span><span>��</span>ϣ�����ף�����ǣ�</p>
                        <p><span>��˼��</span>�ظ�<span class="data-name"></span><span>��</span>�ҴӴ��˳�����Ȧ��</p>
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
                    <p class="po-name">����</p>
                    <p class="post">������<img src="images/c8.jpg"></p>
                    <p class="time">35����ǰ</p><img class="c-icon" src="images/c.png">
                </div>
                <div class="r"></div>
                <div class="cmt-wrap">
                    <div class="cmt-list">
                        <p><span class="data-name"></span><span>��</span>�ǽ㣬��Ű��</p>
                        <p><span>����</span>�ظ�<span class="data-name"></span><span>��</span>���أ��˳���ͦ�ÿ�������ƫƫҪ���Ż���</p>
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