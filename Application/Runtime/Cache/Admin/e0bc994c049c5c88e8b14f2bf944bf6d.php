<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/Public/Admin/css/base.css" />
    <link rel="stylesheet" href="/Public/Admin/css/login.css" />
    <title>注册</title>
    <style type="text/css">
        .login1 .login-top {
            margin: 0 auto;
            width: 623px;
            height: 65px;
            line-height: 65px;
            font-size: 35px;
            color: #fff;
            font-family: '宋体';
            background: #287dc5;
        }
        
        .login1 .login-top span {
            margin-left: 15px;
        }
        
        .login1 .login-input {
            margin-top: 50px;
            padding-left: 142px;
        }
        
        .login1 .login-input p label {
            float: left;
            text-align: right;
            width: 75px;
            color: #000000;
            font-size: 16px;
        }
        
        .register {
            width: 160px;
            height: 25px;
            line-height: 25px;
            float: right;
            margin-top: 68px;
            font-size: 14px;
        }
        
        a:hover {
            color: red;
        }
    </style>
</head>

<body>
    <div id="container">
        <form action="<?php echo U('register');?>" method="post">
            <div id="bd">
                <div class="login1">
                    <div class="login-top"><span>用户注册</span></div>
                    <div class="login-input">
                        <p class="user ue-clear">
                            <label>用户名</label>
                            <input type="text" name="u_username" />
                        </p>
                        <p class="password ue-clear">
                            <label>密&nbsp;&nbsp;&nbsp;码</label>
                            <input type="password" name="u_password" />
                        </p>
                        <p class="password ue-clear">
                            <label>确认密码</label>
                            <input type="password" name="repassword" />
                        </p>
                    </div>
                    <div class="login-btn ue-clear">
                        <a href="javascript:;" class="btn">注册</a>
                    </div>
                    <div class="register">已有账号?&nbsp;<a href="<?php echo U('login');?>">返回登录</a></div>
                </div>
            </div>
        </form>
    </div>
</body>
<script type="text/javascript" src="/Public/Admin/js/jquery.js"></script>
<script type="text/javascript" src="/Public/Admin/js/common.js"></script>
<script type="text/javascript">
    var height = $(window).height();
    $("#container").height(height);
    $("#bd").css("padding-top", height / 2 - $("#bd").height() / 2);

    $(window).resize(function() {
        var height = $(window).height();
        $("#bd").css("padding-top", $(window).height() / 2 - $("#bd").height() / 2);
        $("#container").height(height);

    });

    $('#remember').focus(function() {
        $(this).blur();
    });

    $('#remember').click(function(e) {
        checkRemember($(this));
    });

    function checkRemember($this) {
        if (!-[1, ]) {
            if ($this.prop("checked")) {
                $this.parent().addClass('checked');
            } else {
                $this.parent().removeClass('checked');
            }
        }
    }

    //jQuery代码
    $(function() {
        //给登录按钮绑定点击事件
        $('.btn').on('click', function() {
            //事件处理程序
            $('form').submit();
        });
    });
</script>

</html>