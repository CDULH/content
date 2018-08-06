<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>{{$title}}</title>
	<style>
		* {
			-webkit-box-sizing: border-box;
			-moz-box-sizing: border-box;
			box-sizing: border-box;
			margin: 0;
			padding: 0;
		}
		
		html, body {
			height: 100%;
		}
		
		body {
			color: #646464;
			background-color: #f5f5f5;
		}
		
		.container {
			width: 390px;
			position: absolute;
			top: 50%;
			left: 0;
			right: 0;
			padding: 15px;
			margin: auto;
		}
		
		.form-group {
			margin-bottom: 20px;
		}
		
		.form-control {
			height: 50px;
			color: #646464;
			border: 1px solid #e6e6e6;
			border-radius: 3px;
			display: block;
			width: 100%;
			padding: 6px 12px;
			font-size: 14px;
			line-height: 1.42857143;
		}
		
		.form-control:focus {
			border-color: #cccccc;
			background-color: #fcfcfc;
			outline: 0;
		}
		
		.form-inline .form-control {
			display: inline-block;
			width: 183px;
			vertical-align: middle;
		}
		
		#verify {
			width: 140px;
			height: 50px;
			vertical-align: middle;
		}
		
		.panel {
			margin-bottom: 20px;
			background-color: #fff;
			border: 1px solid #f0f0f0;
			border-radius: 3px;
		}
		
		.panel-heading {
			font-size: 24px;
			color: #646464;
			background-color: #f9f9f9;
			padding: 10px 15px;
			border-bottom: 1px solid #f0f0f0;
			border-top-left-radius: 3px;
			border-top-right-radius: 3px;
		}
		
		.panel-body {
			padding: 15px;
		}
		
		fieldset {
			min-width: 0;
			padding: 0;
			margin: 0;
			border: 0;
		}
		
		.btn-success {
			color: #ffffff;
			background-color: #46c37b;
			border-color: #34a263;
		}
		
		.btn {
			font-weight: 600;
			border-radius: 2px;
			-webkit-appearance: button;
			cursor: pointer;
			border: 0;
			outline: 0;
		}
		
		.btn-block {
			display: block;
			width: 100%;
		}
		
		.btn-lg, .btn-group-lg > .btn {
			padding: 10px 16px;
			font-size: 18px;
			line-height: 1.3333333;
		}
	</style>
</head>

<body>
<div class="container">
	<div style="margin-top: -50%">
		<div>
			<div class="login-panel panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">{{$title}}</h3>
				</div>
				<div class="panel-body">
					<fieldset>
						<div class="form-group">
							<input class="form-control" placeholder="帐号" name="account" type="text" autofocus>
						</div>
						<div class="form-group">
							<input class="form-control" placeholder="密码" name="password" type="password" value="">
						</div>
						{{csrf_field()}}
						{{--<div class="form-group form-inline">
							<input class="form-control" placeholder="验证码" name="verify" type="text" value="">
							<img id="verify" src="" onclick="refirshVerify()"/>
						</div>--}}
						<input type="submit" name="submit" class="btn btn-lg btn-success btn-block" value="登录"/>
					</fieldset>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="/mg/js/jquery.js"></script>
<script type="text/javascript">
    function refirshVerify() {
        $("#verify").attr("src", "{{url('admin/code/captcha')}}" + "/" + Math.round(Math.random()*100000));
    }

    $(function () {
        refirshVerify();

        $('input[name="submit"]').click(function () {
            var account = $('input[name="account"]').val(),
                password = $('input[name="password"]').val(),
            verify = $('input[name="verify"]').val();

            if (!account) {
                return alert('帐号不能为空');
            }
            if (!password || password.length < 6) {
                return alert('密码有误');
            }
            /*if (!verify || verify.length != 5) {
                return alert('验证码有误');
            }*/
            $.ajax({
                url: '{{url("admin/login/login")}}',
                type: 'post',
                data: {username: account, password: password, verify: verify},
                dataType: 'json',
                cache: false,
                success: function (data) {
                    if (data && data.code == 0) {
                        alert('登录成功');
                        location.href = '{{url("admin")}}';
                    } else {
                        alert(data && data.msg ? data.msg : '登录失败');
                        refirshVerify();
                    }
                }
            });
            return false;
        });
    });
</script>

</body>
</html>