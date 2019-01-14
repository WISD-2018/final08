@extends('member.layouts.master')

@section('title', '修改本書')

@section('content')
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                修改本書 <small>請輸入修改內容</small>
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-edit"></i> 書本管理
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    @include('member.layouts.partials.validation')

    <!-- /.row -->

    <div class="row">
        <div class="col-lg-12">


            <form action="/product/{{$products->id}}" method="POST" role="form" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}
                <div class="form-group">
                    <label>user_id：</label>
                    <input name="users_id" class="form-control"  value="{{ Auth::user()->id }}">
                </div>
                <div class="form-group">
                    <label>書名：</label>
                    <input name="name" class="form-control"  value="{{$products->name}}" >
                </div>
                <div class="form-group">
                    <label>價格：</label>
                    <input name="price" class="form-control" value="{{$products->price}}" >
                </div>
                <div class="form-group">
                    <label>class：</label>
                    <input name="class" class="form-control"  value="{{$products->class}}">
                </div>
                <div class="form-group">
                    <label>project：</label>
                    <input name="project" class="form-control" value="{{$products->project}}">
                </div>
                <div class="form-group">
                    <label>說明：</label>
                    <textarea name="word" class="form-control" rows="3" >{{$products->word}}</textarea>
                </div>
                <div class="form-group" style="padding-top:10px;">
                    <label for="image">換圖片</label>
                    <input type="file" id="image" name="image" accept="image/*">

                    <p class="help-block">圖片檔 ( jpeg, png, bmp, gif, svg ) </p>
                </div>

                <div class="text-right">
                    <button type="submit" class="btn btn-success">修改</button>
                </div>

                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>

            </form>
        </div>
    </div>
    <!-- /.row -->
@endsection


