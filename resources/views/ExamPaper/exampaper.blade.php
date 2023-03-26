@extends('component.layout')
@section('addCss')

@section('title', 'Management')
@section('content')


<body style="height:100vh">

    <h2 style="float:right; background-color:#4D4DFF; margin-left:2px"> 
    <form method="POST" action="{{ route('exams.store') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="name" value="Cement">
            <input type="hidden" name="exam_id" value="2">
            <input type="hidden" name="subject_id" value="1">
            <input type="hidden" name="invigilator" value="25">
            <input type="hidden" name="paper_number" value="2">
            <input type="hidden" name="date" value="">
            <button type="submit">Exam Paper</button>
        </form>
    </h2>

    @foreach ( $exampapers as $exampaper)
        <div style="border: 2px solid black; margin-top:2px;">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRFUr6lsDwuA7dtDvU8HzskKTPw3VL4xKkpa3xc1eGrOjXlYOvxwer-Oab0JTXUte1TOFs&usqp=CAU" alt="Avatar" style="width:10%">
            <a style="float:right">Detail</a>
            <div>
                <h4><b>{{$exampaper->name}}</b></h4>
                <p>Paper:{{$exampaper->exam->name}}</p>
                <p>Paper Number:{{$exampaper->paper_number}}</p>
                <p>Subject:{{$exampaper->subject->name}}</p>
                <p>invigilator:{{$exampaper->head->name}}</p>
                <p>date:{{$exampaper->date}}</p>
                <div>
                    <ol>

                        <li>
                            <form method="POST" action="{{ route('exampapers.update', $exampaper->id) }}">
                                <input type="hidden" name="_method" value="PUT">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button type="submit">update</button>
                            </form>
                        </li>

                        <li>
                            <form method="POST" action="{{ route('exampapers.destroy', $exampaper->id) }}">
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