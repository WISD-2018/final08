@foreach($users as $user)
    <table  style="border:3px #FFAC55 solid;padding:5px;" rules="all" cellpadding='5';>
    <tr>
              <td> 使用者姓名 </td>
                <td> {{$user->name}}</td>
        </td>



            </tr>

        <tr>
        <td>使用者email </td>
        <td> {{$user->email}}</td>
        </tr>

    </table>

    <p>
@endforeach
       現在使用者姓名 -> {{ Auth::user()->name }} <span class="caret"></span>