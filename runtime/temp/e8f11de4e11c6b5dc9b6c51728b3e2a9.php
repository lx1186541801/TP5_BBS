<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:62:"D:\WWW\tp5\public/../application/index\view\user\register.html";i:1568015512;s:55:"D:\WWW\tp5\application\index\view\Layout\app_login.html";i:1568014612;}*/ ?>
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





<body>
<div class="page-wrapper flex-row align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card p-4">
                    <div class="card-header text-center text-uppercase h4 font-weight-light">
                        Register
                    </div>
					<form action="" method="post">
	                    <div class="card-body py-5">
	                        <div class="form-group">
	                            <label class="form-control-label">用户名</label>
	                            <input type="name" class="form-control" name="username">
	                        </div>

	                        <div class="form-group">
	                            <label class="form-control-label">昵称</label>
	                            <input type="name" class="form-control" name="nickname">
	                        </div>

	                        <div class="form-group">
	                            <label class="form-control-label">密码</label>
	                            <input type="password" class="form-control" name="n_password">
	                        </div>

	                        <div class="form-group">
	                            <label class="form-control-label">密码确认</label>
	                            <input type="password" class="form-control" name="n_password_2">
	                        </div>
	                    </div>

	                    <div class="card-footer">
	                        <button type="submit" class="btn btn-success btn-block">Create Account</button>
	                    </div>
                    </form>
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