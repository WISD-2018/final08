
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

<div style="padding-top: 70px;"></div>
<div class="row">
    <div class="col-lg-12">
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th width="40" style="text-align: center">#</th>
                    <th width="200" style="text-align: center">圖</th>
                    <th width="200" style="text-align: center">書名</th>
                    <th width="200" style="text-align: center">科目</th>
                    <th width="200" style="text-align: center">學校</th>
                    <th  style="text-align: center">說明</th>
                    <th width="200" style="text-align: center">價格</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                    <tr>
                        <td><a href="{{route('product.buy',$product->id)}}">買</a></td>
                        <td style="text-align: center"><img src="{{$product->image}}"width="80" height="40"></td>
                        <td style="text-align: center">{{$product->name}}</td>
                        <td style="text-align: center">{{$product->class}}</td>
                        <td style="text-align: center">{{$product->project}}</td>
                        <td style="text-align: center">{{$product->word}}</td>
                        <td style="text-align: center">{{$product->price}}</td>
                    </tr>

                @endforeach

                </tbody>

            </table>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
        </div>
    </div>
</div>

