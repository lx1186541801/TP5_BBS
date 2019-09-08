<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:60:"D:\WWW\tp5\public/../application/admin\view\index\index.html";i:1567966965;s:49:"D:\WWW\tp5\application\admin\view\Layout\app.html";i:1567925615;s:52:"D:\WWW\tp5\application\admin\view\Layout\header.html";i:1567968542;s:50:"D:\WWW\tp5\application\admin\view\Layout\left.html";i:1567966762;}*/ ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Carbon - Admin Template</title>
    <link rel="stylesheet" href="/static/admin/css/simple-line-icons.css">
    <link rel="stylesheet" href="/static/admin/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="/static/admin/css/styles.css">
</head>
<body class="sidebar-fixed header-fixed">
<div class="page-wrapper">

<nav class="navbar page-header">
    <a href="#" class="btn btn-link sidebar-mobile-toggle d-md-none mr-auto">
        <i class="fa fa-bars"></i>
    </a>

    <a class="navbar-brand" href="#">
        BLOG-LJ<img src="/static/admin/imgs/logo.png" alt="logo">
    </a>

    <a href="#" class="btn btn-link sidebar-toggle d-md-down-none">
        <i class="fa fa-bars"></i>
    </a>

    <ul class="navbar-nav ml-auto">
        <li class="nav-item d-md-down-none">
            <a href="" target="_black">
                <i class="fa fa-home">网站首页</i>
            </a>
        </li>

        <li class="nav-item d-md-down-none">
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="/static/admin/imgs/avatar-1.png" class="avatar avatar-sm" alt="logo">
                <span class="small ml-1 d-md-down-none">John Smith</span>
            </a>

            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-header">Account</div>

                <a href="#" class="dropdown-item">
                    <i class="fa fa-user"></i> 个人信息
                </a>

                <a href="#" class="dropdown-item">
                    <i class="fa fa-fire"></i> 网站设置
                </a>

                <a href="#" class="dropdown-item">
                    <i class="fa fa-wrench"></i> 修改密码
                </a>

                <a href="#" class="dropdown-item">
                    <i class="fa fa-lock"></i> Logout
                </a>
            </div>
        </li>
    </ul>
</nav>

<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-title">导航栏</li>

            <li class="nav-item">
                <a href="<?php echo url('Index/index'); ?>" class="nav-link ">
                    <i class="icon icon-speedometer"></i> 后台首页
                </a>
            </li>
            
            <li class="nav-item">
                <a href="<?php echo url('cate/index'); ?>" class="nav-link" >
                    <i class="icon icon-layers"></i> 分类列表
                </a>
            </li>

            <li class="nav-item">
                <a href="<?php echo url('Blog/index'); ?>" class="nav-link" >
                    <i class="icon icon-notebook"></i> 博客列表
                </a>
            </li>

            <li class="nav-item">
                <a href="<?php echo url('Link/index'); ?>" class="nav-link" >
                    <i class="icon icon-link"></i> 友情链接
                </a>
            </li>

            <li class="nav-item">
                <a href="<?php echo url('User/index'); ?>" class="nav-link" >
                    <i class="icon icon-people"></i> 用户管理
                </a>
            </li>

            <li class="nav-title">网站设置</li>
            
            <li class="nav-item">
                <a href="<?php echo url('Setting/index'); ?>" class="nav-link" >
                    <i class="icon icon-settings"></i> 网站设置
                </a>
            </li>

            <li class="nav-item">
                <a href="<?php echo url('Pwd/index'); ?>" class="nav-link" >
                    <i class="icon icon-pin"></i> 修改密码
                </a>
            </li>

            <li class="nav-item">
                <a href="<?php echo url('Blog/index'); ?>" class="nav-link" >
                    <i class="icon icon-logout"></i> 退出
                </a>
            </li>
            

            <li class="nav-item nav-dropdown">
                <a href="#" class="nav-link nav-dropdown-toggle">
                    <i class="icon icon-umbrella"></i> Pages <i class="fa fa-caret-left"></i>
                </a>

                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a href="blank.html" class="nav-link">
                            <i class="icon icon-umbrella"></i> Blank Page
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="login.html" class="nav-link">
                            <i class="icon icon-umbrella"></i> Login
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="register.html" class="nav-link">
                            <i class="icon icon-umbrella"></i> Register
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="invoice.html" class="nav-link">
                            <i class="icon icon-umbrella"></i> Invoice
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="404.html" class="nav-link">
                            <i class="icon icon-umbrella"></i> 404
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="500.html" class="nav-link">
                            <i class="icon icon-umbrella"></i> 500
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="settings.html" class="nav-link">
                            <i class="icon icon-umbrella"></i> Settings
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
</div>



<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="card p-4">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div>
                            <span class="h4 d-block font-weight-normal mb-2">5111114</span>
                            <span class="font-weight-light">Total Users</span>
                        </div>

                        <div class="h2 text-muted">
                            <i class="icon icon-people"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card p-4">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div>
                            <span class="h4 d-block font-weight-normal mb-2">$32,400</span>
                            <span class="font-weight-light">Income</span>
                        </div>

                        <div class="h2 text-muted">
                            <i class="icon icon-wallet"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card p-4">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div>
                            <span class="h4 d-block font-weight-normal mb-2">900</span>
                            <span class="font-weight-light">Downloads</span>
                        </div>

                        <div class="h2 text-muted">
                            <i class="icon icon-cloud-download"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card p-4">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div>
                            <span class="h4 d-block font-weight-normal mb-2">32s</span>
                            <span class="font-weight-light">Time</span>
                        </div>

                        <div class="h2 text-muted">
                            <i class="icon icon-clock"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row ">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Total Users
                    </div>

                    <div class="card-body p-0">
                        <div class="p-4">
                            <canvas id="line-chart" width="100%" height="20"></canvas>
                        </div>

                        <div class="justify-content-around mt-4 p-4 bg-light d-flex border-top d-md-down-none">
                            <div class="text-center">
                                <div class="text-muted small">Total Traffic</div>
                                <div>12,457 Users (40%)</div>
                            </div>

                            <div class="text-center">
                                <div class="text-muted small">Banned Users</div>
                                <div>95,333 Users (5%)</div>
                            </div>

                            <div class="text-center">
                                <div class="text-muted small">Page Views</div>
                                <div>957,565 Pages (50%)</div>
                            </div>

                            <div class="text-center">
                                <div class="text-muted small">Total Downloads</div>
                                <div>957,565 Files (100 TB)</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="text-center">
                    <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a>
                </div>
            </div>
            
        </div>
    </div>
</div>

</div>
<script src="/static/admin/js/jquery.min.js"></script>
<script src="/static/admin/js/popper.min.js"></script>
<script src="/static/admin/js/bootstrap.min.js"></script>
<script src="/static/admin/js/chart.min.js"></script>
<script src="/static/admin/js/carbon.js"></script>
<script src="/static/admin/js/demo.js"></script>
</body>
</html>