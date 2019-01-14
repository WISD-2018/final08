@extends('member.layouts.master')

@section('title', '書本管理')

@section('content')
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                書本管理 <small>我的書本列表</small>
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-edit"></i> 書本管理
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <div class="row" style="margin-bottom: 20px; text-align: right">
        <div class="col-lg-12">
            <a href="{{ route('product.add') }}" class="btn btn-success">再賣一本書</a>
        </div>
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th width="40" style="text-align: center">#</th>
                        <th width="200" style="text-align: center">圖</th>
                        <th width="200" style="text-align: center">書名</th>
                        <th width="200" style="text-align: center">class</th>
                        <th width="200" style="text-align: center">project</th>
                        <th width="200" style="text-align: center">price</th>
                        <th width="70" style="text-align: center">操作</th>
                        <th width="70" style="text-align: center">操作</th>
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
                            <td style="text-align: center">{{$product->price}}</td>
                            <td style="text-align: center">
                                <a href="{{route('product.edit',$product->id)}}">編輯</a>
                            </td>
                            <td style="text-align: center">
                                <form action="{{ route('product.destroy', $product->id) }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}

                                    <button class="btn btn-link">刪除</button>
                                </form>
                            </td>
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
    <!-- /.row -->
@endsection
