<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:60:"D:\WWW\tp5\public/../application/index\view\index\index.html";i:1568019687;s:49:"D:\WWW\tp5\application\index\view\Layout\app.html";i:1568008027;s:52:"D:\WWW\tp5\application\index\view\Layout\header.html";i:1568016472;s:52:"D:\WWW\tp5\application\index\view\Layout\footer.html";i:1568007947;}*/ ?>
<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Material Portfolio Template Demo</title>
    <meta name="description" content="Demo of Material design portfolio template"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;amp;lang=en" rel="stylesheet">
    <link href="/static/index/css/fonts_c.css" rel="stylesheet">
    <link href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css" rel="stylesheet">
    <link href="/static/index/css/main.css" rel="stylesheet">
</head>
<body id="top">
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        
        <a href="contact.html" id="contact-button" class="mdl-button mdl-button--fab mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast mdl-shadow--4dp">
            <i class="material-icons">mail</i>
        </a>
        <header class="mdl-layout__header mdl-layout__header--waterfall site-header">
            <div class="mdl-layout__header-row site-logo-row">
                <span class="mdl-layout__title">
                    <div class="site-logo"></div>
                    <span class="site-description">
                        <?php if($user == ''): ?>
                        <a href="<?php echo url('User/login'); ?>" style="text-decoration: none; color: #fff;">登录</a>&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="<?php echo url('User/register'); ?> " style="text-decoration: none; color: #fff;">注册</a>
                        <?php else: ?>
                        <?php echo $user['nickname']; ?>
                        <a href="<?php echo url('User/logout'); ?> " style="text-decoration: none; color: #fff;">退出</a>
                        <?php endif; ?>
                    </span>
                </span>
            </div>
            <div class="mdl-layout__header-row site-navigation-row mdl-layout--large-screen-only">
                <nav class="mdl-navigation mdl-typography--body-1-force-preferred-font">
                    <a class="mdl-navigation__link" href="<?php echo url('Index/index'); ?>">Home</a>
                    <?php if(is_array($cates) || $cates instanceof \think\Collection || $cates instanceof \think\Paginator): $i = 0; $__LIST__ = $cates;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;?>
                    <a class="mdl-navigation__link" href="<?php echo url('Index/list', array('cid'=>$cate['id'])); ?>"><?php echo $cate['catename']; ?></a>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                    <a class="mdl-navigation__link" href="<?php echo url('Contact/index'); ?>">留言板</a>
                    <a class="mdl-navigation__link" href="<?php echo url('About/index'); ?>">关于本站</a>
                </nav>
            </div>
        </header>
        <div class="mdl-layout__drawer mdl-layout--small-screen-only">
            <nav class="mdl-navigation mdl-typography--body-1-force-preferred-font">
                <a class="mdl-navigation__link" href="index.html">Home</a>
                <a class="mdl-navigation__link" href="portfolio.html">Portfolio</a>
                <a class="mdl-navigation__link" href="about.html">About</a>
                <a class="mdl-navigation__link" href="contact.html">Contact</a>
            </nav>
        </div>
        <main class="mdl-layout__content">
            

<div class="site-content">
                <div class="container">
                    <div class="mdl-grid site-max-width">
                        <div class="mdl-cell mdl-cell--12-col mdl-card mdl-shadow--4dp welcome-card portfolio-card">
                            <div class="mdl-card__title">
                                <h2 class="mdl-card__title-text"><?php echo $top_blog['title']; ?></h2>
                            </div>
                            <div class="mdl-card__supporting-text">
                                <?php echo $top_blog['des']; ?>
                            </div>
                            <div class="mdl-card__actions mdl-card--border">
                                <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-button--accent" href="<?php echo url('Index/show', array('id'=>$top_blog['id'])); ?>" target="_blank">
                                Learn More
                                </a>
                            </div>
                        </div>
                    </div>
<!-- 
                    <section class="section--center mdl-grid site-max-width">
                        <header class="section__play-btn mdl-cell mdl-cell--3-col-desktop mdl-cell--2-col-tablet mdl-cell--4-col-phone mdl-color--teal-100 mdl-color-text--white  mdl-shadow--4dp">
                            <i class="material-icons">play_circle_filled</i>
                        </header>
                        <div class="mdl-card mdl-cell mdl-cell--9-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone  mdl-shadow--4dp">
                            <div class="mdl-card__title">
                                <h2 class="mdl-card__title-text">Introduction</h2>
                            </div>
                            <div class="mdl-card__supporting-text">
                                Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas. Dramatically maintain clicks-and-mortar solutions without functional solutions.
                            </div>
                            <div class="mdl-card__actions  mdl-card--border">
                                <a href="#" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-button--accent">Watch Intro</a>
                            </div>
                        </div>
                    </section> -->
                   
                    <section class="section--center mdl-grid site-max-width">
                        <?php if(is_array($top3_blogs) || $top3_blogs instanceof \think\Collection || $top3_blogs instanceof \think\Paginator): $i = 0; $__LIST__ = $top3_blogs;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$blog): $mod = ($i % 2 );++$i;?>
                        <div class="mdl-cell mdl-card mdl-shadow--4dp portfolio-card">
                            <div class="mdl-card__media">
                              <img class="article-image" src="<?php if($blog['img'] != ''): ?><?php echo $blog['img']; else: ?>/static/public/zanwutupian.png<?php endif; ?>" border="0" alt="">
                            </div>
                            <div class="mdl-card__title">
                                <a href="<?php echo url('Index/list', array('id'=>$blog['id'])); ?>" style="text-decoration: none;"><h2 class="mdl-card__title-text"><?php echo $blog['title']; ?></h2></a>
                            </div>
                            <div class="mdl-card__supporting-text">
                                <?php echo $blog['des']; ?>
                            </div>
                        </div>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </section>

                    <section class="section--center mdl-grid site-max-width homepage-portfolio">
                        <a class="mdl-button mdl-button--raised mdl-js-button mdl-js-ripple-effect mdl-button--accent" href="<?php echo url('Index/list', array('cid'=>2)); ?>">View Portfolio</a>
                    </section>

                    <div class="homepage-footer">
                    <section class="mdl-grid site-max-width">
                        <div class="mdl-cell mdl-card mdl-cell--8-col mdl-cell--4-col-tablet  mdl-shadow--4dp portfolio-card">
                            <div class="mdl-card__title">
                                <h2 class="mdl-card__title-text">Testimonials</h2>
                            </div>
                            <ul class="demo-list-three mdl-list">
                                <li class="mdl-list__item mdl-list__item--three-line">
                                    <span class="mdl-list__item-primary-content">
                                        <i class="material-icons mdl-list__item-avatar">person</i>
                                        <span>Amazing people, always ready to help!</span>
                                        <span class="mdl-list__item-text-body">
                                            Bryan Cranston, CEO, Amazing.com
                                        </span>
                                    </span>
                                </li>
                                <li class="mdl-list__item mdl-list__item--three-line">
                                    <span class="mdl-list__item-primary-content">
                                        <i class="material-icons  mdl-list__item-avatar">person</i>
                                        <span>Awesome work, they can do almost anything..</span>
                                        <span class="mdl-list__item-text-body">
                                            Aaron Paul, Marketing Lead, Awesome.com
                                        </span>
                                    </span>
                                </li>
                            </ul>
                        </div>
                        <div class="demo-card-event mdl-cell mdl-card mdl-shadow--4dp event-card portfolio-card">
                            <div class="mdl-card__title mdl-card--expand">
                                <h4>
                                    Featured event:<br>
                                    Community Meetup
                                    May 24, 2018<br>
                                    7-11pm
                                </h4>
                            </div>
                            <div class="mdl-card__actions mdl-card--border">
                                <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-button--accent">
                                    Add to Calendar
                                </a>
                                <div class="mdl-layout-spacer"></div>
                                <i class="material-icons">event</i>
                            </div>
                        </div>
                    </section>
                    </div>
                </div>
            </div>

            <footer class="mdl-mini-footer">
    <div class="footer-container">
        <div class="mdl-logo">
            &copy; Unitiled. More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a>
        </div>
        <ul class="mdl-mini-footer__link-list">
            <li>
                <a href="#">Privacy & Terms</a>
            </li>
        </ul>
    </div>
</footer>
            }
        </main>
        <script src="/static/index/js/material.min.js" defer></script>
    </div>
</body>
</html>