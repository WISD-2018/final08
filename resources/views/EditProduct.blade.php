<form action="/product/{{$products->id}}" method="POST" role="form">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}
    <div class="row control-group">
        <div class="form-group col-xs-12 floating-label-form-group controls">
            <input type="id" class="form-control" placeholder="id" name="id"  value="{{$products->id}}">
        </div>
    </div>
    <br>

    <div class="row control-group">
        <div class="form-group col-xs-12 floating-label-form-group controls">
            <input type="user_id" class="form-control" placeholder="user_id" name="user_id" value="{{$products->users_id}}">
        </div>
    </div>
    <br>
    <div class="row control-group">
        <div class="form-group col-xs-12 floating-label-form-group controls">
            <input type="name" class="form-control" placeholder="name" name="name"  value="{{$products->name}}">
        </div>
    </div>
    <br>
    <div class="row control-group">
        <div class="form-group col-xs-12 floating-label-form-group controls">
            <input type="price" class="form-control" placeholder="價格" name="price" value="{{$products->price}}">
        </div>
    </div>
    <br>
    <div class="row control-group">
        <div class="form-group col-xs-12 floating-label-form-group controls">
            <input type="class" class="form-control" placeholder="類別" name="class" value="{{$products->class}}">
        </div>
    </div>
    <br>

    <div class="row control-group">
        <div class="form-group col-xs-12 floating-label-form-group controls">
            <input type="project" class="form-control" placeholder="項目" name="project" value="{{$products->project}}">
        </div>
    </div>
    <br>
    <div class="row control-group">
        <div class="form-group col-xs-12 floating-label-form-group controls">
            <input type="word" class="form-control" placeholder="說明" name="word" value="{{$products->word}}">
        </div>
    </div>
    <div class="form-group col-xs-12">
        <input type="submit" value="修改" >
    </div>
</form>