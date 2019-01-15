@extends('member.layouts.master')

@section('title', '確認你的購買資訊')

@section('content')
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                確認你的購買資訊 <small>請確認你的購買資訊</small>
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-edit"></i> 確認你的購買資訊
                </li>
            </ol>
        </div>
    </div>
    <style type="text/css">
        input {border:1px solid #c00;}
        input {star : expression(
expression(
expression(
expression(
onmouseover=function(){this.style.borderColor="#ffffff"},
onmouseout=function(){this.style.borderColor="#ffffff"}))))}
    </style>
    <!-- /.row -->

    @include('member.layouts.partials.validation')

    <!-- /.row -->

    <div class="row">
        <div class="col-lg-12">
            <labe3>請確認你的購買資訊</labe3><br>
            <labe2>書名--  {{$products->name}}</labe2><br>

            <labe2>科目-- {{$products->class}}</labe2><br>

            <labe2>學校-- {{$products->project}}</labe2><br>
            <form action="{{ route('order.store') }}" method="POST" role="form">
                {{ csrf_field() }}


                <div class="form-group">
                    <label>user_id：</label>
                    <input name="users_id" class="form-control"  value="{{ Auth::user()->id }}" readonly>
                </div>
                <div class="form-group">
                    <label>products_id：</label>
                    <input name="products_id" class="form-control"  value="{{$products->id}}" readonly>
                </div>
                <div class="form-group">
                    <label>價格：</label>
                    <input name="total" class="form-control"  value="{{$products->price}}" readonly>
                </div>


                <div class="text-right">
                    <button type="submit" class="btn btn-success">確認</button>
                </div>

                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>

            </form>
        </div>
    </div>
    <!-- /.row -->
@endsection


