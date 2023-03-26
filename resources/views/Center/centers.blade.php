@extends('component.layout')
@section('addCss')

@section('title', 'Management')
@section('content')


<body style="height:100vh">

    <h2 style="float:right; background-color:#4D4DFF; margin-left:2px"> 
        <form method="POST" action="{{ route('centers.store') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="name" value="Place X">
            <input type="hidden" name="invigilator" value="2">
            <input type="hidden" name="type" value="school">
            <input type="hidden" name="longitude" value="-14.546562">
            <input type="hidden" name="latitude" value="25.6546546">
            <button type="submit">Center</button>
        </form>
    </h2>

    @foreach ( $centers as $center)
        <div style="border: 2px solid black; margin-top:2px;">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRFUr6lsDwuA7dtDvU8HzskKTPw3VL4xKkpa3xc1eGrOjXlYOvxwer-Oab0JTXUte1TOFs&usqp=CAU" alt="Avatar" style="width:10%">
            <a style="float:right">Detail</a>
            <div>
                <h4><b>{{$center->name}}</b></h4>
                <p>invigilator:{{$center->head->name}}</p>
                <p>type:{{$center->type}}</p>
                <p>longitude:{{$center->longitude}}</p>
                <p>latitude:{{$center->latitude}}</p>
                <div>
                    <ol>

                        <li>
                            <form method="POST" action="{{ route('centers.update', $center->id) }}">
                                <input type="hidden" name="_method" value="PUT">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button type="submit">update</button>
                            </form>
                        </li>

                        <li>
                            <form method="POST" action="{{ route('centers.destroy', $center->id) }}">
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