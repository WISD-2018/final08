@extends('member.layouts.master')

@section('title', '再賣一本書')

@section('content')
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                上架書本 <small>請輸入書本內容</small>
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-edit"></i> 書本管理管理
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    @include('member.layouts.partials.validation')

    <!-- /.row -->

    <div class="row">
        <div class="col-lg-12">


            <form action="{{ route('product.store') }}" method="POST" role="form" enctype="multipart/form-data">
                {{csrf_field()}}

                <div class="form-group">
                    <label>user_id：</label>
                    <input name="users_id" class="form-control"  value="{{ Auth::user()->id }}" readonly>
                </div>
                <div class="form-group">
                    <label>書名：</label>
                    <input name="name" class="form-control" placeholder="請輸入書名" >
                </div>
                <div class="form-group">
                    <label>價格：</label>
                    <input name="price" class="form-control" placeholder="請輸入價格" >
                </div>

                <div class="form-group">
                    <label>學校：</label><br>
                    <Select name=project style="width: 300px;" >
                        <Option Value="勤益科技大學">勤益科技大學</Option>
                        <Option Value="中臺科技大學">中臺科技大學</Option>
                        <Option Value="東海大學">東海大學</Option>
                        <Option Value="其他">其他</Option>
                    </Select>
                </div>
                <div class="form-group">
                    <label>科目：</label><br>
                <Select name=class style="width: 300px;" >
                    <Option Value="數學">數學</Option>
                    <Option Value="國文">國文</Option>
                    <Option Value="國文">英文</Option>
                    <Option Value="計算機概論">計算機概論</Option>
                    <Option Value="統計學">統計學</Option>
                    <Option Value="其他">其他</Option>
                </Select>
                </div>



                <div class="form-group">
                    <label>說明：</label>
                    <textarea name="word" class="form-control" rows="3"></textarea>
                </div>

                <div class="form-group" style="padding-top:10px;">
                    <label for="image">存入圖片</label>
                    <input type="file" id="image" name="image" accept="image/*">

                    <p class="help-block">圖片檔 ( jpeg, png, bmp, gif, svg ) </p>
                </div>

                <div class="text-right">
                    <button type="submit" class="btn btn-success">新增</button>
                </div>

                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>

            </form>
        </div>
    </div>
    <!-- /.row -->
@endsection

