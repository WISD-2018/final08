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

    <!-- /.row -->

    @include('member.layouts.partials.validation')

    <!-- /.row -->

    <div class="row">
        <div class="col-lg-12">
            <font color="#737373" size="6" face="微軟正黑體"><b>請確認你的購買資訊</b></font><br><br>
            <font color="#737373" size="5" face="微軟正黑體"><b>書名--  {{$products->name}}</b></font><br><br>
            <font color="#737373" size="5" face="微軟正黑體"><b>科目-- {{$products->class}}</b></font><br><br>
            <font color="#737373" size="5" face="微軟正黑體"><b>學校-- {{$products->project}}</b></font><br><br>
            <font color="#737373" size="5" face="微軟正黑體"><b>價格-- {{$products->price}}</b></font><br><br>
            <form action="{{ route('order.store') }}" method="POST" role="form">
                {{ csrf_field() }}
                <div class="container">
                    <div class="form-group">

                        <input type="hidden" name="users_id" class="form-control"  style="border: 0; background-color:white " value="{{ Auth::user()->id }}" readonly>
                    </div>
                    <div class="form-group">

                        <input type="hidden" name="products_id" class="form-control"  style="border: 0; background-color:white" value="{{$products->id}}" readonly>
                    </div>
                    <div class="form-group">

                        <input type="hidden" name="total" class="form-control"  style="border: 0; background-color:white" value="{{$products->price}}" readonly>
                    </div>


                    <div class="text-right">
                        <button type="submit" class="btn btn-success">確認</button>
                    </div>
                </div>



                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>

            </form>
        </div>
    </div>
    <!-- /.row -->
@endsection


