<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{ route('member') }}">會員</a>


    </div>
    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">
        <li class="dropdown">
            <a href="/" ><i class="fa fa-home"></i> 首頁 <b ></b></a>
        </li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {{ Auth::user()->name }} <b class="caret"></b></a>
            <ul class="dropdown-menu">

                <li class="divider"></li>
                <li>
                    <a href="{{ route('logout') }}"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                </li>
            </ul>
        </li>

    </ul>
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li class="active">
                <a href="{{ route('member') }}"><i class="fa fa-fw fa-dashboard"></i> 會員頁面</a>
            </li>
            <li >
                <a href="{{ route('product.add') }}"><i class="fa fa-fw fa-plus-square"></i> 我要賣書</a>
            </li>
            <li>
                <a href="{{ route('product.show') }}"><i class="fa fa-fw fa-edit"></i> 書本管理</a>
            </li>
            <li>
                <a href="{{ route('order.show') }}"><i class="fa fa-fw fa-reorder"></i> 購買紀錄</a>
            </li>
        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>
