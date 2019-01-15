<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <a class="navbar-brand" >二手書交易平台</a>
            <form class="navbar-form navbar-left" >
                <div class="form-group">
                    <input type="text" class="form-control" name="keyword" placeholder="搜尋">
                </div>
                <button type="submit" class="btn btn-default" >搜尋</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                @if (Route::has('login'))
                    <div class="top-right links">
                        @auth商品
                            <a href="{{ url('/home') }}">Home</a>
                        @else
                            <a href="{{ route('login') }}">登入</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">註冊</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </ul>
        </div>
    </nav>


        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                    二手書交易平台
                </div>

                <div class="links">
                    <a>所有書籍</a>
                    <a>找查書籍</a>
                    <a href="{{ route('member') }}">會員中心</a>
                    <a>系統公告</a>

                </div>
            </div>
        </div>

    </body>
</html>
