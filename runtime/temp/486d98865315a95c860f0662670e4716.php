<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:59:"D:\WWW\tp5\public/../application/admin\view\blog\index.html";i:1567965817;s:49:"D:\WWW\tp5\application\admin\view\Layout\app.html";i:1567925615;s:52:"D:\WWW\tp5\application\admin\view\Layout\header.html";i:1567977333;s:50:"D:\WWW\tp5\application\admin\view\Layout\left.html";i:1567976953;}*/ ?>
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
            <a href="<?php echo url('Index/index/index'); ?>" target="_black">
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

                <a href="<?php echo url('Login/logout'); ?>" class="dropdown-item">
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
                <a href="<?php echo url('Login/logout'); ?>" class="nav-link" >
                    <i class="icon icon-logout"></i> 退出
                </a>
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
                        <div style="float:left;">
                            博客列表
                        </div>
                    
                        <div class="text-right" style="float:right;">
                            <a href="<?php echo url('blog/add'); ?>">
                                <button type="button" class="btn btn-primary ">
                                    <i class="fa fa-align-center"></i> &nbsp; 添加博客
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th width="4%">ID</th>
                                    <th width="6%">分类ID</th>
                                    <th width="6%">用户名</th>
                                    <th>标题</th>
                                    <th>标题图</th>
                                    <th>关键词</th>
                                    <th>描述</th>
                                    <th width="4%">点击</th>
                                    <th width="10%">创建时间</th>
                                    <th width="10%">修改时间</th>
                                    <th width="6%">是否开启</th>
                                    <th width="9%">操作</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php if(is_array($blogs) || $blogs instanceof \think\Collection || $blogs instanceof \think\Paginator): $i = 0; $__LIST__ = $blogs;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$blog): $mod = ($i % 2 );++$i;?>
                                    <tr>
                                        <td><?php echo $blog['id']; ?></td>
                                        <td class="text-nowrap"><?php echo $blog['cid']; ?></td>
                                        <td><?php echo $blog['uid']; ?></td>
                                        <td><?php echo substr($blog['title'],0,20); ?></td>
                                        <td><img src="<?php if($blog['img'] != ''): ?><?php echo $blog['img']; else: ?>/static/public/zanwutupian.png<?php endif; ?>" width="70px"></td>
                                        <td><?php echo substr($blog['keywords'],0,20); ?></td>
                                        <td><?php echo $blog['des']; ?></td>
                                        <td><?php echo $blog['click']; ?></td>
                                        <td><?php echo date("Y-m-d H:i:s", $blog['c_time']); ?></td>
                                        <td><?php echo date("Y-m-d H:i:s", $blog['u_time']); ?></td>
                                        <td><button class="btn btn-rounded btn-danger btn-sm"><?php if($blog['is_open'] == 'on'): ?>开启<?php else: ?>未开启 <?php endif; ?></button></td>
                                        <td>
                                            <a href="<?php echo url('edit', array('id'=>$blog['id'])); ?>"><button class="btn  btn-sm btn-primary">修改</button></a>
                                            <a href="<?php echo url('del', array('id'=>$blog['id'])); ?>" onclick="return confirm('确定是否删除该信息？')"><button class="btn btn-sm btn-secondary">删除</button></a>
                                        </td>
                                    </tr>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </tbody>
                            </table>
                        </div>
                         <div style="text-align: center;"><?php echo $blogs->render(); ?></div>
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