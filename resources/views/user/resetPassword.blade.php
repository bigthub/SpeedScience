<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="{{app()->getLocale()}}">
<!--<![endif]-->

<head>
    <meta charset="utf-8" />
    <title>重置密码</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="/assets/global/css/components-rounded.min.css" rel="stylesheet" id="style_components" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="/assets/pages/css/login-2.min.css" rel="stylesheet" type="text/css" />
    <link href="/css/project.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <!-- END THEME LAYOUT STYLES -->
    <link rel="shortcut icon" href="{{asset('favicon.png')}}" />
</head>

<body class=" login">
<!-- BEGIN LOGO -->
<div class="logo">
    <a href="{{url('/')}}" class="logo-font">{{$app_config['website_name']}}</a>
</div>
<!-- END LOGO -->
<!-- BEGIN LOGIN -->
<div class="content">
    <nav style="padding-bottom: 20px;text-align: center;">
        @if(app()->getLocale() == 'zh-CN')
            <a href="{{url('lang', ['locale' => 'zh-tw'])}}">繁體中文</a>
            <a href="{{url('lang', ['locale' => 'en'])}}">English</a>
            <a href="{{url('lang', ['locale' => 'ja'])}}">日本語</a>
            <a href="{{url('lang', ['locale' => 'ko'])}}">한국어</a>
        @elseif(app()->getLocale() == 'zh-tw')
            <a href="{{url('lang', ['locale' => 'zh-CN'])}}">简体中文</a>
            <a href="{{url('lang', ['locale' => 'en'])}}">English</a>
            <a href="{{url('lang', ['locale' => 'ja'])}}">日本語</a>
            <a href="{{url('lang', ['locale' => 'ko'])}}">한국어</a>
        @elseif(app()->getLocale() == 'en')
            <a href="{{url('lang', ['locale' => 'zh-CN'])}}">简体中文</a>
            <a href="{{url('lang', ['locale' => 'zh-tw'])}}">繁體中文</a>
            <a href="{{url('lang', ['locale' => 'ja'])}}">日本語</a>
            <a href="{{url('lang', ['locale' => 'ko'])}}">한국어</a>
        @elseif(app()->getLocale() == 'ko')
            <a href="{{url('lang', ['locale' => 'zh-CN'])}}">简体中文</a>
            <a href="{{url('lang', ['locale' => 'zh-tw'])}}">繁體中文</a>
            <a href="{{url('lang', ['locale' => 'en'])}}">English</a>
            <a href="{{url('lang', ['locale' => 'ja'])}}">日本語</a>
        @elseif(app()->getLocale() == 'ja')
            <a href="{{url('lang', ['locale' => 'zh-CN'])}}">简体中文</a>
            <a href="{{url('lang', ['locale' => 'zh-tw'])}}">繁體中文</a>
            <a href="{{url('lang', ['locale' => 'en'])}}">English</a>
            <a href="{{url('lang', ['locale' => 'ko'])}}">한국어</a>
        @else
        @endif
    </nav>
    @if (Session::get('errorMsg'))
        <div class="alert alert-danger">
            <button class="close" data-close="alert"></button>
            <span> {{Session::get('errorMsg')}} </span>
        </div>
    @endif
    @if (Session::get('successMsg'))
        <div class="alert alert-success">
            <button class="close" data-close="alert"></button>
            <span> {{Session::get('successMsg')}} </span>
        </div>
    @endif
    <!-- BEGIN FORGOT PASSWORD FORM -->
    <form class="forget-form" action="{{url('resetPassword')}}" method="post" style="display: block;">
        @if($is_reset_password)
            <div class="form-title">
                <span class="form-title">{{trans('home.reset_password_title')}}</span>
            </div>
            <div class="form-group">
                <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="" name="username" value="{{Request::old('username')}}" required autofocus />
                <input type="hidden" name="_token" value="{{csrf_token()}}" />
            </div>
        @else
            <div class="alert alert-danger">
                <span> {{trans('home.system_down')}} </span>
            </div>
        @endif
        <div class="form-actions">
            <button type="button" class="btn btn-default" onclick="login()">{{trans('register.back')}}</button>
            @if($is_reset_password)
                <button type="submit" class="btn red uppercase pull-right">{{trans('register.submit')}}</button>
            @endif
        </div>
    </form>
    <!-- END FORGOT PASSWORD FORM -->
</div>

<!-- END LOGIN -->
<!--[if lt IE 9]>
<script src="/assets/global/plugins/respond.min.js"></script>
<script src="/assets/global/plugins/excanvas.min.js"></script>
<script src="/assets/global/plugins/ie8.fix.min.js"></script>
<![endif]-->
<script src="/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/assets/global/scripts/app.min.js" type="text/javascript"></script>
<script type="text/javascript">
    // 登录
    function login() {
        window.location.href = '{{url('login')}}';
    }
</script>
<!-- 统计 -->
{{ $app_config['website_analytics'] }}
<!-- 客服 -->
{{ $app_config['website_customer_service'] }}
</body>

</html>