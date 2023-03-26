@extends('component.layout')
@section('addCss')

@section('title', 'Management')
@section('content')


<body style="height:100vh">

    <h2 style="float:right; background-color:#4D4DFF; margin-left:2px"> 
        <form method="POST" action="{{ route('packets.store') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="name" value="Mathematics II collection">
            <input type="hidden" name="exam_paper" value="2">
            <input type="hidden" name="blackbox_id" value="1">
            <input type="hidden" name="QR" value="example/com/4/5">
            <input type="hidden" name="initial_location" value="25">
            <input type="hidden" name="destination" value="15">
            <button type="submit">Packet</button>
        </form>
    </h2>

    @foreach ( $packets as $packet)
        <div style="border: 2px solid black; margin-top:2px;">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRFUr6lsDwuA7dtDvU8HzskKTPw3VL4xKkpa3xc1eGrOjXlYOvxwer-Oab0JTXUte1TOFs&usqp=CAU" alt="Avatar" style="width:10%">
            <a style="float:right">Detail</a>
            <div>
                <h4><b>{{$packet->name}}</b></h4>
                <p>QR:{{$packet->QR}}</p>
                <p>Paper:{{$packet->paper->name}}</p>
                <p>From:{{$packet->origin->name}}</p>
                <p>To:{{$packet->endLocation->name}}</p>
                @if ( $packet->box )
                    <p style="color:green">Box:{{$packet->box->name}}</p>
                @else
                    <p style="color:red">not Shipped</p>
                @endif
                <div>
                    <ol>

                        <li>
                            <form method="POST" action="{{ route('packets.update', $packet->id) }}">
                                <input type="hidden" name="_method" value="PUT">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button type="submit">update</button>
                            </form>
                        </li>

                        <li>
                            <form method="POST" action="{{ route('packets.destroy', $packet->id) }}">
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