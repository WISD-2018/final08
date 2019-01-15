
<style>
    .ta {
        position: absolute;
        left: 50px;
        top:50px;
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

    .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
    }

</style>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">

        <form class="navbar-form navbar-left"  >
            <div class="form-group.top">

                <a class="navbar-brand" >二手書交易平台</a>
                <input type="text" class="form-control" name="keyword" placeholder="搜尋">

                <button type="submit" class="btn btn-default" >搜尋</button>

            </div>
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

<div class = "a">
    <div class="form-group">
        <label>輸入科目名稱</label>
        <input name="subject" class="form-control" placeholder="請輸入科目" >
    </div>
    <div class="form-group">
        <label>輸入學校名稱</label>
        <input name="school" class="form-control" placeholder="請輸入學校" >
    </div>

    <div class="text-right">
        <button type="submit" class="btn btn-success" href="{{route('project.class2')}}"> 確定 </button>
    </div>

</div>

