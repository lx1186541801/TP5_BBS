<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:58:"D:\WWW\tp5\public/../application/admin\view\blog\list.html";i:1567872628;s:49:"D:\WWW\tp5\application\admin\view\Layout\app.html";i:1567871798;s:52:"D:\WWW\tp5\application\admin\view\Layout\header.html";i:1567871585;s:50:"D:\WWW\tp5\application\admin\view\Layout\left.html";i:1567875757;}*/ ?>
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
        <img src="/static/admin/imgs/logo.png" alt="logo">
    </a>

    <a href="#" class="btn btn-link sidebar-toggle d-md-down-none">
        <i class="fa fa-bars"></i>
    </a>

    <ul class="navbar-nav ml-auto">
        <li class="nav-item d-md-down-none">
            <a href="#">
                <i class="fa fa-bell"></i>
                <span class="badge badge-pill badge-danger">5</span>
            </a>
        </li>

        <li class="nav-item d-md-down-none">
            <a href="#">
                <i class="fa fa-envelope-open"></i>
                <span class="badge badge-pill badge-danger">5</span>
            </a>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="/static/admin/imgs/avatar-1.png" class="avatar avatar-sm" alt="logo">
                <span class="small ml-1 d-md-down-none">John Smith</span>
            </a>

            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-header">Account</div>

                <a href="#" class="dropdown-item">
                    <i class="fa fa-user"></i> Profile
                </a>

                <a href="#" class="dropdown-item">
                    <i class="fa fa-envelope"></i> Messages
                </a>

                <div class="dropdown-header">Settings</div>

                <a href="#" class="dropdown-item">
                    <i class="fa fa-bell"></i> Notifications
                </a>

                <a href="#" class="dropdown-item">
                    <i class="fa fa-wrench"></i> Settings
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
                <a href="<?php echo url('Index/index'); ?>" class="nav-link active">
                    <i class="icon icon-speedometer"></i> 后台首页
                </a>
            </li>
            
            <li class="nav-item">
                <a href="<?php echo url('Blog/list'); ?>" class="nav-link" data-toggle="tab">
                    <i class="icon icon-layers"></i> 分类列表
                </a>
            </li>

            <li class="nav-item">
                <a href="<?php echo url('Blog/list'); ?>" class="nav-link" data-toggle="tab">
                    <i class="icon icon-notebook"></i> 博客列表
                </a>
            </li>

            <li class="nav-item">
                <a href="<?php echo url('Blog/list'); ?>" class="nav-link" data-toggle="tab">
                    <i class="icon icon-people"></i> 用户管理
                </a>
            </li>

            <li class="nav-title">网站设置</li>
            
            <li class="nav-item">
                <a href="<?php echo url('Blog/list'); ?>" class="nav-link" data-toggle="tab">
                    <i class="icon icon-settings"></i> 网站设置
                </a>
            </li>

            <li class="nav-item">
                <a href="<?php echo url('Blog/list'); ?>" class="nav-link" data-toggle="tab">
                    <i class="icon icon-pin"></i> 修改密码
                </a>
            </li>

            <li class="nav-item">
                <a href="<?php echo url('Blog/list'); ?>" class="nav-link" data-toggle="tab">
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


        <div class="row ">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-light">
                        Striped Rows
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Sales</th>
                                    <th>Price</th>
                                    <th>Discount</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td class="text-nowrap">Samsung Galaxy S8</td>
                                    <td>31,589</td>
                                    <td>$800</td>
                                    <td>5%</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td class="text-nowrap">Google Pixel XL</td>
                                    <td>99,542</td>
                                    <td>$750</td>
                                    <td>3%</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td class="text-nowrap">iPhone X</td>
                                    <td>62,220</td>
                                    <td>$1,200</td>
                                    <td>0%</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td class="text-nowrap">OnePlus 5T</td>
                                    <td>50,000</td>
                                    <td>$650</td>
                                    <td>5%</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td class="text-nowrap">Google Nexus 6</td>
                                    <td>400</td>
                                    <td>$400</td>
                                    <td>7%</td>
                                </tr>
                                </tbody>
                            </table>
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