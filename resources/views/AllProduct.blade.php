@foreach($products as $product)
            <tr>
                <table  style="border:3px #FFAC55 solid;padding:5px;" rules="all" cellpadding='5';>
                    <td>{{$product->name}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->class}}</td>
                    <td>{{$product->project}}</td>
                    <td>{{$product->word}}</td>

                    <td><a href="{{route('product.edit',$product->id)}}">編輯</a></td>
                    <td>
                        <form action="{{ route('product.destroy', $product->id) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}

                            <button class="btn btn-link">刪除</button>
                        </form>


                    </td>
                    <td><a href="{{route('product.buy',$product->id)}}">買</a></td>
                </table>

            </tr>
          <p>
@endforeach