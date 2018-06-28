<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>@yield('title') - SAM</title>

    {{-- Required meta attributes for Cross-Browser Support --}}
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- Required meta attributes ends --}}

    {{-- CSRF Token (Required by Laravel to authenticate users) --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- CSRF Token Field ends--}}

    {{-- Semantic-UI --}}
    <link href="{{ asset('semantic/semantic.css') }}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="{{ asset('semantic/semantic.js') }}"></script>
    {{-- Semantic-UI ends --}}

    {{-- simditor --}}
    <link href="{{ asset('simditor/styles/simditor.css') }}" type="text/css" rel="stylesheet">
    {{-- simditor ends --}}

</head>
<body>
    <div class="ui attached stackable menu" style="font-size:1.4em;">
        <div class="ui container">
            <a href="{{ url('/') }}" class="header item">
                <img src="/images/logo.svg" width="30" height="30" alt="SAM">
                &nbsp;&nbsp;SAM
            </a>

            {{-- Only logged in users can view --}}
            @if (!Auth::guest() && Auth::user()->group >= 0)
                {{-- 投票 --}}
                <a href="{{ url('vote') }}" class="item">
                    <i class="chart bar icon"></i>{{ trans('nav.vote') }}
                </a>
                {{-- 预约 --}}
                <a href="{{ url('resource') }}" class="item">
                    <i class="calendar icon"></i>{{ trans('nav.reservation') }}
                </a>
                {{-- 社团 --}}
                <a href="{{ url('org') }}" class="item">
                    <i class="coffee icon"></i>{{ trans('org.org') }}
                </a>
            @endif

            <div class="right menu">
                {{-- Only non-logged in users can view --}}
                @if (Auth::guest())
                    {{-- 登录 --}}
                    <a class="item" href="{{ route('login') }}">
                        <i class="sign in alternate icon"></i>{{ trans('login.login') }}
                    </a>
                    {{-- 注册 --}}
                    <a class="item" href="{{ route('register') }}">
                        <i class="user plus icon"></i>{{ trans('login.register') }}
                    </a>
                @else
                    <div class="ui simple dropdown item">
                        {{ Auth::user()->name }}<i class="dropdown icon"></i>
                        <div class="menu">
                            @if (Auth::user()->group >= 0)
                                {{-- SWFLA students only：用户中心 --}}
                                <a class="item" href="{{ URL::action('HomeController@index') }}">
                                    <i class="user icon"></i>{{ trans('nav.dashboard') }}
                                </a>
                            @endif
                            {{-- 登出（通过csrf_field form进行） --}}
                            <a class="item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                <i class="sign out alternate icon"></i>{{ trans('nav.logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </div>
                    </div>
                @endif
            </div>

        </div>
    </div>

@yield('content')
<br />
<div class="ui three column stackable grid container">
    <div class="column" style="padding-bottom:0!important;">
        <div class="ui basic segment" style="padding-bottom:0!important;">
            <span style="font-weight:bold;font-size:1.05em">关注我们</span>
            <br>
            <span>微信公众号：Computerization</span>
        </div>
    </div>
    <div class="column" style="padding-bottom:0!important;">
        <div class="ui basic segment"  style="padding-bottom:0!important;">
            <span style="font-weight:bold;font-size:1.05em">开放源代码</span>
            <br>
            <a href="https://github.com/computerization/sam">
                <i class="fitted github icon"></i>: Computerization/SAM
            </a>
        </div>
    </div>
    <div class="column">
        <div class="ui basic segment">
            <p>
                <span style="font-weight:bold;font-size:1.05em">SAM v2018.06</span><br>
                (C)Computerization 2014-2018
            </p>
        </div>
</div>

    <!-- Scripts -->

    {{-- simditor Scripts Here --}}
    <script src="{{ asset('simditor/scripts/module.min.js') }}"></script>
    <script src="{{ asset('simditor/scripts/hotkeys.min.js') }}"></script>
    <script src="{{ asset('simditor/scripts/uploader.min.js') }}"></script>
    <script src="{{ asset('simditor/scripts/simditor.min.js') }}"></script>
    {{-- simditor Scripts Here --}}

    {{-- Page Custom Scripts Here --}}
    @yield('scripts')
    {{-- Page Custom Scripts Ends --}}

</body>
</html>