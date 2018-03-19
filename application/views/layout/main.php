<!DOCTYPE html>
<html lang="zh" dir="ltr">

    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>数字货币行情</title>

    <!-- UIkit CSS -->
    <link rel="stylesheet" href="/assets/uikit3/css/uikit.min.css" />

    <!--// custom style-->
    <link rel="stylesheet" type="text/css" href="/assets/css/custom.css">

    <script type="text/javascript" src="/assets/js/jquery-3.3.1.min.js"></script>
    <!-- UIkit JS -->
    <script src="/assets/uikit3/js/uikit.min.js"></script>
    <script src="/assets/uikit3/js/uikit-icons.min.js"></script>

    <script type="text/javascript" src="/assets/js/jQuery.textSlider.js"></script>
  </head>

    <body>
        <div class="uk-offcanvas-content">
            <!-- <div class="uk-container uk-container-large">
                虚拟币：1184代币：681交易平台：25524小时成交量：¥1388.35亿总市值：¥23241.81亿GBI指数：11618.92
            </div> -->
            <nav class="uk-navbar-container">
                <div class="uk-container uk-container-large">
                    <div uk-navbar>
                        <div class="uk-navbar-left">
                            <a class="uk-navbar-item uk-logo c-logo" href="#"></a>
                            <ul class="uk-navbar-nav">
                                <li>
                                    <a href="/" class="c-nav-menu-item">
                                        首页
                                    </a>
                                </li>
                                <li>
                                    <a href="/video" class="c-nav-menu-item">
                                        视频
                                    </a>
                                </li>
                                <li>
                                    <a href="/ticker/list" class="c-nav-menu-item">
                                        行情榜
                                    </a>
                                </li>
                            </ul>

                        </div>
                        <div class="uk-navbar-item">
                            <form class="uk-search uk-search-default">
                                <span class="uk-search-icon-flip" uk-search-icon></span>
                                <input class="uk-search-input" type="search" placeholder="搜索">
                            </form>
                        </div>

                <div class="uk-navbar-item uk-navbar-right">
                    <div><a href="/member/register" class="uk-text-small">没有账号？立刻注册</a></div>
                </div>
                <div class="uk-navbar-item uk-navbar-right">
                    <div class="c-nav-login-btn">
                        <a href="/member/login">
                        <span class="uk-icon uk-margin-small-right" uk-icon="icon: user"></span>
                        登陆
                    </a>
                    </div>
                </div> 
                    </div>
                </div>
            </nav>

            <div class="c-ad-header">
                <div class="uk-container uk-container-large">
                    <img src="/assets/images/banner@2x.png">
                </div>
            </div>
            <div class="">
                <?php echo $content; ?>
            </div>
            <footer class="footer">
                <div class="uk-container uk-container-large">
                    <div class="uk-grid-divider uk-child-width-expand@m" uk-grid>
                        <div class="uk-width-2-3@m">
                            <ul class="uk-subnav uk-subnav-divider" uk-margin>
                                <li><a href="/">常见问题</a></li>
                                <li><a href="/">联系方式</a></li>
                                <li><a href="/">加入我们</a></li>
                                <li><a href="/">关于我们</a></li>
                            </ul>
                            <div>
                                <p class="uk-text-small">风险提示：雪球里任何用户或者嘉宾的发言，都有其特定立场，投资决策需要建立在独立思考之上</p>
                            </div>

                            <div class="uk-text-small">
                                <div>互联网违法和不良信息举报：01061840600-8030 / secretary@xueqiu.com</div>
                                <div>© 2017 XUEQIU.COM北京雪球信息科技有限公司京公网安备11010502026957京ICP证100666号京ICP备10040543</div>
                                <div>证券业协会会员单位（代码817027）广播电视节目制作经营许可证: (京)字第08638号</div>
                            </div>
                        </div>
                        <div>
                            <ul class="uk-subnav" uk-margin>
                                <li>
                                    <a href="#">
                                        <span class="uk-icon uk-margin-small-right" uk-icon="icon: star"></span>
                                        A 股开户
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="uk-icon uk-margin-small-right" uk-icon="icon: star"></span>
                                        港股开户
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="uk-icon uk-margin-small-right" uk-icon="icon: star"></span>
                                        美股开户
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="uk-icon uk-margin-small-right" uk-icon="icon: star"></span>
                                        蛋卷基金
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="uk-icon uk-margin-small-right" uk-icon="icon: star"></span>
                                        私募基金
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="uk-icon uk-margin-small-right" uk-icon="icon: star"></span>
                                        雪球保险
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

        <script src="/uikit3/dist/js/uikit-icons.min.js"></script>
        <script type="text/javascript">
        $(document).ready(function(){
            $("#tips").textSlider({line:4,speed:500,timer:3000});
        });
        </script>


    </body>
</html>
