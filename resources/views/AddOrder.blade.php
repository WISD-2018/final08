<form action="{{ route('order.store') }}" method="POST" role="form">
    {{ csrf_field() }}


    <br>
    <div class="row control-group">
        <div class="form-group col-xs-12 floating-label-form-group controls">
            <input type="users_id" class="form-control" placeholder="users_id" name="users_id" >
        </div>
    </div>
    <br>
    <div class="row control-group">
        <div class="form-group col-xs-12 floating-label-form-group controls">
            <input type="products_id" class="form-control" placeholder="products_id" name="products_id" >
        </div>
    </div>
    <br>
    <div class="row control-group">
        <div class="form-group col-xs-12 floating-label-form-group controls">
            <input type="total" class="form-control" placeholder="價格" name="total" >
        </div>
    </div>
    <br>



    <div class="form-group col-xs-12">
        <input type="submit" value="Add" >
    </div>
</form>