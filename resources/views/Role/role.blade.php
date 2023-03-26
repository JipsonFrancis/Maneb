@extends('component.layout')
@section('addCss')

@section('title', 'Management')
@section('content')


<body style="height:100vh">

    <h2 style="float:right; background-color:#4D4DFF; margin-left:2px"> 
        <form method="POST" action="{{ route('roles.store') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="name" value="Cement">
            <input type="hidden" name="category_id" value="2">
            <input type="hidden" name="warehouse_id" value="1">
            <input type="hidden" name="price" value="25000">
            <input type="hidden" name="quantity" value="25">
            <button type="submit">Commodity</button>
        </form>
    </h2>

    @foreach ( $roles as $role)
        <div style="border: 2px solid black; margin-top:2px;">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRFUr6lsDwuA7dtDvU8HzskKTPw3VL4xKkpa3xc1eGrOjXlYOvxwer-Oab0JTXUte1TOFs&usqp=CAU" alt="Avatar" style="width:10%">
            <a style="float:right">Detail</a>
            <div>
                <h4><b>{{$role->name}}</b></h4>
                <p>Category:{{$role->name}}</p>
                <p>price:{{$role->name}}</p>
                @if ( $role->name != 0 )
                    <p style="color:green">quantity:{{$role->name}}</p>
                @else
                    <p style="color:red">quantity:Out Stock</p>
                @endif
                <div>
                    <ol>
                        <li>
                            <form method="POST" action="{{ route('roles.update', $role->id) }}">
                                <input type="hidden" name="_method" value="PUT">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button type="submit">update</button>
                            </form>
                        </li>

                        <li>
                            <form method="POST" action="{{ route('roles.destroy', $role->id) }}">
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button type="submit">delete</button>
                            </form>
                        </li>

                    </ol>
                </div>
            </div>
        </div>
    @endforeach



    @section('footerScripts')
        @parent
        <!-- <script src="{{asset('boot/js/AJAX.js')}}"></script> -->
    @endsection
</body>

@endsection