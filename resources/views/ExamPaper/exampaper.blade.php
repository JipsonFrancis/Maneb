@extends('components.layout')
@section('addCss')

@section('title', 'Maneb')
@section('content')

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
                                        <img src="{{asset('asset/images/qr-code.png')}}" alt="">
                                    </div>
                                </td>
                                <td>{{$exampaper->created_at}}</td>
                                <td class="column6">
                                    <div class="action-column-buttons">
                                        <button><img src="{{asset('asset/images/edit.png')}}" alt=""></button>
                                        <button><img src="{{asset('asset/images/delete.png')}}" alt=""></button>
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
        
    </div>
</body>

@endsection