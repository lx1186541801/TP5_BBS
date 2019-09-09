<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:58:"D:\WWW\tp5\public/../application/admin\view\blog\edit.html";i:1567966505;s:49:"D:\WWW\tp5\application\admin\view\Layout\app.html";i:1567925615;s:52:"D:\WWW\tp5\application\admin\view\Layout\header.html";i:1567977333;s:50:"D:\WWW\tp5\application\admin\view\Layout\left.html";i:1567976953;}*/ ?>
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


<link href="/static/ueditor/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="/static/ueditor/third-party/jquery.min.js"></script>
<script type="text/javascript" charset="utf-8" src="/static/ueditor/umeditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/static/ueditor/umeditor.min.js"></script>
<script type="text/javascript" src="/static/ueditor/lang/zh-cn/zh-cn.js"></script>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header bg-light">
                                <div style="float:left;">
		                            修改博客
		                        </div>
		                        
		                        <div class="text-right" style="float:right;">
		                            <a href="<?php echo url('blog/index'); ?>">
		                                <button type="button" class="btn btn-primary ">
		                                    <i class="fa fa-align-center"></i> &nbsp; 返  &nbsp; 回
		                                </button>
		                            </a>
		                        </div>
                            </div>
							<form action="" method="post" name="myform" enctype="multipart/form-data">
								<input type="hidden" name="id" value="<?php echo $blog['id']; ?>">
								<div class="card-body">
	                                <div class="row mt-4">
	                                	<div class="col-md-8">
											<div class="form-group">
	                                            <label for="single-select">选择分类</label>
	                                            <select id="single-select" class="form-control" name="cid">
	                                            	<?php if(is_array($cates) || $cates instanceof \think\Collection || $cates instanceof \think\Paginator): $i = 0; $__LIST__ = $cates;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;?>
	                                                <option value="<?php echo $cate['id']; ?>" <?php if($cate['id'] == $blog['cid']): ?>selected="selected"<?php endif; ?>><?php echo $cate['catename']; ?></option>
	                                                <?php endforeach; endif; else: echo "" ;endif; ?>
	                                            </select>
	                                        </div>
                                        </div>
                                    </div>

	                                <div class="row mt-4">
	                                    <div class="col-md-8">
	                                        <div class="form-group">
	                                            <label for="required-input" class="require">标题</label>
	                                            <input id="required-input" name="title" class="form-control" value="<?php echo $blog['title']; ?>">
	                                        </div>
	                                    </div>
	                                </div>

	                                <div class="row mt-4">
	                                    <div class="col-md-8">
	                                        <div class="form-group">
	                                            <label for="help-text-input" class="form-control-label">关键词</label>
	                                            <input id="help-text-input" name="keywords" class="form-control" placeholder="" value="<?php echo $blog['keywords']; ?>">
	                                            <small class="form-text">关键词用来检索同类文章 词与词之间用空格隔开</small>
	                                        </div>
	                                    </div>
	                                </div>

	                                <div class="row mt-4">
	                                    <div class="col-md-8">
	                                        <div class="form-group">
	                                            <label for="help-text-input" class="form-control-label">标题图</label>
	                                            <input id="help-text-input" name="img" class="form-control" placeholder="" type="file">
	                                            <img src="<?php echo $blog['img']; ?>" width="400px" alt="">
	                                        </div>
	                                    </div>
	                                </div>

	                                <div class="row mt-4">
	                                    <div class="col-md-8">
	                                        <div class="form-group">
	                                            <label for="help-text-input" class="form-control-label require" >内容</label>
	                                            <script type="text/plain" id="myEditor" name="content" style="width:1000px;height:240px;"><?php echo $blog['content']; ?></script>
	                                        </div>
	                                    </div>
	                                </div>

	                                
	                                <div class="row mt-4">
		                                <div class="col-md-3">
	                                        <div class="toggle-switch" data-ts-color="primary">
	                                            <label for="ts2" class="ts-label">是否开启</label>
	                                            <input id="ts2" type="checkbox" name="is_open"hidden="hidden"  <?php if($blog['is_open'] == 'on'): ?>checked="checked"<?php endif; ?> >
	                                            <label for="ts2" class="ts-helper"></label>
	                                        </div>
	                                    </div>
									</div>
									<div class="my-4">
										
		                            	<button type="submit" class="btn btn-block btn-primary">添 &nbsp; &nbsp;加</button>
		                            	
	                            		<button type="button" onclick="history.go(-1)" class="btn btn-block btn-secondary">返 &nbsp; &nbsp;回</button>
		                            </div>
	                            </div>


							</form>
                            
                        </div>
                    </div>
                </div>

               
            </div>
        </div>
<script type="text/javascript">
    //实例化编辑器
    var um = UM.getEditor('myEditor');
    um.addListener('focus',function(){
        $('#focush2').html('')
    });
    
</script>

</div>
<script src="/static/admin/js/jquery.min.js"></script>
<script src="/static/admin/js/popper.min.js"></script>
<script src="/static/admin/js/bootstrap.min.js"></script>
<script src="/static/admin/js/chart.min.js"></script>
<script src="/static/admin/js/carbon.js"></script>
<script src="/static/admin/js/demo.js"></script>
</body>
</html>