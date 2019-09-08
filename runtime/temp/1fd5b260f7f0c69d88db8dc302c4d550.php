<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:58:"D:\WWW\tp5\public/../application/admin\view\admin\pwd.html";i:1567972537;s:49:"D:\WWW\tp5\application\admin\view\Layout\app.html";i:1567925615;s:52:"D:\WWW\tp5\application\admin\view\Layout\header.html";i:1567971682;s:50:"D:\WWW\tp5\application\admin\view\Layout\left.html";i:1567969599;}*/ ?>
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
            <a href="http://<?php echo \think\Request::instance()->server('server_name'); ?>" target="_black">
                <i class="fa fa-home">网站首页</i>
            </a>
        </li>

        <li class="nav-item d-md-down-none">
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="<?php echo $admin['icon']; ?>" class="avatar avatar-sm" alt="logo">
                <span class="small ml-1 d-md-down-none"><?php echo $admin['nickname']; ?></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-header">Account</div>

                <a href="<?php echo url('Admin/index'); ?>" class="dropdown-item">
                    <i class="fa fa-user"></i> 个人信息
                </a>

                <a href="<?php echo url('Setting/index'); ?>" class="dropdown-item">
                    <i class="fa fa-fire"></i> 网站设置
                </a>

                <a href="<?php echo url('Admin/pwd'); ?>" class="dropdown-item">
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
                <a href="<?php echo url('Admin/pwd'); ?>" class="nav-link" >
                    <i class="icon icon-pin"></i> 修改密码
                </a>
            </li>
            <li class="nav-item nav-dropdown">
                <a href="#" class="nav-link nav-dropdown-toggle">
                    <i class="icon icon-options"></i> 其他 <i class="fa fa-caret-left"></i>
                </a>

                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a href="<?php echo url('Setting/other'); ?>" class="nav-link">
                            <i class="icon icon-options"></i> 其他1
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo url('Setting/other'); ?>" class="nav-link">
                            <i class="icon icon-options-vertical"></i> 其他2
                        </a>
                    </li>

                    
                </ul>
            </li>

            <li class="nav-item">
                <a href="<?php echo url('Blog/index'); ?>" class="nav-link" >
                    <i class="icon icon-logout"></i> 退出
                </a>
            </li>
           
        </ul>
    </nav>
</div>



<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-2">
                        <div class="list-group">
                            <a href="<?php echo url('Admin/index'); ?>" class="list-group-item ">个人信息</a>
                            <a href="<?php echo url('Setting/index'); ?>" class="list-group-item ">网站设置</a>
                            <a href="<?php echo url('Admin/pwd'); ?>" class="list-group-item active">修改密码</a>
                            <a href="<?php echo url('Setting/other'); ?>" class="list-group-item">其他</a>
                        </div>
                    </div>

                    <div class="col-md-10">
                        <div class="card">
                            <div class="card-header bg-light">
                                修改密码
                            </div>
                            
                            <form action="" method="post" >
                                <input type="hidden" name="id" value="1">
                                <div class="card-body">
                                    <div class="row mt-5">
                                        <div class="col-md-4 mb-4">
                                            <div>管理员密码修改</div>
                                            <div class="text-muted small">修改密码请注意请注意</div>
                                        </div>

                                        
                                            <div class="col-md-8">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-control-label">旧密码</label>
                                                            <input type="password" name="o_password" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-control-label">新密码</label>
                                                            <input type="password" name="n_password" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-control-label">确认新密码</label>
                                                            <input type="password" name="n_password_2" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        
                                    </div>
                                </div>

                                <div class="card-footer bg-light text-right">
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                </div>
                            </form>
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