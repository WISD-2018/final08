<form action="{{ route('product.store') }}" method="POST" role="form">
    {{csrf_field()}}

    <br>
    <div class="row control-group">
        <div class="form-group col-xs-12 floating-label-form-group controls">
            <input type="users_id" class="form-control" placeholder="users_id" name="users_id" value="{{ Auth::user()->id }}">
        </div>
    </div>
    <br>
    <div class="row control-group">
        <div class="form-group col-xs-12 floating-label-form-group controls">
            <input type="name" class="form-control" placeholder="書名" name="name" >
        </div>
    </div>
    <br>
    <div class="row control-group">
        <div class="form-group col-xs-12 floating-label-form-group controls">
            <input type="price" class="form-control" placeholder="價格" name="price">
        </div>
    </div>
    <br>
    <div class="row control-group">
        <div class="form-group col-xs-12 floating-label-form-group controls">
            <input type="class" class="form-control" placeholder="類別" name="class">
        </div>
    </div>
    <br>

    <div class="row control-group">
        <div class="form-group col-xs-12 floating-label-form-group controls">
            <input type="project" class="form-control" placeholder="項目" name="project">
        </div>
    </div>
    <br>
    <div class="row control-group">
        <div class="form-group col-xs-12 floating-label-form-group controls">
            <input type="word" class="form-control" placeholder="說明" name="word">
        </div>
    </div>
    <div class="form-group col-xs-12">
        <input type="submit" value="送出" >
    </div>
</form>