所有order
<tr>
    <table  style="border:3px #FFAC55 solid;padding:5px;" rules="all" cellpadding='5';>
        <td>id</td>
        <td>users_id</td>
        <td>products_id</td>
        <td>total</td>

    </table>

</tr>
@foreach($orders as $order)
    <tr>
        <table  style="border:3px #FFAC55 solid;padding:5px;" rules="all" cellpadding='5';>
            <td>{{$order->id}}</td>
            <td>{{$order->users_id}}</td>
            <td>{{$order->products_id}}</td>
            <td>{{$order->total}}</td>

        </table>

    </tr>
    <p>
@endforeach