<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// [ 应用入口文件 ]

// 定义应用目录
define('APP_PATH', __DIR__ . '/../application/');

// 开启调试模式
define('APP_DEBUG', true);
// 加载框架引导文件
require __DIR__ . '/../thinkphp/start.php';


/*
	自动生成1
 */
// 读取自动生成定义文件

// $build = include '../build.php';

// 运行自动生成
// \think\Build::run($build);


// 不依赖自动生成文件 直接使用默认的生成模块
// \think\Build::module('admin');