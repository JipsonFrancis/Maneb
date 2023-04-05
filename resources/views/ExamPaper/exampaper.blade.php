@extends('components.layout')
@section('addCss')

@section('title', 'Maneb')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script
    src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"
    integrity="sha512-CNgIRecGo7nphbeZ04Sc13ka07paqdeTu0WR1IM4kNcpmBAUSHSQX0FslNhTDadL4O5SAGapGt4FodqL8My0mA=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
    ></script>

<body>
    <div class="full-app-container">
        <x-nav />

        <div class="container-main-area-dashboad">
            <x-search />

            <div class="table-container">
                <table>
                    <thead>
                        <tr class="table-head">
                            <th class="column1">Subject Id</th>
                            <th class="column2">Exam Id</th>
                            <th class="column3">Paper name</th>
                            <th class="column4">QR Code</th>
                            <th class="column5">Date Added</th>
                            <th class="column6">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $exampapers as $exampaper )
                            <tr>
                                <td class="column1">{{$exampaper->subject->id}}</td>
                                <td class="column1">{{$exampaper->exam->id}}</td>
                                <td class="column1">{{$exampaper->name}}</td>
                                <td class="column4">
                                    <div class="qr-picture-column">
                                        <img class="QR-code" src="{{asset('asset/images/qr-code.png')}}">
                                    </div>
                                    <x-QR_Code />
                                </td>
                                <td>{{$exampaper->created_at}}</td>
                                <td class="column6">
                                    <div class="action-column-buttons">
                                        <form method="POST" action="{{ route('exampapers.update', $exampaper->id) }}">
                                            <input type="hidden" name="_method" value="PUT">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <button><img src="{{asset('asset/images/edit.png')}}" alt=""></button>
                                        </form>
                                        <form method="POST" action="{{ route('exampapers.destroy', $exampaper->id) }}">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <button type="submit"><img src="{{asset('asset/images/delete.png')}}" alt=""></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        <!-- <tr>
                            <td class="column1">EG/02/02</td>
                            <td class="column2">EX/007</td>
                            <td class="column3">English Literature</td>
                            <td class="column4">
                                <div class="qr-picture-column">
                                    <img src="../assets/images/qr-code.png" alt="">
                                </div>
                            </td>
                            <td class="column5">
                                03/03/2023
                            </td>
                            <td class="column6">
                                <div class="action-column-buttons">
                                    <button><img src="../assets/images/edit.png" alt=""></button>
                                    <button><img src="../assets/images/delete.png" alt=""></button>
                                </div>
                            </td>
                        </tr> -->
                    </tbody>
                </table>
            </div>
        </div>

        <button class="add-item-action paper-modal">
            <img src="{{asset('asset/images/plus (1).png')}}">
        </button>

        <div class="modal-users-overlay overlay-paper">
            <div class="users-modal">
                <div class="top-section-modal">
                    <p class="add-user">Add Paper</p>
                    <img class="close-paper-modal" src="{{asset('asset/images/plus (1).png')}}" alt="">
                </div>
                <form method="POST" action="{{ route('exams.store') }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="textboxcontainer">
                        <label for="name">Subject name</label>
                        <input type="text" name="name" id="" placeholder="name">
                    </div>

                    <div class="textboxcontainer">
                        <label for="name">Exam ID</label>
                        <input type="text" name="exam_id" id="" placeholder="exam_id">
                    </div>

                    <div class="textboxcontainer">
                        <label for="name">Subject ID</label>
                        <input type="text" name="subject_id" id="" placeholder="subject_id">
                    </div>

                    <div class="textboxcontainer">
                        <label for="name">Paper #</label>
                        <input type="number" name="paper_number" id="paper_number" placeholder="paper_number">
                    </div>

                    <div class="textboxcontainer">
                        <label for="name">invigilator</label>
                        <input type="text" name="invigilator" id="invigilator" placeholder="invigilator">
                    </div>

                    <div class="textboxcontainer">
                        <label for="name">date</label>
                        <input type="date" name="date" id="date" placeholder="date">
                    </div>

                    <button type="submit">Exam Paper</button>
                </form>

            </div>
        </div>
        
    </div>
</body>
<script src="{{asset('js/paper.js')}}"></script>
@endsection