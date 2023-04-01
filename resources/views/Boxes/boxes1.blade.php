@extends('component.layout')
@section('addCss')

@section('title', 'Management')
@section('content')

<body style="height:100vh">

    <h2 style="float:right; background-color:#4D4DFF; margin-left:2px"> 
        <form method="POST" action="{{ route('blackboxes.store') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="name" value="Likuni">
            <input type="hidden" name="QR" value="/example.com/2/5">
            <input type="hidden" name="transit_id" value="1">
            <input type="hidden" name="initial_location" value="10">
            <input type="hidden" name="current_location" value="15">
            <input type="hidden" name="destination" value="25">
            <button type="submit">Box</button>
        </form>
    </h2>

    @foreach ( $boxes as $box)
        <div style="border: 2px solid black; margin-top:2px;">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRFUr6lsDwuA7dtDvU8HzskKTPw3VL4xKkpa3xc1eGrOjXlYOvxwer-Oab0JTXUte1TOFs&usqp=CAU" alt="Avatar" style="width:10%">
            <a style="float:right">Detail</a>
            <div>
                <h4><b>{{$box->name}}</b></h4>
                <p>QR:{{$box->QR}}</p>
                @if ( $box->transit)
                    <p style="color:green">Transit:{{$box->transit->name}}</p>
                @else
                    <p style="color:red">Box is not moving</p>
                @endif
                <div>
                    <ol>

                        <li>
                            <form method="POST" action="{{ route('blackboxes.update', $box->id) }}">
                                <input type="hidden" name="_method" value="PUT">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button type="submit">update</button>
                            </form>
                        </li>

                        <li>
                            <form method="POST" action="{{ route('blackboxes.destroy', $box->id) }}">
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