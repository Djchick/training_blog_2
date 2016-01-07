<html>
<head>
    <title>Training Blog</title>
    {!! Html::style('css/stylesheet.css') !!}
    {!! Html::style('css/bootstrap.min.css') !!}
    {!! HTML::script('js/jquery.min.js') !!}
    {!! HTML::script('js/bootstrap.min.js') !!}
</head>
<body>
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="pull-left" href="#"><img src="/img/logo.png"></a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav">
                        </ul> 
                        <ul class="nav navbar-nav navbar-right">
                            @if (Auth::guest())
                                <li><a href="/auth/register">{!! trans('messages.register') !!}</a></li>
                                <li><a href="/auth/login">{!! trans('messages.login') !!}</a></li>
                                <li>{!! link_to('/language/bn', 'বাংলা', array('class' => 'btn btn-info')) !!}</li>
                                <li>{!! link_to('/language/en', 'English', array('class' => 'btn btn-info')) !!}</li>
                            @else
                                <li class="navbar-text"><i class="fa fa-btn fa-user"></i>{{ Auth::user()->name }}</li>
                                <li><a href="/auth/logout">{!! trans('messages.login') !!}</a></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        @yield('menu')
        <div>
            @yield('content')
        </div>
    </div>
</body>
</html>
