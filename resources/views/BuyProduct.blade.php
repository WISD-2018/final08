<form action="{{ route('order.store') }}" method="POST" role="form">
    {{ csrf_field() }}

請確認你的購買資訊<br>
  書名--  {{$products->name}}<br>
    class-- {{$products->class}}<br>
    project-- {{$products->project}}<br>
    word-- {{$products->word}}

    <br>
    <div class="row control-group">
        <div class="form-group col-xs-12 floating-label-form-group controls">
            users_id <input type="users_id" class="form-control" placeholder="users_id" name="users_id" value="{{ Auth::user()->id }}">
        </div>
    </div>
    <br>
    <div class="row control-group">
        <div class="form-group col-xs-12 floating-label-form-group controls">
            products_id <input type="products_id" class="form-control" placeholder="products_id" name="products_id"  value="{{$products->id}}">
        </div>
    </div>
    <br>
    <div class="row control-group">
        <div class="form-group col-xs-12 floating-label-form-group controls">
            價格<input type="total" class="form-control" placeholder="價格" name="total" value="{{$products->price}}">
        </div>
    </div>
    <br>



    <div class="form-group col-xs-12">
        <input type="submit" value="確定" >
    </div>
</form>